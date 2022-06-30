<?php
include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

$site_title = "FAQ's";
$site_description = "Learn what customers are asking us about with regard to our mobile auto detailing service in NYC!";
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
$bodyClass = 'service-template-default single single-service postid-2172 group-blog';
include ($_SERVER['DOCUMENT_ROOT'].'/header-optimize.php');
?>
<?php
  $accordions = array(
    array(
      'heading' => 'How long will it take to perform the mobile auto detailing service?',
      'text' => 'It depends on whether you are getting both interior and exterior detailing. Interior can take about 1.5 hours depending on how dirty the seats, mats, and dashboard are. Exterior usually takes about 1 hour. '
    ),
    array(
      'heading' => 'Before the technician arrives, is there anything I should do?',
      'text' => 'Please remove any luggage or belongings from the vehicle before we do an interior auto detail so we can effectively clean all corners and crevices. For external, nothing needs to be done.'
    ),
    array(
      'heading' => 'Do you clean with solvents?',
      'text' => 'Our mobile auto detailing methods use only non-toxic products and therefore we do not use solvents im our cleaning work. Solvents are made from petroleum products
                and release toxic odors." '
    ),
    array(
      'heading' => 'What do you accept for payment?',
      'text' => 'For payment we accept cash, credit, Venmo, Paypal, and Zelle. If you do choose to pay with credit there is a 3.5% surcharge and with Venmo as of (April 2021) 
      there is a 2.9% charge for business accounts. All other methods are free.'
    ),
    array(
      'heading' => 'What method do you use for interior detail cleaning?',
      'text' => 'For our mobile auto detailing service, we use a 5-step cleaning process, using only non-toxic and green carpet cleaning products. Our process includes a professional 
                 vacuum, pre-srpay, stain-remover, agitation, and a hot water extraction. We may repeat these steps on certain areas and various stains (like wine stains or pet stains) in order to remove all the discoloration, smells, and contaminants.'
    ),
    array(
      'heading' => 'Are there hidden fees?',
      'text' => 'The price given in the quote includes all fees and will not change unless the items being cleaned are larger or smaller than was initially indicated. 
                Changes rarely happen if accurate information is given initially.'
    ),
    array(
      'heading' => 'How do you stand behind your work?',
      'text' => 'We do our best to provide top-of-the-lime service to all our clients. If there is an issue with our cleaning, please contact us immediately and 
                we will make it right.'
    ),
    array(
      'heading' => 'How many hours for my carpet or seats to dry after a shampoo?',
      'text' => 'Dry time depends on the fabric. Carpets and upholstery generally dry within 3-4 hours. Leather is usable immediately!'
    ),
    array(
      'heading' => 'Do you have insurance?',
      'text' => 'Yes, we are fully insured.'
    ),
  )
?>
<section id="offering-services" class="py-6">
  <div class="container">
    <div class="row">
      <div class="col heading-text text-center">
        <h3 class="text-blue  fw-bold fs-2 fs-md-5 lh-1-3 lh-md-auto mb-3">Frequently Asked Questions</h3>
        <p class="big">These are the most frequently asked questions by customers. Call or email us if you have others!</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="accordion accordion-flush blue-accordion" id="faq-accordion">
          <?php foreach ($accordions as $index=>$accordion): ?>
            <div class="accordion-item mb-3">
              <div class="accordion-header rounded-0 bg-blue dark" id="faq_<?= $index+1 ?>">
                <button class="accordion-button collapsed text-white py-2 px-4 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse_<?= $index+1 ?>" aria-expanded="true" aria-controls="faqCollapse_<?= $index+1 ?>">
                  <?= $accordion['heading'] ?>
                </button>
              </div>
              <div id="faqCollapse_<?= $index+1 ?>" class="accordion-collapse collapse" aria-labelledby="faq_<?= $index+1 ?>" data-bs-parent="#faq-accordion">
                <div class="accordion-body">
                  <p><?= $accordion['text'] ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</section>
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/partials/footer-top.php');
include ($_SERVER['DOCUMENT_ROOT'].'/footer-optimize.php');
?>
