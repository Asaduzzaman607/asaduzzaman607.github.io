<?php
/**
 * CVitae filters
 *
 * @package CVitae
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Filters the required title field's label.
 */
function cvitae_list_item_title_label( $label, $id ) {

	if ( $id == 'cvitae_intro_1_loop_text' ) {

		$label = esc_html__( 'Text', 'cvitae' );

	}

	return $label;

}

add_filter( 'ot_list_item_title_label', 'cvitae_list_item_title_label', 10, 2 );


function cvitae_nav_menu_css_class( $classes, $item, $args, $depth ){
	if( in_array('cvitae-home', $classes) ){
		$classes[] = "waves-effect";
	}
	return $classes;
}

add_filter( 'nav_menu_css_class', 'cvitae_nav_menu_css_class', 10, 4 );

function cvitae_nav_menu_link_attributes( $atts, $item, $args, $depth ){
	if( in_array( 'cvitae-home', $item->classes ) ){
		$atts['href'] = ( is_page_template( 'page-templates/home.php' ) ) ? home_url( '#home' ) : home_url();
	}
	if( $item->object == 'section' ){
		$href = explode('/', $atts['href']);
		array_pop($href);
		$atts['href'] = ( is_page_template( 'page-templates/home.php' ) ) ? '#' . end($href) : home_url( '#' . end($href) );
	}
	$atts['class'] = 'waves-effect waves-cvitae';
	if( in_array( 'external', $item->classes ) ){
		$atts['class'] = 'waves-effect waves-cvitae external';
	}
	return $atts;
}

add_filter( 'nav_menu_link_attributes', 'cvitae_nav_menu_link_attributes', 10, 4 );


function cvitae_wp_nav_menu_items( $items, $args ) {

	if( ! preg_match('/cvitae-home/',$items) ){
		$url = ( is_page_template( 'page-templates/home.php' ) ) ? home_url( '#home' ) : home_url();
		$items = '<li class="cvitae-home waves-effect"><a class="waves-effect waves-cvitae" href="' . esc_url( $url ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</a></li>' . $items;
	}
	
	if ( $args->theme_location == 'primary' && ot_get_option( 'cvitae_contact_menu_title_visibility', 'off' ) == 'off' ) {
		$url = ( is_page_template( 'page-templates/home.php' ) ) ? '#contact' : home_url( '#contact' );
		$items .= '<li class="section"><a class="waves-effect waves-cvitae'. $args->container_id .'" href="' . esc_url( $url ) . '">' . ot_get_option( 'cvitae_contact_menu_title', esc_html__( 'Contact', 'cvitae' ) ) . '</a></li>';
	}

	return $items;
}

add_filter( 'wp_nav_menu_items', 'cvitae_wp_nav_menu_items', 10, 2 );


function cvitae_nav_menu_item_title( $title, $item, $args, $depth ){
	if( in_array( 'cvitae-home', $item->classes ) ){
		$title = esc_html( get_bloginfo( 'name' ) );
	}
	return $title;
}

add_filter( 'nav_menu_item_title', 'cvitae_nav_menu_item_title', 10, 4 );

function cvitae_preloader_script(){
	
	?>
	
	<script type="text/javascript">
	    window.addEventListener('DOMContentLoaded', function() {
	        QueryLoader2(document.querySelector("body"), {
	            barColor: "#efefef",
	            backgroundColor: "#fff",
	            percentage: true,
	            barHeight: 1,
	            minimumTime: 500,
	            fadeOutTime: 1000
	        });
	    });
	</script>

	<?php

}

add_action( 'wp_footer','cvitae_preloader_script', 100 );

function cvitae_excerpt_length( $length ) {
	return 60;
}

add_filter( 'excerpt_length', 'cvitae_excerpt_length', 999 );

function cvitae_filter_widget_nav_menu_args( $nav_menu_args, $nav_menu, $args, $instance ) { 
	$nav_menu_args['depth'] = 3;
    return $nav_menu_args;
}; 

add_filter( 'widget_nav_menu_args', 'cvitae_filter_widget_nav_menu_args', 10, 4 ); 