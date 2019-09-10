<?php

function epsilon_styles() {

	wp_enqueue_style( 'external-css', get_template_directory_uri() . '/css/add-styles.css' );

}

add_action( 'wp_enqueue_scripts', 'epsilon_styles' );
add_theme_support( 'title-tag' );

?>