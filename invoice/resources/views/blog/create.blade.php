@extends('dashboard.master')
@section('Title')
    Create Blog
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
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Blog</h4>
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
                    <form id="myform" action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <!--div class="card-body invoice-head">
                        <div class="row">
                            <div class="col-md-4 align-self-center">
                                <img id="blah" src="{{asset('backend/images/logo.png')}}" alt="logo-large" class="logo-lg" height="50">
                            </div>
                            <div class="col-md-8">

                                <ul class="list-inline mb-0 contact-detail float-right">
                                    <li class="list-inline-item">
                                        <div class="pl-3 d-flex">
                                            <i class="mdi mdi-web"></i>
                                            <p class="text-muted mt-2">https://xemetir.com/</p>
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
                            </div>
                        </div>
                    </div--><!--end card-body-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                            <h6>Gallery Image (required)</h6>
                                <div class="upload-btn-img">
                                    <img src="{{asset('backend/images/image-upload.gif')}}"
                                        class="img-thumbnail main_height p-0 m-0">
                                    <input type="file" name="image" onchange="showThumbnail(this)" accept="image/*"/>
                                </div>
                            </div>  <!--end col-->
                        </div><!--end row-->
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0"><b>Title:</b> <input type="text" class="form-control" name="title" required></h6>
                            </div>
                        </div>
                        <br>
						<div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-0"><b>Image title:</b> <input type="text" class="form-control" name="image_title" required></h6>
                            </div>
							<div class="col-md-6">
                                <h6 class="mb-0"><b>Image Alt:</b> <input type="text" class="form-control" name="image_alt" required></h6>
                            </div>
							<div class="col-md-6">
                                <h6 class="mb-0"><b>Image Thumb title:</b> <input type="text" class="form-control" name="image_thumb_title" required></h6>
                            </div>
							<div class="col-md-6">
                                <h6 class="mb-0"><b>Image thumb ALT:</b> <input type="text" class="form-control" name="image_thumb_alt" required></h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0"><b>Post Slug:</b> <input type="text" class="form-control" name="slug" required></h6>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <h5 class="mt-4">Content :</h5>
                                <ul class="pl-2 appendCondition">
                                    <li class="d-flex"><textarea name="content" class="form-control summernote" rows="5" cols="100" placeholder="content" required></textarea></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <h5 class="mt-4">Summary :</h5>
                                <ul class="pl-2 appendCondition">
                                    <li class="d-flex"><textarea name="summary" class="form-control" rows="5" cols="100" placeholder="summary" required></textarea></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <h5 class="mt-4">Meta Description :</h5>
                                <ul class="pl-2 appendCondition">
                                    <li class="d-flex"><textarea name="meta_description" class="form-control" rows="5" cols="100" placeholder="Meta Description" required></textarea></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0"><b>Meta Keywords:</b> <input type="text" class="form-control" name="meta_keywords" placeholder="Meta Keywords" required></h6>
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
