<!DOCTYPE html>
	<html>
		<head>
			<?php wp_head();?>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">

		</head>
		
<body <?php body_class();?>>
	<header class="sticky-top">
		<div id="top-nav-menu">
			<?php wp_nav_menu(
				array(
				'theme_location' => 'top-menu', #key taken from functions.php
				'menu_class' => 'top-navigation', #assigns class name for styling
				)

			);?>
		
			<a href="https://www.advancedcustomfields.com/resources/">
					<img 
					id="header-logo" 
					role="banner" 
					src="<?php echo get_field('logo_image')['url'];?>"	
					>
			</a>

		</div>
	</header>