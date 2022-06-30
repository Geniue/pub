<?php
include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

$site_title = "Free Quote Now";
$site_description = "Submit your information about how you need mobile auto detailing services in NYC and we will get back to you shortly!";
$site_keywords = "car detailing near me, car detailing, hand car wash near me, auto detailing near me, detailing, auto detailing, full service car wash near me, detailing near me, mobile detailing near me, car cleaning near me, mobile car wash, mobile car detailing near me, hand car wash, car cleaning, auto spa, car interior cleaning, full service car wash, mobile car detailing, hand wash car wash, car spa, mobile car wash near me, mobile detailing, paint correction, detail shop near me, interior car detailing near me, detail car wash, car interior detailing, detail car wash near me, detail, car seat cleaning, car polishing, car detailing services, car carpet cleaning, car steam cleaning, car upholstery cleaning, car shampooing, best detailing, autospa, mobile auto detailing near me, complete car detailing near me, car wax polish, truck detailing near me, car deep cleaning near me, headlight polishing, exhaust tip polishing, clay bar treatment, engine detailing, odor removal, wheel washing";
$canonical = "";
$og_site_title = "";
$og_description = "";
$og_title = "";
$og_url = "";
$og_image = "";
$ld_json = <<<LD_JSON

LD_JSON;
$post_code = '';
if(isset($_GET['PostCode']) && !empty($_GET['PostCode'])){
  $post_code = htmlentities($_GET['PostCode']);
}

?>
<?php
$bodyClass = 'page-template page-template-page-freequote page-template-page-freequote-php page page-id-2239 group-blog';
include ($_SERVER['DOCUMENT_ROOT'].'/header-optimize.php');
?>
<section id="top-banner" class="position-relative free-quote">
  <img class="img lazy" data-src="/assets/images/Stuey%27s-Green-Auto-Clean-NY-11385-mobile-auto-detailing-best-detailing-Queens.jpg" width="1920" height="662">
  <div class="banner-content container-fluid padding-0 position-absolute w-100 pb-7">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center pt-7">
          <div class="heading-text services-heading text-white mb-4">
            <h2>Get a Free Quote</h2>
            <p>NYC's most trusted and recommended mobile auto detailng service!</p>
          </div>

          <form action="/free-quote/#subForm" method="post" id="subForm" class="sub-form m-auto">
            <div class="form-group">
              <input class="form-control mb-3"  id="fieldName" name="your-name" type="text" placeholder="Full Name"/>
            </div>
            <div class="form-group">
              <input class="form-control mb-3"  id="fieldpdydrr" name="your-phone" type="text"  placeholder="Best Contact Telephone Number" maxlength="15" required/>
            </div>
            <div class="form-group">
              <input class="form-control mb-3"  id="fieldEmail" name="your-email" type="email" placeholder="Email" required/>
            </div>
            <div class="form-group">
              <input class="form-control mb-3"  id="fieldpdydry" name="your-postcode" type="text" value="<?php echo $post_code; ?>" placeholder="Postcode"/>
            </div>
            <div class="form-group">
              <button type="submit" name="get-quote" class="btn btn-default btn-submit " id="submit-btn">Get A Quote</button>
            </div>
            <div class=""><?php echo isset($message_resp) ? $message_resp : '' ; ?></div>
            <div id="btn-submit-div"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include ($_SERVER['DOCUMENT_ROOT'].'/partials/footer-top.php');
include ($_SERVER['DOCUMENT_ROOT'].'/footer-optimize.php');
?>
