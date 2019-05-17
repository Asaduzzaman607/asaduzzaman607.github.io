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

	$video_type = get_post_meta( get_the_ID(), 'cvitae_video_type', true );

	$video_id = get_post_meta( get_the_ID(), 'cvitae_video_id', true );

	?>

	<div class="featured-image">

		<?php if( $video_type == 'youtube' ) : ?>

			<div class="entry-video embed-responsive embed-responsive-16by9">
				<iframe src="https://www.youtube.com/embed/<?php echo esc_attr( $video_id ); ?>?rel=0&amp;showinfo=0" width="890" height="514" allowfullscreen></iframe>
			</div>

		<?php else : ?>

			<div class="entry-video embed-responsive embed-responsive-16by9">
				<iframe src="https://player.vimeo.com/video/<?php echo esc_attr( $video_id ); ?>?title=0&amp;byline=0&amp;portrait=0" width="890" height="514" allowfullscreen></iframe>
			</div>

		<?php endif; ?>

	</div>

	<?php if( is_single() ) : ?>

		<?php cvitae_render_blog_single_details(); ?>

	<?php else : ?>

		<?php cvitae_render_blog_list_details(); ?>

	<?php endif; ?>

</article>