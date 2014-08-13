<?php

	/* Logo section */
	$wp_customize->add_section( 'mildthemes_logo_section' , array(
	    'title'      => __('Site Logo'),
	    'priority'   => 3,
	) );

		//Logo
		$wp_customize->add_setting(
			'mildthemes_logo_logo',
			array(
				'default'     => ''
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'logo_logo',
				array(
				    'label'      => __( 'Logo', 'mildthemes' ),
				    'section'    => 'mildthemes_logo_section',
				    'settings'   => 'mildthemes_logo_logo',
				    'context'    => 'your_setting_context'
				)
			)
		);	

		//Logo width
		$wp_customize->add_setting(
			'mildthemes_logo_logo_width',
			array(
				'default'     => '200px'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'logo_logo_width',
				array(
				    'label'      => __( 'Logo width', 'mildthemes' ),
				    'section'    => 'mildthemes_logo_section',
				    'settings'   => 'mildthemes_logo_logo_width',
				    'type'       => 'text'
				)
			)
		);

		//Logo height
		$wp_customize->add_setting(
			'mildthemes_logo_logo_height',
			array(
				'default'     => '100px'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'logo_logo_height',
				array(
				    'label'      => __( 'Logo height', 'mildthemes' ),
				    'section'    => 'mildthemes_logo_section',
				    'settings'   => 'mildthemes_logo_logo_height',
				    'type'       => 'text'
				)
			)
		);

?>