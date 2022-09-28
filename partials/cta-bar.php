<?php
$defaultService = isset($pg_service) && !empty($pg_service) ? $pg_service : 'Carpet and Upholstery Cleaning';
$defaultPlace = isset($pg_place) && !empty($pg_place) ? $pg_place : '';
$default_br = isset($pg_service) && !empty($pg_service) && isset($pg_place) && !empty($pg_place) ? "<br />" :'';
?>
<section class="bg-blue dark py-4" id="company-info">
  <div class="container">
    <div class="row">
      <div class="text-white text-center col px-7">
        <h3 class="lh-1-3 lh-md-auto fs-2 fs-md-3">Reach our <?= $defaultService ?> Team <?= $defaultPlace ?> at <?= $default_br ?><a style="color: white" href="tel:347-871-6530">(347) 871-6530</a></h3>
      </div>
    </div>
  </div>
</section>
