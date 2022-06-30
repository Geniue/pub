@extends('dashboard.master')
@section('Title')
    Edit Location
@endsection
@section('page_level_style')
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{asset('backend/css/toastui-editor.min.css')}}" />
    <link href="{{asset('backend/css/image-uploader.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/custom.css')}}" rel="stylesheet" type="text/css" />
    <style>
        .tabs span {padding: 0 5px;cursor: pointer;font-size: 12px;}
        .tabs span.active{color: #407dfd;font-weight: 500;}
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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Locations</a></li>
                            <li class="breadcrumb-item active">Edit Location</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Location</h4>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    @if($errors->any())
                        {{ implode('', $errors->all()) }}
                    @endif
                    <form id="location-form-edit" action="{{route('locations.update',$location->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <fieldset class="mb-5">
                                        <legend>Banner Content</legend>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" value="{{$location->name}}" required>
                                            <small id="titleHelp" class="form-text text-muted">This is location name which will show services area page</small>
                                        </div>
                                        <div class="mb-3">
                                            <label for="url" class="form-label">Url/Slug</label>
                                            <input type="text" name="url" class="form-control" id="url" aria-describedby="urlHelp" value="{{$location->url}}" required>
                                            <small id="urlHelp" class="form-text text-muted">This is post url last segment or slug url. Also this slug need to be unique</small>
                                        </div>
                                        <div class="mb-3">
                                            <label for="banner_url" class="form-label">Banner Image Url</label>
                                            <input type="text" name="banner_url" class="form-control" id="banner_url" aria-describedby="bannerUrlHelp" value="{{$location->banner_url}}" required>
                                            <small id="bannerUrlHelp" class="form-text text-muted">Enter full image url with image extension after upload image</small>
                                        </div>
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" aria-describedby="titleHelp" value="{{ base64_decode($location->title) }}">
                                            <small id="titleHelp" class="form-text text-muted">This is banner main title</small>
                                            <input type="hidden" name="title" id="fieldTitle" value="{{$location->title}}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="list-item">Banner List Item</label>
                                            <textarea class="form-control" id="list-item" rows="4"></textarea>
                                            <small id="listItemHelp" class="form-text text-muted">Enter each list item in new line</small>
                                            <input type="hidden" name="list_items" id="listItemInput" value="{{$location->list_items}}">
                                        </div>

                                        <div class="form-check form-switch">
                                            <input name="quote" class="form-check-input" type="checkbox" {{ $location->quote === 1 ? 'checked="checked"' : '' }} value="1" role="switch" id="quote">
                                            <label class="form-check-label" for="quote">Enable Get a quote Form</label>
                                        </div>
                                    </fieldset>

                                    <fieldset class="mb-5">
                                        <legend>Main Content</legend>

                                        <div class="mb-3">
                                            <label for="heading" class="form-label">Heading</label>
                                            <input name="heading" type="text" class="form-control" id="heading" aria-describedby="headingHelp"  value="{{$location->heading}}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <input type="hidden" name="description" id="description-input"  value="">
                                            <input type="hidden" id="oldDescription" value="{{$location->description}}">
                                            <div id="description"></div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="mb-5">
                                        <legend>Offering Services</legend>

                                        <div class="mb-3">
                                            <label for="service-title" class="form-label">Service title</label>
                                            <input name="service_title" type="text" class="form-control" id="service-title" aria-describedby="serviceTitleHelp" value="{{$location->service_title}}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="service-list" class="form-label">Service Lists HTML </label>
                                            <div class="review-form-group ">
                                                <button type="button" data-repeater-create class="btn btn-xs btn-info add-btn position-absolute"><i class="fa fa-plus"></i></button>
                                                <div data-repeater-list="service_html">
                                                </div>
                                            </div>
                                            <input type="hidden" id="oldServiceHtml" value="{{ base64_encode(json_encode(unserialize($location->service_html))) }}">
                                        </div>
                                    </fieldset>
                                </div><!--end col-->
                                <div class="col-lg-5 offset-lg-1">
                                    <fieldset class="mb-5">
                                        <legend>CTA & Gallery</legend>

                                        <div class="mb-3">
                                            <label for="cta-title" class="form-label">CTA title</label>
                                            <input  type="text" class="form-control" id="cta-title" aria-describedby="ctaTitleHelp" value="{{ base64_decode($location->cta_title) }}">
                                            <input name="cta_title" type="hidden"  id="fieldCtaTitle" value="{{$location->cta_title}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="gallery-title" class="form-label">Gallery Title </label>
                                            <input name="gallery_title" type="text" class="form-control" id="gallery-title" aria-describedby="galleryTitleHelp" value="{{$location->gallery_title}}" required>
                                        </div>
                                        <div class="mb-3 position-relative">
                                            <label for="gallery-images" class="form-label mb-3">Gallery Images </label>
                                            <div class="gallery-form-group ">
                                                <button type="button" data-repeater-create class="btn btn-info add-btn position-absolute"><i class="fa fa-plus"></i></button>
                                                <div data-repeater-list="gallery_images">

                                                </div>
                                            </div>
                                            <input type="hidden" id="oldGalleryImages" value="{{ base64_encode(json_encode(unserialize($location->gallery_images))) }}">
                                        </div>
                                    </fieldset>
                                    <fieldset class="mb-5">
                                        <legend>Map section</legend>

                                        <div class="mb-3">
                                            <label for="map-title" class="form-label">Map title</label>
                                            <input name="map_title" type="text" class="form-control" id="map-title" aria-describedby="mapTitleHelp" value="{{$location->map_title}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="hidden" name="address" id="address-input" value="">
                                            <input type="hidden"  id="oldAddress" value="{{$location->address}}">
                                            <div id="address"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="map-url" class="form-label">Map Url </label>
                                            <input name="map_url" type="text" class="form-control" id="map-url" aria-describedby="mapUrlHelp" value="{{$location->map_url}}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label w-100 d-flex justify-content-between">Map Image url</label>
                                            <input name="map_image_url" type="text" class="form-control"  id="map-image-url" value="{{$location->map_image_url}}" required>
                                        </div>
                                    </fieldset>

                                    <fieldset class="mb-5">
                                        <legend>Review section</legend>
                                        <div class="mb-3">
                                            <label for="review-title" class="form-label">Review title</label>
                                            <input name="review_title" type="text" class="form-control" id="review-title" aria-describedby="reviewTitleHelp" value="{{$location->review_title}}" required>
                                        </div>
                                        <div class="mb-3 position-relative">
                                            <label for="review-html" class="form-label">Review HTML</label>
                                            <div class="review-form-group ">
                                                <button type="button" data-repeater-create class="btn btn-xs btn-info add-btn position-absolute"><i class="fa fa-plus"></i></button>
                                                <div data-repeater-list="review_html">
                                                </div>
                                            </div>
                                            <input type="hidden" id="oldReviewHtml" value="{{ base64_encode(json_encode(unserialize($location->review_html))) }}">
                                        </div>
                                    </fieldset>

                                    <fieldset class="mb-5">
                                        <legend>Call for Free Quote</legend>
                                        <div class="mb-3">
                                            <label for="quote-number" class="form-label">Quote Telephone Number</label>
                                            <input name="quote_number" type="text" class="form-control" id="quote-number"  aria-describedby="quoteNumberHelp" value="{{$location->quote_number}}" required>
                                        </div>
                                    </fieldset>

                                    <fieldset class="mb-5">
                                        <legend>SEO</legend>
                                        <div class="mb-3">
                                            <label for="seo-title" class="form-label">Seo title</label>
                                            <input name="seo_title" type="text" class="form-control" id="seo-title" aria-describedby="seoTitleHelp" value="{{$location->seo_title}}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="seo-description" class="form-label">Seo description</label>
                                            <textarea class="form-control" name="seo_description" id="seo-description" rows="4">{{$location->seo_description}}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="seo-keywords" class="form-label">Seo keywords</label>
                                            <input name="seo_keywords" type="text" class="form-control" id="seo-keywords" aria-describedby="seoDescriptionHelp" value="{{$location->seo_keywords}}">
                                        </div>
                                    </fieldset>
                                </div>
                            </div><!--end row--><br>

                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="d-print-none">
                                        <input type="hidden" name="id" value="{{$location->id}}">
                                        <input  type="submit" class="btn btn-gradient-primary" id="submit-location" name="Submit" value="Update">
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
    <script type="text/javascript" src="{{asset('backend/js/base64.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/js/toastui-editor-all.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
    <script src="{{asset('backend/js/location-global.js') }}"></script>
    <script>
        (function($) {
            const repeaterObj = {
                initEmpty: false,
                show: function () {
                    $(this).slideDown();
                },
                hide: function (e) {
                    $(this).slideUp(e);
                }
            };
            let gallery_images = JSON.parse(Base64.decode(document.querySelector('#oldGalleryImages').value));

            if(gallery_images.length>0){
                gallery_images.map(image => {
                    $('[data-repeater-list="gallery_images"]').append(
                        ` <div class="gallery-form repeater-group pb-3" data-repeater-item>
                            <div class="repeater-form_inputs">
                                <input type="text" name="[url]" value="${image.url}" placeholder="url" class="form-control mb-2">
                                <div class="input-group">
                                    <input type="text" name="[alt]" value="${image.alt}" placeholder="alt" class="form-control gallery-form__alt mr-2">
                                    <input type="number" name="[width]" value="${image.width}" placeholder="width" class="form-control gallery-form__width mr-2">
                                    <input type="number" name="[height]" value="${image.height}" placeholder="height" class="form-control gallery-form__height">
                                </div>
                            </div>
                            <div class="repeater-form_actions">
                                <button type="button" data-repeater-delete class="btn btn-sm btn-danger mt-3 remove-gallery-image"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                  `)
                });
            }else{
                $('[data-repeater-list="gallery_images"]').append(
                    ` <div class="gallery-form repeater-group pb-3" data-repeater-item>
                            <div class="repeater-form_inputs">
                                <input type="text" name="[url]" value="" placeholder="url" class="form-control mb-2">
                                <div class="input-group">
                                    <input type="text" name="[alt]" value="" placeholder="alt" class="form-control gallery-form__alt mr-2">
                                    <input type="number" name="[width]" value="" placeholder="width" class="form-control gallery-form__width mr-2">
                                    <input type="number" name="[height]" value="" placeholder="height" class="form-control gallery-form__height">
                                </div>
                            </div>
                            <div class="repeater-form_actions">
                                <button type="button" data-repeater-delete class="btn btn-sm btn-danger mt-3 remove-gallery-image"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                `)
            }
            $('.gallery-form-group').repeater(repeaterObj);


            let review_html = JSON.parse(Base64.decode(document.querySelector('#oldReviewHtml').value));
            if(review_html.length>0){
                review_html.map(item => {
                    $('[data-repeater-list="review_html"]').append(
                        ` <div class="review-form repeater-group pb-3" data-repeater-item>
                            <div class="repeater-form_inputs">
                                <input type="text" name="[title]" value="${item.title}" placeholder="user name" class="form-control mb-2">
                                <input type="text" name="[image_url]" value="${item.image_url}" placeholder="user image url" class="form-control review-form__imgUrl mb-2 ">
                                <textarea name="[description]" class="form-control"  placeholder="review content" rows="3">${item.description}</textarea>
                            </div>
                            <div class="repeater-form_actions">
                                <button type="button" data-repeater-delete class="btn btn-sm btn-danger mt-3 remove-review"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                  `)
                });
            }else{
                $('[data-repeater-list="review_html"]').append(
                    ` <div class="review-form repeater-group pb-3" data-repeater-item>
                            <div class="repeater-form_inputs">
                                <input type="text" name="[title]" value="" placeholder="user name" class="form-control mb-2">
                                <input type="text" name="[image_url]" value="" placeholder="user image url" class="form-control review-form__imgUrl mb-2 ">
                                <textarea name="[description]" class="form-control"  placeholder="review content" rows="3"></textarea>
                            </div>
                            <div class="repeater-form_actions">
                                <button type="button" data-repeater-delete class="btn btn-sm btn-danger mt-3 remove-review"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                  `)
            }

            let service_html = JSON.parse(Base64.decode(document.querySelector('#oldServiceHtml').value));
            if(service_html.length>0){
                service_html.map(item => {
                    $('[data-repeater-list="service_html"]').append(
                        ` <div class="service_html-form repeater-group pb-3" data-repeater-item>
                            <div class="repeater-form_inputs">
                                <div class="row g-3 align-items-center">
                                    <div class="col-3">
                                        <label for="[image_url]" class="col-form-label">Service Image URL:</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="[image_url]" value="${item.image_url}" placeholder="service image url" class="form-control service_html__imgUrl mb-2 ">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-3">
                                        <label for="[offer_name]" class="col-form-label">Service Name:</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="[offer_name]" value="${item.offer_name}" placeholder="service name" class="form-control mb-2">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-3">
                                        <label for="[offer_url]" class="col-form-label">Service URL:</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="[offer_url]" value="${item.offer_url}" placeholder="service url" class="form-control mb-2">
                                    </div>
                                </div>
                            </div>
                            <div class="repeater-form_actions">
                                <button type="button" data-repeater-delete class="btn btn-sm btn-danger mt-3 remove-offer"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                  `)
                });
            }else{
                $('[data-repeater-list="service_html"]').append(
                    ` <div class="service_html-form repeater-group pb-3" data-repeater-item>
                            <div class="repeater-form_inputs">
                                <div class="row g-3 align-items-center">
                                    <div class="col-3">
                                        <label for="[image_url]" class="col-form-label">Service Image URL:</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="[image_url]" value="" placeholder="service image url" class="form-control service_html__imgUrl mb-2 ">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-3">
                                        <label for="[offer_name]" class="col-form-label">Service Name:</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="[offer_name]" value="" placeholder="service name" class="form-control mb-2">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-3">
                                        <label for="[offer_url]" class="col-form-label">Service URL:</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="[offer_url]" value="" placeholder="service url" class="form-control mb-2">
                                    </div>
                                </div>
                            </div>
                            <div class="repeater-form_actions">
                                <button type="button" data-repeater-delete class="btn btn-sm btn-danger mt-3 remove-offer"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                  `)
            }
            $('.review-form-group').repeater(repeaterObj);

        })(jQuery);
    </script>
    @if(session('message'))
        <script>
            swal("", "{{ session('message') }}", "{{ session('status') }}");
        </script>
    @endif
@endsection
