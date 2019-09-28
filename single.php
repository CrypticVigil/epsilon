<?php get_header(); ?>

<div class="container">
	
	<main>
		<!-- This code checks if there are any posts and displays them -->
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?>>

				<?php if( get_the_post_thumbnail() !== '' ) { ?>
					<div class="post-thumbnail">
						<?php the_post_thumbnail( 'large' ) ?>
					</div>
				<?php } ?>

				<h1 class="single-post-h1"><?php the_title() ?></h1>
				<div>
					Posted on <a href="<?php the_permalink() ?>">
						<time datetime="<?php echo get_the_date('c') ?>"><?php echo get_the_date() ?></time></a>
					By <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ) ?>">
						<?php echo get_the_author() ?>
					</a>
				</div>
				<div class="single-post">
					<?php 
						the_content();
						wp_link_pages();
					?>
				</div>
				<div class="single-post__meta">
					<?php if(has_category()) { ?>
						<span>Categories: <?php echo get_the_category_list( ', ' );?></span>
					<?php } ?>
					<?php if(has_tag()) { ?>
						<div class="post-tags"><?php echo get_the_tag_list( '<ul><li>', '</li><li>', '</li></ul>' ); ?></div>
					<?php } ?>
				</div>
			</article>

			<?php get_template_part( 'php/posts-nav' ); ?>

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