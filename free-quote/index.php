<?php
include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

$site_title = "Free Quote Now";
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
  <img class="img lazy" data-src="<?= $baseUrl ?>/assets/images/carpet-cleaner-service-free-quote.webp" width="1920" height="662">
  <div class="banner-content container-fluid padding-0 position-absolute w-100 pb-7" style="overflow: scroll">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center pt-7">
			
          <div class="heading-text services-heading text-white mb-4">
            <h2>Get a Quote!</h2>
            <p>NYC's most trusted and recommended carpet cleaming service!</p>
          </div>
			
          <form action="/free-quote/#subForm" method="post" id="subForm" class="sub-form m-auto">
            <div class="form-group">
              <input class="form-control mb-3"  id="fieldName" name="your-name" type="text" placeholder="Name"/>
            </div>
			   <div class="form-group">
              <input class="form-control mb-3"  id="fieldEmail" name="your-email" type="email" placeholder="Email" required/>
            </div>
            <div class="form-group">
              <input class="form-control mb-3"  id="fieldpdydrr" name="your-phone" type="text"  placeholder="Phone Number" maxlength="15" required/>
            </div>
            <div class="form-group">
              <input class="form-control mb-3"  id="fieldpdydry" name="your-postcode" type="text" value="" placeholder="Zipcode"/>
            </div>
            <div class="form-group">
              <button type="submit" name="get-quote" class="btn btn-default btn-submit " id="submit-btn">Free Quote Now</button>
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
