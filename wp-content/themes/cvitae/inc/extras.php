<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package CVitae
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cvitae_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	$intro_type = ot_get_option( 'cvitae_intro_type', 1 );

	switch ( $intro_type ) {
		case 1:
			$classes[] = 'intro-1';
			break;
		case 2:
			$classes[] = 'intro-2';
			break;
		case 3:
			$classes[] = 'intro-3';
			break;
		case 4:
			$classes[] = 'intro-4';
			break;
		case 5:
			$classes[] = 'intro-5';
			break;
		case 6:
			$classes[] = 'intro-6';
			break;
		case 7:
			$classes[] = 'intro-7';
			break;
		case 8:
			$classes[] = 'intro-8';
			break;
		case 9:
			$classes[] = 'intro-9';
			break;
		case 10:
			$classes[] = 'intro-10';
			break;
		case 11:
			$classes[] = 'intro-11';
			break;
		case 12:
			$classes[] = 'intro-12';
			break;
		case 13:
			$classes[] = 'intro-13';
			break;
		case 14:
			$classes[] = 'intro-14';
			break;
		case 15:
			$classes[] = 'intro-15';
			break;
		case 16:
			$classes[] = 'intro-16';
			break;
	}

	return $classes;
}
add_filter( 'body_class', 'cvitae_body_classes' );