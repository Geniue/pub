<?php

include(__DIR__."/lite_blog.php");

$dir = ML_GALLERY_DIR;


if ($handle = opendir( $dir )) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            ml_create_thumb( $dir . DIRECTORY_SEPARATOR . $entry );

        }
    }

    closedir($handle);
    
}

