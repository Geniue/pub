@extends('dashboard.master')
@section('Title')
    Invoices
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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
                            <li class="breadcrumb-item active">Invoice List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Invoices</h4>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title"> All Invoices.</h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Sr</th>
                                <th>Ticket Total</th>
                                <th>Miles Travel</th>
                                <th>Gas Price</th>
                                <th>Toll Garage Parking</th>
                                <th>Tip</th>
                                <th>Action</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($tickets as $key=>$invoice)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$invoice->ticketdetail->total_amount}}</td>
                                <td>${{$invoice->ticketdetail->number_miles}}</td>
                                <td>${{$invoice->ticketdetail->gas_price}}</td>
                                 <td>${{$invoice->ticketdetail->toll_garage_parking}}</td>
                                 <td>${{$invoice->ticketdetail->tip}}</td>
                                <td>
                                    <a href="{{route('tickets.edit',$invoice->id)}}"><i class="far fa-edit text-info mr-1"></i></a>
                                    <a href="{{route('tickets.show',$invoice->ticket_number)}}"><i class="dripicons-download file-download-icon"></i></a>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

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
@endsection
