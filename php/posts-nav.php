<?php
	$prev = get_previous_post();
	$next = get_next_post();
?>

<?php if($prev || $next) { ?>
	<nav class='post-navigation' role="navigation">
		<?php if($prev) { ?>
			<div class='post-navigation__prev'>
				<h3>Previous Post</h3>
				<a href="<?php the_permalink( $prev->ID ) ?>">
				<?php echo esc_html( get_the_title( $prev->ID ) ); ?>
				</a>
			</div>
		<?php } ?>
		<?php if($next) { ?>
			<div class='post-navigation__next'>
				<h3>Next Post</h3>
				<a href="<?php the_permalink( $next->ID ) ?>">
				<?php echo esc_html( get_the_title( $next->ID ) ); ?>
				</a>
			</div>
		<?php } ?>
	</nav>
<?php } ?>