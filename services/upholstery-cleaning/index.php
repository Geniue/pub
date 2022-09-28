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
            <h1>Upholstery Cleaning</h1>
            <h4>Trusted and recommended upholstery cleaner in NYC, specializing in deep cleaning and steam cleanig your furniture items</h4>
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
          <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 mb-3 text-green text-uppercase">UPHOLSTERY CLEANING</h2>
        </div>
      </div>
      <div class="col-md-12">
		  
        <p><strong>
            PristineGreen Upholstery and Carpet Cealning understands that you have spent time, energy, and money investing in your furniture, whether it be your couch,
            carpet, area rugs, mattresses, dining chairs, runners, and more. That’s why when cleaning, we treat your items with the utmost care and use only the proper
            non toxic products to ensure your furniture’s health and long life.
          </strong></p>
        <p>
         Over time, natural wear and tear occurs, slowly leaving dirt, grime, bacteria, and even allergens on your upholstery. At PristineGreen Cleaning, we can help you maintain either a residential cleaning or commercial cleaning schedule to ensure that your furniture investments stay fresh, clean and hygienic!
        </p>
        <p>
         We employ a unique and effective cleaning method, coupled with non toxic and green products that produces incredible results. We also use state-of-the-art machines that clean quickly, and leave your furnishings without any residue. With only 5-star ratings, our customers are extremely happy and so are we because of it.
        <p>
         Upholstery comes in a variety of styles and textures. Whether it is cotton, linen, microfiber, leather, velvet, or silk we have a solution for you! Each fabric needs its own special care and our technicians are trained to know what to do, what technique and which organic product to use, with each possibility. We employ a unique and effective cleaning method, coupled with non toxic and green products that produces incredible results. We also use state-of-the-art machines that clean quickly, and leave your furnishings without any residue. With only 5-star ratings, our customers are extremely happy and so are we because of it.
        </p>
        <p>
         Whether it be wine stains, juice or food spilling from children, or pet odor and pet stains from your favorite dog or cat, we understand that life happens and have a solution for you. Before even giving you a quote over the phone, we know exactly what we are cleaning and what to do, whether a steam clean, shampoo, stain removal or more, to produce a top quality clean!
        </p>
		
		  
		  <p><strong>Stain Removal</strong></p>
        <p>
          We use special green stain removing formulas that have been certified by the US EPA as part of their “Safer Choice” program to clean the toughest of stains with great results! Whether it is a common wine stain, coffee stain, tea stain, ink stain, pet stain, or marker or crayon from the child (we have seen many of those!), we have a solution for you!
        </p>
		  
		 <p> 
			<strong>Dust Mite Removal</strong>
		</p>
        <p>
           - It can be unnerving to know that dust mites are living in your furniture! On that, for certain individuals, allergic reactions can occur like coughing, sneezing, and itchiness among others. Whatever your sensitivity, we have a green and non-toxic solution to dealing with dust mites that leaves your upholstery feeling fresh, clean, and hygienic!
        </p>
		  
		  
		  <p><strong>Water Staining</strong></p>
        <p>
           Our deep cleaning protocol which may include either a steam cleaning or upholstery shampoo will wipe away all water stains that have been plaguing your furniture. They can be unsightly and make your beautiful home feel dirty. We use our non-toxic formulas with our unique and effective cleaning methods to bring you deep upholstery cleaning in NYC, Brooklyn, Queens, and beyond!
        </p>
		  
		  <p><strong>Odor Removal and Deodorizing</strong></p>
        <p>
           Just like us, our pets have their favorite spot on a piece of furniture, whether it be that couch cushion, that armchair, or that spot on the mattresses. His or her cute feline or canine body over time leaves oils and hair which can create an odor that just won’t go away. That’s why we recommend having regular cleanings if you own a pet, cat or dog, to ensure your home remains odor free, sanitized and clean with our hair removal and deodorizing services.
        </p>
        <p>
          Call PristineGreen Upholstery and Carpet cleaning today to learn how we can bring your upholstery back to new with your green products and deep cleaning shampoos and steam cleanings.
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
                <h6>Upholstery Cleaning Services</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Office Chair
                  Cleaning Services</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Getting Stains
                  out of Upholstery</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Mattress Cleaning</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Oriental Rug Cleaning</h6>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="offer-2">
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Chair Cleaning Service</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Get Urine
                  out of Couch</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Cushion Cleaning</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Deep Clean Fabric
                  Couch and Chairs</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Organic Upholstery Cleaner</h6>
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
