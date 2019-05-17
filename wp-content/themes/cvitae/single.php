<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CVitae
 */

get_header(); ?>

<?php cvitae_render_breadcrumb(); ?>

<div class="site-content">

	<div class="cvitae-container">

		<div class="cvitae-row">

			<div class="content-area cvitae-col-md-9">

				<main class="site-main">

				<?php

					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_format() );

						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.

				?>
				
				</main>

			</div>

			<?php get_sidebar(); ?>

		</div>

	</div>

</div>

<?php

get_footer();
