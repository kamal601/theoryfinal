<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theory
 */

?>

<!DOCTYPE HTML>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/main.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

		<!-- Header -->
		<?php if(is_front_page()){?>
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">Theory</a>
					<?php 
						wp_nav_menu(array(
						'theme_location' 	=> 'menu-1',
						'container' 			=> 'nav',
						'container_id'		=> 'nav',
					)) ;
						
					?>

					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
		<?php } else{?>
		<div class="subpage">
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">Theory</a>
					<div class="npage">
					<?php 
						wp_nav_menu(array(
						'theme_location' 	=> 'pagemenu',
						'container' 			=> 'nav',
						'container_id'		=> 'nav',
					)) ;
						
					?>

					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
					</div>
				</div>
			</header>
		</div>
			<?php } ?>