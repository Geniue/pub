<?php 
$link = mysqli_connect("localhost","softipi_new-prestine-invoice" ,"51?7iy4>B","softipi_new-prestine-invoice");
//$page_title =  basename($_SERVER['PHP_SELF']);
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$page_title = explode('.com',$actual_link);

if($page_title[1] == '/'){
	$seo_array = mysqli_query($link,"SELECT * FROM `pages` where page_name='index.php'");
}else{
	$seo_array = mysqli_query($link,"SELECT * FROM `pages` where page_name='".$page_title[1]."'");
}
$seo_arr = mysqli_fetch_array($seo_array); 
$site_title = $seo_arr['site_title'];
$site_description = $seo_arr['site_description'];
$site_keywords = $seo_arr['site_keywords'];
$canonical = $seo_arr['canonical'];
$og_site_title = $seo_arr['og_site_title'];
$og_description = $seo_arr['og_description'];
$og_title = $seo_arr['og_title'];
$og_url = $seo_arr['og_url'];
$og_image = $seo_arr['og_image'];
?>