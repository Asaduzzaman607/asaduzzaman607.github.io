<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'cvitae_meta_boxes' );

function cvitae_meta_boxes() {
  
	$cvitae_section_meta_box_args = array(
		'id'          => 'cvitae_featured_meta_box',
		'title'       => esc_html__( 'CVitae Section Settings', 'cvitae' ),
		'desc'        => '',
		'pages'       => array( 'section' ),
		'context'     => 'normal',
		'priority'    => 'high',
		'fields'      => array(
			array(
				'id'          => 'cvitae_alt_title',
				'label'       => esc_html__( 'Alter Title', 'cvitae' ),
				'desc'        => esc_html__( 'Alter title will show only on section.', 'cvitae' ),
				'std'         => '',
				'type'        => 'text'
			),
			array(
				'id'          => 'cvitae_section_visibility',
				'label'       => esc_html__( 'Visibile on the menu', 'cvitae' ),
				'desc'        => esc_html__( 'If you want to hide this section from menu turn it off. But this section will visible on page.', 'cvitae' ),
				'std'         => 'on',
				'type'        => 'on-off'
			),
			array(
				'id'          => 'cvitae_section_type',
				'label'       => esc_html__( 'Section Type', 'cvitae' ),
				'std'         => '',
				'type'        => 'select',
				'choices'     => array(
					array(
						'value'       => '',
						'label'       => esc_html__( 'Please Select One', 'cvitae' )
					),
					array(
						'value'       => 'about',
						'label'       => 'About'
					),
					array(
						'value'       => 'skill',
						'label'       => 'Skills'
					),
					array(
						'value'       => 'achievement',
						'label'       => 'Achievement'
					),
					array(
						'value'       => 'education',
						'label'       => 'Education'
					),
					array(
						'value'       => 'portfolio',
						'label'       => 'Portfolio'
					),
					array(
						'value'       => 'tesimonial',
						'label'       => 'Tesimonial'
					),
					array(
						'value'       => 'experience',
						'label'       => 'Experience'
					),
					array(
						'value'       => 'blog',
						'label'       => 'Blog'
					),
					array(
						'value'       => 'client',
						'label'       => 'Client'
					),
				)
			),
			array(
				'id'          => 'cvitae_about_image',
				'label'       => esc_html__( 'Bio Image', 'cvitae' ),
				'desc'        => esc_html__( 'Image Resolution 425x319', 'cvitae' ),
				'std'         => get_template_directory_uri() . '/assets/img/placeholder_bio.jpg',
				'type'        => 'upload',
				'condition'   => 'cvitae_section_type:is(about)'
			),
			array(
				'id'          => 'cvitae_about_text',
				'label'       => esc_html__( 'Short Text', 'cvitae' ),
				'std'         => esc_html__( 'Short text here.', 'cvitae' ),
				'desc'        => esc_html__( 'Max 30 Words.', 'cvitae' ),
				'rows'        => '3',
				'type'        => 'textarea-simple',
				'condition'   => 'cvitae_section_type:is(about)'
			),
			array(
				'id'          => 'cvitae_about_info',
				'label'       => esc_html__( 'Info', 'cvitae' ),
				'type'        => 'list-item',
				'settings'    => array(
					array(
						'id'          => 'text',
						'label'       => esc_html__( 'Text', 'cvitae' ),
						'std'         => esc_html__( 'Text', 'cvitae' ),
						'type'        => 'text'
					)
				),
				'condition'   => 'cvitae_section_type:is(about)'
			),
			array(
				'id'          => 'cvitae_about_links',
				'label'       => esc_html__( 'Social Links', 'cvitae' ),
				'type'        => 'list-item',
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
				),
				'condition'   => 'cvitae_section_type:is(about)'
			),
			array(
				'id'          => 'cvitae_skill_highlights',
				'label'       => esc_html__( 'Highlights', 'cvitae' ),
				'type'        => 'list-item',
				'settings'    => array(
					array(
						'id'          => 'hidden_field',
						'label'       => esc_html__( 'Hidden', 'cvitae' ),
						'std'         => '',
						'type'        => 'text',
						'condition'   => 'cvitae_section_type:is(hidden)'
					)
				),
				'condition'   => 'cvitae_section_type:is(skill)'
			),
			array(
				'id'          => 'cvitae_skill_skillbar',
				'label'       => esc_html__( 'Skills', 'cvitae' ),
				'type'        => 'list-item',
				'settings'    => array(
					array(
						'id'          => 'percentage',
						'label'       => esc_html__( 'Percentage', 'cvitae' ),
						'desc'        => esc_html__( 'Value: 0 to 100', 'cvitae' ),
						'std'         => '50',
						'type'        => 'text'
					)
				),
				'condition'   => 'cvitae_section_type:is(skill)'
			),
			array(
				'id'          => 'cvitae_achievement_margin_fix',
				'label'       => esc_html__( 'Disable Bottom Margin', 'cvitae' ),
				'std'         => 'off',
				'desc'        => esc_html__( 'If ON bottom margin will be zero.', 'cvitae' ),
				'type'        => 'on-off',
				'condition'   => 'cvitae_section_type:is(achievement)'
			),
			array(
				'id'          => 'cvitae_achievement_background',
				'label'       => esc_html__( 'Background Image', 'cvitae' ),
				'desc'        => esc_html__( 'Image Resolution 1920x1080', 'cvitae' ),
				'std'         => '',
				'type'        => 'upload',
				'condition'   => 'cvitae_section_type:is(achievement)'
			),
			array(
				'id'          => 'cvitae_achievement_text',
				'label'       => esc_html__( 'Short Text', 'cvitae' ),
				'std'         => esc_html__( 'Short text here.', 'cvitae' ),
				'desc'        => esc_html__( 'Max 30 Words.', 'cvitae' ),
				'rows'        => '3',
				'type'        => 'textarea-simple',
				'condition'   => 'cvitae_section_type:is(achievement)'
			),
			array(
				'id'          => 'cvitae_achievements',
				'label'       => esc_html__( 'Achievements', 'cvitae' ),
				'type'        => 'list-item',
				'settings'    => array(
					array(
						'id'          => 'date',
						'label'       => esc_html__( 'Date', 'cvitae' ),
						'std'         => esc_html__( '7th June, 2016', 'cvitae' ),
						'type'        => 'text',
					),
					array(
						'id'          => 'deatials',
						'label'       => esc_html__( 'Deatials', 'cvitae' ),
						'std'         => esc_html__( 'Your text here...', 'cvitae' ),
						'rows'        => '3',
						'type'        => 'textarea-simple',
					)
				),
				'condition'   => 'cvitae_section_type:is(achievement)'
			),
			array(
				'id'          => 'cvitae_education_text',
				'label'       => esc_html__( 'Short Text', 'cvitae' ),
				'std'         => esc_html__( 'Short text here.', 'cvitae' ),
				'desc'        => esc_html__( 'Max 30 Words.', 'cvitae' ),
				'rows'        => '3',
				'type'        => 'textarea-simple',
				'condition'   => 'cvitae_section_type:is(education)'
			),
			array(
				'id'          => 'cvitae_educations',
				'label'       => esc_html__( 'Academic Degrees', 'cvitae' ),
				'type'        => 'list-item',
				'settings'    => array(
					array(
						'id'          => 'duration',
						'label'       => esc_html__( 'Time Period', 'cvitae' ),
						'std'         => esc_html__( '2000', 'cvitae' ),
						'type'        => 'text',
					),
					array(
						'id'          => 'deatials',
						'label'       => esc_html__( 'Deatials', 'cvitae' ),
						'std'         => esc_html__( 'Your degree here...', 'cvitae' ),
						'rows'        => '3',
						'type'        => 'textarea-simple',
					)
				),
				'condition'   => 'cvitae_section_type:is(education)'
			),
			array(
				'id'          => 'cvitae_portfolio_text',
				'label'       => esc_html__( 'Short Text', 'cvitae' ),
				'std'         => esc_html__( 'Short text here.', 'cvitae' ),
				'desc'        => esc_html__( 'Max 30 Words.', 'cvitae' ),
				'rows'        => '3',
				'type'        => 'textarea-simple',
				'condition'   => 'cvitae_section_type:is(portfolio)'
			),
			array(
				'id'          => 'cvitae_portfolio_albums',
				'label'       => esc_html__( 'Albums', 'cvitae' ),
				'desc'        => esc_html__( 'Maximum 4 Albums will be shown on fronted.', 'cvitae' ),
				'type'        => 'list-item',
				'settings'    => array(
					array(
						'id'          => 'item_1_title',
						'label'       => esc_html__( 'Item 1 Title', 'cvitae' ),
						'std'         => 'title',
						'type'        => 'text'
					),
					array(
						'id'          => 'item_1_image',
						'label'       => esc_html__( 'Item 1 Image', 'cvitae' ),
						'desc'        => esc_html__( 'Image Resolution 550x400', 'cvitae' ),
						'std'         => get_template_directory_uri() . '/assets/img/placeholder_portfolio.jpg',
						'type'        => 'upload',
					),
					array(
						'id'          => 'item_1_link',
						'label'       => esc_html__( 'Item 1 link', 'cvitae' ),
						'desc'        => sprintf( esc_html__( 'Remember to add the %s or %s part to the front of the link.', 'cvitae' ), '<code>http://</code>', '<code>https://</code>' ),
						'std'         => '#',
						'type'        => 'text'
					),
					array(
						'id'          => 'item_1_description',
						'label'       => esc_html__( 'Item 1 Short Description', 'cvitae' ),
						'desc'        => esc_html__( 'Max 30 Words.', 'cvitae' ),
						'std'         => esc_html__( 'Short text here.', 'cvitae' ),
						'rows'        => '3',
						'type'        => 'textarea-simple'
					),
					array(
						'id'          => 'item_2_title',
						'label'       => esc_html__( 'Item 2 Title', 'cvitae' ),
						'std'         => 'title',
						'type'        => 'text'
					),
					array(
						'id'          => 'item_2_image',
						'label'       => esc_html__( 'Item 2 Image', 'cvitae' ),
						'desc'        => esc_html__( 'Image Resolution 550x400', 'cvitae' ),
						'std'         => get_template_directory_uri() . '/assets/img/placeholder_portfolio.jpg',
						'type'        => 'upload',
					),
					array(
						'id'          => 'item_2_link',
						'label'       => esc_html__( 'Item 2 link', 'cvitae' ),
						'desc'        => sprintf( esc_html__( 'Remember to add the %s or %s part to the front of the link.', 'cvitae' ), '<code>http://</code>', '<code>https://</code>' ),
						'std'         => '#',
						'type'        => 'text'
					),
					array(
						'id'          => 'item_2_description',
						'label'       => esc_html__( 'Item 2 Short Description', 'cvitae' ),
						'desc'        => esc_html__( 'Max 30 Words.', 'cvitae' ),
						'std'         => esc_html__( 'Short text here.', 'cvitae' ),
						'rows'        => '3',
						'type'        => 'textarea-simple'
					),
					array(
						'id'          => 'item_3_title',
						'label'       => esc_html__( 'Item 3 Title', 'cvitae' ),
						'std'         => 'title',
						'type'        => 'text'
					),
					array(
						'id'          => 'item_3_image',
						'label'       => esc_html__( 'Item 3 Image', 'cvitae' ),
						'desc'        => esc_html__( 'Image Resolution 550x400', 'cvitae' ),
						'std'         => get_template_directory_uri() . '/assets/img/placeholder_portfolio.jpg',
						'type'        => 'upload',
					),
					array(
						'id'          => 'item_3_link',
						'label'       => esc_html__( 'Item 3 link', 'cvitae' ),
						'desc'        => sprintf( esc_html__( 'Remember to add the %s or %s part to the front of the link.', 'cvitae' ), '<code>http://</code>', '<code>https://</code>' ),
						'std'         => '#',
						'type'        => 'text'
					),
					array(
						'id'          => 'item_3_description',
						'label'       => esc_html__( 'Item 3 Short Description', 'cvitae' ),
						'desc'        => esc_html__( 'Max 30 Words.', 'cvitae' ),
						'std'         => esc_html__( 'Short text here.', 'cvitae' ),
						'rows'        => '3',
						'type'        => 'textarea-simple'
					),
				),
				'condition'   => 'cvitae_section_type:is(portfolio)'
			),
			array(
				'id'          => 'cvitae_testimonial_margin_fix',
				'label'       => esc_html__( 'Disable Bottom Margin', 'cvitae' ),
				'std'         => 'off',
				'desc'        => esc_html__( 'If ON bottom margin will be zero.', 'cvitae' ),
				'type'        => 'on-off',
				'condition'   => 'cvitae_section_type:is(tesimonial)'
			),
			array(
				'id'          => 'cvitae_testimonial_background',
				'label'       => esc_html__( 'Background Image', 'cvitae' ),
				'desc'        => esc_html__( 'Image Resolution 1920x1080', 'cvitae' ),
				'std'         => '',
				'type'        => 'upload',
				'condition'   => 'cvitae_section_type:is(tesimonial)'
			),
			array(
				'id'          => 'cvitae_testimonial_text',
				'label'       => esc_html__( 'Short Text', 'cvitae' ),
				'std'         => esc_html__( 'Short text here.', 'cvitae' ),
				'desc'        => esc_html__( 'Max 30 Words.', 'cvitae' ),
				'rows'        => '3',
				'type'        => 'textarea-simple',
				'condition'   => 'cvitae_section_type:is(tesimonial)'
			),
			array(
				'id'          => 'cvitae_testimonials',
				'label'       => esc_html__( 'Tesimonials', 'cvitae' ),
				'type'        => 'list-item',
				'settings'    => array(
					array(
						'id'          => 'designation',
						'label'       => esc_html__( 'designation', 'cvitae' ),
						'std'         => esc_html__( 'CEO at COMPANY', 'cvitae' ),
						'type'        => 'text',
					),
					array(
						'id'          => 'message',
						'label'       => esc_html__( 'Message', 'cvitae' ),
						'std'         => esc_html__( 'Message text here...', 'cvitae' ),
						'rows'        => '3',
						'type'        => 'textarea-simple',
					)
				),
				'condition'   => 'cvitae_section_type:is(tesimonial)'
			),
			array(
				'id'          => 'cvitae_experience_text',
				'label'       => esc_html__( 'Short Text', 'cvitae' ),
				'std'         => esc_html__( 'Short text here.', 'cvitae' ),
				'desc'        => esc_html__( 'Max 30 Words.', 'cvitae' ),
				'rows'        => '3',
				'type'        => 'textarea-simple',
				'condition'   => 'cvitae_section_type:is(experience)'
			),
			array(
				'id'          => 'cvitae_experiences',
				'label'       => esc_html__( 'Experiences', 'cvitae' ),
				'type'        => 'list-item',
				'settings'    => array(
					array(
						'id'          => 'designation',
						'label'       => esc_html__( 'Position', 'cvitae' ),
						'std'         => esc_html__( 'Position', 'cvitae' ),
						'type'        => 'text',
					),
					array(
						'id'          => 'duration',
						'label'       => esc_html__( 'Duration', 'cvitae' ),
						'std'         => esc_html__( '20xx to 20xx', 'cvitae' ),
						'type'        => 'text',
					),
					array(
						'id'          => 'responsibilities',
						'label'       => esc_html__( 'Responsibility', 'cvitae' ),
						'std'         => esc_html__( 'Details about responsibilit here...', 'cvitae' ),
						'rows'        => '3',
						'type'        => 'textarea-simple',
					)
				),
				'condition'   => 'cvitae_section_type:is(experience)'
			),
			array(
				'id'          => 'cvitae_blog_text',
				'label'       => esc_html__( 'Short Text', 'cvitae' ),
				'std'         => esc_html__( 'Short text here.', 'cvitae' ),
				'desc'        => esc_html__( 'Max 30 Words.', 'cvitae' ),
				'rows'        => '3',
				'type'        => 'textarea-simple',
				'condition'   => 'cvitae_section_type:is(blog)'
			),
			array(
				'id'          => 'cvitae_client_margin_fix',
				'label'       => esc_html__( 'Disable Bottom Margin', 'cvitae' ),
				'std'         => 'off',
				'desc'        => esc_html__( 'If ON bottom margin will be zero.', 'cvitae' ),
				'type'        => 'on-off',
				'condition'   => 'cvitae_section_type:is(client)'
			),
			array(
				'id'          => 'cvitae_client_background',
				'label'       => esc_html__( 'Background', 'cvitae' ),
				'desc'        => esc_html__( 'Image Resolution 1920x1080', 'cvitae' ),
				'std'         => '',
				'type'        => 'upload',
				'condition'   => 'cvitae_section_type:is(client)'
			),
			array(
				'id'          => 'cvitae_client_text',
				'label'       => esc_html__( 'Short Text', 'cvitae' ),
				'std'         => esc_html__( 'Short text here.', 'cvitae' ),
				'desc'        => esc_html__( 'Max 30 Words.', 'cvitae' ),
				'rows'        => '3',
				'type'        => 'textarea-simple',
				'condition'   => 'cvitae_section_type:is(client)'
			),
			array(
				'id'          => 'cvitae_clients',
				'label'       => esc_html__( 'Clients', 'cvitae' ),
				'type'        => 'list-item',
				'settings'    => array(
					array(
						'id'          => 'logo',
						'label'       => esc_html__( 'Client Logo', 'cvitae' ),
						'desc'        => esc_html__( 'Image Resolution 422x168', 'cvitae' ),
						'std'         => get_template_directory_uri() . '/assets/img/placeholder_client.jpg',
						'type'        => 'upload',
					),
					array(
						'id'          => 'link',
						'label'       => esc_html__( 'Link Target', 'cvitae' ),
						'desc'        => sprintf( esc_html__( 'Remember to add the %s or %s part to the front of the link.', 'cvitae' ), '<code>http://</code>', '<code>https://</code>' ),
						'std'         => '#',
						'type'        => 'text'
					)
				),
				'condition'   => 'cvitae_section_type:is(client)'
			),
		) // Settings Ends
	);

	$cvitae_post_meta_box_args = array(
		'id'          => 'cvitae_post_meta_box',
		'title'       => esc_html__( 'CVitae Post Settings', 'cvitae' ),
		'desc'        => '',
		'pages'       => array( 'post' ),
		'context'     => 'normal',
		'priority'    => 'high',
		'fields'      => array(
			array(
				'id'          => 'cvitae_post_type',
				'label'       => esc_html__( 'Post Settings For', 'cvitae' ),
				'desc'        => esc_html__( 'No extra settings for standard post. Choose video or audio or gallery for other settings.', 'cvitae' ),
				'std'         => '1',
				'type'        => 'radio',
				'choices'     => array(
					array(
						'value'       => '1',
						'label'       => __( 'Standard / No Settings', 'cvitae' ),
						'src'         => ''
					),
					array(
						'value'       => '2',
						'label'       => __( 'Video', 'cvitae' ),
						'src'         => ''
					),
					array(
						'value'       => '3',
						'label'       => __( 'Audio', 'cvitae' ),
						'src'         => ''
					),
					array(
						'value'       => '4',
						'label'       => __( 'Gallery', 'cvitae' ),
						'src'         => ''
					),
					array(
						'value'       => '5',
						'label'       => __( 'Quote', 'cvitae' ),
						'src'         => ''
					)
				)
			),
			array(
				'id'          => 'cvitae_video_type',
				'label'       => esc_html__( 'Video Type', 'cvitae' ),
				'desc'        => sprintf( esc_html__( 'Example: Video link %s the video ID is %s', 'cvitae' ), '<code>https://www.youtube.com/watch?v=IalgBQQKROU</code>', '<code>IalgBQQKROU</code>' ),
				'std'         => 'youtube',
				'type'        => 'radio',
				'choices'     => array(
					array(
						'value'       => 'youtube',
						'label'       => 'Youtube',
						'src'         => ''
					),
					array(
						'value'       => 'vimeo',
						'label'       => 'Vimeo',
						'src'         => ''
					)
				),
				'condition'   => 'cvitae_post_type:is(2)'
			),
			array(
				'id'          => 'cvitae_video_id',
				'label'       => esc_html__( 'Video ID', 'cvitae' ),
				'std'         => 'IalgBQQKROU',
				'type'        => 'text',
				'condition'   => 'cvitae_post_type:is(2)'
			),
			array(
				'id'          => 'cvitae_audio_id',
				'label'       => esc_html__( 'SoundCloud Track ID', 'cvitae' ),
				'desc'        => sprintf( esc_html__( 'From embedded code %s Example: %s the track ID is %s', 'cvitae' ), '<code>src</code>', '<code>https%3A//api.soundcloud.com/tracks/239117456</code>', '<code>239117456</code>' ),
				'std'         => '239117456',
				'type'        => 'text',
				'condition'   => 'cvitae_post_type:is(3)'
			),
			array(
				'id'          => 'cvitae_gallery_images',
				'label'       => esc_html__( 'Gallery Images', 'cvitae' ),
				'std'         => '',
				'type'        => 'list-item',
				'settings'    => array(
					array(
						'id'          => 'cvitae_image',
						'label'       => esc_html__( 'Image', 'cvitae' ),
						'std'         => get_template_directory_uri() . '/assets/img/placeholder_blog.jpg',
						'type'        => 'upload'
					),
				),
				'condition'   => 'cvitae_post_type:is(4)'
			),
			array(
				'id'          => 'cvitae_quote_text',
				'label'       => esc_html__( 'Quote', 'cvitae' ),
				'desc'        => esc_html__( 'Quote text here', 'cvitae' ),
				'std'         => esc_html__( 'Quote Text', 'cvitae' ),
				'type'        => 'text',
				'condition'   => 'cvitae_post_type:is(5)'
			),
			array(
				'id'          => 'cvitae_quote_author',
				'label'       => esc_html__( 'Author', 'cvitae' ),
				'desc'        => esc_html__( 'Quote author here. If you don\'t want to show author just leave it blank.', 'cvitae' ),
				'std'         => '',
				'type'        => 'text',
				'condition'   => 'cvitae_post_type:is(5)'
			)
		) // Settings Ends
	);
  
	if ( function_exists( 'ot_register_meta_box' ) ){

		ot_register_meta_box( $cvitae_section_meta_box_args );
		
		ot_register_meta_box( $cvitae_post_meta_box_args );

	}
}