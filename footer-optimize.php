<?php
$baseUrl = (( (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443 ) ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'];
?>

<div id="cll" class="callback-desktop-only" style="position: fixed;
        max-height: 433px; border-top-right-radius: 13px !important;
border-top-left-radius: 13px !important;
border-bottom-right-radius: 13px !important;
border-bottom-left-radius: 13px !important;">
	<div class="request-form-header" style="border-top-right-radius: 13px !important;
border-top-left-radius: 13px !important;
border-bottom-right-radius: 13px !important;
border-bottom-left-radius: 13px !important; background-color:#2baf38;">
		Callback Request
		<button id="btn_" style="font-size: 108%;
background-color:#2baf38;
border-color: transparent; position: absolute; top: 8px;
left: 197px;">&nbsp; 
		 &nbsp;<i style="width: 4px; color: white;" class='fas fa-angle-down'></i></button>
	</div>
	
	<div id="call_body" class="request-form-holder" style="padding: 10px;">
		<?php echo isset($mail_resp)?$mail_resp:''; ?>
		<form method="post" action="/">
			<div style="display: none;"><input type="hidden" name="request-callback" value=""></div>
			<div class="mb-2">
				<label for="fyourname">Your phone number:</label>
				<input id="fyourname" class="" type="number" name="your-number" placeholder="" required>
			</div>
			<div class="mb-2">
				<label for="fneedservice">What do you need detailed?</label>
				<input id="fneedservice" class="" type="text" name="need-service" placeholder="" required>
			</div>
			<div>
				<button class="btn" type="submit" aria-label="Request callback" style="background-color:#2baf38;">Request Callback</button>
			</div>
		</form>
	</div>
</div>
<section id="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="row mb-5">
          <div class="col-md-6 mb-4">
            <div id="text-2" class="widget-container widget_text">
              <div class="textwidget">
                <div class="textwidget">
                  
                  <ul class="social-icons">
                    <li>
                      <a href="https://www.facebook.com/PristineGreen-Upholstery-and-Carpet-Cleaning-380402999024630/?__tn__=%2Cg/" target="_blank" rel="noreferrer">
                        <img rel="canonical" class="lazy" data-src="https://pristinegreencleaning.com/assets/images/5365678_fb_facebook_facebook logo_icon.png" alt="facebook" width="32px" height="32px">
                      </a>
                    </li>
                    <li><a href="https://twitter.com/PGCarpetClean" target="_blank" rel="noreferrer">
                        <img rel="canonical" class="lazy" data-src="https://pristinegreencleaning.com/assets/images/5296516_tweet_twitter_twitter logo_icon.svg" alt="twitter" width="32px" height="32px"></a>
                    </li>
                    <li><a href="https://www.instagram.com/pristinegreencleaning/" target="_blank" rel="noreferrer">
                        <img rel="canonical" class="lazy" data-src="https://pristinegreencleaning.com/assets/images/5296765_camera_instagram_instagram logo_icon.png" alt="instagram" width="32px" height="32px"></a>
                    </li>
                  </ul>
                  <ul>
                    <li>
                      <a href="https://www.paypal.me/PristineGreen" target="_blank" rel="noreferrer">
                        <img rel="canonical" class="trade-logo lazy" data-src="<?= $baseUrl ?>/assets/images/Paypal.webp" alt="paypal payments"  width="180" height="180">
                      </a>
                    </li>
                  </ul>
                  <ul>
                    <li>
                      <a href="https://www.paypal.com/qrcodes/venmocs/3cd63d8b-" target="_blank" rel="noreferrer">
                        <img rel="canonical" class="trade-logo lazy" data-src="<?= $baseUrl ?>/assets/images/Venmo-Payment.webp" alt="paypal payments"  width="186" height="156">
                      </a>
                    </li>
                  </ul>
					<ul>
                    <li>
                      <a href="/payment" target="_blank" rel="noreferrer">
                        <img rel="canonical" class="trade-logo lazy" src="<?= $baseUrl ?>/assets/images/secure-stripe-payment-logo.png" alt="Payments"  width="200" height="200">
                      </a>
                    </li>
                  </ul>
					<div class="logo"><img rel="canonical" class="logo-white lazy" data-src="<?= $baseUrl ?>/assets/logo/CarpetAndUpholsteryCleaning_256x57.png" alt="PristineGreenCleaning"  width="256" height="57"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="quick-links">
              <h6>SERVICE AREAS</h6>

              <ul class="links-a">
                <input class="form-control" type="hidden" name="cat" id="cat" value="">
                <div class="menu-footer-menu-2-container">
                  <ul id="menu-footer-menu-2" class="menu">
                    <li id="menu-item-2475" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2475"><a rel="canonical" href="/service-areas/">Astoria</a></li>
                    <li id="menu-item-2475" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2475"><a rel="canonical" href="/service-areas/">East Village</a></li>
                    <li id="menu-item-2478" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2478"><a rel="canonical" href="/service-areas/">Gramercy Park</a></li>
                    <li id="menu-item-2479" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2479"><a rel="canonical" href="/service-areas/">Lower East Side</a></li>
                    <li id="menu-item-2480" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2480"><a rel="canonical" href="/service-areas/">Maspeth</a></li>
                    <li id="menu-item-2481" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2481"><a rel="canonical" href="/service-areas/">Midtown</a></li>
                    <li id="menu-item-2482" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2482"><a rel="canonical" href="/service-areas/">Park Slope</a></li>
                    <li id="menu-item-2483" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2483"><a rel="canonical" href="/service-areas/">Prospect Park South</a></li>
                    <li id="menu-item-3692" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-3692"><a rel="canonical" href="/service-areas/">Queens Village</a></li>
                    <li id="menu-item-2484" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2484"><a rel="canonical" href="/service-areas/">Union Square</a></li>
                    <li id="menu-item-2485" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2485"><a rel="canonical" href="/service-areas/">Upper West Side</a></li>
                    <li id="menu-item-2486" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2486"><a rel="canonical" href="/service-areas/">Woodside</a></li>
                    <li id="menu-item-2486" class="menu-item menu-item-type-post_type menu-item-object-service-areas menu-item-2486"><a rel="canonical" href="/service-areas/">Woodhaven</a></li>
                    <li id="menu-item-2505" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2489"><a rel="canonical" href="/service-areas">View More Areas</a></li>
                  </ul>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-md-6 mb-4">
			  <div class="quick-links">
              <h6>our links</h6>

              <ul class="links">
                <div class="menu-footer-menu-container">
                  <ul id="menu-footer-menu" class="menu">
                    <li id="menu-item-2357" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2357"><a rel="canonical" href="/about-us">About Us</a></li>
                    <li id="menu-item-2351" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-2351"><a rel="canonical" href="/services/carpet-cleaning">Carpet Cleaning</a></li>
                    <li id="menu-item-2350" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-2350"><a rel="canonical" href="/services/upholstery-cleaning">Upholstery Cleaning</a></li>
                    <li id="menu-item-2349" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-2349"><a rel="canonical" href="/services/area-rug-cleaning">Area Rug Cleaning</a></li>
                    <li id="menu-item-2347" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-2347"><a rel="canonical" href="/services/commercial-cleaning">Commercial Cleaning</a></li>
                    <li id="menu-item-2346" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-2346"><a rel="canonical" href="/services/couch-cleaning">Couch Cleaning</a></li>
                    <li id="menu-item-2539" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-2539"><a rel="canonical" href="/services/green-cleaning">Green Cleaning</a></li>
                    <li id="menu-item-2348" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-2348"><a rel="canonical" href="/services/mattress-cleaning">Mattress Cleaning</a></li>
                    <li id="menu-item-2354" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2354"><a rel="canonical" href="/faqs">FAQ’s</a></li>
                    <li id="menu-item-2361" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2361"><a rel="canonical" href="/blog">Blog</a></li>
					  <li id="menu-item-2361" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2361"><a rel="canonical" href="/coupon">Coupon</a></li>
                  </ul>
                </div>
              </ul>
            </div>
            
          </div>
          <div class="col-md-6">
            <div class="quick-links address-info">
              <h6>get in touch</h6>

              <div id="text-3" class="widget-container widget_text">
                <div class="textwidget">

                  <ul class="links">

                    <li><span class="text-bold">PristineGreen Upholstery and Carpet Cleaning</span></li>
                    <li>115 E 23rd St 3rd floor</li>
                    <li>New York, NY 10010</li>
                    <li><a class="myphone" href="tel:347-871-6530">347-871-6530</a></li>
                    <li><a href="https://www.google.com/maps/place/PristineGreen+Upholstery+and+Carpet+Cleaning/@40.6991596,-73.9706375,12z/data=!4m8!1m2!2m1!1spristinegreen+cleaning!3m4!1s0x89c25c2f585001ef:0xe845b54866df15ad!8m2!3d40.740055!4d-73.985528" target="_blank" rel="noreferrer">Maps &amp; Directions</a></li>
                    <br>
				    <li><span class="text-bold">PristineGreen Upholstery and Carpet Cleaning</span></li>
                    <li>265 E 78th St #6E, New York, NY 10075</li>
                    <li>New York, NY 10075</li>
                    <li><a class="myphone" href="tel:917-727-0936">917-727-0936</a></li>
                    <li><a href="https://www.google.com/maps/place/PristineGreen+Upholstery+and+Carpet+Cleaning+-+UES+Branch/@40.772919,-74.0959543,12z/data=!4m9!1m2!2m1!1spristinegreen+cleaning+ues!3m5!1s0x89c259dca12dcbbf:0x1a7319a3f860b2ba!8m2!3d40.772919!4d-73.9558786!15sChpwcmlzdGluZWdyZWVuIGNsZWFuaW5nIHVlcyIDiAEBkgEXY2FycGV0X2NsZWFuaW5nX3NlcnZpY2U" target="_blank" rel="noreferrer">Maps &amp; Directions</a></li>
					<br>
                    <li><span class="text-bold">PristineGreen Upholstery and Carpet Cleaning</span></li>
                    <li>6705 Myrtle Ave #1015</li>
                    <li>Queens, NY 11385</li>
                    <li><a class="myphone" href="tel:347-871-6530">347-871-6530</a></li>
                    <li><a href="https://www.google.com/maps/place/PristineGreen+Upholstery+and+Carpet+Cleaning/@40.6989417,-73.9706374,12z/data=!4m8!1m2!2m1!1spristinegreen+cleaning!3m4!1s0x89c25d487b9346b5:0x11d8fb16e21b2f67!8m2!3d40.7016013!4d-73.8862543" target="_blank" rel="noreferrer">Maps &amp; Directions</a></li>
                    <br>
                    <li><span class="text-bold">PristineGreen Upholstery and Carpet Cleaning</span></li>
                    <li>3811 Ditmars Blvd #1068</li>
                    <li>Queens, NY 11105</li>
                    <li><a class="myphone" href="tel:347-871-6530">347-871-6530</a>
                      <a rel="canonical" class="myphone-mobile-only" href="tel:13478716530"><img rel="canonical" class="lazy" data-src="<?= $baseUrl ?>/assets/icons/call-icon.webp" alt="call" width="64" height="64"></a>
                    </li>
                    <li><a href="https://www.google.com/maps/place/PristineGreen+Upholstery+and+Carpet+Cleaning/@40.7732257,-73.9762961,12z/data=!4m8!1m2!2m1!1spristinegreen+cleaning!3m4!1s0x89c25f49eda93537:0xdcc4dea443c7443!8m2!3d40.7732257!4d-73.9062583" target="_blank" rel="noreferrer">Maps &amp; Directions</a></li>
                    <br>
                    <li><a href="mailto:sales@pristinegreencleaning.com">sales@pristinegreencleaning.com</a></li>
                  </ul>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="copyright">
  <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0s">
    <div class="row">
      <ul class="copylink">
        <li><a href="/privacy-policy">Privacy Policy</a></li>
        <span class="vertical-border"></span>
        <li><a href="/sitemap.xml" target="_blank" rel="noopener">Sitemap</a></li>
      </ul>
      <p>©  2021 PristineGreen Cleaning, LLC. All rights reserved.</p>
    </div>
  </div>
</section>

<section id="modal-window" class="">
  
  <div id="modal_yes" style="top:0px !important;background-color: rgba(0, 208, 198, 0.8);display:none;" class="modal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal_body modal-2">
          <img class="lazy" data-src="<?= $baseUrl ?>/assets/images/modal-window-2nd.png" alt="Great! Where should you send 10% off coupon?" width="440">
        </div>
        <div class="modal-footer border-0 mt-3">
          <div class="klaviyo_field_group w-100">
            <div class="klaviyo_form_actions">
              <form action="" method="post" id="subFormPopup" novalidate="novalidate">
                <input type="hidden" name="get_coupon">
                <p><input id="fieldEmailPopup" class="your-email w-100" name="your-email" type="email" placeholder="Enter Your Email Address" required></p>
                <p><input id="fieldPhonePopup" class="your-phone w-100" name="your-phone" type="text" placeholder="Enter Your Phone Number" required></p>
                <p><input id="fieldItemPopup" class="your-item w-100" name="your-item" type="text" placeholder="Enter Your Item Need To Be Cleaned" required></p>
                <button class="modal-button required border-0 w-100 bg-green text-white" type="submit" id="submit-btn-popup" name="get_coupon" aria-label="Get Coupon">Get My $10 Off Coupon</button>
              </form>
            </div>
          </div>
          <div class="klaviyo_messages">
            <div class="success_message" style="display: none;"></div>
            <div class="error_message" style="display: none;"></div>
          </div>
          <div id="nothankstext"><span class="close nothanks">No! I do not want a free $10 off coupon</span></div>
        </div>
      </div>
      <div id="modal_no" class="modal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal_body modal-3"><img class="lazy" data-src="<?= $baseUrl ?>/assets/images/modal-window-3nd.png" alt="Check your inbox for your $10 off coupon!" width="460" height="145"></div>
            <div class="modal-footer"><button class="exitblue close border-0" type="button" aria-label="Return">Return to Site</button></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<input id="needed" attr_val="<?= $id ?>" hidden>
</main>
<!--- <script src="<?= $baseUrl ?>/assets/js/jquery.slim.min.js" defer></script> --->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">

<!--Get your own code at fontawesome.com-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" defer integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js" defer></script>
<!--    <script type="module" src="assets/js/beforeafter.jquery.min.js"></script>-->
<script type="module" src="<?= $baseUrl ?>/assets/js/placeholderTypewriter.js" defer></script>
<script type="module" src="<?= $baseUrl ?>/assets/js/jquery.lazy.min.js" defer></script>
<script type="module" src="<?= $baseUrl ?>/assets/js/starter.js" defer></script>


<script>
	var noti = $("#needed").attr("attr_val");
	setTimeout( async function(){
		
		console.log(noti);
		if (noti != ""){
			await $.ajax({
				type:"get",
				url:"https://pristinegreencleaning.com/notifiable.php",
				data:{
					id:noti
				},
				success:function(){
					console.log("email sent successfully")
				}
			});
			
		}
		
	}, 500)
	$(document).ready(function() {
		
		
		
		
		
		$('#top-banner .banner-content .heading-text h1')[0]?.style.removeProperty("font-family")
		
		$('#top-banner .banner-content .heading-text h1').css("color", "#2baf38");
		$('#top-banner .banner-content .heading-text h1').css("font-family", "latoregular !important");
		
		$('h2, p').css("font-family", "latoregular !important");
		var original_height = $('.callback-desktop-only').height();
		$(document).on('click', "#btn_", function () {
			
			
			
			
			if ($(this).find('.fas').hasClass('fa-angle-down')) {
				$('.callback-desktop-only').animate({"height": "50px"}, 'fast');
				$('#call_body').hide();
				
				$(this).html("&nbsp; &nbsp;<i style='width: 4px; color: white;' class='fas fa-angle-up'></i>");
			} else {
				$('.callback-desktop-only').animate({"height": original_height}, 'fast');
				$('#call_body').show();
				$(this).html("&nbsp; &nbsp;<i style='width: 4px; color: white;' class='fas fa-angle-down'></i>");
			}
		});
	})
</script>
</body>
</html>

