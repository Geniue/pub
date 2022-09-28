<?php
include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');


$baseUrl = (( (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443 ) ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'];



//------------------------------------- Index - Data
$site_title = "Top Green Carpet Cleaner Service in NYC";
$site_description = "Trusted Carpet Cleaner in NYC, specializing in green and non-toxic carpet and upholstery cleaning. We provide a variety of services including area rug cleaning, sofa cleaning, oriental rug cleaning, and more! ";
$site_keywords = "rug cleaning ny, oriental rug cleaner, sofa cleaning nyc, area rug cleaning nyc, carpet cleaner service, ny carpet cleaning, carpet cleaner nyc, couch cleaner nyc, rug cleaner nyc, upholstery cleaning brooklyn, furniture cleaning nyc, carpet cleaner companies near me, sofa cleaning brooklyn, mattress cleaner nyc, upholstery cleaning nyc, rug clean service, couch cleaning services, rug cleaner brooklyn, couch cleaner brooklyn, mattress cleaning brooklyn, area rugs cleaning, carpet cleaner brooklyn, furniture cleaning brooklyn, rug cleaner, clean area rug near me, upholstery cleaning queens, carpet cleaning professional, the best carpet cleaning, rug cleaner queens, best upholstery cleaning, carpet cleaner queens, upholstery steam cleaning, best carpet steam cleaner, carpet cleaner, carpet cleaning commercial, carpet shampoo cleaning, carpet shampoo near me, couch cleaner, couch steam cleaning, furniture cleaning, furniture steam cleaning, mattress cleaner, rug shampoo near me, sofa cleaning, steam cleaner near me, upholstery cleaning, couch cleaner queens, furniture cleaning queens, mattress cleaner brooklyn, mattress cleaner queens, sofa cleaner queens, sofa cleaning queens";

$og_site_title = "Best Green Rug Cleaner in NYC";
$og_description = "Trusted Green Rug Cleaner in NYC, using only green and non-toxic carpet cleaning products. We provide a variety of carpet cleaning services including area rug cleaning, mattress cleaning, furniture celaning, and more!";
$og_title = "Top Green Carpet Cleaner Service in NYC | PristineGreen Upholstery and Carpet Cleaning";
$og_url = "";
$og_image = "";
$ld_json = <<<LD_JSON

LD_JSON;

$feedbacks = array(
  array(
    "name"	=>	"Debra",
    'imageUrl'	=>	'assets/images/review_images/debra.png',
    'star'=> 5,
    'description'	=>	'Stuart is very professional and did a great job for us. He did a very thorough cleaning of our 
		sectional couch and rugs. They look better than new!',
  ),
  array(
    'name'	=>	'Karen',
    'imageUrl'	=>	'assets/images/review_images/karen.png',
    'star'=> 5,
    'description'	=>	'Stuart was extremely prompt and very professional. The couch looks and smells brand new. 
		Highly recommend for all upholstery services!!',
  ),
  array(
    'name'	=>	'Steffi',
    'imageUrl'	=>	'assets/images/review_images/richard.png',
    'star'=> 5,
    'description'	=>	'I highly recommend PristineGreen cleaning. After two cleaning attempts by another service, one on-site steam 
		cleaning and then another off-site \'industrial\' dry cleaning, the sofa still had visible stains. I was met with excuses and ... 
		long stories till I decided to call for another service. Stuart was very straight forward and honest over the phone. He focused on all 
		the discolored dark spots, an issue the other service said it was impossible to remove without damaging the fabric. In an industry where 
		the fee of service reflects the quality, this was the opposite case where Stuart\'s service was the lowest fee with the highest results.',
  ),
  array(
    'name'	=>	'Taylor',
    'imageUrl'	=>	'assets/images/review_images/taylor.png',
    'star'=> 5,
    'description'	=>	'Stuart responded quickly when I reached out. Gave me all the details upfront. Service was quick and my couches look new again and smell fresh. 
		Would definitely use again for both my couches and rugs!',
  ),
  array(
    'name'	=>	'Nick',
    'imageUrl'	=>	'assets/images/review_images/nick.png',
    'star'=> 5,
    'description'	=>	'Stuart was beyond excellent! Prompt, professional, respectful, courteous and paid incredible attention to detail. 
		I will never use anyone else! If I could give more than 5 stars, I would. Highly recommend!',
  ),
  array(
    'name'	=>	'Shelby',
    'imageUrl'	=>	'assets/images/review_images/shelby.webp',
    'star'=> 5,
    'description'	=>	'A beer spilled on my velvet sofa and the grain of the velvet was entirely warped. I was able to book a cleaning in a couple days 
		and they were in and out in under an hour. The sofa looks as good as new and there’s no intense ',
  ),
  array(
    'name'	=>	'Ana Maria ',
    'imageUrl'	=>	'assets/images/review_images/debra.png',
    'star'=> 5,
    'description'	=>	'I called for an appointment late last week and received an appointment and detailed quote immediately.
		He arrived on time and took less than an hour to do my couch. Needless to say the couch came out great I highly recommend prestinegreen cleaning',
  ),
  array(
    'name'	=>	'Richard',
    'imageUrl'	=>	'assets/images/review_images/richard.png',
    'star'=> 5,
    'description'	=>	'Excellent experience with this company.  The owner was able to arrange a same-day appointment to clean our armchair, and was courteous, 
		professional and efficient throughout.  Highly recommended.',
  ),
  array(
    'name'	=>	'Eric Braunstein ',
    'imageUrl'	=>	'assets/images/review_images/karen.png',
    'star'=> 5,
    'description'	=>	'Had two carpets and an ottoman cleaned at my apartment in UES of Manhattan. Was very prompt with reply re: quote, 
		easy to schedule, and the cleaned items look great. Definitely would recommend for any carpet or upholstery cleaning needs.',
  ),
)
?>
<style>
  @media(max-width:1140px){
    iframe{
      height:350px !important;
		
    }
  }
</style>
<?php
$bodyClass = 'service-template-default single single-service postid-2538 group-blog vsc-initialized';
include ($_SERVER['DOCUMENT_ROOT'].'/header-optimize.php');
?>

<section class="banner">
  <picture>
    <source
      media="(orientation: landscape)"
      srcset="<?= $baseUrl ?>/assets/images/banner-image-responsive.webp 320w,
            <?= $baseUrl ?>/assets/images/banner-image-tab.webp 800w,
            <?= $baseUrl ?>/assets/images/banner-image-min.webp 1200w"
      sizes="(min-width: 60rem) 80vw,
           (min-width: 40rem) 90vw,
           100vw">
	  
    <source
      media="(orientation: portrait)"
      srcset="<?= $baseUrl ?>/assets/images/banner-image-160.webp 160w,
            <?= $baseUrl ?>/assets/images/banner-image-400.webp 400w,
            <?= $baseUrl ?>/assets/images/banner-image-600.webp 600w"
      sizes="(min-width: 60rem) 80vw,
           (min-width: 40rem) 90vw,
           100vw">
    <img src="<?= $baseUrl ?>/assets/images/ny-carpet-cleaning.jpg" width="1920" height="620" alt="Carpet Cleaning Services in NYC" class="banner-img img-fluid img lazy">
  </picture>
    <div class="h-100 banner-content">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-8 banner-content-info">
                    <div class="heading-text w-100">
                        <h1 class="big" style="color:#2baf38;">Premier <br>Construction<br>& Remodel Services</h1>
                        <h4>Top Renovation Contractor in NYC</h4>
                        <div class="text-md-left"><a href="tel:3478716530" class="btn center callnow-btn">Call Now</a> <a href="/contact-us#contact-form-fields" class="btn center emailnow-btn">Email Now</a></div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
</section>

<style>
	.navbar-nav > .nav-item > .nav-link:hover{
		color: #00002B;
	}
</style>

<section class="py-5 bg-gray light" id="services">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mb-3 section-header text-center" style="color:#CD7F32; ">
                    <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 mb-3 text-green text-uppercase">Welcome to Reflections<br>Construction</h2>
                    <h4 class="fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto">Your Trusted Premier Renovation and Remodel Contractor in NYC, Brooklyn, Queens, Bronx, <br/>& Long Island</h4>
                    <h4 class="lh-1-3 lh-md-auto fs-md-5 fs-3 fw-normal">Offering a Variety of Construction Services</h4>
                </div>
                <div class="row pt-4">
                    <div class="col-12 col-md-4">
                        <div class="accordion accordion-flush" id="service-accordion">
                            <div class="mb-4 accordion-item">
                                <div class="py-2 accordion-header bg-theme-green rounded-0" id="headingOne"><button aria-controls="collapseOne" aria-expanded="true" class="text-white accordion-button border-0 collapsed fw-bold p-2" data-bs-target="#collapseOne" data-bs-toggle="collapse" type="button">What services do you provide?</button></div>
                                <div
                                    class="accordion-collapse collapse" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#service-accordion">
                                    <div class="accordion-body bg-accordion">
                                        <p>We provide a variety of construction services including home remodeling, bathroom remodel, deck building, garage finishing, fence building, staircase renovation, retaining wall construction, and more! Whatever project you have, we have the professionals who can get the job done perfectly for you!</p>
                                    </div>
                            </div>
                        </div>
                        <div class="mb-4 accordion-item">
                            <div class="py-2 accordion-header bg-theme-green rounded-0" id="headingTwo"><button aria-controls="collapseTwo" aria-expanded="false" class="text-white accordion-button border-0 collapsed fw-bold p-2" data-bs-target="#collapseTwo" data-bs-toggle="collapse" type="button">Where do you service?</button></div>
                            <div
                                class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#service-accordion">
                                <div class="accordion-body bg-accordion">
                                    <p>We provide our construction, remodeling, and renovation services to the NYC boroughs and surrouding rea. These areas include Brooklyn, Queens, Manhattan, Staten Island, New Jersey, Long Island, and more</p>
                                </div>
                        </div>
                    </div>
							
                    <div class="mb-4 accordion-item">
                        <div class="py-2 accordion-header bg-theme-green rounded-0" id="headingThree"><button aria-controls="collapseThree" aria-expanded="false" class="text-white accordion-button border-0 collapsed fw-bold p-2" data-bs-target="#collapseThree" data-bs-toggle="collapse" type="button">How is your renovation different?</button></div>
                        <div
                            class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#service-accordion">
                            <div class="accordion-body bg-accordion">
                                <p>What sets us apart from other contractors is that our process is both professional and personal. We work closely with the clients to create a clear picture of what they intend for their home. Then our highly trained professionals, using cutting-edge equipment and supplies create that vision. What truely differentiates us from our competitors is our commitment to quality. Any square inch of our build that isn't perfect, we will fix immediately, at no extra charge. 100% satisfaction is our requirement!</p>
                            </div>
                    </div>
                </div>
                <div class="mb-4 accordion-item">
                    <div class="py-2 accordion-header bg-theme-green rounded-0" id="headingFour"><button aria-controls="collapseFour" aria-expanded="false" class="text-white accordion-button border-0 collapsed fw-bold p-2" data-bs-target="#collapseFour" data-bs-toggle="collapse" type="button">Why choose us?</button></div>
                    <div
                        class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#service-accordion">
                        <div class="accordion-body bg-accordion">
                            <p>When you choose Reflections Construction, you are not just choosing your standard construction company, you are choosing an elite team of skilled contractors who will transform you space into your dream's fantasy. Our commitment to excellence will ensure your vision is exactly brought to life and our dediation to your satisfaction means the work will be done quickly, and deviations from the vision corrected without charge. We want your repeat business, and the business of your friends and family so we will give you an experience that is ummatched!</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-8">
      <iframe width="100%" height="560" src="https://www.youtube.com/embed/SN3nm3wc0-g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
</div>
</div>
</div>
</section>
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
		
	</style>
<!-- <section class="py-5 bg-gray" id="reviews">
    <div class="container">
        <div class="row my-4">
            <div class="col">
                <h3 class="text-blue fs-2 fs-md-5 lh-1-3 lh-md-auto">OUR REVIEWS!</h3>
            </div>
        </div>
        <div class="row">
            <?php foreach($feedbacks as $feedback): ?>
            <div class="col-lg-4 review"><img rel="canonical" src="<?php echo $baseUrl.'/'.$feedback['imageUrl']; ?>" data-src="<?php echo $baseUrl.'/'.$feedback['imageUrl']; ?>" alt="debra" class="person lazy" width="40px" height="40px"> <span class="title"><?php echo $feedback['name']; ?><span class="time">a month ago</span></span> <span class="stars"><i class="fa"></i> <i class="fa"></i> <i class="fa"></i> <i class="fa"></i> <i class="fa"></i></span>                <span class="text"><?php echo $feedback['description']; ?></span></div>
            <?php endforeach; ?>
        </div>
		
		
		
		
    </div>
	
</section> -->
<br>

<style>
    .form-group {
        display: flex;
        width: 42%;
    
    }
    
    .form-control {
        height: 40px;
        margin: 0 5px;
    }
    
</style>

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
<header>
	<div class="callback-form-bar form-inline">
		<h4 style="margin: 7px 10px 5px 0; color:#fff;">Request Carpet and Upholstery Cleaning Now!</h4>
		<form method="post" class="header-form" style="margin: 7px 10px 5px 0;">
			<div class="form-group" style="width: 100%;">
				<input class="form-control" type="text" name="your-number" placeholder="Phone number" required="" style="margin-left: 10px;">
				&nbsp;
				<input class="form-control" type="text" name="need-service" placeholder="Item to Clean" required="" style="margin-left: 10px;">
				&nbsp;
				<button class="btn btn-success" type="submit" name="request-callback" aria-label="Request callback" style="background-color:#4873b7; margin-left: 10px;" >Request</button>
			</div>
		</form>
	</div>
</header>

<!-- <section class="py-5" id="clients">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-blue text-center">Trusted By</h3>
                <div class="customer-logos my-5 slider">
                    <div class="slide slide-in-right">
                      <img class="lazy" data-src="assets/images/Redfin-Carpet-Cleaning-Service-NYC.webp" alt="Office carpet cleaning" height="105" width="304">
                    </div>
                    <div class="slide slide-in-right">
                      <img class="lazy" data-src="assets/images/Four-Seasons.png" alt="Four Seasons" height="140" width="300">
                    </div>
                    <div class="slide slide-in-right">
                      <img class="lazy" data-src="assets/images/Aloft-upholstery-cleaning-nyc.png" alt="Upholstery Cleaning ALoft Hotels NYC" height="88" width="182">
                    </div>
                    <div class="slide slide-in-right">
                      <img class="lazy" data-src="assets/images/SF-Commerical-Carpet-Cleaning-NYC.png" alt="Office carpet cleaning" height="130" width="150">
                    </div>
                    <div class="slide slide-in-right">
                      <img class="lazy" data-src="assets/images/Hotel-Belleclaire.png" alt="Hotel Belleclaire" height="108" width="350">
                    </div>
                    <div class="slide slide-in-right">
                      <img class="lazy" data-src="assets/images/Msocial.png" alt="MSocial" height="104" width="450">
                    </div>
                    <div class="slide slide-in-right">
                      <img class="lazy" data-src="assets/images/Skin-Laundry-Carpet-Cleaning-NYC.png" alt="Commercial carpet cleaning services" height="145" width="145">
                    </div>
                    <div class="slide slide-in-right">
                      <img class="lazy" data-src="assets/images/Park-Slope-Parents-Residential-Upholstery-Cleaning-NYC.png" alt="Green and non-toxic carpet cleaning services" height="88" width="178">
                    </div>
                </div>
                </div>
            </div>
        </div>
</section> -->

<style>
	.shift {
		width: 46rem;
		height: 44rem;
		box-shadow: 0 0 4rem 0 rgba(0, 0, 0, .2); 
		border-radius: 5px;
		position: relative;
		z-index: 1;
		background: inherit;
		overflow: hidden;
	}

	.shift:before {
		content: "";
		position: absolute;
		background: inherit;
		z-index: -1;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		box-shadow: inset 0 0 2000px rgba(255, 255, 255, .9);
		filter: blur(30px);
		margin: -20px;
	}
	
	@media (max-width: 499px) {
		.shift {
			height: 850px;
			width: 393px;
			/* etc... */
		}
	}
	
	
	
	


</style>
<section class="bg-kids py-6" id="cleaning" style="background-image: url('../../assets/images/baby-carpet-cleaning (1).jpg')">
    <div class="container">
        <div class="row">
            
            <div class="col-12 col-md-8 col-xl-7">
				
                <div class="card rounded-7 shift" style="">
                    <div class="py-4 card-body px-5">
                        <h3 class="lh-1-3 lh-md-auto fs-md-5 text-blue fs-2 mb-4">Construction and Remodel Services</h3>
                        <p>The home isn't just a place where one sleeps, eats, and watches TV. The home is a reflection of your ideas, your taste, and your lifestyle. A home accoommodates you, makes you feel comfortable, and tells your guests and loved ones who visit what you care about and how you want to live life. At Reflections Construction, we understand how important a home looks to our customers. With this in mind, we work very closely with our customer to create an accurate vision of what improvement they want for their living space, and then bring it to life!</p>
						<p>At Reflections Construction, we understand that turning a vision to reality isn't easy. But our proprietry step by step process of remodeling your bathroom, home, or backyard ensures that every element of the client's vision is honored and constructed. Glitches and changes always happen along the way. This is the nature of any constrution process, but our trained team will work with clients to ensure that all changes are approved and any variation from the original plans is corrected. 100% satisfaction from our clients is our number one priority. We understand that we are not just buildling a home, but also a relationship with the client.</p>

                    </div>
                </div>
				
            </div>
        </div>
    </div>
	<style>
		@media (max-width: 499px) {
			p {
				font-size:14px !important;
			}
		}
		
		@media (max-width: 499px) {
			.bg-kids {
				height: 950px;
			}
		}
	</style>
</section>


<style>
	#offering-services a {
		color:#000;
	}
	
	#company-info {
		background-color: #2baf38;
	}
</style>
<section class="py-4" id="offering-services">
    <div class="container">
        <div class="row">
            <div class="col heading-text">
                <h3 class="lh-1-3 lh-md-auto fs-md-5 fs-3 text-blue">We offer a variety of construction and remodeling services...</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="offer-1">
                            <li><img src="<?= $baseUrl ?>/assets/images/check-mark-carpet-steam-cleaning-nyc" alt="Carpet Cleaning Services NYC" height="54" width="54" />
                                <h6><a href="/services/carpet-cleaning/">Home Remodel</a></h6>
                            </li>
                            <li><img src="<?= $baseUrl ?>/assets/images/check-mark-carpet-steam-cleaning-nyc" alt="Upholstery Cleaning NYC" height="54" width="54" />
                                <h6><a href="/services/upholstery-cleaning/">Bathroom Remodel</a></h6>
                            </li>
                            <li><img src="<?= $baseUrl ?>/assets/images/check-mark-carpet-steam-cleaning-nyc" alt="Rug Cleaner NYC" height="54" width="54" />
                                <h6><a href="/services/area-rug-cleaning/">Home Renovation</a></h6>
                            </li>
                            <li><img src="<?= $baseUrl ?>/assets/images/check-mark-carpet-steam-cleaning-nyc" alt="Mattress Cleaning NYC" height="54" width="54" />
                                <h6><a href="/services/mattress-cleaning/">Deck Builders</a></h6>
                            </li>
                            <li><img src="<?= $baseUrl ?>/assets/images/check-mark-carpet-steam-cleaning-nyc" alt="Oriental and Persian Rug Cleaning NYC" height="54" width="54" />
                                <h6><a href="/services/oriental-rug-cleaning/">Finish Basement</a></h6>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="offer-2">
                            <li><img rel="canonical" src="<?= $baseUrl ?>/assets/images/check-mark-carpet-steam-cleaning-nyc" alt="Green Carpet Cleaner NYC" height="54" width="54" />
                                <h6><a rel="canonical" href="/services/green-cleaning">Fence Building</a></h6>
                            </li>
                            <li><img rel="canonical" src="<?= $baseUrl ?>/assets/images/check-mark-carpet-steam-cleaning-nyc" alt="Professional Office and Commercial Carpet Cleaning Services" height="54" width="54" />
                                <h6><a rel="canonical" href="/services/commercial-cleaning">Garage Renovation</a></h6>
                            </li>
                            <li><img rel="canonical" src="<?= $baseUrl ?>/assets/images/check-mark-carpet-steam-cleaning-nyc" alt="Sofa Cleaning NYC" height="54" width="54" />
                                <h6><a href="/services/couch-cleaning">Retaining Wall Contractor</a></h6>
                            </li>
                            <li><img rel="canonical" src="<?= $baseUrl ?>/assets/images/check-mark-carpet-steam-cleaning-nyc" alt="Vehicle and Auto Cleaning" height="54" width="54" />
                                <h6><a rel="canonical" href="/services/auto-interior-cleaning">Staircase Renovation</a></h6>
                            </li>
                            <li><img rel="canonical" src="<?= $baseUrl ?>/assets/images/check-mark-carpet-steam-cleaning-nyc" alt="Pet Odor Removal and Pet Urine Removal Services" height="54" width="54" />
                                <h6><a rel="canonical" href="/services/pet-stains-odors-cleaning">Framing Construction</a></h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 right-image d-flex flex-column align-items-center"><img rel="canonical" src="<?= $baseUrl ?>/assets/images/Green-Carpet-Cleaning-Van-NYC.jpg" alt="Carpet Cleaning Services NYC" class="service-image" height="221" width="420" loading="lazy" > <a rel="canonical" href="tel:3478716530" class="btn center callnow-btn offer-call">Call Now</a></div>
        </div>
    </div>
</section>
<section class="bg-blue dark py-7" id="company-info">
    <div class="container">
        <div class="row">
            <div class="text-white text-center col px-7">
                <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 mb-3">Rated 5-Stars Construction Services in NYC, Brooklyn, & Queens</h2>
                <p class="mb-4">Whatever construction or renovation service you need, our trained professionals have your back in Manhattan, Queens , BK, Long Island, & the Bronx. Our professional services offer you the best in a variety of remodel and construction services.</p>
                <p>Reflections Construction takes pride in its customer satisfaction and high ratings offering a variety of remodel services. Serving our customers in all five borougns of NYC (Queens, Brooklyn, Manhattan,
                    Bronx & Staten Island) and beyond to Long Island and New Jersey, we specialise in home remodel, bathroom remodel, finishing basements, garage renovation, staircase renovation, and more!</p>
            </div>
        </div>
    </div>
</section>

	
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/partials/call-section.php');
include ($_SERVER['DOCUMENT_ROOT'].'/partials/footer-top.php');
include ($_SERVER['DOCUMENT_ROOT'].'/footer-optimize.php');
?>
