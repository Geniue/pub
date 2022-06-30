@extends('dashboard.master')
@section('Title')
  Invoices
@endsection
@section('page_level_style')
  <style>
    .blog-link{color:#0e1426;}
    .blog-link:hover{
      text-decoration: underline;
    }
  </style>
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
              <li class="breadcrumb-item"><a href="javascript:void(0);">Ecommerce</a></li>
              <li class="breadcrumb-item active">Blog List</li>
            </ol>
          </div>
          <h4 class="page-title">Post</h4>
        </div><!--end page-title-box-->
      </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

            <h4 class="mt-0 header-title"> All Blog.</h4>
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
              <tr>
                <th>Sr</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Summary</th>
                <th>Meta Description</th>
                <th>Meta Keywords</th>
                <th>Image</th>
                <th width="95">Action</th>
              </tr>
              </thead>
              <tbody>
              @foreach($posts as $key=>$data)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>
                    <a target="_blank" href="{{env('BASE_URL').'/blog/'.$data->slug}}" class="blog-link" title="View blog in browser">{{$data->title}}</a>
                  </td>
                  <td>{{$data->slug}}</td>
                  <td>{{$data->summary}}</td>
                  <td>{{$data->meta_description}}</td>
                  <td>{{$data->meta_keywords}}</td>
                  <td><img src="{{env('BASE_URL').$data->thumb}}" width="70px" alt="{{$data->image_thumb_alt}}" title="{{$data->image_thumb_title}}"></td>
                  <td>
                    <a target="_blank" href="{{env('BASE_URL').'/blog/'.$data->slug}}" title="View blog in browser"><i class="far fa-eye text-info mr-1"></i></a>
                    <a href="{{route('blog.edit',$data->id)}}"><i class="far fa-edit text-info mr-1"></i></a>
                    <a href="{{route('blog.delete',$data->id)}}"><i class="fa fa-trash text-info mr-1"></i></a>
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
