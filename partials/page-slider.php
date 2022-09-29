<?php
$defaultImages = isset($pg_images) && !empty($pg_images) ? $pg_images : [];
$defaultServiceTitle = isset($pg_service_title) && !empty($pg_service_title) ? $pg_service_title : 'carpet cleaning';

?>
<input  id="inn" value="<?=$scc?>" hidden>
<script type="text/javascript">
  document.querySelectorAll("head title")[0].innerHTML = document.getElementById("inn").value.split(" ")[0].charAt(0).toUpperCase()+document.getElementById("inn").value.split(" ")[0].slice(1)+' '+document.getElementById("inn").value.split(" ")[1].charAt(0).toUpperCase()+document.getElementById("inn").value.split(" ")[1].slice(1);
</script>
<section id="loc-gallery" class="py-5">
  <div class="container">
    <div class="section-header text-center pb-6">
      <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 mb-3 text-green">View our recent <?=$scc?> work</h2>
    </div>
    <div class="gallery-images owl-carousel owl-theme">
      <?php foreach ($defaultImages as $img):
        $imgTitle = isset($img['title']) && !empty($img['title'])? $img['title'] : '';
      ?>
      <div class="item gallery-item">
          <div class="news-thumb">
            <img rel="canonical" class="lazy" data-src="<?= $baseUrl ?>/assets/images/gallery/<?= $img['url'] ?>" alt="<?= $img['alt'] ?>" width="<?= $img['w'] ?>" height="<?= $img['h'] ?>" title="<?= $imgTitle ?>"/>
          </div>
      </div>
      <?php endforeach; ?>
  </div>
</section>
