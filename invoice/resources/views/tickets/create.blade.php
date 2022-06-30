@extends('dashboard.master')
@section('Title')
    Create Invoice
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
                    <form id="myform" action="{{route('tickets.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
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
                                    <h6 class="mb-0"><b>Start Date :</b> <input type="date" class="form-control" name="start_date" data-date-format="DD/MM/YYYY" value="{{\Carbon\Carbon::now()->toDateString()}}"></h6>
                                </div>
                            <div class="col-md-12">
                                <h6 class="mb-0"><b>Job total:</b> <input type="text" class="form-control" name="total_amount"></h6>
                                <h6 class="mb-0"><b>Miles Travel:</b> <input type="number" class="form-control" name="number_miles" placeholder="eg: James Jord"></h6>
                                <h6 class="mb-0"><b>MPG of Employee’s Car:</b> <input type="number" class="form-control" name="mpg_of_employee_car" value="{{$employee_mpg->mpg}}" readonly="readonly"></h6>
                                <h6 class="mb-0"><b>Gas Price:</b> <input type="number" class="form-control" name="gas_price" value="{{$gas_price->gas_price}}" readonly="readonly"></h6>
                                <h6 class="mb-0"><b>Toll/Garage Parking:</b> <input type="number" class="form-control" name="toll_garage_parking"></h6>
                                <h6 class="mb-0"><b>Tip:</b> <input type="number" class="form-control" name="tip"></h6>
                            </div><!--end col-->

                        </div><!--end row--><br>

                        <div class="row">
                            <div class="col-lg-12">
                                <h6>Attach Pictures (required)</h6>
                                <input type="file" class="form-control" name="attachment[]" multiple>
                            </div>  <!--end col-->
                        </div><!--end row-->

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <h5 class="mt-4">Notes :</h5>
                                <ul class="pl-2 appendCondition">
                                    <li class="d-flex"><textarea name="notes" class="form-control" rows="5" cols="100" placeholder="notes"></textarea></li>
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
<script type="text/javascript">
    $('.showCharge').hide();
    $(document).on('keyup','.fixed_price',function (){
        let fixed_price=$(this).val();
        $(this).closest('tr').find('.subtotal').val(fixed_price);
        let myform = document.getElementById("myform");
        let fd = new FormData(myform);
        $.ajax({
            url:"{{route('getsubtotal')}}",
            data: fd,
            cache: false,
            processData: false,
            contentType: false,
            type: 'POST',
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
            url:"{{route('getsubtotal')}}",
            data: fd,
            cache: false,
            processData: false,
            contentType: false,
            type: 'POST',
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
            url:"{{route('getsubtotal')}}",
            data: fd,
            cache: false,
            processData: false,
            contentType: false,
            type: 'POST',
            success:function (data){
                $('.main_sub_total').text(data);
                $('.grand_total').text(data.toFixed(2));
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

</script>
@endsection
