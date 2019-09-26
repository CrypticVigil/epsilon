<footer class="page-footer">

<?php $footer_text = get_theme_mod( 'epsilon_footer_text', '' ) ?>

	<div class="footer-container">
		<?php dynamic_sidebar( 'footer-sidebar' ) ?>
	</div>

	<div class="footer-info">
		<p><?php echo esc_html__( $footer_text, 'epsilon' ) ?> &copy; <?php echo date('Y') ?></p>
	</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>