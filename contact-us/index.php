<?php
include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

$site_title = "Contact Us";
$site_description = "Get in contact with us to get a free quote for upholstery and carpet cleaning services in NYC! Call us at (347) 871-6530 or email at sales@pristinegreencleaning.com!";
$site_keywords = "";
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
$bodyClass = 'page-template page-template-page-contact page-template-page-contact-php page page-id-1792 group-blog';
include ($_SERVER['DOCUMENT_ROOT'].'/header-optimize.php');
?>
<section id="top-banner" class="position-relative short-header" style="height: 181px;">
  <img class="img img-fluid lazy position-absolute" data-src="<?= $baseUrl ?>/assets/images/rug-cleaner-nyc-contact-us.webp" width="1920" height="181">
  <div class="banner-content container-fluid padding-0 w-100">
    <div class="container">
      <div class="heading-text text-center services-heading">
        <h1 >Contact Us</h1>
      </div>
    </div>
  </div>
</section>
<section id="contact-form-fields" class="contact-form-fields py-6">
  <div class="container">
    <div class="row">
      <div class="col-md-8 text-center text-md-start">
        <div class="heading-text">
          <h3 class="text-blue  fw-bold fs-2 fs-md-5 lh-1-3 lh-md-auto mb-3">Contact Us</h3>
          <p class="big mb-4">Contact our sales team below! Our knowledgable representatives will respond shortly and provide you with a free quote and answer any questions you have. </p>
        </div>

        <div role="form" class="" id="" lang="en-US" dir="ltr">
          <?php echo isset($message_resp) ? 
				'
					<script>
					
					</script>
				'
			: '' ; ?>
          <div class="screen-reader-response"></div>
          <form action="/contact-us/#contact-form-fields" method="post" class="theme-form mb-5">
            <div style="display: none;"><input type="hidden" name="contact-us" value="" /></div>
            <div class="form-group">
              <input type="text" name="your-name" value="" size="40" class="form-control" placeholder="Name" required/>
            </div>
            <div class="form-group email-input">
              <input type="email" name="your-email" value="" size="40" class="form-control" placeholder="Email Address"/>
            </div>
            <div class="form-group">
              <input type="text" name="your-phone" value="" size="40" class="form-control" placeholder="Phone" required/>
            </div>
            <div class="form-group">
              <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control cont-mesg" placeholder="Message" required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Contact Us" class="btn btn-submit cont-btn" />
            </div>

            <div class="wpcf7-response-output wpcf7-display-none"></div>
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <hr class="vertical-line">

        <div class="social-icons">
          <div class="heading-text text-center">
            <h3 class="text-blue  fw-bold pb-3">Visit Us</h3>
          </div>
          <div class="icon-list text-center pb-3">
            <a href="https://www.facebook.com/PristineGreen-Upholstery-and-Carpet-Cleaning-380402999024630/?__tn__=%2Cg/" target="_blank">
              <img data-src="https://pristinegreencleaning.com/assets/icons/png-transparent-facebook-logo-social-media-facebook-computer-icons-logo-facebook-icon-internet-facebook-icon-500px.png" alt="facebook" width="32px" height="32px" class="lazy">
            </a>
            <a href="https://twitter.com/PGCarpetClean" target="_blank">
              <img data-src="https://pristinegreencleaning.com/assets/icons/twwi.png" alt="twitter" width="32px" height="32px" class="lazy">
            </a>
            <a href="https://www.instagram.com/pristinegreencleaning/" target="_blank">
              <img data-src="https://pristinegreencleaning.com/assets/icons/instagram-new.png" alt="instagram" width="32px" height="32px" class="lazy">
            </a>
          </div>
        </div>
        <hr>
        <div class="address-detail text-center pt-3">
          <div class="heading-text-sidebar">
            <h3 class="text-blue  fw-bold pb-3">Contact Info</h3>
          </div>

          <div class="address-info py-3">
            <p><strong>Contact</strong></p>
            <p>
              <a href="tel:3478716530">(347) 871-6530</a><br/>
              <a href="mailto:sales@pristinegreencleaning.com">sales@pristinegreencleaning.com</a>
            </p>
          </div>

          <div class="address-info py-3">
            <p><strong>Manhattan</strong></p>
            <a href="https://www.google.com/maps/place/PristineGreen+Upholstery+and+Carpet+Cleaning/@40.6987237,-73.9706372,12z/data=!4m8!1m2!2m1!1spristinegreen+cleaning!3m4!1s0x89c25c2f585001ef:0xe845b54866df15ad!8m2!3d40.740055!4d-73.985528">
              <img data-src="<?= $baseUrl ?>/assets/images/map/Manhattan.webp" alt="Astoria" class="lazy" width="200" height="200">
            </a>
            <p>
              <a href="https://www.google.com/maps/place/PristineGreen+Upholstery+and+Carpet+Cleaning/@40.6987237,-73.9706372,12z/data=!4m8!1m2!2m1!1spristinegreen+cleaning!3m4!1s0x89c25c2f585001ef:0xe845b54866df15ad!8m2!3d40.740055!4d-73.985528">
                115 E 23rd St 3rd Floor<br/>
                New York, NY 10010
              </a>
            </p>
          </div>

          <div class="address-info py-3">
            <p><strong>Astoria</strong></p>
            <a href="https://www.google.com/maps/place/PristineGreen+Upholstery+and+Carpet+Cleaning/@40.6985058,-73.9706371,12z/data=!4m8!1m2!2m1!1spristinegreen+cleaning!3m4!1s0x89c25f49eda93537:0xdcc4dea443c7443!8m2!3d40.7732257!4d-73.9062583">
              <img data-src="<?= $baseUrl ?>/assets/images/map/Astoria.webp" alt="Astoria" class="lazy" width="200" height="200">
            </a>
            <p>
              <a href="https://www.google.com/maps/place/PristineGreen+Upholstery+and+Carpet+Cleaning/@40.6985058,-73.9706371,12z/data=!4m8!1m2!2m1!1spristinegreen+cleaning!3m4!1s0x89c25f49eda93537:0xdcc4dea443c7443!8m2!3d40.7732257!4d-73.9062583">
                3811 Ditmars Blvd #1068<br/>
                Astoria, NY 11105
              </a>
            </p>
          </div>

          <div class="address-info">
            <p><strong>Queens</strong></p>
            <a href="https://www.google.com/maps/place/PristineGreen+Upholstery+and+Carpet+Cleaning/@40.7016013,-73.888443,17z/data=!3m1!4b1!4m5!3m4!1s0x89c25d487b9346b5:0x11d8fb16e21b2f67!8m2!3d40.6981707!4d-73.9005965">
              <img data-src="<?= $baseUrl ?>/assets/images/map/Queens.webp" alt="Queens" class="lazy" width="200" height="200">
            </a>
            <p>
              <a href="https://www.google.com/maps/place/PristineGreen+Upholstery+and+Carpet+Cleaning/@40.7016013,-73.888443,17z/data=!3m1!4b1!4m5!3m4!1s0x89c25d487b9346b5:0x11d8fb16e21b2f67!8m2!3d40.6981707!4d-73.9005965">
                6705 Myrtle Ave #1015<br/>
                Queens, NY 11385
              </a>
            </p>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<?php
include ($_SERVER['DOCUMENT_ROOT'].'/partials/footer-top.php');
?>
<script type="text/javascript">
    var recaptchaCallback = function() {
        var forms = document.getElementsByTagName('form');
        var pattern = /(^|\s)g-recaptcha(\s|$)/;
        for (var i = 0; i < forms.length; i++) {
            var divs = forms[i].getElementsByTagName('div');
            for (var j = 0; j < divs.length; j++) {
                var sitekey = divs[j].getAttribute('data-sitekey');
                if (divs[j].className && divs[j].className.match(pattern) && sitekey) {
                    grecaptcha.render(divs[j], {
                        'sitekey': sitekey,
                        'theme': divs[j].getAttribute('data-theme'),
                        'type': divs[j].getAttribute('data-type'),
                        'size': divs[j].getAttribute('data-size'),
                        'tabindex': divs[j].getAttribute('data-tabindex'),
                        'callback': divs[j].getAttribute('data-callback'),
                        'expired-callback': divs[j].getAttribute('data-expired-callback')
                    });
                    break;
                }
            }
        }
    }
</script>
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/footer-optimize.php');
?>
