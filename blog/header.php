<?php

if( !defined('ML_LITE_BLOG') ) die();

$admin_style = '';
if( @strtolower($_GET['page'])=='admin' ) {

	$admin_style = "<style>
		body{background:#fafafa;}
		.header-nav{position:sticky !important;}
		.top-noti-bar{display:none !important;}
		.ephox-polish-banner.ephox-polish-banner-error{display:none !important;}
		.badge-info{background:#17a2b8 !important;}
	</style>";

	if( isset($_GET['current']) && ( @strtolower($_GET['current'])=='view' || @strtolower($_GET['current'])=='add' || @strtolower($_GET['current'])=='edit' || @strtolower($_GET['current'])=='gallery' ) ){
		$admin_style.='<link href="/assets/libs/datetimepicker/jquery.datetimepicker.css" rel="stylesheet" type="text/css">';
	}

}

/**/
global $ml_title;
global $ml_meta_url;
global $ml_meta_canonical;
global $ml_meta_image;
global $ml_meta_description;
global $ml_meta_keywords;

$default_title = "PristineGreen Upholstery and Carpet Cleaning";
$default_meta_url = $_SERVER['REQUEST_URI'];
$default_meta_canonical = $_SERVER['REQUEST_URI'];
$default_meta_image = $_SERVER['REQUEST_URI'];
$default_meta_image = "/assets/images/pristinegreencleaning.jpg";
$default_meta_description = "";
$default_meta_keywords = "";

// Bridge
//$site_title = $default_title;
//$site_description = $default_meta_description;
//$site_keywords = $default_meta_keywords;
//$canonical = $default_meta_canonical;
//$og_site_title = $default_title;
//$og_title = $default_title;
//$og_description = $default_meta_description;
//$og_image = $default_meta_image;
//$og_url = $default_meta_url;

include("blog_head_tags.php" );

?>

<?php echo $admin_style; ?>

</head>
<body>
	
	<div id="loading">
		<div class="startup-loading-content">
			<div class="loading-icon">
				<span></span>
				<span></span>
				<span></span>
				<img rel="canonical" src="/assets/logo/logo_only_56x56.png" alt="Loading.." width="56" height="56">
			</div>
		</div>
	</div>
	<div id="page" class="site">

	<?php include( dirname(__DIR__). DIRECTORY_SEPARATOR. BLOG_DIR_NAME. DIRECTORY_SEPARATOR. "blog-header.php" ); ?>
