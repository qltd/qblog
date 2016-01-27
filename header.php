<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- Google Fonts > ASAP -->
<link href='http://fonts.googleapis.com/css?family=Asap:400,400italic' rel='stylesheet' type='text/css'>
<script src="//use.typekit.net/hia2tcg.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<!-- Other Fonts > Nevis & Fontomas -->
<link href='http://static.tumblr.com/g8b5dgd/fiym47mol/fonts.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/view-action.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'qblog'); ?></a>

	<header id="qblog_header" class="header clearfix" role="banner">
        <h1 class="logo"><a href="http://qltd.com" rel="home">Q Design & Communication Since 1981</a></h1>
        <div class="nav-toggle"><i class="fa fa-bars"></i></div>
		<nav id="" class="main-nav" role="navigation">
            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

<?php if (is_tag()): ?>
        <header class="tag-header">
                <?php
                    the_archive_title('<h1 class="page-title">', '</h1>');
                ?>
            </header><!-- .page-header -->
<?php endif; ?>


<nav id="view_dropdown">
<ul data-dropdown="dropdown" class="filter">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle">View:</a>
        <ul class="dropdown-menu" id="dropdown-menu">
            <li><a href="/">All</a></li>
            <li><a href="/tag/q-design/">Q Design</a></li>
            <li><a href="/tag/gallery-of-qs/">Gallery of Qs</a></li>
            <li><a href="/tag/playlist/">Now Playing</a></li>
            <li><a href="/tag/q-experiences/">Q Experiences</a></li>
            <li><a href="/tag/q-crew/">Q Crew</a></li>
            <li><a href="/tag/quotes/">Quotes</a></li>
            <li><a href="/tag/q-news/">Q News</a></li>
            <li><a href="/tag/q-wallpaper/">Q Wallpaper</a></li>
            <li><a href="/tag/q-toronto/">Q Toronto</a></li>
            <li><a href="/tag/q-newsletter/">Q Newsletter</a></li>
        </ul>
    </li>
</ul>
</nav>
