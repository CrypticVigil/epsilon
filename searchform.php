<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>">
	<input type="search" name="s" placeholder="Search" value="<?php echo esc_attr(get_search_query())?>" />
	<button type='submit'><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/search.svg" alt="Search"></button>
</form>