<?php
/**
 * Initialize the CVitae Theme Options.
 */
add_action( 'init', 'register_options_pages' );

function register_options_pages() {

	if ( is_admin() && function_exists( 'ot_register_settings' ) ) {

		ot_register_settings( 
			array(
				array(
					'id'              => 'cvitae_options',
					'pages'           => array(
						array(
							'id'              => 'cvitae_options_page',
							'parent_slug'     => 'themes.php',
							'page_title'      => esc_html__( 'CVitae Theme Options', 'cvitae' ),
							'menu_title'      => esc_html__( 'CVitae Theme Options', 'cvitae' ),
							'capability'      => 'edit_theme_options',
							'menu_slug'       => 'cvitae-theme-option',
							'icon_url'        => null,
							'position'        => 1,
							'updated_message' => esc_html__( 'Options updated.', 'cvitae' ),
							'reset_message'   => esc_html__( 'Options reset.', 'cvitae' ),
							'button_text'     => esc_html__( 'Save Changes', 'cvitae' ),
							'show_buttons'    => true,
							'screen_icon'     => '',
							'contextual_help' => null,
							'sections'        => array( 
								array(
									'id'          => 'cvitae_intro_section',
									'title'       => esc_html__( 'Intro', 'cvitae' )
								),
								array(
									'id'          => 'cvitae_contact_section',
									'title'       => esc_html__( 'Contact', 'cvitae' )
								),
								array(
									'id'          => 'cvitae_footer_section',
									'title'       => esc_html__( 'Footer', 'cvitae' )
								),
								array(
									'id'          => 'cvitae_breadcrumb_section',
									'title'       => esc_html__( 'Breadcrumb', 'cvitae' )
								),
								array(
									'id'          => 'cvitae_others_section',
									'title'       => esc_html__( 'Others', 'cvitae' )
								)
							),
							'settings'        => array(
								array(
									'id'          => 'cvitae_intro_type',
									'label'       => esc_html__( 'Choose Intro Type', 'cvitae' ),
									'std'         => '',
									'type'        => 'select',
									'section'     => 'cvitae_intro_section',
									'choices'     => array(
										array( 'value' => '1', 'label' => 'Intro 1' ),
										array( 'value' => '2', 'label' => 'Intro 2' ),
										array( 'value' => '3', 'label' => 'Intro 3' ),
										array( 'value' => '4', 'label' => 'Intro 4' ),
										array( 'value' => '5', 'label' => 'Intro 5' ),
										array( 'value' => '6', 'label' => 'Intro 6' ),
										array( 'value' => '7', 'label' => 'Intro 7' ),
										array( 'value' => '8', 'label' => 'Intro 8' ),
										array( 'value' => '9', 'label' => 'Intro 9' ),
										array( 'value' => '10', 'label' => 'Intro 10' ),
										array( 'value' => '11', 'label' => 'Intro 11' ),
										array( 'value' => '12', 'label' => 'Intro 12' ),
										array( 'value' => '13', 'label' => 'Intro 13' ),
										array( 'value' => '14', 'label' => 'Intro 14' ),
										array( 'value' => '15', 'label' => 'Intro 15' ),
										array( 'value' => '16', 'label' => 'Intro 16' )
									)
								),
								array(
									'id'          => 'cvitae_intro_1_image',
									'label'       => esc_html__( 'Image', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 959x864', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/1-image.jpg',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(1)'
								),
								array(
									'id'          => 'cvitae_intro_1_name',
									'label'       => esc_html__( 'Name', 'cvitae' ),
									'desc'        => esc_html__( 'Your name here.', 'cvitae' ),
									'std'         => esc_html__( 'Your Name', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(1)'
								),
								array(
									'id'          => 'cvitae_intro_1_designation',
									'label'       => esc_html__( 'Profession', 'cvitae' ),
									'desc'        => esc_html__( 'Your profession here.', 'cvitae' ),
									'std'         => esc_html__( 'Your profession', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(1)'
								),
								array(
									'id'          => 'cvitae_intro_2_background',
									'label'       => esc_html__( 'Background', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 1920x1080', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/2-background.jpg',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(2)'
								),
								array(
									'id'          => 'cvitae_intro_2_name',
									'label'       => esc_html__( 'Name', 'cvitae' ),
									'desc'        => esc_html__( 'Your name here.', 'cvitae' ),
									'std'         => esc_html__( 'Your Name', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(2)'
								),
								array(
									'id'          => 'cvitae_intro_2_designation',
									'label'       => esc_html__( 'Profession', 'cvitae' ),
									'desc'        => esc_html__( 'Your profession here.', 'cvitae' ),
									'std'         => esc_html__( 'Your profession', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(2)'
								),
								array(
									'id'          => 'cvitae_intro_2_target_text',
									'label'       => esc_html__( 'Target Text', 'cvitae' ),
									'desc'        => esc_html__( 'Example: SEE FULL BIO', 'cvitae' ),
									'std'         => esc_html__( 'More', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(2)'
								),
								array(
									'id'          => 'cvitae_intro_2_target',
									'label'       => esc_html__( 'Mouse Wheel Target', 'cvitae' ),
									'desc'        => esc_html__( 'Onclick will goto the selected section.', 'cvitae' ),
									'type'        => 'custom-post-type-select',
									'post_type'   => 'section',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(2)'
								),
								array(
									'id'          => 'cvitae_intro_3_image',
									'label'       => esc_html__( 'Image', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 743x422', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/3.png',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(3)'
								),
								array(
									'id'          => 'cvitae_intro_3_background',
									'label'       => esc_html__( 'Background', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 1920x1080', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/3-background.jpg',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(3)'
								),
								array(
									'id'          => 'cvitae_intro_3_name',
									'label'       => esc_html__( 'Name', 'cvitae' ),
									'desc'        => esc_html__( 'Your name here.', 'cvitae' ),
									'std'         => esc_html__( 'Your Name', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(3)'
								),
								array(
									'id'          => 'cvitae_intro_3_designation',
									'label'       => esc_html__( 'Profession', 'cvitae' ),
									'desc'        => esc_html__( 'Your profession here.', 'cvitae' ),
									'std'         => esc_html__( 'Your profession', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(3)'
								),
								array(
									'id'          => 'cvitae_intro_4_image',
									'label'       => esc_html__( 'Image', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 308x308', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/4-image.jpg',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(4)'
								),
								array(
									'id'          => 'cvitae_intro_4_background',
									'label'       => esc_html__( 'Background', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 1920x1080', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/4-background.jpg',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(4)'
								),
								array(
									'id'          => 'cvitae_intro_4_name',
									'label'       => esc_html__( 'Name', 'cvitae' ),
									'desc'        => esc_html__( 'Your name here.', 'cvitae' ),
									'std'         => esc_html__( 'Your Name', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(4)'
								),
								array(
									'id'          => 'cvitae_intro_4_designation',
									'label'       => esc_html__( 'Profession', 'cvitae' ),
									'desc'        => esc_html__( 'Your profession here.', 'cvitae' ),
									'std'         => esc_html__( 'Your profession', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(4)'
								),
								array(
									'id'          => 'cvitae_intro_5_image',
									'label'       => esc_html__( 'Image', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 266x316', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/5-image.jpg',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(5)'
								),
								array(
									'id'          => 'cvitae_intro_5_name',
									'label'       => esc_html__( 'Name', 'cvitae' ),
									'desc'        => esc_html__( 'Your name here.', 'cvitae' ),
									'std'         => esc_html__( 'Your Name', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(5)'
								),
								array(
									'id'          => 'cvitae_intro_5_designation',
									'label'       => esc_html__( 'Profession', 'cvitae' ),
									'desc'        => esc_html__( 'Your profession here.', 'cvitae' ),
									'std'         => esc_html__( 'Your profession', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(5)'
								),
								array(
									'id'          => 'cvitae_intro_5_target_text',
									'label'       => esc_html__( 'Target Text', 'cvitae' ),
									'desc'        => esc_html__( 'Example: SEE FULL BIO', 'cvitae' ),
									'std'         => esc_html__( 'SEE FULL BIO', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(5)'
								),
								array(
									'id'          => 'cvitae_intro_5_target',
									'label'       => esc_html__( 'Mouse Wheel Target', 'cvitae' ),
									'desc'        => esc_html__( 'Onclick will goto the selected section.', 'cvitae' ),
									'type'        => 'custom-post-type-select',
									'post_type'   => 'section',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(5)'
								),
								array(
									'id'          => 'cvitae_intro_6_image',
									'label'       => esc_html__( 'Image', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 424x456', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/6-image.png',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(6)'
								),
								array(
									'id'          => 'cvitae_intro_6_name',
									'label'       => esc_html__( 'Name', 'cvitae' ),
									'desc'        => esc_html__( 'Your name here.', 'cvitae' ),
									'std'         => esc_html__( 'Your Name', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(6)'
								),
								array(
									'id'          => 'cvitae_intro_6_designation',
									'label'       => esc_html__( 'Profession', 'cvitae' ),
									'desc'        => esc_html__( 'Your profession here.', 'cvitae' ),
									'std'         => esc_html__( 'Your profession', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(6)'
								),
								array(
									'id'          => 'cvitae_intro_6_target_text',
									'label'       => esc_html__( 'Target Text', 'cvitae' ),
									'desc'        => esc_html__( 'Example: SEE FULL BIO', 'cvitae' ),
									'std'         => esc_html__( 'SEE FULL BIO', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(6)'
								),
								array(
									'id'          => 'cvitae_intro_6_target',
									'label'       => esc_html__( 'Mouse Wheel Target', 'cvitae' ),
									'desc'        => esc_html__( 'Onclick will goto the selected section.', 'cvitae' ),
									'type'        => 'custom-post-type-select',
									'post_type'   => 'section',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(6)'
								),
								array(
									'id'          => 'cvitae_intro_7_image',
									'label'       => esc_html__( 'Image', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 237x237', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/7-image.png',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(7)'
								),
								array(
									'id'          => 'cvitae_intro_7_background',
									'label'       => esc_html__( 'Background', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 1920x600', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/7-background.jpg',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(7)'
								),
								array(
									'id'          => 'cvitae_intro_7_name',
									'label'       => esc_html__( 'Name', 'cvitae' ),
									'desc'        => esc_html__( 'Your name here.', 'cvitae' ),
									'std'         => esc_html__( 'Your Name', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(7)'
								),
								array(
									'id'          => 'cvitae_intro_7_designation',
									'label'       => esc_html__( 'Profession', 'cvitae' ),
									'desc'        => esc_html__( 'Your profession here.', 'cvitae' ),
									'std'         => esc_html__( 'Your profession', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(7)'
								),
								array(
									'id'          => 'cvitae_intro_8_background',
									'label'       => esc_html__( 'Background Image', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 1920x600', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/8-background.jpg',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(8)'
								),
								array(
									'id'          => 'cvitae_intro_8_name',
									'label'       => esc_html__( 'Name', 'cvitae' ),
									'desc'        => esc_html__( 'Your name here.', 'cvitae' ),
									'std'         => esc_html__( 'Your Name', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(8)'
								),
								array(
									'id'          => 'cvitae_intro_8_designation',
									'label'       => esc_html__( 'Profession', 'cvitae' ),
									'desc'        => esc_html__( 'Your profession here.', 'cvitae' ),
									'std'         => esc_html__( 'Your profession', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(8)'
								),
								array(
									'id'          => 'cvitae_intro_9_background',
									'label'       => esc_html__( 'Background Image', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 1920x1080', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/9-background.jpg',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(9)'
								),
								array(
									'id'          => 'cvitae_intro_9_name',
									'label'       => esc_html__( 'Name', 'cvitae' ),
									'desc'        => esc_html__( 'Your name here.', 'cvitae' ),
									'std'         => esc_html__( 'Your Name', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(9)'
								),
								array(
									'id'          => 'cvitae_intro_9_designation',
									'label'       => esc_html__( 'Profession', 'cvitae' ),
									'desc'        => esc_html__( 'Your profession here.', 'cvitae' ),
									'std'         => esc_html__( 'Your profession', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(9)'
								),
								array(
									'id'          => 'cvitae_intro_10_background_left',
									'label'       => esc_html__( 'left Image', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 960x1080', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/10-left.jpg',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(10)'
								),
								array(
									'id'          => 'cvitae_intro_10_background_right',
									'label'       => esc_html__( 'Right Image', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 960x1080', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/10-right.jpg',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(10)'
								),
								array(
									'id'          => 'cvitae_intro_10_name',
									'label'       => esc_html__( 'Name', 'cvitae' ),
									'desc'        => esc_html__( 'Your name here.', 'cvitae' ),
									'std'         => esc_html__( 'Your Name', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(10)'
								),
								array(
									'id'          => 'cvitae_intro_10_designation',
									'label'       => esc_html__( 'Profession', 'cvitae' ),
									'desc'        => esc_html__( 'Your profession here.', 'cvitae' ),
									'std'         => esc_html__( 'Your profession', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(10)'
								),
								array(
									'id'          => 'cvitae_intro_11_background',
									'label'       => esc_html__( 'Background Image', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 19110x1080', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/11-background.jpg',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(11)'
								),
								array(
									'id'          => 'cvitae_intro_11_name',
									'label'       => esc_html__( 'Name', 'cvitae' ),
									'desc'        => esc_html__( 'Your name here.', 'cvitae' ),
									'std'         => esc_html__( 'Your Name', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(11)'
								),
								array(
									'id'          => 'cvitae_intro_11_designation',
									'label'       => esc_html__( 'Profession', 'cvitae' ),
									'desc'        => esc_html__( 'Your profession here.', 'cvitae' ),
									'std'         => esc_html__( 'Your profession', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(11)'
								),
								array(
									'id'          => 'cvitae_intro_11_target',
									'label'       => esc_html__( 'Mouse Wheel Target', 'cvitae' ),
									'desc'        => esc_html__( 'Onclick will goto the selected section.', 'cvitae' ),
									'type'        => 'custom-post-type-select',
									'post_type'   => 'section',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(11)'
								),
								array(
									'id'          => 'cvitae_intro_12_background',
									'label'       => esc_html__( 'Background Image', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 1920x1080', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/12-background.jpg',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(12)'
								),
								array(
									'id'          => 'cvitae_intro_12_text',
									'label'       => esc_html__( 'Welcome Word', 'cvitae' ),
									'desc'        => esc_html__( 'Welcome intro word.', 'cvitae' ),
									'std'         => esc_html__( 'Hi', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(12)'
								),
								array(
									'id'          => 'cvitae_intro_12_loop_text',
									'label'       => esc_html__( 'Typed Text', 'cvitae' ),
									'desc'        => esc_html__( 'Typed text looping through interval.', 'cvitae' ),
									'type'        => 'list-item',
									'settings'    => array(
										array(
											'id'          => 'cvitae_intro_12_hidden',
											'type'        => 'text',
											'section'     => 'cvitae_intro_section',
											'condition'   => 'cvitae_intro_type:is(999)'
										)
									),
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(12)'
								),
								array(
									'id'          => 'cvitae_intro_12_target',
									'label'       => esc_html__( 'Mouse Wheel Target', 'cvitae' ),
									'desc'        => esc_html__( 'Onclick will goto the selected section.', 'cvitae' ),
									'type'        => 'custom-post-type-select',
									'post_type'   => 'section',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(12)'
								),
								array(
									'id'          => 'cvitae_intro_13_background',
									'label'       => esc_html__( 'Background', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 1920x1080', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/13-background.jpg',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(13)'
								),
								array(
									'id'          => 'cvitae_intro_13_footer_background',
									'label'       => esc_html__( 'Footer Background', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 1920x680', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/13-footer-background.jpg',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(13)'
								),
								array(
									'id'          => 'cvitae_intro_13_image',
									'label'       => esc_html__( 'Image', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 667x701', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/13-image.png',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(13)'
								),
								array(
									'id'          => 'cvitae_intro_13_line_1',
									'label'       => esc_html__( 'First Line', 'cvitae' ),
									'desc'        => esc_html__( 'Line one text', 'cvitae' ),
									'std'         => esc_html__( 'Line one', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(13)'
								),
								array(
									'id'          => 'cvitae_intro_13_line_2',
									'label'       => esc_html__( 'Second Line', 'cvitae' ),
									'desc'        => esc_html__( 'Line two text', 'cvitae' ),
									'std'         => esc_html__( 'Line two', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(13)'
								),
								array(
									'id'          => 'cvitae_intro_13_line_3',
									'label'       => esc_html__( 'Third Line', 'cvitae' ),
									'desc'        => esc_html__( 'Line three text', 'cvitae' ),
									'std'         => esc_html__( 'Line three', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(13)'
								),
								array(
									'id'          => 'cvitae_intro_13_target_text',
									'label'       => esc_html__( 'Target Text', 'cvitae' ),
									'desc'        => esc_html__( 'Example: SEE FULL BIO', 'cvitae' ),
									'std'         => esc_html__( 'SEE FULL BIO', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(13)'
								),
								array(
									'id'          => 'cvitae_intro_13_target',
									'label'       => esc_html__( 'Mouse Wheel Target', 'cvitae' ),
									'desc'        => esc_html__( 'Onclick will goto the selected section.', 'cvitae' ),
									'type'        => 'custom-post-type-select',
									'post_type'   => 'section',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(13)'
								),
								array(
									'id'          => 'cvitae_intro_14_background',
									'label'       => esc_html__( 'Background', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 1920x1080', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/14-background.jpg',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(14)'
								),
								array(
									'id'          => 'cvitae_intro_14_footer_background',
									'label'       => esc_html__( 'Footer Background', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 1920x680', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/14-footer-background.jpg',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(14)'
								),
								array(
									'id'          => 'cvitae_intro_14_image',
									'label'       => esc_html__( 'Image', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 667x701', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/14-image.png',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(14)'
								),
								array(
									'id'          => 'cvitae_intro_14_line_1',
									'label'       => esc_html__( 'First Line', 'cvitae' ),
									'desc'        => esc_html__( 'Line one text', 'cvitae' ),
									'std'         => esc_html__( 'Line one', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(14)'
								),
								array(
									'id'          => 'cvitae_intro_14_line_2',
									'label'       => esc_html__( 'Second Line', 'cvitae' ),
									'desc'        => esc_html__( 'Line two text', 'cvitae' ),
									'std'         => esc_html__( 'Line two', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(14)'
								),
								array(
									'id'          => 'cvitae_intro_14_line_3',
									'label'       => esc_html__( 'Third Line', 'cvitae' ),
									'desc'        => esc_html__( 'Line three text', 'cvitae' ),
									'std'         => esc_html__( 'Line three', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(14)'
								),
								array(
									'id'          => 'cvitae_intro_14_target_text',
									'label'       => esc_html__( 'Target Text', 'cvitae' ),
									'desc'        => esc_html__( 'Example: SEE FULL BIO', 'cvitae' ),
									'std'         => esc_html__( 'SEE FULL BIO', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(14)'
								),
								array(
									'id'          => 'cvitae_intro_14_target',
									'label'       => esc_html__( 'Mouse Wheel Target', 'cvitae' ),
									'desc'        => esc_html__( 'Onclick will goto the selected section.', 'cvitae' ),
									'type'        => 'custom-post-type-select',
									'post_type'   => 'section',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(14)'
								),


								array(
									'id'          => 'cvitae_intro_15_background',
									'label'       => esc_html__( 'Background', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 1920x1080', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/15-background.png',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(15)'
								),
								array(
									'id'          => 'cvitae_intro_15_image',
									'label'       => esc_html__( 'Image', 'cvitae' ),
									'desc'        => esc_html__( 'Prefered resolution 667x701', 'cvitae' ),
									'std'         => get_template_directory_uri() . '/assets/img/slider/15-image.png',
									'type'        => 'upload',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(15)'
								),
								array(
									'id'          => 'cvitae_intro_15_name',
									'label'       => esc_html__( 'Name', 'cvitae' ),
									'desc'        => esc_html__( 'Your name here.', 'cvitae' ),
									'std'         => esc_html__( 'Your Name', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(15)'
								),
								array(
									'id'          => 'cvitae_intro_15_designation',
									'label'       => esc_html__( 'Profession', 'cvitae' ),
									'desc'        => esc_html__( 'Your profession here.', 'cvitae' ),
									'std'         => esc_html__( 'Your profession', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(15)'
								),
								array(
									'id'          => 'cvitae_intro_15_target',
									'label'       => esc_html__( 'Click Target', 'cvitae' ),
									'desc'        => esc_html__( 'Onclick will goto the selected section.', 'cvitae' ),
									'type'        => 'custom-post-type-select',
									'post_type'   => 'section',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(15)'
								),

								array(
									'id'          => 'cvitae_intro_16_video_id',
									'label'       => esc_html__( 'Youtube Video ID', 'cvitae' ),
									'desc'        => sprintf( "%s <code>ti-facebook</code>", esc_html__( 'Themify Icon Class Example:', 'cvitae' ) ),
									'desc'        => sprintf( esc_html__( 'Example: From %s video ID %s', 'cvitae' ), '<code>https://www.youtube.com/watch?v=_0KcxL2Lssk</code>', '<code>_0KcxL2Lssk</code>' ),
									'std'         => '_0KcxL2Lssk',
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(16)'
								),
								array(
									'id'          => 'cvitae_intro_16_line_one',
									'label'       => esc_html__( 'First Line', 'cvitae' ),
									'std'         => esc_html( 'I\'m Nail Swarovski' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(16)'
								),
								array(
									'id'          => 'cvitae_intro_16_line_two',
									'label'       => esc_html__( 'Second Line', 'cvitae' ),
									'std'         => esc_html( '& never tried of' ),
									'type'        => 'text',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(16)'
								),
								array(
									'id'          => 'cvitae_intro_16_loop_text',
									'label'       => esc_html__( 'Fliped Word', 'cvitae' ),
									'desc'        => esc_html__( 'Word will change in rotation.', 'cvitae' ),
									'type'        => 'list-item',
									'std'         => array(
										array( 'title' => 'coding' ),
										array( 'title' => 'learning' ),
										array( 'title' => 'traveling' )
									),
									'settings'    => array(
										array(
											'id'          => 'cvitae_intro_16_hidden',
											'type'        => 'text',
											'section'     => 'cvitae_intro_section',
											'condition'   => 'cvitae_intro_type:is(999)'
										)
									),
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(16)'
								),
								array(
									'id'          => 'cvitae_intro_16_target',
									'label'       => esc_html__( 'Mouse Wheel Target', 'cvitae' ),
									'desc'        => esc_html__( 'Onclick will goto the selected section.', 'cvitae' ),
									'type'        => 'custom-post-type-select',
									'post_type'   => 'section',
									'section'     => 'cvitae_intro_section',
									'condition'   => 'cvitae_intro_type:is(16)'
								),



								array(
									'id'          => 'cvitae_contact_menu_title',
									'label'       => esc_html__( 'Menu Title', 'cvitae' ),
									'desc'        => esc_html__( 'Menu title for menu', 'cvitae' ),
									'std'         => esc_html__( 'Contact', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_contact_section'
								),
								array(
									'id'          => 'cvitae_contact_menu_title_visibility',
									'label'       => esc_html__( 'Hide Form Menu', 'cvitae' ),
									'desc'        => esc_html__( 'Hide from menu.', 'cvitae' ),
									'std'         => 'off',
									'type'        => 'on-off',
									'section'     => 'cvitae_contact_section'
								),
								array(
									'id'          => 'cvitae_contact_title',
									'label'       => esc_html__( 'Section Title', 'cvitae' ),
									'desc'        => esc_html__( 'Section title only for section.', 'cvitae' ),
									'std'         => esc_html__( 'Contact Me', 'cvitae' ),
									'type'        => 'text',
									'section'     => 'cvitae_contact_section'
								),
								array(
									'id'          => 'cvitae_contact_text',
									'label'       => esc_html__( 'Short Text', 'cvitae' ),
									'desc'        => esc_html__( 'Max 30 Words.', 'cvitae' ),
									'std'         => esc_html__( 'Short text here.', 'cvitae' ),
									'rows'        => '3',
									'type'        => 'textarea-simple',
									'section'     => 'cvitae_contact_section'
								),
								array(
									'id'          => 'cvitae_contact_image',
									'label'       => esc_html__( 'Signature/Image', 'cvitae' ),
									'desc'        => esc_html__( 'Maximum width 400px', 'cvitae' ),
									'type'        => 'upload',
									'std'         => '',
									'section'     => 'cvitae_contact_section'
								),
								array(
									'id'          => 'cvitae_contact_cf7_shortcode',
									'label'       => esc_html__( 'Contact Form 7 Shortcode', 'cvitae' ),
									'desc'        => 'Example: <code>[contact-form-7 id="1234" title="Contact form 1"]</code>',
									'type'        => 'text',
									'std'         => '',
									'section'     => 'cvitae_contact_section'
								),
								array(
									'id'          => 'cvitae_footer_text',
									'label'       => esc_html__( 'Footer Text', 'cvitae' ),
									'desc'        => esc_html__( 'Example: Copyright text.', 'cvitae' ),
									'type'        => 'text',
									'std'         => '',
									'section'     => 'cvitae_footer_section'
								),
								array(
									'id'          => 'cvitae_footer_links',
									'label'       => esc_html__( 'Social Links', 'cvitae' ),
									'desc'        => esc_html__( 'Goto top will autometically added in footer.', 'cvitae' ),
									'type'        => 'list-item',
									'section'     => 'cvitae_footer_section',
									'settings'    => array(
										array(
											'id'          => 'icon',
											'label'       => esc_html__( 'Icon Class', 'cvitae' ),
											'desc'        => sprintf( "%s <code>ti-facebook</code>", esc_html__( 'Themify Icon Class Example:', 'cvitae' ) ),
											'std'         => 'ti-facebook',
											'type'        => 'text'
										),
										array(
											'id'          => 'link',
											'label'       => esc_html__( 'Link Target', 'cvitae' ),
											'desc'        => sprintf( esc_html__( 'Remember to add the %s or %s part to the front of the link.', 'cvitae' ), '<code>http://</code>', '<code>https://</code>' ),
											'std'         => '#',
											'type'        => 'text'
										)
									)
								),
								array(
									'id'          => 'cvitae_page_cover',
									'label'       => esc_html__( 'Breadcrumb Background', 'cvitae' ),
									'desc'        => esc_html__( 'CVitae Breadcrumb Background 1920px X 555px. Blog List, Archive & Blog Single page.', 'cvitae' ),
									'std'         => '',
									'type'        => 'upload',
									'section'     => 'cvitae_breadcrumb_section'
								),
								array(
									'id'          => 'cvitae_custom_css',
									'label'       => esc_html__( 'CVitae custom CSS', 'cvitae' ),
									'desc'        => esc_html__( 'Custom CSS here', 'cvitae' ),
									'std'		  => '',
									'type'        => 'css',
									'section'     => 'cvitae_others_section'
								),
							)
						)
					)
				),
				array(
					'id'              => 'import_export',
					'pages'           => array(
						array(
							'id'              => 'import_export',
							'parent_slug'     => 'themes.php',
							'page_title'      => esc_html__( 'Backup/Restore Theme Option', 'cvitae' ),
							'menu_title'      => esc_html__( 'Backup/Restore Theme Option', 'cvitae' ),
							'capability'      => 'edit_theme_options',
							'menu_slug'       => 'cvitae-theme-backup',
							'icon_url'        => null,
							'position'        => 2,
							'updated_message' => esc_html__( 'Options updated.', 'cvitae' ),
							'reset_message'   => esc_html__( 'Options reset.', 'cvitae' ),
							'button_text'     => esc_html__( 'Save Changes', 'cvitae' ),
							'show_buttons'    => false,
							'screen_icon'     => '',
							'contextual_help' => null,
							'sections'        => array(
								array(
									'id'          => 'cvitae_import_export',
									'title'       => esc_html__( 'Import/Export', 'cvitae' )
								)
							),
							'settings'        => array(
								array(
									'id'          => 'import_data_text',
									'label'       => esc_html__( 'Import Theme Options', 'cvitae' ),
									'desc'        => '',
									'std'         => '',
									'type'        => 'import-data',
									'section'     => 'cvitae_import_export',
									'rows'        => '',
									'post_type'   => '',
									'taxonomy'    => '',
									'class'       => ''
								),
								array(
									'id'          => 'export_data_text',
									'label'       => esc_html__( 'Export Theme Options', 'cvitae' ),
									'desc'        => '',
									'std'         => '',
									'type'        => 'export-data',
									'section'     => 'cvitae_import_export',
									'rows'        => '',
									'post_type'   => '',
									'taxonomy'    => '',
									'class'       => ''
								)
							)
						)
					)
				)
			)
		);
	}
}