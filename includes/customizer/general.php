<?php

	/* General section */
	$wp_customize->add_section( 'mildthemes_general_section' , array(
	    'title'      => __('General'),
	    'priority'   => 2,
	) );

		//Favicon
		$wp_customize->add_setting(
			'mildthemes_general_favicon',
			array(
				'default'     => ''
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'general_favicon',
				array(
				    'label'      => __( 'Favicon', 'mildthemes' ),
				    'section'    => 'mildthemes_general_section',
				    'settings'   => 'mildthemes_general_favicon'
				)
			)
		);		

?>