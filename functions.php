<?php

function epsilon_assets() {

	wp_enqueue_style( 'epsilon-css', get_template_directory_uri() . '/css/add-styles.css' );

	wp_enqueue_script( 'epsilon-scripts', get_template_directory_uri() . '/js/scripts.js' );

}

add_action( 'wp_enqueue_scripts', 'epsilon_assets' );
add_theme_support( 'title-tag' );

function epsilon_sidebar_widgets() {
	register_sidebar( array(
		'id' => 'primary-sidebar',
		'name' => esc_html__( "Primary Sidebar", "epsilon" ),
		'description' => esc_html__( "This sidebar appears on the blog posts page.", "epsilon" ),
		'before_widget' => '<section id="%1$s" class="%2$s" >',
		'after_widget' => '</section>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );
}

add_action('widgets_init', 'epsilon_sidebar_widgets');

function epsilon_footer_widgets() {
	register_sidebar( array(
		'id' => 'footer-sidebar',
		'name' => esc_html__( "Footer Sidebar", "epsilon" ),
		'description' => esc_html__( "This sidebar appears on the bottom of the page.", "epsilon" ),
		'before_widget' => '<section id="%1$s" class="footer-widget %2$s" >',
		'after_widget' => '</section>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	) );
}

add_action('widgets_init', 'epsilon_footer_widgets');

?>