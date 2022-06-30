<?php
//include('operations.php');

//------------------------------------- Header Tag - Data
$defaultBodyClass = isset($bodyClass) && !empty($bodyClass) ? $bodyClass : '';

$review_count = 70;
$site_name = "Stuey's Green Auto Clean | Mobile Auto Detailing";
$site_title = (isset($site_title) && !empty($site_title))? $site_title : "Stuey's Green Auto Clean | Mobile Auto Detailing in NYC, Brooklyn, and Queens"; $site_title.= ' | '.$site_name;
$site_description = (isset($site_description) && !empty($site_description))? $site_description : "Stuey's Green Auto Clean is a Mobile Auto Detailing and Car & Auto Spa in NYC, Queens, Brooklyn, Bronx, Long Island, and Staten Island";
$site_keywords = (isset($site_keywords) && !empty($site_keywords))? $site_keywords : "car detailing near me, car detailing, hand car wash near me, auto detailing near me, detailing, auto detailing, full service car wash near me, detailing near me, mobile detailing near me, car cleaning near me, mobile car wash, mobile car detailing near me, hand car wash, car cleaning, auto spa, car interior cleaning, full service car wash, mobile car detailing, hand wash car wash, car spa, mobile car wash near me, mobile detailing, paint correction, detail shop near me, interior car detailing near me, detail car wash, car interior detailing, detail car wash near me, detail, car seat cleaning, car polishing, car detailing services, car carpet cleaning, car steam cleaning, car upholstery cleaning, car shampooing, best detailing, autospa, mobile auto detailing near me, complete car detailing near me, car wax polish, truck detailing near me, car deep cleaning near me";
$canonical = (isset($canonical) && !empty($canonical))? $canonical : (( (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443 ) ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] .'/'. $_SERVER['SCRIPT_NAME'];
$og_site_title = (isset($og_site_title) && !empty($og_site_title))? $og_site_title : $site_title;
$og_description = (isset($og_description) && !empty($og_description))? $og_description : $site_description;
$og_title = (isset($og_title) && !empty($og_title))? $og_title : "Mobile Auto Detailer NYC, Brooklyn, and Queens | Stuey's Green Auto Clean ";
$og_url = (isset($og_url) && !empty($og_url))? $og_url : (( (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443 ) ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] .'/'. substr( $_SERVER['REQUEST_URI'], 0, strpos( $_SERVER['REQUEST_URI'], '?' ) );
$og_image = (isset($og_image) && !empty($og_image))? $og_image : "https://stueysgreenautoclean.com/assets/images/Stuey's-Green-Auto-Clean-NY-11385-mobile-auto-detailing-car-deep-cleaning-Queens.jpg";

$tw_title = (isset($tw_title) && !empty($tw_title))? $tw_title : $og_title;
$tw_description = (isset($tw_description) && !empty($tw_description))? $tw_description : $og_description;
$tw_url = (isset($tw_url) && !empty($tw_url))? $tw_url : $og_url;
$tw_image = (isset($tw_image) && !empty($tw_image))? $tw_image : $og_image;

if( isset($ld_json) && !empty(trim($ld_json)) ){
    $ld_json = $ld_json;
}else{
    $ld_json = <<<LD_JSON
	[ {
	  "@context" : "http://schema.org",
	  "@type" : "LocalBusiness",
	  "name" : "Stuey's Green Auto Clean",
	  "image" : "https://stueysgreenautoclean.com/images/Stueys-Green-Auto-Clean-Logo.png",
	  "telephone" : "917-877-0105",
	  "email" : "sales@stueysgreenautoclean.com",
	  "pricerange":"$$",
	  "description":["car detailing near me", "car detailing", "hand car wash near me", "auto detailing near me", "detailing", "auto detailing", "full service car wash near me", "detailing near me", "mobile detailing near me", "car cleaning near me", "mobile car wash", "mobile car detailing near me", "hand car wash", "car cleaning", "auto spa", "car interior cleaning", "full service car wash", "mobile car detailing", "hand wash car wash", "car spa", "mobile car wash near me", "mobile detailing", "paint correction", "detail shop near me", "interior car detailing near me", "detail car wash", "car interior detailing", "detail car wash near me", "detail", "car seat cleaning", "car polishing", "car detailing services", "car carpet cleaning", "car steam cleaning", "car upholstery cleaning", "car shampooing", "best detailing", "autospa", "mobile auto detailing near me", "complete car detailing near me", "car wax polish", "truck detailing near me", "car deep cleaning near me"],
	  "sameas":["https://www.google.com/maps/place/Stuey's+Green+Auto+Clean/@40.69816,-73.9027587,17z/data=!3m1!4b1!4m5!3m4!1s0x89c25c2f585001ef:0xcf4c4430d9098bb3!8m2!3d40.698156!4d-73.90057","https://www.facebook.com/XXX"],
	  "address" : {
		"@type" : "PostalAddress",
		"streetAddress" : "1735 Norman St",
		"addressLocality" : "Queens",
		"addressRegion" : "NY",
		"postalCode" : "11385"
	  },
	  "geo": {
        "@type": "GeoCoordinates",
        "latitude":40.69816,
        "longitude": -73.9027587
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
		"opens": "08:00",
		"closes": "20:00"
	  }
	} ]

LD_JSON;
}

$expire = time()+60*60*24*30;
setcookie("close_action", "", $expire,'/')
?>

<!DOCTYPE html>
<html lang="en-GB">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!---<meta name=”robots” content=”noindex,follow” />--->
        <title><?php echo htmlentities($site_title); ?></title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=8, width=device-width">
        <meta name="title" content="<?php echo htmlentities($site_title); ?>">
        <meta name="description" content="<?php echo htmlentities($site_description); ?>">
        <meta name="keywords" content="<?php echo htmlentities($site_keywords); ?>">
        <link rel="canonical" href="<?php echo htmlentities($canonical); ?>">

        <meta property="og:site_name" content="<?php echo htmlentities($site_name); ?>">
        <meta property="og:title" content="<?php echo htmlentities($og_site_title); ?>">
        <meta property="og:description" content="<?php echo htmlentities($og_description); ?>">
        <meta property="og:url" content="<?php echo htmlentities($og_url); ?>">
        <meta property="og:type" content="website">
        <meta property="og:image" content="<?php echo htmlentities($og_image); ?>">
        <meta property="fb:admins" content="admin">
        <meta name="twitter:title" content="<?php echo htmlentities($tw_title); ?>">
        <meta name="twitter:description" content="<?php echo htmlentities($tw_description); ?>">
        <meta name="twitter:image" content="<?php echo htmlentities($tw_image); ?>">
        <meta name="twitter:url" content="<?php echo htmlentities($tw_url); ?>">
        <meta name="twitter:card" content="summary">

        <meta itemprop="name" content="<?php echo htmlentities($site_name); ?>">
        <meta itemprop="url" content="<?php echo htmlentities($og_url); ?>">
        <meta itemprop="thumbnailUrl" content="<?php echo htmlentities($og_image); ?>">
        <meta itemprop="image" content="<?php echo htmlentities($og_image); ?>">
        <link rel="image_src" href="<?php echo htmlentities($og_image); ?>">

        <link rel="shortcut" type="image/png" href="assets/icons/site_icon_128x128.png">
        <link rel="icon" type="image/png" href="assets/icons/site_icon_128x128.png">
        <meta name="abstract" content="<?php echo htmlentities($site_name); ?> in NYC">
        <meta name="author" content="admin">
        <meta name="classification" content="Blog">
        <meta name="copyright" content="<?php echo htmlentities($site_name); ?> - All rights Reserved.">
        <meta name="distribution" content="Global">
        <meta name="language" content="en-GB">
        <meta name="publisher" content="Stuey's Green Auto Clean">
        <meta name="rating" content="General">
        <meta name="resource-type" content="Document">
        <meta name="revisit-after" content="3">
        <meta name="subject" content="Blog">


        <link rel="alternate" type="application/rss+xml" title="<?php echo htmlentities($site_name); ?> » Feed" href="/feed/">
	    <link rel="alternate" type="application/rss+xml" title="<?php echo htmlentities($site_name); ?> » Comments Feed" href="/feed/comments/">


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
        <link rel="stylesheet" href="/assets/css/starter.css" type="text/css" media="all" >
        <link rel="preload" href="/assets/images/ny-carpet-cleaning.jpg" as="image" type="image/jpeg">

        <noscript>
            <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&family=Roboto:wght@300;400;500;700&display=swap"
                media="all"
                rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="/assets/libs/bootstrap-5.0.2-dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="/assets/css/starter.css">
        </noscript>
        <script type="application/ld+json">
          <?php echo $ld_json; ?>
        </script>
        <style>
            @media (min-width: 1200px){.fs-1{font-size: 48px!important;}}.heading-text h4 {filter: drop-shadow(0 0 4px #666)}::-webkit-scrollbar{width:12px}::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);
            border-radius:10px}::-webkit-scrollbar-thumb{border-radius:10px;-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.5)}

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
                background-image: url("/assets/images/Stuey's-Green-Auto-Clean-NY-11385-mobile-auto-detailing-headlight-polishing-NYC-Queens.jpg");
            }
            .beforeAfterContainer .foreground-img {
                background-image: url("/assets/images/Stuey's-Green-Auto-Clean-NY-11385-mobile-auto-detailing-headlight-polishing-NYC-Queens.jpg");
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

    </head>

    <body class="<?php echo $defaultBodyClass; ?>">
    <?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HVE4HYSMBZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HVE4HYSMBZ');
</script>
      
    <?php $is_closed = $is_closed = !empty($_COOKIE['close_action']) && isset($_COOKIE['close_action']) && $_COOKIE['close_action'] == 'yes'; ?>
    <?php endif; ?>
        <main>
            <div id="page" class="site">
                <div class="green-line"></div>
                <!-- Header -->
                <header class="sticky-top">
                    <div class="top-noti-bar <?php echo  $is_closed ? 'd-none' :'';?> bg-red text-white py-2 w-100 flex-direction-row justify-content-center position-relative">
                      <p class="mb-0">We are OPEN. We are following NYC's COVID-19 safety recommendations when performing services.</p>
                      <i class="fa close-btn cancel" style="cursor: pointer;"></i>
                   </div>
                    <!-- Start Mega Menu HTML -->
                    <nav class="navbar navbar-expand-lg navbar-light shadow border-bottom-green">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-lg-6 d-flex justify-content-between">
                                    <a class="navbar-brand " href="/">
                                        <img class="lazy" data-src="/assets/logo/Stueys-Green-Auto-Clean-Logo.png" class="main-logo" alt="Stueys Green Auto Clean" height="90" width="270">
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


