<?php

/**
 * # Main Constants
 */

/**
 * Define lite blog constants
 */
define('ML_LITE_BLOG', __DIR__ );

/**
 * Define directory separator
 */
if( !defined('DIRECTORY_SEPARATOR') ) define( 'DIRECTORY_SEPARATOR', (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') ? '\\' : '/' ) ;

/**
 * Define root folder
 */
define( "ML_ROOT_FOLDER", strlen($_SERVER['DOCUMENT_ROOT'])==strlen(__DIR__) ? '' : trim(trim( substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']), strlen(__DIR__)-strlen($_SERVER['DOCUMENT_ROOT']) )), '/\\' ), '/\\' );

/**
 * Define absolute root folder
 */
define( "ML_ABS_FOLDER", '/'.ML_ROOT_FOLDER);

/**
 * Include config file
 */
include(__DIR__.'/config.php' );

/**
 * Create configured directory
 */
if( defined('ML_UPLOAD_DIR') && !is_dir(ML_UPLOAD_DIR) ) @mkdir(ML_UPLOAD_DIR);
if( defined('ML_GALLERY_DIR') && !is_dir(ML_GALLERY_DIR) ) @mkdir(ML_GALLERY_DIR);
if( defined('ML_BLOG_DIR') && !is_dir(ML_BLOG_DIR) ) @mkdir(ML_BLOG_DIR);
if( defined('ML_TRASHED_BLOG_DIR') && !is_dir(ML_TRASHED_BLOG_DIR) ) @mkdir(ML_TRASHED_BLOG_DIR);
if( defined('ML_BLOG_COMMENT_DIR') && !is_dir(ML_BLOG_COMMENT_DIR) ) @mkdir(ML_BLOG_COMMENT_DIR);
if( defined('ML_TRASHED_BLOG_COMMENT_DIR') && !is_dir(ML_TRASHED_BLOG_COMMENT_DIR) ) @mkdir(ML_TRASHED_BLOG_COMMENT_DIR);

$htaccess = '<Files ~ "^.*">
Deny from all
</Files>

<Files ~ "^index\.php|css|js|.*\.png|.*\.jpg|.*\.gif">
Allow from all
</Files>';

if( defined('ML_BLOG_DIR') && !is_file(ML_BLOG_DIR.DIRECTORY_SEPARATOR.'.htaccess') ) @file_put_contents(ML_BLOG_DIR.DIRECTORY_SEPARATOR.'.htaccess',$htaccess);
if( defined('ML_TRASHED_BLOG_DIR') && !is_file(ML_TRASHED_BLOG_DIR.DIRECTORY_SEPARATOR.'.htaccess') ) @file_put_contents(ML_TRASHED_BLOG_DIR.DIRECTORY_SEPARATOR.'.htaccess',$htaccess);
if( defined('ML_BLOG_COMMENT_DIR') && !is_file(ML_BLOG_COMMENT_DIR.DIRECTORY_SEPARATOR.'.htaccess') ) @file_put_contents(ML_BLOG_COMMENT_DIR.DIRECTORY_SEPARATOR.'.htaccess',$htaccess);
if( defined('ML_TRASHED_BLOG_COMMENT_DIR') && !is_file(ML_TRASHED_BLOG_COMMENT_DIR.DIRECTORY_SEPARATOR.'.htaccess') ) @file_put_contents(ML_TRASHED_BLOG_COMMENT_DIR.DIRECTORY_SEPARATOR.'.htaccess',$htaccess);


/**
 * # Create neccessary functions
 */

/**
 * Check is string is json
 *
 * @param string $string
 *
 * @return bool
 */
function is_json( $string ) {
    json_decode($string);
    if(!defined('JSON_ERROR_NONE')){ define('JSON_ERROR_NONE', 0); }
    return (bool) (json_last_error()==JSON_ERROR_NONE );
}

/**
 * db connection
 * @return bool
 */

function ml_get_db_connection(){
  return mysqli_connect("localhost","pg_auto_dv_live" ,"U9rec6*3","pg_auto_dv_live");
}
/**
 * Array key find by
 *
 * @param string|int $needle
 * @param array $haystack
 *
 * @return bool
 */
function array_key_lookup( $needle, $haystack ){
    return @array_intersect_key( (array)$haystack, @array_flip( @preg_grep( "/$needle/", @array_keys((array)$haystack) ) ));
}


/**
 * Convert Time to specific timezone
 *
 * @param string $datetime = datetime as a standard format
 * @param string $timezone = php timezone
 *
 * @return integer
 */
function convertTime( $datetime, $timezone ){
	$dt = new DateTime( date( DATE_ATOM, strtotime( $datetime ) ), new DateTimeZone( date_default_timezone_get() ) );
	$dt->setTimezone( new DateTimeZone( $timezone ) );
	return $dt->getTimestamp();
}


/**
 * Convert Time to Local Time
 *
 * @param string $datetime = datetime as a standard format
 * @param string $timezone = php timezone
 *
 * @return int
 */
function convertToLocalTime( $datetime, $timezone ){
    $dt = new DateTime( date( 'Y-m-d H:i:s', @strtotime( $datetime ) ), new DateTimeZone( 'UTC' ) );
    $dt->setTimezone( new DateTimeZone('UTC') );
    //$dt = DateTime::createFromFormat(DATE_ATOM, $dt->format(DATE_ATOM), new DateTimeZone( date_default_timezone_get() ) );
    $dt = new DateTime( $dt->format(DATE_ATOM), new DateTimeZone( date_default_timezone_get() ) );
    return $dt->getTimestamp();
}


/**
 * Convert Time to specific timezone
 *
 * @param string $k
 *
 * @return int
 */
function convertTimeToUTC( $datetime, $timezone=FALSE ){
	$timezone = $timezone ? $timezone : date_default_timezone_get();
	$dt = new DateTime( date( DATE_ATOM, @strtotime( $datetime ) ), new DateTimeZone( $timezone ) );
	$dt->setTimezone( new DateTimeZone('UTC') );
	$dt = DateTime::createFromFormat('Y-m-d H:i:s', $dt->format('Y-m-d H:i:s') );
	return $dt->getTimestamp();
}


/**
 * CHeck is timestamp
 *
 * @param string $string
 *
 * @return bool
 */
function isTimestamp($timestamp){
    return (bool) @strtotime(@date('Y-m-d H:i:s',$timestamp)) == (int)$timestamp;
}


/**
 * Time to difference time string
 *
 * @param string $datetime
 * @param int $max_second
 * @param int $dateFormat = Date format
 *
 * @return string
 */
function _ago( $datetime, $max_second=604800, $dateFormat="F j, Y, g:i a" ){
	if( !strtotime($datetime) ) { return $datetime; }
	$currendDateTImeString = date("Y-m-d H:i:s");
    $currentDateTime = new DateTime( $currendDateTImeString );
    $passedDateTime = new DateTime($datetime);
    $interval = $currentDateTime->diff($passedDateTime);
    $year = $interval->format('%y');
    $month = $interval->format('%m');
    $day = $interval->format('%a');
    $hour = $interval->format('%h');
    $min = $interval->format('%i');
    $seconds = $interval->format('%s');
	$cDate = strtotime( $currendDateTImeString );
	$tDate = strtotime( $datetime );
	$diffSeconds = $cDate-$tDate>=0 ? $cDate-$tDate : $tDate-$cDate;
    if( $diffSeconds >= (int) $max_second ){
        return $passedDateTime->format( $dateFormat );
	}else if($year >= 1 ){
		if($year == 1) return $year . " year ago";
		return $year . " years ago";
	}else if($month >= 1 && $month <= 12){
        if($month == 1) return $month . " month ago";
		return $month . " months ago";
	}else if($day >= 1 && $day <= 30 ){
        if($day == 1) return $day . " day ago";
        return $day . " days ago";
    }else if($hour >= 1 && $hour <= 24){
        if($hour == 1) return $hour . " hour ago";
        return $hour . " hours ago";
    }else if($min >= 1 && $min <= 60){
        if($min == 1) return $min . " minute ago";
        return $min . " minutes ago";
    }else if($seconds >= 1 && $seconds <= 60){
        if($seconds == 1) return $seconds . " second ago";
        return $seconds . " seconds ago";
    }

}


/**
 * ECHOLON a string
 * @param string $s
 *
 * @return ECHOLON the @param string
 */
function _e($s){
	echo $s;
}


/**
 * Clean a slug string
 *
 * @param string $string
 *
 * @return string
 */
function cleanSlug($string){
    return @strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(@preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
}


/**
 * Clean a slug string
 *
 * @param string $string
 *
 * @return string
 */
function cleanString($string){
    return str_replace( ["  ", "  ", "  ", "  ", " "], " ", str_replace( ["  ", "  ", "  ", "  ", " "], " ", str_replace( ["\r\n", "\r", "\n", "\t", "="], ' ', $string ) ) );
}


/**
 * Return site title
 *
 * @return string
 */
function ml_get_site_title(){
    return defined('ML_SITE_TITLE')?(string)ML_SITE_TITLE:'';
}


/**
 * Return site root folder
 *
 * @return string
 */
function ml_get_root_folder(){
    return defined('ML_ROOT_FOLDER')?(string)ML_ROOT_FOLDER:'';
}


/**
 * Return site absolute root folder
 *
 * @return string
 */
function ml_get_abs_folder(){
    return defined('ML_ABS_FOLDER')?(string)ML_ABS_FOLDER:'/';
}


/**
 * Return site upload directory
 *
 * @return string
 */
function ml_get_upload_dir(){
    return defined('ML_UPLOAD_DIR')?(string)ML_UPLOAD_DIR:DIRECTORY_SEPARATOR;
}

/**
 * Return site upload directory
 *
 * @return string
 */
function ml_get_upload_thumb_dir(){
  return defined('ML_UPLOAD_DIR')?(string)ML_UPLOAD_DIR.'/thumbs':DIRECTORY_SEPARATOR;
}


/**
 * Return site upload folder
 *
 * @return string
 */
function ml_get_upload_folder(){
    return defined('ML_UPLOAD_FOLDER')?(string)ML_UPLOAD_FOLDER:DIRECTORY_SEPARATOR;
}


/**
 * Return site gallery directory
 *
 * @return string
 */
function ml_get_gallery_dir(){
    return defined('ML_GALLERY_DIR')?(string)ML_GALLERY_DIR:ml_get_upload_dir();
}


/**
 * Return site gallery folder
 *
 * @return string
 */
function ml_get_gallery_folder(){
    return defined('ML_GALLERY_FOLDER')?(string)ML_GALLERY_FOLDER:ml_get_upload_folder();
}

function getRandomBytes($length = 10){
  return substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', mt_rand(1,$length))), 1, $length);
}
/**
 * Upload file
 *
 * @param array $file
 * @param string $name
 * @param string $overwrite
 *
 * @param array|false $name
 */

function ml_upload_file( $file, $name=false, $overwrite=false, $upload_dir=ML_UPLOAD_DIR){

	if( !( isset($file['name']) && isset($file['type']) && isset($file['tmp_name']) && isset($file['error']) ) ) return false;
	if( $file['error'] ) return false;
	@strtolower(pathinfo($file['name'],PATHINFO_FILENAME));
	$ext = @strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
	$file_name = $name? $name :(($name===null)?@pathinfo($file['name'],PATHINFO_FILENAME):@str_replace('.','',uniqid(true)));
	$file_path = ML_LITE_BLOG . DIRECTORY_SEPARATOR . $upload_dir . DIRECTORY_SEPARATOR . $file_name . (empty($ext)?'': ".$ext");

	if( file_exists($file_path) && !$overwrite ) return false;
	else return ((bool) @move_uploaded_file( $file['tmp_name'], $file_path )) ? $file_path : false ;

}


/**
 * Delete file from upload dir
 *
 * @param string $file_basename
 *
 * @return bool
 */
function ml_delete_file( $file_basename, $dir=ML_UPLOAD_DIR ){
	$file_path = ML_LITE_BLOG.DIRECTORY_SEPARATOR.$dir.DIRECTORY_SEPARATOR.$file_basename;
	$ext = @strtolower(@pathinfo($file_basename,PATHINFO_EXTENSION));
	if( file_exists($file_path) && is_file($file_path) ) return @unlink($file_path);
	return false;
}


/**
 * Delete file from upload dir
 *
 * @param string $file_basename
 * @param string $newname = New name without extension
 *
 * @return bool
 */
function ml_rename_file( $file_basename, $newname, $dir=ML_UPLOAD_DIR ){
	$ext = @strtolower(@pathinfo($file_basename,PATHINFO_EXTENSION));
	$file_name = @strtolower($file_basename);
	$dir = ML_LITE_BLOG.DIRECTORY_SEPARATOR.$dir.DIRECTORY_SEPARATOR;
	return @rename( $dir.$file_basename, $dir.$newname.empty($ext)?'':".$ext");
}


/**
 * Create image thumb
 * @param string $name
 * @param int $thumb_width
 * @param int $thumb_height
 *
 * @param string|false
 */

function ml_create_thumb( $filepath, $thumb_width=256, $thumb_height=256,$create_thumb_folder = false ){

	$w=(int)$thumb_width;
	$h=(int)$thumb_height;

	$what = @getimagesize($filepath);
	$file_name = @basename($filepath);
	$dir = @pathinfo($filepath,PATHINFO_DIRNAME);
	$ext = @pathinfo($filepath,PATHINFO_EXTENSION);

	$new_file_name = @basename($file_name,".$ext").'_thumb.'.$ext;
	$separator_path = DIRECTORY_SEPARATOR;
	if($create_thumb_folder){
	  $separator_path = ML_UPLOAD_THUMB_DIR;
	}
	$new_filepath = $dir.$separator_path.$new_file_name;

	$width = $what[0];
	$height = $what[1];


	/*
	if(class_exists('Imagick')){
		try{
			$imagick = new \Imagick(realpath($filepath));
			//$imagick->setImageCompression(Imagick::COMPRESSION_JPEG);
			$orientation = $imagick->getImageOrientation();
			switch($orientation) {
				case Imagick::ORIENTATION_BOTTOMRIGHT: $imagick->rotateimage("#000", 180); break;
				case Imagick::ORIENTATION_RIGHTTOP: $imagick->rotateimage("#000", 90); break;
				case Imagick::ORIENTATION_LEFTBOTTOM: $imagick->rotateimage("#000", -90); break;
			}
			$imagick->setImageOrientation(Imagick::ORIENTATION_TOPLEFT);

			$imagick->setImageCompressionQuality(50);
			$imagick->thumbnailImage($thumb_width, $thumb_height, true, false, true);
			//$imagick->cropThumbnailImage ($thumb_width, $thumb_height, true);
			//$imagick->cropImage ($thumb_width, $thumb_height, $width/2-$thumb_width/2, $height/2-$thumb_height/2);
			if (@file_put_contents($new_filepath, $imagick) === false) {
				return false;
			}
		}
		catch(ImagickException $e){ return false;}
		catch(Exception $e){ return false;}

	}else{
	*/
		$o_aspect = $width/$height;
		$t_aspect = $w/$h;

		if ( $o_aspect>=$t_aspect ){
			// If image is wider than thumbnail (in aspect ratio sense)
			$new_height = $h;
			$new_width = $width/($height/$h);
		}else{
			// If the thumbnail is wider than the image
			$new_width=$w;
			$new_height=$height/($width/$w);
		}

		$exif = @exif_read_data($filepath);
		$orientation = isset($exif['Orientation'])?$exif['Orientation']:0;
		$rotate_need=0;
		switch($orientation) {
			case 3: $rotate_need=180; break;
			case 6:  $rotate_need=90; break;
			case 8: $rotate_need=-90; break;
			default: $rotate_need=0;
		}
		$rotate_need=-($rotate_need);

		$src_x = 0;
		$src_y = 0;

		if($rotate_need%180 == 0){
			if($width>$height){
				$src_x = ($width-$height)/2;
			}else{
				$src_y = ($height-$width)/2;
			}
		}else{
			if($width>$height){
				$src_y = ($width-$height)/2;
			}else{
				$src_x = ($height-$width)/2;
			}
		}

		$thumb = @imagecreatetruecolor($w,$h);

		switch(@strtolower($what['mime'])){
			case 'image/png': {
					//header('Content-Type: image/png');
					$img = @imagecreatefrompng($filepath);
					$img = @imagerotate($img, $rotate_need, imageColorAllocateAlpha($img, 0, 0, 0, 127) );
					//@imagecopyresized( $thumb, $img, 0, 0, $src_x, $src_y, $new_width, $new_height, $width, $height );
					//@imagecopy( $thumb, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
					@imagecopyresampled( $thumb, $img, 0, 0, $src_x, $src_y, $new_width, $new_height, $width, $height );
					@imagepng($thumb, $new_filepath , 80);
				} break;
			case 'image/jpeg': {
					//header('Content-Type: image/jpeg');
					$img = @imagecreatefromjpeg($filepath);
					$img = @imagerotate($img, $rotate_need, imageColorAllocateAlpha($img, 0, 0, 0, 127) );
					@imagecopyresampled( $thumb, $img, 0, 0, $src_x, $src_y, $new_width, $new_height, $width, $height );
					@imagejpeg($thumb, $new_filepath , 80);
				} break;
			case 'image/gif': {
					//header('Content-Type: image/gif');
					$img = @imagecreatefromgif($filepath);
					$img = @imagerotate($img, $rotate_need, imageColorAllocateAlpha($img, 0, 0, 0, 127) );
					@imagecopyresampled( $thumb, $img, 0, 0, $src_x, $src_y, $new_width, $new_height, $width, $height );
					@imagegif($thumb, $new_filepath , 80);
				} break;
			default: {
				@imagedestroy($thumb);
				return false;
			}
		}

		@imagedestroy($thumb);

	//}

	if( file_exists($new_filepath) ) return $new_filepath;
	return false;

}

function get_thumb_file_path_by_image_path($img){
//  $thumb = @str_replace( BLOG_DIR_NAME.'/uploads/', BLOG_DIR_NAME.'/uploads'.ML_UPLOAD_THUMB_DIR, $img );
  $ext = @strtolower(@pathinfo($img,PATHINFO_EXTENSION));
  return @str_replace( '.'.$ext, '_thumb.'.$ext, $img);
}
/**
 * Return gallery files list
 *
 * @param string $sort = id|line|image|image_title|image_alt|thumb|thumb_title|thumb_alt|datetime
 * @param string $asc = asc|desc
 *
 * @return array
 */
function ml_get_gallery_files_list( $sort=null, $asc=null ){
  $link =@ml_get_db_connection();
  $sql = "SELECT * FROM gallery";
  return mysqli_query($link, $sql);
}


/**
 * Return gallery files list
 *
 * @param string $post_slug
 * @return array
 */
function ml_get_latest_gallery_files_list( $qty=9 ){
	return @array_slice( ml_get_gallery_files_list( $sort='datetime', $asc='desc' ), 0, ( (int)$qty==1 ? 1 : (int)$qty ) );
}


/**
 * Return gallery file
 *
 * @param string $post_slug
 * @param string $comment_id
 * @return array|false
 */
function ml_get_gallery_file( $file_id ){
	$files_list = ml_get_gallery_files_list();
	if( $files_list && isset($files_list[$file_id]) ) return $files_list[$file_id];
	return false;
}


/**
 * Add a gallery file
 *
 * @param string $post_slug
 * @param string $username
 * @param string $website
 * @param string $content
 * @param string $datetime
 *
 * @return bool
 */
function ml_add_gallery_file( $image_src, $thumb_src, $image_title, $image_alt=false, $thumb_title=false, $thumb_alt=false, $datetime=false ){

	//if( !(file_exists($image_path) || is_file($image_path)) ) return false;
	if( @empty(@cleanString($image_title)) || !is_scalar($image_title) ) return false; else $image_title = @cleanString( (string) $image_title );

	if( !( $image_alt && is_scalar($image_alt) ) )	$image_alt = @cleanString( (string) $image_title ); else $image_alt = @cleanString( (string) $image_alt );

	if( !( $thumb_title && is_scalar($thumb_title) ) )	$thumb_title = @cleanString( (string) $image_title ); else $thumb_title = @cleanString( (string) $thumb_title );

	if( !( $thumb_alt && is_scalar($thumb_alt) ) ) 		$thumb_alt = @cleanString( (string) $image_alt ); else $thumb_alt = @cleanString( (string) $thumb_alt );

	$datetime = is_string($datetime) ? @convertTimeToUTC( (string) $datetime) : @convertTimeToUTC((string)date('Y-m-d H:i:s'));

	if(!$datetime) return false;

	$content_array = array(
		'id' => @str_replace('.','',uniqid().microtime(true)),
		'image' => $image_src,
		'image_title' => $image_title,
		'image_alt' => $image_alt,
		'thumb' => $thumb_src,
		'thumb_title' => $thumb_title,
		'thumb_alt' => $thumb_alt,
		'datetime' => $datetime,
		'last_edited' => $datetime,
	);

	$whole_content = @json_encode( $content_array );

	$filepath = ML_LITE_BLOG.DIRECTORY_SEPARATOR.'gallery_files_list.json';
	return (bool) @file_put_contents( $filepath, "$whole_content\n", FILE_APPEND )===TRUE;

}


/**
 * Update gallery files list
 *
 * @param string $post_slug
 * @param string $comment_id
 * @param string $key
 * @param string $value
 *
 * @return bool
 */
function ml_update_gallery_file( $file_id, $key, $value ){

	/*
	$flieslist = ml_get_gallery_files_list();
	if(!isset($flieslist[$file_id]) ) return false;

	$key = @strtolower( @preg_replace('/[^A-Za-z0-9_]/', '', (string) $key) );
	if( !$key ) return false;

	if( $flieslist && isset($flieslist[$file_id]) && isset($flieslist[$file_id][$key]) ){
		$flieslist[$file_id][$key] = @cleanString($value);
		$flieslist[$file_id]['last_edited'] = @date('Y-m-d H:i:s');
		if(isset($flieslist[$file_id]['line'])) unset($flieslist[$file_id]['line']);
	}

	$whole_content='';
	foreach( $flieslist as $gfile ){
		if(isset($gfile['datetime'])) $gfile['datetime']=(int)@convertTimeToUTC((string)$gfile['datetime']);
		if(isset($gfile['last_edited'])) $gfile['last_edited']=(int)@convertTimeToUTC((string)$gfile['last_edited']);
		if(isset($gfile['line'])) unset($gfile['line']);
		$whole_content.= @json_encode($gfile)."\n";
	}
	return (bool) @file_put_contents( $filepath, $whole_content )===true?true:(empty($whole_content)?true:false);
	*/

	$gfile = ml_get_gallery_file($file_id);
	if(!$gfile || !isset($gfile['line'])) return false;
	$key = @strtolower( @preg_replace('/[^A-Za-z0-9_]/', '', (string) $key) );
	if( !$key ) return false;
	$gfile[$key] = @cleanString($value);
	$gfile['last_edited'] = @date('Y-m-d H:i:s');
	$line = (int) $gfile['line'] - 1;
	if(isset($gfile['datetime'])) $gfile['datetime']=(int)@convertTimeToUTC((string)$gfile['datetime']);
	if(isset($gfile['last_edited'])) $gfile['last_edited']=(int)@convertTimeToUTC((string)$gfile['last_edited']);
	unset($gfile['line']);
	$update= @json_encode($gfile)."\n";
	$filepath = ML_LITE_BLOG.DIRECTORY_SEPARATOR.'gallery_files_list.json';
	$txt = @file($filepath);
	$content = @trim(@file_get_contents( $filepath ));
	$whole_content = @str_replace($txt[$line], $update, $content);
	return (bool) @file_put_contents( $filepath, $whole_content )===true?true:(empty($whole_content)?true:false);

}


/**
 * Delete gallery file
 *
 * @param String $post_slug
 * @param string $comment_id
 *
 * @return bool
 */
function ml_delete_gallery_file( $file_id ){

	$flieslist = ml_get_gallery_files_list();
	if(!isset($flieslist[$file_id]) ) return false;

	if( $flieslist && isset($flieslist[$file_id]) ) unset($flieslist[$file_id]);

	$whole_content = '';
	foreach($flieslist as $comment){
		if(isset($comment['line'])){unset($comment['line']);};
		$whole_content.=@json_encode($comment)."\n";
	}

	$filepath = ML_LITE_BLOG.DIRECTORY_SEPARATOR.'gallery_files_list.json';
	return (bool) @file_put_contents($filepath,$whole_content)===true?true:(empty($whole_content)?true:false);

}


/**
 * Clear gallery list
 *
 * @param string $post_slug
 * @return bool
 */
function ml_clear_gallery_files_list(){
	$filepath = ML_LITE_BLOG.DIRECTORY_SEPARATOR.'gallery_files_list.json';
	@file_put_contents($filepath,'');
	return (bool) empty(@file_get_contents($filepath))?true:false;
}


/**
 * Include header file
 *
 * @return void
 */
function ml_header($metas = []){

  if(count($metas)){
    $site_title = $metas['blog_title'];
    $site_description = $metas['meta_description'];
    $site_keywords = $metas['meta_keywords'];
    $canonical = $metas['meta_url'];
    $og_site_title = $site_title;
    $og_description = $site_description;
    $og_url = $canonical;
    $og_image = $metas['meta_image'];
    $tw_title = $site_title;
  }

	$hp = __DIR__ . DIRECTORY_SEPARATOR . 'header.php';
	if(file_exists($hp)&&is_file($hp)) include($hp);
}


/**
 * Include header file
 *
 * @return void
 */
function ml_footer(){
	$hp = __DIR__ . DIRECTORY_SEPARATOR . 'footer.php';
	if(file_exists($hp)&&is_file($hp)) include($hp);
}


/**
 * Decrypt string
 *
 * @param string $string
 * @return string
 */
function ml_encrypt( $string ) {
	$salt=defined('ML_RAW_SALT')?ML_RAW_SALT:'XmstlwF2eyhjwdoT1cz9qPYdwZcmq8K2';
	return trim(base64_encode(openssl_encrypt($string,'BF-ECB',$salt,OPENSSL_RAW_DATA)));
}


/**
 * Encrypt a string
 *
 * @param string $string
 * @return string
 */
function ml_decrypt( $string  ) {
	$salt=defined('ML_RAW_SALT')?ML_RAW_SALT:'XmstlwF2eyhjwdoT1cz9qPYdwZcmq8K2';
	return trim(openssl_decrypt(base64_decode($string),'BF-ECB',$salt,OPENSSL_RAW_DATA));
}


/**
 * Decrypt a string
 *
 * @param string $string
 * @return string
 */
function ml_is_cookie_enabled(){
	if(!isset($_COOKIE['ml_testcookie'])){
		ob_start();
		if(setcookie('ml_testcookie',"ok",time()+10*365*24*60*60,'/')) $_COOKIE['ml_testcookie']="hello";
		ob_end_flush();
	}
	return (bool)isset($_COOKIE['ml_testcookie']);
}


/**
 * Create text captha
 *
 * @param string $string
 *
 * @return string
 */
function ml_create_text_captcha() {
	if(!ml_is_cookie_enabled()) return false;
	$salt=defined('ML_CAPTCHA_SALT')?ML_CAPTCHA_SALT:'T1ecz9qPYdwZcq8K2XmstlwF2eyhjwdo';
	$num=['zero','one','two','three','four','five','siz','six','seven','eight','nine','ten',
	'eleven','twelve','thirteen','fourteen','fifteen','sixteen','seventeen','eighteen','nineteen','twenty'];
	$r1=@rand(0,10);
	$r2=@rand(11,20);
	$captcha=$num[$r1].'+'.$num[$r2];
	$st=urlencode(trim(base64_encode(openssl_encrypt($r1+$r2,'BF-ECB',$salt,OPENSSL_RAW_DATA))));
	if(setcookie('ml_text_captcha',$st,time()+3600,'/'))return $captcha;
	return false;
}


/**
 * CHeck is valid text captha
 *
 * @param string $string
 *
 * @return bool
 */
function ml_is_valid_text_captcha($string) {
	if(!ml_is_cookie_enabled()) return false;
	if(!isset($_COOKIE['ml_text_captcha'])) return false;
	$captcha=@urldecode($_COOKIE['ml_text_captcha']);
	$salt=defined('ML_CAPTCHA_SALT')?ML_CAPTCHA_SALT:'T1ecz9qPYdwZcq8K2XmstlwF2eyhjwdo';
	return (bool)( $string==trim(openssl_decrypt(base64_decode($captcha),'BF-ECB',$salt,OPENSSL_RAW_DATA)) );
}


/**
 * Login
 *
 * @param string $username
 * @param string $password
 * @param bool $remember
 *
 * @return bool
 */
function ml_login( $username, $password, $remember=false ) {
	if(!defined('ML_ADMIN_USERNAME')||!defined('ML_ADMIN_PASSWORD')) return false;
	if( @strtolower((string)$username) == @strtolower(ML_ADMIN_USERNAME) && strcmp(ML_ADMIN_PASSWORD,$password) == 0 ){
		$sd=[ML_ADMIN_USERNAME,ML_ADMIN_PASSWORD];
		$sd=rawurlencode(ml_encrypt(json_encode($sd)));
		$st=$remember?time()+10*365*24*60*60:0;
		return @setcookie('ml_lite_blog_logged',$sd,$st,'/');
	}
	return ml_is_login();
}


/**
 * CHeck is login
 *
 * @return string
 */
function ml_is_login() {
	if(!defined('ML_ADMIN_USERNAME')||!defined('ML_ADMIN_PASSWORD')) return false;
	if(!ml_is_cookie_enabled()) return false;
	if(!isset($_COOKIE['ml_lite_blog_logged'])) return false;
	$l=ml_decrypt(rawurldecode($_COOKIE['ml_lite_blog_logged']));
	if(empty($l)) return false;
	if(!is_json($l)) return false;
	$dc=json_decode($l,true);
	if(!isset($dc[0])||!isset($dc[1])) return false;
	return (bool)($dc[0]==ML_ADMIN_USERNAME && @strcmp(ML_ADMIN_PASSWORD,$dc[1])==0);
}


/**
 * Logout
 *
 * @return string
 */
function ml_logout() {
	if(ml_is_cookie_enabled()&&isset($_COOKIE['ml_lite_blog_logged'])){
		if(setcookie('ml_lite_blog_logged','',-999999,'/')) $_COOKIE['ml_lite_blog_logged']=null;unset($_COOKIE['ml_lite_blog_logged']);
	}
	return !isset($_COOKIE['ml_lite_blog_logged']);
}


/**
 * Parse heading string for blog
 *
 * @param string $str
 * @return void
 */
function ml_parse_heading_string( $heading_str ) {
    if(empty($heading_str)) return [];
    $lines = explode("\n", $heading_str);
    $ret = Array();
    foreach($lines as $line) {
        $line = trim($line);
        if(!$line || $line[0] == "#" || $line[0] == ";") continue;
        if($line[0] == "[") continue;
        if(!strpos($line, ':')) continue;
        $tmp = explode(":", $line, 2);
        $ret[trim($tmp[0])] = ltrim($tmp[1]);
    }
    return $ret;
}


/**
 * Check is blog exists
 *
 * @param string $slug
 *
 * @return string|false = Filepath or false
 */
function ml_blog_exists( $slug ){
    $blog_connection = @ml_get_db_connection();
    $b_Post = mysqli_query($blog_connection,"SELECT * FROM `blog` where slug='".$slug."'");
    $has_blog = mysqli_fetch_array($b_Post);
    if (!$has_blog){
      return false;
    }
    return true;
}


/**
 * Check is trashed blog exists
 *
 * @param string $slug
 * @return array|false
 */
function ml_trashed_blog_exists( $slug ){

	$pattern = '/' . ML_LITE_BLOG . DIRECTORY_SEPARATOR . ML_TRASHED_BLOG_DIR . DIRECTORY_SEPARATOR . '[0-9]{1,10}( - ' . $slug . '.html)/';

	$pattern = str_replace( ["\\"], ["\\\\"], $pattern);
	$files_array = glob( ML_LITE_BLOG . DIRECTORY_SEPARATOR . ML_TRASHED_BLOG_DIR . DIRECTORY_SEPARATOR . '* - '.$slug.'.html' );

	$file_array = @preg_grep( $pattern, $files_array );
	return ( is_array($file_array) && isset($file_array[0]) ) ? $file_array[0] : false;

}


/**
 * Add blog post
 *
 * @param string $title
 * @param string $content
 * @param string $datetime
 * @param string $slug
 * @param array $metadata
 * @param boolean $overwrite
 *
 * @return bool
 */
function ml_add_blog_post( $title, $content, $datetime=false, $slug=false, $metadata=[], $overwrite=false ){

  if( @empty($title) || !is_scalar($title) ) return false; else $title = (string) $title;
  if( @empty($content) || !is_scalar($content) ) return false; else $content = trim((string) $content);
  if( !$slug ) $slug = @cleanSlug( (string) $title );  else $slug = (string) cleanSlug($slug);
  if( @empty($slug) || !is_scalar($slug) ) return false;

  $connection = @ml_get_db_connection();
  if (!$connection) {
    return false;
  }

  $metadata['title']=$title;
  if(!isset($metadata['image'])) {
    @preg_match( '/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $content, $image );
    $metadata['image']=isset($image['src'])?$image['src']:'';
  }
  if(!isset($metadata['summary'])) $metadata['summary']=@substr(cleanString(strip_tags($content)), 0, 160);
  $headings='';
  if( is_array($metadata) || is_iterable($metadata) ){
    foreach( $metadata as $name=>$value ){
      $name = @preg_replace('/[^A-Za-z0-9_]/', '', $name);
      $value = @cleanString($value);
      $headings.="$name:$value\n";
      //if( is_string( $value ) && $name!='title' ){ $headings.="$name:$value\n"; }
    }
  }
  $content = htmlentities( $content, ENT_QUOTES, 'UTF-8' );
  $title = htmlentities( $title, ENT_QUOTES, 'UTF-8' );
  $separator = "\n" . ML_BLOG_SEPARATOR . "\n";
  $whole_content = $headings . $separator . $content;


//  echo "<pre>";
//  echo 'title-->'.$title."<br/>";
//  echo 'content-->'.$slug."<br/>";
//  echo 'summary-->'.$metadata['summary']."<br/>";
//  echo 'meta_description-->'.$metadata['meta_description']."<br/>";
//  echo 'meta_keywords-->'.$metadata['meta_keywords']."<br/>";
//  echo 'image-->'.$metadata['image']."<br/>";
//  echo '$datetime-->'.$datetime."<br/>";
//  print_r($metadata);
//  echo "</pre>";
//  die();


  $qry = 'INSERT INTO `blog` (title, content, slug, summary, meta_description, meta_keywords, image, updated_at, created_at)';
  $qry.= ' VALUES ("'.$title.'", "'.$whole_content.'", "'.$slug.'", "'.$metadata['summary'].'", "'.$metadata['meta_description'].'", "'.$metadata['meta_keywords'].'", "'.$metadata['image'].'", "","'.$datetime.'")';

  $b_post = mysqli_query($connection,$qry);


  if(  $b_post ){
    // ml_clear_blog_comment( $slug );
    // TODO : Comments need to added in comment table
    return true;
  }
  return false;
}


/**
 * Edit blog post
 *
 * @param string $slug
 * @param string $key
 * @param string $value
 * @return bool
 */
function ml_update_blog_post( $slug, $key, $value ){

	$old_filepath = ml_blog_exists($slug);
	if( !$old_filepath ) return false;

	$get_post = ml_get_blog_post( $slug );
	if( !$get_post ) return false;

	if( @strtolower($key) == 'slug' ){

		$slug = (string) $get_post['slug'];
		$new_slug = (string) @cleanSlug( $value );
		$datetime_unix = @convertTimeToUTC($get_post['datetime']);

		$file_basename = $datetime_unix . ' - ' . $new_slug . '.html';
		$new_filepath = ML_LITE_BLOG . DIRECTORY_SEPARATOR . ML_BLOG_DIR . DIRECTORY_SEPARATOR . $file_basename;
		if( file_exists($new_filepath) ) return false;

		$changed=@rename( $old_filepath, $new_filepath );
		if($changed){
			$c_dir = ML_LITE_BLOG . DIRECTORY_SEPARATOR . ML_BLOG_COMMENT_DIR . DIRECTORY_SEPARATOR;
			@rename( $c_dir . $slug . '.json', $c_dir . $new_slug . '.json' );
			return true;
		}
		else{ return false; }

	}
	else if( @strtolower($key) == 'datetime' || @strtolower($key) == 'date' || @strtolower($key) == 'time' || @strtolower($key) == 'post_datetime' || @strtolower($key) == 'post_date' || @strtolower($key) == 'post_time' || @strtolower($key) == 'posted_on' ){

		$slug = (string) $get_post['slug'];
		$datetime_unix = @convertTimeToUTC($value);
		if( !$datetime_unix ) return false;

		$file_basename = $datetime_unix . ' - ' . $slug . '.html';
		$new_filepath = ML_LITE_BLOG . DIRECTORY_SEPARATOR . ML_BLOG_DIR . DIRECTORY_SEPARATOR . $file_basename;
		if( file_exists($new_filepath) ) return false;

		return @rename( $old_filepath, $new_filepath );

	}
	else if( @strtolower($key) == 'content' ){

		if( isset($get_post['title']) ) $get_post['metadata']['title'] = $get_post['title'];
		if( isset($get_post['image']) ) $get_post['metadata']['image'] = $get_post['image'];
		if( isset($get_post['thumb']) ) $get_post['metadata']['thumb'] = $get_post['thumb'];
		if( isset($get_post['image_alt']) ) $get_post['metadata']['image_alt'] = $get_post['image_alt'];
		if( isset($get_post['summary']) ) $get_post['metadata']['summary'] = @cleanstring($get_post['summary']);
		$get_post['metadata']['last_edited'] = @date('Y-m-d H:i:s', @convertTimeToUTC( date('Y-m-d H:i:s') ) );

		$headings = '';
		if( is_array($get_post['metadata']) && count($get_post['metadata']) ){
			foreach( $get_post['metadata'] as $name=>$text ){
				$headings.= "$name:$text\n";
			}
		}

		$content = htmlentities( trim( (string) $value ) );
		$separator = "\n" . ML_BLOG_SEPARATOR . "\n";
		$whole_content = $headings . $separator . $content;

		return (bool) @file_put_contents( $old_filepath, $whole_content ) === TRUE;

	}
	else{

		if( isset($get_post['title']) ) $get_post['metadata']['title'] = $get_post['title'];
		if( isset($get_post['image']) ) $get_post['metadata']['image'] = $get_post['image'];
		if( isset($get_post['thumb']) ) $get_post['metadata']['thumb'] = $get_post['thumb'];
		if( isset($get_post['image_alt']) ) $get_post['metadata']['image_alt'] = $get_post['image_alt'];
		if( isset($get_post['summary']) ) $get_post['metadata']['summary'] = @cleanstring($get_post['summary']);
		$get_post['metadata']['last_edited'] = @date('Y-m-d H:i:s', @convertTimeToUTC( date('Y-m-d H:i:s') ) );

		$key = @strtolower( @preg_replace('/[^A-Za-z0-9_]/', '', $key) );
		$get_post['metadata'][$key] = @cleanString(strip_tags($value));

		if( is_bool($value) && $value===false ) unset( $get_post['metadata'][$key] );

		$headings = '';
		if( is_array($get_post['metadata']) && count($get_post['metadata']) ){
			foreach( $get_post['metadata'] as $name=>$text ){
				$headings.="$name:$text\n";
			}
		}

		$content = htmlentities( trim( (string) $get_post['content'] ) );
		$separator = "\n" . ML_BLOG_SEPARATOR . "\n";
		$whole_content = $headings . $separator . $content;

		return (bool) @file_put_contents( $old_filepath, $whole_content ) === TRUE;

	}

}


/**
 * Delete blog post
 *
 * @param string $slug
 *
 * @return bool
 */
function ml_delete_blog_post( $slug, $permanently=false ){

  $connection = @ml_get_db_connection();
  $qry = "DELETE FROM `blog` WHERE slug='".$slug."'";
  return (bool) mysqli_query($connection,$qry);

}


/**
 * Clear trashed blog posts
 *
 * @return bool
 */
function ml_clear_trashed_posts(){

	//Delete trashed blog posts
	$files = @glob( ML_LITE_BLOG . DIRECTORY_SEPARATOR . ML_TRASHED_BLOG_DIR . DIRECTORY_SEPARATOR . '*.html' );
	if( $files ){
		foreach( $files as $file ){
			@unlink( $file );
		}
	}

	//Delete trashed comments
	$cfiles = @glob( ML_LITE_BLOG . DIRECTORY_SEPARATOR . ML_TRASHED_BLOG_COMMENT_DIR . DIRECTORY_SEPARATOR . '*.json' );
	if( $cfiles ){
		foreach( $cfiles as $file ){
			@unlink( $file );
		}
	}

	return true;

}


/**
 * Delete blog post
 *
 * @param string $slug
 *
 * @return bool
 */
function ml_restore_blog_post( $slug, $overwrite=false ){

	$file = ml_trashed_blog_exists($slug);
	if( !$file ) return false;

	$file_basename = @pathinfo( $file, PATHINFO_BASENAME );
	$to_file = ML_LITE_BLOG . DIRECTORY_SEPARATOR . ML_BLOG_DIR . DIRECTORY_SEPARATOR . $file_basename;
	if( file_exists($to_file) && !$overwrite ) return false;

	// Move to trash folder
	$restored = (bool) @rename( $file, $to_file );

	if( $restored ){
		//Restore comments
		$cfilename = @trim ( @cleanSlug((string)$slug) ) . ".json";
		$cfilepath = ML_LITE_BLOG . DIRECTORY_SEPARATOR . ML_TRASHED_BLOG_COMMENT_DIR . DIRECTORY_SEPARATOR . $cfilename;
		$cto_filepath = ML_LITE_BLOG . DIRECTORY_SEPARATOR . ML_BLOG_COMMENT_DIR . DIRECTORY_SEPARATOR . $cfilename;
		@rename( $cfilepath, $cto_filepath );

		return true;

	}else{ return false; }

}


/**
 * Return bloog post
 *
 * @param string $slug = post slug
 * @return array|false = false if not available or any error
 */
function ml_get_blog_post( $slug ){

//	$has_post = ml_blog_exists($slug);
	if( !ml_blog_exists($slug) ) return false;
//	if( !file_exists($file) ) return false;
  $connection = @ml_get_db_connection();
  $b_post = mysqli_query($connection,"SELECT * FROM `blog` where slug='".$slug."'");
  $row = mysqli_fetch_array($b_post);

//	$file_contents = @file_get_contents( $file );

	$file_contents_array = explode( ML_BLOG_SEPARATOR, $row['content'], 2 );

	$title = $row['title'];
	$slug = $row['slug'];
	$content = trim( html_entity_decode($row['content']) );
	$summary = !empty($row['summary'])?$row['summary']:@substr(cleanString(strip_tags($content)),0,160);
	$image = $row['image'];
	$thumb = '';
	$image_alt = '';

	$metadata = [];

	if( count($file_contents_array) == 2 ){
		$content = trim( html_entity_decode($file_contents_array[1]));
		$metadata = ml_parse_heading_string( $file_contents_array[0] );

		if( isset($metadata['title']) )  $title = $metadata['title']; unset($metadata['title']);
		if( isset($metadata['image']) )  $image = $metadata['image']; unset($metadata['image']);
		if( isset($metadata['thumb']) )  $thumb = $metadata['thumb']; unset($metadata['thumb']);
		if( isset($metadata['summary']) )  $summary = $metadata['summary']; unset($metadata['summary']);
		if( isset($metadata['image_alt']) )  $image_alt = $metadata['image_alt']; unset($metadata['image_alt']);
	}

	return array(
	  'id'  => $row['id'],
		'title' => $title,
		'slug' => $slug,
		'summary' => $summary,
		'content' => html_entity_decode( $content, ENT_QUOTES, 'UTF-8' ),
		'image' => $image,
		'thumb' => $thumb,
		'image_alt' => $image_alt,
		'datetime' => @date('Y-m-d H:i:s', $row['created_at'] ),
		'datetime_unix' => @convertToLocalTime( @date('Y-m-d H:i:s', $row['created_at'] ), 'UTC' ),
		'datetime_utc' => @date('Y-m-d H:i:s', $row['created_at'] ),
		'datetime_utc_unix' => strtotime($row['created_at']),
		'metadata' => $metadata,
	);

}


/**
 * Pageination
 * @param int $numRows
 * @param int $currPage
 * @param int $perPage
 * @param int $adjucent
 *
 * @return string
 */
function ml_pagination( $numRows, $currPage=1, $perPage=6, $adjucent=1 ){

	$numRows = (int)$numRows;
	$currPage = (int)$currPage;
	$perPage = (int)$perPage;
	$adjucent = (int)$adjucent;

    $allPages = ceil( $numRows / $perPage );
    //$offset = ($currPage - 1) * $perPage;
	$currPage = $currPage>$allPages?$allPages:($currPage<1?1:$currPage);
	$prevPage = $currPage-1;
	$nextPage = $currPage+1;

    $querystring = "";
    foreach ($_GET as $key => $value) {
        if( !($key == "page" || $key == "p") ) $querystring.= "$key=$value&amp;";
    }

	$paginHTML = "";

	if( $allPages>0 ){

		$paginHTML.= '<ul class="pagination">';

		if ($prevPage<1) {
			$paginHTML.= '<li class="page-item"><span class="page-link">Prev</span></li>';
		}else{
			$paginHTML.= '<li class="page-item"><a class="page-link" href="?'.$querystring.'p='.$prevPage.'">Prev</a></li>';
		}

		if ($currPage-$adjucent>1) {
			$paginHTML.= '<li class="page-item"><span class="page-link">...</span></li>';
		}

		$range = ($adjucent*2)+1;

		if( $range>$allPages ){
			$start = 1;
			$end = $allPages;
		}else{
			$start = $currPage-$adjucent>0?$currPage-$adjucent:1;
			$end = $currPage+$adjucent>$allPages?$allPages:$currPage+$adjucent;
			if($start==1 && $end-$start<$adjucent*2){
				$end = ($start+$adjucent*2)>$allPages?$allPages:$start+$adjucent*2;
			}elseif($end==$allPages && $end-$start<$adjucent*2){
				$start = ($end-$adjucent*2)>0?$end-$adjucent*2:1;
			}
		}

		for ( $i = $currPage-$adjucent; $i<=$currPage+$adjucent; $i++ ) {

			if ( $i>0 && $i<=$allPages) {
				$paginHTML.= '<li class="page-item'. ($i==$currPage? ' active' : '' ) .'">'. ($i==$currPage? '<span class="page-link">'.$i.'</span>' : '<a class="page-link" href="?'.$querystring.'p='.$i.'">'.$i.'</a>').'</li>';
			}

		}

		if ($currPage+$adjucent<$allPages-1) {
			$paginHTML.= '<li class="page-item"><span class="page-link">...</span></li>';
		}

		if ($nextPage>$allPages) {
			$paginHTML.= '<li class="page-item"><span class="page-link">Next</span></li>';
		}else{
			$paginHTML.= '<li class="page-item"><a class="page-link" href="?'.$querystring.'p='.$nextPage.'">Next</a></li>';
		}

		$paginHTML.= "</ul>";

	}

    return $paginHTML;

}


/**
 * Return blog post list
 *
 * @param string $sort
 * @param string $asc
 * @return array
 */
function ml_blog_posts_list( $sort='datetime', $asc='desc' ){

  $connection = @ml_get_db_connection();
  $qry = "SELECT * FROM `blog` ORDER BY blog.created_at DESC";
	$files = mysqli_query($connection,$qry);

	if( $files ){

		$return = [];
		foreach( $files as $file ){
      $return[trim($file['slug'])] = @date('Y-m-d H:i:s', @convertToLocalTime( $file['created_at'], 'UTC' ) );
		}

		if( strtolower($sort)=='slug' ){ ksort($return); }
		if( strtolower($sort)=='datetime' || strtolower($sort)=='time' || strtolower($sort)=='date' ){ natcasesort($return); }

		if( @strtolower($asc)=='desc' || (is_bool($asc) && $asc===false ) ){ $return = array_reverse($return); }

		return $return;

	}
	else{ return []; }

}


/**
 * Return specific qty blog posts list
 *
 * @param int $offeset
 * @param int $perpage
 * @param string $sort
 * @param string $asc
 * @return array
 */
function ml_get_blog_posts_list( $offeset=0, $perpage=6, $sort='datetime', $asc='desc' ){
	return  @array_slice( ml_blog_posts_list( $sort, $asc ), (int) $offeset, ((int)$perpage==0?1:(int)$perpage) );
}


/**
 * Return random specific qty blog posts list
 *
 * @param int $offeset
 * @param int $perpage
 * @param string $sort
 * @param string $asc
 * @return array
 */
function ml_random_blog_posts_list( $qty=6 ){

	$posts = ml_blog_posts_list();
	$return = [];
	$posts_len = count($posts);
	$qty = min( $posts_len, ((int)$qty==0?1:(int)$qty) );

	for( $i=0; $i<$qty; $i++ ){
		$diff = @array_diff_key( $posts, $return );
		$rand = @rand(1, count($diff))-1; $rand=$rand<0?0:$rand;
		$keys = @array_keys(@array_slice( $diff, $rand, 1 ) );
		if( isset($keys[0]) && isset($posts[$keys[0]]) ) $return[$keys[0]] = $posts[$keys[0]];
	}

	return $return;

}


/**
 * Return blog post list
 *
 * @param string $sort
 * @param string $asc
 * @return array
 */
function ml_latest_blog_posts_list( $qty=10 ){
	$posts = ml_blog_posts_list( $sort='datetime', $asc='desc' );
	if( is_array($posts) ) return @array_slice( $posts, 0, (int) $qty );
	return false;
}


/**
 * Return related/Search blog posts list
 *
 * @param string $slug
 * @param integer $qty
 * @return array
 */
function ml_related_blog_posts_list( $slug, $qty=10 ){

	$posts = ml_blog_posts_list( $sort='datetime', $asc='desc' );

	$return = [];
	if( empty($posts) ) return $return;

	$exp = explode('-', $slug);

	if( count($exp) ){

		$found = [];
		foreach( $exp as $needle ){
			$needle = @trim($needle);
			$found = array_merge_recursive ( $found, array_keys( array_key_lookup( $needle, $posts ) ) );
		}

		$ranking = array_count_values( $found );
		rsort( $ranking );
		$ranking = @array_slice( $ranking, 0, ( (int) $qty == 0 ? 1 : (int) $qty ) );

		if( count($ranking) ){
			foreach( $ranking as $key=>$value ){
				$return[$found[$key]] = $posts[$found[$key]];
			}
		}

	}

	return $return;

}


/**
 * Return Search blog posts
 *
 * @param string $search
 * @param integer $qty
 * @return array
 */
function ml_search_blog_posts( $search, $qty=10 ){
	return @ml_related_blog_posts_list( $search, $qty=10 );
}


/**
 * Return blog post list
 *
 * @param string $sort
 * @param string $asc
 * @return array
 */
function ml_trashed_blog_posts_list( $sort='slug', $asc='ASC' ){

	$files = @glob( ML_LITE_BLOG . DIRECTORY_SEPARATOR . ML_TRASHED_BLOG_DIR . DIRECTORY_SEPARATOR . '*.html' );

	if( $files ){

		$return = [];
		foreach( $files as $file ){
			$filename = @pathinfo( $file, PATHINFO_FILENAME );
			$exp = explode( " - ", $filename, 2 );
			if( isset($exp[0]) && isset($exp[1]) && isTimestamp((int)$exp[0]) ){
				$return[trim($exp[1])] = @date('Y-m-d H:i:s', @convertToLocalTime( @date('Y-m-d H:i:s',(int) $exp[0] ), 'UTC' ) );
			}
		}

		if( strtolower($sort)=='slug' ){ ksort($return); }
		if( strtolower($sort)=='date' || strtolower($sort)=='time' || strtolower($sort)=='date' ){ natcasesort($return); }

		if( strtolower($asc)=='asc' || (is_bool($asc) && $asc===false ) ){ $return=array_reverse($return); }

		return $return;

	}
	else{ return []; }

}


/**
 * Check is comments need approval
 *
 * @return bool
 */
function ml_is_comments_need_approval(){
	return (bool) defined('ML_COMMENTS_NEED_APPROVAL') ? ML_COMMENTS_NEED_APPROVAL : false;
}


/**
 * Return blog comments
 *
 * @param string $post_slug
 * @param string $sort
 * @param string $asc
 * @param string $filter
 *
 * @return array
 */
function ml_get_blog_comments( $post_slug, $sort='datetime', $asc='desc', $filter='all' ){

	if( !ml_blog_exists( $post_slug ) ) return [];

	$filename = @trim ( @cleanSlug((string)$post_slug) ) . ".json";
	$filepath = ML_LITE_BLOG . DIRECTORY_SEPARATOR . ML_BLOG_COMMENT_DIR . DIRECTORY_SEPARATOR . $filename;
	$content = @file_get_contents( $filepath );

	$CommentsList = @preg_split( "/\\r\\n|\\r|\\n/", $content );

	$comments = [];

	$decore = array('id'=>'','datetime'=>'','username'=>'','website'=>'','content'=>'','approved'=>(ml_is_comments_need_approval()?'pending':'approved'),'last_edited'=>'');
	foreach( $CommentsList as $line ){
		$line = @trim($line);
		if( is_json($line) ){
			$comment = json_decode($line, true);
			if( isset($comment['id']) ) {
				$comments[$comment['id']] = $decore;
				if( $comment['datetime'] ){ $comment['datetime'] = date( 'Y-m-d H:i:s', @convertToLocalTime( date( 'Y-m-d H:i:s', (int) $comment['datetime'] ), 'UTC' ) ); }
				if( isset($comment['last_edited']) ){ $comment['last_edited'] = ( (int) $comment['last_edited']==0 ?'':date( 'Y-m-d H:i:s', @convertToLocalTime( date( 'Y-m-d H:i:s', (int) $comment['datetime'] ), 'UTC' ) ) ); }
				$comments[$comment['id']] = $comment;
			}
		}
	}

	// Filter
	if( @strtolower($filter)=='approved') $comments=@array_filter($comments,function($v){ return @strtolower($v['approved'])=='approved'; });
	if( @strtolower($filter)=='pending')  $comments=@array_filter($comments,function($v){ return @strtolower($v['approved'])=='pending'; });
	if( @strtolower($filter)=='refused')  $comments=@array_filter($comments,function($v){ return @strtolower($v['approved'])=='refused'; });

	// Sorting
	if( @strtolower($sort)=='id') usort( $comments, function($a,$b){ return strcmp( $a['id'], $b['id'] ) ; } );
	if( @strtolower($sort)=='datetime') usort( $comments, function($a,$b){ return strcmp( $a['datetime'], $b['datetime'] ) ; } );
	if( @strtolower($sort)=='username' || @strtolower($sort)=='name' ) usort( $comments, function( $a, $b ){ return strcmp( $a['username'], $b['username'] ) ; } );
	if( @strtolower($sort)=='website') usort( $comments, function($a,$b){ return strcmp( $a['website'], $b['website'] ) ; } );
	if( @strtolower($sort)=='content') usort( $comments, function($a,$b){ return strcmp( $a['content'], $b['content'] ) ; } );
	if( @strtolower($sort)=='approved') usort( $comments, function($a,$b){ return strcmp( $a['approved'], $b['approved'] ) ; } );

	if( @strtolower($asc) == 'desc' || (is_bool($asc) && $asc===false ) ) $comments = array_reverse($comments);

	$comments2 = [];
	if( $comments ){
		foreach( $comments as $comment ){
			$comments2[$comment['id']] = $comment;
		}
	}

	return $comments2;

}


/**
 * Return blog comments
 *
 * @param string $post_slug
 * @return array
 */
function ml_get_latest_blog_comments( $post_slug, $qty=5, $filter='all' ){
	return @array_slice( ml_get_blog_comments( $post_slug, $sort='datetime', $asc='desc', $filter ), 0, ( (int)$qty==1 ? 1 : (int)$qty ) );
}


/**
 * Return blog Comment
 *
 * @param string $post_slug
 * @param string $comment_id
 * @return array|false
 */
function ml_get_blog_comment( $post_slug, $comment_id ){
	$comments = ml_get_blog_comments( $post_slug );
	if( $comments && isset($comments[$comment_id]) ) return $comments[$comment_id];
	return false;
}


/**
 * Add a blog comment
 *
 * @param string $post_slug
 * @param string $username
 * @param string $website
 * @param string $content
 * @param string $datetime
 *
 * @return bool
 */
function ml_add_blog_comment( $post_slug, $username, $website, $content, $datetime=false ){

	if( @empty( @cleanSlug((string) $post_slug ) ) ) return false;
	if( @empty(@cleanString($username)) || !is_scalar($username) ) return false; else $username = @cleanString( (string) $username );
	if( @empty(@cleanString($website)) || !is_scalar($website) ) return false; else $website = @cleanString( (string) $website );
	if( @empty(@cleanString($content)) || !is_scalar($content) ) return false; else $content = @cleanString( htmlentities( trim((string) $content), ENT_QUOTES, 'UTF-8' ) );

  $status = ml_is_comments_need_approval()?'pending':'approved';
  $created_at = date('Y-m-d H:i:s');

  $connection = @ml_get_db_connection();
  if (!$connection) {
    return false;
  }
  $b_post = ml_get_blog_post($post_slug);
  $qry = "INSERT INTO `blog_comments` (blog_id, blog_slug, username, website, content, status, created_at, updated_at)  VALUES ('".$b_post['id']."', '".$post_slug."', '".$username."', '".$website."', '".$content."', '".$status."', '".$created_at."', '')";

  $b_post = mysqli_query($connection,$qry);

	return (bool)  $b_post;

}


/**
 * Update blog comments
 *
 * @param string $post_slug
 * @param string $comment_id
 * @param string $key
 * @param string $value
 *
 * @return bool
 */
function ml_update_blog_comment( $post_slug, $comment_id, $key, $value ){

	$comments = ml_get_blog_comments( $post_slug );
	if(!isset($comments[$comment_id]) ) return false;

	$key = @strtolower( @preg_replace('/[^A-Za-z0-9_]/', '', (string) $key) );
	if( !$key ) return false;

	if( $comments && isset($comments[$comment_id][$key]) ){
		$comments[$comment_id][$key] = @cleanString($value);
		$comments[$comment_id]['last_edited'] = @date('Y-m-d H:i:s');
	}


	$whole_content='';
	foreach( $comments as $comment ){
		if(isset($comment['datetime'])) $comment['datetime']=(int)@convertTimeToUTC((string)$comment['datetime']);
		if(isset($comment['last_edited'])) $comment['last_edited']=(int)@convertTimeToUTC((string)$comment['last_edited']);
		$whole_content.= @json_encode($comment)."\n";
	}

	$filename = @trim ( @cleanSlug((string)$post_slug) ) . ".json";
	$filepath = ML_LITE_BLOG . DIRECTORY_SEPARATOR . ML_BLOG_COMMENT_DIR . DIRECTORY_SEPARATOR . $filename;

	return (bool) @file_put_contents( $filepath, $whole_content ) === true?true:(empty($whole_content)?true:false);

}


/**
 * Delete blog comment
 *
 * @param String $post_slug
 * @param string $comment_id
 *
 * @return bool
 */
function ml_delete_blog_comment( $post_slug, $comment_id ){

	$comments = ml_get_blog_comments( $post_slug );
	if(!isset($comments[$comment_id]) ) return false;

	if( $comments && isset($comments[$comment_id]) ) unset( $comments[$comment_id] );

	$whole_content = '';
	foreach( $comments as $comment ){
		$whole_content.= @json_encode($comment)."\n";
	}

	$filename = @trim ( @cleanSlug((string)$post_slug) ) . ".json";
	$filepath = ML_LITE_BLOG . DIRECTORY_SEPARATOR . ML_BLOG_COMMENT_DIR . DIRECTORY_SEPARATOR . $filename;

	return (bool) @file_put_contents( $filepath, $whole_content ) === true?true:(empty($whole_content)?true:false);

}


/**
 * Clear commnets
 *
 * @param string $post_slug
 * @return bool
 */
function ml_clear_blog_comment( $post_slug ){
	$filename = @trim ( @cleanSlug((string)$post_slug) ) . ".json";
	$filepath = ML_LITE_BLOG . DIRECTORY_SEPARATOR . ML_BLOG_COMMENT_DIR . DIRECTORY_SEPARATOR . $filename;
	@file_put_contents( $filepath, '' );
	return (bool) empty(@file_get_contents($filepath))?true:false;
}

// Pre-check cookie
ml_is_cookie_enabled();


?>
