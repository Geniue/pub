<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function dashboard(){
        $user=Auth::user();
        if($user->is_admin==1){
            $invoices=Invoice::all();
            $new_invoices=Invoice::whereDate('created_at',Carbon::toDay())->get();
            $paid_invoices=Invoice::where('status',2)->get();
            $unpaid_invoices=Invoice::where('status',1)->get();
        }else{
            $invoices=Invoice::where('user_id',$user->id)->get();
            $new_invoices=Invoice::where('created_at',Carbon::toDay())->where('user_id',$user->id)->get();
            $paid_invoices=Invoice::where('status',2)->where('user_id',$user->id)->get();
            $unpaid_invoices=Invoice::where('status',1)->where('user_id',$user->id)->get();
        }
        return view('dashboard.index',compact('user','invoices','new_invoices','paid_invoices','unpaid_invoices'));
    }
    public function getDownload($id)
    {
        //PDF file is stored under project/public/download/info.pdf
        $invoice=Invoice::with('info')->where('id',$id)->first();
        $file= public_path(). "/generatepdf/Invoice-".$invoice->info->invoice_no.".pdf";
        $headers = array(
            'Content-Type: application/pdf',
        );
        return response()->download($file, $invoice->info->invoice_no.".pdf", $headers);
    }
}
