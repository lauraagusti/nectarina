<?php 
/**
 * Theme Functions
 *
 * @package Nectarina
 * @author Mildthemes
 * @link http://mildthemes.com
 */
 
define( 'THEME_DIR', get_template_directory() );
define( 'THEME_URI', get_template_directory_uri() );

define( 'THEME_NAME', 'Nectarina' );
define( 'THEME_VERSION', '0.1' );

define( 'LIBS_DIR', THEME_DIR. '/includes' );
define( 'LIBS_URI', THEME_URI. '/includes' );
define( 'LANG_DIR', THEME_DIR. '/languages' );

/* Loads Theme Functions */

// Theme Support
require_once( LIBS_DIR .'/theme-support.php' );

// Customizer
require_once( LIBS_DIR .'/customizer.php' );

// Widgets
require_once( LIBS_DIR .'/widgets.php' );
 
?>