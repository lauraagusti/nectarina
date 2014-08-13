<?php

	/* Header section */
	$wp_customize->add_section( 'mildthemes_header_section' , array(
	    'title'      => __('Header'),
	    'priority'   => 3,
	) );

		//Show header
		$wp_customize->add_setting(
			'mildthemes_header_activate',
			array(
				'default'     => 'block'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'header_activate',
				array(
				    'label'      => __( 'Show Header', 'mildthemes' ),
				    'section'    => 'mildthemes_header_section',
				    'settings'   => 'mildthemes_header_activate',
				    'type'       => 'checkbox',
				    'priority'   => 1,
				)
			)
		);

		//Fixed or scroll
		$wp_customize->add_setting(
			'mildthemes_header_position',
			array(
				'default'     => 'static'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'header_position',
				array(
				    'label'      => __( 'Header position', 'mildthemes' ),
				    'section'    => 'mildthemes_header_section',
				    'settings'   => 'mildthemes_header_position',
				    'type'       => 'select',
				    'priority'   => 2,
				    'choices'    => array(
										'fixed'  => 'Fixed',
										'static' => 'Static',
									),
				)
			)
		);

		//Background Color
		$wp_customize->add_setting(
			'mildthemes_header_bg',
			array(
				'default'     => '#000'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'header_bg',
				array(
				    'label'      => __( 'Background Color', 'mildthemes' ),
				    'section'    => 'mildthemes_header_section',
				    'settings'   => 'mildthemes_header_bg',
				    'priority'   => 4,
				)
			)
		);	

		//Border Bottom Color
		$wp_customize->add_setting(
			'mildthemes_header_border_color',
			array(
				'default'     => '#000'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'header_border_color',
				array(
				    'label'      => __( 'Border Bottom Color', 'mildthemes' ),
				    'section'    => 'mildthemes_header_section',
				    'settings'   => 'mildthemes_header_border_color',
				    'priority'   => 6,
				)
			)
		);

		//Border Overlay
		$wp_customize->add_setting(
			'mildthemes_header_border_overlay',
			array(
				'default'     => '100'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'header_border_overlay',
				array(
				    'label'      => __( 'Border Bottom Overlay (Ex. 50%)', 'mildthemes' ),
				    'section'    => 'mildthemes_header_section',
				    'settings'   => 'mildthemes_header_border_overlay',
				    'type'       => 'text',
				    'priority'   => 7,
				)
			)
		);

		//Background Overlay
		$wp_customize->add_setting(
			'mildthemes_header_overlay',
			array(
				'default'     => '100'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'header_overlay',
				array(
				    'label'      => __( 'Background Overlay (Ex. 50%)', 'mildthemes' ),
				    'section'    => 'mildthemes_header_section',
				    'settings'   => 'mildthemes_header_overlay',
				    'type'       => 'text',
				    'priority'   => 5,
				)
			)
		);

		//Header Padding
		$wp_customize->add_setting(
			'mildthemes_header_padding',
			array(
				'default'     => '10px'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'header_padding',
				array(
				    'label'      => __( 'Padding', 'mildthemes' ),
				    'section'    => 'mildthemes_header_section',
				    'settings'   => 'mildthemes_header_padding',
				    'type'       => 'text',
				    'priority'   => 8,
				)
			)
		);

?>