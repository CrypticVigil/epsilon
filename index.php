<?php get_header(); ?>

<div class="jumbotron"></div>

<div class="container">
	
	<main>
		<?php get_template_part( 'loop' ); ?>
	</main>

	<div class="sidebar">
		<?php get_sidebar( 'primary-sidebar' ); ?>
	</div>

</div>

<?php get_footer(); ?>