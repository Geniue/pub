@extends('dashboard.master')
@section('Title')
    Edit Invoice
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                            <li class="breadcrumb-item active">Invoice</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Invoice</h4>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    @if($errors->any())
                        {{ implode('', $errors->all('message')) }}
                    @endif
                    <form id="myform" action="{{route('invoices.update',$invoice->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body invoice-head">
                            <div class="row">
                                <div class="col-md-4 align-self-center">
                                    <img id="blah" src="{{asset('backend/images/logo.png')}}" alt="logo-large" class="logo-lg" height="50">
                                </div><!--end col-->
                                <div class="col-md-8">

                                    <ul class="list-inline mb-0 contact-detail float-right">
                                        <li class="list-inline-item">
                                            <div class="pl-3 d-flex">
                                                <i class="mdi mdi-web"></i>
                                                <p class="text-muted mt-2">https://pristinegreencleaning.com/</p>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="pl-3 d-flex">
                                                <i class="mdi mdi-phone"></i>
                                                <p class="text-muted mt-2">347-871-6530</p>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="pl-3 d-flex">
                                                <i class="mdi mdi-map-marker"></i>
                                                <p class="text-muted mt-2">
                                                    PristineGreen Upholstery and Carpet Cleaning
                                                    6705 Myrtle Ave #1015
                                                    Queens, NY 11385
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <h6 class="mb-0"><b>Start Date :</b> <input type="date" class="form-control" name="start_date" value="{{\Carbon\Carbon::parse($info->start_date)->toDateString()}}" ></h6>
                                </div>

                                <div class="col-md-12">
                                    <h6 class="mb-0"><b>Charge For :</b> <input type="text" class="form-control" name="charge_for" value="{{$info->charge_for}}"></h6>
                                    <h6 class="mb-0"><b>Charge To :</b> <input type="text" class="form-control" name="charge_to" placeholder="eg: James Jord" value="{{$info->charge_to}}"></h6>
                                    <h6 class="mb-0"><b>Send Invoice To :</b> <input type="email" class="form-control" name="send_to" placeholder="eg:abdulrehmankhan0072@gmail.com" value="{{$info->send_to}}"></h6>
                                    <h6 class="mb-0"><b>Send Invoice Copy :</b> <input type="email" class="form-control" name="send_copy_to" placeholder="eg:abdulrehmankhan0081@gmail.com" value="{{$info->send_copy_to}}"></h6>
                                    <h6 class="mb-0"><b>Invoice No :</b> <input type="text" class="form-control" name="invoice_no" value="{{$info->invoice_no}}" readonly></h6>
                                    <h6 class="mb-0"><b>Payment Method :</b> <select class="form-control paymentmethod" name="payment_method">
                                            <option value="">Select Payment Method</option>
                                            <option value="venmo" {{$info->payment_method=='venmo' ? 'selected' : ''}}>Venmo</option>
                                            <option value="creditcard" {{$info->payment_method=='creditcard' ? 'selected' : ''}}>Credit Card</option>
                                            <option value="paypal" {{$info->payment_method=='paypal' ? 'selected' : ''}}>Paypal</option>
                                            <option value="zelle" {{$info->payment_method=='zelle' ? 'selected' : ''}}>Zelle</option>
                                            <option value="cash" {{$info->payment_method=='cash' ? 'selected' : ''}}>Cash</option>
                                            <option value="check" {{$info->payment_method=='check' ? 'selected' : ''}}>Check</option>
                                        </select></h6>
                                </div><!--end col-->

                            </div><!--end row--><br>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive project-invoice">
                                        <table class="table table-bordered mb-0">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Project</th>
                                                <th>Package</th>
                                                <th>Price</th>
                                                <th>Subtotal</th>
                                                <th>Action</th>
                                            </tr><!--end tr-->
                                            </thead>
                                            <tbody class="appendData">
                                            @foreach($items as $item)
                                            <tr>
                                                <td>
                                                    <h5 class="mt-0 mb-1"><input type="text" class="form-control" name="item_name[]" placeholder="Service Provided" value="{{$item->item_name}}"></h5>
                                                </td>
                                                <td><select class="form-control" name="package[]" placeholder="Fixed price">
                                                        <option value="">Select Package</option>
                                                        <option value="premium" {{$item->package=='premium' ? 'selected' : ''}}>Premium</option>
                                                        <option value="gold" {{$item->package=='gold' ? 'selected' : ''}}>Gold</option>
                                                        <option value="goldplus" {{$item->package=='goldplus' ? 'selected' : ''}}>Gold Plus</option>
                                                    </select></td>
                                                <td><input type="number" class="form-control fixed_price" name="fixed_price[]" placeholder="Fixed price"  value="{{$item->fixed_price}}"></td>
                                                <td><input type="number" class="form-control subtotal" name="subtotal[]" readonly="readonly" value="{{$item->fixed_price}}"></td>
                                                <td class="d-flex" style="padding-top:50px;padding-bottom:50px;"><a href="javascript:void(0);" class="btn btn-danger add"><i class="fa fa-plus"></i> </a><a href="javascript:void(0);" class="btn btn-danger remove"><i class="fa fa-times"></i></a></td>
                                            </tr><!--end tr-->
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td colspan="2" class="border-0"></td>
                                                <td colspan="1" class="border-0"></td>
                                                <td class="border-0 font-14 text-dark"><b>Sub Total</b></td>
                                                <td class="border-0 font-14 text-dark"><b>$ <span class="main_sub_total">{{$invoice->items->sum('fixed_price')}}</span></b></td>
                                            </tr><!--end tr-->
                                            @if($invoice->surchages!=null)
                                            <tr class="showCharge">
                                                <td colspan="2" class="border-0"></td>
                                                <td colspan="1" class="border-0"></td>
                                                <td class="border-0 font-14 text-dark"><b>Electronic Surcharges</b></td>
                                                <td class="border-0 font-14 text-dark"><b><span class="surcharges">{{$invoice->surchages}}</span></b></td>
                                            </tr><!--end tr-->
                                            @else
                                                <tr class="showCharge">
                                                    <td colspan="2" class="border-0"></td>
                                                    <td colspan="1" class="border-0"></td>
                                                    <td class="border-0 font-14 text-dark"><b>Electronic Surcharges</b></td>
                                                    <td class="border-0 font-14 text-dark"><b><span class="surcharges">{{$invoice->surchages}}</span></b></td>
                                                </tr><!--end tr-->
                                            @endif
                                            <tr class="bg-black text-white">
                                                <th colspan="2" class="border-0"></th>
                                                <th colspan="1" class="border-0"></th>
                                                <td class="border-0 font-14"><b>Total</b></td>
                                                <td class="border-0 font-14"><b>$ <span class="grand_total">{{$invoice->grand_total}}</span></b></td>
                                            </tr><!--end tr-->
                                            </tfoot>
                                        </table><!--end table-->
                                    </div>  <!--end /div-->
                                </div>  <!--end col-->
                            </div><!--end row-->

                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <h5 class="mt-4">Notes :</h5>
                                    <ul class="pl-2 appendCondition">
                                        <li class="d-flex"><textarea name="notes" class="form-control" rows="5" cols="100" placeholder="notes">{{$invoice->notes}}</textarea></li>
                                    </ul>
                                </div> <!--end col-->

                            </div><!--end row-->
                            <hr>
                            <div class="row justify-content-center">
                                <div class="col-md-10 align-self-center">
                                    <div class="text-center"><small class="font-12">if you have any Questions about this invoice, please contact us at 347-871-6530 or sales@pristinegreencleaning.com<br>Thank you very much for doing business with us.</small></div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="float-right d-print-none">
                                        <a href="javascript:window.print()" class="btn btn-gradient-info"><i class="fa fa-print"></i></a>
                                        <input type="submit" class="btn btn-gradient-primary" name="Submit" value="Submit">
                                        <a href="#" class="btn btn-gradient-danger">Cancel</a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </form>
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->

    </div><!-- container -->
@endsection
@section('page_level_script')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(session('message'))

        <script>
            swal("", "{{ session('message') }}", "{{ session('type') }}");
        </script>
    @endif
    @if($invoice->surchages==null)
        <script>
        $('.showCharge').hide();
        </script>
    @endif
    <script type="text/javascript">
        $(document).on('keyup','.fixed_price',function (){
            let fixed_price=$(this).val();
            $(this).closest('tr').find('.subtotal').val(fixed_price);
            let myform = document.getElementById("myform");
            let fd = new FormData(myform);
            $.ajax({
                url:"{{route('getsubtotal1')}}",
                data: fd,
                cache: false,
                processData: false,
                contentType: false,
                type: 'post',
                success:function (data){
                    console.log(data);
                    $('.main_sub_total').text(data.subtotalmain);
                    $('.surcharges').text((data.surchages).toFixed(2));
                    let grand_total= (data.surchages) + (data.subtotalmain);
                    $('.grand_total').text(grand_total.toFixed(2));
                }
            })
        });
        $('.paymentmethod').change(function (){
            let method=$(this).val();
            if(method=='creditcard'){
                $('.showCharge').show();
            }else if(method=='venmo'){
                $('.showCharge').show();
            }else{
                $('.showCharge').hide();
            }
            let myform = document.getElementById("myform");
            let fd = new FormData(myform);
            $.ajax({
                url:"{{route('getsubtotal1')}}",
                data: fd,
                cache: false,
                processData: false,
                contentType: false,
                type: 'post',
                success:function (data){
                    console.log(data);
                    $('.main_sub_total').text(data.subtotalmain);
                    $('.surcharges').text((data.surchages).toFixed(2));
                    let grand_total= (data.surchages) + (data.subtotalmain);
                    $('.grand_total').text(grand_total.toFixed(2));
                }
            })
        });
        //remove row
        $(document).on('click','.remove',function (){
            $(this).closest("tr").remove();
            let myform = document.getElementById("myform");
            let fd = new FormData(myform);
            $.ajax({
                url:"{{route('getsubtotal1')}}",
                data: fd,
                cache: false,
                processData: false,
                contentType: false,
                type: 'post',
                success:function (data){
                    console.log(data);
                    $('.main_sub_total').text(data.subtotalmain);
                    let total=(data.surchages) + (data.subtotalmain);
                    $('.grand_total').text(total.toFixed(2));
                }
            })
        });
        //add row
        $(document).on('click','.add',function (){
            $('.appendData').append('<tr>' +
                '<td>' +
                '<h5 class="mt-0 mb-1"><input type="text" class="form-control" name="item_name[]" placeholder="Service Provided"></h5>' +
                '</td>' +
                '<td><select class="form-control" name="package[]" placeholder="Fixed price">' +
                '<option value="">Select Package</option>' +
                '<option value="premium">Premium</option>' +
                '<option value="gold">Gold</option>' +
                '<option value="goldplus">Gold Plus</option>' +
                '</select></td>' +
                '<td><input type="number" class="form-control fixed_price" name="fixed_price[]" placeholder="Fixed price"></td>' +
                '<td><input type="number" class="form-control subtotal" name="subtotal[]" readonly="readonly"></td>' +
                '<td class="d-flex" style="padding-top:50px;padding-bottom:50px;"><a href="javascript:void(0);" class="btn btn-danger add"><i class="fa fa-plus"></i> </a><a href="javascript:void(0);" class="btn btn-danger remove"><i class="fa fa-times"></i></a></td>' +
                '</tr>');
        });
       $(function () {
           let method=$('.paymentmethod').val();
           if(method=='creditcard'){
               $('.showCharge').show();
           }else if(method=='venmo'){
               $('.showCharge').show();
           }else{
               $('.showCharge').hide();
           }
           let myform = document.getElementById("myform");
           let fd = new FormData(myform);
           $.ajax({
               url:"{{route('getsubtotal1')}}",
               data: fd,
               cache: false,
               processData: false,
               contentType: false,
               type: 'post',
               success:function (data){
                   console.log(data);
                   $('.main_sub_total').text(data.subtotalmain);
                   $('.surcharges').text((data.surchages).toFixed(2));
                   let grand_total= (data.surchages) + (data.subtotalmain);
                   $('.grand_total').text(grand_total.toFixed(2));
               }
           })
       });
        {{--$(document).on('keyup','.car_mpg',function () {--}}
        {{--    let car_mpg=$(this).val();--}}
        {{--    let gas_price=$('.gas_price').val();--}}
        {{--    let expense_total=car_mpg * gas_price;--}}
        {{--    $('.expense_subtotal').val(expense_total);--}}
        {{--    $('.after_expense_total').text({{$invoice->grand_total}} + expense_total);--}}

        {{--});--}}
        {{--$(document).on('keyup','.gas_price',function () {--}}
        {{--    let car_mpg=$('.car_mpg').val();--}}
        {{--    let gas_price=$('.gas_price').val();--}}
        {{--    let expense_total=car_mpg * gas_price;--}}
        {{--    $('.expense_subtotal').val(expense_total);--}}
        {{--    $('.after_expense_total').text({{$invoice->grand_total}} + expense_total);--}}

        {{--});--}}
    </script>
@endsection
