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

	<?php $audio_id = get_post_meta( get_the_ID(), 'cvitae_audio_id', true ); ?>

	<div class="featured-image">

		<iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php echo esc_attr( $audio_id ); ?>&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;visual=true" width="890" height="514"></iframe>

	</div>

	<?php if( is_single() ) : ?>

		<?php cvitae_render_blog_single_details(); ?>

	<?php else : ?>

		<?php cvitae_render_blog_list_details(); ?>

	<?php endif; ?>

</article>