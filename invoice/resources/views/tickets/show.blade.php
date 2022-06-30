<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Ticket</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend/images/favicon.ico')}}">

    <link href="{{asset('backend/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
    <link href="{{asset('backend/plugins/lightpick/lightpick.css')}}" rel="stylesheet" />

    <!-- App css -->
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{asset('backend/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/plugins/filter/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/lightpick/lightpick.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet" />

</head>

<body>



<div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content">

        <div class="container-fluid">

            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body invoice-head">
                            <div class="row">
                                <div class="col-md-4 align-self-center">
                                    <img id="blah" src="{{asset('backend/images/logo.png')}}" alt="logo-large" class="logo-lg" height="75">
                                </div><!--end col-->
                                <div class="col-md-8">

                                    <ul class="list-inline mb-0 contact-detail float-right">
                                        <li class="list-inline-item">
                                            <div class="pl-3">
                                                <i class="mdi mdi-web"></i>
                                                <p class="text-muted mb-0">www.abcdefghijklmno.com</p>
                                                <p class="text-muted mb-0">www.qrstuvwxyz.com</p>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="pl-3">
                                                <i class="mdi mdi-phone"></i>
                                                <p class="text-muted mb-0">+123 123456789</p>
                                                <p class="text-muted mb-0">+123 123456789</p>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="pl-3">
                                                <i class="mdi mdi-map-marker"></i>
                                                <p class="text-muted mb-0">2821 Kensington Road,</p>
                                                <p class="text-muted mb-0">Avondale Estates, GA 30002 USA.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="">
                                        <h6 class="mb-0"><b>Start Date :</b> {{\Carbon\Carbon::parse($ticket->ticketdetail->created_at)->toDateString()}}</h6>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <h6 class="mb-0"><b>Compny :</b>Pristine Green Cleaning</h6>
                                    <h6 class="mb-0"><b>Ticket No :</b> #{{$ticket->ticket_number}}</h6>
                                </div><!--end col-->
                                <div class="col-md-3">
                                    <div class="text-center bg-light p-3 mb-3">
                                        <h5 class="bg-secondary mt-0 p-2 text-white d-sm-inline-block">Payment Methods</h5>
                                        <p class="mb-0 text-muted"><a href="#" class="btn btn-primary">Pay with Paypal</a></p>
                                        <p class="mb-0 text-muted"><a href="#" class="btn btn-primary">Pay with Stripe</a></p>
                                        <p class="mb-0 text-muted"><a href="#" class="btn btn-primary">Pay with Venmo</a></p>
                                        <p class="mb-0 text-muted"><a href="#" class="btn btn-primary">Pay with Zelle</a></p>
                                        <p class="mb-0 text-muted"><a href="#" class="btn btn-primary">Pay with Cash</a></p>
                                        <p class="mb-0 text-muted"><a href="#" class="btn btn-primary">Pay with Check</a></p>
                                    </div>
                                </div> <!--end col-->
                            </div><!--end row-->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive project-invoice">
                                        <table class="table table-bordered mb-0">
                                            <thead class="thead-light">
                                             <tr>
                                <th>Ticket Total</th>
                                <th>Miles Travel</th>
                                <th>Gas Price</th>
                                <th>Toll Garage Parking</th>
                                <th>Tip</th>
                               
                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>{{$ticket->ticketdetail->total_amount}}</td>
                                <td>${{$ticket->ticketdetail->number_miles}}</td>
                                <td>${{$ticket->ticketdetail->gas_price}}</td>
                                 <td>${{$ticket->ticketdetail->toll_garage_parking}}</td>
                                 <td>${{$ticket->ticketdetail->tip}}</td>
                                            </tr><!--end tr-->


                                            </tbody>
                                        </table><!--end table-->
                                    </div>  <!--end /div-->
                                </div>  <!--end col-->
                            </div><!--end row-->

                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <h5 class="mt-4">Terms And Condition :</h5>
                                    <ul class="pl-3">
                                        <li><small class="font-12">All accounts are to be paid within 7 days from receipt of invoice. </small></li>
                                        <li><small class="font-12">To be paid by cheque or credit card or direct payment online.</small ></li>
                                        <li><small class="font-12"> If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.</small></li>
                                    </ul>
                                </div> <!--end col-->
                                <div class="col-lg-6 align-self-end">
                                    <div class="w-25 float-right">
                                        <small>Account Manager</small>
                                        <img src="../assets/images/signature.png" alt="" class="" height="48">
                                        <p class="border-top">Signature</p>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                            <hr>
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-12 col-xl-4 ml-auto align-self-center">
                                    <div class="text-center"><small class="font-12">Thank you very much for doing business with us.</small></div>
                                </div><!--end col-->
                                <div class="col-lg-12 col-xl-4">
                                    <div class="float-right d-print-none">
                                        <a href="javascript:window.print()" class="btn btn-gradient-info"><i class="fa fa-print"></i></a>
                                        <a href="#" class="btn btn-gradient-primary">Submit</a>
                                        <a href="#" class="btn btn-gradient-danger">Cancel</a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->

        </div><!-- container -->

        <footer class="footer text-center text-sm-left">
            &copy; 2020 Crovex <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
        </footer><!--end footer-->
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->



<!-- jQuery  -->
<script src="{{asset('backend/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/js/metismenu.min.js')}}"></script>
<script src="{{asset('backend/js/waves.js')}}"></script>
<script src="{{asset('backend/js/feather.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('backend/js/jquery-ui.min.js')}}"></script>

<script src="{{asset('backend/plugins/moment/moment.js')}}"></script>
<script src="{{asset('backend/plugins/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('backend/plugins/chartjs/chart.min.js')}}"></script>
<script src="{{asset('backend/plugins/chartjs/roundedBar.min.js')}}"></script>
<script src="{{asset('backend/plugins/lightpick/lightpick.js')}}"></script>
<script src="{{asset('backend/pages/jquery.sales_dashboard.init.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
<!-- App js -->
<script src="{{asset('backend/js/app.js')}}"></script>
<!-- Required datatable js -->
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/lightpick/lightpick.js')}}"></script>
<script src="{{asset('backend/plugins/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('backend/pages/jquery.profile.init.js')}}"></script>

<script>
    $('#datatable').DataTable();
</script>
</body>

</html>
