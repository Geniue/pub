<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Ticket;
use App\Models\TicketDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $state_minimum=[0,163,225,267,412,1551];
    protected $state_maximum=[163,225,267,412,1551,1862];
    protected $state_subtract_from_net=[0,163,225,267,412,1551];
    protected $state_multiply_result=[0.04,0.045,0.0525,0.059,0.0609,0.0641];
    protected $state_add_this_to_result=[0,6.54,9.31,11.54,20.04,89.42];
    protected $federal_minimum=[0,238,428];
    protected $federal_maximum=[238,428,1010];
    protected $federal_add_this_to_wage=[0.00,0.00,19];
    protected $federal_plus_difference_upper_limit_times_this=[0,0.10,0.12];
    protected $city_minimum=[0,50,96,100,105,110,115,120,125,130,135,140,145,150,160,170,180,190,200,210,220,230,240,250,260,270,280,290,300,310,320,330,340,350,360,370,380,390,400,410,420,430,440,450,460,470,480,490,500,510,520,530,540,550,560,570,580,590,600,610,620,630,640,650,660,670,680,690,700,710,720,730,740,750,760,770,780,790,800,810,820,830,840,850,860,870,880,890,900,910,920,930,940,950,960,970,980,990,1000,1010,1020,1030,1040,1050,1060,1070,1080,1090,1100,1110,1120,1130,1140,1150,1160,1170,1180,1190];
    protected $city_maximum=[50,96,100,105,110,115,120,125,130,135,140,145,150,160,170,180,190,200,210,220,230,240,250,260,270,280,290,300,310,320,330,340,350,360,370,380,390,400,410,420,430,440,450,460,470,480,490,500,510,520,530,540,550,560,570,580,590,600,610,620,630,640,650,660,670,680,690,700,710,720,730,740,750,760,770,780,790,800,810,820,830,840,850,860,870,880,890,900,910,920,930,940,950,960,970,980,990,1000,1010,1020,1030,1040,1050,1060,1070,1080,1090,1100,1110,1120,1130,1140,1150,1160,1170,1180,1190,1200];
    protected $city_wh=[0,0,0.05,0.15,0.25,0.35,0.45,0.55,0.65,0.75,0.85,0.95,1.05,1.2,1.4,1.6,1.8,2.05,2.25,2.45,2.65,2.85,3.05,3.6,3.9,4.25,4.55,4.9,5.2,5.55,5.85,6.2,6.55,6.85,6.8,7.15,7.5,7.85,8.25,8.65,9.05,9.45,9.85,10.25,10.65,11.05,11.45,11.8,12.2,12.6,13,13.4,13.8,14.2,14.6,15,15.4,15.8,16.2,16.65,17.05,17.45,17.9,18.3,18.7,19.15,19.55,19.95,20.35,20.8,21.2,21.6,22.05,22.45,22.85,23.3,23.7,24.1,24.5,24.95,25.35,25.75,26.2,26.6,27,27.45,27.85,28.25,28.65,29.1,29.5,29.9,30.35,30.75,31.15,31.6,32,32.4,32.8,33.25,33.65,34.05,34.5,34.9,35.3,35.75,36.15,36.55,36.95,37.4,37.8,38.2,38.65,39.05,39.45,39.9,40.3,40.7];
    public function index()
    {
        $user=Auth::user();
        if(Auth::user()->is_admin==1){
            $tickets=Ticket::with('ticketdetail','attachments')->get();
        }else{
            $tickets=Ticket::with('ticketdetail','attachments')->where('user_id',Auth::id())->get();
        }
       return view('tickets.index',compact('tickets','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=Auth::user();
        $gas_price=User::where('is_admin',1)->first();
        $employee_mpg=User::where('id',Auth::id())->first();
        return view('tickets.create',compact('gas_price','employee_mpg','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gas_price=User::where('is_admin',1)->first();
        try {
            $ticket = new Ticket();
            $ticket->ticket_number = Str::uuid()->toString();
            $ticket->user_id = Auth::id();
            $ticket->save();
            $ticketDetail=new TicketDetail();
            $ticketDetail->total_amount=$request->total_amount;
            $ticketDetail->number_miles=$request->number_miles;
            $ticketDetail->gas_price=$gas_price->gas_price;
            $ticketDetail->toll_garage_parking=$request->toll_garage_parking;
            $ticketDetail->total_expense=$gas_price->gas_price+$request->toll_garage_parking;
            $ticketDetail->tip=$request->tip;
            $ticketDetail->ticket_id=$ticket->id;
            $ticketDetail->save();
            if ($request->hasFile('attachment') && sizeof($request->attachment)>0) {
                foreach($request->attachment as $attachment){
                    $newAttachment=new Attachment();
                    $newAttachment->ticket_id=$ticket->id;
                $file_extension = $attachment->getClientOriginalExtension();
                $filename = Str::random(50).'-'.$ticket->ticket_number.'.'. $file_extension;
                \Storage::disk('attachments')->put($filename, \File::get($attachment));
                $newAttachment->name = $filename;
                $newAttachment->save();
                }
            }
            $total_expense=$gas_price->gas_price+$request->toll_garage_parking;
            if(($request->total_amount-$total_expense) < 130){
                $employee_wages_pre_tax=($request->total_amount-$total_expense)/2+$request->tip;
            }elseif(($request->total_amount-$gas_price->gas_price+$request->toll_garage_parking)*0.25 < 65){
                $employee_wages_pre_tax=65+$request->tip;
            }else{
                $employee_wages_pre_tax=($request->total_amount-$total_expense)*0.25+$request->tip;
            }
            $ticketDetail->employee_wage_pre_tax=$employee_wages_pre_tax;
            $ticketDetail->save();
            if($employee_wages_pre_tax<$this->federal_maximum[1]){
             if($employee_wages_pre_tax<$this->federal_maximum[0]) {
                 $val=$this->federal_add_this_to_wage[0]+($employee_wages_pre_tax-$this->federal_minimum[0])*$this->federal_plus_difference_upper_limit_times_this[0];
             }else{
                 $val=$this->federal_add_this_to_wage[0]+($employee_wages_pre_tax-$this->federal_minimum[0])*$this->federal_plus_difference_upper_limit_times_this[1];
             }
            }else{
                $val=$this->federal_add_this_to_wage[2]+($employee_wages_pre_tax-$this->federal_minimum[2])*$this->federal_plus_difference_upper_limit_times_this[2];
            }
            return redirect()->back();
        }catch(\Exception $e){
        return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket=Ticket::with('attachments','ticketdetail')->where('ticket_number',$id)->first();
        return view('tickets.show',compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket=Ticket::with('attachments','ticketdetail')->where('ticket_number',$id)->first();
        return view('tickets.edit',compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        $gas_price=User::where('is_admin',1)->first();
        try {
            $ticketDetail=TicketDetail::where('ticket_id',$ticket->id);
            $ticketDetail->total_amount=$request->total_amount;
            $ticketDetail->number_miles=$request->number_miles;
            $ticketDetail->gas_price=$gas_price->gas_price;
            $ticketDetail->toll_garage_parking=$request->toll_garage_parking;
            $ticketDetail->total_expense=$gas_price->gas_price+$request->toll_garage_parking;
            $ticketDetail->tip=$request->tip;
            $ticketDetail->save();
            if ($request->hasFile('attachment') && sizeof($request->attachment)>0) {
                foreach($request->attachment as $attachment){
                    $newAttachment=new Attachment();
                    $newAttachment->ticket_id=$ticket->id;
                    $file_extension = $attachment->getClientOriginalExtension();
                    $filename = Str::random(50).'-'.$ticket->ticket_number.'.'. $file_extension;
                    \Storage::disk('attachments')->put($filename, \File::get($attachment));
                    $newAttachment->name = $filename;
                    $newAttachment->save();
                }
            }
            $total_expense=$gas_price->gas_price+$request->toll_garage_parking;
            if(($request->total_amount-$total_expense) < 130){
                $employee_wages_pre_tax=($request->total_amount-$total_expense)/2+$request->tip;
            }elseif(($request->total_amount-$gas_price->gas_price+$request->toll_garage_parking)*0.25 < 65){
                $employee_wages_pre_tax=65+$request->tip;
            }else{
                $employee_wages_pre_tax=($request->total_amount-$total_expense)*0.25+$request->tip;
            }
            $ticketDetail->employee_wage_pre_tax=$employee_wages_pre_tax;
            $ticketDetail->save();
            if($employee_wages_pre_tax<$this->federal_maximum[1]){
                if($employee_wages_pre_tax<$this->federal_maximum[0]) {
                    $val=$this->federal_add_this_to_wage[0]+($employee_wages_pre_tax-$this->federal_minimum[0])*$this->federal_plus_difference_upper_limit_times_this[0];
                }else{
                    $val=$this->federal_add_this_to_wage[0]+($employee_wages_pre_tax-$this->federal_minimum[0])*$this->federal_plus_difference_upper_limit_times_this[1];
                }
            }else{
                $val=$this->federal_add_this_to_wage[2]+($employee_wages_pre_tax-$this->federal_minimum[2])*$this->federal_plus_difference_upper_limit_times_this[2];
            }
            return redirect()->back();
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        
    }
}
