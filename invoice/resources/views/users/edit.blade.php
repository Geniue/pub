@extends('dashboard.master')
@section('Title')
    Edit Employee
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
                            <li class="breadcrumb-item active">Edit Employee</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Employee</h4>
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
                    <form id="myform" action="{{route('users.update',$user->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                </div><!--end card-body-->
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12">
                            <h6 class="mb-0"><b>Name of Employee :</b> <input type="text" class="form-control" name="employee_name" value="{{$user->name}}"></h6>
                            <h6 class="mb-0"><b>Email Address:</b> <input type="email" class="form-control" name="email" placeholder="eg:abdulrehmankhan0072@gmail.com" value="{{$user->email}}"></h6>
                            <h6 class="mb-0"><b>Phone Number:</b> <input type="tel" class="form-control" name="phone" placeholder="+16438849258" value="{{$user->phone}}"></h6>
                            <h6 class="mb-0"><b>Password: </b> <input type="password" class="form-control" name="password"></h6>
                            <h6 class="mb-0"><b>MPG of Employee Car: </b> <input type="number" class="form-control" name="mpg_of_car" value="{{$user->mpg}}"></h6>
                            <h6 class="mb-0"><b>Type of User :</b> <select class="form-control" name="is_admin">
                                    <option value="">Select Type</option>
                                    <option value="1" {{$user->is_admin==1 ? 'selected':''}}>Admin</option>
                                    <option value="3" {{$user->is_admin==3 ? 'selected':''}}>Employee</option>
                                </select></h6>
                            <h6 class="mb-0"><b>Approve User:</b> <select class="form-control" name="is_approved">
                                    <option value="">Select Option</option>
                                    <option value="0" {{$user->is_approved==0 ? 'selected':''}}>Not Approved</option>
                                    <option value="1" {{$user->is_approved==1 ? 'selected':''}}>Approved</option>
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

@endsection
