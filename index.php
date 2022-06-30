<?php
include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');
//------------------------------------- Index - Data
$site_title = "Top Mobile Auto Detaiing and Auto Spa in NYC | Stuey's Green Auto Clean Mobile Auto Detailing";
$site_description = "Trusted Mobile Auto Detailer, specializing in a variety of services including car seat cleaning, car deep cleaning, car full service car wash, and interior auto detailing, and more!";
$site_keywords = "car detailing near me, car detailing, hand car wash near me, auto detailing near me, detailing, auto detailing, full service car wash near me, detailing near me, mobile detailing near me, car cleaning near me, mobile car wash, mobile car detailing near me, hand car wash, car cleaning, auto spa, car interior cleaning, full service car wash, mobile car detailing, hand wash car wash, car spa, mobile car wash near me, mobile detailing, paint correction, detail shop near me, interior car detailing near me, detail car wash, car interior detailing, detail car wash near me, detail, car seat cleaning, car polishing, car detailing services, car carpet cleaning, car steam cleaning, car upholstery cleaning, car shampooing, best detailing, autospa, mobile auto detailing near me, complete car detailing near me, car wax polish, truck detailing near me, car deep cleaning near me, headlight polishing, exhaust tip polishing, clay bar treatment, engine detailing, odor removal, wheel washing";
$canonical = "";
$og_site_title = "Best Mobile Auto Detailing and Full Service Car Wash in NYC";
$og_description = "Trusted Mobile Auto Detailer, specializing in a variety of services including hand car wash, car deep cleaning, car truck detailing, and interior auto detailing, car and auto spa and more!";
$og_title = "Top Mobile Auto Detaiing and Auto Spa in NYC | Stuey's Green Auto Clean Mobile Auto Detailing";
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
    'description'	=>	'I highly recommend Stueys Green Auto Clean. After two cleaning attempts by another service, one on-site steam 
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
<?php
$bodyClass = 'service-template-default single single-service postid-2538 group-blog vsc-initialized';
include ($_SERVER['DOCUMENT_ROOT'].'/header-optimize.php');
?>
<style>
</style>
<section class="banner">
  <picture>
    <source
      media="(orientation: landscape)"
      srcset="<?= $baseUrl ?>/assets/images/Stuey's-Stuey's Green Auto Clean NY 11385 mobile auto detailing car deep cleaning Queens-320.jpg 320w,
            <?= $baseUrl ?>/assets/images/Stuey's Green Auto Clean NY 11385 mobile auto detailing car deep cleaning Queens-800.jpg 800w,
            <?= $baseUrl ?>/assets/images/Stuey's Green Auto Clean NY 11385 mobile auto detailing car deep cleaning Queens-1200.jpg 1200w"
      sizes="(min-width: 60rem) 80vw,
           (min-width: 40rem) 90vw,
           100vw">
    <source
      media="(orientation: portrait)"
      srcset="<?= $baseUrl ?>/assets/images/Stuey's-Stuey's Green Auto Clean NY 11385 mobile auto detailing car deep cleaning Queens-160.jpg 160w,
            <?= $baseUrl ?>/assets/images/Stuey's-Stuey's Green Auto Clean NY 11385 mobile auto detailing car deep cleaning Queens-400.jpg 400w,
            <?= $baseUrl ?>/assets/images/Stuey's-Stuey's Green Auto Clean NY 11385 mobile auto detailing car deep cleaning Queens-600.jpg 600w"
      sizes="(min-width: 60rem) 80vw,
           (min-width: 40rem) 90vw,
           100vw">
    <img src="<?= $baseUrl ?>/assets/images/Stuey's-Green-Auto-Clean-NY-11385-mobile-auto-detailing-car-deep-cleaning-Queens.jpg" width="1920" height="550" alt="Carpet Cleaning Services in NYC" class="banner-img img lazy">
  </picture>
    <div class="h-100 banner-content">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-8 banner-content-info">
                    <div class="heading-text w-100">
                        <h1 class="big">Premier <br>Mobile Auto Detailing<br>& Auto Spa</h1>
                        <h4>Top Full Service Car Wash in NYC</h4>
                        <div class="text-md-left"><a href="tel:3478716530" class="btn center callnow-btn">Call Now</a> <a href="/contact-us#contact-form-fields" class="btn center emailnow-btn">Email Now</a></div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
</section>
<section class="bg-blue" id="rating">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="align-items-center d-flex flex-column flex-md-row justify-content-center py-3 rating-info"><a href="https://www.google.com/maps/place/Stuey's+Green+Auto+Clean/@40.69816,-73.9027587,17z/data=!3m1!4b1!4m5!3m4!1s0x89c25c2f585001ef:0xcf4c4430d9098bb3!8m2!3d40.698156!4d-73.90057"><img src="assets/images/rating.png"alt="rating"height="48"width="320"></a>
                    <p class="text-white big fs-5 fw-normal mb-0 mt-3 mt-md-0 mx-3">Based on <span class="timer">70</span>+ customer reviews</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!---Featured In Section
<section id="featured">
  <div class="container">
    <div class="row">
      <h3 class="featured-title">Featured In</h3>
    </div>
  </div>
  <div class="container">
    <div class="row top-margin">
      <a href="https://www.nytimes.com/wirecutter/guides/how-to-clean-a-sofa/" target="_blank">
        <img class="lazy" data-src="assets/images/nytimes-black.png" alt="Featured in The new your times" height="81" width="400">
      </a>
    </div>
  </div>
</section>
--->
<section class="py-5 bg-gray light" id="services">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mb-3 section-header text-center">
                    <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 mb-3 text-green text-uppercase">Welcome to Stuey's<br>Green Auto Clean</h2>
                    <h4 class="fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto">Your Trusted Premier Mobile Auto Detailer in NYC, Brooklyn, Queens, Bronx, <br/>& Long Island</h4>
                    <h4 class="lh-1-3 lh-md-auto fs-md-5 fs-3 fw-normal">Offering Interior & Exterior Mobile Auto Detailng Services</h4>
                </div>
                <div class="row pt-4">
                    <div class="col-12 col-md-4">
                        <div class="accordion accordion-flush" id="service-accordion">
                            <div class="mb-4 accordion-item">
                                <div class="py-2 accordion-header bg-theme-green rounded-0" id="headingOne"><button aria-controls="collapseOne" aria-expanded="true" class="text-white accordion-button border-0 collapsed fw-bold p-2" data-bs-target="#collapseOne" data-bs-toggle="collapse" type="button">What services do you provide?</button></div>
                                <div
                                    class="accordion-collapse collapse" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#service-accordion">
                                    <div class="accordion-body bg-accordion">
                                        <p>We provide a variety of mobile auto detailing services in NYC including car and auto spa, truck detailing, car deep cleaning, paint correction, car seat cleaning, car polish and wax, full service car wash, hand car wash, and exterior & interior auto detailing</p>
                                    </div>
                            </div>
                        </div>
                        <div class="mb-4 accordion-item">
                            <div class="py-2 accordion-header bg-theme-green rounded-0" id="headingTwo"><button aria-controls="collapseTwo" aria-expanded="false" class="text-white accordion-button border-0 collapsed fw-bold p-2" data-bs-target="#collapseTwo" data-bs-toggle="collapse" type="button">Where do you service?</button></div>
                            <div
                                class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#service-accordion">
                                <div class="accordion-body bg-accordion">
                                    <p>We provide our mobile auto detailing and auto spa services to the NYC boroughs and surrouding rea. These areas include Brooklyn, Queens, Manhattan, Staten Island, New Jersey, Long Island, and more</p>
                                </div>
                        </div>
                    </div>
                    <div class="mb-4 accordion-item">
                        <div class="py-2 accordion-header bg-theme-green rounded-0" id="headingThree"><button aria-controls="collapseThree" aria-expanded="false" class="text-white accordion-button border-0 collapsed fw-bold p-2" data-bs-target="#collapseThree" data-bs-toggle="collapse" type="button">How is your detailing different?</button></div>
                        <div
                            class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#service-accordion">
                            <div class="accordion-body bg-accordion">
                                <p>What sets us apart from other NYC mobile auto detailers is that we take great care on all steps of interior and exterior mobile auto detailing. For interior, we use a professional upholstery cleaning machine to deep shampoo the fabrics, bringing up any embedded dirt and stains. For exterior, we don't cut corners when we hand car wash with car polish and wax. We also never forget to compuound the paint before buffing to ensure that we don't create any extra swirls and scratches.</p>
                            </div>
                    </div>
                </div>
                <div class="mb-4 accordion-item">
                    <div class="py-2 accordion-header bg-theme-green rounded-0" id="headingFour"><button aria-controls="collapseFour" aria-expanded="false" class="text-white accordion-button border-0 collapsed fw-bold p-2" data-bs-target="#collapseFour" data-bs-toggle="collapse" type="button">Why choose us?</button></div>
                    <div
                        class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#service-accordion">
                        <div class="accordion-body bg-accordion">
                            <p>If you are looking for a trusted and recommended NYC mobile auto detailer not only provides incredible service but also uses top=of-the-line equipment and methods to treat your prized auto possession, then you are looking at the right auto detailer! We don't skimp and cut corners, we do a complete job! You can feel proud to be in your car after we detail your car!</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-8">
        <div class="slider-content">
			<div class="beforeAfterContainer">
                <div class="img background-img"></div>
            </div>
            
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!---Reviews Section
<section class="py-5 bg-gray" id="reviews">
    <div class="container">
        <div class="row my-4">
            <div class="col">
                <h3 class="text-blue fs-2 fs-md-5 lh-1-3 lh-md-auto">WE'RE HAPPY TO LET OUR CUSTOMERS DO THE TALKING</h3>
            </div>
        </div>
        <div class="row">
            <?php foreach($feedbacks as $feedback): ?>
            <div class="col-lg-4 review"><img data-src="<?php echo $feedback['imageUrl']; ?>" alt="debra" class="person lazy" width="40px" height="40px"> <span class="title"><?php echo $feedback['name']; ?><span class="time">a month ago</span></span> <span class="stars"><i class="fa"></i> <i class="fa"></i> <i class="fa"></i> <i class="fa"></i> <i class="fa"></i></span>                <span class="text"><?php echo $feedback['description']; ?></span></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
--->
<!---Clients Section
<section class="py-5" id="clients">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-blue text-center">Trusted by</h3>
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
</section>
--->
<style>
	.bg-kids{
		background-image: url("../../assets/images/Stuey's-Green-Auto-Clean-NY-11385-mobile-auot-detailing-detail-car-wash-near-me-Queens.jpg");
	}
</style>
<section class="bg-kids py-6" id="cleaning">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-xl-5"></div>
            <div class="col-12 col-md-8 col-xl-7">
                <div class="border-green card rounded-7">
                    <div class="py-4 card-body px-5">
                        <h3 class="lh-1-3 lh-md-auto fs-md-5 text-blue fs-2 mb-4">Mobile Auto Detail Services</h3>
                        <p>The car isn't just a tool to move you from point A to B. It is a reflection of the driver's style and way of being. A dirty car on the interior and exterior does not speak well for the person who drives it. But a clean interior with conditioned leather or spotless fabric seats with a shiny, polished, and waxed exterior indicates a level of class. At Stuey's we offer a variety of services that suite your mobile auto detailng needs from mobile auto detailing to paint correction to interior auto detailing. We don't cut cut corners at Stuey's. For those cars which need deep care, we can transform the interior and exterior to a new beautiful reality that is miles above your local hand car wash. For those who maintain their vehicles regulary. we can bring your car to the next level with compounding, polishing, and waxing that will preserve your car's paint for years to come! </p>
                        <p>What sets us apart from competitors is that we use follow professional standards for both and interior and exterior detail. For interior, we use professional upholstery cleaning machines coupled with industrial non-toxic products, certified by the US EPA as part of their "Safer Choice" program, to deep clean and stains and dirt out of your carpet, seats, and headliner. For exterior we follow professional processess to compound, polish, and wax your auto's paint to bring out its true shine and protect it for years to come. With us, yo uwill get the best and can rest easily knowing that no corners were cut and your prized possession has a new restored life. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-4" id="offering-services">
    <div class="container">
        <div class="row">
            <div class="col heading-text">
                <h3 class="lh-1-3 lh-md-auto fs-md-5 fs-3 text-blue">We offer a variety of rug and furniture cleaning services...</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="offer-1">
                            <li><img src="./assets/icons/icon-1.png" alt="Mobile Auto Detailing NYC" height="54" width="54" loading="lazy">
                                <h6><a href="/services/mobile-auto-detailing/">Mobile Auto Detailing</a></h6>
                            </li>
                            <li><img src="./assets/icons/icon-3a.png" alt="Car and Auto Spa NYC" height="54" width="54" loading="lazy">
                                <h6><a href="/services/car-auto-spa/">Car and Auto Spa</a></h6>
                            </li>
                            <li><img src="./assets/icons/icon-2a.png" alt="Car Deep Cleaning NYC" height="54" width="54" loading="lazy">
                                <h6><a href="/services/car-deep-cleaning/">Car Deep Cleaning</a></h6>
                            </li>
                            <li><img src="./assets/icons/upholstery-cleaning-mattress-cleaning-NYC-icon.png" alt="Car Seat Cleaning NYC" height="54" width="54" loading="lazy">
                                <h6><a href="/services/car-seat-cleaning-shampoo/">Car Seat Cleaning & Shampoo</a></h6>
                            </li>
                            <li><img src="./assets/icons/oriental-rug-cleaning-NYC-icon.png" alt="Full Service Car Wash NYC" height="54" width="54" loading="lazy">
                                <h6><a href="/services/full-service-car-wash/">Full Service Car Wash</a></h6>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="offer-2">
                            <li><img src="./assets/icons/icon-5a.png" alt="Interior Auto Detailing NYC" height="54" width="54" loading="lazy">
                                <h6><a href="/services/interior-auto-detailing/">Interior Auto Detailing</a></h6>
                            </li>
                            <li><img src="./assets/icons/icon-4a.png" alt="Paint Correction NYC" height="54" width="54" loading="lazy">
                                <h6><a href="/services/paint-correction/">Paint Correction</a></h6>
                            </li>
                            <li><img src="./assets/icons/couch-cleaning-sofa-cleaning-NYC-icon.png" alt="Hand Car Wash NYC" height="54" width="54" loading="lazy">
                                <h6><a href="/services/hand-car-wash/">Hand Car Wash</a></h6>
                            </li>
                            <li><img src="./assets/icons/auto-interior-cleaning-icon.png" alt="Car Polish and Wax NYC" height="54" width="54" loading="lazy">
                                <h6><a href="/services/car-poish-wax/">Car Polish and Wax</a></h6>
                            </li>
                            <li><img src="./assets/icons/carpet-cleaning-pet-stain-pet-odor-removal-service-icon.png" alt="Truck Detailing NYC" height="54" width="54" loading="lazy">
                                <h6><a href="/services/truck-detailing/">Truck Detailing</a></h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 right-image d-flex flex-column align-items-center"><img src="/assets/images/Green-Carpet-Cleaning-Van-NYC.jpg" alt="Carpet Cleaning Services NYC" class="service-image" height="221" width="420" loading="lazy" > <a href="tel:3478716530" class="btn center callnow-btn offer-call">Call Now</a></div>
        </div>
    </div>
</section>
<section class="bg-blue dark py-7" id="company-info">
    <div class="container">
        <div class="row">
            <div class="text-white text-center col px-7">
                <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 mb-3">Rated 5-Stars Mobile Auto Detailer in NYC, Brooklyn, & Queens</h2>
                <p class="mb-4">Whatever mobile auto detailing service you need, our technicians have your back in Manhattan, Queens , BK, Long Island, & the Bronx. Our professional services offer you the best in a variety of mobile auto detailing services.
                    and carpet cleaning. Our customers have spoken with our only 5-Star reviews at all our locations across NYC!</p>
                <p>Stuey's Green Auto Clean takes pride in its customer satisfaction and high ratings offering a variety of mobile car washing and detailing services. Serving our customers in all five borougns of NYC (Queens, Brooklyn, Manhattan,
                    Bronx & Staten Island) and beyond to Long Island and New Jersey, we specialise in interior auto detailing, full service car washes, polish and wax, auto spa, paint correction and more!.</p></p>
            </div>
        </div>
    </div>
</section>

<?php
include ($_SERVER['DOCUMENT_ROOT'].'/partials/call-section.php');
include ($_SERVER['DOCUMENT_ROOT'].'/partials/footer-top.php');
include ($_SERVER['DOCUMENT_ROOT'].'/footer-optimize.php');
?>
