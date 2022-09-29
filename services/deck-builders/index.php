<?php
include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

$site_title = "Auto Interior Cleaning";
$site_description = "We offer auto interior cleaning for all types of vehicles in NYC, whether it be vans, SUVs, or compact cars. We clean the entire interior upholstery using professional carpet cleaning methods. ";
$site_keywords = "auto interior cleaning, auto seat cleaning, auto interior car cleaning, auto seat spot clean, auto interior upholstery cleaning";
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
  <img class="img lazy" data-src="<?= $baseUrl ?>/assets/images/auto-interior-cleaning-nyc-min.webp" width="1920" height="590">
  <div class="banner-content container-fluid padding-0 position-absolute w-100 py-7">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="heading-text services-heading">
            <h1>Deck Builders</h1>
            <h4>Trusted and recommended deck builders im NYC</h4>
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
          <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 mb-3 text-green text-uppercase">Deck Builders</h2>
        </div>
      </div>
      <div class="col-md-12">
        <p><strong>
           We all get excited when the weather gets warmer. There is more social activity and fun outdoors. Ad most homeowners know, having a space like a porch, patio, or deck can make all the difference in the summer and spring fun activities. Even in the older Fall and winter, the patio has its purpose. Whatever the case may be, at Reflections Construction, our deck building experts know how to beautifully integrate a deck onto your house that will both impress your guests and stand up to the elements for years to come! 
          </strong></p>
       <br><p><strong>Deck Construction</strong><br><br>
         Designing and building a deck has a variety of elements to consider: How and where it attaches to the home, its size, whether it holds other amenities like a pool, the type of wood and staining used, and more! At Reflections Construction, we know all the design build elements to discuss with customers so that no rock is left unterned and no surpises creep up on the build process. We will walk you through step by step how the patio of your dreams will look and cost so you will be in full control.   
			 </p>
       <br><p><strong>Concrete Patio Contractors</strong><br><br>
         Concrete patios have many benefits to the homewowner. They require very little maintenance, last a long time, can hold heavy loads, and can even be stained or glazed to add aesthetic appeal. The cost of a coincrete patio also greatly differs from that made from stained wood or pressure teated wood. At Reflections Construction as a concrete patio contractor, we will outlined the differences in concrete patio building so that you can make the best choice for your home.
			 </p>
		   <br><p><strong>Leather or Fabric Seats</strong><br><br>
        No matter what kind of seats your car has, we've got your covered. For fabric seats, we use professional upholstery cleaning equipment and chemicals to bring up all types of set-in stains from milk stains, food stains, soda stains, pet accidents, and more. For leather, we use a professional process to gently agitate and clean the leather whether it be performated or solid. We also condition the leather if necessary to ensure it does not crack and to extend its life. You will be impressed with our service!
			 </p>
        <p>
          Contact Reflections Construction today to get a free and quick quote on your patio and deck building needs!
        </p>
      </div>
    </div>
  </div>
</section>

<section id="offering-services" class="py-6">
  <div class="container">
    <div class="row">
      <div class="col heading-text">
        <h3 class="text-blue fs-3 fs-md-5 lh-1-3 lh-md-auto">We offer a variety of rug and furniture cleaning services...</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
            <ul class="offer-1">
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Car Seat Shampoo</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Car Deep Cleaning</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Car Steam Cleaning</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Car Shampooing</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Interior Car Wash</h6>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="offer-2">
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Interior Detailing</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Professional Car Interior Cleaning</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Deep Clean Car Interior</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Leather Car Seat Cleaning</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Car Upholstery Cleaning Service</h6>
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
$pg_service = 'Car Interior Cleaning';
$pg_place='';
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
$pg_service_title = 'car interior cleaning';
$pg_images = array(
  array(
    'url' => 'services/auto-interior-cleaning/11385-car-detailing-seat-shampoo-PristineGreen-Upholstery-and-Carpet-Cleaning-Queens-internal-car-wash-NY.jpg',
    'alt' => 'Upholstery and Queen Carpet Cleaning',
    'w' => 395,
    'h' => 527,
  ),
  array(
    'url' => 'services/auto-interior-cleaning/PristineGreen-Upholstery-and-Carpet-Cleaning-Queens-11385-auto-interior-cleaning-NY-full-car-interior-detail-near-me.jpg',
    'alt' => 'Upholstery Carpet Cleaning',
    'w' => 395,
    'h' => 296,
  ),
  array(
    'url' => 'services/auto-interior-cleaning/auto-interior-cleaning-Queens-NY-11385-interior-car-detailing-near-me-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg',
    'alt' => 'Queens Carpet Cleaner',
    'w' => 345,
    'h' => 259,
  ),
  array(
    'url' => 'services/auto-interior-cleaning/PristineGreen-Upholstery-and-Carpet-Cleaning-Queens-11385-auto-interior-cleaning-NY-full-car-interior-detail-near-me.jpg',
    'alt' => 'Area Rug Cleaning',
    'w' => 395,
    'h' => 527,
  ),
  array(
    'url' => 'services/auto-interior-cleaning/PristineGreen-Upholstery-and-Carpet-Cleaning-Queens-NY-deep-car-interior-cleaning-near-me-11385-auto-interior-cleaning.jpg',
    'alt' => 'NYC Rug and Upholstery Carpet Cleaning',
    'w' => 395,
    'h' => 527,
  ),
  array(
    'url' => 'services/auto-interior-cleaning/auto-interior-cleaning-Queens-interior-detailing-services-PristineGreen-Upholstery-and-Carpet-Cleaning-11105-NY.jpg',
    'alt' => 'Carpet shampoo Queens',
    'w' => 395,
    'h' => 495,
  ),
  array(
    'url' => 'services/auto-interior-cleaning/auto-interior-cleaning-interior-car-seat-cleaning-near-me-Queens-NY-11105-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg',
    'alt' => 'Carpet shampoo Queens',
    'w' => 395,
    'h' => 495,
  ),
  array(
    'url' => 'services/auto-interior-cleaning/Queens 11385 NY PristineGreen Upholstery and Carpet Cleaning auto interior cleaning auto carpet cleaner near me.jpg',
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

