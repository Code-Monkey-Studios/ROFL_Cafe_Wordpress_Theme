<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package ROFL Cafe
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function rofl_cafe_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'rofl_cafe_jetpack_setup' );
