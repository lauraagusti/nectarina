<?php
/**
 * Shortcodes
 *
 * @package Nectarina
 * @author Mildthemes
 * @link http://mildthemes.com
 */
 
 include( LIBS_DIR .'/shortcodes/shortcodes-section.php' );


 /* Remove Autoformat */ 
 
function mildthemes_remove_wpautop( $content ) {
	$content = do_shortcode( shortcode_unautop( $content ) );
	$content = preg_replace( '#^<\/p>|^<br \/>|<p>$#', '', $content );
	return $content;
}
 
 
 /* Grids */

function mildthemes_grids_sc($atts, $content = null, $tag) {
	
	switch( $tag ) {
		case "one":
		    $grid = 'one';
		    break;
		case "one_second":
		    $grid = 'one-second';
		    break;
		case "one_third":
		    $grid = 'one-third';
		    break;
		case "one_fourth":
		    $grid = 'one-fourth';
		    break;
		case "one_fifth":
		    $grid = 'one-fifth';
		    break;
		case "one_sixth":
		    $grid = 'one-sixth';
		    break; 
		case "two_third":
		    $grid = 'two-third';
		    break;   
		case "three_fourth":
		    $grid = 'three-fourth';
		    break; 
		case "five_sixth":
		    $grid = 'five-sixth';
		    break; 
		default:
			$grid = '';
    }
      
    return '<div class="col ' . $grid . '">' . wp_kses_post( do_shortcode( mildthemes_remove_wpautop($content) ) ) . '</div>';
 
}

add_shortcode( 'one', 'mildthemes_grids_sc' );
add_shortcode( 'one_second', 'mildthemes_grids_sc' );
add_shortcode( 'one_third', 'mildthemes_grids_sc' );
add_shortcode( 'one_fourth', 'mildthemes_grids_sc' );
add_shortcode( 'one_fifth', 'mildthemes_grids_sc' );
add_shortcode( 'one_sixth', 'mildthemes_grids_sc' );
add_shortcode( 'two_third', 'mildthemes_grids_sc' );
add_shortcode( 'three_fourth', 'mildthemes_grids_sc' );
add_shortcode( 'five_sixth', 'mildthemes_grids_sc' );


 /* Clear */

function mildthemes_clear_sc() {      
    return '<div class="clear"></div>'; 
}

add_shortcode( 'clear', 'mildthemes_clear_sc' );


 /* Sections 
function mildthemes_section_sc( $user_atts , $content = null ) {
	$atts = shortcode_atts(
		array(
			'type'       => 'image', 		// all: image | video | color | slideshow
			'color'      => '#fff', 		// all: Hexagesimal color | Color names | Transparent
			'image'      => 'http://',		// Image type: Retrieve the image URL
			'video'      => 'http://',		// Video type: Retrieve the video URL
			'seconds'    => '2',			// Slideshow type: Duration of one [slide]
			'navigation' => '0',			// Slideshow type: Choose between different navigation styles(1,2,3,4) or disable(0)
			'sound'      => '0',			// Video type: If is active(1) the video sounds. If not, video will be muted
			'parallax'   => '0',			// all: When is active(1) enables Parallax.
			'overlay'    => '50',			// all: Adjust opacity of the overlay layer
			'padding'    => '20',			// all: Change the padding-top and padding-bottom
			'width'		 => '',				// all: When width='fullwidth' the section is fluid.If is undefined, fullwidth is disabled.
			'height'     => 'auto',			// all: When height='fullscreen' the section is fullweight.
			), $user_atts );
	

	//width
	if(isset($atts['width']) && $atts['width'] == 'fullwidth') { 
		
			$width = 'width: 100%';
			$fullwidth_class = ' fullwidth';
		} else {
			$width = '';
			$fullwidth_class = '';
		}

	//Height
	if(isset($atts['height']) && $atts['height'] == 'fullscreen') { 
			$atts['height'] = '100vh';
		}

	//Sound
	if(isset($atts['sound']) && $atts['sound'] == 1) { 
			$atts['sound'] = '';
		} else { 
			$atts['sound'] = ' muted'; 
		}

	// Section Image Background
	if(isset($atts['type']) && $atts['type'] == 'image') {
		
		return '<section class="' . esc_attr($atts['type']) . '" style="background-color: '. esc_attr($atts['color']) .'; background-image: url('. esc_attr( esc_url($atts['image'])) .'); height: '. esc_attr($atts['height']) .'";><div class="bgoverlay" style="background-color:' . mildthemes_hextorgb(esc_attr($atts['color']), esc_attr($atts['overlay'])) . '"></div><div class="wrapper' . $fullwidth_class . '" style="padding:'. esc_attr($atts['padding']) .'px 0px; '. $width . ';">' . wp_kses_post( do_shortcode( mildthemes_remove_wpautop($content) ) ) . '</div></section>';
	
	} 
	
	// Section Video Background
	else if(isset($atts['type']) && $atts['type'] == 'video') {

		return '<section class="' . esc_attr($atts['type']) . '" style="background-color: '. esc_attr($atts['color']) .'; height: '. esc_attr($atts['height']) .';"><video autoplay loop' . esc_attr($atts['sound']) .'><source src="'. esc_attr( esc_url($atts['video'])) .'" type="video/mp4"></video><div class="bgoverlay" style="background-color:' . mildthemes_hextorgb(esc_attr($atts['color']), esc_attr($atts['overlay'])) . '"></div><div class="wrapper" style="padding:'. esc_attr($atts['padding']) .'px 0px;">' . wp_kses_post( do_shortcode( mildthemes_remove_wpautop($content) ) ) . '</div></section>';
	
	}

}
add_shortcode( 'section', 'mildthemes_section_sc' ); */

?>