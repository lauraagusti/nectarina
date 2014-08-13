<?php

	/* Menu styles section */
	$wp_customize->add_section( 'mildthemes_menu_styles_section' , array(
	    'title'      => __('Menu styles'),
	    'priority'   => 5,
	) );

		//Action Bar Menu
		$wp_customize->add_setting(
			'mildthemes_menu_styles_action_bar',
			array(
				'default'     => 'block'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'menu_styles_action_bar',
				array(
				    'label'      => __( 'Action Bar Menu', 'mildthemes' ),
				    'section'    => 'mildthemes_menu_styles_section',
				    'settings'   => 'mildthemes_menu_styles_action_bar'
				)
			)
		);		

?>