<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package kode_orange
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function kode_orange_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'kode_orange_jetpack_setup' );
