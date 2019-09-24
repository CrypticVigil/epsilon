<?php


function epsilon_customize_register( $wp_customize ) {

	$wp_customize->add_section('epsilon_footer_options', array(
		'title' => esc_html__( "Footer", 'epsilon' ),
	));

	$wp_customize->add_setting('epsilon_footer_text', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));

	$wp_customize->add_control('epsilon_footer_text', array(
		'type' => 'text',
		'label' => esc_html__( 'Footer Info', 'epsilon' ),
		'section' => 'epsilon_footer_options'
	));

}

add_action( 'customize_register', 'epsilon_customize_register' );

?>