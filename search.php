<?php get_header(); ?>

<div class="container">
	
	<main>
		<h1 class="search-results">
			<?php printf( esc_html__( 'Search results for: %s', 'epsilon' ), get_search_query() ); ?>
		</h1>

		<?php get_template_part( 'loop' ); ?>

	</main>

	<div class="sidebar">
		<?php get_sidebar( 'primary-sidebar' ); ?>
	</div>

</div>

<?php get_footer(); ?>