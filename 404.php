<?php get_header(); ?>

<div class="not-found">
	
	<div class="not-found__container">
		<h1>Page Not Found (404 Error)</h1>
		<p>The page you've requested cannot be found. It's possible the link you followed is out of date, or maybe you mistyped the address. Either way, why don't you try searching for what you were looking for?</p>
		<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>">
			<input type="search" name="s" placeholder="Search" value="<?php echo esc_attr(get_search_query())?>" />
			<button type='submit'><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/search.svg" alt="Search"></button>
		</form>
	</div>

</div>

<?php get_footer(); ?>