<?php get_header(); ?>

<div class="jumbotron">
	<div class="jumbotron-text">Embracing life as our beautiful, broken,<br class="mobile-hide"> holy, <br class="desktop-hide"> messy selves.</div>
	<img 
		srcset="<?php echo get_bloginfo( 'template_directory' ); ?>/img/jumbotron-flower-sm.jpg 800w,
						<?php echo get_bloginfo( 'template_directory' ); ?>/img/jumbotron-flower-lg.jpg 2160w"
		sizes= "100vw"
		src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/jumbotron-flower-lg.jpg" alt="A flower on a fuzzy green background">
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