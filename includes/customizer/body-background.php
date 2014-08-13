<?php

	/* General section */
	$wp_customize->add_section( 'mildthemes_body_bg_section' , array(
	    'title'      => __('Body Background'),
	    'priority'   => 2,
	) );

		//Body Background
		$wp_customize->add_setting(
			'mildthemes_body_bg',
			array(
				'default'     => '#000'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'body_bg',
				array(
				    'label'      => __( 'Background Color', 'mildthemes' ),
				    'section'    => 'mildthemes_body_bg_section',
				    'settings'   => 'mildthemes_body_bg',
				    'priority'   => 1
				)
			)
		);	
		
		//Background Color Overlay
		$wp_customize->add_setting(
			'mildthemes_body_bg_overlay',
			array(
				'default'     => '40'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'body_bg_overlay',
				array(
				    'label'      => __( 'Background Color Overlay (Ex. 50%)', 'mildthemes' ),
				    'section'    => 'mildthemes_body_bg_section',
				    'settings'   => 'mildthemes_body_bg_overlay',
				    'type'       => 'text'
				)
			)
		);

		//Background Image
		$wp_customize->add_setting(
			'mildthemes_body_bg_image',
			array(
				'default'     => ''
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'body_bg_image',
				array(
				    'label'      => __( 'Background Image', 'mildthemes' ),
				    'section'    => 'mildthemes_body_bg_section',
				    'settings'   => 'mildthemes_body_bg_image'
				)
			)
		);	

		//Background Image Repeat
		$wp_customize->add_setting(
			'mildthemes_body_bg_image_repeat',
			array(
				'default'     => 'no_repeat'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'body_bg_image_repeat',
				array(
				    'label'      => __( 'Background Image Repeat', 'mildthemes' ),
				    'section'    => 'mildthemes_body_bg_section',
				    'settings'   => 'mildthemes_body_bg_image_repeat',
				    'type'       => 'select',
				    'choices'    => array(
										'repeat'  => 'Repeat',
										'repeat_x' => 'Repeat X',
										'repeat_y' => 'Repeat Y',
										'no_repeat' => 'No Repeat',
									),
				)
			)
		);

?>