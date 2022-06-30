@extends('dashboard.master')
@section('Title')
    Add Employee
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
                            <li class="breadcrumb-item active">Add Employee</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Employee</h4>
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
                    <form id="myform" action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    </div><!--end card-body-->
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12">
                                <h6 class="mb-0"><b>Name of Employee :</b> <input type="text" class="form-control" name="employee_name"></h6>
                                <h6 class="mb-0"><b>Email Address:</b> <input type="email" class="form-control" name="email" placeholder="eg:abdulrehmankhan0072@gmail.com"></h6>
                                <h6 class="mb-0"><b>Phone Number:</b> <input type="tel" class="form-control" name="phone" placeholder="+16438849258"></h6>
                                <h6 class="mb-0"><b>Password: </b> <input type="password" class="form-control" name="password"></h6>
                                <h6 class="mb-0"><b>MPG of Employee Car: </b> <input type="number" class="form-control" name="mpg_of_car"></h6>
                                <h6 class="mb-0"><b>Type of User :</b> <select class="form-control" name="is_admin">
                                        <option value="">Select Type</option>
                                        <option value="1">Admin</option>
                                        <option value="3">Employee</option>
                                    </select></h6>
                                <h6 class="mb-0"><b>Approve User:</b> <select class="form-control" name="is_approved">
                                        <option value="">Select Option</option>
                                        <option value="0">Not Approved</option>
                                        <option value="1">Approved</option>
                                    </select></h6>
                            </div><!--end col-->

                        </div><!--end row--><br>

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="float-right d-print-none">
                                    <input type="submit" class="btn btn-gradient-primary" name="Submit" value="Submit">
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
