<?php 
header( 'Content-type: text/css;' );
require_once(substr( dirname( __FILE__ ), 0, strpos(dirname( __FILE__ ), 'wp-content' )) . 'wp-load.php');
?>

/* Body */
body { 
	color: <?php echo get_theme_mod( 'mildthemes_typography_text_color'); ?>;
	font-size: <?php echo get_theme_mod( 'mildthemes_typography_text_size' ); ?>;
	font-family: 'Open Sans', sans-serif;
	font-weight: 300;
	<?php
	if (get_theme_mod( 'mildthemes_body_bg_image' )) {
	?>
		background: url("<?php echo get_theme_mod( 'mildthemes_body_bg_image' ); ?>") center center fixed;
	<?php } ?>
	<?php if(get_theme_mod( 'mildthemes_body_bg_image_repeat' ) == 'repeat') { ?>
	background-repeat: repeat;
	<?php } else if(get_theme_mod( 'mildthemes_body_bg_image_repeat' ) == 'repeat_x') { ?>
	background-repeat: repeat-x;
	<?php } else if(get_theme_mod( 'mildthemes_body_bg_image_repeat' ) == 'repeat_y') { ?>
	background-repeat: repeat-y;
	<?php } else if(get_theme_mod( 'mildthemes_body_bg_image_repeat' ) == 'no_repeat') { ?>
	background-repeat: no-repeat;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	<?php } ?>
}

p {
	color: <?php echo get_theme_mod( 'mildthemes_typography_text_color' ); ?>;
	font-size: <?php echo get_theme_mod( 'mildthemes_typography_text_size' ); ?>;
	font-family: 'Open Sans', sans-serif;
	font-weight: 300;
	line-height: 1.7;
}

/* Body Overlay */
#body-background-overlay {
	content: ""; 
	background-color: <?php echo mildthemes_hextorgb(get_theme_mod( 'mildthemes_body_bg' ), get_theme_mod( 'mildthemes_body_bg_overlay' )); ?>;
	width: 100%;
	height: 100%;
}

/* Action Bar */
#action-bar {
	background-color: <?php echo mildthemes_hextorgb(get_theme_mod( 'mildthemes_action_bar_bg' ), get_theme_mod( 'mildthemes_action_bar_overlay' )); ?>; 
	color: <?php echo get_theme_mod( 'mildthemes_action_bar_text_color' ); ?>; 
	height: <?php echo get_theme_mod( 'mildthemes_action_bar_height' ); ?>;
	<?php if( get_theme_mod( 'mildthemes_action_bar_activate' ) == '') { ?>
	display: none;
	<?php } else { ?>
	display: block;
	<?php } ?>
}


<?php if( get_theme_mod( 'mildthemes_action_bar_searchbox' ) == '') { ?>
#action-bar .searchbox { display: none; }
<?php } ?>

<?php if( get_theme_mod( 'mildthemes_action_bar_social' ) == '') { ?>
#action-bar .social { display: none; }
<?php } ?>

<?php if( get_theme_mod( 'mildthemes_action_bar_menu' ) == '') { ?>
#action-bar .action-bar-menu { display: none; }
<?php } ?>

/* Header Customization */
header {
	<?php if( get_theme_mod( 'mildthemes_action_bar_activate' ) == '') { ?>
	margin-top: 0;
	<?php } else { ?>
	margin-top: <?php echo get_theme_mod( 'mildthemes_action_bar_height' ); ?>;
	<?php } ?>
	background-color: <?php echo mildthemes_hextorgb(get_theme_mod( 'mildthemes_header_bg' ), get_theme_mod( 'mildthemes_header_overlay' )); ?>; 
	border-bottom: 1px solid <?php echo mildthemes_hextorgb(get_theme_mod( 'mildthemes_header_border_color' ), get_theme_mod( 'mildthemes_header_border_overlay' )); ?>;
	<?php if( get_theme_mod( 'mildthemes_header_position' ) == 'fixed') { ?>
	position: fixed;
	<?php } else { ?>
	position: static;
	<?php } ?>
	<?php if( get_theme_mod( 'mildthemes_header_activate' ) == '') { ?>
	display: none;
	<?php } else { ?>
	display: block;
	<?php } ?>
}

/* Main Container */
#main-container {
	<?php if(get_theme_mod( 'mildthemes_header_activate' ) != '' && get_theme_mod( 'mildthemes_header_position' ) == 'static') { ?>
	padding-top: 0;
	<?php } else if(get_theme_mod( 'mildthemes_header_activate' ) == '' && get_theme_mod( 'mildthemes_action_bar_activate' ) != '') { ?>
	padding-top: <?php echo get_theme_mod( 'mildthemes_action_bar_height' ); ?>;
	<?php } else if( get_theme_mod( 'mildthemes_header_activate' ) == '' && get_theme_mod( 'mildthemes_action_bar_activate' ) == '') { ?>
	padding-top: 0;
	<?php } else if( get_theme_mod( 'mildthemes_action_bar_activate' ) == '') { ?>
	padding-top: <?php echo get_theme_mod( 'mildthemes_header_logo_height' ) + (get_theme_mod( 'mildthemes_header_padding' ) *2); ?>px;
	<?php } else if( get_theme_mod( 'mildthemes_action_bar_activate' ) != '' && get_theme_mod( 'mildthemes_header_activate' ) != '') { ?>
	padding-top: <?php echo get_theme_mod( 'mildthemes_logo_logo_height' ) + get_theme_mod( 'mildthemes_action_bar_height' ) + (get_theme_mod( 'mildthemes_header_padding' ) *2) ?>px;
	<?php } ?>
}

/* Logo Customization */
#logo {
	background-image: url("<?php echo get_theme_mod( 'mildthemes_logo_logo' ); ?>");
	background-size: <?php echo get_theme_mod( 'mildthemes_logo_logo_width' ); ?> auto;
	width: <?php echo get_theme_mod( 'mildthemes_logo_logo_width' ); ?>;
	height: <?php echo get_theme_mod( 'mildthemes_logo_logo_height' ); ?>;
}