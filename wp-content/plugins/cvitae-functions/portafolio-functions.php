<?php
/*
 Plugin Name: CVitae Functions
 Description: CVitae custom post type & functions plugins
 Author: Themeocp
 Version: 1.0.0
 Author URI: http://www.themecop.com
 Text Domain: cvitae
 */

add_action( 'plugins_loaded', 'cvitae_functinos_textdomain' );

function cvitae_functinos_textdomain() {
	load_plugin_textdomain( 'cvitae', false, dirname( plugin_basename( __FILE__ ) ) );
}

/* 
 * --------------------------------------
 * Register CVitae Section Post Type
 * --------------------------------------
 */
add_action( 'init', 'cvitae_section_init' );

function cvitae_section_init() {
	$labels = array(
		'name'               => _x( 'Sections', 'post type general name', 'cvitae' ),
		'singular_name'      => _x( 'Sections', 'post type singular name', 'cvitae' ),
		'menu_name'          => _x( 'CVitae Sections', 'admin menu', 'cvitae' ),
		'name_admin_bar'     => _x( 'Sections', 'add new on admin bar', 'cvitae' ),
		'add_new'            => _x( 'Add New', 'section', 'cvitae' ),
		'add_new_item'       => __( 'Add New Sections', 'cvitae' ),
		'new_item'           => __( 'New Sections', 'cvitae' ),
		'edit_item'          => __( 'Edit Sections', 'cvitae' ),
		'view_item'          => __( 'View Sections', 'cvitae' ),
		'all_items'          => __( 'All Sections', 'cvitae' ),
		'search_items'       => __( 'Search Sections', 'cvitae' ),
		'parent_item_colon'  => __( 'Parent Sections:', 'cvitae' ),
		'not_found'          => __( 'No sections found.', 'cvitae' ),
		'not_found_in_trash' => __( 'No sections found in Trash.', 'cvitae' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'CVitae sections.', 'cvitae' ),
		'public'             => true,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'section' ),
		'capability_type'    => 'page',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title' )
	);

	register_post_type( 'section', $args );
}