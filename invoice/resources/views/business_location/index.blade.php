@extends('business_location.master')
@section('Title')
    {{ $seo->site_title }}
@endsection
@section('content')
    <section id="top-banner" class="position-relative" style="min-height: 585px;">
        <img class="img lazy" data-src="{{ $data->banner_url }}" width="1920" height="590">
        <div class="banner-content container-fluid padding-0 position-absolute w-100 py-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="heading-text services-heading">
                            <h1>{!! $data->title !!}</h1>
                            <div class="feature-bullets mb-4 mb-md-5 ">
                                <ul class="m-0 p-0">
                                    @foreach($data->list_items as $item)
                                    <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @if($data->quote == '1')
                        <form action="/free-quote/" id="formid" enctype="multipart/form-data" method="GET">
                            <input type="text" id="postalcode" name="PostCode" placeholder="Enter Your Po" class="postalcode typingField">
                            <input type="hidden" id="phonenumber" name="PhoneNumber" value="020 3519 8926">
                            <input type="hidden" id="loc-category" name="loc-category" value="london">
                            <button type="submit" class="btn btn-submit singlecarpet-btn center">GET A QUOTE</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </section>

     @include('business_location.inc.rating_bar')

    <section id="main-content-cleaning" class="py-7 main-content-cleaning-service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-4">
                        <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 mb-3 text-green text-uppercase">
                            {{ $data->heading }}
                        </h2>
                    </div>
                </div>
                <div class="col-md-12">
                    {!! $data->description !!}
                </div>
            </div>
        </div>
    </section>


    <section id="offering-services" class="py-6">
        <div class="container">
            <div class="row">
                <div class="col heading-text">
                    <h3 class="text-blue fs-3 fs-md-5 lh-1-3 lh-md-auto">{{ $data->service_title }}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 service-list-col">
                            <ul>
                                @foreach($data->service_html as $list)
                                    <li>
                                        <img src="{{ $list['image_url'] }}" alt="image">
                                        <a href="{{ $list['offer_url'] }}">{{ $list['offer_name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 right-image">
                    <img class="img-fluid lazy" data-src="{{asset('../../assets/images/Green-Carpet-Cleaning-Van-NYC.webp')}}" alt="Carpet Cleaning Services NYC" width="420" height="221">
                    <a href="tel:3478716530" class="btn callnow-btn center offer-call">Call Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-blue dark py-4" id="company-info">
        <div class="container">
            <div class="row">
                <div class="text-white text-center col px-7">
                    <h3 class="lh-1-3 lh-md-auto fs-2 fs-md-3 cta-bar">{!! $data->cta_title !!}</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="loc-gallery" class="py-5">
        <div class="container">
            <div class="section-header text-center pb-6">
                <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 mb-3 text-green">{{ $data->gallery_title }}</h2>
            </div>
            <div class="gallery-images owl-carousel owl-theme">
                @foreach ($data->gallery_images as $img)
                <div class="item gallery-item">
                    <div class="news-thumb">
                        <img class="lazy" data-src="{{ $img['url'] }}" alt="{{ $img['alt'] }}" width="{{ $img['width'] }}" height="{{ $img['height'] }}" />
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="py-2" id="white-bg">
        <div class="container" id="callback-request-submit">
            <div class="row">
                <div class="col-md-6 need-cc">
                    <h4 class="fw-bold fs-4 fs-md-auto mb-0">Need Your Carpets Cleaned?</h4>
                    <div class="input-fields">
                        <div role="form" class="" id="" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="/#callback-request-submit" method="post" onsubmit="this.querySelector('.ajax-loader').style.visibility='visible'">
                                <div style="display: none;"><input type="hidden" name="_wpcf7" value="2540"><input type="hidden" name="_wpcf7_version" value="4.4.1"><input type="hidden" name="_wpcf7_locale" value="en_US"><input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2540-o1"><input type="hidden" name="_wpnonce" value="8c925b5b41"></div>
                                <p class="mb-2">
                                  <span class="wpcf7-form-control-wrap your-number">
                                    <input type="number" name="your-number" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number text-phone typingField2 mb-0" id="postalcode" aria-required="true" aria-invalid="false" placeholder="Enter Your Phone Number" required>
                                  </span>
                                </p>

                                {{ isset( $mail_resp ) ? $mail_resp : '' }}

                                <p>
                                    <input type="submit" name="request-submit" value="Request a Call Back" class="wpcf7-form-control wpcf7-submit btn-submit">
                                </p>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mobile-image d-flex justify-content-center"><img  class="lazy" data-src="{{asset('../../assets/images/mobile.png') }}" alt="Call Carpet Cleaner NYC NOw" width="416" height="366"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="map-address" class="bg-blue dark py-0 mt-5 map-address">
        <div class="container-fluid padding-0">
            <div class="row">
                <div class="col-md-4 address-cont text-center">
                    <h4>{!! html_entity_decode($data->map_title) !!}</h4>
                    {!! Illuminate\Support\Str::markdown($data->address) !!}
                </div>
                <div class="col-md-8 map-cont" style="padding-right:0">
                    <a target="_blank" href="{{ $data->map_url }}">
                        <img class="lazy img-fluid" data-src="{{ $data->map_image_url }}" alt="Google Map" width="1260" height="450" style="height: 100%">
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section id="reviews" class="py-5">
        <div class="container">
            <div class="row my-4">
                <div class="col">
                    <h3 class="text-blue ">{{ $data->review_title }}</h3>
                </div>
            </div>
            <div class="row">
                @foreach($data->review_html as $review)
                <div class="review style-2 col-lg-4">
                    <div class="profile">
                        <img class="person lazy" data-src="{{ $review['image_url'] }}" alt="debra">
                        <span class="title">{{ $review['title'] }} </span>
                    </div>
                    <span class="text">{{ $review['description'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="social-posts" class="right-full bg-gray py-7 overflow-hidden">
        <div class="container">
            <div class="row my-4">
                <div class="col">
                    <h2 class="text-blue text-uppercase">Posts </h2>
                </div>
            </div>
            <div class="row post-slider {{ count($posts) == 1 ? 'single' : '' }}">
                @foreach($posts as $post)
                    <div class="col-lg-2 col-sm-3">
                        <div class="posts style-2">
                            <div class="post_header">
                                <div class="header_text position-relative">
                                    <h4 class="title">{{ $post['title'] }} </h4>
                                    <p><i class='fa'>&#xf017;</i> <span class="post-date"> {{ $post['publish_date']->format('Y-m-d') }}  </span> </p>
                                </div>
                            </div>
                            <div class="content">
                                @if(!empty($post['image']))
                                <div class="img-box">
                                    <img src="{{env('APP_URL').'/posts/'.$post['image']}}" alt="{{$post['image_alt']}}" title="{{$post['image_title_tag']}}" class="img-fluid" >
                                </div>
                                @endif
                                <p class="text">{!! base64_decode(($post['body'])) !!}</p>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
