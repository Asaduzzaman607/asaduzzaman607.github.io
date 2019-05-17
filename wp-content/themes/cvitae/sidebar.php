<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CVitae
 */

?>

<div id="secondary" class="cvitae-col-md-3" role="complementary">
	<div class="widget-area">
		
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

			<?php dynamic_sidebar( 'sidebar-1' ); ?>

		<?php else : ?>

			<aside class="widget">
				<h2 class="widget-title"><?php esc_html_e( 'No widget found!', 'cvitae' ); ?></h2>
			</aside>

		<?php endif; ?>
	</div>
</div><!-- #secondary -->
