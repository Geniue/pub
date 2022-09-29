<?php
include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

$site_title = "Carpet Cleaning";
$site_description = "Learn about our carpet cleaning and rug cleaning services in NYC";
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
  <img class="img lazy" data-src="<?= $baseUrl ?>/assets/images/carpet-cleaner-nyc-banner.webp" width="1920" height="590">
  <div class="banner-content container-fluid padding-0 position-absolute w-100 py-7">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="heading-text services-heading">
            <h1>Fence Building</h1>
            <h4>Your trusted and professional fence builder in NYC</h4>
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
          <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 mb-3 text-green text-uppercase">Fence Building</h2>
        </div>
      </div>
      <div class="col-md-12">
        <p><strong>
          A fence is an essential element of any home. It keeps unwanted visitors out of your yard, and also physically deliniates what is your land and that of your neighbor. Not all fences are the same! Some are wooden, some are iron, and some need special care more than others. Whatever your intention, our team at Reflections Construction will advise you on which fence is most appropriate for your home or commerical space and walk you through the cost and design build elements that will be necessary to bring it to life!
          </strong></p>
       <p><strong>Fence Types</strong></p>
        <p>Before a fence is built, its purpose needs to be clearly defined. Will it be used to prevent animals like dear and hedgehogs from entering your lawn? Will it be used for purely aesthetic purposes? Does it need to fit the code of the HOA? Whatever the result, our team will find the right type of fence to suit your needs. Such fences include aluminium fence, wire mesh fences, steel anti-rust fence, cedar slat fence, severe weather pressure treated spruce pine fence, and more!</p>
         <p><strong>Fence Preparation</strong></p>
        <p>When building a fence, there are several factors that need to come into consideration, one being the type of foundation necessary to support hte fence. Depending on what type of visible fence you choose,for example steel or pressure treated pine, we need to figure out how these posts will stay erect and strong. For wood, we dig holes in the ground, reinforced either by concrete or an expanding medium in which the posts are placed. For steel, a concrete base is necessary to hold the steel posts. If the steel posts are large, we could also drive them deep into the ground for support. With this in mind, it is necessary to ensure there are no power lines or utility lines that may obstruct the construction. At Reflections Construction we take all these factors into consideration and choose the best option that is least intrusive, requires no permits if possible, and least cost. We are on your side!   </p>
       <p><strong>Fence Longevity and Maintenance</strong></p>
        <p>As with every project, maintenance and longevity of the product are necessary considerations when choosing supplies and construction methods. If metal fences are chosen, they may be needed to be painted periodically if steel. If aluminum, they may require less maintenance. If pressure treated pine, little maintenance would be required and a staining or painting would increase its longevity. Whatever material is chosen, our team at Reflections will help the customers choose which material is right for them, cinsidering function, cost, and aesthetic.  </p>
       
          <p>Call Reflections Construction today to learn about how we can help you build the fence of your dreams!
        </p>
      </div>
    </div>
  </div>
</section>

<section id="offering-services" class="py-6">
  <div class="container">
    <div class="row">
      <div class="col heading-text">
        <h3 class="text-blue fs-3 fs-md-5 lh-1-3 lh-md-auto">We offer fence building and construction services...</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
            <ul class="offer-1">
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Building a Fence</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Construction Fence</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>General Contractor</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Kitchen Remodeling</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Green Buildling</h6>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="offer-2">
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Fence Construction</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Construction Company</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Home Remodel</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>New Bathroom</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Metal Stud Framing</h6>
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
$pg_service_title = 'carpet cleaning';
$pg_images = array(
  array(
    'url' => '11105-carpet-cleaner-nyc-NY-rug-cleaner-nyc-PristineGreen-Upholstery-and-Carpet-Cleaning-Queens.webp',
    'alt' => 'Upholstery and Queen Carpet Cleaning',
    'w' => 395,
    'h' => 527,
  ),
  array(
    'url' => 'PristineGreen-Upholstery-and-Carpet-Cleaning-10010-NY.webp',
    'alt' => 'Upholstery Carpet Cleaning',
    'w' => 395,
    'h' => 296,
  ),
  array(
    'url' => 'Queens%20Carpet%20Cleaner%20Service%20PristineGreen%20Upholstery%20and%20Carpet%20Cleaning%2011105%20residential%20carpet%20cleaning.webp',
    'alt' => 'Queens Carpet Cleaner',
    'w' => 345,
    'h' => 259,
  ),
  array(
    'url' => 'Area-Rug-Cleaning-PristineGreen-Upholstery-and-Carpet-Cleaning-11105-NY.webp',
    'alt' => 'Area Rug Cleaning',
    'w' => 395,
    'h' => 527,
  ),
  array(
    'url' => 'carpet-cleaner-service-rug-cleaning-NYC-10010-NY-PristineGreen-Upholstery-and-Carpet-Cleaning-New-York.webp',
    'alt' => 'NYC Rug and Upholstery Carpet Cleaning',
    'w' => 395,
    'h' => 527,
  ),
  array(
    'url' => 'carpet-cleaner-nyc-New-York-best-carpet-steam-cleaner-PristineGreen-Upholstery-and-Carpet-Cleaning-10010.webp',
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
