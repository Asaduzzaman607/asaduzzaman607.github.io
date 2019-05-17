<?php 
/**
 * Widget API: CVitae_Image_Ad_Widget class
 *
 * @package CVitae
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class CVitae_Image_Ad_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'cvitae_social_widget',
			esc_html__( 'CVitae Image Ad', 'cvitae' ),
			array( 'description' => esc_html__( 'This widget is to display image Ad.', 'cvitae' ) )
		);
		add_action( 'admin_enqueue_scripts', array( $this, 'cvitae_enque_script' ) );
	}

	public function cvitae_enque_script(){
		if ( function_exists( 'wp_enqueue_media' ) ) {
			wp_enqueue_media();
		} else {
			add_thickbox();
		}
	}

	public function widget( $args, $instance ) {
		$image     = ! empty( $instance['image'] ) ? absint( $instance['image'] ) : 0;
		$image_url = ( wp_get_attachment_image_url( $image, 'full' ) ) ? wp_get_attachment_image_url( $image, 'full' ) : get_template_directory_uri() . '/assets/img/placeholder_widget_ad.jpg';
		?>
		<aside class="widget widget-image-banner">
			<a href="<?php echo esc_url( $instance['url'] ); ?>" <?php if ( $instance['url'] != '#' ) echo 'target="_blank"'; ?>><img src="<?php echo esc_url( $image_url ); ?>" class="img-responsive" /></a>
		</aside>
		<?php
	}

	public function form( $instance ) {

		$title       = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Image Ad', 'cvitae' );
		$url         = ! empty( $instance['url'] ) ? $instance['url'] : '#';
		$image       = ! empty( $instance['image'] ) ? absint( $instance['image'] ) : 0;
		$image_url   = ( wp_get_attachment_image_url( $image, 'full' ) ) ? wp_get_attachment_image_url( $image, 'full' ) : get_template_directory_uri() . '/assets/img/placeholder_widget_ad.jpg';
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'cvitae' ); ?></label>  
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('url') ); ?>"><?php echo esc_html__( 'URL', 'cvitae' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'url' ) ); ?>" type="text" value="<?php echo esc_url( $url ); ?>">
			<small><?php esc_html_e( 'Don\'t forget to add', 'cvitae' ); ?> <code>http://</code> | <code>https://</code></small>
		</p>
		
		<div style="margin-bottom: 10px;"><img id="<?php echo esc_attr( $this->get_field_id( 'image' ) . '_img' ) ?>" src="<?php echo esc_url( $image_url ); ?>" style="max-width:100%; height:auto;" /></div>
		
		<div style="line-height: 60px;">
			<input class="widefat" type="hidden" id="<?php echo esc_attr( $this->get_field_id( 'image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'image' ) ); ?>" value="<?php echo esc_attr( absint( $image ) ); ?>" />
			<button id="<?php echo esc_attr( $this->id . '_btn' ) ?>" type="button" class="button"><?php esc_html_e( 'Upload/Select image', 'cvitae' ) ?></button>
		</div>

		<div class="clear"></div>
		
		<script type="text/javascript">
		jQuery(function($){

			'use strict';

			var file_frame,
			    metaBox = $('#widgets-right'),
			    addImgLink = metaBox.find('#<?php echo esc_js( $this->id ) . "_btn"; ?>'),
			    imgPlaceHolder = metaBox.find('#<?php echo esc_js( $this->get_field_id("image") ) . "_img"; ?>'),
			    imgIdInput = metaBox.find('#<?php echo esc_js( $this->get_field_id("image") ); ?>');

			addImgLink.on( 'click', function( event ){
				event.preventDefault();

				if ( file_frame ) {
					file_frame.open();
					return;
				}
				
				file_frame = wp.media.frames.downloadable_file = wp.media({
					title: "<?php esc_html_e( 'Choose an Image', 'cvitae' ) ?>",
					button: { text: "<?php esc_html_e( 'Use Image', 'cvitae' ) ?>"	},
					multiple: false
				});
				
				file_frame.on( 'select', function() {
					var attachment = file_frame.state().get('selection').first().toJSON();
					imgPlaceHolder.attr( 'src', attachment.url );
					imgIdInput.val( attachment.id );
				});
				
				file_frame.open();

			});

		});
		</script>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance                = $old_instance;
		$default_img             = get_template_directory_uri() . '/assets/img/placeholder_widget_ad.jpg';
		$instance['title']       = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['url']         = ( ! empty( $new_instance['url'] ) ) ? esc_url_raw( $new_instance['url'] ) : '#';
		$instance['image']       = ( ! empty( $new_instance['image'] ) ) ? absint( sanitize_text_field( $new_instance['image'] ) ) : 0;
		
		return $instance;
	}
}

function cvitae_register_image_ad() {
    cvitae_reg_widget( 'CVitae_Image_Ad_Widget' );
}
add_action( 'widgets_init', 'cvitae_register_image_ad' );