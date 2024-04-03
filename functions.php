<?php

function add_theme_scripts_and_styles() {
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/styles/styles.css', array(), '1.1', 'all' );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), 1.1, true );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts_and_styles' );
