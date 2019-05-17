<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CVitae
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?>>

	<?php if( has_post_thumbnail() ) : ?>

		<div class="featured-image">

			<a href="<?php echo esc_url( get_the_permalink() ); ?>">
			
				<?php the_post_thumbnail( 'cvitae-blog-image' ); ?>

			</a>


		</div>

	<?php endif; ?>

	<?php if( is_single() ) : ?>

		<?php cvitae_render_blog_single_details(); ?>

	<?php else : ?>

		<?php cvitae_render_blog_list_details(); ?>

	<?php endif; ?>

</article>