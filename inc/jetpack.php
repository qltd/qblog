<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package qblog
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function qblog_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
        'type' => 'scroll',
		'container' => 'posts',
		'footer' => false,
        'posts_per_page' => 20,
	) );
}
add_action( 'after_setup_theme', 'qblog_jetpack_setup' );
