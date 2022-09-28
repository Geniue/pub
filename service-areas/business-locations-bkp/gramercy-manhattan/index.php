<?php
include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

$site_title = "Gramercy, Manhattan NYC Business Location";
$site_description = "Our business location is located near Gramercy Park im Manhattan, NYC serving all surrounding areas including East Village, West Village, Soho, Noho, Tribeca, and the rest of Manhattan for their upholstery and carpet cleaning service needs!";
$site_keywords = "";
$canonical = "";
$og_site_title = "";
$og_description = "";
$og_title = "";
$og_url = "";
$og_image = "";
$ld_json = <<<LD_JSON

LD_JSON;

?>
<?php
$bodyClass = 'carpet-cleaning-template-default single single-carpet-cleaning nyc-carpet-cleaning postid-4212 single-format-standard group-blog';
include ($_SERVER['DOCUMENT_ROOT'].'/header-optimize.php');
?>
<style>
	.services-heading h1 {
		color: #2baf38;
	}

	.services-heading h1 .blue {
		color: #4873b7;
	}
</style>
<section id="top-banner" class="position-relative" style="min-height: 585px;">
  <img class="img lazy" data-src="/assets/images/service/carpet-cleaning-service-NYC-New-York-rug-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning-NY.webp" width="1920" height="590">
  <div class="banner-content container-fluid padding-0 position-absolute w-100 py-7">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="heading-text services-heading">
            <h1>Gramercy, Manhattan NYC<span class="blue"> Carpet <br/>Cleaning</span></h1>
            <div class="feature-bullets mb-4 mb-md-5 ">
              <ul class="m-0 p-0">
                <li>Local Manhattan, NYC Carpet Cleaners</li>
                <li>Only 5-Star Reviews</li>
                <li>Top Customer Service</li>
                <li>Safe for Kids, Pets, and the Environment</li>
              </ul>
            </div>
          </div>
        </div>
        <form action="/free-quote/" id="formid" enctype="multipart/form-data" method="GET">
          <input type="text" id="postalcode" name="PostCode" placeholder="Enter Your Po" class="postalcode typingField">
          <input type="hidden" id="phonenumber" name="PhoneNumber" value="020 3519 8926">
          <input type="hidden" id="loc-category" name="loc-category" value="london">
          <button type="submit" class="btn btn-submit singlecarpet-btn center">GET A QUOTE</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include($_SERVER['DOCUMENT_ROOT'].'/partials/rating-bar.php');?>

<section id="main-content-cleaning" class="py-7 main-content-cleaning-service">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-4">
          <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 mb-3 text-green text-uppercase">
            Our Carpet Cleaning Business Location at Gramercy, Manhattan NYC
          </h2>
        </div>
      </div>
      <div class="col-md-12">
        <p>
          PristineGreen Upholstery and Carpet Cleaning is the best carpet and upholstery cleaners in Manhattan. With our variety of upholstery and carpet
          cleaning services, you will never have to worry about a dirty home again. We clean a variety of items including carpets, couches, mattresses,
          area rugs, auto interiors, and more!
        </p>
        <p>
          For years, PristineGreen has been serving Manhattan residents with their carpet cleaning needs. With a location situated right near Gramercy Park,
          that has received only 5-star reviews, you can trust us to take care of your home furnishings.  Our experience with a range of rugs and textiles gives
          us the knowledge to handle any problems. We also use only green and non-toxic materials when performing our services which keeps our clients and their
          families and pets safe.
        </p>
        <p>
          In Manhattan, we provide carpet cleaning services to both residential and commercial properties. We often see wall-to-wall carpet in bedrooms and large
          couches that seat over 4 people in living rooms. We use state-of-the-art machines to clean a variety of fabrics so whatever your furniture item or rug,
          we can clean it for you.
        </p>
        <p>
          With our three different package deals, you can choose the one that suits your needs. The deep cleaning option offers a more thorough cleaning, while the other
          options provide a layer of disinfection and essential oils for extra protection from germs. We provide traditional cleaning methods for your upholstery and rugs,
          but we also offer a range of other services including disinfection. Those who are sensitive to chemicals often choose this addon service for their upholstery and
          rug cleaning which helps eliminate dust mites which can exacerbate allergies. Many people also opt for this this package just to have peace of mind that their
          rugs and upholstery are thoroughly cleaned, even on a germ level.
        </p>
        <p>
          We always use a step-by-step cleaning process that takes into consideration the fabric of the item. We assess stains and choose the appropriate chemical and
          method to use to get them out. Our stain removers are non-toxic and safe to use on a wide range of stains, from pet stains, odor removal, food stains, and wine
          spills.
        </p>
        <p>
          If you're looking for a deep cleaning of your rugs and upholstery in Manhattan, give us a call and we'll give you a free instant quote on your furnishings.
          We are an honest company and the price we offer you is the price you pay (unless the items stated were smaller or larger than in reality). Speak with one of
          our representatives today to book an appointment so you too can enjoy the PristineGreen experience!
        <p>
        <br/>
        <h6>We also have other business locations serving the rest of NYC at these locations</h6>
        <p>
          <a href="/service-areas/business-locations/astoria-queens/">Astoria, Queens</a><br/>
          <a href="/service-areas/business-locations/ridgewood-queens/">Ridgewood, Queens</a>
        </p>
      </div>
    </div>
  </div>
</section>

<?php include($_SERVER['DOCUMENT_ROOT'].'/partials/offer-services.php'); ?>
<?php
  $pg_service = 'Carpet Cleaning and Upholstery Cleaning';
  $pg_place = 'in Manhattan'
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/partials/cta-bar.php'); ?>

<?php
$pg_service_title = 'carpet cleaning';
$pg_images = array(
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
);
include($_SERVER['DOCUMENT_ROOT'].'/partials/page-slider.php');
?>

<?php include ($_SERVER['DOCUMENT_ROOT'].'/partials/call-section.php'); ?>

<section id="map-address" class="bg-blue dark py-0 mt-5 map-address">
  <div class="container-fluid padding-0">
    <div class="row">
      <div class="col-md-4 address-cont text-center">
        <h4>PristineGreen<br>Upholstery and Carpet Cleaning</h4>
        <p>
          115 E 23rd St 3rd floor<br/>
          New York, NY 10010<br/>
          <a href="tel:3478716530">(347) 871-6530</a> <br/><br/>
          <a href="mailto:sales@pristinegreencleaning.com">sales@pristinegreencleaning.com</a>
        </p>
      </div>
      <div class="col-md-8 map-cont" style="padding-right:0">
        <a target="_blank" href="https://www.google.com/maps/place/PristineGreen+Upholstery+and+Carpet+Cleaning/@40.7377275,-73.9886459,15.75z/data=!4m8!1m2!2m1!1spristinegreen+cleaning!3m4!1s0x89c25c2f585001ef:0xe845b54866df15ad!8m2!3d40.740135!4d-73.9941977">
          <img class="lazy img-fluid" data-src="/assets/images/map/map-gramercy.webp" alt="Google Map" width="1260" height="450" style="height: 100%">
        </a>
      </div>
    </div>
  </div>
</section>

<?php
$feedbacks = array(
  array(
    "name"	=>	"Garrett Bryant",
    'imageUrl'	=>	'assets/images/review_images/debra.png',
    'star'=> -1,
    'description'	=>	'Every part of my experience with Stuart and his team was seamless. I was fortunate enough he was able to accommodate 
    me same day. His team member showed up on time and was very polite and professional. He also checked in with me throughout the process 
    to update me on where he was at in the process. More importantly he did a great job! He even got out a candle wax spill that had been 
    on the couch for longer than I would like to admit. Nice people, professional, and reasonably priced. Already planning on hiring them 
    again soon to do our rugs and upholstered bed!',
  ),
  array(
    'name'	=>	'Steffi Min',
    'imageUrl'	=>	'assets/images/review_images/karen.png',
    'star'=> -1,
    'description'	=>	'I highly recommend PristineGreen cleaning. After two cleaning attempts by another service, one on-site steam cleaning 
    and then another off-site \'industrial\' dry cleaning, the sofa still had visible stains. I was met with excuses and long stories till 
    I decided to call for another service. Stuart was very straight forward and honest over the phone. He focused on all the discolored dark 
    spots, an issue the other service said it was impossible to remove without damaging the fabric. In an industry where the fee of service 
    reflects the quality, this was the opposite case where Stuart\'s service was the lowest fee with the highest results.!',
  ),
  array(
    'name'	=>	'Emily Wolff',
    'imageUrl'	=>	'assets/images/review_images/richard.png',
    'star'=> -1,
    'description'	=>	'Great experience! Highly recommend. Couch, carpet, mattress and upholstered chair all look immaculate. Will definitely 
    use again - Thank you!!',
  ),
)
?>
<section id="reviews" class="bg-gray py-5">
  <div class="container">
    <div class="row my-4">
      <div class="col">
        <h3 class="text-blue ">WE'RE HAPPY TO LET OUR CUSTOMERS DO THE TALKING</h3>
      </div>
    </div>
    <div class="row">
      <?php foreach($feedbacks as $feedback): ?>
        <div class="review style-2 col-lg-4">
          <div class="profile">
            <img class="person lazy" data-src="<?php echo $baseUrl.'/'.$feedback['imageUrl']; ?>" alt="debra">
            <span class="title"><?php echo $feedback['name']; ?> </span>
          </div>
          <span class="text"><?php echo $feedback['description']; ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!--<script>-->
<!--    reviewsBadgeRibbon("badge-ribbon", {-->
<!--        store: "pristinegreencleaning",-->
<!--        mono: "",-->
<!--        size: "small",-->
<!--    });-->
<!---->
<!--</script>-->
<!--<script>-->
<!--    richSnippetReviewsWidgets("carousel-widget", {-->
<!--        store: "pristinegreencleaning",-->
<!--        primaryClr: "#f47e27",-->
<!--        neutralClr: "#cccccc",-->
<!--        reviewTextClr: "#333333",-->
<!--        widgetName: "carousel",-->
<!--        layout: "fullWidth",-->
<!--        numReviews: 40,-->
<!--        contentMode: "company",-->
<!--        hideDates: false,-->
<!--        enable_rich_snippets: true,-->
<!--        product_name: "carpet cleaning",-->
<!--        keyword: "carpet cleaning",-->
<!--    });-->
<!--</script>-->
<?php
  include ($_SERVER['DOCUMENT_ROOT'].'/partials/footer-top.php');
  include ($_SERVER['DOCUMENT_ROOT'].'/footer-optimize.php');
?>
