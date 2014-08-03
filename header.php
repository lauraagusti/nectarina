<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>

	<!-- Site Title -->
	<title><?php bloginfo('name') ?><?php wp_title(); ?></title>
    
    <!-- Responsive Mode -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- WordPress Bar -->
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

	<header>
	
	</header>
	
	<!-- Starts main-container -->
	<div id="main-container">