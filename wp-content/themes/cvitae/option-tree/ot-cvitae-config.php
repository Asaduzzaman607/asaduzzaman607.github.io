<?php

/**
 * Do not use the default Theme Options page
 */
add_filter( 'ot_options_id', 'cvitae_options_function' );
function cvitae_options_function(){
	return 'cvitae_options';
}

/**
 * Do not use the default Theme Options page
 */
add_filter( 'ot_theme_options_menu_slug', 'cvitae_theme_options_menu_slug' );
function cvitae_theme_options_menu_slug(){
	return 'cvitae-theme-option';
}

/**
 * Do not use the default Theme Options page
 */
add_filter( 'ot_use_theme_options', '__return_false' );

/**
 * Hide the Default OptionTree Settings
 */
add_filter( 'ot_show_pages', '__return_false' );

/**
 * Hide the new layout
 */
add_filter( 'ot_show_new_layout', '__return_false' );

/**
 * Activate Theme Mode
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Change Option Tree Header Text
 */
add_filter('ot_header_version_text', 'cvitae_ot_header_version_text', 10, 2);

function cvitae_ot_header_version_text($title, $page_id) {
	return 'CVitae ' . esc_html__( 'Theme Option', 'cvitae' );
}

/**
 * Change On button label
 */
add_filter( 'ot_on_off_switch_on_label', 'cvitae_ot_on_off_switch_on_label', 10, 2 );

function cvitae_ot_on_off_switch_on_label($value, $field_id){
	$filterable_ids = array(
		'cvitae_section_visibility'
	);
	if( in_array($field_id, $filterable_ids ) ){
		$value = esc_html__( 'Show', 'cvitae' );
	}
	return $value;
}

/**
 * Change Off button label
 */
add_filter( 'ot_on_off_switch_off_label', 'cvitae_ot_on_off_switch_off_label', 10, 2 );

function cvitae_ot_on_off_switch_off_label($value, $field_id){
	$filterable_ids = array(
		'cvitae_section_visibility'
	);
	if( in_array($field_id, $filterable_ids ) ){
		$value = esc_html__( 'Hide', 'cvitae' );
	}
	return $value;
}

/**
 * CVitae Default Social Fields
 */
add_filter( 'ot_social_links_settings', 'cvitae_ot_social_fields' );

function cvitae_ot_social_fields( $settings ){
	$settings = array(
		array(
			'id'        => 'name',
			'label'     => esc_html__( 'Name', 'cvitae' ),
			'desc'      => esc_html__( 'Enter the name of the social website.', 'cvitae' ),
			'std'       => '',
			'type'      => 'text',
			'class'     => 'cvitae-setting-title'
		),
		array(
			'id'        => 'href',
			'label'     => 'Link',
			'desc'      => sprintf( esc_html__( 'Enter a link to the profile or page on the social website. Remember to add the %s part to the front of the link.', 'cvitae' ), '<code>http://</code>' ),
			'type'      => 'text',
		),
		array(
			'id'        => 'icon',
			'label'     => 'Fontawesome Class Name',
			'desc'      => '',
			'type'      => 'text',
			'desc'      => sprintf( esc_html__( 'fontawesome class name without %s. Example: for Facebook only %s', 'cvitae' ), '<code>fa fa-</code>', '<code>facebook</code>' ),
		)
    );
    return $settings;
}

/**
 * CVitae Default Social Sites
 */
add_filter( 'ot_type_social_links_defaults', 'cvitae_ot_social_default_sites' );

function cvitae_ot_social_default_sites( $settings ){
	$settings = array(
			array(
				'name'    => esc_html__( 'Facebook', 'cvitae' ),
				'href'    => '',
				'icon'    => 'facebook'
			),
			array(
				'name'    => esc_html__( 'Twitter', 'cvitae' ),
				'href'    => '',
				'icon'    => 'twitter'
			),
			array(
				'name'    => esc_html__( 'Google+', 'cvitae' ),
				'href'    => '',
				'icon'    => 'google-plus'
			),
			array(
				'name'    => esc_html__( 'LinkedIn', 'cvitae' ),
				'href'    => '',
				'icon'    => 'linkedin'
			),
			array(
				'name'    => esc_html__( 'Pinterest', 'cvitae' ),
				'href'    => '',
				'icon'    => 'pinterest'
			),
			array(
				'name'    => esc_html__( 'Youtube', 'cvitae' ),
				'href'    => '',
				'icon'    => 'pinterest'
			),
			array(
				'name'    => esc_html__( 'Dribbble', 'cvitae' ),
				'href'    => '',
				'icon'    => 'dribbble'
			),
			array(
				'name'    => esc_html__( 'Github', 'cvitae' ),
				'href'    => '',
				'icon'    => 'github'
			),
			array(
				'name'    => esc_html__( 'Digg', 'cvitae' ),
				'href'    => '',
				'icon'    => 'digg'
			),
			array(
				'name'    => esc_html__( 'Delicious', 'cvitae' ),
				'href'    => '',
				'icon'    => 'delicious'
			),
			array(
				'name'    => esc_html__( 'Tumblr', 'cvitae' ),
				'href'    => '',
				'icon'    => 'tumblr'
			),
			array(
				'name'    => esc_html__( 'Skype', 'cvitae' ),
				'href'    => '',
				'icon'    => 'skype'
			),
			array(
				'name'    => esc_html__( 'SoundCloud', 'cvitae' ),
				'href'    => '',
				'icon'    => 'soundcloud'
			),
			array(
				'name'    => esc_html__( 'Vimeo', 'cvitae' ),
				'href'    => '',
				'icon'    => 'vimeo'
			),
			array(
				'name'    => esc_html__( 'Flickr', 'cvitae' ),
				'href'    => '',
				'icon'    => 'flickr'
			),
		);

	return $settings;
}



/**
 * Import Data option type.
 *
 * @return    string
 *
 * @access    public
 * @since     2.0
 */
if ( ! function_exists( 'ot_type_import_data' ) ) {

  function ot_type_import_data() {

    echo '<form method="post" id="import-data-form">';

      /* form nonce */
      wp_nonce_field( 'import_data_form', 'import_data_nonce' );

      /* format setting outer wrapper */
      echo '<div class="format-setting type-textarea has-desc">';

        /* description */
        echo '<div class="description">';

          if ( OT_SHOW_SETTINGS_IMPORT ) echo '<p>' . esc_html__( 'Only after you\'ve imported the Settings should you try and update your Theme Options.', 'cvitae' ) . '</p>';

          echo '<p>' . esc_html__( 'To import your Theme Options copy and paste what appears to be a random string of alpha numeric characters into this textarea and press the "Import Theme Options" button.', 'cvitae' ) . '</p>';

          /* button */
          echo '<button class="option-tree-ui-button button button-primary right hug-right">' . esc_html__( 'Import Theme Options', 'cvitae' ) . '</button>';

        echo '</div>';

        /* textarea */
        echo '<div class="format-setting-inner">';

          echo '<textarea rows="10" cols="40" name="import_data" id="import_data" class="textarea"></textarea>';

        echo '</div>';

      echo '</div>';

    echo '</form>';

  }

}

/**
 * Export Data option type.
 *
 * @return    string
 *
 * @access    public
 * @since     2.0
 */
if ( ! function_exists( 'ot_type_export_data' ) ) {

	function ot_type_export_data() {

		/* format setting outer wrapper */
		echo '<div class="format-setting type-textarea simple has-desc">';

			/* description */
			echo '<div class="description">';

				echo '<p>' . esc_html__( 'Export your Theme Options data by highlighting this text and doing a copy/paste into a blank .txt file. Then save the file for importing into another install of WordPress later. Alternatively, you could just paste it into the <code>OptionTree->Settings->Import</code> <strong>Theme Options</strong> textarea on another web site.', 'cvitae' ) . '</p>';

			echo '</div>';

			/* get theme options data */
			$data = get_option( ot_options_id() );
			$data = ! empty( $data ) ? ot_encode( serialize( $data ) ) : '';

			echo '<div class="format-setting-inner">';
				echo '<textarea rows="10" cols="40" name="export_data" id="export_data" class="textarea">' . esc_attr( $data ) . '</textarea>';
			echo '</div>';

		echo '</div>';

	}

}

/**
 * Load OptionTree
 */
load_template( get_template_directory() . '/option-tree/ot-loader.php' );

/**
 * Theme Options
 */
load_template( get_template_directory() . '/option-tree/ot-cvitae-theme-options.php' );

/**
 * Required: include Theme Custom Meta Box.
 */
load_template( get_template_directory() . '/option-tree/ot-cvitae-meta-boxes.php' );