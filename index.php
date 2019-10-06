<?php get_header(); ?>

<div class="jumbotron">
	<div class="jumbotron-text">Embracing life as our beautiful, broken,<br class="mobile-hide"> holy, <br class="desktop-hide"> messy selves.</div>
	<picture>
		<source srcset="<?php echo get_bloginfo( 'template_directory' ); ?>/img/jumbotron-flower-sm.jpg" media="(max-width: 420px)">
		<source srcset="<?php echo get_bloginfo( 'template_directory' ); ?>/img/jumbotron-flower-lg.jpg" media="(min-width: 421px)">
		<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/jumbotron-flower-lg.jpg" alt="A flower on a fuzzy green background">
	</picture>
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