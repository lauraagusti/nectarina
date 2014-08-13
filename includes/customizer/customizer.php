<?php

/**
 * Registers options with the Theme Customizer
 *
 * @param      object    $wp_customize    The WordPress Theme Customizer
 * @package    mildthemes
 * @version    0.0.1
 */
 
function mildthemes_register_theme_customizer( $wp_customize ) {
	
	$wp_customize->remove_section('header_image');	
	$wp_customize->remove_section('colors');
	$wp_customize->remove_section('static_front_page');
	$wp_customize->remove_section('title_tagline');

	require_once( LIBS_DIR .'/customizer/header-action-bar.php' );
	require_once( LIBS_DIR .'/customizer/general.php' );
	require_once( LIBS_DIR .'/customizer/logo.php' );
	require_once( LIBS_DIR .'/customizer/body-background.php' );
	require_once( LIBS_DIR .'/customizer/header.php' );
	require_once( LIBS_DIR .'/customizer/menu-styles.php' );
	require_once( LIBS_DIR .'/customizer/typography.php' );
	
} add_action( 'customize_register', 'mildthemes_register_theme_customizer' );

/* Changing CSS */

function mildthemes_customizer_css() {
?>

	<style type="text/css">
	 
	 <?php
	  
	 require_once( LIBS_DIR .'/customizer/customizer-css.php' );
	 
	 ?>
	    
	</style>
	 
<?php } add_action( 'wp_head', 'mildthemes_customizer_css');  ?>