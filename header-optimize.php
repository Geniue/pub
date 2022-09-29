<?php
//include('operations.php');

//------------------------------------- Header Tag - Data
$defaultBodyClass = isset($bodyClass) && !empty($bodyClass) ? $bodyClass : '';
$defaultBaseUrl = isset($baseUrl) && !empty($baseUrl) ? $baseUrl : (( (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443 ) ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'];
$review_count = 70;
$site_name = "PristineGreen Upholstery and Carpet Cleaning";
$site_title = (isset($site_title) && !empty($site_title))? $site_title : "Carpet Cleaners NYC, Brooklyn, and Queens"; $site_title.= ' | '.$site_name;
$site_description = (isset($site_description) && !empty($site_description))? $site_description : "PristineGreen Cleaning is your trusted carpet cleaner in NYC, Queens, Brooklyn, Bronx, Long Island, and Staten Island";
$site_keywords = (isset($site_keywords) && !empty($site_keywords))? $site_keywords : "rug cleaning ny, oriental rug cleaner, sofa cleaning nyc, area rug cleaning nyc, carpet cleaner service, ny carpet cleaning, carpet cleaner nyc, couch cleaner nyc, rug cleaner nyc, upholstery cleaning brooklyn, furniture cleaning nyc, carpet cleaner companies near me, sofa cleaning brooklyn, mattress cleaner nyc, upholstery cleaning nyc, rug clean service, couch cleaning services, rug cleaner brooklyn, couch cleaner brooklyn, mattress cleaning brooklyn, area rugs cleaning, carpet cleaner brooklyn, furniture cleaning brooklyn, rug cleaner, clean area rug near me, upholstery cleaning queens, carpet cleaning professional, the best carpet cleaning, rug cleaner queens, best upholstery cleaning, carpet cleaner queens, upholstery steam cleaning, best carpet steam cleaner, carpet cleaner, carpet cleaning commercial, carpet shampoo cleaning, carpet shampoo near me, couch cleaner, couch steam cleaning, furniture cleaning, furniture steam cleaning, mattress cleaner, rug shampoo near me, sofa cleaning, steam cleaner near me, upholstery cleaning, couch cleaner queens, furniture cleaning queens, mattress cleaner brooklyn, mattress cleaner queens, sofa cleaner queens, sofa cleaning queens";



$canonical = (isset($canonical) && !empty($canonical))? $canonical : (( (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443 ) ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'];
$og_site_title = (isset($og_site_title) && !empty($og_site_title))? $og_site_title : $site_title;
$og_description = (isset($og_description) && !empty($og_description))? $og_description : $site_description;
$og_title = (isset($og_title) && !empty($og_title))? $og_title : "Carpet Cleaners NYC, Brooklyn, and Queens | PristineGreen Cleaning ";
$og_url = (isset($og_url) && !empty($og_url))? $og_url : $defaultBaseUrl .'/'. substr( $_SERVER['REQUEST_URI'], 0, strpos( $_SERVER['REQUEST_URI'], '?' ) );
$og_image = (isset($og_image) && !empty($og_image))? $og_image : $defaultBaseUrl."/assets/images/sofa-cleaning-NYC-10010-NY-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg";

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
	},
	 {
	  "@context" : "http://schema.org",
	  "@type" : "LocalBusiness",
	  "name" : "PristineGreen Upholstery and Carpet Cleaning",
	  "image" : "https://pristinegreencleaning.com/images/Pristine-Green-Logo.jpg",
	  "telephone" : "917-727-0936",
	  "email" : "sales@pristinegreencleaning.com",
	  "pricerange":"$$",
	  "description":["Green Upholstery Cleaner","Upholstery cleaning service","upholsteyr cleaning nyc","green upholstery clenaing","carpet couch cleaning services","green rug cleaning nyc","carpet cleaning nyc","couch cleaning service nyc","carpet green upholstery cleaning","couch cleaner","upholstery cleaner nyc","carpet cleaner nyc"],
	  "sameas":
["https://www.google.com/maps/place/PristineGreen+Upholstery+and+Carpet+Cleaning+-+UES+Branch/@40.772919,-73.9908975,14z/data=!4m9!1m2!2m1!1spristinegreen+c+leaning+ues!3m5!1s0x89c259dca12dcbbf:0x1a7319a3f860b2ba!8m2!3d40.772919!4d-73.9558786!15sChtwcmlzdGluZWdyZWVuIGMgbGVhbmluZyB1ZXMiA4gBAZIBF2NhcnBldF9jbGVhbmluZ19zZXJ2aWNl","https://www.facebook.com/PGCarpetCleaning/"],
	  "address" : {
		"@type" : "PostalAddress",
		"streetAddress" : "265 E 78th St #6E",
		"addressLocality" : "New York",
		"addressRegion" : "NY",
		"postalCode" : "10075"
	  },
	  "geo": {
        "@type": "GeoCoordinates",
        "latitude":40.772919,
        "longitude": -73.9558786
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
	}]

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

		<link rel="shortcut" type="image/png" href="/assets/icons/site_icon_128x128.png">
        <link rel="icon" type="image/png" href="/assets/icons/site_icon_128x128.png">
		
        <meta name="abstract" content="<?php echo htmlentities($site_name); ?> in NYC">
        <meta name="author" content="admin">
        <meta name="classification" content="Blog">
        <meta name="copyright" content="<?php echo htmlentities($site_name); ?> - All rights Reserved.">
        <meta name="distribution" content="Global">
        <meta name="language" content="en-GB">
        <meta name="publisher" content="PristineGreen Cleaning">
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
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/css/starter.css" type="text/css" media="all" >
        <link href="<?= $defaultBaseUrl ?>/assets/images/ny-carpet-cleaning.jpg" as="image" type="image/jpeg">
		
        <noscript>
			
            <link rel="stylesheet" href="/assets/libs/bootstrap-5.0.2-dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="/assets/css/starter.css">
        </noscript>
		<script>
			document.querySelector("body").style.removeProperty("font-family");
		</script>
        <script type="application/ld+json" defer>
          <?php echo $ld_json; ?>
        </script>
		<script type="text/javascript" defer>
			(function() {
				window.__insp = window.__insp || [];
				__insp.push(['wid', 542964794]);
				var ldinsp = function(){
					if(typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js?wid=542964794&r=' + Math.floor(new Date().getTime()/3600000); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
				setTimeout(ldinsp, 0);
			})();
		</script>
		<script type="module" src="<?= $baseUrl ?>/assets/js/fontAw.min.js" defer></script>
		
		<link rel="stylesheet" href="/assets/fonts/lato/stylesheet.css">
		
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
                background-image: url("<?= $defaultBaseUrl ?>/assets/images/after-clean.jpg");
            }
            .beforeAfterContainer .foreground-img {
                background-image: url("<?= $defaultBaseUrl ?>/assets/images/before-clean.jpg");
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
			
			
			
			.accordion-header {
				border-top-right-radius: 13px !important;
				border-top-left-radius: 13px !important;
				border-bottom-right-radius: 13px !important;
				border-bottom-left-radius: 13px !important;
			}
			
			
			
			
			@font-face {
				font-family: 'zabal_demoregular';
				src: url('../assets/fonts/zabal/zabaldemo-ultraitalic-webfont.woff2') format('woff2'),
					url('../assets/fonts/zabal/zabaldemo-ultraitalic-webfont.woff') format('woff');
				font-weight: normal;
				font-style: normal;

			}


	@font-face {
		font-family: 'zabal_demoultra';
		src: url('../assets/fonts/zabal/zabaldemo-ultra-webfont.woff2') format('woff2'),
			url('../assets/fonts/zabal/zabaldemo-ultra-webfont.woff') format('woff');
		font-weight: normal;
		font-style: normal;

	}




	@font-face {
		font-family: 'zabal_demothin_italic';
		src: url('../assets/fonts/zabal/zabaldemo-thinitalic-webfont.woff2') format('woff2'),
			url('../assets/fonts/zabal/zabaldemo-thinitalic-webfont.woff') format('woff');
		font-weight: normal;
		font-style: normal;

	}




	@font-face {
		font-family: 'zabal_demoultra_italic';
		src: url('../assets/fonts/zabal/zabaldemo-thin-webfont.woff2') format('woff2'),
			url('../assets/fonts/zabal/zabaldemo-thin-webfont.woff') format('woff');
		font-weight: normal;
		font-style: normal;

	}




	@font-face {
		font-family: 'zabal_demosemibold_italic';
		src: url('../assets/fonts/zabal/zabaldemo-semibolditalic-webfont.woff2') format('woff2'),
			url('../assets/fonts/zabal/zabaldemo-semibolditalic-webfont.woff') format('woff');
		font-weight: normal;
		font-style: normal;

	}




	@font-face {
		font-family: 'zabal_demosemibold';
		src: url('../assets/fonts/zabal/zabaldemo-semibold-webfont.woff2') format('woff2'),
			url('../assets/fonts/zabal/zabaldemo-semibold-webfont.woff') format('woff');
		font-weight: normal;
		font-style: normal;

	}




	@font-face {
		font-family: 'zabal_demoregular';
		src: url('../assets/fonts/zabal/zabaldemo-regular-webfont.woff2') format('woff2'),
			url('../assets/fonts/zabal/zabaldemo-regular-webfont.woff') format('woff');
		font-weight: normal;
		font-style: normal;

	}




	@font-face {
		font-family: 'zabal_demomedium_italic';
		src: url('../assets/fonts/zabal/zabaldemo-mediumitalic-webfont.woff2') format('woff2'),
			url('../assets/fonts/zabal/zabaldemo-mediumitalic-webfont.woff') format('woff');
		font-weight: normal;
		font-style: normal;

	}


	@font-face {
		font-family: 'zabal_demomedium';
		src: url('../assets/fonts/zabal/zabaldemo-medium-webfont.woff2') format('woff2'),
			url('../assets/fonts/zabal/zabaldemo-medium-webfont.woff') format('woff');
		font-weight: normal;
		font-style: normal;

	}

	.fa{
		display:inline-block;
		font:normal normal normal 14px/1 latolight_italic;
		font-size:inherit;
		text-rendering:auto;
		-webkit-font-smoothing:antialiased;
		-moz-osx-font-smoothing:grayscale
	}
	.fab{
		display:inline-block;
		font:normal normal normal 14px/1 latohairline;
		font-size:inherit;
		text-rendering:auto;
		-webkit-font-smoothing:antialiased;
		-moz-osx-font-smoothing:grayscale
	}
	.far{
		display:inline-block;
		font:normal normal normal 14px/1 latohairline_italic;
		font-size:inherit;
		text-rendering:auto;
		-webkit-font-smoothing:antialiased;
		-moz-osx-font-smoothing:grayscale
	}
	.fa-fw{
		width:1.28571429em;
		text-align:center
	}
			body {
				font-family: latoregular;
			}
	
        </style>

    </head>
	<style>
		.bg-blue.dark {
			background-color: #2baf38;
		}
		
		.accordion-button:focus {
			border-top-right-radius: 13px !important;
			border-top-left-radius: 13px !important;
			border-bottom-right-radius: 13px !important;
			border-bottom-left-radius: 13px !important;
			background-color:#2baf38 !important;
		}
		
		.accordion-button {
			border-top-right-radius: 13px !important;
			border-top-left-radius: 13px !important;
			border-bottom-right-radius: 13px !important;
			border-bottom-left-radius: 13px !important;
			background-color:#2baf38 !important;
		}
		.bg-theme-green{background-color:#2baf38 !important}
		.text-green{color:#2baf38}.text-blue{font-size:28px;line-height:36px;color:#0092d8}
		.fw-bold{color:#000}
		.fw-normal{color:#000}
		
		.text-blue{color:#4873b7}
	</style>
    <body class="<?php echo $defaultBodyClass; ?>">
    <?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
<!-- Global site tag (gtag.js) - Google Ads: AW-936814553 -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-936814553"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'AW-936814553');
		</script>
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
		<!-- Pixel Code for https://app.watchthem.live/ -->
<script defer src="https://app.watchthem.live/pixel/h7rCYWRuZ3zVdwbc"></script>
<!-- END Pixel Code -->
      <script defer>
          if(navigator.userAgent.indexOf("Speed Insights") == -1) {
              (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
              })(window,document,'script','dataLayer','GTM-WHPSR6H');
          }
      </script>
	 
	  <style>
		  /*! Generated by Font Squirrel (https://www.fontsquirrel.com) on September 3, 2022 */
		@font-face {
			font-family: 'ralewaythin';
			src: url('../assets/fonts/raleway/raleway-variablefont_wght-webfont.woff2') format('woff2'),
				 url('../assets/fonts/raleway/raleway-variablefont_wght-webfont.woff') format('woff');
			font-weight: normal;
			font-style: normal;

		}

		@font-face {
			font-family: 'ralewayregular';
			src: url('../assets/fonts/raleway/raleway-regular-webfont.woff2') format('woff2'),
				 url('../assets/fonts/raleway/raleway-regular-webfont.woff') format('woff');
			font-weight: normal;
			font-style: normal;

		}


		@font-face {
			font-family: 'ralewaythin_italic';
			src: url('../assets/fonts/raleway/raleway-italic-variablefont_wght-webfont.woff2') format('woff2'),
				 url('../assets/fonts/raleway/raleway-italic-variablefont_wght-webfont.woff') format('woff');
			font-weight: normal;
			font-style: normal;

		}
		  @font-face {
			font-family: 'quicksandregular';
			src: url('../assets/fonts/quicksand/quicksand-regular-webfont.woff2') format('woff2'),
				 url('../assets/fonts/quicksand/quicksand-regular-webfont.woff') format('woff');
			font-weight: normal;
			font-style: normal;

		}
	  </style>
      <!-- End Google Tag Manager -->
    <?php $is_closed = $is_closed = !empty($_COOKIE['close_action']) && isset($_COOKIE['close_action']) && $_COOKIE['close_action'] == 'yes'; ?>
    <?php endif; ?>
        <main>
            <div id="page" class="site">
                <!-- Header -->
                <header class="sticky-top">
                    
                    <!-- Start Mega Menu HTML -->
                    <nav class="navbar navbar-expand-lg navbar-light shadow border-bottom-green">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-lg-6 d-flex justify-content-between">
                                    <a class="navbar-brand " href="/">
                                        <img class="lazy" src="https://pristinegreencleaning.com/assets/logo/PGUpholsteryAndCarpetCleaning.png" data-src="https://pristinegreencleaning.com/assets/logo/PGUpholsteryAndCarpetCleaning.png" class="main-logo" alt="PrisineGreen" height="60" width="270" >
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
                                            <h3 class="mb-0 fw-bold" style="color:#76D381">
												
												<a class="myphone" href="tel:347-871-6530" style="color:#76D381"><img width="35" height="35" src="https://pristinegreencleaning.com/assets/icons/call.png"> 212-920-9013</a>
											</h3>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col position-relative">
                                    <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
                                        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                                            <li class="nav-item dropdown dropdown-mega position-static">
                                                <a class="nav-link px-4 dropdown-toggle" href="/services/" data-bs-toggle="dropdown" data-bs-auto-close="outside">Construction Services</a>
                                                <div class="dropdown-menu bg-blue dark rounded-5 px-3 px-md-5 py-4">
                                                <div class="mega-content ">
                                                    <div class="container-fluid px-0">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6 col-md-8 py-4">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <h4 class="mb-3 text-white fw-bold">Construction & Renovation Services</h4>
                                                                    <div class="list-group px-1 px-md-3">
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/home-remodel">Home Remodel</a>
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/bathroom-remodel">Bathroom Remodel</a>
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/home-renovation">Home Renovation</a>
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/deck-builders">Deck Builders</a>
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/finish-basement">Finish Basement</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="list-group px-1 px-md-3 mt-0 mt-md-5">
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/fence-building">Fence Building</a>
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/garage-renovation">Garage Renovation</a>
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/retaining-wall-contractor">Retaining Wall Contractor</a>
																		 <a class="list-group-item bg-blue dark text-white border-0" href="/services/framing-construction">Framing Construction</a>
                                                                        <a class="list-group-item bg-blue dark text-white border-0" href="/services/other-renovations">Other Renovations</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6 col-md-4 py-4">
                                                            <img class="ddr-image lazy img img-fluid" src="<?= $defaultBaseUrl ?>/assets/icons/Carpet-Upholstery-Cleaning-Google-Yelp-Rating.png" data-src="<?= $defaultBaseUrl ?>/assets/icons/Carpet-Upholstery-Cleaning-Google-Yelp-Rating.png" width="278" height="386" alt="Carpet Upholstery Cleaning Google Yelp Rating">
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </li>
											<li class="nav-item">
                                                <a class="nav-link px-4" href="/free-quote">Request a Quote</a>
                                            </li>
											
                                            <li class="nav-item">
                                                <a class="nav-link px-4" href="/service-areas">Service Areas</a>
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

				<style>
					.
					a {
						color:#00d900
					}
				</style>
