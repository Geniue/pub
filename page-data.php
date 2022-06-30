<?php
//------------------------------------- Index - Data
$site_title = "Top Green Carpet Cleaner Service in NYC";
$site_description = "Trusted Carpet Cleaner in NYC, specializing in green and non-toxic carpet and upholstery cleaning. We provide a variety of services including area rug cleaning, sofa cleaning, oriental rug cleaning, and more! ";
$site_keywords = "rug cleaning ny, oriental rug cleaner, sofa cleaning nyc, area rug cleaning nyc, carpet cleaner service, ny carpet cleaning, carpet cleaner nyc, couch cleaner nyc, rug cleaner nyc, upholstery cleaning brooklyn, furniture cleaning nyc, carpet cleaner companies near me, sofa cleaning brooklyn, mattress cleaner nyc, upholstery cleaning nyc, rug clean service, couch cleaning services, rug cleaner brooklyn, couch cleaner brooklyn, mattress cleaning brooklyn, area rugs cleaning, carpet cleaner brooklyn, furniture cleaning brooklyn, rug cleaner, clean area rug near me, upholstery cleaning queens, carpet cleaning professional, the best carpet cleaning, rug cleaner queens, best upholstery cleaning, carpet cleaner queens, upholstery steam cleaning, best carpet steam cleaner, carpet cleaner, carpet cleaning commercial, carpet shampoo cleaning, carpet shampoo near me, couch cleaner, couch steam cleaning, furniture cleaning, furniture steam cleaning, mattress cleaner, rug shampoo near me, sofa cleaning, steam cleaner near me, upholstery cleaning, couch cleaner queens, furniture cleaning queens, mattress cleaner brooklyn, mattress cleaner queens, sofa cleaner queens, sofa cleaning queens";
$canonical = "";
$og_site_title = "Best Green Rug Cleaner in NYC";
$og_description = "Trusted Green Rug Cleaner in NYC, using only green and non-toxic carpet cleaning products. We provide a variety of carpet cleaning services including area rug cleaning, mattress cleaning, furniture celaning, and more!";
$og_title = "Top Green Carpet Cleaner Service in NYC | PristineGreen Upholstery and Carpet Cleaning";
$og_url = "";
$og_image = "";
$ld_json = <<<LD_JSON

LD_JSON;

//------------------------------------- Header Tag - Data
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

$feedbacks = array(
	array(
		"name"	=>	"Debra",
		'imageUrl'	=>	'assets/images/review_images/debra.png',
		'star'=> 5,
		'description'	=>	'Stuart is very professional and did a great job for us. He did a very thorough cleaning of our 
		sectional couch and rugs. They look better than new!',
	),
	array(
		'name'	=>	'Karen',
		'imageUrl'	=>	'assets/images/review_images/karen.png',
		'star'=> 5,
		'description'	=>	'Stuart was extremely prompt and very professional. The couch looks and smells brand new. 
		Highly recommend for all upholstery services!!',
	),
	array(
		'name'	=>	'Steffi',
		'imageUrl'	=>	'assets/images/review_images/richard.png',
		'star'=> 5,
		'description'	=>	'I highly recommend PristineGreen cleaning. After two cleaning attempts by another service, one on-site steam 
		cleaning and then another off-site \'industrial\' dry cleaning, the sofa still had visible stains. I was met with excuses and ... 
		long stories till I decided to call for another service. Stuart was very straight forward and honest over the phone. He focused on all 
		the discolored dark spots, an issue the other service said it was impossible to remove without damaging the fabric. In an industry where 
		the fee of service reflects the quality, this was the opposite case where Stuart\'s service was the lowest fee with the highest results.',
	),
	array(
		'name'	=>	'Taylor',
		'imageUrl'	=>	'assets/images/review_images/taylor.png',
		'star'=> 5,
		'description'	=>	'Stuart responded quickly when I reached out. Gave me all the details upfront. Service was quick and my couches look new again and smell fresh. 
		Would definitely use again for both my couches and rugs!',
	),
	array(
		'name'	=>	'Nick',
		'imageUrl'	=>	'assets/images/review_images/nick.png',
		'star'=> 5,
		'description'	=>	'Stuart was beyond excellent! Prompt, professional, respectful, courteous and paid incredible attention to detail. 
		I will never use anyone else! If I could give more than 5 stars, I would. Highly recommend!',
	),
	array(
		'name'	=>	'Shelby',
		'imageUrl'	=>	'assets/images/review_images/shelby.webp',
		'star'=> 5,
		'description'	=>	'A beer spilled on my velvet sofa and the grain of the velvet was entirely warped. I was able to book a cleaning in a couple days 
		and they were in and out in under an hour. The sofa looks as good as new and there’s no intense ',
	),
	array(
		'name'	=>	'Ana Maria ',
		'imageUrl'	=>	'assets/images/review_images/debra.png',
		'star'=> 5,
		'description'	=>	'I called for an appointment late last week and received an appointment and detailed quote immediately.
		He arrived on time and took less than an hour to do my couch. Needless to say the couch came out great I highly recommend prestinegreen cleaning',
	),
	array(
		'name'	=>	'Richard',
		'imageUrl'	=>	'assets/images/review_images/richard.png',
		'star'=> 5,
		'description'	=>	'Excellent experience with this company.  The owner was able to arrange a same-day appointment to clean our armchair, and was courteous, 
		professional and efficient throughout.  Highly recommended.',
	),
	array(
		'name'	=>	'Eric Braunstein ',
		'imageUrl'	=>	'assets/images/review_images/karen.png',
		'star'=> 5,
		'description'	=>	'Had two carpets and an ottoman cleaned at my apartment in UES of Manhattan. Was very prompt with reply re: quote, 
		easy to schedule, and the cleaned items look great. Definitely would recommend for any carpet or upholstery cleaning needs.',
	),
)
?>
