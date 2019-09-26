<?php get_header(); ?>

<div class="container">
	
	<main>
		<?php the_archive_title( '<h1 class="archive-h1" >', '</h1>'); ?>
		<?php the_archive_description( '<div class="archive-description" >', '</div>' ); ?>

		<?php get_template_part( 'loop' ); ?>

	</main>

	<div class="sidebar">
		<?php get_sidebar( 'primary-sidebar' ); ?>
	</div>

</div>

<?php get_footer(); ?>