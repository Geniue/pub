<?php

if( !defined('ML_LITE_BLOG') || !(isset($_GET['page']) && @strtolower($_GET['page'])=='admin')) die();

/**
 * Actions for the page
 */
//if( $_POST ) { print_r( $_GET ); }

//if( isset( $_GET["file_id"] ) && isset( $_POST["update_gallery_file"] ) && isset( $_POST["pgfileimg_title"] ) ){
	//print_r( ml_get_gallery_file( $_GET["file_id"] ) );
	//print_r( ml_update_gallery_file( $_GET["file_id"], "image_title", $_POST["pgfileimg_title"] ) );
	//print_r( ml_get_gallery_file( $_GET["file_id"] ) );
//}

//if( $_POST ) { print_r( $_POST ); exit; }
//if( $_FILES ) { print_r( $_FILES ); exit; }
//print_r( $_GET ); exit;
$message='';

/**
 * Login action
*/
if(isset($_POST['login']) && isset($_POST['username']) && isset($_POST['password'])){
	//echo "tttt" ;
//exit();

	$login = ml_login( $_POST['username'], $_POST['password'], (isset($_POST['password'])?true:false) );

	if( $login && isset($_POST['ajaxRequest'])){

		echo 'success'; die();
	}

	if( !$login && isset($_POST['ajaxRequest'])){
		echo 'fail'; die();
	}


	//refresh the page
	if( $login ) header('location:'.$_SERVER['REQUEST_URI']);
	else $message='Username or password wrong!';

}


if( ml_is_login() ):

/**
 * Add post
 */
if(isset($_POST['add_post']) && isset($_POST['title']) && isset($_POST['content'])){

	$title = $_POST['title'];
	$content = $_POST['content'];
	$slug = isset($_POST['slug']) ? @cleanSlug($_POST['slug']) : @cleanSlug($_POST['title']);

	if( ml_blog_exists( $slug ) ){
		$message = "Blog slug already exists!";
	}
	else{

    		$image = '';
    		$thumb = '';

    		if( isset($_FILES['image']) ){
          $filename = @getRandomBytes(50);
    			$uploaded = @ml_upload_file( $_FILES['image'], $filename, true, ml_get_upload_dir() );
          $create_thumb = '';
    			if( $uploaded ){
    				$image = @substr( $uploaded, strlen($_SERVER['DOCUMENT_ROOT']) );
    				$image = @str_replace( '\\', '/', $image );
    				$create_thumb = @ml_create_thumb($uploaded, 256, 256,true);
    				$thumb = @pathinfo($image, PATHINFO_DIRNAME) . ML_UPLOAD_THUMB_DIR . @pathinfo($create_thumb, PATHINFO_BASENAME);
    			}
    		}
    		$datetime = isset($_POST['datetime']) ? $_POST['datetime'] : @date('Y-m-d H:i:s');
        $meta_description = @substr( (isset($_POST['meta_description']) ? trim(@cleanString($_POST['meta_description'])) : ''), 0, 220 );
        $meta_keywords = isset($_POST['meta_keywords']) ? trim(@cleanString($_POST['meta_keywords'])) : '';
    		$summary = @substr( trim( isset($_POST['summary']) ? @cleanString($_POST['summary']) : @cleanString($meta_description) ), 0, 160 );
    		$image_alt = isset($_POST['image_alt']) ? @cleanString($_POST['image_alt']) : @cleanString($title);


    		$metadata = array(
    			'image' => $image,
    			'thumb' => $thumb,
    			'image_alt' => $image_alt,
    			'summary' => $summary,
    			'meta_description' => $meta_description,
    			'meta_keywords' => $meta_keywords,
    		);

    		$added = ml_add_blog_post( $title, $content, $datetime, $slug, $metadata );

    		if( $added ){
    			$message='Blog post added successfully.';
    			if( isset($_POST['ajaxRequest'])){
    				echo 'success'; die();
    			}
    		}else{
    			if( $uploaded ){
    				@ml_delete_file( @pathinfo($uploaded, PATHINFO_BASENAME), ml_get_upload_dir() );
    				@ml_delete_file( @pathinfo($create_thumb, PATHINFO_BASENAME), ml_get_upload_thumb_dir() );
    			}
    			$message='Something wrong on adding blog post.';

    			if( isset($_POST['ajaxRequest'])){
    				echo 'fail'; die();
    			}
    		}

    		$title=null;unset($title);
    		$slug=null;unset($slug);
    		$uploaded=null;unset($slug);
    		$thumb=null;unset($thumb);
    		$image=null;unset($image);
    		$content=null;unset($content);
    		$datetime=null;unset($datetime);
    		$meta_description=null;unset($meta_description);
    		$metadata=null;unset($metadata);
    		$added=null;unset($added);
	}

}


/**
 * Edit post
 */
if( isset($_GET['slug']) &&  !empty( cleanSlug($_GET['slug']) ) ) {

	$old_slug = @rawurldecode($_GET['slug']);

	if(isset($_GET['updated']) && !empty($_GET['updated']) && $_GET['updated'] ==='1'){
    $message = "Blog updated successfully.";
  }
	if(isset($_GET['database_failed']) && !empty($_GET['database_failed']) && $_GET['database_failed'] ==='1'){
    $message = "Something went wrong with database connection !";
  }
	// Add comment
	if(isset($_POST['add_comment']) || ( isset($_POST['action'])) && $_POST['action']=='add_comment' ){

		if( isset( $_POST['comment_name'] ) && isset( $_POST['comment_website'] ) && isset( $_POST['comment_text'] ) ){

			$added = ml_add_blog_comment( $old_slug, $_POST['comment_name'], $_POST['comment_website'], $_POST['comment_text'] );

			if( $added ){

				$message = "Comment added successfully.";

				if( isset($_POST['ajaxRequest'])){
					echo 'success'; die();
				}

			}

		}

	}


	// Edit post
	if(isset($_POST['edit_post']) ){
    $e_post = ml_get_blog_post( $old_slug );

    $title = $_POST['title'];
    $content = $_POST['content'];
    $new_slug = isset($_POST['slug']) ? @cleanSlug($_POST['slug']) : @cleanSlug($_POST['title']);

    $image = '';
    $thumb = '';

    if( isset( $_FILES['image'] ) ){
      $filename = @getRandomBytes(50);
      $uploaded = @ml_upload_file( $_FILES['image'], $filename, true, ml_get_upload_dir() );
      if( $uploaded ){
        $image = @substr( $uploaded, strlen($_SERVER['DOCUMENT_ROOT']) );
        $image = @str_replace( '\\', '/', $image );
        $create_thumb = @ml_create_thumb($uploaded, 256, 256,true);
        $thumb = @pathinfo($image, PATHINFO_DIRNAME) . ML_UPLOAD_THUMB_DIR . @pathinfo($create_thumb, PATHINFO_BASENAME);
        @ml_delete_gallery_file(ML_LITE_BLOG.$e_post['image']);
        @ml_delete_gallery_file(ML_LITE_BLOG.$e_post['thumb']);
      }
    }

    $meta_description = @substr( (isset($_POST['meta_description']) ? trim(@cleanString($_POST['meta_description'])) : ''), 0, 220 );
    $meta_keywords = isset($_POST['meta_keywords']) ? trim(@cleanString($_POST['meta_keywords'])) : '';
    $summary = @substr( trim( isset($_POST['summary']) ? @cleanString($_POST['summary']) : @cleanString($meta_description) ), 0, 160 );
    $image_alt = isset($_POST['image_alt']) ? @cleanString($_POST['image_alt']) : @cleanString($title);


    $metadata = array(
      'title' => $title,
      'image' => $image,
      'thumb' => $thumb,
      'image_alt' => $image_alt,
      'summary' => $summary,
      'meta_description' => $meta_description,
      'meta_keywords' => $meta_keywords,
    );


    if(!isset($metadata['image'])) {
      @preg_match( '/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $content, $image );
      $metadata['image']=isset($image['src'])?$image['src']:'';
    }
    if(!isset($metadata['summary'])) $metadata['summary']=@substr(cleanString(strip_tags($content)), 0, 160);
    $headings='';
    if( is_array($metadata) || is_iterable($metadata) ){
      foreach( $metadata as $name=>$value ){
        if($name === 'image' && empty($value)){
          $name = @preg_replace('/[^A-Za-z0-9_]/', '', $name);
          $value = @cleanString($e_post['image']);
        }elseif($name === 'thumb' && empty($value)){
          $name = @preg_replace('/[^A-Za-z0-9_]/', '', $name);
          $value = @cleanString($e_post['thumb']);
        }else{
          $name = @preg_replace('/[^A-Za-z0-9_]/', '', $name);
          $value = @cleanString($value);
        }
        $headings.="$name:$value\n";
      }
    }
    $content = htmlentities( $content, ENT_QUOTES, 'UTF-8' );
    $separator = "\n" . ML_BLOG_SEPARATOR . "\n";
    $whole_content = $headings . $separator . $content;


    $connection = @ml_get_db_connection();
    if (!$connection) {
      header('location:' . ml_get_abs_folder() .'/admin?current=edit&database_failed=1&slug='.urlencode ($old_slug) );
    }
    $qry = "UPDATE `blog` SET title = '".$title."', content = '".$whole_content."', slug = '".$new_slug."', summary = '".$metadata['summary']."', meta_description = '".$metadata['meta_description']."', meta_keywords = '".$metadata['meta_keywords']."', updated_at = '".date('Y-m-d H:i:s')."'";
    if(!empty($metadata['image'])){
      $qry .= ", image = '".$metadata['image']."'";
    }
    $qry .=" WHERE slug = '".$e_post['slug']."'";
    $post_updated = mysqli_query($connection,$qry);

    if( $post_updated ){
      if( isset($_POST['ajaxRequest'])){
        echo 'success'; die();
      }
      header('location:' . ml_get_abs_folder() .'/admin?current=edit&updated=1&slug='.urlencode ($new_slug) );
    }else{
      $message = "Something went wrong! Blog does't updated";
      header('location:' . ml_get_abs_folder() .'/admin?current=edit&slug='.urlencode ($old_slug) );
    }

	}

}


/**
 * Edit Comment
 */
if( isset($_GET['slug']) && !empty( cleanSlug($_GET['slug']) ) && isset($_GET['comment_id']) && !empty($_GET['comment_id'] ) ) {

	$post_slug = @rawurldecode($_GET['slug']);
	$comment_id = @rawurldecode($_GET['comment_id']);

	$get_comment = ml_get_blog_comment( $post_slug, $comment_id );

	if(isset($_POST['update_comment']) ){
		//print_r( $_POST ); //Comsddsd
		$any_edited = false;

		if( isset( $_POST['comment_name'] ) ){
			if( ml_update_blog_comment( $post_slug, $comment_id, 'username', @cleanString($_POST['comment_name']) ) ) $any_edited = true;
		}
		if( isset( $_POST['comment_website'] ) ){
			if( ml_update_blog_comment( $post_slug, $comment_id, 'website', @cleanString($_POST['comment_website']) ) ) $any_edited = true;
		}
		if( isset( $_POST['comment_text'] ) ){
			if( ml_update_blog_comment( $post_slug, $comment_id, 'content', @cleanString($_POST['comment_text'] ) ) ) $any_edited = true;
		}
		if( isset( $_POST['comment_datetime'] ) ){
			if( ml_update_blog_comment( $post_slug, $comment_id, 'datetime', @cleanString($_POST['comment_datetime']) ) ) $any_edited = true;
		}
		if( isset( $_POST['approved'] ) ){
			if( ml_update_blog_comment( $post_slug, $comment_id, 'approved', empty($_POST['approved'])?'pending':@strtolower($_POST['approved'] )) ) $any_edited = true;
		}

		if( $any_edited ){

			$message = "Comment updated successfully.";

			if( isset($_POST['ajaxRequest'])){
				echo 'success'; die();
			}

		}

	}


	if( $get_comment && isset($_POST['approve_comment']) ){

		if( ml_update_blog_comment( $post_slug, $comment_id, 'approved', 'approved' ) ) {

			$get_comment = ml_get_blog_comment( $post_slug, $comment_id );

			$message = "Comment appoved successfully.";

			if( isset($_POST['ajaxRequest'])){
				echo '<a class="mh-auto approve-comment-btn '.($get_comment['approved']=='approved'?'btn-danger':'btn-primary').' p-2" href="'.ml_get_abs_folder().'/admin?current=view&slug='.@urlencode($post_slug).'&comment_id='.@urlencode($get_comment['id']).'&action=approve">'.($get_comment['approved']=='approved'?'Refuse':'Approve').'</a>';
				die();
			}

		}

	}


	if( $get_comment && isset($_POST['refuse_comment']) ){

		if( ml_update_blog_comment( $post_slug, $comment_id, 'approved', 'refused' ) ) {

			$get_comment = ml_get_blog_comment( $post_slug, $comment_id );

			$message = "Comment refused successfully.";

			if( isset($_POST['ajaxRequest'])){
				echo '<a class="mh-auto approve-comment-btn '.($get_comment['approved']=='approved'?'btn-danger':'btn-primary').' p-2" href="'.ml_get_abs_folder().'/admin?current=view&slug='.@urlencode($post_slug).'&comment_id='.@urlencode($get_comment['id']).'&action=refuse">'.($get_comment['approved']=='approved'?'Refuse':'Approve').'</a>';
				die();
			}

		}

	}

	if( $get_comment && isset($_POST['action']) ){

		if( $_POST['action']=='delete_comment' ){

			if( ml_delete_blog_comment( $post_slug, $comment_id ) ) {

				$message = "Comment deleted successfully.";

				if( isset($_POST['ajaxRequest'])){
					echo 'success';
					die();
				}

			}

		}

	}


	if( $get_comment && isset($_GET['action']) ){

		if( $_GET['action']=='get_comment' ){

			if( isset($_GET['ajaxRequest'])){
				echo @json_encode($get_comment);
				die();
			}

		}

	}

}


/**
 * Get for the page
*/
if( isset($_GET['current']) && ( @strtolower($_GET['current'])=='dashboard' || empty(@strtolower($_GET['current'])) ) ){



}
elseif( isset($_GET['current']) && @strtolower($_GET['current'])=='view' ){

	if( isset($_GET['slug']) &&  !empty( @cleanSlug(urldecode($_GET['slug'])) ) ){

		$get_view_old_slug = @urldecode($_GET['slug']);

		if( ml_blog_exists( $get_view_old_slug ) ) {

			$get_view_post = ml_get_blog_post( $get_view_old_slug ); //print_r( $get_view_post );

			$get_view_title = htmlentities( $get_view_post['title'] );

			$get_view_content = htmlentities( $get_view_post['content'] );

			$get_view_datetime = $get_view_post['datetime'];

			$get_view_metadata = $get_view_post['metadata'];

			$get_view_image = isset($get_view_post['image']) ? htmlentities($get_view_post['image']) : '' ;

			$get_view_summary = $get_view_post['summary'];

			$get_view_meta_description = isset($get_view_metadata['meta_description']) ? htmlentities($get_view_metadata['meta_description']) : '' ;


			/**
			 * Get comments
			 */
			$cfilter = 'all';
			$corder = 'desc';
			if( isset($_GET['corder']) && @strtolower($_GET['corder'])=='asc' ) { $corder = 'asc'; }
			if( isset($_GET['cfilter']) && !empty($_GET['cfilter']) ) { $cfilter = @strtolower($_GET['cfilter']); }
			$view_comments_list = ml_get_blog_comments( $post_slug=$get_view_old_slug, $sort='datetime', $asc=$corder, $filter=$cfilter );

		}else{

			$get_view_message = "Blog slug isn't exists!";

		}

	}else{

		$get_view_message = "Invalid slug!";

	}


}elseif( isset($_GET['current']) && @strtolower($_GET['current'])=='add' ){



}
elseif( isset($_GET['current']) && @strtolower($_GET['current'])=='edit' ){


	if( isset($_GET['slug']) &&  !empty( cleanSlug(urldecode($_GET['slug'])) ) ){

		$get_edit_old_slug = @urldecode($_GET['slug']); //echo $slug;

		if( ml_blog_exists( $get_edit_old_slug ) ){

			$get_edit_post = ml_get_blog_post( $get_edit_old_slug ); //print_r( $get_edit_post );

			$get_edit_title = htmlentities( $get_edit_post['title'] );

			//$get_edit_image =  $get_edit_post['thumb'];

			$get_edit_content = htmlentities( $get_edit_post['content'] );

			$get_edit_datetime = isset($get_edit_post['datetime']) ? $get_edit_post['datetime'] : date('Y-m-d H:i:s') ;

			$get_edit_image = isset($get_edit_post['thumb']) ? $get_edit_post['thumb'] : 'image-upload.gif' ;
			$get_edit_image_alt =  $get_edit_post['image_alt'];
			$get_edit_summary = isset($get_edit_post['summary']) ? htmlentities($get_edit_post['summary']) : '' ;
			$get_edit_meta_description = isset($get_edit_post['metadata']['meta_description']) ? htmlentities($get_edit_post['metadata']['meta_description']) : '' ;
			$get_edit_meta_keywords = isset($get_edit_post['metadata']['meta_keywords']) ? htmlentities($get_edit_post['metadata']['meta_keywords']) : '' ;

		}else{

			$get_edit_message = "Blog slug isn't exists!";

		}

	}else{

		$get_edit_message = "Invalid slug!";

	}

}
elseif( isset($_GET['current']) && @strtolower($_GET['current'])=='delete' ){

	if( isset($_GET['slug']) && !empty( cleanSlug($_GET['slug']) ) ) {

		$delete_post_slug = @rawurldecode($_GET['slug']);

		$get_delete_post = ml_get_blog_post( $delete_post_slug );

		if(isset($_POST['delete_post']) && isset($_POST['delete_post_slug']) && !empty($_POST['delete_post_slug']) ){

			if( ml_blog_exists( $_POST['delete_post_slug'] ) ){

				if( ml_delete_blog_post( $_POST['delete_post_slug'] ) ){

					@ml_delete_gallery_file(ML_LITE_BLOG.$get_delete_post['image']);
					@ml_delete_gallery_file(ML_LITE_BLOG.$get_delete_post['thumb']);

					$delete_post_message = "Blog post deleted successfully.";
				}else{
					$delete_post_message = "Blog post deleted fail. Something went wrong.";
				}
			}else{
				$delete_post_message = "Blog post slug isn't exists.";
			}
		}
	}


}
elseif( isset($_GET['current']) && @strtolower($_GET['current'])=='gallery' ){
	// Add to gallery list
	if( isset($_POST['add_gallery_file']) ){

		if( isset( $_FILES['pgfile'] ) ){

			$pgfile_title = @cleanString($_POST['pgfile_title']);
			$pgfile_alt = @cleanString($_POST['pgfile_alt']);
			$pgfilethumb_title = @cleanString($_POST['pgfilethumb_title']);
			$pgfilethumb_alt = @cleanString($_POST['pgfilethumb_alt']);

			$upload_file = @ml_upload_file( $_FILES['pgfile'], null, false, ml_get_gallery_dir() );

			if( $upload_file!==false ){

				$thumb = @ml_create_thumb( $upload_file );
				$upload_file_loc = ml_get_gallery_folder()."/".@pathinfo($upload_file, PATHINFO_BASENAME );
				$thumb_file_loc = ml_get_gallery_folder()."/".@pathinfo($thumb, PATHINFO_BASENAME );
				$added = ml_add_gallery_file( $upload_file_loc, $thumb_file_loc, $pgfile_title, $pgfile_alt, $pgfilethumb_title, $pgfilethumb_alt );

				if( $added ){
					$add_gfile_message = "Successfully added file to gallery";
				}else{
					$add_gfile_message = "Something went wrong on added gallery file. Plz try again";
				}

			}else{

				$add_gfile_message = "File uploaded failed";

			}

		}

	}


	// Update a gallery file
	if( isset($_POST['update_gallery_file']) && isset($_GET['file_id']) && !empty($_GET['file_id']) ){

		$edit_file_id = @rawurldecode($_GET['file_id']);
		$get_upldate_file = ml_get_gallery_file($edit_file_id);

		$any_gfile_updated = false;

		/*
		if( isset($_POST['pgfileimg_title']) ){

			if( ml_update_gallery_file( $edit_file_id, 'image_title', $_POST['pgfileimg_title'] ) ){

				$get_upldate_file_new = ml_get_gallery_file(@rawurldecode($_GET['file_id']));

				if( $get_upldate_file['image_title'] != $get_upldate_file_new['image_title'] ){

					$image_src = $get_upldate_file['image'];
					$thumb_src = $get_upldate_file['thumb'];
					$new_name = @cleanSlug( $get_upldate_file_new['image_title'] );
					$new_image_basename = $new_name.".".pathinfo($image_src, PATHINFO_EXTENSION);
					$new_thumb_basename = $new_name."_thumb.".pathinfo($thumb_src, PATHINFO_EXTENSION);

					if( ml_rename_file( @basename($image_src), $new_image_basename,ml_get_gallery_dir()) ){
						@ml_update_gallery_file( $edit_file_id, 'image',  ml_get_gallery_folder().'/'.$new_image_basename );
					}

					if( ml_rename_file( @basename($thumb_src), $new_thumb_basename,ml_get_gallery_dir()) ){
						@ml_update_gallery_file( $edit_file_id, 'thumb',  ml_get_gallery_folder().'/'.$new_thumb_basename );
					}

				}

				$any_gfile_updated = true;

			}

		}
		*/

		if( isset($_POST['pgfileimg_title']) ){
			if( ml_update_gallery_file( $edit_file_id, 'image_title', $_POST['pgfileimg_title'] ) ){ $any_gfile_updated = true; }
		}

		if( isset($_POST['pgfileimg_alt']) ){
			if( ml_update_gallery_file( $edit_file_id, 'image_alt', $_POST['pgfileimg_alt'] ) ){ $any_gfile_updated = true; }
		}

		if( isset($_POST['pgfilethumb_title']) ){
			if( ml_update_gallery_file( $edit_file_id, 'thumb_title', $_POST['pgfilethumb_title'] ) ){ $any_gfile_updated = true; }
		}

		if( isset($_POST['pgfilethumb_alt']) ){
			if( ml_update_gallery_file( $edit_file_id, 'thumb_alt', $_POST['pgfilethumb_alt'] ) ){ $any_gfile_updated = true; }
		}

		//$get_upldate_file2 = ml_get_gallery_file($edit_file_id); print_r(  $get_upldate_file2 ); exit;

		if( $get_upldate_file && isset( $_FILES['pgfile'] ) ){

			$upload_file = @ml_upload_file( $_FILES['pgfile'], null, true, ml_get_gallery_dir() );

			if( $upload_file!==false ){

				$thumb = @ml_create_thumb( $upload_file );
				$uploaded_filebasename = @pathinfo( $upload_file, PATHINFO_BASENAME);
				$upload_file_path = ml_get_gallery_folder().'/'.$uploaded_filebasename;
				$thumb_path =  ml_get_gallery_folder().'/'.@pathinfo($thumb, PATHINFO_BASENAME);

				if( ml_update_gallery_file( $edit_file_id, 'image', $upload_file_path ) ){ $any_gfile_updated = true; }

				if( ml_update_gallery_file( $edit_file_id, 'thumb', $thumb_path ) ){ $any_gfile_updated = true; }

				$old_basename = @pathinfo($get_upldate_file['image'], PATHINFO_BASENAME);

				if( $uploaded_filebasename != $old_basename ){
					@ml_delete_file( $old_basename, ml_get_upload_dir() );
					@ml_delete_file( @pathinfo($get_upldate_file['thumb'], PATHINFO_FILENAME)."_thumb".@pathinfo($get_upldate_file['thumb'], PATHINFO_EXTENSION), ml_get_upload_dir() );
				}

			}

		}

		if( $any_gfile_updated ){

			$gfile_message = "Successfully update gallery file ";

		}else{

			$gfile_message = "No update for gallery file";

		}

	}



	if( isset($_POST['delete_gallery_file']) && isset($_GET['file_id']) && !empty($_GET['file_id']) ){

		if( ml_delete_gallery_file( @urldecode($_GET['file_id']) ) ){

			$gfile_message = "Gallery file deleted successfully ";

		}else{

			$gfile_message = "Gallery file deleted failed";

		}

	}


	if( isset($_GET['action']) ){

		if( $_GET['action']=='view' && isset($_GET['file_id']) && !empty($_GET['file_id']) ){

			$get_gallery_file = ml_get_gallery_file( @urldecode($_GET['file_id']));

			if( isset($_GET['ajaxRequest'])){
				echo @json_encode($get_gallery_file);
				die();
			}

		}

	}

	$get_gallery_list = ml_get_gallery_files_list();

}

if( isset($_GET['ajaxRequest']) || isset($_POST['ajaxRequest']) ){
	echo 'fail';
	die();
}


if( isset($_GET['export']) &&  $_GET['export']=='booking' ) {

	$booking_export_dir = __DIR__."/../book-now/export";
	$bfllistarr = @scandir($booking_export_dir);
	$bfllistarr = array_diff($bfllistarr, ['.','..']);
	if($bfllistarr){
		foreach($bfllistarr as $cfilepath ){
			@unlink( $booking_export_dir .DIRECTORY_SEPARATOR. $cfilepath );
		}
	}

	$servername = "localhost";
	$databasename = "softipi_new-prestine-invoice";
	$username = "softipi_new-prestine-invoice";
	$password = "51?7iy4>B";

	try{

		$conn = new PDO( "mysql:host=$servername;dbname=$databasename", $username, $password );

		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$stmt= $conn->prepare( "DESCRIBE `pg_subscription`" );
		$stmt->execute();
		//$fetchAll = $stmt->fetchAll();
		$columns = $stmt->fetchAll(PDO::FETCH_COLUMN);

		$sql = "SELECT * FROM `pg_subscription` WHERE `pg_created` BETWEEN NOW() - INTERVAL :last_days DAY AND NOW()";
		$stmt2= $conn->prepare($sql);
		$stmt2->bindValue( ':last_days', (isset($_GET['last_days']) && (int)$_GET['last_days']>0)?(int)$_GET['last_days']:1 );
		$stmt2->execute();
		//$rows = $stmt2->fetchAll(PDO::FETCH_ASSOC);
		$rows = $stmt2->fetchAll(PDO::FETCH_NUM );

		$export_data_colseparator = ',';
		$export_data_encloser = '"';
		$export_line_terminator = "\r\n";

		$csv_data = '';

		for( $i=0; $i<count($columns); $i++ ){
			$csv_data.=$export_data_encloser;
			$csv_data.= addslashes($columns[$i]);
			$csv_data.=$export_data_encloser;
			if(count($columns)-1 !=$i){ $csv_data.=$export_data_colseparator; }
		}

		foreach($rows as $row){
			$csv_data.=$export_line_terminator;
			for( $i=0; $i<count($row); $i++ ){
				$csv_data.=$export_data_encloser;
				$csv_data.= addslashes($row[$i]);
				$csv_data.=$export_data_encloser;
				if(count($row)-1 !=$i){ $csv_data.=$export_data_colseparator; }
			}
		}

		$export_file = "pg_subscription_".date('YmdHis'). explode('.',microtime(true))[1].".csv";
		$export_file_path = $booking_export_dir . DIRECTORY_SEPARATOR . $export_file;

		$export_file_saved = @file_put_contents( $export_file_path, $csv_data );

		if( $export_file_saved!==false ){
			header("location: /book-now/download.php?file=$export_file");
			$booking_export_msg = "Exported";
		}
		$conn = null;

	} catch( PDOException $e ) {

		$booking_export_msg = "Connection failed: " . $e->getMessage();

	} catch( Exception $e ) {

		$booking_export_msg = "Error: " . $e->getMessage();

	}

}


endif;

$ml_title = ml_get_site_title();


?><!doctype html>
<head>
	<title><?php echo $ml_title; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="../assets/js/jquery.min.js" defer type="text/javascript"></script>
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <style>
    .gallery-list {
      margin: 0px -12px;
    }
    .gallery-list a {
      display: inline-block;
      padding: 12px;
    }
  </style>
	<?php ml_header(); ?>

<div class="container mt-4 mb-3">

	<div id="all-message" class="all-message"><?php echo $message; ?></div>

<?php if( ml_is_login() ): ?>

	<div class="admin-nav mt-5">
		<ul class="list-unstyled list-inline m-0">
			<li><a title="Dashboard" href="?current=dashboard">Dashboard</a></li>
			<li><a title="Dashboard" href="?current=add">Add post</a></li>
			<li><a title="Gallery management" href="?current=gallery">Gallery</a></li>
			<li><a title="Gallery management" href="?current=booking">Booking</a></li>
		</ul>
	</div>
	<hr>
	<div class="page">
	<?php if( !isset($_GET['current']) || ( isset($_GET['current']) && ( @strtolower($_GET['current'])=='dashboard' || empty(@strtolower($_GET['current'])) ) ) ): ?>

		<h2 class="text-primary text-left mb-4">Dashboard</h2>

		<table class="list-table table table-striped w-100">
			<thead>
				<tr>
					<th>
						<label for="ad-check-all"><input type="checkbox" id="ad-check-all" value="yes"></label>
					</th>
					<th class="w-100 d-table-cell d-sm-none">
						<div class="row">
							<div class="col col-12 col-md-8 bold font-weight-bold text-center">Blog Slug</div>
							<div class="col col-12 col-md-4 bold font-weight-bold text-center">Created On</div>
						</div>
					</th>
					<th class="d-sm-table-cell text-center">
						Slug
					</td>
					<th class="d-sm-table-cell text-center">
						Comments
					</th>
					<th class="d-sm-table-cell text-center">
						Created On
					</th>
				</tr>
			</thead>
			<tbody>
			<?php

				$blog_list = ml_blog_posts_list( $sort='datetime', $asc='desc' );

				if( $blog_list ) :

				foreach( $blog_list as $bslug=> $bdatetime ) :

			?>
				<tr>
					<td>
						<input type="checkbox" id="ad-check-<?php echo htmlentities($bslug,ENT_QUOTES); ?>" class="ad-check" name="check-<?php echo htmlentities($bslug,ENT_QUOTES); ?>" value="<?php echo htmlentities($bslug,ENT_QUOTES); ?>">
					</td>
					<td class="d-table-cell d-sm-none">
						<div class="row">
							<div class="col col-12 col-md-8 text-left">
								<a title="View" href="<?php echo ml_get_abs_folder(); ?>/admin?current=view&slug=<?php echo urlencode ($bslug); ?>"><?php echo $bslug; ?></a>
								<a class="action-blog-edit text-info small ml-2" title="View" href="<?php echo ml_get_abs_folder(); ?>/<?php echo @str_replace(" ","%20",$bslug); ?>">View</a>
								<a class="action-blog-edit text-info small ml-2" title="Edit" href="<?php echo ml_get_abs_folder(); ?>/admin?current=edit&slug=<?php echo urlencode ($bslug); ?>">Edit</a>
								<a class="action-blog-delete text-danger small ml-2" title="Delete" href="<?php echo ml_get_abs_folder(); ?>/admin?current=delete&slug=<?php echo urlencode ($bslug); ?>">Delete</a>

						</div>
							<div class="col col-12 col-md-4 text-center"><?php echo $bdatetime; ?></div>
						</div>
					</td>
					<td class="d-none d-sm-table-cell text-left">
						<a title="View" href="<?php echo ml_get_abs_folder(); ?>/admin?current=view&slug=<?php echo urlencode ($bslug); ?>"><?php echo $bslug; ?></a>
						<a class="action-blog-edit text-info small ml-2" title="View" href="<?php echo ml_get_abs_folder(); ?>/<?php echo @str_replace(" ","%20",$bslug); ?>">View</a>
						<a class="action-blog-edit text-info small ml-2" title="Edit" href="<?php echo ml_get_abs_folder(); ?>/admin?current=edit&slug=<?php echo urlencode ($bslug); ?>">Edit</a>
						<a class="action-blog-delete text-danger small ml-2" title="Delete" href="<?php echo ml_get_abs_folder(); ?>/admin?current=delete&slug=<?php echo urlencode ($bslug); ?>">Delete</a>
					</td>
					<td class="d-none d-sm-table-cell text-center">
						<span class="badge badge-pill badge-dark"><?php echo count(ml_get_blog_comments($bslug,'datetime','desc','pending')); ?></span>
						<span class="badge badge-pill badge-info"><?php echo count(ml_get_blog_comments($bslug,'datetime','desc','all')); ?></span>
					</td>
					<td class="d-none d-sm-table-cell text-center">
						<?php echo $bdatetime; ?>
					</td>
				</tr>
			<?php

				endforeach;

				else:

			?>

			<tr colspan="2">
				<h3 class="error-message text-left">No blogs found!</h3>
			</tr>

			<?php

				endif;

			?>
			</tbody>
		</table>
		<script defer src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
		<script>
			contentLoaded(function() {
				$(document).ready( function () {
					$('.list-table').DataTable();
				} );
			} );
		</script>

	<?php elseif( isset($_GET['current']) && @strtolower($_GET['current'])=='view' ): ?>

		<?php if( isset($get_view_post) ): ?>

		<h2 class="text-primary text-left mb-4">View Post</h2>

		<div class="mb-5">

			<div class="mb-4 text-middle"><h4 class="">Title: <?php echo $get_view_title; ?></h4></div>

			<div class="mb-4">
				<h4 class="">Image</h4>
				<?php echo empty($get_view_image)?"No Image": "<img class='img img-thumbnail img-fluid' src='$get_view_image'>"; ?>
			</div>

			<div class="mb-4">
				<h4 class="">Summary</h4>
				<?php echo $get_view_summary; ?>
			</div>

			<div class="mb-4">
				<h4 class="">Meta Description</h4>
				<?php echo $get_view_meta_description; ?>
			</div>

			<div class="mb-4">
				<h4 class="">Content</h4>
				<div style="background-color: #fff; padding: 8px;">
					<?php echo html_entity_decode( $get_view_content ); ?>
				</div>
			</div>

			<div class="mb-4">

				<h4 class="">Metadata</h4>

				<table class="table table-bordered"><tbody>

				<?php
					if( $get_view_metadata ):

						foreach( $get_view_metadata as $name=>$value ){

							echo "<tr><td>$name</td><td>$value</td></tr>";

						}

				?>

				<?php else: ?>

					<tr><td>No meta data</td></tr>

				<?php endif; ?>
				</tbody></table>

			</div>

		</div>

		<hr>

		<div id="admin-post-comment" class="mt-5 mb-5">
			<div class="mt-3 mb-3"><h4 class="d-inline-block">Comments</h4>
				<button class="add-comment-btn">Add</button>
			</div>

			<?php if( $view_comments_list ): ?>
				<table class="list-table table table-striped user-select-none">
				<thead>
					<tr>
						<th>Username</th>
						<th>Website</th>
						<th>Content</th>
						<th>Time</th>
					</tr>
				</thead>
				<tbody class="small">
				<?php foreach( $view_comments_list as $id=>$comment ): ?>

					<tr data-id="<?php echo $comment['id']; ?>" data-link="<?php echo ml_get_abs_folder().'/admin?current=view&slug='.@urlencode($get_view_old_slug).'&comment_id='.@urlencode($comment['id']).'&action=get_comment&ajaxRequest=true'; ?>">
						<td><?php echo $comment['username']; ?></td>
						<td><?php echo $comment['website']; ?></td>
						<td><div class="text-ellipsis-3"><?php echo $comment['content']; ?></div></td>
						<td>
							<span class="text-nowrap"><?php echo $comment['datetime']; ?></span>
							<a class="mh-auto approve-comment-btn <?php echo ($comment['approved']=='approved'?'btn-danger':'btn-primary'); ?> p-2" href="<?php echo ml_get_abs_folder().'/admin?current=view&slug='.@urlencode($get_view_old_slug).'&comment_id='.@urlencode($comment['id']).'&action='.($comment['approved']=='approved'?'refuse':'approve'); ?>"><?php echo ($comment['approved']=='approved'?'Refuse':'Approve'); ?></a>

							<a class="btn-secondary delete-comment-btn p-2" href="<?php echo ml_get_abs_folder().'/admin?current=view&slug='.@urlencode($get_view_old_slug).'&comment_id='.@urlencode($comment['id']).'&action=delete_comment'; ?>">Delete</a>
						</td>
					</tr>

				<?php endforeach; ?>
				</tbody></table>



			<?php else: ?>

				<h4 class="text-left text-danger">No comments</h4>

			<?php endif; ?>

			<!-- Modal -->
			<div class="custom-modal fade" id="commentModal" role="dialog" aria-hidden="true">
					<div class="custom-modal-dialog custom-modal-xl custom-modal-dialog-centered " role="document">
						<div class="custom-modal-content">
							<div class="custom-modal-header">
								<h5 class="modal-title" id="commentModalLabel">View comment</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
							</div>
							<div class="custom-modal-body">
								<form id="modal_form_add_comment" method="post" style="display:none">
									<input type="hidden" name="add_comment">
									<div class="mb-2">
										<label for="pcomment_name">Name</label>
										<input id="pcomment_name" class="pcomment_name form-control" type="text" name="comment_name" placeholder="Name" min="2" max="32" required>
									</div>
									<div class="mb-2">
										<label for="pcomment_website">Website</label>
										<input id="pcomment_website" class="pcomment_website form-control" type="text" name="comment_website" placeholder="Website" min="4" max="48" required>
									</div>
									<div class="mb-2">
										<label for="pcomment_text">Comments</label>
										<textarea id="pcomment_text" class="pcomment_text form-control" rows="6" name="comment_text" placeholder="Comments" min="8" max="250" required></textarea>
									</div>
									<button type="submit" name="add_comment" form="modal_form_add_comment" class="btn btn-primary">Add</button>
								</form>
								<form id="modal_form_comment" method="post" style="display:none">
									<input type="hidden" name="update_comment">
									<div class="mb-2">
										<label for="pcomment_name">Name</label>
										<input id="pcomment_name" class="pcomment_name form-control" type="text" name="comment_name" placeholder="Name" min="2" max="32" required>
									</div>
									<div class="mb-2">
										<label for="pcomment_website">Website</label>
										<input id="pcomment_website" class="pcomment_website form-control" type="text" name="comment_website" placeholder="Website" min="4" max="48" required>
									</div>
									<div class="mb-2">
										<label for="pcomment_text">Comments</label>
										<textarea id="pcomment_text" class="pcomment_text form-control" rows="6" name="comment_text" placeholder="Comments" min="8" max="250" required></textarea>
									</div>
									<button type="submit" name="update_comment" form="modal_form_comment" class="btn btn-primary">Update</button>
								</form>

								<div class="modal_view_comment">
									<button class="show-edit-btn">Edit</button>
									<div class="mt-4">
										<div class="mb-4">
											<label for="pcomment_name">Name</label>
											<div class="pcomment_name"></div>
										</div>
										<div class="mb-4">
											<label for="pcomment_website">Website</label>
											<div class="pcomment_website"></div>
										</div>
										<div class="mb-4">
											<label for="pcomment_text">Comments</label>
											<div class="pcomment_text"></div>
										</div>
										<div class="mb-4">
											<label for="pcomment_text">Time</label>
											<div class="pcomment_datetime"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="custom-modal-footer" style="display:none">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" name="update_comment" form="modal_form_comment" class="btn btn-primary">Update</button>
							</div>
						</div>
					</div>
				</div>


				<script defer src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
				<script>
					contentLoaded(function() {
						$(document).ready( function () {

							function close_modal(){
								$('#commentModal').find("#modal_form_comment").hide();
								$('#commentModal').find("#modal_form_add_comment").hide();
								$('#commentModal').find(".modal_view_comment").show();
								$('#commentModal').find(".modal-title").html('View Comment');
								//$(this).parents('.custom-modal').hide();
								$('#commentModal').removeClass('show').hide();
							}

							$(document).on('click', ".add-comment-btn", function(){
								$('#commentModal').find(".modal_view_comment").hide();
								$('#commentModal').find("#modal_form_comment").hide();
								$('#commentModal').find("#modal_form_add_comment").show();
								$('#commentModal').find(".modal-title").html('Add Comment');
								$('#commentModal').addClass("show").show();
							});

							// Comment add
							function comment_add(e){

								var tgt = e.target;

								e.preventDefault();
								$.ajax({
									//url: link,
									url: window.location.href,
									type: 'post',
									data: $(tgt).serialize()+'&action=add_comment&ajaxRequest=true&random='+Math.floor(Math.random() * 9999999999),
									complete: function(xhr){
										//console.log(xhr);
										close_modal();

										if(xhr.status==200){
											if(xhr.responseText=='success'){
												alert('added.');
												var location= location||window.location;
												location.reload();
												return false;
											}else{
												alert('Not added.');
											}
										}else{
											alert('Not added. Something wrong');
										}
									}
								});

							}

							//$(document).off('submit', "#commentModal #modal_form_comment", comment_update);
							//$(document).off('submit', "#commentModal #modal_form_comment", comment_update);
							$(document).on('submit', "#commentModal #modal_form_add_comment", comment_add);


							var datatable = $('.list-table');
							var table = datatable.DataTable({
								'initComplete': function(){

									$(document).on('click','.list-table tbody tr td .delete-comment-btn', function(e){
										e.preventDefault();
										e.stopImmediatePropagation();
										e.stopPropagation();
										var confirmDelete = confirm("Want to delete?");
										if (confirmDelete == true) {
											var tgt = e.target;
											var tgthtml = tgt.innerHTML;
											var link = $(tgt).attr('href');
											try{
												var dataPost = new URL(link);
												dataPost=dataPost.search;
											} catch (error) { var dataPost = ''; }
											dataPost=dataPost+'&action=delete_comment&ajaxRequest=true&random='+Math.floor(Math.random() * 9999999999);
											tgt.innerHTML='Loading...';
											$(tgt).prop('disabled',true);
											$.ajax({
												url: link,
												type: 'post',
												data: dataPost,
												complete: function(xhr){
													if(xhr.status==200&&xhr.responseText=='success'){
														table.row( $(tgt).parents('tr') ).remove().draw();
													}else{
														tgt.innerHTML=tgthtml;
														$(tgt).prop('disabled',false);
														alert('Not deleted'); //console.log(link);console.log(xhr);
													}
												}
											});
										}
									});

									$(document).on('click','.list-table tbody tr td .approve-comment-btn', function(e){
										e.preventDefault();
										e.stopImmediatePropagation();
										e.stopPropagation();
										var tgt = e.target;
										var tgthtml = tgt.outerHTML;
										var link = $(tgt).attr('href');
										try{
											var dataPost = new URL(link);
											dataPost=dataPost.search;
										} catch (error) { var dataPost = ''; }
										dataPost=dataPost+'&ajaxRequest=true&random='+Math.floor(Math.random() * 9999999999);
										if( $(tgt).hasClass('btn-danger') ){
											dataPost=dataPost+'&refuse_comment=true';
										}else{
											dataPost=dataPost+'&approve_comment=true';
										}

										tgt.innerHTML='Loading...';
										$(tgt).prop('disabled',true);

										$.ajax({
											url: link,
											type: 'post',
											data: dataPost,
											complete: function(xhr){
												if(xhr.status==200){
													if(xhr.responseText=='fail'){
														tgt.outerHTML=tgthtml;
														alert('Not updated');
													}else{
														tgt.outerHTML=xhr.responseText;
													}
												}else{
													tgt.outerHTML=tgthtml;
													alert('Not deleted. Something went wrong');
												}
												$(tgt).prop('disabled',false);
											}
										});


									});

									$(document).on('click','.list-table tbody tr', function(e){
										//e.stopPropagation();
										//e.stopImmediatePropagation();
										//e.preventDefault();
										//alert(2);
										//jQuery('#commentModal').modal({'show': true});
										//$('#commentModal').modal({'show': true});
										var that = this;
										$that = $(that);
										var link =$that.attr('data-link');
										if( link!==null ){

											$.ajax({
												url: link,
												complete: function(xhr){
													console.log(xhr);
													if(xhr.status==200){
														if( xhr.status=='fail' ){

														}else{

															try {
																var obj = jQuery.parseJSON(xhr.responseText )||JSON.parse(xhr.responseText);
																if (typeof obj.id!=='undefined'&&typeof obj.username!=='undefined'&&typeof obj.website!=='undefined'&&typeof obj.content!=='undefined'&&typeof obj.approved!=='undefined') {
																	//alert('OK');
																	//$('#commentModal').modal('show');
																	$('#commentModal').find("#modal_form_comment .pcomment_name").val(obj.username);
																	$('#commentModal').find("#modal_form_comment .pcomment_website").val(obj.website);
																	$('#commentModal').find("#modal_form_comment .pcomment_text").val(obj.content);

																	$('#commentModal').find(".modal_view_comment .pcomment_name").html(obj.username);
																	$('#commentModal').find(".modal_view_comment .pcomment_website").html(obj.website);
																	$('#commentModal').find(".modal_view_comment .pcomment_text").html(obj.content);
																	$('#commentModal').find(".modal_view_comment .pcomment_datetime").html(obj.datetime);

																	$('#commentModal').find("#modal_form_comment").hide();
																	$('#commentModal').find(".modal_view_comment").show();
																	$('#commentModal').addClass('show').show();

																	$(document).on('click', "#commentModal .modal_view_comment .show-edit-btn", function(){
																		$('#commentModal').find("#modal_form_add_comment").hide();
																		$('#commentModal').find(".modal_view_comment").hide();
																		$('#commentModal').find(".modal-title").html('Edit Comment');
																		$('#commentModal').find("#modal_form_comment").show();
																	});

																	$(document).off('click', "#commentModal .close", close_modal);
																	$(document).on('click', "#commentModal .close", close_modal);


																	function comment_update(e){
																		var tgt = e.target;
																		e.preventDefault();
																		$.ajax({
																			url: link,
																			type: 'post',
																			data: $(tgt).serialize()+'&ajaxRequest=true&random='+Math.floor(Math.random() * 9999999999),
																			complete: function(xhr){
																				//console.log(xhr);
																				close_modal();

																				if(xhr.status==200){
																					if(xhr.responseText=='success'){
																						alert('Update.');
																					}else{
																						alert('Not update.');
																					}
																				}else{
																					alert('Not update. Something wrong');
																				}
																			}
																		});

																		$(document).off('submit', "#commentModal #modal_form_comment", comment_update);

																	}

																	//$(document).off('submit', "#commentModal #modal_form_comment", comment_update);
																	//$(document).off('submit', "#commentModal #modal_form_comment", comment_update);
																	$(document).on('submit', "#commentModal #modal_form_comment", comment_update);

																}else{

																}
															} catch (e) {
																return false;
															}

														}

													}else{

													}

												}
											});

										}

									});

								}
							});
						});
					});
				</script>

		</div>

		<?php elseif( isset($get_view_message) ): ?>

			<?php echo $get_view_message; ?>

		<?php else: ?>

			Something went wrong!

		<?php endif; ?>


	<?php elseif( isset($_GET['current']) && @strtolower($_GET['current'])=='add' ): ?>

		<?php //print_r( $_GET ); print_r( $_POST ); ?>

		<h2 class="text-primary text-left mb-4">Add Post</h2>

		<div class="form-holder form-post-add-holder form-post-add-admin-holder">
			<form class="form form-add form-add-post form-post-add-admin" method="post" enctype="multipart/form-data">
				<input type="hidden" name="add_post">
				<div class="row">
					<div class="col col-12 col-md-8 p-md-1">
						<div class="bg-white h-100 p-3 pt-4">

							<div class="mb-4">
								<label for="post-title">Title</label>
								<input id="post-title" class="post-title form-control h-auto border" type="text" name="title" autocomplete="off" placeholder="Post title" value="<?php echo isset($tile) ? $tile : '' ; ?>" required>
							</div>

							<div class="mb-4">
								<label for="post-content">Content</label>
								<textarea id="post-content" class="post-content form-control h-auto border" rows="24" name="content" autocomplete="off" placeholder="Post contents" required><?php echo isset($content) ? $content : '' ; ?></textarea>
							</div>

						</div>
					</div>
					<div class="col col-12 col-md-4">
						<div class="bg-white h-100 p-3 pt-4">

							<div class="mb-4">
								<label for="post-image">Post Image</label><br>
								<label for="post-image" class="text-center">
									<img id="post-image-preview" class="img img-thumbnail img-fluid w-100 mw-100" src="image-upload.gif" data-preview="image-upload.gif">
									<input id="post-image" type="file" name="image" onchange="loadImageFile(this);" accept="image/x-png,image/png,image/gif,image/jpg,image/jpeg" style="display:none"/>
								</label>
								<br>
								<input id="post-image-alt" class="post-image-alt form-control h-auto border" type="text" name="image_alt" autocomplete="off" min="20" max="220" placeholder="Post image alt" value="<?php echo isset($image_alt) ? $image_alt : '' ; ?>" required>
							</div>

							<div class="mb-4">
								<label for="post-slug">Post Slug</label>
								<input id="post-slug" class="post-slug form-control h-auto border" type="text" name="slug" autocomplete="off" min="20" max="220" placeholder="Post slug" value="<?php echo isset($slug) ? $slug : '' ; ?>" required>
							</div>

							<div class="mb-4">
								<label for="post-summary">Summary</label>
								<textarea id="post-summary" class="post-summary form-control h-auto border" rows="5" name="summary" autocomplete="off" min="20" max="220" placeholder="Summary" onchange="this.value=this.value.cleanString()" required><?php echo isset($get_add_summary) ? $get_add_summary : '' ; ?></textarea>
							</div>

							<div class="mb-4">
								<label for="post-meta_description">Meta Description</label>
								<textarea id="post-meta_description" class="post-meta_description form-control h-auto border" rows="6" name="meta_description" autocomplete="off" min="20" max="220" placeholder="Meta Description" required><?php echo isset($meta_description) ? $meta_description : '' ; ?></textarea>
							</div>

							<div class="mb-4">
								<label for="post-meta_keywords">Meta Keywords</label>
								<input id="post-meta_keywords" class="post-meta_keywords form-control h-auto border" type="text" name="meta_keywords" autocomplete="off" min="20" max="320" placeholder="Meta Keywords" required><?php echo isset($meta_keywords) ? $meta_keywords : '' ; ?>
							</div>

							<!--
							<div class="mb-4">
								<label for="post-datetime">Published time</label>
								<input id="post-datetime" class="post-datetime form-control h-auto border" type="text" name="datetime" autocomplete="off" placeholder="Y-m-d H:i:s" data-field="datetime" value="<?php echo isset($datetime) ? $datetime : date('Y-m-d H:i:s') ; ?>" required>
							</div>
							-->

							<div class="text-right">
								<button class="btn btn-info h-auto" type="submit" name="add_post">add</button>
							</div>

						</div>
					</div>
				</div>

			</form>
		</div>

		<script src="https://prodtextboxio.wpengine.com/textboxio/textboxio.js"></script>
		<script>
			function loadImageFile(that) {
				if(that.files.length){
					var output = document.getElementById('post-image-preview');
					output.src = URL.createObjectURL(that.files[0]);
					output.onload = function() {
						URL.revokeObjectURL(output.src) // free memory
					}
				}
			}

			var editor = textboxio.replace('#post-content');
			var editor_field = document.querySelector('#post-content');
			function setTextValue(){
				editor_field.value = editor.content.get();
			}

			editor.events.loaded.addListener(function() {
				var content = editor.content.get();
				editor_field.value = content;
				//var element = editor.element();
				//console.log( editor.content );
				//console.log( editor.content.documentElement() );
				//setInterval(function(){var content = editor.content.get();editor_field.value = content;},500);

				editor.content.documentElement().body.addEventListener("focus", setTextValue);
				editor.content.documentElement().body.addEventListener("keyup", setTextValue);
				editor.content.documentElement().body.addEventListener("paste", setTextValue);
				editor.content.documentElement().body.addEventListener("input", setTextValue);
				editor.content.documentElement().body.addEventListener("change", setTextValue);
				editor.content.documentElement().body.addEventListener("blur", setTextValue);
			});
			editor.events.focus.addListener(function() {
				var content = editor.content.get();
				editor_field.value = content;
			});
			editor.events.change.addListener(function() {
				var content = editor.content.get();
				editor_field.value = content;
			});
			editor.events.dirty.addListener(function() {
				var content = editor.content.get();
				editor_field.value = content;
			});

		</script>

		<script defer src="../assets/libs/datetimepicker/jquery.datetimepicker.js"></script>
		<!--<script src="/assets/libs/datetimepicker2/DateTimePicker.min.js"></script>-->
		<script>
			contentLoaded(function() {
				$(document).ready( function () {
					$('#post-meta_description').keyup( function() {
						$(this).val( $(this).val().replace( /\r?\n/gi, ' ' ) );
					});

					$('#post-slug').on( 'change', function() {
						$(this).val( $(this).val().toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'') );
					});

					var datepicker = $('#post-datetime').datetimepicker({ format:'Y-m-d H:i:s', formatDate:'Y-m-d', formatTime:'H:i:s' });
					if(datepicker){$('#post-datetime').attr('readonly',true)}
					//$('#post-datetime').DateTimePicker({dateTimeFormat:'Y-m-d H:i:s', dateFormat:'Y-m-d', timeFormat:'H:i:s'});
					//$('#post-datetime').DateTimePicker();
					//$('#post-datetime').DateTimePicker();

				});
			});
		</script>

	<?php elseif( isset($_GET['current']) && @strtolower($_GET['current'])=='edit' ): ?>

		<?php if( isset($get_edit_post) ): ?>

		<h2 class="text-primary text-left mb-4">Edit Post</h2>

		<div class="form-holder form-post-add-holder form-post-add-admin-holder">
			<form class="form form-add form-add-post form-post-add-admin" method="post" enctype="multipart/form-data">
				<input type="hidden" name="edit_post">
				<div class="row">
					<div class="col col-12 col-md-8 p-md-1">
						<div class="bg-white h-100 p-3 pt-4">

							<div class="mb-4">
								<label for="post-title">Title</label>
								<input id="post-title" class="post-title form-control h-auto border" type="text" name="title" autocomplete="off" placeholder="Post title" value="<?php echo isset($get_edit_title) ? $get_edit_title : '' ; ?>" required>
							</div>

							<div class="mb-4">
								<label for="post-content">Content</label>
								<textarea id="post-content" class="post-content form-control h-auto border" rows="24" name="content" autocomplete="off" placeholder="Post contents" required><?php echo isset($get_edit_content) ? $get_edit_content : '' ; ?></textarea>
							</div>

						</div>
					</div>
					<div class="col col-12 col-md-4">
						<div class="bg-white h-100 p-3 pt-4">

							<div class="mb-4">
								<label for="post-image">Post Image</label><br>
								<label for="post-image" class="text-center">
									<img id="post-image-preview" class="img img-thumbnail img-fluid w-100 mw-100" src="<?php echo isset($get_edit_image) ? $get_edit_image : '' ; ?>" data-preview="image-upload.gif">
									<input id="post-image" type="file" name="image" onchange="loadImageFile(this);" accept="image/x-png,image/png,image/gif,image/jpg,image/jpeg" style="display:none"/>
								</label>
								<br>
								<input id="post-image-alt" class="post-image-alt form-control h-auto border" type="text" name="image_alt" autocomplete="off" min="20" max="220" placeholder="Post image alt" value="<?php echo isset($get_edit_image_alt) ? $get_edit_image_alt : '' ; ?>" required>
							</div>

							<div class="mb-4">
								<label for="post-slug">Post Slug</label>
								<input id="post-slug" class="post-slug form-control h-auto border" type="text" name="slug" autocomplete="off" min="20" max="220" placeholder="Post slug" value="<?php echo isset($get_edit_old_slug) ? $get_edit_old_slug : '' ; ?>" required>
							</div>

							<div class="mb-4">
								<label for="post-summary">Summary</label>
								<textarea id="post-summary" class="post-summary form-control h-auto border" rows="5" name="summary" autocomplete="off" min="20" max="220" placeholder="Summary" onchange="this.value=this.value.cleanString()" required><?php echo isset($get_edit_summary) ? $get_edit_summary : '' ; ?></textarea>
							</div>

							<div class="mb-4">
								<label for="post-meta_description">Meta Description</label>
								<textarea id="post-meta_description" class="post-meta_description form-control h-auto border" rows="5" name="meta_description" autocomplete="off" min="20" max="220" placeholder="Meta Description" onchange="this.value=this.value.cleanString()" required><?php echo isset($get_edit_meta_description) ? $get_edit_meta_description : '' ; ?></textarea>
							</div>

							<div class="mb-4">
								<label for="post-meta_keywords">Meta Keywords</label>
								<input id="post-meta_keywords" class="post-meta_keywords form-control h-auto border" type="text" name="meta_keywords" autocomplete="off" min="20" max="320" placeholder="Meta Keywords" value="<?php echo isset($get_edit_meta_keywords) ? $get_edit_meta_keywords : '' ; ?>" required>
							</div>

							<!--<div class="mb-4">
								<label for="post-datetime">Published time</label>
								<input id="post-datetime" class="post-datetime form-control h-auto border" type="text" name="datetime" autocomplete="off" placeholder="Y-m-d H:i:s" value="<?php echo isset($get_edit_datetime) ? $get_edit_datetime : '' ; ?>" required>
							</div>-->

							<div class="text-right">
								<button class="btn btn-info h-auto" type="submit" name="edit_post">Update</button>
							</div>

						</div>
					</div>
				</div>

			</form>
		</div>

		<script src="https://prodtextboxio.wpengine.com/textboxio/textboxio.js"></script>
		<script>

			//this.value.cleanString()
			String.prototype.cleanString = function(){
				return this.replace(/(?:\r\n|\r|\n)/g, ' ').replace(/[|&;$%@"<>()+,]/g, ' ').replace(/\s\s+/g, ' ');
			}

			function loadImageFile(that) {
				if(that.files.length){
					var output = document.getElementById('post-image-preview');
					output.src = URL.createObjectURL(that.files[0]);
					output.onload = function() {
						URL.revokeObjectURL(output.src) // free memory
					}
				}
			}

			var editor = textboxio.replace('#post-content');
			var editor_field = document.querySelector('#post-content');
			function setTextValue(){
				editor_field.value = editor.content.get();
			}

			editor.events.loaded.addListener(function() {
				var content = editor.content.get();
				editor_field.value = content;
				//var element = editor.element();
				//console.log( editor.content );
				//console.log( editor.content.documentElement() );
				//setInterval(function(){var content = editor.content.get();editor_field.value = content;},500);

				editor.content.documentElement().body.addEventListener("focus", setTextValue);
				editor.content.documentElement().body.addEventListener("keyup", setTextValue);
				editor.content.documentElement().body.addEventListener("paste", setTextValue);
				editor.content.documentElement().body.addEventListener("input", setTextValue);
				editor.content.documentElement().body.addEventListener("change", setTextValue);
				editor.content.documentElement().body.addEventListener("blur", setTextValue);
			});
			editor.events.focus.addListener(function() {
				var content = editor.content.get();
				editor_field.value = content;
			});
			editor.events.change.addListener(function() {
				var content = editor.content.get();
				editor_field.value = content;
			});
			editor.events.dirty.addListener(function() {
				var content = editor.content.get();
				editor_field.value = content;
			});

		</script>

		<script defer src="../assets/libs/datetimepicker/jquery.datetimepicker.js"></script>
		<!--<script src="/assets/libs/datetimepicker2/DateTimePicker.min.js"></script>-->
		<script>
			contentLoaded(function() {
				$(document).ready( function () {
					$('#post-meta_description').keyup( function() {
						$(this).val( $(this).val().replace( /\r?\n/gi, ' ' ) );
					});

					$('#post-slug').on( 'change', function() {
						$(this).val( $(this).val().toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'') );
					});

					var datepicker = $('#post-datetime').datetimepicker({format:'Y-m-d H:i:s', formatDate:'Y-m-d', formatTime:'H:i:s'});
					if(datepicker){$('#post-datetime').attr('readonly',true)}
					//$('#post-datetime').DateTimePicker({dateTimeFormat:'Y-m-d H:i:s', dateFormat:'Y-m-d', timeFormat:'H:i:s'});
					//$('#post-datetime').DateTimePicker();
					//$('#post-datetime').DateTimePicker();

				});
			});
		</script>

		<?php elseif(isset($get_edit_message)): ?>

			<h3 class="error-message text=center"><?php echo $get_edit_message; ?></h3>

		<?php endif; ?>

	<?php elseif( isset($_GET['current']) && @strtolower($_GET['current'])=='delete' ): ?>

		<h2 class="text-primary text-left mb-4">Delete Post</h2>

		<?php if( isset($delete_post_message) ): ?>

			<?php echo $delete_post_message; ?>

		<?php elseif( $get_delete_post ): ?>

			<form method="post">
				<h4 class="mb-3">Sure to want delete?</h4>
				<div class="text-info text-left"><b>Title:</b> <?php echo $get_delete_post['title']; ?></div>
				<div class="text-info text-left"><b>Slug:</b> <?php echo $get_delete_post['slug']; ?></div>
				<div class="text-info text-left"><b>image:</b> <?php echo empty($get_delete_post['image'])?"No image":"<img src='".$get_delete_post['image']."' width='320' height='auto'>"; ?></div>
				<br>
				<input type="hidden" name="delete_post_slug" value="<?php echo htmlentities($get_delete_post['slug']); ?>">
				<button type="submit" name="delete_post" class="btn btn-primary">Dlete</button>
			</form>


		<?php else: ?>


			<h4 class="text-danger text-left">Post slug not found</h4>

		<?php endif; ?>

		<br>
		<br>
		<br>

	<?php elseif( isset($_GET['current']) && @strtolower($_GET['current'])=='gallery' ): ?>

		<div class="d-flex justify-content-between"><h2 class="d-inline">Gallery List</h2> <a class="gallery-file-add-btn btn" href="">Add a file</a></div>

		<div class=""><?php echo isset($add_gfile_message)?$add_gfile_message:''; ?><?php echo isset($gfile_message)?$gfile_message:''; ?></div>

		<?php if( $get_gallery_list): ?>

			<br>

			<div class="gallery-list text-center">
			<?php foreach( $get_gallery_list as $id=>$fileinfo ): ?>

				<a href="<?php echo ml_get_abs_folder().'/admin?current=gallery&file_id='.@urlencode($fileinfo['id']).'&action=view'; ?>">
					<img src="<?php echo ML_GALLERY_FOLDER.'/'.$fileinfo['thumb_image']; ?>" height="256" width="256">
				</a>

			<?php endforeach; ?>
			</div>


		<?php else: ?>

			No Gallery Files found!

		<?php endif; ?>


		<!-- Modal -->
		<div class="custom-modal fade" id="galleryModal" role="dialog" aria-hidden="true">
			<div class="custom-modal-dialog custom-modal-xl custom-modal-dialog-centered " role="document">
				<div class="custom-modal-content">
					<div class="custom-modal-header">
						<h5 class="modal-title" id="galleryModalLabel">View</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
					</div>
					<div class="custom-modal-body">
						<form id="modal_form_add_gallery_file" method="post" style="display:none" enctype="multipart/form-data">
							<input type="hidden" name="add_gallery_file">
							<div class="mb-2">
								<label for="pgfile">Image</label>
								<br>
								<label for="pgfile" class="text-center">
									<img id="pgfile-preview" class="img img-thumbnail img-fluid w-100 mw-100" src="image-upload.gif" data-preview="image-upload.gif">
									<input id="pgfile" type="file" name="pgfile" onchange="loadImageFile(this, document.getElementById('pgfile-preview'));" accept="image/x-png,image/png,image/gif,image/jpg,image/jpeg" style="display:none" required/>
								</label>
								<br>
							</div>
							<div class="mb-2">
								<label for="pgfile_title">Image title</label>
								<input id="pgfile_title" class="pgfile_title form-control" type="text" name="pgfile_title" placeholder="Image title" min="4" max="250" required>
							</div>
							<div class="mb-2">
								<label for="pgfile_alt">Image alt</label>
								<input id="pgfile_alt" class="pgfile_alt form-control" type="text" name="pgfile_alt" placeholder="Image alt" min="4" max="250" required>
							</div>
							<div class="mb-2">
								<label for="pgfilethumb_title">Thumb title</label>
								<input id="pgfilethumb_title" class="pgfilethumb_title form-control" type="text" name="pgfilethumb_title" placeholder="Thumb title" min="4" max="250" required>
							</div>
							<div class="mb-2">
								<label for="pgfilethumb_alt">Thumb alt</label>
								<input id="pgfilethumb_alt" class="pgfilethumb_alt form-control" type="text" name="pgfilethumb_alt" placeholder="Thumb alt" min="4" max="250" required>
							</div>
							<button type="submit" name="add_gallery_file" form="modal_form_add_gallery_file" class="btn btn-primary">Add</button>
						</form>
						<form id="modal_form_update_gallery_file" method="post" enctype="multipart/form-data" style="display:none">
							<input type="hidden" name="update_gallery_file">
							<div class="mb-2">
								<label for="upgfileimg">Image</label>
								<br>
								<label for="upgfileimg" class="text-center">
									<img id="upgfilethumb" class="upgfilethumb img img-thumbnail img-fluid w-100 mw-100" src="image-upload.gif" data-preview="image-upload.gif">
									<input id="upgfileimg" type="file" data-name="pgfile" onchange="loadImageFile(this, document.getElementById('upgfilethumb'));" accept="image/x-png,image/png,image/gif,image/jpg,image/jpeg" style="display:none"/>
								</label>
								<br>
							</div>
							<div class="mb-2">
								<label for="upgfile_title">Image title</label>
								<input id="upgfileimg_title" class="upgfileimg_title form-control" type="text" data-name="pgfileimg_title" placeholder="Image title" min="4" max="250">
							</div>
							<div class="mb-2">
								<label for="upgfile_alt">Image alt</label>
								<input id="upgfileimg_alt" class="upgfileimg_alt form-control" type="text" data-name="pgfileimg_alt" placeholder="Image alt" min="4" max="250">
							</div>
							<div class="mb-2">
								<label for="upgfilethumb_title">Thumb title</label>
								<input id="upgfilethumb_title" class="upgfilethumb_title form-control" type="text" data-name="pgfilethumb_title" placeholder="Thumb title" min="4" max="250">
							</div>
							<div class="mb-2">
								<label for="upgfilethumb_alt">Thumb alt</label>
								<input id="upgfilethumb_alt" class="upgfilethumb_alt form-control" type="text" data-name="pgfilethumb_alt" placeholder="Thumb alt" min="4" max="250">
							</div>
							<button type="submit" name="update_gallery_file" form="modal_form_update_gallery_file" class="btn btn-primary">Update</button>
						</form>
						<form id="modal_form_delete_gallery_file" method="post" style="display:none">
							<input type="hidden" name="delete_gallery_file">
							<input type="hidden" name="action" value="delete">
							<h4> Are you sure to delete the gallery file?</h4>
							<div> Not recoverable</div>
							<button type="submit" name="delete_gallery_file" form="modal_form_delete_gallery_file" class="btn btn-primary">Delete</button>
						</form>
						<div id="modal_view_gallery_file">
							<div class="mt-4">
								<div class="mb-4">
									<label>image</label>
									<div>
										<img class="vpgfileimg img img-thumbnail img-fluid w-100 mw-100" src="" width="" height="">
									</div>
								</div>
								<div class="mb-4">
									<label>Image title</label>
									<div class="vpgfileimg_title"></div>
								</div>
								<div class="mb-4">
									<label>Image alt</label>
									<div class="vpgfileimg_alt"></div>
								</div>
								<div class="mb-4">
									<label>Thumb</label>
									<div>
										<img class="vpgfilethumb" src="" width="" height="">
									</div>
								</div>
								<div class="mb-4">
									<label>Thumb title</label>
									<div class="vpgfilethumb_title"></div>
								</div>
								<div class="mb-4">
									<label>Thumb alt</label>
									<div class="vpgfilethumb_alt"></div>
								</div>
							</div>
							<br>
							<br>
							<button class="gallery-file-edit-btn">Edit</button>
							<button class="gallery-file-delete-btn">Delete</button>
						</div>
					</div>
				</div>
			</div>
		</div>

	<script>


		function loadImageFile(that, ImageElem) {
			if(that.files.length){
				ImageElem.src = URL.createObjectURL(that.files[0]);
				ImageElem.onload = function() {
					URL.revokeObjectURL(ImageElem.src) // free memory
				}
			}
		}

		contentLoaded(function() {
			$(document).ready(function(){

				function close_modal(){
					$('#galleryModal').find("#modal_form_add_gallery_file").hide();
					$('#galleryModal').find("#modal_form_update_gallery_file").hide();
					$('#galleryModal').find("#modal_form_delete_gallery_file").hide();
					$('#galleryModal').find("#modal_view_gallery_file").show();
					$('#galleryModal').removeClass('show').hide();
				}

				$(document).on('click', "#galleryModal .close", close_modal);


				$(document).on('click','.gallery-file-add-btn', function(e){
					e.preventDefault();
					close_modal();
					$('#galleryModal').find("#modal_view_gallery_file").hide();
					$('#galleryModal').find("#modal_form_add_gallery_file").show();
					$('#galleryModal').addClass('show').show();
				});

				$(document).on('click','.gallery-file-edit-btn', function(e){
					e.preventDefault();
					$('#galleryModal').find("#modal_form_add_gallery_file").hide();
					$('#galleryModal').find("#modal_form_update_gallery_file").show();
					$('#galleryModal').find("#modal_form_delete_gallery_file").hide();
					$('#galleryModal').find("#modal_view_gallery_file").hide();
					$('#galleryModal').removeClass('show').hide();
					$('#galleryModal').addClass('show').show();
				});

				$(document).on('change','#modal_form_update_gallery_file', function(e){
					var tgt=e.target;
					$(tgt).attr('name', $(tgt).attr('data-name') );
				});

				$(document).on('click','.gallery-file-delete-btn', function(e){
					e.preventDefault();
					$('#galleryModal').find("#modal_form_add_gallery_file").hide();
					$('#galleryModal').find("#modal_form_update_gallery_file").hide();
					$('#galleryModal').find("#modal_form_delete_gallery_file").show();
					$('#galleryModal').find("#modal_view_gallery_file").hide();
					$('#galleryModal').removeClass('show').hide();
					$('#galleryModal').addClass('show').show();
				});

				$(document).on('click','.gallery-list a', function(e){
					e.preventDefault();
					var that = this;
					$that = $(that);
					var link =$that.attr('href');
					if( link!==null ){

						$.ajax({
							url: link+'&ajaxRequest=true&random='+Math.floor(Math.random() * 9999999999),
							complete: function(xhr){
								console.log(xhr);
								if(xhr.status==200){
									if( xhr.responseText=='fail' ){
										alert("Failed to getting data");
									}else{

											var obj = null;

											try {
												obj = jQuery.parseJSON(xhr.responseText )||JSON.parse(xhr.responseText);
											} catch (e) {}

											console.log( obj );

											if (typeof obj.id!=='undefined'&&typeof obj.image!=='undefined'&&typeof obj.image_title!=='undefined'&&typeof obj.image_alt!=='undefined'&&typeof obj.thumb!=='undefined'&&typeof obj.thumb_title!=='undefined'&&typeof obj.thumb_alt!=='undefined') {
												//alert('OK');
												//$('#commentModal').modal('show');
												//View
												$('#galleryModal').find("#modal_view_gallery_file .vpgfileimg").attr('src',obj.image);
												$('#galleryModal').find("#modal_view_gallery_file .vpgfileimg_title").html(obj.image_title);
												$('#galleryModal').find("#modal_view_gallery_file .vpgfileimg_alt").html(obj.image_alt);
												$('#galleryModal').find("#modal_view_gallery_file .vpgfilethumb").attr('src',obj.thumb);
												$('#galleryModal').find("#modal_view_gallery_file .vpgfilethumb_title").html(obj.thumb_title);
												$('#galleryModal').find("#modal_view_gallery_file .vpgfilethumb_alt").html(obj.thumb_alt);

												//$('#galleryModal').find("#modal_form_update_gallery_file .upgfileimg").val(obj.image);
												//Update form
												$('#galleryModal').find("#modal_form_update_gallery_file").attr('action',link);
												$('#galleryModal').find("#modal_form_update_gallery_file .upgfilethumb").attr('src',obj.thumb);
												$('#galleryModal').find("#modal_form_update_gallery_file .upgfileimg_title").val(obj.image_title);
												$('#galleryModal').find("#modal_form_update_gallery_file .upgfileimg_alt").val(obj.image_alt);
												//$('#galleryModal').find("#modal_form_update_gallery_file .upgfilethumb").val(obj.thumb);
												$('#galleryModal').find("#modal_form_update_gallery_file .upgfilethumb_title").val(obj.thumb_title);
												$('#galleryModal').find("#modal_form_update_gallery_file .upgfilethumb_alt").val(obj.thumb_alt);

												//Delete form
												$('#galleryModal').find("#modal_form_delete_gallery_file").attr('action',link);


												close_modal();
												$('#galleryModal').addClass('show').show();

											}else{
												alert('Get proper data failed');
											}



									}

								}else{
									alert('Get data failed');
								}

							}
						});

					}

				});

			});
		});

	</script>

	<?php elseif( isset($_GET['current']) && @strtolower($_GET['current'])=='booking' ): ?>
		<h2 class="text-primary text-left mb-4">Booking</h2>
		<br>
		<div class=""><?php echo isset($booking_export_msg) ? $booking_export_msg : '' ; ?></div>
		<form method="get">
			<input type="hidden" name="current" value="booking">
			<input type="hidden" name="export" value="booking">
			<div class="input-group mb-4">
				<label for="last_days">Last (n) days</label>
				<input id="last_days" class="form-control h-auto border" type="number" name="last_days" min="1" step="1" value="1" placeholder="last days" required>
			</div>
			<button class="btn btn-primary" type="submit" >Export as CSV</button>
		</form>
	<?php else: ?>

		<h2 class="error-message">Page not found</h2>

	<?php endif; ?>

	</div>

<?php else: ?>

	<div class="login-form admin-login-form pb-5 pt-5">
		<h2 class="text-center text-danger mb-3">Login</h2>
		<form method="post">
			<div class="mb-3">
				<label for="ad-username">Username</label>
				<input id="ad-username" class="form-control" type="text" name="username" autocomplete="off" placeholder="Username">
			</div>
			<div class="mb-2">
				<label for="ad-password">Password</label>
				<input id="ad-password" class="form-control" type="password" name="password" autocomplete="off" placeholder="Password">
			</div>
			<div class="mb-2">
				<label for="ad-remember"><input type="checkbox" id="ad-remember" name="remember" value="yes" checked> Remeber me</label>
			</div>
			<div class="text-right">
				<button class="btn btn-primary" type="submit" name="login">Login</button>
			</div>
		</form>
	</div>

<?php endif; ?>
</div>
<?php ml_footer(); ?>
</body>
</html>
