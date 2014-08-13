<?php

	/* Action bar section */
	$wp_customize->add_section( 'mildthemes_action_bar_section' , array(
	    'title'      => __('Action bar','mildthemes'),
	    'priority'   => 4,
	) );

		//Activate Action Bar
		$wp_customize->add_setting(
			'mildthemes_action_bar_activate',
			array(
				'default'     => 'block'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'action_bar_activate',
				array(
				    'label'      => __( 'Show Action bar', 'mildthemes' ),
				    'section'    => 'mildthemes_action_bar_section',
				    'settings'   => 'mildthemes_action_bar_activate',
				    'type'       => 'checkbox',
				    'priority'   => 1
				)
			)
		);	

		//Activate Menu in Action Bar
		$wp_customize->add_setting(
			'mildthemes_action_bar_menu',
			array(
				'default'     => 'block'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'action_bar_menu',
				array(
				    'label'      => __( 'Show Menu', 'mildthemes' ),
				    'section'    => 'mildthemes_action_bar_section',
				    'settings'   => 'mildthemes_action_bar_menu',
				    'type'       => 'checkbox'
				)
			)
		);	

		//Activate Searchbox in Action Bar
		$wp_customize->add_setting(
			'mildthemes_action_bar_searchbox',
			array(
				'default'     => 'block'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'action_bar_searchbox',
				array(
				    'label'      => __( 'Show Search box', 'mildthemes' ),
				    'section'    => 'mildthemes_action_bar_section',
				    'settings'   => 'mildthemes_action_bar_searchbox',
				    'type'       => 'checkbox'
				)
			)
		);	

		//Activate Social networks in Action Bar
		$wp_customize->add_setting(
			'mildthemes_action_bar_social',
			array(
				'default'     => 'block'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'action_bar_social',
				array(
				    'label'      => __( 'Show Social networks', 'mildthemes' ),
				    'section'    => 'mildthemes_action_bar_section',
				    'settings'   => 'mildthemes_action_bar_social',
				    'type'       => 'checkbox'
				)
			)
		);	
	
		//Background Color
		$wp_customize->add_setting(
			'mildthemes_action_bar_bg',
			array(
				'default'     => '#000'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'action_bar_bg',
				array(
				    'label'      => __( 'Background Color', 'mildthemes' ),
				    'section'    => 'mildthemes_action_bar_section',
				    'settings'   => 'mildthemes_action_bar_bg',
				    'priority'   => 2
				)
			)
		);	

		//Background Overlay
		$wp_customize->add_setting(
			'mildthemes_action_bar_overlay',
			array(
				'default'     => '100'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'action_bar_overlay',
				array(
				    'label'      => __( 'Background Overlay (Ex. 50%)', 'mildthemes' ),
				    'section'    => 'mildthemes_action_bar_section',
				    'settings'   => 'mildthemes_action_bar_overlay',
				    'type'       => 'text',
				    'priority'   => 3
				)
			)
		);


		//Border Bottom Color
		$wp_customize->add_setting(
			'mildthemes_action_bar_border_color',
			array(
				'default'     => '#000'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'action_bar_border_color',
				array(
				    'label'      => __( 'Border Bottom Color', 'mildthemes' ),
				    'section'    => 'mildthemes_action_bar_section',
				    'settings'   => 'mildthemes_action_bar_border_color',
				    'priority'   => 4,
				)
			)
		);

		//Border Overlay
		$wp_customize->add_setting(
			'mildthemes_action_bar_border_overlay',
			array(
				'default'     => '100'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'action_bar_border_overlay',
				array(
				    'label'      => __( 'Border Bottom Overlay (Ex. 50%)', 'mildthemes' ),
				    'section'    => 'mildthemes_action_bar_section',
				    'settings'   => 'mildthemes_action_bar_border_overlay',
				    'type'       => 'text',
				    'priority'   => 5,
				)
			)
		);

		//Text Color
		$wp_customize->add_setting(
			'mildthemes_action_bar_text_color',
			array(
				'default'     => 'white'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'action_bar_text_color',
				array(
				    'label'      => __( 'Text Color', 'mildthemes' ),
				    'section'    => 'mildthemes_action_bar_section',
				    'settings'   => 'mildthemes_action_bar_text_color',
				    'priority'   => 6
				)
			)
		);

		//Action Bar Height
		$wp_customize->add_setting(
			'mildthemes_action_bar_height',
			array(
				'default'     => '40px'
			)
		);
	
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'action_bar_height',
				array(
				    'label'      => __( 'Height', 'mildthemes' ),
				    'section'    => 'mildthemes_action_bar_section',
				    'settings'   => 'mildthemes_action_bar_height',
				    'type'       => 'text',
				    'priority'   => 7
				)
			)
		);

?>