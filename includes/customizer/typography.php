<?php

	/* Typography section */
	$wp_customize->add_section( 'mildthemes_typography_section' , array(
	    'title'      => __('Typography'),
	    'priority'   => 5,
	) );

		//Text Color
		$wp_customize->add_setting(
			'mildthemes_typography_text_color',
			array(
				'default'     => '#000'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'typography_text_color',
				array(
				    'label'      => __( 'Text Color', 'mildthemes' ),
				    'section'    => 'mildthemes_typography_section',
				    'settings'   => 'mildthemes_typography_text_color',
				    'priority'   => 1
				)
			)
		);	
		
		//Text Size
		$wp_customize->add_setting(
			'mildthemes_typography_text_size',
			array(
				'default'     => '16px'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'typography_text_size',
				array(
				    'label'      => __( 'Text Size', 'mildthemes' ),
				    'section'    => 'mildthemes_typography_section',
				    'settings'   => 'mildthemes_typography_text_size',
				    'priority'   => 2
				)
			)
		);

?>