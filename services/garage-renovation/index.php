
<?php
include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

$scc = count(explode("-", explode("/", $_SERVER['SCRIPT_NAME'])[2])) > 1 ? explode("-", explode("/", $_SERVER['SCRIPT_NAME'])[2])[0].' '.explode("-", explode("/", $_SERVER['SCRIPT_NAME'])[2])[1] : explode("/", $_SERVER['SCRIPT_NAME'])[2];

$site_title = $scc;
$site_description = "learn how we use only green and non-toxic cleaning in our upholstery cleaning and carpet cleaning services";
$site_keywords = "rug cleaning ny, green and non-toxic oriental rug cleaner, green and non-toxic sofa cleaning nyc, green and non-toxic area rug cleaning nyc, green and non-toxic carpet cleaner service, green and non-toxic ny carpet cleaning, green and non-toxic carpet cleaner nyc, green and non-toxic couch cleaner nyc, green and non-toxic rug cleaner nyc, green and non-toxic upholstery cleaning brooklyn, green and non-toxic furniture cleaning nyc, green and non-toxic carpet cleaner companies near me, green and non-toxic sofa cleaning brooklyn, green and non-toxic mattress cleaner nyc, green and non-toxic upholstery cleaning nyc, green and non-toxic rug clean service, green and non-toxic couch cleaning services, green and non-toxic rug cleaner brooklyn, green and non-toxic couch cleaner brooklyn, green and non-toxic mattress cleaning brooklyn, green and non-toxic area rugs cleaning, green and non-toxic carpet cleaner brooklyn, green and non-toxic furniture cleaning brooklyn, green and non-toxic rug cleaner, green and non-toxic clean area rug near me, green and non-toxic upholstery cleaning queens, green and non-toxic carpet cleaning professional, green and non-toxic the best carpet cleaning, green and non-toxic rug cleaner queens, green and non-toxic best upholstery cleaning, green and non-toxic carpet cleaner queens, green and non-toxic upholstery steam cleaning, green and non-toxic best carpet steam cleaner, green and non-toxic carpet cleaner, green and non-toxic carpet cleaning commercial, green and non-toxic carpet shampoo cleaning, green and non-toxic carpet shampoo near me, green and non-toxic couch cleaner, green and non-toxic couch steam cleaning, green and non-toxic furniture cleaning, green and non-toxic furniture steam cleaning, green and non-toxic mattress cleaner, green and non-toxic rug shampoo near me, green and non-toxic sofa cleaning, green and non-toxic steam cleaner near me, green and non-toxic upholstery cleaning, green and non-toxic couch cleaner queens, green and non-toxic furniture cleaning queens, green and non-toxic mattress cleaner brooklyn, green and non-toxic mattress cleaner queens, green and non-toxic sofa cleaner queens, green and non-toxic sofa cleaning queens";
$canonical = $site_canonical;
$og_site_title = "";
$og_description = "";
$og_title = "";
$og_url = "";
$og_image = "";
$ld_json = <<<LD_JSON

LD_JSON;

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
  <img class="img lazy" data-src="/assets/images/green-carpet-cleaner-nyc.jpg" style="object-fit: cover !important;">
  <div class="banner-content container-fluid padding-0 position-absolute w-100 py-7">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="heading-text services-heading">
            <h1>Garage Renovation</h1>
            <h4>Trusted and recommended garage renovation service in NYC</h4>
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
          <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 mb-3 text-green text-uppercase">Garage Renovation</h2>
        </div>
      </div>
      <div class="col-md-12">
        <p><strong>
          The garage isn't just a place to park the car. It can be transformed into a work space, play area, or even a living space! To keep it as bare concrete and no additions is just a waste of space. As professional garage builders at Reflections Construction, we know how to go from the design build stage to the finished product, minimizing cost, and naximizing amenities and addons!
          </strong></p>
       
		  <h3> <strong>Garage Remodeling</strong> </h3>
			<p>There are an endless amount of renovations and remodels that can achieved in the garage. What are you looking to use it for? Will you park your car in the garage? Do you want to turn it into a living sapce? These are some of the questions that our design build team at Reflections Construction will ask the client. Common garage renovations include adding a flooring, painting the walls, adding insulation, lofting the garage, adding windows, and more!
        </p>
         <p>
          <h6><strong>Garage Construction</strong> </h6>
			<p> Building a garage on your home can add enormous economic value to your property. Not only have to created a convenient place to park your car, but the garage can also be used for a variety of purposes. Building a garage can be a daunting task, but our expert garage builders at Reflections Construction will move you through the design build process, from laying the foundation, to building the walls and ceiling, to adding the finishes. We have much experience in garage construction and garage renovation and can give you many ideas and the average cost of garage construction so you can understand what you can acheive within your budget. 
        </p>
         <h3> <strong>Garage Renovation Cost</strong> </h3>
			 <p> The cost of your garage can depend on a variety of factors. How extensively the garage is renovated, the type of materials used. and the fixtures that are chosen for the build. At Reflections we have extensive experience in garage renovation and garage building and can guide you to choose certain design build elements which will reduce your cost and maximize your build. Such factors that can increase the price of a build are high-end insulation, expensive types of flooring, and complicated electrical work.
        </p>
        <p>
          Call Reflections Construction today to learn how we can transform your garage!.
        </p>
      </div>
    </div>
  </div>
</section>

<section id="offering-services" class="py-6">
  <div class="container">
    <div class="row">
      <div class="col heading-text">
        <h3 class="text-blue fs-3 fs-md-5 lh-1-3 lh-md-auto">We offer a variety of garage buildling and construction services...</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
            <ul class="offer-1">
              <li>
                <img class="lazy" data-src="/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Garage Remodel</h6>
              </li>
              <li>
                <img class="lazy" data-src="/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Home Construction</h6>
              </li>
              <li>
                <img class="lazy" data-src="/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Building a Shed</h6>
              </li>
              <li>
                <img class="lazy" data-src="/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Remodeling Contractors</h6>
              </li>
              <li>
                <img class="lazy" data-src="/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Sustainable Building</h6>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="offer-2">
              <li>
                <img class="lazy" data-src="/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Building Foudation</h6>
              </li>
              <li>
                <img class="lazy" data-src="/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Concrete Construction</h6>
              </li>
              <li>
                <img class="lazy" data-src="/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Retaining Wall Contractors</h6>
              </li>
              <li>
                <img class="lazy" data-src="/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Construction Cost</h6>
              </li>
              <li>
                <img class="lazy" data-src="/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Masonry Construction</h6>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4 right-image">
        <img class="img-fluid lazy" data-src="/assets/images/Green-Carpet-Cleaning-Van-NYC-small.webp" alt="" width="420" height="221" />
        <a href="tel:3478716530" class="btn callnow-btn center offer-call">Call Now</a>
      </div>
    </div>
  </div>
</section>

<?php
$pg_service = 'Professional Green and Non-Toxic Cleaners';
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
$pg_service_title = 'green cleaning';
$pg_images = array(
  array(
    'url' => 'services/green-cleaning/carpet cleaner nyc Queens NY 11385 green upholstery cleaning NYC PristineGreen Upholstery and Carpet Cleaning.jpg',
    'alt' => 'Upholstery and Queen Carpet Cleaning',
    'w' => 395,
    'h' => 527,
  ),
  array(
    'url' => 'services/green-cleaning/carpet cleaner for urine smell Queens best carpet cleaner for pet urine PristineGreen Upholstery and Carpet Cleaning NY 11385.jpg',
    'alt' => 'Upholstery Carpet Cleaning',
    'w' => 395,
    'h' => 296,
  ),
  array(
    'url' => 'services/green-cleaning/mattress-cleaner-nyc-PristineGreen-Upholstery-and-Carpet-Cleaning-upholstery-cleaning-nyc-NY-Queens-11105.jpg',
    'alt' => 'Queens Carpet Cleaner',
    'w' => 345,
    'h' => 259,
  ),
  array(
    'url' => 'services/green-cleaning/1608ae8f628353.jpg',
    'alt' => 'Area Rug Cleaning',
    'w' => 395,
    'h' => 527,
  ),
)
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/partials/page-slider.php'); ?>

<?php
include ($_SERVER['DOCUMENT_ROOT'].'/partials/call-section.php');
include ($_SERVER['DOCUMENT_ROOT'].'/partials/footer-top.php');
include ($_SERVER['DOCUMENT_ROOT'].'/footer-optimize.php');
?>
