<?php
include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

$site_title = "Get A Copoun";
$site_description = "Submit your information about how you need upholstery and carpet cleaning needs in NYC and we will get back to you shortly!";
$site_keywords = "rug cleaning ny, free quote oriental rug cleaner, free quote sofa cleaning nyc, free quote area rug cleaning nyc, free quote carpet cleaner service, free quote ny carpet cleaning, free quote carpet cleaner nyc, free quote couch cleaner nyc, free quote rug cleaner nyc ,upholstery cleaning Brooklyn, free quote furniture cleaning nyc, free quote carpet cleaner companies near me";
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
$bodyClass = 'page-template page-template-page-freequote page-template-page-freequote-php page page-id-2239 group-blog';
include ($_SERVER['DOCUMENT_ROOT'].'/header-optimize.php');
?>
<style type="text/css">
   /* Resets */
   img {
     max-width: 100%;
   }

   .grii {
     padding: 0;
     list-style-type: none;
     display: flex grid;
     grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
     columns: 3;
   }

   .gri {
     width: calc((100vw / 3) - 20px);
     display: inline-block;
     word-wrap: break-word;
     margin-bottom: 9.27%;
   }

   .bordered {
     display: inline-block;


     padding: 5px;
     /* Fallback dashed border
        - the 4px width here is overwritten with the border-image-width (if set)
        - the border-image-width can be omitted below if it is the same as the 4px here
     */
     border: dashed 2px #fff !important;
     
     /* Individual border image properties */
     border-image-source: url("http://i.stack.imgur.com/wLdVc.png");
     border-image-slice: 2;
     border-image-repeat: round;  
     
     /* or use the shorthand border-image */
     border-image: url("http://i.stack.imgur.com/wLdVc.png") 2 round;
     width: 300px;
	 color: white !important;
	   
	 font-size:1.38rem !important;

   }

   .main {
     margin: auto;
     width: 80%;
     padding: 10px;
     color: white !important;
   }
	
   .main h2 {
		font-size:1.38rem !important;
    }
	
	@media screen and (max-width: 900px) {
	  .gri {
		font-size: 7px;
		height: 320px;
		width: 100px;
	  }
	  .gri p {
		font-size: 12px;
	  }
	}
</style>
<section id="top-banner" class="position-relative free-quote">
	<img class="img lazy" src="<?= $baseUrl ?>/assets/images/carpet-cleaner-service-free-quote.webp" width="1920" height="662">
	<div class="banner-content container-fluid padding-0 position-absolute w-100 pb-7" style="overflow: scroll">
    	<div class="container">
      		<div class="row">
				
      			<div class="heading-text services-heading text-white mb-4 text-center">
					<br>
		            <h2>Carpet Cleaning Coupons</h2>
		            <p>NYC's most trusted and recommended carpet cleaming service!</p>
	          	</div>
	  			<div class="main text-center">

				   <ul class="grii">
					 <li class="bordered gri">
					   <h5>FREE Carpet Deodorizing</h5>
					   <p>With Carpet Cleaning 2 rooms or 250 sq ft.</p>
					 </li>

					 <li class="bordered gri">
					   <h5>20% OFF</h5>
					   <p>Commercial Cleaning Carpet, Rug, Upholstery $180 minimum order</p>
					 </li>
					 <li class="bordered gri">
					   <h5>10% OFF</h5>
					   <p>Area & Oriental Rug Cleaning $85 minimum order</p>
					 </li>
					 <li class="bordered gri">
					  <h5>15% OFF</h5>
					  <p>Carpet Cleaning minimum of 2000 sq. ft.</p>
					 </li>
					 <li class="bordered gri">
					   <h5>10% OFF</h5>
					   <p>Upholstery Cleaning $85 minimum order</p>
					 </li>
					 <li class="bordered gri">
					   <h5>15% OFF</h5>
					   <p>Tile & Grout Cleaning $200 minimum order</p>
					 </li>
					 <li class="bordered gri">
					   <h5>FREE</h5>
					   <p>1 Room Clean With 4 Rooms Cleaning
						 $99 minimum order</p>
					 </li>
					 <li class="bordered gri">
					   <h5>15% OFF</h5>
					   <p>Mold & Mildew Treatment $200 minimum order</p>
					 </li>
					 <li class="bordered gri">
					   <h5>15% OFF</h5>
					   <p>Pet Odor Control</p>
					 </li>
				   </ul>

				</div>
      		</div>
      	</div>
      </div>
</section>
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/partials/footer-top.php');
include ($_SERVER['DOCUMENT_ROOT'].'/footer-optimize.php');
?>