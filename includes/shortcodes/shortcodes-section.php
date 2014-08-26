<?php

/* Sections */
function mildthemes_section_sc( $user_atts , $content = null ) {
	$atts = shortcode_atts(
		array(
			'type'       => 'wrapped', 		// Wrapped | fullwidth
			'background' => 'color',		// color | image | video | slideshow
			'color'      => '#fff', 		// Choose a Background Color: Hexagesimal color | Color names | Transparent			
			'overlay'    => '50',			// Color layer with opacity. In percentages	
			'padding'    => '0px',			// Padding Top and Bottom. In pixels | In percentage | In em	
			'height'     => 'auto',			// Auto | Fullscreen
			'image'      => 'http://',		// Image: image source or Image Attachment ID
			'parallax'   => 'no',			// Image: Yes | No. Active or not the parallax effect in the image
			'video'      => 'http://',		// Video: Video source
			'poster'      => 'http://',		// Video: Fixed Image source
			'sound'      => 'no',			// Video: Yes | No. Choose if the video sounds
			'images'	 => 'http://',		// Slideshow: Images sources separated with ','. Can retrieve URLs or Image attachment IDs
			'seconds'    => '2',			// Slideshow: Duration of each image			
			), $user_atts );
	

	// Type
	if(isset($atts['type'])){
		if($atts['type'] != 'fluid') {
			$atts['type'] = 'wrapped';
		}
	}
	
	// Height
	if(isset($atts['height']) && $atts['height'] == 'fullscreen'){		
			$atts['height'] = '100vh';
	} else {		
		$atts['height'] = 'auto';		
	}
	
	// Parallax
	if(isset($atts['parallax'])) {
	 	
	 	if ($atts['parallax'] == 'yes') {
	
		} else if ($atts['parallax'] == 'no') {
			
		}
		
	} else {
		
	}

	// Sound	
	if(isset($atts['sound'])) {	 	
	 	if ($atts['sound'] == 'yes') {
	 		$atts['sound'] = '';
		} else if ($atts['sound'] == 'no') {
			$atts['sound'] = ' muted';
		}
	} else {
		$atts['sound'] = ' muted';
	}
	
	// Background	
	if(isset($atts['background'])) {

		$section_style = 'background-color: '. mildthemes_hextorgb(esc_attr($atts['color']), esc_attr($atts['overlay'])) .'; min-height: '. esc_attr($atts['height']) .';';		
		$wrapper_style = 'padding: '. esc_attr($atts['padding']) .' 0px;';
		$overlay_style = 'background-color:' . mildthemes_hextorgb(esc_attr($atts['color']), esc_attr($atts['overlay'])) . ';';
	 	
	 	if ($atts['background'] == 'color') {
	 		
	 		return '<section class="' . esc_attr($atts['background']) . '" style="'. $section_style .'"><div class="wrapper '. esc_attr($atts['type']) .'" style="'. $wrapper_style .'">' . do_shortcode( mildthemes_shortcode_unautop(wp_kses_post($content) ) ) . '<div class="clear"></div></div></section>';
	
		} else if ($atts['background'] == 'image') {
			
			$section_image_style = 'background-image: url('. esc_attr( esc_url($atts['image'])) .');';
			
			return '<section class="' . esc_attr($atts['background']) . '" style="'. $section_style . $section_image_style . '"><div class="bgoverlay" style="' . $overlay_style .'"></div><div class="wrapper '. esc_attr($atts['type']) .'" style="'. $wrapper_style .'">' . do_shortcode( mildthemes_shortcode_unautop(wp_kses_post($content) ) ) . '<div class="clear"></div></div></section>';
			
		} else if ($atts['background'] == 'video') {
			
			$section_video_style = 'background-image: url('. esc_attr( esc_url($atts['poster'])) .');';
			
			return '<section class="' . esc_attr($atts['background']) . '" style="'. $section_style . $section_video_style . '"><video autoplay loop' . esc_attr($atts['sound']) .'><source src="'. esc_attr( esc_url($atts['video'])) .'" type="video/mp4"></video><div class="bgoverlay" style="' . $overlay_style .'"></div><div class="wrapper '. esc_attr($atts['type']) .'" style="'. $wrapper_style .'">' .  do_shortcode( mildthemes_shortcode_unautop(wp_kses_post($content) ) ) . '<div class="clear"></div></div></section>';
			
		} else if ($atts['background'] == 'slideshow') {
			$images = ''; 
			$images_without_space = str_replace(' ', '', $atts['images']);
			$images_array = explode(",",$images_without_space);
			$i = 0;
			while ($i < sizeof($images_array)) {
				$images = $images . '<img src="' . $images_array[$i] . '" />';
				$i++;
			}


			return '<section class="' . esc_attr($atts['background']) . '" style="'. $section_style . '"><div class="bgoverlay" style="' . $overlay_style .'"></div><div class="slides">'. $images .'</div><div class="wrapper '. esc_attr($atts['type']) .'" style="'. $wrapper_style .'">' . do_shortcode( mildthemes_shortcode_unautop(wp_kses_post($content) ) ) . '<div class="clear"></div></div></section>';
			
		}
		
	} else {
		
		return '<section><div class="wrapper">' . do_shortcode( mildthemes_shortcode_unautop(wp_kses_post($content) ) ) . '<div class="clear"></div></div></section>';
		
	}

}
add_shortcode( 'section', 'mildthemes_section_sc' );

?>