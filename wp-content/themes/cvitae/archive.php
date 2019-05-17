<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CVitae
 */

get_header(); ?>

<?php cvitae_render_breadcrumb(); ?>

<div class="site-content">

	<div class="cvitae-container">

		<div class="cvitae-row">

			<div class="content-area cvitae-col-md-9">
				
				<main class="site-main cvitae-blog-list">

					<?php if ( have_posts() ) : ?>

						<?php while ( have_posts() ) : the_post(); ?>
							
							<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
								
						<?php endwhile; ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>

					<?php cvitae_pagination( '', '', $paged ); ?>

				</main>

			</div>

			<?php get_sidebar(); ?>

		</div>

	</div>

</div>

<?php

get_footer();