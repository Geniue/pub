<?php
include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

$site_title = "Contact Us";
$site_description = "Get in contact with us to get a free quote for mobile auto detailing in NYC! Call us at (347) 877-0105 or email at sales@stueysgreenautoclean.com!";
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
$bodyClass = 'page-template page-template-page-contact page-template-page-contact-php page page-id-1792 group-blog';
include ($_SERVER['DOCUMENT_ROOT'].'/header-optimize.php');
?>
<section id="top-banner" class="position-relative short-header" style="height: 181px;">
  <img class="img img-fluid lazy position-absolute" data-src="/assets/images/car-upholstery-cleaning-NY-Stuey%27s-Green-Auto-Clean-11385-Queens-mobile-auto-detailing.jpg" width="1920" height="181">
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
          <p class="big mb-4">Contact our team today. Please complete the form below and we'll get back to you within 24 hours.
            Our office hours are 9:00am to 9:00pm - seven days a week.</p>
        </div>

        <div role="form" class="" id="" lang="en-US" dir="ltr">
          <?php echo isset($message_resp) ? $message_resp : '' ; ?>
          <div class="screen-reader-response"></div>
          <form action="/contact-us/#contact-form-fields" method="post" class="theme-form mb-5">
            <div style="display: none;"><input type="hidden" name="contact-us" value="" /></div>
            <div class="form-group">
              <input type="text" name="your-name" value="" size="40" class="form-control" placeholder="Enter Your Name" required/>
            </div>
            <div class="form-group email-input">
              <input type="email" name="your-email" value="" size="40" class="form-control" placeholder="Enter Your Email Address"/>
            </div>
            <div class="form-group">
              <input type="text" name="your-phone" value="" size="40" class="form-control" placeholder="Enter Your Phone" required/>
            </div>
            <div class="form-group">
              <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control cont-mesg" placeholder="Enter Your Message" required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send a Message" class="btn btn-submit cont-btn" />
            </div>

            <div class="wpcf7-response-output wpcf7-display-none"></div>
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <hr class="vertical-line">

        <div class="social-icons">
          <div class="heading-text text-center">
            <h3 class="text-blue  fw-bold pb-3">Get Social</h3>
          </div>
          <div class="icon-list text-center pb-3">
              <a href="https://www.facebook.com/stueysgreenautoclean" target="_blank">
                <img data-src="/assets/icons/facebook.png" alt="facebook" width="32px" height="32px" class="lazy">
              </a>
              <a href="https://twitter.com/XXX" target="_blank">
                <img data-src="/assets/icons/twitter.png" alt="twitter" width="32px" height="32px" class="lazy">
              </a>
              <a href="https://www.instagram.com/stueysgreenautoclean/" target="_blank">
                <img data-src="/assets/icons/instagram.png" alt="instagram" width="32px" height="32px" class="lazy">
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
              <a href="tel:9178770105">(917) 877-0105</a><br/>
              <a href="mailto:sales@stueysgreenautoclean.com">sales@stueysgreenautoclean.com</a>
            </p>
          </div>

          <div class="address-info py-3">
            <p><strong>Queens</strong></p>
            <a href="https://www.google.com/maps/place/Stuey's+Green+Auto+Clean/@40.7003873,-73.916719,14.67z/data=!4m5!3m4!1s0x89c25c2f585001ef:0xcf4c4430d9098bb3!8m2!3d40.698156!4d-73.90057">
              <img data-src="/assets/images/map/Queens-Stueys-Green-Auto-Clean.jpg" alt="Queens Stuey's Green Auto Clean" class="lazy" width="200" height="200">
            </a>
            <p>
              <a href="https://www.google.com/maps/place/Stuey's+Green+Auto+Clean/@40.7003873,-73.916719,14.67z/data=!4m5!3m4!1s0x89c25c2f585001ef:0xcf4c4430d9098bb3!8m2!3d40.698156!4d-73.90057">
                1735 Norman St<br/>
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
