<?php

namespace App\Http\Controllers;

use Event;
use App\Events\SendMail;
use App\Models\Invoice;
use App\Models\InvoiceInfo;
use App\Models\InvoiceItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\Info;
use PDF;

class InvoiceController extends Controller
{
    use Info;
    public function __construct(){
        $this->user = Auth::user();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user->is_admin==1){
            $invoices=Invoice::all();
        }else{
            $invoices=Invoice::where('user_id',$user->id)->get();
        }
        return view('invoices.index',compact('invoices','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('invoices.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try{
            $invoice=new Invoice();
            $invoice->user_id=Auth::id();
            $invoice->notes=$request->notes;
            $invoice->save();
            $this->storeInfo($invoice,$request);
            $message="Invoice Generated successfully";
            $type="success";
            return redirect()->back()->with(['message'=>$message,'type'=>$type]);
        }catch(\Exception $e){
            $message=$e->getMessage();
            $type="error";
            return redirect()->back()->with(['message'=>$message,'type'=>$type]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        return view('invoices.show',compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        $user=Auth::user();
        if($user->is_admin==1) {
            $items = InvoiceItem::where('invoice_id', $invoice->id)->get();
            $info = InvoiceInfo::where('invoice_id', $invoice->id)->first();
            return view('invoices.edit', compact('items', 'info', 'invoice','user'));
        }elseif($user->is_admin==2 && $invoice->user_id==$user->id){
            $items = InvoiceItem::where('invoice_id', $invoice->id)->get();
            $info = InvoiceInfo::where('invoice_id', $invoice->id)->first();
            return view('invoices.edit', compact('items', 'info', 'invoice','user'));
        }else{
            return redirect()->back()->with(['message'=>'You dont have permission to Modify Invoice','status'=>'info']);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        try{
            $invoice->user_id=Auth::id();
            $invoice->notes=$request->notes;
            $invoice->save();
            $this->updateInfo($invoice,$request);
            $message="Invoice Updated successfully";
            $type="success";
            return redirect()->back()->with(['message'=>$message,'type'=>$type]);
        }catch(\Exception $e){
            $message=$e->getMessage();
            $type="error";
            return redirect()->back()->with(['message'=>$message,'type'=>$type]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
    public function getsubtotal(Request $request){
        $paymentmethods=[
            'Venmo'=>2.9,
            'CreditCard'=>3.5,
            'Paypal'=>0,
            'Zelle'=>0,
            'Cash'=>0,
            'Check'=>0
        ];
        $subtotalmain=0;
        foreach ($request->fixed_price as $subtotal){
            $subtotalmain+=$subtotal;
        }
        $surchages=0;
        if($request->has('payment_method') && $request->payment_method!=null && $request->payment_method!='') {
            $value = $paymentmethods[$request->payment_method];
            if ($value) {
                $surchages = ($value / 100) * $subtotalmain;
            }
        }
        $data=['subtotalmain'=>$subtotalmain,'surchages'=>$surchages];
        return $data;
    }


}
