<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'cvitae' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr__( 'Search &hellip;', 'cvitae' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
		<span class="underline"></span>
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr__( 'Search', 'cvitae' ); ?>" />
</form>