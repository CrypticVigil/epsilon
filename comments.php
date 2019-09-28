<?php
	if( post_password_required() ) {
		return;
	}
?>

<div id="comments" class="comments">

	<ul class="comments-list">
		<?php if(have_comments()) {
			wp_list_comments( array(
				'avatar_size' => 40,
			));
		} ?>
	</ul>
	<?php the_comments_pagination(); ?>

</div>