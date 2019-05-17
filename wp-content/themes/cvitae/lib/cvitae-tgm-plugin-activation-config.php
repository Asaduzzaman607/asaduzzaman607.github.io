<?php
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'cvitae_theme_register_required_plugins' );
function cvitae_theme_register_required_plugins() {
	
	$plugins = array(

		array(
			'name'             => 'CVitae Functions',
			'slug'             => 'cvitae-functions',
			'source'           => 'http://themecop.com/wp/cvitae/demo/wp-content/themes/cvitae/lib/plugins/cvitae-functions.zip',
			'required'         => true,
			'version'          => '1.0.0',
			'force_activation' => true
		),
		array(
			'name'     => 'Contact Form 7',
			'slug'     => 'contact-form-7',
			'required' => false,
		),
		array(
			'name'     => 'WP-PostViews',
			'slug'     => 'wp-postviews',
			'required' => false
		)

	);

	$config = array(
		'id'           => 'cvitae',
		'default_path' => '',
		'menu'         => 'cvitae-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => false,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
	);
	tgmpa( $plugins, $config );
}