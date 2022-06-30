@extends('dashboard.master')
@section('Title')
    Add Page
@endsection
@section('content')

    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">{{env('APP_NAME')}}</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                            <li class="breadcrumb-item active">Page</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Page</h4>
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
                    <form id="myform" action="{{route('pages.store')}}" method="post" enctype="multipart/form-data">
                       @csrf
                        <div class="card-body">    
						<div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0"><b>Page Name:</b> <input type="text" class="form-control" name="page_name" required></h6>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0"><b>Site Name:</b> <input type="text" class="form-control" name="site_name" required></h6>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0"><b>Site Title:</b> <input type="text" class="form-control" name="site_title"  required></h6>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <h5 class="mt-4">Site Description :</h5>
                                <ul class="pl-2 appendCondition">
                                    <li class="d-flex"><textarea name="site_description" class="form-control" rows="5" cols="100" placeholder="content" ></textarea></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0"><b>Site Keywords:</b> <input type="text" class="form-control" name="site_keywords"  ></h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0"><b>Canonical:</b> <input type="text" class="form-control" name="canonical"  ></h6>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0"><b>OG Site Title:</b> <input type="text" class="form-control" name="og_site_title" ></h6>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <h5 class="mt-4">OG Description :</h5>
                                <ul class="pl-2 appendCondition">
                                    <li class="d-flex"><textarea name="og_description" class="form-control" rows="5" cols="100" placeholder="content" ></textarea></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0"><b>OG Title:</b> <input type="text" class="form-control" name="og_title"  ></h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0"><b>OG URL:</b> <input type="text" class="form-control" name="og_url" ></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-0"><b>OG Image :</b> <input type="file" class="form-control" name="og_image" ></h6>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0"><b>TW Title:</b> <input type="text" class="form-control" name="tw_title" ></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0"><b>TW Url:</b> <input type="text" class="form-control" name="tw_url"  ></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-0"><b>TW Image: </b></h6>
                                <input type="file" class="form-control" name="tw_image" >
                            </div>
                            
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <h5 class="mt-4">TW description :</h5>
                                <ul class="pl-2 appendCondition">
                                    <li class="d-flex"><textarea name="tw_description" class="form-control" rows="5" cols="100" placeholder="summary" ></textarea></li>
                                </ul>
                            </div>
                        </div>
                       

                        <hr>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="float-right d-print-none">
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
   
@endsection
