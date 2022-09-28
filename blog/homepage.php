<?php
include($_SERVER['DOCUMENT_ROOT'].'/main_action.php');

if( !defined('ML_LITE_BLOG') ) die();

$ml_title = "Blogs | " . ml_get_site_title();
$ml_meta_url = $_SERVER['REQUEST_URI'];
$ml_meta_canonical  = isset($_SERVER['PHP_SELF'])?$_SERVER['SCRIPT_NAME'].'?'.$_SERVER['QUERY_STRING']:$_SERVER['SCRIPT_NAME'].'?'.$_SERVER['QUERY_STRING'];
//$ml_meta_image = $bimage;
//$ml_meta_description = $bmeta_description;

?>
<!doctype html>
<head>
<title><?php echo $ml_title; ?></title>
<?php if( ml_is_login() ) : ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<?php endif; ?>
<style>
	.blog-thumb img{height: 270px !important;}
  #blog-content .post .entry-content {padding-top: 0;}
  #blog-content .post .entry-content h5{margin-bottom: 0;}
  #blog-content .post .entry-content p {min-height: 120px;}
  @media (max-width: 480px){
    #blog-content .post .entry-content h5{font-size: 16px !important;padding: 0 0 15px;}
    #blog-content article.post {margin-bottom: 30px;}
    #blog-content .heading-text {padding: 30px 0 !important;}
    #blog-content .heading-text h2 {font-size: 32px!important;}
    #blog-content .entry-content p>a {font-size: 14px;width: 140px;}
  }
	

			
</style>
<?php ml_header(); ?>

<div class="container mt-4 mb-3">
	
	<section id="blog-content">
    <div class="container">
      <div class="heading-text" style="color: #4873b7;">
        <h2>Blog</h2>
      </div>

      <?php

        if( isset($_GET['p']) && !empty((int)urldecode($_GET['p'])) ){
          $p=(int)urldecode($_GET['p']);
          $p=$p<1?1:$p;
        }else{
          $p=1;
        }

        $perpage = 6;
        $offset = $perpage*($p-1);
        $link = @ml_get_db_connection();
        $blog_list_all = mysqli_query($link,"SELECT * FROM `blog` order by created_at ASC");
        $blog_list = mysqli_query($link,"SELECT * FROM blog ORDER BY created_at DESC LIMIT $offset, $perpage");
        if( $blog_list ) :

      ?>

      <div class="row align-items-center justify-content-center">

      <?php while($row = mysqli_fetch_array($blog_list)) :
        $thumb = @get_thumb_file_path_by_image_path($row['image'] );
      ?>
		  
		  
	<style>
		.text-ellipsis-2 {
			color: #CD7F32;
		}
		
		
		
	</style>
      <div class="col-md-4 col-sm-6 padding-down">
          <article  id="post-5055" class="post-5055 post type-post status-publish format-standard has-post-thumbnail hentry category-blog tag-carpet-cleaners tag-carpet-cleaners-dartford tag-carpet-cleaners-eltham tag-carpet-cleaning tag-carpet-cleaning-dartford tag-carpet-cleaning-eltham">
          <header class="entry-header">
            <div class="blog-image blog-thumb"><a href="<?php echo ml_get_abs_folder().'/'.htmlentities($row['slug']); ?>"><img width="360" height="268" src="<?php echo $thumb; ?>" class="attachment-blog size-blog wp-post-image" alt="<?php echo $row['image_thumb_alt']; ?>" title="<?php echo $row['image_thumb_title']; ?>" /></a></div>
          </header>
          <div class="entry-content">
			 
            <h5 class="txt-blue" style="color: #CD7F32;"><a class="text-ellipsis-2" href="<?php echo ml_get_abs_folder().'/'.htmlentities($row['slug']); ?>" rel="bookmark" style="color: #CD7F32;"><?php echo $row['title']; ?> </a></h5>
            <!--<div class="entry-meta">
              <span class="entry-meta-author">By: Editor</span>
              <span class="entry-meta-slash">              -
              </span><span class="entry-meta-date"><?php echo $row['created_at']; ?> </span>
            </div>-->
            <p><span class="text-ellipsis-3"><?php echo $row['summary']; ?></span><a href="<?php echo ml_get_abs_folder().'/'.htmlentities($row['slug']); ?> "  style="background-color: #2baf38;">Read More</a></p>
          </div>
          </article>
        </div>

      <?php  endwhile; ?>

      </div>

      <!--<div class='wp-pagenavi' role='navigation'><span class='pages'>Page 1 of 6</span><span aria-current='page' class='current'>1</span><a class="page larger" title="Page 2" href="page/2">2</a><a class="page larger" title="Page 3" href="page/3">3</a><a class="page larger" title="Page 4" href="page/4">4</a><a class="page larger" title="Page 5" href="page/5">5</a><span class='extend'>...</span><a class="nextpostslink" rel="next" href="page/2">&raquo;</a><a class="last" href="page/6">Last &raquo;</a></div>-->
		<style>
			.active {
				color: #CD7F32;	
			}
			.page-item.active .page-link {
				background-color: #CD7F32;
			}
			
			.page-item.active .page-link:hover {
				color: black;
				background-color: #fff;
			}
			
			/*! Generated by Font Squirrel (https://www.fontsquirrel.com) on August 10, 2022 */



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
			body, h2, h3, h4, h5 {
				font-family: latoregular !important;
				
			}
			
			p {
				font-family: latoregular !important;
			}
		</style>
		<style>
			.bg-blue.dark {
				background-color: #2baf38;
			}

			.accordion-button:focus {
				border-top-right-radius: 13px !important;
				border-top-left-radius: 13px !important;
				border-bottom-right-radius: 13px !important;
				border-bottom-left-radius: 13px !important;
				background-color:#2baf38 !important;
			}

			.accordion-button {
				border-top-right-radius: 13px !important;
				border-top-left-radius: 13px !important;
				border-bottom-right-radius: 13px !important;
				border-bottom-left-radius: 13px !important;
				background-color:#2baf38 !important;
			}
			.bg-theme-green{background-color:#2baf38 !important}
			.text-green{color:#2baf38}.text-blue{font-size:28px;line-height:36px;color:#0092d8}
			.fw-bold{color:#000}
			.fw-normal{color:#000}

			.txt-blue {color:#4873b7}
		</style>
      <div class='blog-pagination-holder text-center' role='navigation'>
        <?php echo ml_pagination( $numRows=$blog_list_all->num_rows, $currPage=$p, $perPage=$perpage, $adjucent=2 ); ?>
      </div>

      <?php else: ?>

        <h4 class="text-center" >No blogs found</h4>

      <?php endif; ?>

    </div>
		
		
	</section>
<script>

</script>
</div>
<?php ml_footer(); ?>
</body>
</html>
