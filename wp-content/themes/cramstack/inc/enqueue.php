<?php



function cramstack_css_js(){
//    wp_enqueue_style( $handle, $src, $deps, $ver, $media );
    wp_enqueue_style('favicon',get_template_directory_uri().'/assets/images/favicon-2.png',array(),'1.0.0','all');
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.css',array(),'1.0.0','all');
    wp_enqueue_style('default-css',get_template_directory_uri().'/assets/css/default.css',array(),'1.0.0','all');
    wp_enqueue_style('main-css',get_template_directory_uri().'/assets/css/style.css',array(),'1.0.0','all');
    wp_enqueue_style('responsive-css',get_template_directory_uri().'/assets/css/media.css',array(),'1.0.0','all');
}

add_action('wp_enqueue_scripts','cramstack_css_js');
