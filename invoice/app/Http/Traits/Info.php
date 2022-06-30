<?php


namespace App\Http\Traits;

use App\Events\SendMail;
use App\Models\Expense;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use Carbon\Carbon;
use App\Models\InvoiceInfo;
use PDF;
trait Info
{
    public function storeInfo($invoice,$request){
            $invoiceinfo=new InvoiceInfo();
            $invoiceinfo->invoice_id=$invoice->id;
            $invoiceinfo->charge_to=$request->charge_to;
            $invoiceinfo->charge_phone=$request->charge_phone;
            $invoiceinfo->send_to=$request->send_to;
            $invoiceinfo->send_copy_to=$request->send_copy_to;
            $invoiceinfo->invoice_no=$request->invoice_no;
            $invoiceinfo->payment_method=$request->payment_method;
            $invoiceinfo->start_date=Carbon::parse($request->start_date)->toDateString();
            $invoiceinfo->save();
            $this->storeitems($invoice,$request);
    }
    public function storeitems($invoice,$request){
        $sum=0;
        $surchages=0;
        foreach($request->item_name as $key=>$value){
            $invoiceitem=new InvoiceItem();
            $invoiceitem->item_name=$request->item_name[$key];
            $invoiceitem->package=strval($request->package[$key]);
            $invoiceitem->fixed_price=$request->fixed_price[$key];
            $invoiceitem->invoice_id=$invoice->id;
            $invoiceitem->save();
            $sum+=$request->subtotal[$key];
        }
        $paymentmethods=[
            'Venmo'=>2.9,
            'CreditCard'=>3.5,
            'Paypal'=>0,
            'Zelle'=>0,
            'Cash'=>0,
            'Check'=>0
        ];
        if($request->has('payment_method') && $request->payment_method!=null && $request->payment_method!='') {
            $value = $paymentmethods[$request->payment_method];
            if ($value!=0) {
                $surchages = ($value / 100) * $sum;
            }
        }
        $sum=$surchages+$sum;
        $this->grandTotal($invoice,$sum,$surchages,$request);
    }

    public function grandTotal($invoice,$sum,$surchages,$request){
        $invoice=Invoice::where('id',$invoice->id)->first();
        $invoice->grand_total=$sum;
        $invoice->surchages=$surchages;
        $invoice->save();
        if(\File::exists(public_path("generatepdf/$request->invoice_no"))){
            \File::delete(public_path("generatepdf/$request->invoice_no"));
            $filename=$this->generatepdf($invoice);
        }else{
            $filename=$this->generatepdf($invoice);
        }
        event(new SendMail($invoice,$filename));
    }
    public function updateInfo($invoice,$request){
        $invoiceinfo=InvoiceInfo::where('invoice_id',$invoice->id)->first();
        $invoiceinfo->invoice_id=$invoice->id;
        $invoiceinfo->charge_to=$request->charge_to;
        $invoiceinfo->charge_phone=$request->charge_phone;
        $invoiceinfo->send_to=$request->send_to;
        $invoiceinfo->send_copy_to=$request->send_copy_to;
        $invoiceinfo->invoice_no=$request->invoice_no;
        $invoiceinfo->payment_method=$request->payment_method;
        $invoiceinfo->start_date=Carbon::parse($request->start_date)->toDateString();
        $invoiceinfo->save();
        $this->updateItems($invoice,$request);
    }
    public function updateItems($invoice,$request){
        $sum=0;
        $invoiceitems=InvoiceItem::where('invoice_id',$invoice->id)->get();
        foreach($invoiceitems as $key=>$value) {
            $invoiceitem = InvoiceItem::where('id', $value->id)->first();
            if ($invoiceitem) {
                $invoiceitem->item_name=$request->item_name[$key];
                $invoiceitem->package=$request->package[$key];
                $invoiceitem->fixed_price=$request->fixed_price[$key];
                $invoiceitem->invoice_id=$invoice->id;
                $invoiceitem->save();
                $sum += $request->fixed_price[$key];
            } else {
                $invoiceitem = new InvoiceItem();
                $invoiceitem->item_name=$value;
                $invoiceitem->package=$request->package[$key];
                $invoiceitem->fixed_price=$request->fixed_price[$key];
                $invoiceitem->invoice_id=$invoice->id;
                $invoiceitem->save();
                $sum += $request->fixed_price[$key];
            }
        }
        $paymentmethods=[
            'Venmo'=>2.9,
            'CreditCard'=>3.5,
            'Paypal'=>0,
            'Zelle'=>0,
            'Cash'=>0,
            'Check'=>0
        ];
        if($request->has('payment_method') && $request->payment_method!=null && $request->payment_method!='') {
            $value = $paymentmethods[$request->payment_method];
            if ($value) {
                $surchages = ($value / 100) * $sum;
            }else{
                $surchages=0;
            }
        }
        $this->updategrandTotal($invoice,$sum,$surchages,$request);
    }
    public function updategrandTotal($invoice,$sum,$surchages,$request){
        $invoice=Invoice::where('id',$invoice->id)->first();
        $invoice->grand_total=$sum+$surchages;
        $invoice->surchages=$surchages;
        $invoice->save();
        if(\File::exists(public_path("generatepdf/$request->invoice_no"))){
            \File::delete(public_path("generatepdf/$request->invoice_no"));
            $filename=$this->generatepdf($invoice);
        }else{
            $filename=$this->generatepdf($invoice);
        }
        event(new SendMail($invoice,$filename));

    }

    public function generatepdf($invoice)
    {
        $invoice = Invoice::with('info','items')->where('id',$invoice->id)->first();
        $pdf = \PDF::loadView('emails.invoice', ['invoice'=>$invoice]);
        $pdf->setOptions(['isPhpEnabled' => true,'isRemoteEnabled' => true]);
        $filename = "Invoice-".$invoice->info->invoice_no.".pdf";
        $pdf->save('generatepdf/'.$filename);
        $pdf->download($filename);
        return $filename;

    }
}
