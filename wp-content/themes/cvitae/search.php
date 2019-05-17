<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package CVitae
 */

get_header(); ?>

<div class="blog-single-header">
	<div class="cvitae-container">
		<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'cvitae' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		<ol class="cvitae-breadcrumb">
			<li><a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Home', 'cvitae' ); ?></a></li>
			<li class="active"><?php printf( esc_html__( 'Search Results for: %s', 'cvitae' ), '<span>' . get_search_query() . '</span>' ); ?></li>
		</ol>
	</div>
</div>

<div class="site-content">

	<div class="cvitae-container">

		<div class="cvitae-row">

			<div class="content-area cvitae-col-md-9">

				<main class="site-main">

					<?php
					if ( have_posts() ) : ?>

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
					
				</main>

			</div>

			<?php get_sidebar(); ?>

		</div>

	</div>

</div>


<?php

get_footer();
