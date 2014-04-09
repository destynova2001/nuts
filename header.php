<!DOCTYPE html>
<html class="default" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width" />
        <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.gif">
		
		<?php wp_head(); ?>


	</head>
    
    <body>
		<div id="wrapper">
		
			<header>
				<?php nuts_logo(); ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'first_menu', 'container'       => 'nav' ) ); ?>
			</header>
