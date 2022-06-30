<?php

if( !defined('ML_LITE_BLOG') ) die();

$footer_path = dirname(__DIR__). DIRECTORY_SEPARATOR. BLOG_DIR_NAME. DIRECTORY_SEPARATOR. "blog-footer.php";


if( file_exists( $footer_path ) ) include( $footer_path );


?>
