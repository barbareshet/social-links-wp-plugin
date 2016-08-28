<?php

if(!defined( 'ABSPATH')){
    exit;
}
//Add plugin scripts and styles

function csl_add_scripts(){
    wp_enqueue_style('csl-font-awesome', plugins_url() . '/compass-social-links/css/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('csl-main-style', plugins_url() . '/compass-social-links/css/csl_style.css', 'csl_domain', 15);
    wp_enqueue_script('csl-main-script', plugins_url() . '/compass-social-links/js/csl_main.js');
}
add_action('wp_enqueue_scripts', 'csl_add_scripts');
