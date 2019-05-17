<?php 
/**
 * Widget API: CVitae_Social_Links_Widget class
 *
 * @package CVitae
 * @since 1.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class CVitae_Social_Links_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'cvitae_social_links_widget',
			esc_html__( 'CVitae Social Links', 'cvitae' ),
			array( 'description' => esc_html__( 'CVitae Theme Widget to display social links.', 'cvitae' ) )
		);
		add_action( 'admin_enqueue_scripts', array( $this, 'social_links_scripts' ) );
	}

	public function social_links_scripts(){
		wp_enqueue_style( 'cvitae-admin-style', get_template_directory_uri() . '/assets/css/admin-styles.css', array(), '1.0.0' );
	}

	public function widget( $args, $instance ) {

		$title       = ! empty( $instance['title'] ) ? $instance['title'] : '';
		$css_classes = ! empty( $instance['class'] ) ? $this->validate_css_class( $instance['class'] ) : array();
		$links_text  = ! empty( $instance['text'] ) ? $this->validate_link_text( $instance['text'] ) : array();
		$urls        = ! empty( $instance['url'] ) ? $this->validate_url( $instance['url'] ) : array();
		?>
		
		<aside class="widget widget_social_profile">

			<?php if ( ! empty( $title ) ) : ?>

				<?php echo '<h2 class="widget-title">' . apply_filters( 'widget_title', $title, $args['id'] ) . '</h2>'; ?>

			<?php endif; ?>

			<?php if( count( $css_classes ) > 0 ) : ?>

				<ul>
					
					<?php foreach ($css_classes as $index => $css_class) : ?>

						<li><a href="<?php echo esc_url( $urls[$index] ); ?>"><span class="<?php echo esc_attr( $css_class ); ?>"></span> <?php echo esc_html( $links_text[$index] ); ?></a></li>

					<?php endforeach; ?>

				</ul>

			<?php endif; ?>

		</aside>
		<?php
	}

	public function form( $instance ) {

		$title       = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Social Profiles', 'cvitae' );

		$css_classes = ! empty( $instance['class'] ) ? $this->validate_css_class( $instance['class'] ) : array();
		$links_text  = ! empty( $instance['text'] ) ? $this->validate_link_text( $instance['text'] ) : array();
		$urls        = ! empty( $instance['url'] ) ? $this->validate_url( $instance['url'] ) : array();
		
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'cvitae' ); ?></label>  
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>

		<div id="<?php echo esc_attr( $this->id . 'iconic-links' ); ?>" class="iconic-links">

			<?php foreach ($css_classes as $index => $css_class) : ?>
				<p class="cvitae-icon-link">
					<label class="label"><?php esc_html_e( 'Class Name', 'cvitae' ); ?>: </label>
					<input class="input" name="<?php echo esc_attr( $this->get_field_name( 'class' ) ); ?>[]" type="text" value="<?php echo esc_attr( $css_class ); ?>">
					<label class="label"><?php esc_html_e( 'Text', 'cvitae' ); ?>: </label>
					<input class="input" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>[]" type="text" value="<?php echo esc_attr( $links_text[$index] ); ?>">
					<label class="label"><?php esc_html_e( 'URL', 'cvitae' ); ?>: </label>
					<input class="input" name="<?php echo esc_attr( $this->get_field_name( 'url' ) ); ?>[]" type="text" value="<?php echo esc_url( $urls[$index] ); ?>">
					<span class="<?php echo esc_attr( $this->id . '-icon-remove' ); ?> icon-remove"><?php esc_html_e( 'Remove', 'cvitae' ); ?> [x]</span>
				</p>
			<?php endforeach; ?>
			
		</div>

		<p>
			<span id="<?php echo esc_attr( $this->id . 'add_icon_link' ); ?>" class="add_icon_link"><?php esc_html_e( 'Add Link', 'cvitae' ); ?></span>
		</p>

		<?php if ( $this->number == "__i__" ) { ?>
			<small><?php esc_html_e( 'Please save the widget first.', 'cvitae' ); ?></small>
		<?php }	?>

		<div class="clear"></div>
		
		<script type="text/javascript">
		jQuery(function($){

			'use strict';

			var metaBox = $('#widgets-right'),
			    addLinkBtn = metaBox.find( '#<?php echo esc_js( $this->id . 'add_icon_link' ); ?>' ),
			    linksContainer = metaBox.find( '#<?php echo esc_js( $this->id . 'iconic-links' ); ?>' ),
			    removeItem = metaBox.find( '.<?php echo esc_attr( $this->id . '-icon-remove' ); ?>' );

			var link = '<p class="cvitae-icon-link">' +
				'<label class="label"><?php esc_html_e( 'Class Name', 'cvitae' ); ?>: </label>' +
				'<input class="input" name="<?php echo esc_attr( $this->get_field_name( 'class' ) ); ?>[]" type="text" value="<?php echo esc_attr( 'ti-facebook' ); ?>">' +
				'<label class="label"><?php esc_html_e( 'Text', 'cvitae' ); ?>: </label>' +
				'<input class="input" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>[]" type="text" value="<?php echo esc_attr( 'Link Text' ); ?>">' +
				'<label class="label"><?php esc_html_e( 'URL', 'cvitae' ); ?>: </label>' +
				'<input class="input" name="<?php echo esc_attr( $this->get_field_name( 'url' ) ); ?>[]" type="text" value="<?php echo esc_attr( '#' ); ?>">' +
				'<span class="<?php echo esc_attr( $this->id . '-icon-remove' ); ?> icon-remove"><?php esc_html_e( 'Remove', 'cvitae' ); ?> [x]</span>' +
			'</p>';

			addLinkBtn.on( 'click', function(event){
				event.preventDefault();
				linksContainer.append( link );
			});

			removeItem.on( 'click', function(event){
				event.preventDefault();
				$(this).parent().remove();
			});

		});
		</script>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		
		$instance          = $old_instance;

		$instance['title'] = ! empty( $new_instance['title'] ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['class'] = ! empty( $new_instance['class'] ) ? $this->validate_css_class($new_instance['class']) : array();
		$instance['text']  = ! empty( $new_instance['text'] ) ? $this->validate_link_text( $new_instance['text'] ) : array();
		$instance['url']   = ! empty( $new_instance['url'] ) ? $this->validate_url( $new_instance['url'] ) : array();

		return $instance;

	}

	public function validate_css_class( $css_classes ){
		foreach ($css_classes as $index => $css_class) {
			$css_classes[$index] = ! empty( $css_class ) ? sanitize_html_class( $css_class ) : 'ti-facebook';
		}
		return $css_classes;
	}

	public function validate_link_text( $texts ){
		foreach ($texts as $index => $text) {
			$texts[$index] = ! empty( $text ) ? sanitize_text_field( $text ) : 'Link Text';
		}
		return $texts;
	}

	public function validate_url( $urls ){
		foreach ($urls as $index => $url) {
			$urls[$index] = ! empty( $url ) ? esc_url_raw( $url ) : '#';
		}
		return $urls;
	}

}

function cvitae_register_social_links_widget() {
    cvitae_reg_widget( 'CVitae_Social_Links_Widget' );
}
add_action( 'widgets_init', 'cvitae_register_social_links_widget' );