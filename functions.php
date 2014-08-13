<?php 
/**
 * Theme Functions
 *
 * @package Nectarina
 * @author Mildthemes
 * @link http://mildthemes.com
 * @version 0.0.1
 */
 
define( 'THEME_DIR', get_template_directory() );
define( 'THEME_URI', get_template_directory_uri() );

define( 'THEME_NAME', 'Nectarina' );
define( 'THEME_VERSION', '0.0.1' );

define( 'LIBS_DIR', THEME_DIR. '/includes' );
define( 'LIBS_URI', THEME_URI. '/includes' );
define( 'LANG_DIR', THEME_DIR. '/languages' );

/* Loads Theme Functions */

require_once( LIBS_DIR .'/theme-support.php' );
require_once( LIBS_DIR .'/customizer/customizer.php' );
require_once( LIBS_DIR .'/widgets.php' );

/* Register Menus */
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'action-bar-menu' => __( 'Action Bar Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/* Hexadecimal to RGBA */

function mildthemes_hextorgb($hex, $opacity = "100") {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }

	if ($opacity == "") {
		echo 'rgb(' . $r . ',' . $g . ',' . $b . ')';
	} else {
		echo 'rgba(' . $r . ',' . $g . ',' . $b . ',' . $opacity / 100 . ')';
	}
}
 
?>