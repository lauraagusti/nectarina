<?php
/**
 * Header
 *
 * @package Nectarina
 * @author Mildthemes
 * @link http://mildthemes.com
 * @version 0.0.1
 */
 ?>

<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>

	<!-- Site Title -->
	<title><?php bloginfo('name') ?><?php wp_title(); ?></title>
    
    <!-- Responsive Mode -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
    <!-- Including CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    
    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<!-- WordPress Bar -->
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >
	
	<div id="body-background-overlay"></div>
	
	<div id="body">

		<div id="action-bar">
		
			<div class="wrapper">
				
				<div class="action-bar-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'action-bar-menu' ) ); ?>
				</div>
				
				<div class="searchbox">
					<?php get_search_form(); ?>
				</div>
				
				<div class="social">
					<?php get_search_form(); ?>
				</div>
			
			</div>
		
		</div>
	
		<header>
		
			<div class="wrapper">
		
				<div id="logo"></div>	
			
			</div>	
		
		</header>
		
		<!-- Starts main-container -->
		<div id="main-container">