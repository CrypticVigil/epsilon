<?php

function epsilon_assets() {

	wp_enqueue_style( 'epsilon-css', get_template_directory_uri() . '/css/add-styles.css' );

	wp_enqueue_script( 'epsilon-scripts', get_template_directory_uri() . '/js/scripts.js' );

}

add_action( 'wp_enqueue_scripts', 'epsilon_assets' );
add_theme_support( 'title-tag' );

?>