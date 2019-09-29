<?php get_header(); ?>

<div class="container">
	
	<main>
		<!-- This code checks if there are any posts and displays them -->
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?>>

				<h1 class="single-post-h1"><?php the_title() ?></h1>
	
				<div class="single-post">
					<?php the_content(); ?>
				</div>
			</article>

			<?php if( comments_open() || get_comments_number() ) {
				comments_template(); 
			} ?>
			
		<?php endwhile; else : ?>
			<p><?php esc_html_e( "Sorry, no posts matched your criteria." ); ?></p>
		<?php endif; ?>
	</main>

	<div class="sidebar">
		<?php get_sidebar( 'primary-sidebar' ); ?>
	</div>

</div>

<?php get_footer(); ?>