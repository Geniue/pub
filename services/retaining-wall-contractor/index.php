<?php
include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

$site_title = "Upholstery Cleaning ";
$site_description = "We are a top-rated and trusted upholstery cleaner in NYC speciazling in providing various upholster cleaning services including couch cleaning, sofa cleaning, mattress cleaning, auto interior cleaning, general furniture cleaning, and more!";
$site_keywords = "upholstery cleaning brooklyn, furniture cleaning nyc, upholstery cleaning nyc, furniture cleaning brooklyn, upholstery cleaning queens, best upholstery cleaning, upholstery steam cleaning, furniture cleaning, furniture steam cleaning, steam cleaner near me, upholstery cleaning, furniture cleaning queens";
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
	<style>
		.newly {
			object-fit:cover !important;
		}
	@media only screen and (max-width: 768px) {
		.newly {
			object-fit:cover !important;
		}
	}
	</style>
  <img class="img lazy newly" data-src="<?= $baseUrl ?>/assets/images/upholstery-cleaning-nyc.jpg" width="1920" height="590" style="">
  <div class="banner-content container-fluid padding-0 position-absolute w-100 py-7">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="heading-text services-heading">
            <h1>Retaining Wall Contractor</h1>
            <h4>Need Retaining Wall Contracting in NYC?</h4>
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
          <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 mb-3 text-green text-uppercase">Retaining Wall Contractor</h2>
        </div>
      </div>
      <div class="col-md-12">
        <p><strong>
            A retaining wall can be an irreplacable addition to your backyard's landscape. If your terrain is hilly, it can be the barrier between the slope and a trenched flat space. It can also be used to create borders around a sitting space where plants and a garden can be grown. Whatever your use for a retaining wall, hiring a proper retaining wall contractor is essential who knows how to propery build your wall for longevity and aesthetics. 
          </strong></p>
         <p> <strong>Retaining Wall Construction</strong></p>
        <p> There are several elements that need to be considered when building a retaining wall. The height of the wall, the drainage, the type of dirt is is retaining, and the grade of the slope among other aspects. Furthermore, the masonry construction with stone or concrete which is used as the wall itself. With all these considerations in mind, our team at Reflections Construction will work with you to determine the design build. We will offer you a variety of options for facades, being stone, concrete, plastic, and more and will work with you to maximize what you can get while staying within your budget.  
        </p>
     
         <p> <strong>Retaining Wall Cost</strong></p>
        <p> The cost of a retaining wall can vary depending on a variety of factors. The height of the wall, what it is retaining, and the material used for the facade are all factors. More specific factors that could increase the price are choosing a stone over a concrete facade, or if the wall is tall enough that it needs extra reinforcement so that it doesn't fall over in the rain. Furthermore, if draining is an issue, extra drain pipes may be needed to be installed which may increase the price. Whatever your situation, our expert team of retaining wall contractors at Refelctions Contruction will help you choose the right materials and design build to fit your budget. 
        </p>
     
        <p>  <strong>Earthmoving</strong></p>
     <p> Oftentimes, when a backyard space is being created, earthmoving is often a necessary task. It can be as simple as using a shovel to dig the foundation for the retaining wall or be as complicated as using a backhoe to excavate and compact dirt so that a sitting area can be created in a space which used to be a hill. Whatever your needs, our professional retaining wall and excavation contractors have the tools and experience to do professional eathrmoving and excavation for your home.
        </p>
        <p>
          Call Reflections Construction today to learn more about how we can help you choose and build the right retaining wall for your home!
        </p>
      </div>
    </div>
  </div>
</section>

<section id="offering-services" class="py-6">
  <div class="container">
    <div class="row">
      <div class="col heading-text">
        <h3 class="text-blue fs-3 fs-md-5 lh-1-3 lh-md-auto">We offer a variety of retaining wall contracting services...</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
            <ul class="offer-1">
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Custom Home Builders</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Earthmoving</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Home Additions</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Deck Construction</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Bathroom Contractors</h6>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="offer-2">
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Concrete Foundation Contractors</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Block Construction</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Kitchen Remodel Contractors</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Apartment Remodel</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Home Repairs Contractor</h6>
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
$pg_service = 'Professional Upholstery Cleaners';
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
$pg_service_title = 'upholstery cleaning';
$pg_images = array(
  array(
    'url' => 'services/upholstery-cleaning/thumbs/11105-Best-carpet-cleaner-for-allergies-carpet-cleaner-service-NY-PristineGreen-Upholstery-and-Carpet-Cleaning-Queens-min.jpg',
    'alt' => 'professional upholstery cleaning near me',
    'w' => 345,
    'h' => 259,
  ),
  array(
    'url' => 'services/upholstery-cleaning/thumbs/sofa-cleaning-NYC-10010-NY-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning-min.webp',
    'alt' => 'couch cleaning company near me',
    'w' => 345,
    'h' => 230,
  ),
  array(
    'url' => 'services/upholstery-cleaning/thumbs/10010-NY-sofa-cleaning-NYC-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning-min.jpg',
    'alt' => 'furniture cleaning company',
    'w' => 345,
    'h' => 259,
  ),
  array(
    'url' => 'services/upholstery-cleaning/thumbs/11105-couch-cleaner-nyc-NY-PristineGreen-Upholstery-and-Carpet-Cleaning-Queens-sofa-cleaning-nyc-min.jpg',
    'alt' => 'washing microfiber couch',
    'w' => 345,
    'h' => 194,
  ),
  array(
    'url' => 'services/upholstery-cleaning/thumbs/11105-PristineGreen-Upholstery-and-Carpet-Cleaning-NY-sofa-cleaning-NYC-Queens-min.jpg',
    'alt' => 'professional furniture cleaning service',
    'w' => 345,
    'h' => 194,
  ),
  array(
    'url' => 'services/upholstery-cleaning/thumbs/mattress-cleaner-nyc-PristineGreen-Upholstery-and-Carpet-Cleaning-upholstery-cleaning-nyc-NY-Queens-11105-min.webp',
    'alt' => 'upholstery cleaner for mattress',
    'w' => 345,
    'h' => 230,
  ),
  array(
    'url' => '11105-leather-furniture-cleaning-services-NY-PristineGreen-Upholstery-and-Carpet-Cleaning-Queens-upholstery-cleaning-services.jpg',
    'alt' => 'office chair cleaning services',
    'w' => 345,
    'h' => 230,
  ),
  array(
    'url' => 'services/upholstery-cleaning/thumbs/New York Carpet Cleaner Service PristineGreen Upholstery and Carpet Cleaning 10010 carpet upholstery cleaning.webp',
    'alt' => 'upholstery cleaning services',
    'w' => 345,
    'h' => 214,
  ),
  array(
    'url' => 'services/upholstery-cleaning/thumbs/11105-cleaner-for-couch-fabric-PristineGreen-Upholstery-and-Carpet-Cleaning-Queens-NY-sofa-cleaning-nyc-min.jpg',
    'alt' => 'upholstery cleaners in my area',
    'w' => 345,
    'h' => 259,
  ),
)
?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/partials/page-slider.php'); ?>

<?php
include ($_SERVER['DOCUMENT_ROOT'].'/partials/call-section.php');
include ($_SERVER['DOCUMENT_ROOT'].'/partials/footer-top.php');
include ($_SERVER['DOCUMENT_ROOT'].'/footer-optimize.php');
?>
