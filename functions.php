<?php

//* Load genesis init file
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Child Theme' );
define( 'CHILD_THEME_URL', 'http://example.com' );
define( 'CHILD_THEME_VERSION', '1.0.0' );




/******************************************

MY CUSTOM FUNCTIONS

*******************************************/


//* ADD HTML5 MARKUP STRUCTURE
add_theme_support( 'html5' );


//** ADD PARENT STYLES
add_action( 'wp_enqueue_scripts', 'wpsites_genesis_parent_theme_styles' );
function wpsites_genesis_parent_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

//** ADD BOOTSTRAP
add_action( 'wp_enqueue_scripts', 'custom_load_bootstrap' );
function custom_load_bootstrap() {
    wp_enqueue_style( 'bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
}


//** ADD FONT AWESOME
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
wp_enqueue_style( 'load-fa', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}


//** REMOVE TEMPLATE WRAPS
add_theme_support( 'genesis-structural-wraps', array(
	//'header',
	'menu-primary',
	'menu-secondary',
	'site-inner',
	'footer-widgets',
	'footer',
) );















