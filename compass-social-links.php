<?php

/*
Plugin Name: compass-social-links
Plugin URI: coinso.com  
Description: Add social links to the end of a post or a pages
Version: 1.0.0
Author: ido barnea
Author URI: http://barbareshet.co.il
License: GPLv2
Textdomain: csl_domain
*/

if(!defined( 'ABSPATH')){
    exit;
}

//Global Option Variable

$csl_options = get_option('csl_settings');

// Load Scripts
require_once(plugin_dir_path(__FILE__) . 'inc/compass-social-links-scripts.php');

// Load content
require_once(plugin_dir_path(__FILE__) . 'inc/compass-social-links-content.php');

// Load Settings, only if admin

if(is_admin()){
require_once(plugin_dir_path(__FILE__) . 'inc/compass-social-links-settings.php');
}