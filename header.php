<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">	<link rel="manifest" href="/manifest.json">	<meta name="msapplication-TileColor" content="#ffffff">	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">	<meta name="theme-color" content="#ffffff">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php get_template_part('analytics'); ?>
<div id="page" class="hfeed site">
  <?php if ( is_home() ) : ?>
  	<?php if ( get_header_image() ) : ?>
  	<div id="site-header">
  		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
  			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
  		</a>
  	</div>
  	<?php endif; ?>
  <?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">