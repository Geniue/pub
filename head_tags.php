<?php
$review_count = 70;
$site_name = "PristineGreen Upholstery and Carpet Cleaning";
$site_title = (isset($site_title) && !empty($site_title))? $site_title : "Carpet Cleaners NYC, Brooklyn, and Queens"; $site_title.= ' | '.$site_name;
$site_description = (isset($site_description) && !empty($site_description))? $site_description : "PristineGreen Cleaning is your trusted carpet cleaner in NYC, Queens, Brooklyn, Bronx, Long Island, and Staten Island";
$site_keywords = (isset($site_keywords) && !empty($site_keywords))? $site_keywords : "rug cleaning ny, oriental rug cleaner, sofa cleaning nyc, area rug cleaning nyc, carpet cleaner service, ny carpet cleaning, carpet cleaner nyc, couch cleaner nyc, rug cleaner nyc, upholstery cleaning brooklyn, furniture cleaning nyc, carpet cleaner companies near me, sofa cleaning brooklyn, mattress cleaner nyc, upholstery cleaning nyc, rug clean service, couch cleaning services, rug cleaner brooklyn, couch cleaner brooklyn, mattress cleaning brooklyn, area rugs cleaning, carpet cleaner brooklyn, furniture cleaning brooklyn, rug cleaner, clean area rug near me, upholstery cleaning queens, carpet cleaning professional, the best carpet cleaning, rug cleaner queens, best upholstery cleaning, carpet cleaner queens, upholstery steam cleaning, best carpet steam cleaner, carpet cleaner, carpet cleaning commercial, carpet shampoo cleaning, carpet shampoo near me, couch cleaner, couch steam cleaning, furniture cleaning, furniture steam cleaning, mattress cleaner, rug shampoo near me, sofa cleaning, steam cleaner near me, upholstery cleaning, couch cleaner queens, furniture cleaning queens, mattress cleaner brooklyn, mattress cleaner queens, sofa cleaner queens, sofa cleaning queens";
$canonical = (isset($canonical) && !empty($canonical))? $canonical : (( (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443 ) ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] .'/'. $_SERVER['SCRIPT_NAME'];
$og_site_title = (isset($og_site_title) && !empty($og_site_title))? $og_site_title : $site_title;
$og_description = (isset($og_description) && !empty($og_description))? $og_description : $site_description;
$og_title = (isset($og_title) && !empty($og_title))? $og_title : "Carpet Cleaners NYC, Brooklyn, and Queens | PristineGreen Cleaning ";
$og_url = (isset($og_url) && !empty($og_url))? $og_url : (( (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443 ) ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] .'/'. substr( $_SERVER['REQUEST_URI'], 0, strpos( $_SERVER['REQUEST_URI'], '?' ) );
$og_image = (isset($og_image) && !empty($og_image))? $og_image : "https://pristinegreencleaning.com/assets/images/sofa-cleaning-NYC-10010-NY-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg";

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
	} ]

LD_JSON;

}

?>
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
	  <!--<meta name="twitter:domain" content="<?php echo $_SERVER['HTTP_HOST']; ?>">-->
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

        <!-- Begin Inspectlet Asynchronous Code -->
        <script type="text/javascript">
        // (function() {
        // window.__insp = window.__insp || [];
        // __insp.push(['wid', 542964794]);
        // var ldinsp = function(){
        // if(typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js?wid=542964794&r=' + Math.floor(new Date().getTime()/3600000); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
        // setTimeout(ldinsp, 0);
        // })();
        </script>
        <!-- End Inspectlet Asynchronous Code -->

	  <!-- Global site tag (gtag.js) - Google Analytics -->
	  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178479037-1"></script>
      <script>
		window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-178479037-1');
	  </script>

	  <script>
		//<![CDATA[
		window.onbeforeunload = function(){
			window.scrollTo(0, 0);
		}

		function contentLoaded(e) {
			var t = document;
			"loading" != t.readyState ? e() : t.addEventListener ? t.addEventListener("DOMContentLoaded", e) : t.attachEvent("onreadystatechange", function() {
				"complete" == t.readyState && e()
			})
		}
		//]]>
	  </script>

	  <!--<script src="https://www.google.com/recaptcha/api.js?render=6Le6id0ZAAAAAMotzJM2sFmluAtT_3lU0Qx9rB_s"></script>-->
	  <link rel="alternate" type="application/rss+xml" title="<?php echo htmlentities($site_name); ?> » Feed" href="/feed/">
	  <link rel="alternate" type="application/rss+xml" title="<?php echo htmlentities($site_name); ?> » Comments Feed" href="/feed/comments/">

	  <link rel="dns-prefetch" href="https://ajax.googleapis.com/">
	  <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com/">

      <link rel="DNS-prefetch" href="//fonts.googleapis.com"/>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&family=Roboto:wght@300;400;500;700&display=swap"
            as="style"
            media="print"
            onload="this.onload=null;this.removeAttribute('media');"
      >

	  <link rel="preload" as="style" href="/assets/css/ubermenu.min.css" type="text/css" media="all" onload="this.onload=null;this.rel='stylesheet'">
	  <link rel="preload" as="style" href="/assets/libs/OwlCarousel2/assets/owl.carousel.min.css" type="text/css" media="all" onload="this.onload=null;this.rel='stylesheet';">
      <link rel="preload" as="style" href="/assets/css/bundle.min.css" type="text/css" media="all" onload="this.onload=null;this.rel='stylesheet'">
	  <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&family=Roboto:wght@300;400;500;700&display=swap"
              media="all"
              rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="/assets/libs/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css" media="all">
		<link rel="stylesheet" href="/assets/css/ubermenu.min.css" type="text/css" media="all">
		<link rel="stylesheet" href="/assets/libs/OwlCarousel2/assets/owl.carousel.min.css"  media="all"/>
	  </noscript>

	  <script type="application/ld+json">
	  	<?php echo $ld_json; ?>
	  </script>

	  <link rel='shortlink' href='<?php echo htmlentities($og_url); ?>'>

