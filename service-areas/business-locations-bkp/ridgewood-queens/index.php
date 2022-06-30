<?php 

include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

$site_title = "";
$site_description = "";
$site_keywords = "";
$canonical = "";
$og_site_title = "";
$og_description = "";
$og_title = "";
$og_url = "";
$og_image = "";
$ld_json = <<<LD_JSON

LD_JSON;

?><!DOCTYPE html>
<html lang="en-GB" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" style="display: block;">
<head>
	
	<?php include($_SERVER['DOCUMENT_ROOT'].'/head_tags.php'); ?>
	<style>
		#maps{
			height: 100%;
		}
      .gallery-images{
         /*overflow: hidden;*/
         padding-left: 36px;
         padding-right: 36px;
      }
      .gallery-images .news-thumb *{
         height: 100% !important;
         width: 100% !important;
      }
      .gallery-images .owl-next,
      .gallery-images .owl-prev {
         top: 50%;
         transform: translateY(-50%);
         position: absolute;
         font-size: 76px !important;
      }
      .gallery-images .owl-next{
         right: -12px !important;
      }
      .gallery-images .owl-prev {
         left: -12px !important;
      }
      
       @media (min-width: 992px){
         .gallery-images .owl-next{
            right: -18px !important;
         }
         .gallery-images .owl-prev {
            left: -18px !important;
         }
      }
      .gallery-images .news-thumb img{width:100% !important;}

      .gallery-images.owl-theme .owl-nav [class*=owl-]:hover{
         background-color: transparent !important;
         color: #869791 !important;
         font-weight: bold;
      }

      #offering-services{
         padding-top: 64px;
         padding-bottom: 64px;
         background-color: #eee;
      }
	  #main-content p, #main-content-cleaning p{
		  text-align: justify;
	  }
	  
	</style>
	
	
</head>
<body class="carpet-cleaning-template-default single single-carpet-cleaning postid-4212 single-format-standard group-blog" style="opacity: 1 !important; display: block;">

	<div id="loading"></div>
	<div id="page" class="site">
		
		<?php include($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
		
		<section id="bgimage-loc">
            <div class="header-image" style="background-image: url(/assets/images/11385-carpet-cleaner-service-NYC-NY-Queens-rug-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg)">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="heading-text services-heading">
                           <h1>Ridgewood, Queens<span class="blue"> Carpet Cleaning</span></h1>
                           <div class="feature-bullets">
                              <ul>
                                 <li>Local Queens Carpet Cleaners</li>
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
                        <button type="submit" class="btn singlecarpet-btn center">GET A QUOTE</button>
                     </form>
                  </div>
               </div>
            </div>
         </section>
         <section id="rating">
            <div class="blue-bg">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="main-content">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="heading-text">
                        <h2>Carpet Cleaning, Ridgewood, Queens</h2>
                     </div>
                     <div class="col-md-12">
                        <p>PristineGreen Upholstery and Carpet Cleaning is the best in the business. From couches to carpets, we'll make your living space look like new again.We clean a variety of items including carpets, couches, mattresses, area rugs, auto interiors, and more!</p>
                        <p>From our trusted and highly recommended Queens location, PristineGreen is the carpet cleaning company you can count on for a spotless cleaning. We onky have 5-star reviews! If you're looking for professional rug cleaning services, we're the place to go! With a wide variety of experience and knowledge of all types of textiles and fabtics, our non-toxic cleaning methods will leave your carpets looking great.</p>
                        <p>With our both our residential and commercial carpet cleaning services, you can get your home or business looking fresh. We are the perfect Brooklyn and Queens carpet cleaning company for you, servicing areas like Ridgewood, Glendale, Cypress Hills, Bushwick, and Bed-Stuy! In these areas, we often clean large sofas that seat at least 4 people, fluffy areas rugs, and mattresses. We also often do cat and dog urine removal services in these areas.</p>
                        <p>Our three cleaning packages are the perfect solution for your home. We offer a deep clean, with upgrade to disinfection, even with essential oils if you choose, to keep your home fresh and clean. We are one of the top upholstery and rug cleaning compnanies in the area that offer a professional layer of disinfection. Don't settle for anything less than perfection. Those who are want the deepest clean often opt for the add-on layer of disinfection which helps eliminate dust mites which can worsen allergies. Often people also choose this package just to have peace of mind that their textiles are thoroughly cleaned, even on a germ level.</p>
                        <p>We take pride in our cleaning process, which is why we can tackle a variety of upholstery and carpet stains and issues. From the most delicate fabrics to the toughest stains, we know the correct process. We also ensure that the homeowner is totally satisfied, asking them to approve our cleaning once we are finished if there are any spots or areas to be reprocessed. Customer satisfaction is our top priority.</p>
                        <p>Give us a call and we'll give you a free instant quote for your rugs and upholstery in the Queens area. We're an honest company that is ready to serve you!</p>
                              <br>
                       <h6>We also have other business locations serving the rest of NYC at these locations</h6>
                        <a href="/service-areas/business-locations/astoria-queens/">Astoria, Queens</a><br> 
                        <a href="/service-areas/business-locations/gramercy-manhattan/">Gramercy, Manhattan</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="offering-services">
			<div class="container">
			   <div class="row">
				  <div class="col-md-12">
					 <div class="heading-text">
						<h4>We offer a variety of rug and furniture cleaning services...</h4>
					 </div>
					 <div class="list-detail center-content">
						<div class="col-md-4 col-sm-4 col-xs-12">
						   <ul class="offer-1">
							  <li>
								 <img src="/assets/icons/icon-1.png" alt="" width="54" height="54">
								 <h6><a href="/services/carpet-cleaning/">Carpet Cleaning</a></h6>
							  </li>
							  <li>
								 <img src="/assets/icons/icon-3a.png" alt="" width="54" height="54">
								 <h6><a href="/services/upholstery-cleaning/">Upholstery Cleaning</a></h6>
							  </li>
							  <li>
								 <img src="/assets/icons/icon-2a.png" alt="" width="54" height="54">
								 <h6><a href="/services/rug-cleaning/">Rug Cleaning</a></h6>
							  </li>
							   <li>
								 <img src="/assets/icons/upholstery-cleaning-mattress-cleaning-NYC-icon.png" alt="" width="54" height="54">
								 <h6><a href="/services/mattress-cleaning/">Mattress Cleaning</a></h6>
							  </li>
							   <li>
								 <img src="/assets/icons/oriental-rug-cleaning-NYC-icon.png" alt="" width="54" height="54">
								 <h6><a href="/services/oriental-rug-cleaning/">Oriental Rug Cleaning</a></h6>
							  </li>
						   </ul>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
						   <ul class="offer-2">
							  <li>
								 <img src="/assets/icons/icon-5a.png" alt="" width="54" height="54">
								 <h6><a href="/services/green-cleaning/">Green Cleaning</a></h6>
							  </li>
							  <li>
								 <img src="/assets/icons/icon-4a.png" alt="" width="54" height="54">
								 <h6><a href="/services/commercial-cleaning/">Commercial Cleaning</a></h6>
							  </li>
							  <li>
								 <img src="/assets/icons/couch-cleaning-sofa-cleaning-NYC-icon.png" alt="" width="54" height="54">
								 <h6><a href="/services/couch-cleaning/">Couch Cleaning</a></h6>
							  </li>
							   <li>
								 <img src="/assets/icons/auto-interior-cleaning-icon.png" alt="" width="54" height="54">
								 <h6><a href="/services/auto-interior-cleaning/">Auto Interior Cleaning</a></h6>
							  </li>
							   <li>
								 <img src="/assets/icons/carpet-cleaning-pet-stain-pet-odor-removal-service-icon.png" alt="" width="54" height="54">
								 <h6><a href="/services/pet-stains-odors-cleaning/">Pet Stain and Odor Removal</a></h6>
							  </li>
						   </ul>
						</div>
					 </div>
					 <div class="col-md-4 col-sm-4 text-center">
						<div class="right-image"><img src="/assets/images/Green-Carpet-Cleaning-Van-NYC.jpg" alt="" width="420" height="221"></div>
						<a href="tel:3478716530" class="btn callnow-btn center offer-call">Call Now</a>
					 </div>
				  </div>
			   </div>
			</div>
		 </section>
         <section id="bluebg">
            <div class="container">
               <div class="row">
               <h3>Call Our Carpet Cleaning and Upholstery Cleaning Experts in Queens at <br><a style="color: white" href="tel:347-871-6530">(347) 871-6530</a></h3>
                </div>
            </div>
         </section>
         <section id="loc-gallery">
			 <div class="container">
				<div class="heading-text">
					  <h2>View our recent upholstery and carpet cleaning work in Ridgewood</h2>
				</div>
				<!--<div class="gallery-images row owl-carousel owl-theme">-->
				<div class="gallery-images owl-carousel owl-theme">

					<div class="item gallery-item">
						<div>
						   <div class="news-thumb">
							  <a href="#"><img src="/assets/images/gallery/carpet%20cleaner%20nyc%20Queens%20NY%2011385%20green%20upholstery%20cleaning%20NYC%20PristineGreen%20Upholstery%20and%20Carpet%20Cleaning.jpg" alt=""></a>
							  <div class="hover-contents">
								 <div class="text">
								 </div>
							  </div>
						   </div>
						</div>
					 </div>
					 <div class="item gallery-item">
						<div>
						   <div class="news-thumb">
							  <a href="#"><img src="/assets/images/gallery/carpet%20cleaner%20for%20urine%20smell%20Queens%20best%20carpet%20cleaner%20for%20pet%20urine%20PristineGreen%20Upholstery%20and%20Carpet%20Cleaning%20NY%2011385.jpg" alt=""></a>
							  <div class="hover-contents">
								 <div class="text">
								 </div>
							  </div>
						   </div>
						</div>
					 </div>
					 <div class="item gallery-item">
						<div>
						   <div class="news-thumb">
							  <a href="#"><img src="/assets/images/gallery/11385%20carpet%20cleaner%20brooklyn%20NY%20Queens%20rug%20cleaner%20brooklyn%20PristineGreen%20Upholstery%20and%20Carpet%20Cleaning.jpg" alt=""></a>
							  <div class="hover-contents">
								 <div class="text">
								 </div>
							  </div>
						   </div>
						</div>
					 </div>
					 <div class="item gallery-item">
						<div>
						   <div class="news-thumb">
							  <a href="#"><img src="/assets/images/gallery/carpet%20cleaning%20NYC%20Queens%20NY%2011385%20carpet%20cleaner%20service%20PristineGreen%20Upholstery%20and%20Carpet%20Cleaning.jpg" alt=""></a>
							  <div class="hover-contents">
								 <div class="text">
								 </div>
							  </div>
						   </div>
						</div>
					 </div>
					
				</div>
			 </div>
		  </section>
         <section class="" id="white-bg">
			<div class="container" id="callback-request-submit">
			   <div class="row">
				  <div class="col-md-4 col-md-offset-2 need-cc">
					 <h4>Need Your Carpets Cleaned?</h4>
					 <div class="input-fields">
						<div role="form" class="" id="" lang="en-US" dir="ltr">
						   <div class="screen-reader-response"></div>
						   <form action="/#callback-request-submit" method="post" onsubmit="this.querySelector('.ajax-loader').style.visibility='visible'">
							  <div style="display: none;"><input type="hidden" name="_wpcf7" value="2540"><input type="hidden" name="_wpcf7_version" value="4.4.1"><input type="hidden" name="_wpcf7_locale" value="en_US"><input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2540-o1"><input type="hidden" name="_wpnonce" value="8c925b5b41"></div>
							  <p><span class="wpcf7-form-control-wrap your-number"><input type="number" name="your-number" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number text-phone typingField2" id="postalcode" aria-required="true" aria-invalid="false" placeholder="Enter Your Phone Number" required></span></p>
							  
							  <?php echo isset( $mail_resp ) ? $mail_resp : '' ; ?>
							  
							  <p><input type="submit" name="request-submit" value="Request a Call Back" class="wpcf7-form-control wpcf7-submit btn-submit"><img class="ajax-loader" src="/assets/icons/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;"></p>
							  
						   </form>
						</div>
					 </div>
				  </div>
				  <div class="col-md-4">
					 <div class="mobile-image"><img src="/assets/images/mobile.png" alt=""></div>
				  </div>
			   </div>
			</div>
		 </section>
         <!--  <section id="bluebg">
            <div class="container">
            
                <div class="row">
            
                    <h3>Our Local Branch</h3>
            
                </div>
            
            </div>
            
            </section> -->
         <section id="map">

			<!--<div class="container">-->

				<div class="row">
					
					<div class="col-md-5 col-sm-12">
						<div class="address-info">
							<div class="info">
								<ul>
									 <li><h4 class="list">PristineGreen<br>Upholstery and Carpet Cleaning</h4></li>
									 <li>6705 Myrtle Ave #1015</li>
									 <li>Queens, NY 11385</li>
									 <li><a href="tel:3478716530">(347) 871-6530</a></li>
									 <li><a href="mailto:sales@pristinegreencleaning.com">sales@pristinegreencleaning.com</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="map" style="width:1520px; height:450px;">
							
								<div id="maps"></div>
								<img class="curve-bg" alt="PristineGreen Curve Background">
								<script>

									function initMap() {

										var map = new google.maps.Map(document.getElementById('maps'), {

											zoom: 15,

											center: {lat: 40.772924, lng: -73.955883},

											mapTypeControl: true,

											mapTypeControlOptions: {

												style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,

												position: google.maps.ControlPosition.TOP_CENTER

											},

											zoomControl: true,

											zoomControlOptions: {

												position: google.maps.ControlPosition.LEFT_CENTER

											},

											scaleControl: true,

											streetViewControl: true,

											streetViewControlOptions: {

												position: google.maps.ControlPosition.LEFT_TOP

											},

											fullscreenControl: true,

											scrollwheel: false

										});

										var marker = new google.maps.Marker({

											position: {lat: 40.772924, lng: -73.955883},

											map: map,

											title: 'Carpet Cleaning Ridgewood, Queens, NYC'

										});
										
									}

								</script>

								<script async defer

									src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALtcGVftxxst2dm3jOC1z_1ppAQ0J18v4&callback=initMap">

								</script>

						</div>
					</div>

					

				</div>
				
			<!--</div>-->

		</section>

         <!--<section class="reviewplugin">
            <div class="col-md-offset-2 col-md-8">
            
            <div id='snippetWidget'></div>
            
              </div>
            
         </section>-->
         <!--<section class="reviewplugin">
            <div class="container">
               <div class="heading-text">
                  <h2>Latest Reviews</h2>
               </div>
               <div id="carousel-widget">
					<iframe name="carousel-widget_frame" id="carousel-widget_frame" frameborder="0" width="100%" scrolling="no" height="256" title="Reviews Widget" src="/reviews/embed"></iframe>
				</div>
            </div>
         </section>-->
		 <section class="reviews_section light-bg">
			<div class="container">
				<h3 class="heading"><span class="col1">Latest Reviews</span></h3>
				<br>
				<div class="row">
					<div class="review col-lg-4">
						<img class="person" src="/assets/images/review_images/debra.png">
						<span class="title">Kira Boettcher <span class="time">a month ago</span></span>				
						<span class="stars"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></span>
						<span class="text">Great clean of my couch and rugs. Super friendly too!!</span>
					</div>
					<div class="review col-lg-4">
						<img class="person" src="/assets/images/review_images/karen.png">
						<span class="title">Jannine Kourbage <span class="time">3 months ago</span></span>				
						<span class="stars"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></span>
						<span class="text">Beautiful job by Joseph and the owner Stuart.  Got here super fast after my dogs got sick on my couch and now it looks amazing! and clean!!!!  Got all the stains out.  Please use them for your cleaning needs.</span>
					</div>
					<div class="review col-lg-4">
						<img class="person" src="/assets/images/review_images/richard.png">
						<span class="title">Robinson Hernandez <span class="time">8 months ago</span></span>				
						<span class="stars"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></span>
						<span class="text">Fantastic experience! Came straight to the house and cleaned a rug, this foldy thing I bought in Thailand and the sofa. Amazed how much dirt and grime came out of these things. Super friendly and affordable. And also environmentally friendly which was a plus. It's also all done at home which makes it really easy (I had assumed I needed to take the rug to him - but they come to you). Lastly super friendly.</span>
					</div>
				</div>
			</div>
		 </section>
         <section id="green-rect">
            <div class="container">
               <div class="row">
                   <div class="text-info">
					 <h5>Call us for a Free Quote</h5>
					 <h2><a style="color: white" href="tel:347-871-6530">347-871-6530</a></h2>
					 <p>Voted 5-Star Top Carpet Cleaner and Upholstery Cleaner in <span class="text-capitalize">NYC, Brooklyn &amp; Queens</span>. Our customer service hours are 9am to 9pm, 7 days a week.
					 </p>
				  </div>
                  <!-- text-info --> 
               </div>
            </div>
         </section>
         <script>
            reviewsBadgeRibbon("badge-ribbon", {
            
                store: "pristinegreencleaning",
            
                mono: "",
            
                size: "small",
            
            });
            
         </script>
         <script>
            richSnippetReviewsWidgets("carousel-widget", {
            
            	store: "pristinegreencleaning",
            
            	primaryClr: "#f47e27",
            
            	neutralClr: "#cccccc",
            
            	reviewTextClr: "#333333",
            
            	widgetName: "carousel",
            
            	layout: "fullWidth",
            
            	numReviews: 40,
            
            	contentMode: "company",
            
            	hideDates: false,
            
            	enable_rich_snippets: true,
            
            	product_name: "carpet cleaning",
            
            	keyword: "carpet cleaning",
            
            });
            
         </script>
	
	</div>
	
	<script>

      jQuery(document).ready(function(){
         
         jQuery('.gallery-images').owlCarousel({
            loop:true,
            dots: false,
            responsiveClass:true,
            nav:true,
            margin: 6,
            items:1,
            responsive:{
               0:{
                  items:1,
                  nav:true
               },
               992:{
                  items:3,
                  nav:true,
                  margin: 16,
               }
            }
         });

      });

   </script>
	
	<?php include($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>
	
	

</body>
</html>