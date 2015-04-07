<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package qblog
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- Google Fonts > ASAP -->
<link href='http://fonts.googleapis.com/css?family=Asap:400,400italic' rel='stylesheet' type='text/css'>
<!-- Other Fonts > Nevis & Fontomas -->
<link href='http://static.tumblr.com/g8b5dgd/fiym47mol/fonts.css' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'qblog' ); ?></a>

	<header id="qblog_header" class="header clearfix" role="banner">
        <h1 class="logo"><a href="/" rel="home">Q Design & Communication Since 1981</a></h1>
        <div class="nav-toggle">
            <i class="icon-reorder"></i>
        </div>

		<nav id="" class="main-nav open" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
