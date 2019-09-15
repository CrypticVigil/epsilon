<?php get_header(); ?>

<div class="container">
	
	<main>
		<!-- This code checks if there are any posts and displays them -->
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?>>
				<h2>
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_title() ?></a>
				</h2>
				<div>
					Posted on <a href="<?php the_permalink() ?>">
						<time datetime="<?php echo get_the_date('c') ?>"><?php echo get_the_date() ?></time></a>
					By <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?>">
						<?php echo get_the_author() ?>
					</a>
				</div>
				<div>
					<?php the_excerpt() ?>
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
						Read More <span class="screen-reader-text">About <?php the_title() ?></span>
					</a>
				</div>
			</article>
			
		<?php endwhile; else : ?>
			<p><?php esc_html_e( "Sorry, no posts matched your criteria." ); ?></p>
		<?php endif; ?>

		<?php the_posts_pagination() ?>

	</main>

	<section class="sidebar">
		<?php get_sidebar(); ?>
	</section>

</div>

<?php get_footer(); ?>