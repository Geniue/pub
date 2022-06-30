@extends('dashboard.master')
@section('Title')
    Posts
@endsection
@section('page_level_style')
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{asset('backend/css/toastui-editor.min.css')}}" />
    <link href="{{asset('backend/css/custom.css')}}" rel="stylesheet" type="text/css" />
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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Post</a></li>
                            <li class="breadcrumb-item active">Post List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Posts</h4>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form id="post-form" action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <fieldset class="mb-3">
                                <legend>Posts</legend>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="upload-btn-img">
                                            <img src="{{asset('backend/images/image-upload.gif')}}"
                                                 class="img-thumbnail main_height p-0 m-0">
                                            <input type="file" name="image" onchange="showThumbnail(this)" accept="image/*"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <div class="mb-3">
                                                            <label for="location-id" class="form-label">Location</label>
                                                            <select name="location_id" id="location-id" class="form-control">
                                                                <option value="">Select Location</option>
                                                                @foreach($locations as $location)
                                                                    <option value="{{$location->id}}" {{old('location_id') === $location->id ? 'selected' : ''}}>{{$location->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="publish-date" class="form-label">Date</label>
                                                            <input name="publish_date" type="date" class="form-control" id="publish-date" aria-describedby="publishDateHelp" value="{{ old('publish_date') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="col-lg-4"></div>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="image_title" class="form-label">Image Url</label>
                                                            <input name="image_title" required type="text" class="form-control" placeholder="Enter image URL " id="image_title" aria-describedby="imageTitleHelp" value="{{ old('image_title') }}">
                                                        </div>
                                                    </div>
													<div class="col-lg-6">
                                                        <div class="mb-3">
														 <!--  Image Title TAG IN BACKEND -->
                                                            <label for="image_title_tag" class="form-label">Image Title</label>
                                                            <input name="image_title_tag" required type="text" class="form-control" placeholder="Enter image title " id="image_title_tag" aria-describedby="imageTitleHelp" value="{{ old('image_title_tag') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="image_alt" class="form-label">Image Alter Text</label>
                                                            <input name="image_alt"  type="text" class="form-control" placeholder="Enter image alter text " id="image_alt" aria-describedby="imagealterHelp" value="{{ old('image_alt') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Title</label>
                                                    <input name="title" type="text" class="form-control" placeholder="Enter post title " id="title" aria-describedby="titleHelp" value="{{ old('title') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <input type="hidden" name="body" id="body-input"  value="{{ old('body') }}">
                                    <div id="body"></div>
                                </div>

                                <input  type="submit" class="btn btn-gradient-primary" id="submit-post" name="Submit" value="Submit">

                            </fieldset>
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="card-body">
                        <fieldset class="mb-5">
                            <legend>Previous Posts</legend>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Sr</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Location Assigned</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($posts as $key=>$post)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{!! Illuminate\Support\Str::words($post->title , 6) !!} </td>
                                    <td>{!! Illuminate\Support\Str::words($post->body,10) !!}</td>
                                    <td>
                                        @if(isset($post->location_name))
                                            {{$post->location_name}}
                                        @endif
                                    </td>
                                    <td>{{ $post->publish_date }} </td>
                                    <td>
{{--                                        {{route('posts.edit',$post->id)}}--}}
                                        <a href="javascript:void(0)" title="Edit Post" class="edit-post" data-post="{{ base64_encode(json_encode($post)) }}"><i class="far fa-edit text-info mr-1" ></i></a>
                                        <form action="{{ route('posts.delete', $post->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-link p-0"><i class="fas fa-trash-alt text-danger mr-1"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </fieldset>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->

    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="post-form-edit" action="{{route('posts.update',0)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="upload-btn-img">
                                    <img src="{{asset('backend/images/image-upload.gif')}}" class="img-thumbnail main_height p-0 m-0 old-img-thumbnail">
                                    <input type="file" name="image" onchange="showThumbnail(this)" accept="image/*"/>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="mb-3">
                                            <label for="old-location-id" class="form-label">Location</label>
                                            <select name="location_id" id="old-location-id" class="form-control">
                                                <option value="">Select Location</option>
                                                @foreach($locations as $location)
                                                    <option value="{{$location->id}}" >{{$location->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="old-publish-date" class="form-label">Date</label>
                                            <input name="publish_date" type="date" class="form-control" id="old-publish-date" aria-describedby="publishDateHelp" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="old_image_title" class="form-label">Image URL</label>
                                                    <input name="image_title" required type="text" class="form-control" placeholder="Enter image Url " id="old_image_title" aria-describedby="imageTitleHelp" value="">
                                                </div>
                                            </div>
											<div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="old_image_title_tag" class="form-label">Image title tag</label>
                                                    <input name="image_title_tag" required type="text" class="form-control" placeholder="Enter image title " id="old_image_title_tag" aria-describedby="imageTitleHelp" value="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="old_image_alt" class="form-label">Image Alter Text</label>
                                                    <input name="image_alt"  type="text" class="form-control" placeholder="Enter image alter text " id="old_image_alt" aria-describedby="imageAltHelp" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="old-title" class="form-label">Title</label>
                                            <input name="title" type="text" class="form-control" placeholder="Enter post title " id="old-title" aria-describedby="titleHelp" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <input type="hidden" name="body" id="old-body-input"  value="">
                            <div id="old_body"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="update-post" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('page_level_script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script type="text/javascript" src="{{asset('backend/js/base64.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/js/toastui-editor-all.min.js')}}"></script>
    <script>
        var postBaseUrl = '{{env('APP_URL').'/posts'}}';
        let defaultImageUrl = '{{asset('backend/images/image-upload.gif')}}';
        $(function(){
            const Editor = toastui.Editor;
            const commonProp = {
                height: '400px',
                initialEditType: 'markdown',
                placeholder: 'Write content in markdown format!',
            };
            const body = new Editor({
                el: document.querySelector('#body'),
                ...commonProp,
            });
            const oldBody = new Editor({
                el: document.querySelector('#old_body'),
                ...commonProp,
            });

            $(document).ready(function(){
                $('#submit-post').on('click', e => {
                    const form =  $("#post-form");
                    e.preventDefault();
                    const bodyHTML = body.getMarkdown();
                    if(!!bodyHTML ){
                        document.querySelector('#body-input').value = Base64.encode(bodyHTML);
                    }
                    form.validate();
                    if(form.valid()){
                        form.submit();
                    }
                });

                $('.edit-post').on('click', function () {
                    const btn = $(this);
                    const postItem = JSON.parse(Base64.decode(btn.data('post')));
                    oldBody.setMarkdown(postItem.body);
                    $('#old-title').val(postItem.title);
                    $('#old_image_title').val(postItem.image_title);
                    $('#old_image_alt').val(postItem.image_alt);
					$('#old_image_title_tag').val(postItem.image_title_tag);
                    if(!!postItem.image){
                        $('.old-img-thumbnail').attr('src',`${postBaseUrl}/${postItem.image}`);
                    }else{
                        $('.old-img-thumbnail').attr('src',defaultImageUrl);
                    }
                    $('#old-location-id').val(postItem.location_id);
                    $('#old-publish-date').val(postItem.publish_date);
                    $('#post-form-edit').attr('action',`${window.location.origin}/dashboard/posts/update/${postItem.id}`);
                    $('.modal').modal('show');
                });

                $('#update-post').on('click', function(e){
                    e.preventDefault();
                    const form = $("#post-form-edit");
                    const oldBodyHTML = oldBody.getMarkdown();

                    if(!!oldBodyHTML){
                        document.querySelector('#old-body-input').value = Base64.encode(oldBodyHTML);
                    }
                    form.validate();
                    if(form.valid()) {
                        form.submit();
                    }
                })
            });

        },(jQuery))
    </script>
    @if(session('message'))
        <script>
            swal("", "{{ session('message') }}", "{{ session('status') }}");
        </script>
    @endif
@endsection
