<?php
/**
 * Theme Support
 *
 * @package Nectarina
 * @author Mildthemes
 * @link http://mildthemes.com
 * @version 0.0.1
 */

/* Basic Theme supports */

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'automatic-feed-links' ); // Add Feed Links Support
	add_theme_support( 'post-formats', array('standard','image','gallery','video')); // Add Post Formats Support
	add_theme_support( 'woocommerce' ); // Add Woocommerce Theme Support
}

/* Post Thumbnails */

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	//set_post_thumbnail_size( 			260,  146,  false ); 	// admin - featured image
	//add_image_size( '50x50', 			50,   50,   false ); 	// admin - lists
}

/* Custom Header */

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'custom-header', array(
		'default-image'          => '',
		'random-default'         => false,
		'width'                  => 0,
		'height'                 => 0,
		'flex-height'            => false,
		'flex-width'             => false,
		'default-text-color'     => '',
		'header-text'            => true,
		'uploads'                => true,
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	));
}
 
?>