<?php
include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

$site_title = "Referral Programme";
$site_description = "Learn how you can earn money toward a free mobile auto detail when you refer your friends to our trusted and recommended service!";
$site_keywords = "auto detail referral program";
$canonical = "";
$og_site_title = "";
$og_description = "";
$og_title = "";
$og_url = "";
$og_image = "";
$ld_json = <<<LD_JSON

LD_JSON;

?><?php
$bodyClass = 'page-template page-template-page-about page-template-page-about-php page page-id-2355 group-blog';
include ($_SERVER['DOCUMENT_ROOT'].'/header-optimize.php');
?>

<section id="top-banner" class="position-relative short-header" style="min-height: 190px;max-height: 190px">
  <img class="img img-fluid lazy" data-src="/assets/images/referral-programme.webp" width="1920" height="250">
  <div class="banner-content container-fluid padding-0 position-absolute w-100 py-7">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="heading-text text-center services-heading">
            <h1>Referral Program</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="main-content-cleaning" class="py-7 main-content-cleaning-service">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="col heading-text">
          <h3 class="text-blue text-center text-uppercase fs-2 fs-md-5 lh-1-3 lh-md-auto">Referral Program</h3>
        </div>
      </div>
      <div class="col-md-12">
        <p><strong>Get a Free Cleaning with Referrals!</strong></p>
        <p>
          Since you are a big fan of our services, we like to reward you when you refer us to your friends and family. For every referral you bring us, we deduct 10% of
          the bill of your referral off your next cleaing. Meaning if your referral spent $250, you receive $25 off your next cleaning! Just let us know who you referred
          to us when you call to set an appointment and we will make those deducations automatically!
        </p>
        <br/><br/>
      </div>
    </div>
  </div>
</section>


<?php
include ($_SERVER['DOCUMENT_ROOT'].'/partials/footer-top.php');
include ($_SERVER['DOCUMENT_ROOT'].'/footer-optimize.php');
?>
