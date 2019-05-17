<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CVitae
 */
?>


<?php $gallery_images = get_post_meta( get_the_ID(), 'cvitae_gallery_images', true ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?>>

	<?php if( $gallery_images ) : ?>

		<div class="featured-image">

			<div class="owl-carousel cvitae-post-carousel">

				<?php foreach( $gallery_images as $item ) : ?>

			    	<div class="item"><a href="<?php echo esc_url( get_the_permalink() ); ?>"><img src="<?php echo esc_url( $item['cvitae_image'] ); ?>" class="img-responsive" alt="<?php echo esc_attr( $item['title'] ); ?>"></a></div>

			    <?php endforeach; ?>

			</div>

		</div>

	<?php endif; ?>
	

	<?php if( is_single() ) : ?>

		<?php cvitae_render_blog_single_details(); ?>

	<?php else : ?>

		<?php cvitae_render_blog_list_details(); ?>

	<?php endif; ?>

</article>