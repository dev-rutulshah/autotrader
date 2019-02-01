<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rutulshah
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">
	

	<?php wp_head(); ?>
	<?php custom_css_include(); ?>
</head>

<body <?php body_class(); ?> cz-shortcut-listen="true">

<div id="wrapper">
	<!-- Header -->
					<header id="header" class="alt">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><?php bloginfo( 'name' ); ?></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>
	
	<!-- Menu -->
					<nav id="menu">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_class'	=> 'links',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</nav>
	
