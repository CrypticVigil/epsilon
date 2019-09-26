<?php get_header(); ?>

<div class="jumbotron">
	<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/jumbotron-flower-lg.jpg" alt="A flower on a fuzzy green background">
</div>

<div class="container">
	
	<main>
		<?php get_template_part( 'loop' ); ?>
	</main>

	<div class="sidebar">
		<?php get_sidebar( 'primary-sidebar' ); ?>
	</div>

</div>

<?php get_footer(); ?>