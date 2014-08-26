<?php
/**
 * Shortcodes
 *
 * @package Nectarina
 * @author Mildthemes
 * @link http://mildthemes.com
 */
 
 
 /* Remove Autoformat */ 
 
function mildthemes_shortcode_unautop( $content ) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace( '#^<\/p>|^<br \/>|<p>$#', '', $content );
	return $content;
}


 /* Including shortcodes */ 
 
include( LIBS_DIR .'/shortcodes/shortcodes-section.php' );
include( LIBS_DIR .'/shortcodes/shortcodes-columns.php' );

 
/* Clear */

function mildthemes_clear_sc() {      
    return '<div class="clear"></div>'; 
}

add_shortcode( 'clear', 'mildthemes_clear_sc' );

/* Divider */

function mildthemes_divider_sc() {      
    return '<div class="divider modern"></div>'; 
}

add_shortcode( 'divider', 'mildthemes_divider_sc' );

?>