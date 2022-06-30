<?php
$ld_json = <<<LD_JSON
	[ {
	  "@context" : "http://schema.org",
	  "@type" : "LocalBusiness",
	  "name" : "PristineGreen Upholstery and Carpet Cleaning",
	  "image" : "https://pristinegreencleaning.com/images/Pristine-Green-Logo.jpg",
	  "telephone" : "347-871-6530",
	  "email" : "sales@pristinegreencleaning.com",
	  "pricerange":"$$",
	  "description":["Green Upholstery Cleaner","Upholstery cleaning service","upholsteyr cleaning nyc","green upholstery clenaing","carpet couch cleaning services","green rug cleaning nyc","carpet cleaning nyc","couch cleaning service nyc","carpet green upholstery cleaning","couch cleaner","upholstery cleaner nyc","carpet cleaner nyc"],
	  "sameas":["https://www.google.com/maps/place/PristineGreen+Upholstery+and+Carpet+Cleaning/@40.7356929,-73.9780817,13z/data=!4m8!1m2!2m1!1spristinegreencleaning!3m4!1s0x89c25c2f585001ef:0xe845b54866df15ad!8m2!3d40.740055!4d-73.985528","https://www.facebook.com/PristineGreen-Upholstery-and-Carpet-Cleaning-380402999024630/"],
	  "address" : {
		"@type" : "PostalAddress",
		"streetAddress" : "115 E 23rd St 3rd Floor",
		"addressLocality" : "New York",
		"addressRegion" : "NY",
		"postalCode" : "10010"
	  },
	  "geo": {
        "@type": "GeoCoordinates",
        "latitude":40.74031764888663,
        "longitude": -73.98557657561807
      },
	  "openingHoursSpecification" : {
		"@type": "OpeningHoursSpecification",
		"dayOfWeek": [
		  "Monday",
		  "Tuesday",
		  "Wednesday",
		  "Thursday",
		  "Friday",
		  "Saturday",
		  "Sunday"
		],
		"opens": "09:00",
		"closes": "21:00"
	  }
	}, {
	  "@context" : "http://schema.org",
	  "@type" : "LocalBusiness",
	  "name" : "PristineGreen Upholstery and Carpet Cleaning",
	  "image" : "https://pristinegreencleaning.com/images/Pristine-Green-Logo.jpg",
	  "telephone" : "347-871-6530",
	  "email" : "sales@pristinegreencleaning.com",
	  "pricerange":"$$",
	   "description":["Green Upholstery Cleaner","Upholstery cleaning service","upholsteyr cleaning nyc","green upholstery clenaing","carpet couch cleaning services","green rug cleaning nyc","carpet cleaning nyc","couch cleaning service nyc","carpet green upholstery cleaning","couch cleaner","upholstery cleaner nyc","carpet cleaner nyc"],
	  "sameas":["https://www.google.com/maps/place/PristineGreen+Upholstery+and+Carpet+Cleaning/@40.7358124,-73.9780817,13z/data=!4m8!1m2!2m1!1spristinegreencleaning!3m4!1s0x89c25f49eda93537:0xdcc4dea443c7443!8m2!3d40.7732257!4d-73.9062583","https://www.facebook.com/PristineGreen-Upholstery-and-Carpet-Cleaning-380402999024630/"],
	  "address" : {
		"@type" : "PostalAddress",
		"streetAddress" : "3811 Ditmars Blvd #1068",
		"addressLocality" : "Astoria",
		"addressRegion" : "NY",
		"postalCode" : "11105"
	  },
	   "geo": {
        "@type": "GeoCoordinates",
        "latitude": 40.773550327508126,
        "longitude": -73.90633777376749
      },
	  "openingHoursSpecification" : {
		"@type": "OpeningHoursSpecification",
		"dayOfWeek": [
		  "Monday",
		  "Tuesday",
		  "Wednesday",
		  "Thursday",
		  "Friday",
		  "Saturday",
		  "Sunday"
		],
		"opens": "09:00",
		"closes": "21:00"
	  }
	}, {
	  "@context" : "http://schema.org",
	  "@type" : "LocalBusiness",
	  "name" : "PristineGreen Upholstery and Carpet Cleaning",
	  "image" : "https://pristinegreencleaning.com/images/Pristine-Green-Logo.jpg",
	  "telephone" : "347-871-6530",
	  "email" : "sales@pristinegreencleaning.com",
	  "pricerange":"$$",
	   "description":["Green Upholstery Cleaner","Upholstery cleaning service","upholsteyr cleaning nyc","green upholstery clenaing","carpet couch cleaning services","green rug cleaning nyc","carpet cleaning nyc","couch cleaning service nyc","carpet green upholstery cleaning","couch cleaner","upholstery cleaner nyc","carpet cleaner nyc"],
	  "sameas":["https://www.google.com/maps/place/PristineGreen+Upholstery+and+Carpet+Cleaning/@40.7359319,-73.9780818,13z/data=!4m8!1m2!2m1!1spristinegreencleaning!3m4!1s0x89c25d487b9346b5:0x11d8fb16e21b2f67!8m2!3d40.6981707!4d-73.9005965","https://www.facebook.com/PristineGreen-Upholstery-and-Carpet-Cleaning-380402999024630/"],
	  "address" : {
		"@type" : "PostalAddress",
		"streetAddress" : "6705 Myrtle Ave #1015",
		"addressLocality" : "Queens",
		"addressRegion" : "NY",
		"postalCode" : "11385"
	  },
	    "geo": {
        "@type": "GeoCoordinates",
        "latitude": 40.70179648782509,
        "longitude": -73.88626503144144
      },
	  "openingHoursSpecification" : {
		"@type": "OpeningHoursSpecification",
		"dayOfWeek": [
		  "Monday",
		  "Tuesday",
		  "Wednesday",
		  "Thursday",
		  "Friday",
		  "Saturday",
		  "Sunday"
		],
		"opens": "09:00",
		"closes": "21:00"
	  }
	} ]

LD_JSON;
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('Title') | {{$seo->site_name}}</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=8, width=device-width">
    <meta name="title" content="{{ htmlentities($seo->site_title) }}">
    <meta name="description" content="{{ htmlentities($seo->site_description) }}">
    <meta name="keywords" content="{{ htmlentities($seo->site_keywords) }}">
{{--    <link rel="canonical" href="{{ htmlentities($seo->canonical) }}">--}}

    <meta property="og:site_name" content="{{ htmlentities($seo->site_name) }}">
    <meta property="og:title" content="{{ htmlentities($seo->og_site_title) }}">
    <meta property="og:description" content="{{ htmlentities($seo->og_description) }}">
    <meta property="og:url" content="{{ htmlentities($seo->og_url) }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ htmlentities($seo->og_image) }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="{{ htmlentities($seo->tw_title) }}">
    <meta name="twitter:description" content="{{ htmlentities($seo->tw_description) }}">
    <meta name="twitter:image" content="{{ htmlentities($seo->tw_image) }}">
    <meta name="twitter:url" content="{{ htmlentities($seo->tw_url) }}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="{{ htmlentities($seo->site_name) }}">
    <meta itemprop="url" content="{{ htmlentities($seo->og_url) }}">
    <meta itemprop="thumbnailUrl" content="{{ htmlentities($seo->og_image) }}">
    <meta itemprop="image" content="{{ htmlentities($seo->og_image) }}">
    <link rel="image_src" href="{{ htmlentities($seo->og_image) }}">

    <link rel="shortcut" type="image/png" href="{{asset('../../assets/icons/site_icon_128x128.png')}}">
    <link rel="icon" type="image/png" href="{{asset('../../assets/icons/site_icon_128x128.png')}}">
    <meta name="abstract" content="{{ htmlentities($seo->site_name) }} in NYC">
    <meta name="author" content="admin">
    <meta name="classification" content="Blog">
    <meta name="copyright" content="{{ htmlentities($seo->site_name) }} - All rights Reserved.">
    <meta name="distribution" content="Global">
    <meta name="language" content="en-GB">
    <meta name="publisher" content="PristineGreen Cleaning">
    <meta name="rating" content="General">
    <meta name="resource-type" content="Document">
    <meta name="revisit-after" content="3">
    <meta name="subject" content="Blog">

    <link rel="alternate" type="application/rss+xml" title="{{ htmlentities($seo->site_name) }} » Feed" href="/feed/">
    <link rel="alternate" type="application/rss+xml" title="{{ htmlentities($seo->site_name) }} » Comments Feed" href="/feed/comments/">


    <link rel="DNS-prefetch" href="https://ajax.googleapis.com/">
    <link rel="DNS-prefetch" href="https://maps.googleapis.com">
    <link rel="DNS-prefetch" href="https://maps.gstatic.com">
    <link rel="DNS-prefetch" href="https://cdnjs.cloudflare.com/">

    <link rel="DNS-prefetch" href="//fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://maps.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://maps.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&family=Roboto:wght@300;400;500;700&display=swap"
          as="style"
          media="print"
          onload="this.onload=null;this.removeAttribute('media');"
    >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('../../assets/css/starter.css')}}" type="text/css" media="all" >
    <link rel="preload" href="{{asset('../../assets/images/ny-carpet-cleaning.jpg')}}" as="image" type="image/jpeg">

    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&family=Roboto:wght@300;400;500;700&display=swap"
              media="all"
              rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('../../assets/libs/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('../../assets/css/starter.css')}}">
    </noscript>

    <style>
        @media (min-width: 1200px){.fs-1{font-size: 48px!important;}}
        .heading-text h4 {filter: drop-shadow(0 0 4px #666)}
        ::-webkit-scrollbar{width:8px}
        ::-webkit-scrollbar-track{
            -webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3)
        }
        .posts .text::-webkit-scrollbar {
            width: 5px;
        }
        .posts .text::-webkit-scrollbar-thumb {
            background: -webkit-gradient(linear,left top,left bottom,from(#7d7d7d),to(transparent));
            background: -webkit-linear-gradient(#484949,transparent);
            background: linear-gradient(#7d7d7d,transparent);
            background-color: #484949;
            border-radius: 10px;
        }
        .posts .text::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 2px rgba(0,0,0,.3);
        }
        .beforeAfterContainer {
            position: relative;
            width: 100%;
            height: 570px;
            border: 2px solid white;
        }
        .beforeAfterContainer .img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: 900px 100%;
        }
        .beforeAfterContainer .background-img {
            background-image: url("/assets/images/sofa-clean-after.webp");
        }
        .beforeAfterContainer .foreground-img {
            background-image: url("/assets/images/sofa-clean-before.webp");
            width: 50%;
        }
        .beforeAfterContainer .bslider {
            position: absolute;
            -webkit-appearance: none;
            appearance: none;
            width: 100%;
            height: 100%;
            background: rgba(242, 242, 242, 0.3);
            outline: none;
            margin: 0;
            transition: all 0.2s;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .beforeAfterContainer .bslider:hover {
            background: rgba(242, 242, 242, 0.1);
        }
        .beforeAfterContainer .bslider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 6px;
            height: 570px;
            background: white;
            cursor: pointer;
        }
        .beforeAfterContainer .bslider::-moz-range-thumb {
            width: 6px;
            height: 570px;
            background: white;
            cursor: pointer;
        }
        .beforeAfterContainer .slider-button {
            pointer-events: none;
            position: absolute;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: white;
            left: calc(50% - 18px);
            top: calc(50% - 18px);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .beforeAfterContainer .slider-button:after {
            content: "";
            padding: 3px;
            display: inline-block;
            border: solid #5D5D5D;
            border-width: 0 2px 2px 0;
            transform: rotate(-45deg);
        }
        .beforeAfterContainer .slider-button:before {
            content: "";
            padding: 3px;
            display: inline-block;
            border: solid #5D5D5D;
            border-width: 0 2px 2px 0;
            transform: rotate(135deg);
        }
        .slick-track .slick-slide{
            height: auto;
            margin: 0 10px;
        }
        .slick-list {
            margin: 0 -10px;
        }

        .navbar-nav>li>a {
            padding: 8px 24px;
        }
        .navbar-nav > .nav-item:last-child:hover::after{
            left:18px;
        }

        .main-content-cleaning-service .col-md-12.row {
            align-items: flex-start;
            justify-content: center;
        }

        #bgimage-loc-cleaning .heading-text h4{
            color: #000;
            filter: drop-shadow(0px 0px 4px #ffffff);
            text-shadow: 0 0 5px #ffffff;
        }
    </style>

    @yield('page_style')
</head>

<body class="carpet-cleaning-template-default single single-carpet-cleaning nyc-carpet-cleaning  single-format-standard group-blog">
    @if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false)
    <!-- Global site tag (gtag.js) - Google Ads: 936814553 -->
    <script defer>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            },
                i[r].l = 1 * new Date();

            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-42831478-22', 'auto');
        ga('send', 'pageview');
    </script>

    <script defer src="https://www.googletagmanager.com/gtag/js?id=AW-936814553"></script>
    <script defer>

        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-936814553');

        // ----- Event snippet for Website sale conversion page

        gtag('event', 'conversion', {
            'send_to': 'AW-936814553/R-xzCJWF_OECENnP2r4D',
            'transaction_id': ''
        });
    </script>

    <!-- Google Tag Manager -->
    <script defer>
        if(navigator.userAgent.indexOf("Speed Insights") == -1) {
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-WHPSR6H');
        }
    </script>
    <!-- End Google Tag Manager -->
    {!! $is_closed = !empty($_COOKIE['close_action']) && isset($_COOKIE['close_action']) && $_COOKIE['close_action'] == 'yes'; !!}
@endif
<main>
    <div id="page" class="site">
    <div class="green-line"></div>
    <!-- Header -->
    <header class="sticky-top">
        <div class="top-noti-bar {{ $is_closed ? 'd-none' : '' }} bg-red text-white py-2 w-100 flex-direction-row justify-content-center position-relative">
            <p class="mb-0">We are OPEN. We are following NYC's COVID-19 safety recommendations when performing services.</p>
            <i class="fa close-btn cancel" style="cursor: pointer;"></i>
        </div>
        <!-- Start Mega Menu HTML -->
        {{-- @include('dashboard.inc.navbar')--}}
        <nav class="navbar navbar-expand-lg navbar-light shadow border-bottom-green">

            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-6 d-flex justify-content-between">
                        <a class="navbar-brand " href="/">
                            <img class="lazy" data-src="/assets/logo/Stueys-Green-Auto-Clean-Logo.png" class="main-logo" alt="Stuey'sgreen" height="60" width="270">
                        </a>
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">
                            <div class="hamburger-toggle">
                                <div class="hamburger">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="col-md-8 col-lg-6  d-flex justify-content-center justify-content-md-end">
                        <div class="top-phone">
                            <div class="myphone">
                                <h3 class="mb-0 fw-bold"><a class="myphone" href="tel:917-877-0105">917-877-0105</a></h3>
                            </div>
                            <div class="phone_numb_inner"><span class="opening">Open 7 days 9am - 9pm</span></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                                <div class="col position-relative">
                                    <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
                                        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                                            <li class="nav-item dropdown dropdown-mega position-static">
                                                <a class="nav-link px-4 dropdown-toggle" href="/services/" data-bs-toggle="dropdown" data-bs-auto-close="outside">Auto Detailing Services</a>
                                                <div class="dropdown-menu bg-blue dark rounded-5 px-3 px-md-5 py-4">
                                                <div class="mega-content ">
                                                    <div class="container-fluid px-0">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6 col-md-8 py-4">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <h4 class="mb-3 text-white fw-bold">Mobile Auto Detailing Services</h4>
                                                                    <div class="list-group px-1 px-md-3">
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/mobile-auto-detailing">Mobile Auto Detailing</a>
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/full-service-car-wash">Full Service Car Wash</a>
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/car-auto-spa">Car and Auto Spa</a>
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/car-seat-cleaning-shampoo">Car Seat Cleaning & Shampoo</a>
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/interior-auto-detailing">Interior Auto Detailing</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="list-group px-1 px-md-3 mt-0 mt-md-5">
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/hand-car-wash">Hand Car Wash</a>
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/car-polish-wax">Car Polish and Wax</a>
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/paint-correction">Paint Correction</a>
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/car-deep-cleaning">Car Deep Cleaning</a>
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/truck-detailing">Truck Detailing</a>
																		 <a class="list-group-item bg-blue dark text-white border-0" href="/services/other-car-detailing-services">Other Detailing Services</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6 col-md-4 py-4">
                                                            <img class="ddr-image lazy img img-fluid" data-src="/assets/icons/Mobile-Auto-Detailing-Google-Yelp-Rating.png" width="278" height="386" alt="Mobile Auto Detail Google Yelp Rating">
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link px-4" href="/service-areas">Service Areas</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link px-4" href="/free-quote">Get a Quote</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link px-4" href="/gallery">Gallery</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link px-4" style="padding-right:0 !important" href="/contact-us">Contact Us</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
            </div>
        </nav>
        <!-- END Mega Menu HTML -->
    </header>
    <!-- End Header -->

        @yield('content')


    @include('business_location.inc.footer_callback')
    @include('business_location.inc.footer_top')

    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row mb-5">
                        <div class="col-md-6 mb-4">
                            <div id="text-2" class="widget-container widget_text">
                                <div class="textwidget">
                                    <div class="textwidget">
                                        <div class="logo"><img class="logo-white lazy" data-src="/assets/logo/Stueys-Green-Auto-Clean-Logo.png" alt="Stuey'sautocleaning"  width="256" height="57"></div>
                                        <ul class="social-icons">
                                            <li>
                                                <a href="https://www.facebook.com/PristineGreen-Upholstery-and-Carpet-Cleaning-380402999024630/?__tn__=%2Cg/" target="_blank" rel="noreferrer">
                                                    <img class="lazy" data-src="{{asset('../../assets/icons/facebook.png') }}" alt="facebook" width="32px" height="32px">
                                                </a>
                                            </li>
                                            <li><a href="https://twitter.com/PGCarpetClean" target="_blank" rel="noreferrer">
                                                    <img class="lazy" data-src="{{asset('../../assets/icons/twitter.png') }}" alt="twitter" width="32px" height="32px"></a>
                                            </li>
                                            <li><a href="https://www.instagram.com/pristinegreencleaning/" target="_blank" rel="noreferrer">
                                                    <img class="lazy" data-src="{{asset('../../assets/icons/instagram.png') }}" alt="instagram" width="32px" height="32px"></a>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <a href="https://www.paypal.me/PristineGreen" target="_blank" rel="noreferrer">
                                                    <img class="trade-logo lazy" data-src="{{asset('../../assets/images/Paypal.webp') }}" alt="paypal payments"  width="180" height="180">
                                                </a>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <a href="https://www.paypal.com/qrcodes/venmocs/3cd63d8b-" target="_blank" rel="noreferrer">
                                                    <img class="trade-logo lazy" data-src="{{asset('../../assets/images/Venmo-Payment.webp') }}" alt="paypal payments"  width="186" height="156">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="quick-links">
							  <h6>quick links</h6>

							  <ul class="links">
								<div class="menu-footer-menu-container">
								  <ul id="menu-footer-menu" class="menu">
									<li id="menu-item-2357" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2357"><a href="/about-us">About Us</a></li>
									<li id="menu-item-2351" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-2351"><a href="/services/mobile-auto-detailing">Mobile Auto Detailing</a></li>
									<li id="menu-item-2350" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-2350"><a href="/services/car-auto-spa">Car and Auto Spa</a></li>
									<li id="menu-item-2349" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-2349"><a href="/services/car-deep-cleaning">Car Deep Cleaning</a></li>
									<li id="menu-item-2347" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-2347"><a href="/services/car-seat-cleaning-shampoo">Car Seat Cleaning & Shampoo</a></li>
									<li id="menu-item-2346" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-2346"><a href="/services/car-polish-wax">Car Polish and Wax</a></li>
									<li id="menu-item-2539" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-2539"><a href="/services/full-service-car-wash">Full Service Car Wash</a></li>
									<li id="menu-item-2348" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-2348"><a href="/services/hand-car-wash">Hand Car Wash</a></li>
									<li id="menu-item-2348" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-2348"><a href="/services/interior-auto-detailing">Interior Auto Detailing</a></li>
									<li id="menu-item-2360" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2360"><a href="/referral-program">Referral Program</a></li>
									<li id="menu-item-2354" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2354"><a href="/faqs">FAQ’s</a></li>
									<li id="menu-item-2361" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2361"><a href="/blog">Blog</a></li>
								  </ul>
								</div>
							  </ul>
							</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="quick-links">
							  <h6>SERVICE AREAS</h6>

							  <ul class="links-a">
								<input class="form-control" type="hidden" name="cat" id="cat" value="">
								<div class="menu-footer-menu-2-container">
								  <ul id="menu-footer-menu-2" class="menu">
									<li id="menu-item-2475" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2475"><a href="/service-areas/">Astoria</a></li>
									<li id="menu-item-2475" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2475"><a href="/service-areas/">East Village</a></li>
									<li id="menu-item-2478" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2478"><a href="/service-areas/">Gramercy Park</a></li>
									<li id="menu-item-2479" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2479"><a href="/service-areas/">Lower East Side</a></li>
									<li id="menu-item-2480" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2480"><a href="/service-areas/">Maspeth</a></li>
									<li id="menu-item-2481" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2481"><a href="/service-areas/">Midtown</a></li>
									<li id="menu-item-2482" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2482"><a href="/service-areas/">Park Slope</a></li>
									<li id="menu-item-2483" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2483"><a href="/service-areas/">Prospect Park South</a></li>
									<li id="menu-item-3692" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-3692"><a href="/service-areas/">Queens Village</a></li>
									<li id="menu-item-2484" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2484"><a href="/service-areas/">Union Square</a></li>
									<li id="menu-item-2485" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2485"><a href="/service-areas/">Upper West Side</a></li>
									<li id="menu-item-2486" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2486"><a href="/service-areas/">Woodside</a></li>
									<li id="menu-item-2486" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2486"><a href="/service-areas/">Woodhaven</a></li>
									<li id="menu-item-2505" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2489"><a href="/service-areas">View More Areas</a></li>
								  </ul>
								</div>
							  </ul>
							</div>
                        </div>
                        <div class="col-md-6">
                            <div class="quick-links address-info">
                  <h6>get in touch</h6>

                  <div id="text-3" class="widget-container widget_text">
                    <div class="textwidget">

                      <ul class="links">

                        <li><span class="text-bold">Stuey's Green Auto Clean</span></li>
                        <li>1735 Norman St</li>
                        <li>Queens, NY 11385</li>
                        <li><a class="myphone" href="tel:9178770105">917-877-0105</a></li>
						  
                      <a rel="canonical" class="myphone-mobile-only" href="tel:13478716530"><img rel="canonical" class="lazy" data-src="stueysgreenautoclean.com/assets/icons/call-icon.webp" alt="call" width="64" height="64"></a>
                    </li>
                        <li><a href="https://www.google.com/maps/place/Stuey's+Green+Auto+Clean/@40.69816,-73.9027587,17z/data=!3m1!4b1!4m5!3m4!1s0x89c25c2f585001ef:0xcf4c4430d9098bb3!8m2!3d40.698156!4d-73.90057" target="_blank" rel="noreferrer">Maps &amp; Directions</a></li>
                        <br>
                      
                        <li><a href="mailto:sales@stueysgreenautoclean.com">sales@stueysgreenautoclean.com</a></li>
                      </ul>

                    </div>
                  </div>

                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="copyright">
        <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
            <div class="row">
                <ul class="copylink">
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                    <span class="vertical-border"></span>
                    <li><a href="/sitemap.xml" target="_blank" rel="noopener">Sitemap</a></li>
                </ul>
                <p>©  2021 PristineGreen Cleaning, LLC. All rights reserved.</p>
            </div>
        </div>
    </section>
    <section id="modal-window" class="">
        <div style="top:0px !important;background-color: rgba(0, 208, 198, 0.8);display: none;" id="ouibounce-modal" class="modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header"></div>
                    <div class="modal_body modal-1">
                        <p class="popup-heading">Wait! Before you go...</p>
                        <div class="separator"></div>
                        <p class="popup-text">Get $10 Off Your First Carpet Clean*</p>
                    </div>
                    <div class="modal-footer border-0">
                        <div class="btn-wrap">
                            <button class="exitblack yes border-0 text-white" type="button" aria-label="Yes"><span class="option-big">Yes Please</span><br><span class="option-small">Send me the coupon</span></button>
                            <button class="exitno no close border-0 text-white" type="button" aria-label="No"><span class="option-big">No Thanks</span><br><span class="option-small">I am not interested</span></button>
                        </div>
                        <div id="nothankstext"><span class="hours">*Valid For 48 Hours Only</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal_yes" style="top:0px !important;background-color: rgba(0, 208, 198, 0.8);display:none;" class="modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal_body modal-2">
                        <img class="lazy" data-src="{{asset('../../assets/images/modal-window-2nd.png')}}" alt="Great! Where should you send 10% off coupon?" width="440">
                    </div>
                    <div class="modal-footer border-0 mt-3">
                        <div class="klaviyo_field_group w-100">
                            <div class="klaviyo_form_actions">
                                <form action="" method="post" id="subFormPopup" novalidate="novalidate">
                                    <input type="hidden" name="get_coupon">
                                    <p><input id="fieldEmailPopup" class="your-email w-100" name="your-email" type="email" placeholder="Enter Your Email Address" required></p>
                                    <button class="modal-button required border-0 w-100 bg-green text-white" type="submit" id="submit-btn-popup" name="get_coupon" aria-label="Get Coupon">Get My $10 Off Coupon</button>
                                </form>
                            </div>
                        </div>
                        <div class="klaviyo_messages">
                            <div class="success_message" style="display: none;"></div>
                            <div class="error_message" style="display: none;"></div>
                        </div>
                        <div id="nothankstext"><span class="close nothanks">No! I do not want a free $10 off coupon</span></div>
                    </div>
                </div>
                <div id="modal_no" class="modal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal_body modal-3"><img class="lazy" data-src="{{asset('../../assets/images/modal-window-3nd.png') }}" alt="Check your inbox for your $10 off coupon!" width="460" height="145"></div>
                            <div class="modal-footer"><button class="exitblue close border-0" type="button" aria-label="Return">Return to Site</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</main>
<script src="{{asset('../../assets/js/jquery.min.js')}}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" defer integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js" defer></script>
<script type="module" src="{{asset('../../assets/js/placeholderTypewriter.js') }}" defer></script>
<script type="module" src="{{asset('../../assets/js/jquery.lazy.min.js') }}" defer></script>
<script type="module" src="{{asset('../../assets/js/starter.js') }}" defer></script>
@yield('page_script')
</body>
</html>
