<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Butter_Cup
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function butter_cup_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'butter_cup_infinite_scroll_render',
		'footer'    => 'page',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );
} // end function butter_cup_jetpack_setup
add_action( 'after_setup_theme', 'butter_cup_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function butter_cup_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
		    get_template_part( 'template-parts/content', 'search' );
		else :
		    get_template_part( 'template-parts/content', get_post_format() );
		endif;
	}
} // end function butter_cup_infinite_scroll_render
