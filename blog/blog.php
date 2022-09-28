<?php
if( !defined('ML_LITE_BLOG') ) die();

include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

if( isset($_GET['page']) && !empty( cleanSlug(urldecode($_GET['page'])) ) ){

	$bslug = urldecode($_GET['page']);
	$link = @ml_get_db_connection();


	$b_title = str_replace('-', ' ', $bslug);
//	$b_Post = mysqli_query($link,"SELECT * FROM `blog` where title='".$b_title."'");
  $b_Post = mysqli_query($link,"SELECT * FROM `blog` where slug='".$bslug."'");
	$post_array = mysqli_fetch_array($b_Post);

	$blog_content = $post_array['content'];
  $file_contents_array = explode( ML_BLOG_SEPARATOR, $blog_content, 2 );
  $content = trim( html_entity_decode($blog_content) );

  $metadata = [];
  if( count($file_contents_array) == 2 ){
    $content = trim( html_entity_decode($file_contents_array[1]));
    $metadata = ml_parse_heading_string( $file_contents_array[0] );
  }

	if(!empty($post_array)) {
    /**
     * Actions for Add comments
     */
    if( isset($_POST['post_comment']) && isset($_POST['name']) && isset($_POST['website']) && isset($_POST['comment']) ){

      $error_comment_msg = '';

      $comment_name = trim(cleanString($_POST['name']));
      $comment_website = trim(cleanString($_POST['website']));
      $comment_text = trim(cleanString($_POST['comment']));

      if(empty($comment_name)){
        $error_comment_msg.= "Empty name <br>";
      }

      if(empty($comment_website)){
        $error_comment_msg.= "Empty website <br>";
      }

      if(preg_match( '/^(http|https):\\/\\/[a-z0-9_]+([\\-\\.]{1}[a-z_0-9]+)*\\.[_a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i', $comment_website)){
        $error_comment_msg.= "Invalid website <br>";
      }

      if(empty($comment_text)){
        $error_comment_msg.= "Empty comment <br>";
      }

      if( empty($error_comment_msg) ){
        $added_comment = ml_add_blog_comment( $bslug, $comment_name, $comment_website, $comment_text );
        if(!$added_comment){
          $error_comment_msg = "Something went wrong adding website.";
        }else{
          unset( $error_comment_msg );
          $success_comment_msg = ( ml_is_comments_need_approval() ? "Comment added and wait for published approval." : "Added comment successfully." );
        }
      }

    }



	}else{

		$btitle = "Error 404";
		$bmeta_description = "Page not found due to web error no. 404";
		$message = "<h2 class='text-center text-danger'>Error 404</h2><h5 class='text-center text-dark font-weight-bold'>Page not found!</h5>";

	}

}else{

	header('location:'.ml_get_abs_folder() );

}

//print_r($post_array);
$ml_title = $b_title." | " . ml_get_site_title();

?><!doctype html>
<head>
<?php if( ml_is_login() ) : ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<?php endif; ?>

<?php
$site_base_url = (( (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443 ) ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'];
$metas = array(
  'blog_title' =>  $post_array['title'],
  'meta_description' =>  $post_array['meta_description'],
  'meta_keywords' =>  $post_array['meta_keywords'],
  'meta_url' =>   $site_base_url.'/blog/'.$post_array['slug'],
  'meta_image' => $site_base_url.$post_array['image']
);
ml_header($metas); ?>
  <style>
    .lptw_recent_posts_thumbnails_widget a.lptw-header-link {
      line-height: 1.1 !important;
      font-weight: 600;
    }
    .callback-form-bar {
      display: flex;
      justify-content: space-between;
      padding: 15px;
      background: #82c12d;
      border-radius: 10px;
      flex-direction: column;
      margin-bottom: 15px;
    }

    .callback-form-bar .header-form {
      flex-basis: 50%;
    }
    .callback-form-bar .header-form .form-group {
      display: flex;
      width: 70%;
    }
    #blog-detail-content .header-form .form-control {
      height: 40px;
      margin: 0 5px;
    }
    #blog-detail-content .header-form .form-control:first-child {
      margin-left: 0;
      width: 180px;
    }
    #blog-detail-content .header-form .btn {
      height: 40px !important;
      min-height: 40px;
      padding: 10px;
      background-color: #26a9e7;
    }
    .callback-form-bar h4 {
      margin-top: 0 !important;
      line-height: 1.2;
      padding-bottom: 0 !important;
      margin-bottom: 10px;
    }
    @media (min-width: 992px) and (max-width: 1200px){
      #blog-detail-content .header-form .form-control {
        width: 180px; !important;
        min-width: 180px;
      }
    }
    @media (max-width: 991.99px){
      .callback-form-bar .header-form .form-group {
        width: 90%;
      }
      .callback-form-bar .header-form .form-group {
        width: 100%;
        display: block;
      }
      #blog-detail-content .header-form .form-control {
        width: 100% !important;
        margin: 10px 0 !important;
      }
    }

	  @font-face {
		font-family: 'latohairline_italic';
		src: url('../assets/fonts/lato/lato-thinitalic-webfont.woff2') format('woff2'),
			url('../assets/fonts/lato/lato-thinitalic-webfont.woff') format('woff');
		font-weight: normal;
		font-style: normal;

	  }




	  @font-face {
		  font-family: 'latohairline';
		  src: url('../assets/fonts/lato/lato-thin-webfont.woff2') format('woff2'),
			  url('../assets/fonts/lato/lato-thin-webfont.woff') format('woff');
		  font-weight: normal;
		  font-style: normal;

	  }




	  @font-face {
		  font-family: 'latoregular';
		  src: url('../assets/fonts/lato/lato-regular-webfont.woff2') format('woff2'),
			  url('../assets/fonts/lato/lato-regular-webfont.woff') format('woff');
		  font-weight: normal;
		  font-style: normal;

	  }




	  @font-face {
		  font-family: 'latolight_italic';
		  src: url('../assets/fonts/lato/lato-lightitalic-webfont.woff2') format('woff2'),
			  url('../assets/fonts/lato/lato-lightitalic-webfont.woff') format('woff');
		  font-weight: normal;
		  font-style: normal;

	  }




	  @font-face {
		  font-family: 'latolight';
		  src: url('../assets/fonts/lato/lato-light-webfont.woff2') format('woff2'),
			  url('../assets/fonts/lato/lato-light-webfont.woff') format('woff');
		  font-weight: normal;
		  font-style: normal;

	  }




	  @font-face {
		  font-family: 'latoitalic';
		  src: url('../assets/fonts/lato/lato-italic-webfont.woff2') format('woff2'),
			  url('../assets/fonts/lato/lato-italic-webfont.woff') format('woff');
		  font-weight: normal;
		  font-style: normal;

	  }




	  @font-face {
		  font-family: 'latobold_italic';
		  src: url('../assets/fonts/lato/lato-bolditalic-webfont.woff2') format('woff2'),
			  url('../assets/fonts/lato/lato-bolditalic-webfont.woff') format('woff');
		  font-weight: normal;
		  font-style: normal;

	  }




	  @font-face {
		  font-family: 'latobold';
		  src: url('../assets/fonts/lato/lato-bold-webfont.woff2') format('woff2'),
			  url('../assets/fonts/lato/lato-bold-webfont.woff') format('woff');
		  font-weight: normal;
		  font-style: normal;

	  }




	  @font-face {
		  font-family: 'latoblack_italic';
		  src: url('../assets/fonts/lato/lato-blackitalic-webfont.woff2') format('woff2'),
			  url('../assets/fonts/lato/lato-blackitalic-webfont.woff') format('woff');
		  font-weight: normal;
		  font-style: normal;

	  }




	  @font-face {
		  font-family: 'latoblack';
		  src: url('../assets/fonts/lato/lato-black-webfont.woff2') format('woff2'),
			  url('../assets/fonts/lato/lato-black-webfont.woff') format('woff');
		  font-weight: normal;
		  font-style: normal;

	  }

	  .fa{
		  display:inline-block;
		  font:normal normal normal 14px/1 latoitalic;
		  font-size:inherit;
		  text-rendering:auto;
		  -webkit-font-smoothing:antialiased;
		  -moz-osx-font-smoothing:grayscale
	  }
	  .fab{
		  display:inline-block;
		  font:normal normal normal 14px/1 latobold_italic;
		  font-size:inherit;
		  text-rendering:auto;
		  -webkit-font-smoothing:antialiased;
		  -moz-osx-font-smoothing:grayscale
	  }
	  .far{
		  display:inline-block;
		  font:normal normal normal 14px/1 latoblack_italic;
		  font-size:inherit;
		  text-rendering:auto;
		  -webkit-font-smoothing:antialiased;
		  -moz-osx-font-smoothing:grayscale
	  }
	  .fa-fw{
		  width:1.28571429em;
		  text-align:center
	  }
	  
	  body, h1, h2, h3, h4, h5 {
		  font-family: latoregular;
		  
	  }
	  
	  
	  h3 font {
	  	color:#4873b7 !important;
	  }
	  
	  h4 font {
	  	color:#4873b7 !important;
	  }
	  
	  h2 font {
	  	color:#4873b7 !important;
	  }
	  
	  h1 font {
	  	color:#4873b7 !important;
	  }
	  
	  .entry-content font {
	  	color:#4873b7 !important;
	  }
	  
	  p font font span {
	  	color: #000 !important;
		background: #f4f4f4 !important;
	  }
	  
	  p b span {
	  	font-size: 1.9rem !important;
	  }
	  
	 
	  .widget-title {
		  color: #4873b7;
	  }
  </style>
	
<section id="bgimage-blog-detail">
</section>
<section id="blog-detail-content">
   <div class="container pt-4 pb-4">
   <?php

	if( isset( $message ) ) :
		echo $message;
	else:

	?>
      <div class="row">
         <div class="col-md-9">

            <article id="post-5055" class="post post-<?php echo $post_array['slug']; ?> type-post status-publish format-standard has-post-thumbnail hentry category-blog tag-carpet-cleaners tag-carpet-cleaners-dartford tag-carpet-cleaners-eltham tag-carpet-cleaning tag-carpet-cleaning-dartford tag-carpet-cleaning-eltham">
               <header class="entry-header">
                  <h3 class="txt-blue"><?php echo $post_array['title']; ?></h3>
                    <div class="main-content-image">
                       <div class="blog-image blog-thumb">
                          <img rel="canonical" width="100%" src="<?php echo $post_array['image']; ?>" alt="<?php echo $post_array['image_alt']; ?>" title="<?php echo $post_array['image_title']; ?>" style="padding:0;float:none;"/>
                       </div>
                    </div>
                    
               </header>
               <div class="entry-content">
			   		      <?php echo html_entity_decode( $content, ENT_QUOTES, 'UTF-8' ) ; ?>
               </div>
            </article>
            <div class="wpdiscuz_top_clearing"></div>
          <!--start comment-->
			 <br>
			 <header>
						<div class="callback-form-bar">
                      <h4>Request Carpet and Upholstery Cleaning Now!</h4>
                      <form method="post" class="header-form">
                        <div class="form-group">
                          <input  class="form-control" type="text" name="your-number" placeholder="Phone number" required>
                          <input class="form-control" type="text" name="need-service" placeholder="Item to Clean" required>
                          <button class="btn btn-success" type="submit" name="request-callback" aria-label="Request callback">Request</button>
                        </div>
                      </form>
                      <?php if(isset($mail_resp) && !empty($mail_resp)) echo $mail_resp; ?>
                    </div>
			 </header>
         </div>

         <!-- #main -->
         <div class="col-md-3">
            <div id="sidebar">
               <div class="box">
                  <div class="container-1">
                     <aside id="secondary" class="widget-area" role="complementary">
                        <!--<section id="facebooklikebox-3" class="widget widget_FacebookLikeBox">
                           <h4 class="widget-title">Like Us on Facebook</h4>
                           <div id="fb-root"></div>
                           <script>(function(d, s, id) {
                              var js, fjs = d.getElementsByTagName(s)[0];
                               if (d.getElementById(id)) return;
                               js = d.createElement(s); js.id = id;
                               js.src = "../../../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
                               fjs.parentNode.insertBefore(js, fjs);
                              }(document, 'script', 'facebook-jssdk'));
                           </script>
                           <div class="fb-page" data-href="https://www.facebook.com/CarpetBrightUKOfficial/" data-width="250" data-height="250" data-hide-cover="true" data-show-facepile="true" data-show-posts="true">
                              <div class="fb-xfbml-parse-ignore">
                                 <blockquote cite="https://www.facebook.com/CarpetBrightUKOfficial/"><a href="https://www.facebook.com/CarpetBrightUKOfficial/">Facebook</a></blockquote>
                              </div>
                           </div>
                        </section>-->
                        <?php
                          $featured_posts = mysqli_query($link,"SELECT title,slug,image,created_at,image_alt,image_title,image_thumb_alt,image_thumb_title FROM `blog` order by created_at DESC LIMIT 5");
                          if($featured_posts->num_rows >0):
                        ?>
                            <section id="lptw-thumbnails-recent-posts-2" class="widget lptw_recent_posts_thumbnails_widget">
                               <h4 class="widget-title" style="color: #4873b7;">Featured Posts</h4>
                               <ul class="lptw-recent-posts-thumbnails-widget">
                                  <?php while($row = mysqli_fetch_array($featured_posts)){
                                    $thumb = @get_thumb_file_path_by_image_path($row['image'] );
                                    ?>
                                      <li>
                                         <div class="lptw-post-small-thumbnail">
                                            <a href="<?php echo ml_get_abs_folder() .'/'. $row['slug']; ?>" class="lptw-thumbnail-link"><img width="100" height="100" src="<?php echo $thumb; ?>" class="attachment-100x100 size-100x100 wp-post-image" alt="<?php echo $row['image_alt']; ?>"
											title="<?php echo $row['image_title']; ?>"
											/></a>
                                            <div class="lptw-post-header">
                                               <a href="<?php echo ml_get_abs_folder() .'/'. $row['slug']; ?>" class="lptw-header-link"><?php echo $row['title']; ?></a>
                                               <?php echo @date('Y-m-d', strtotime($row['created_at']) );  ?>
                                            </div>
                                         </div>
                                      </li>
                                  <?php } ?>
                               </ul>
                            </section>
                        <?php endif; ?>
                     </aside>
                     <!-- #secondary -->
                  </div>
               </div>
            </div>
         </div>
      </div>
	  <?php endif; ?>
      <!-- #primary -->
   </div>
</section>
</div>
<script>
let a = 0;
document.querySelectorAll('.text-blue').forEach(function(ele){
	console.log(a++)
	$(ele).css("color", "#CD7F34");
});
	
document.querySelectorAll('h3').forEach(function(ele){
	$(ele).css("font-size", "19px");
});
</script>
<?php ml_footer(); ?>


<style>
 p span font font {
	color: #000 !important;
	background: #f4f4f4 !important;
}
</style>
</body>
</html>
