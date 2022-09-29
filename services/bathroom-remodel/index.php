<?php

include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

$site_title = "Rug Cleaning";
$site_description = "Top-Rated rug cleaner in NYC providng a variety of carpet cleaning services. We clean all types of rugs, whether they be cotton, polyester, silk, wool, area rugs, oriental rugs, wall-to-wall rugs, and more and provide rug steam cleaning and rug shampooing services!";
$site_keywords = "area rug cleaning nyc, carpet cleaner service, carpet cleaner nyc, rug cleaner nyc, rug cleaner brooklyn, area rugs cleaning, carpet cleaner brooklyn, rug cleaner, clean area rug near me, carpet cleaning professional, the best carpet cleaning, rug cleaner queens, carpet cleaner queens, best carpet steam cleaner, carpet cleaner, carpet cleaning commercial, carpet shampoo cleaning, carpet shampoo near me, rug shampoo near me, steam cleaner near me";
$canonical = $site_canonical;
$og_site_title = "";
$og_description = "";
$og_title = "";
$og_url = "";
$og_image = "";
$ld_json = <<<LD_JSON

LD_JSON;
$scc = count(explode("-", explode("/", $_SERVER['SCRIPT_NAME'])[2])) > 1 ? explode("-", explode("/", $_SERVER['SCRIPT_NAME'])[2])[0].' '.explode("-", explode("/", $_SERVER['SCRIPT_NAME'])[2])[1] : explode("/", $_SERVER['SCRIPT_NAME'])[2];
?>
<?php
$bodyClass = 'service-template-default single single-service postid-2172 group-blog';
include ($_SERVER['DOCUMENT_ROOT'].'/header-optimize.php');
?>
<style>
.bg-blue.dark {
		background-color: #2baf38
	}
	@font-face {
		font-family: 'zabal_demoregular';
		src: url('../../assets/fonts/zabal/zabaldemo-ultraitalic-webfont.woff2') format('woff2'),
			url('../../assets/fonts/zabal/zabaldemo-ultraitalic-webfont.woff') format('woff');
		font-weight: normal;
		font-style: normal;

	}


	@font-face {
		font-family: 'zabal_demoultra';
		src: url('../../assets/fonts/zabal/zabaldemo-ultra-webfont.woff2') format('woff2'),
			url('../../assets/fonts/zabal/zabaldemo-ultra-webfont.woff') format('woff');
		font-weight: normal;
		font-style: normal;

	}




	@font-face {
		font-family: 'zabal_demothin_italic';
		src: url('../../assets/fonts/zabal/zabaldemo-thinitalic-webfont.woff2') format('woff2'),
			url('../../assets/fonts/zabal/zabaldemo-thinitalic-webfont.woff') format('woff');
		font-weight: normal;
		font-style: normal;

	}




	@font-face {
		font-family: 'zabal_demoultra_italic';
		src: url('../../assets/fonts/zabal/zabaldemo-thin-webfont.woff2') format('woff2'),
			url('../../assets/fonts/zabal/zabaldemo-thin-webfont.woff') format('woff');
		font-weight: normal;
		font-style: normal;

	}




	@font-face {
		font-family: 'zabal_demosemibold_italic';
		src: url('../../assets/fonts/zabal/zabaldemo-semibolditalic-webfont.woff2') format('woff2'),
			url('../../assets/fonts/zabal/zabaldemo-semibolditalic-webfont.woff') format('woff');
		font-weight: normal;
		font-style: normal;

	}




	@font-face {
		font-family: 'zabal_demosemibold';
		src: url('../../assets/fonts/zabal/zabaldemo-semibold-webfont.woff2') format('woff2'),
			url('../../assets/fonts/zabal/zabaldemo-semibold-webfont.woff') format('woff');
		font-weight: normal;
		font-style: normal;

	}




	@font-face {
		font-family: 'zabal_demoregular';
		src: url('../../assets/fonts/zabal/zabaldemo-regular-webfont.woff2') format('woff2'),
			url('../../assets/fonts/zabal/zabaldemo-regular-webfont.woff') format('woff');
		font-weight: normal;
		font-style: normal;

	}




	@font-face {
		font-family: 'zabal_demomedium_italic';
		src: url('../../assets/fonts/zabal/zabaldemo-mediumitalic-webfont.woff2') format('woff2'),
			url('../../assets/fonts/zabal/zabaldemo-mediumitalic-webfont.woff') format('woff');
		font-weight: normal;
		font-style: normal;

	}


	@font-face {
		font-family: 'zabal_demomedium';
		src: url('../../assets/fonts/zabal/zabaldemo-medium-webfont.woff2') format('woff2'),
			url('../../assets/fonts/zabal/zabaldemo-medium-webfont.woff') format('woff');
		font-weight: normal;
		font-style: normal;

	}

	.fa{
		display:inline-block;
		font:normal normal normal 14px/1 zabal_demothin;
		font-size:inherit;
		text-rendering:auto;
		-webkit-font-smoothing:antialiased;
		-moz-osx-font-smoothing:grayscale
	}
	.fab{
		display:inline-block;
		font:normal normal normal 14px/1 zabal_demoultra;
		font-size:inherit;
		text-rendering:auto;
		-webkit-font-smoothing:antialiased;
		-moz-osx-font-smoothing:grayscale
	}
	.far{
		display:inline-block;
		font:normal normal normal 14px/1 zabal_demothin_italic;
		font-size:inherit;
		text-rendering:auto;
		-webkit-font-smoothing:antialiased;
		-moz-osx-font-smoothing:grayscale
	}
	.fa-fw{
		width:1.28571429em;
		text-align:center
	}
</style>
<section id="top-banner" class="position-relative">
  <img class="img lazy" data-src="<?= $baseUrl ?>/assets/images/rug-cleaner-nyc-min.webp" width="1920" height="590">
  <div class="banner-content container-fluid padding-0 position-absolute w-100 py-7">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="heading-text services-heading">
            <h1>Bathroom Remodel</h1>
            <h4>Top-rated and trusted bathroom remodeling in NYC</h4>
          </div>
        </div>
        <div class="text-left pb-3">
          <a href="tel:3478716530" class="btn callnow-btn center ml-0">Call Now</a>
          <a href="/contact-us#contact-form-fields" class="btn emailnow-btn center">Email Now</a>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="main-content-cleaning" class="py-7 main-content-cleaning-service">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-4">
          <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 mb-3 text-green text-uppercase">Bathroom Remodel</h2>
        </div>
      </div>
      <div class="col-md-12">
        <p><strong>
           The bathroom is one of the miost intimate spaces of our home. Its a place of comfort and respite from the challenges of the day and life. It's also one of the places in the home where the owner can really express her style and way of livig. At Reflections Construction, we understand that a bathroom remodel isn't just a practical project, but a work of art. With this in mind, we help customers transform their bathrooms into spaces they adore and cherish. 
          </strong></p>
       <p><strong>Bathroom Renovations</strong></p>
        <p>Every bathroom renovation is different. The scope can be large, from a full gut remodel to small changes like upgrading the vanity, toilet, or other bathroom fixtures. The scope of the project depends on both the budget and vision of the customer. Home builders often want projects that are large, but at Reflections Construction, we understand that bigger is not necessarily better, so whatever you need, we are willing to help you achieve your goal!</p>
         <p><strong>Bathroom Remodel Cost</strong></p>
        <p>The cost of a bathroom remodel relies on a variety of factors. Some of these factors include moving or altering plumbing, adapting electrical circuits, cost and quality of supplies like tiles and fixtures, and whether a demolition team will be necessary before beginning the project. When we work with customers, cost is always an issue, but our goal isn't to spend more. OUr goal is to help our customers acheive as much as possible within their budget. </p>
         <p><strong>Custom Home Builders</strong></p>
        <p>All of the bathroom remodel projects we do are custom, designed and built from the ground up. If custom cabinetry is needed, we can build that from scratch. If a specific tile design is desired, we can have that manufactured for you. When working with Reflections Construction, there are no limits to what you can do with your project. As a custom home building company, we strive to provide you with a reflection of exactly your vision for your new bathroom remodel. </p>
		  <p>
          Call Reflections Construction today to learn what packages we offer for your bathroom remodel!
        </p>

      </div>
    </div>
  </div>
</section>

<section id="offering-services" class="py-6">
  <div class="container">
    <div class="row">
      <div class="col heading-text">
        <h3 class="text-blue fs-3 fs-md-5 lh-1-3 lh-md-auto">We offer a variety of bathroom remodel services...</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
            <ul class="offer-1">
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Bathroom Renovations</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Small Bathroom Remodel</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Retiling Bathroom</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Bathroom Home Improvement</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Bath Renovation</h6>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="offer-2">
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Tub to Shower Conversion</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Bathroom Shower Remodel</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Bathroom Makeover</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Home Depot /<br>Lowes Bathroom Remodel</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Small Bathroom Renovations</h6>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4 right-image">
        <img class="img-fluid lazy" data-src="<?= $baseUrl ?>/assets/images/Green-Carpet-Cleaning-Van-NYC-small.webp" alt="" width="420" height="221" />
        <a href="tel:3478716530" class="btn callnow-btn center offer-call">Call Now</a>
      </div>
    </div>
  </div>

</section>


<?php
$pg_service = 'Professional Area Rug Cleaners';
$pg_place='in NYC';

?>
<style>
* {box-sizing: border-box;}

.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline h4 {
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-inline button {
	height: 40px !important;
	min-height: 40px;
  	padding: 10px;
  	background-color: dodgerblue;
  	color: white;
  	cursor: pointer;
	margin-top: 6px;
}

.form-inline button:hover {
  background-color: royalblue;
}


</style>
<header>
	<div class="callback-form-bar form-inline">
		<h4 style="margin: 7px 10px 5px 0; color:#fff;">Request Carpet and Upholstery Cleaning Now!</h4>
		<form method="post" class="header-form" style="margin: 7px 10px 5px 0;">
			<div class="form-group" style="width: 100%; display: flex;">
				<input class="form-control" type="text" name="your-number" placeholder="Phone number" required="" style="margin-left: 10px;">
				&nbsp;
				<input class="form-control" type="text" name="need-service" placeholder="Item to Clean" required="" style="margin-left: 10px;">
				&nbsp;
				<button class="btn btn-success" type="submit" name="request-callback" aria-label="Request callback" style="background-color:#4873b7; margin-left: 10px;" >Request</button>
			</div>
		</form>
	</div>
</header>
<style>
	.callback-form-bar {
		display: flex;
		justify-content: space-between !important;
		padding: 15px;
		background: #2baf38;
		border-radius: 10px;
		flex-direction: column;
		margin-bottom: 15px;
		display: flex;
		justify-content: center !important;
		align-items: center;
		
	}
	.form-inline {
	  display: flex;
	  flex-flow: row wrap;
	  align-items: center;
	}
	.callback-form-bar .header-form {
		flex-basis: 50%;
	}
	*, ::after, ::before {
		box-sizing: border-box;
	}
	*, ::after, ::before, input[type="checkbox"], input[type="radio"] {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
	}
	@media (max-width: 800px) {
	  .form-inline input {
		margin: 7px 0;
	  }

	  .form-inline {
		flex-direction: column;
		align-items: stretch;
	  }
	}
	.callback-form-bar {
		border-radius: 0px !important;
	}
</style>
<?php
$pg_service_title = 'rug cleaning';
$pg_images = array(
  array(
    'url' => 'services/area-rug-cleaning/carpet-cleaning-NYC-Queens-NY-11385-carpet-cleaner-service-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg',
    'alt' => 'Upholstery and Queen Carpet Cleaning',
    'w' => 395,
    'h' => 527,
  ),
  array(
    'url' => 'services/area-rug-cleaning/carpet-cleaner-service-rug-cleaning-NYC-10010-NY-PristineGreen-Upholstery-and-Carpet-Cleaning-New-York.jpg',
    'alt' => 'Upholstery Carpet Cleaning',
    'w' => 395,
    'h' => 296,
  ),
  array(
    'url' => 'services/area-rug-cleaning/carpet-cleaner-nyc-NY-PristineGreen-Upholstery-and-Carpet-Cleaning-10010-New-York-professional-rug-cleaner-NYC.jpg',
    'alt' => 'Queens Carpet Cleaner',
    'w' => 345,
    'h' => 259,
  ),
  array(
    'url' => 'services/area-rug-cleaning/Area-Rug-Cleaning-PristineGreen-Upholstery-and-Carpet-Cleaning-11105-NY.jpg',
    'alt' => 'Area Rug Cleaning',
    'w' => 395,
    'h' => 527,
  ),
  array(
    'url' => 'services/area-rug-cleaning/Queens-Carpet-Cleaner-Service-PristineGreen-Upholstery-and-Carpet-Cleaning-11105-residential-carpet-cleaning.jpg',
    'alt' => 'NYC Rug and Upholstery Carpet Cleaning',
    'w' => 395,
    'h' => 527,
  ),
  array(
    'url' => 'services/area-rug-cleaning/11385-carpet-cleaner-brooklyn-NY-Queens-rug-cleaner-brooklyn-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg',
    'alt' => 'Carpet shampoo Queens',
    'w' => 395,
    'h' => 495,
  ),
  array(
    'url' => 'services/area-rug-cleaning/PristineGreen-Upholstery-and-Carpet-Cleaning-10010-NY.jpg',
    'alt' => 'Carpet shampoo Queens',
    'w' => 395,
    'h' => 495,
  ),
)
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/partials/page-slider.php'); ?>

<?php
include ($_SERVER['DOCUMENT_ROOT'].'/partials/call-section.php');
include ($_SERVER['DOCUMENT_ROOT'].'/partials/footer-top.php');
include ($_SERVER['DOCUMENT_ROOT'].'/footer-optimize.php');
?>
