<?php

/**
 * Include necessary file
 */
 include __DIR__ . '/lite_blog.php';

 $hp= __DIR__.DIRECTORY_SEPARATOR.'homepage.php';
 $bp= __DIR__.DIRECTORY_SEPARATOR.'blog.php';
 $ap= __DIR__.DIRECTORY_SEPARATOR.'admin.php';

if( isset($_GET['page']) && !empty($_GET['page']) ){
    if(@strtolower($_GET['page'])=='admin'){
        if(file_exists($ap)&&is_file($ap)) include $ap;
        else if(file_exists($hp)&&is_file($hp)) include $hp;
    }else{
        if(file_exists($bp)&&is_file($bp)) {include $bp;}
        else if(file_exists($hp)&&is_file($hp))include $hp;
    }
}else{
    if(file_exists($hp)&&is_file($hp)) include $hp;
}

exit;

?>
