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

	<?php

	$quote = get_post_meta( get_the_ID(), 'cvitae_quote_text', true );
	
	$author = get_post_meta( get_the_ID(), 'cvitae_quote_author', true );

	?>

	<blockquote>

		<p><?php echo esc_html( $quote ); ?></p>
		
		<?php if( $author != '' ) : ?>
		
			<footer>&mdash; <?php echo esc_html( $author ); ?></footer>

		<?php endif; ?>

	</blockquote>

	<?php if( ! is_single() ) : ?>

		<a href="<?php echo esc_url( get_permalink() ); ?>" class="continue-reading"><?php esc_html_e( 'Continue Reading', 'cvitae' ); ?></a>

	<?php endif; ?>


	<?php if( is_single() ) : ?>

		<?php cvitae_render_blog_single_details(); ?>

	<?php endif; ?>

</article>