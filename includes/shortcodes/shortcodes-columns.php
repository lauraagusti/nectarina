<?php

 /* Grids */

function mildthemes_grids_sc($user_atts, $content = null, $tag) {
	$atts = shortcode_atts(
		array(
			'color'      => '#fff', 		// Choose a Background Color: Hexagesimal color | Color names | Transparent			
			'overlay'    => '0',			// Color layer with opacity. In percentages	
			'padding'    => '0px',			// Padding Top and Bottom. In pixels | In percentage | In em
			'height'     => 'auto',			// Auto | Fullscreen			
			), $user_atts );
	
	
	// Height
	if(isset($atts['height']) && $atts['height'] == 'fullscreen'){		
			$atts['height'] = '100vh';
	} else {		
		$atts['height'] = 'auto';		
	}

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
	
	$bgcolor = mildthemes_hextorgb(esc_attr($atts['color']), esc_attr($atts['overlay']));
	$column_style = 'background-color: '.$bgcolor.'; padding-top: '. esc_attr($atts['padding']) .'; padding-bottom: '. esc_attr($atts['padding']) .';  min-height: '. esc_attr($atts['height']) .';';
      
    return '<div class="col ' . $grid . '" style="' . $column_style . '">' . do_shortcode( mildthemes_shortcode_unautop(wp_kses_post($content) ) ) . '</div>';
 
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

?>