<?php
include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

$site_title = "Pet Stains and Odor Cleaning";
$site_description = "Trusted pet stain removal and pet odor removal service in NYC. Commonly used for pet urine removal and pet dander/allergy removal!";
$site_keywords = "getting urine out of carpet, my carpet smells like dog pee, clean dog pee off carpet, dog urine stain on carpet, remove urine odor from carpet, steam clean cat urine, my rug smells like dog pee, best way to clean puppy pee from carpet, removing human urine from carpet, best steam cleaner for dog urine, pet urine deodorizer, carpet cleaner for urine smell, remove cat urine odor from carpet, best carpet cleaner for pet urine";
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
  <img class="img lazy" data-src="<?= $baseUrl ?>/assets/images/pet-stains-odor-cleaning-min.webp" width="1908" height="590">
  <div class="banner-content container-fluid padding-0 position-absolute w-100 py-7">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="heading-text services-heading">
            <h1>Other Construction <br>& Renovation Services</h1>
            <h4>Top-rated and trusted general contractor in NYC</h4>
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
          <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 mb-3 text-green text-uppercase">Other Construction</h2>
        </div>
      </div>
      <div class="col-md-12">
        <p><strong>
            In addition to the traditional construction services, we specialize in a variety of other construction and renovation services as well. Take a look!
          </strong></p>
       <p><strong>Staircase Renovation</strong></p>
        <p>Staircases get a lot of abuse over the years. The stair panels can become worn and squeaky and need replacement, the banister may need extra reinforecement, or the wood on your staircase, like oak or pine, needs a fresh coat of stain or paint. Whatever the project, we can help! We specialize in both wooden staircase and synthetic staircase renovation, 1930s to 70s staircase renovation, stair railing renovation, and under stairs renovation. Luckily, staircases are often made very sturyd and only a staircase refurbishment is needed. We will also go over with you the average cost to remodel a staircase before we begin.</p>
      <p><strong>Framing Construction</strong></p>
        <p>Framing is the foundation of the walls and floor and needs to be done right. We specialize in a variety of framing methods, depending on your project. Aside from traditional post and beam timber frame construction, we can do metal stud framing as well. As residential framing contractors, we can help you with a variety of framing projects including roof framing, 	metal deck framing, timber wall construction, and more!</p>
       <p><strong>Fireplace Remodel</strong></p>
        <p>When purchasing a new apartment, often remodeling the fireplace can add an entirely new look to the room. We specialize in a variety of fireplace remodels. Stone fireplace makeovers are especially popular, but we also specialize in brick fireplace remodels. The fireplace remodel cost can vary depending on whether the work requires extraction, not just facade work. Our typical modern firepalce remodel also includes changing the mantel.   </p>
		  <p><strong>Building a Shed</strong></p>
        <p>Sheds can add much storage and utility space to a home and should not be overlooked! Whether you are looking for a typical garden shed or storage shed, we can custom building whatever you need. We can go over the options with you, choosing either a standard Home Depot shed, plastic shed, metal shed, lean to shed, outdoor wood shed, and more! Whatever you need, we can construct and build it for you!</p>
		  <p><strong>Pool Building and Construction</strong></p>
        <p>Swimming pool construction is a speciality in its own. Because of this, we have a dedicated team of expert trademen who specialize in pool building. Swimming pool construction requires many steps which must be done right, or issues can arise in the future. Whether you are looking for a concrete pool, tiled pool, inground pool, or above ground pool, we can build whatever is best for your home. As swimming pool contractors, we know the cost of putting in a pool can be great which is why your team will work with you from the design to build stage to minimize cost while maximing quality and longevity of your new home addition.</p>
		 <p><strong>Masonry Construction</strong></p>
        <p>Stone and hard materials add a unique look to a home. At Reflections, we specialize in a variety of masonry services. Whether you have a joisted masonry home and need brick wall constructrion, or you want a living room makeover including a fireplace construction, our team has the tools and experts to get the job done right. As a residential masonry contractor, We often get calls for traditional brick and mortar construction, including brick arches construction. Yet we also get called for concrete masonry construction and hollow block wall construction. Whatever you needs, give us a call! </p>
		 <p><strong>Sustainable & Green Construction</strong></p>
        <p>Being green and sistainable is all the rage today, and for good reason! Using green materials or lower toxicity materials in your home building process makes your home safer. Such ways customers like to use green materials is choosing low-VOC paint and safer insulation. Eco-friendly, sustainable, and green building materials won't always also cost more. Green building design to add much benefit and economic value to your home so ask our experts today about our green building methods when you call! </p>
		  <p><strong>Brownstone Renovation</strong></p>
        <p>Many of us New Yorkers live in brownstones and they are a specialized building in itself. Understanding how a brownstone was built is imperative when doing renovations. A brownstone renovation can completely update the aesthtics and functionality of your home! We do all types of brownstone upgrades from budget friendly brownstone renovations to brownstone renovation costs which are much higher. Whether you are looking for a bathroom and brownstone kitchen remodel or masonry facade work, our team has the tools and expertise to get the job done right for you!  </p>
		  <p>
          Call Reflections Construction today to learn what packages we offer to bring your home to the next level!
        </p>
      </div>
    </div>
  </div>
</section>

<section id="offering-services" class="py-6">
  <div class="container">
    <div class="row">
      <div class="col heading-text">
        <h3 class="text-blue fs-3 fs-md-5 lh-1-3 lh-md-auto">We offer a variety of construction services...</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
            <ul class="offer-1">
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Home Remodel</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Excavating Contractors</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>House Renovation</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Concrete Construction</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Beam Construction</h6>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="offer-2">
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Fireplace Renovation</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Basement Remodel</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Staircase Construction</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54">
                <h6>Professional Home Remodeling</h6>
              </li>
              <li>
                <img class="lazy" data-src="<?= $baseUrl ?>/assets/icons/tick-mark.webp" alt="" width="54" height="54"><h6>Best Construction</h6><h6>Best Carpet Cleaner for Pet Odors</h6>
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
$pg_service = 'Professional Pet Stain & Odor Removal Services';
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
$pg_service_title = 'steam cleaning for pet stains';
$pg_images = array(
  array(
    'url' => 'rsz_curtain_cleaning_croydon.jpg',
    'alt' => 'Upholstery and Queen Carpet Cleaning',
    'w' => 395,
    'h' => 527,
  ),
  array(
    'url' => 'Upholstery-Cleaning-in-Bromley.jpg',
    'alt' => 'Upholstery Carpet Cleaning',
    'w' => 395,
    'h' => 296,
  ),
  array(
    'url' => 'rsz_curtain_cleaning_in_london.jpg',
    'alt' => 'Queens Carpet Cleaner',
    'w' => 345,
    'h' => 259,
  ),
  array(
    'url' => 'rsz_curtain_cleaning_croydon.jpg',
    'alt' => 'Area Rug Cleaning',
    'w' => 395,
    'h' => 527,
  ),
  array(
    'url' => 'rsz_curtain_cleaning_in_london.jpg',
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

