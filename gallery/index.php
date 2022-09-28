<?php
include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

$site_title = "Gallery";
$site_description = "View our gallery of carpet cleaning and upholstery cleaning images that were tkane from our jobs sites across NYC, including those in Brooklyn, Queens and Manhattan!";
$site_keywords = "";
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
 include __DIR__ . '/../blog/lite_blog.php';
//$get_gallery_list = ml_get_gallery_files_list(null,null,'v2');
$link = mysqli_connect("localhost","softipi_new-prestine-invoice" ,"51?7iy4>B","softipi_new-prestine-invoice");
$sql = "SELECT * FROM gallery";
$get_gallery_list = mysqli_query($link, $sql);
 ?>

<?php
$bodyClass = 'page-template page-template-page-gallery page-template-page-gallery-php page page-id-2239 group-blog';
include ($_SERVER['DOCUMENT_ROOT'].'/header-optimize.php');
?>
<link rel="preload" as="style" href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lightgallery.min.css" type="text/css" media="all" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lightgallery.min.css">
</noscript>

<section id="top-banner" class="position-relative short-header" style="min-height: 190px;max-height: 190px">
  <img class="img img-fluid lazy" data-src="/assets/images/carpet-cleaner-service-NYC-gallery.webp
" width="1920" height="190">
  <div class="banner-content container-fluid padding-0 position-absolute w-100 py-7">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="heading-text text-center services-heading">
            <h1>Gallery</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="main-content-cleaning" class="py-7 main-content-cleaning-service">
  <div class="container">
    <div class="row">
      <div class="col-12">
       <div class="gallery-container row" id="light_gallery">
          <?php
            if(mysqli_num_rows($get_gallery_list) > 0):
              $thumbs = '';
          ?>
              <?php
		   while($row = mysqli_fetch_array($get_gallery_list)){
                  $thumbs.= '<div data-src="'.ML_GALLERY_FOLDER.'/'.$row['image'].'"  title="'.$row['image_alt'].'" data-lightbox="gallery-set" class="col-6 col-md-4 col-lg-3 gallery-set">
                              <img class="lazy img-fluid moeed" data-src="'.ML_GALLERY_FOLDER.'/'.$row['thumb_image'].'" alt="'.$row['thumb_alt'].'" title="'.$row['thumb_title'].'"/>
                            </div>';
			}
              ?>

              <?= $thumbs ?>
          <?php else: ?> No Gallery Files!
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="module" defer>
    import lightGallery from "https://cdn.skypack.dev/lightgallery@2.0.0-beta.3";
    import lgZoom from "https://cdn.skypack.dev/lightgallery@2.0.0-beta.3/plugins/zoom";
    window.lgallery = lightGallery(document.getElementById("light_gallery"), {
        speed: 500,
        plugins: [lgZoom],
        mobileSettings:{
            controls: true,
            showCloseIcon: true,
        }
    });
    document.addEventListener('touchstart',function(e){
      const tag = e.target.tagName
      const hasCls = e.target.classList.contains('lg-img-wrap');
      if(tag === 'PICTURE' && hasCls){
        window.lgallery.closeGallery()
      }
    })
</script>
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/partials/footer-top.php');
include ($_SERVER['DOCUMENT_ROOT'].'/footer-optimize.php');
?>
