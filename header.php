<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codecamp
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet"> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="header">
		<div id="logo">
			<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				if(!($image[0] == '')) {
					echo '<a href="/"><img src="'.$image[0].'" alt="logo"></a>';
				}			
			?>
		</div>
		<div id="sitename">
			<?php 
			//get blog name and description/tagline and display them
			$blogname = get_bloginfo('name');
			$blogdesc = get_bloginfo('description');
				echo '<h1>'.$blogname.'</h1>';
				echo '<p>'.$blogdesc.'</p>';
			?>
		</div>
		<?php 
		//only display the menu if home page is set to a static page
		if(!is_home()) {?>
		<nav>
			<div id="menu">
	            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
	       	</div>
		</nav><!-- #site-navigation -->
		<?php } ?>


	
	</header><!-- #masthead -->
	
