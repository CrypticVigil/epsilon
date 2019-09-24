<?php

function epsilon_assets() {
	wp_enqueue_style( 'epsilon-css', get_template_directory_uri() . '/css/add-styles.css' );
	wp_enqueue_script( 'epsilon-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true );
}

add_action( 'wp_enqueue_scripts', 'epsilon_assets' );

function epsilon_theme_support() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
}

add_action( 'after_setup_theme', 'epsilon_theme_support');

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

function epsilon_register_menus() {
	register_nav_menus( array('header-nav' => esc_html__('Header Navigation', "epsilon") ) );
}

add_action( 'init', 'epsilon_register_menus' );

function epsilon_dropdown_icon($title, $item, $args, $depth) {
	if($args->theme_location == 'header-nav') {
		if(in_array('menu-item-has-children', $item->classes)) {
			if($depth == 0) {
				$title .= '<span class="down-arrow" aria-hidden="true" >&#9662;</span>';
			}
		}
	}
	return $title;
}

add_filter( 'nav_menu_item_title', 'epsilon_dropdown_icon', 10, 4 );

require_once('php/customize.php');

?>