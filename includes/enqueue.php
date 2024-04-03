<?php

function restoration_theme_enqueue_scripts() {
	// Site Styles
	wp_enqueue_style( 'restoration-theme-styles', get_stylesheet_directory_uri() . "/assets/style.min.css", [], strtotime( 'now' ) );
	// Select2 Styles
	wp_enqueue_style( 'select2-styles', 'https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css' );
	// Theme Scripts
	wp_enqueue_script( 'restoration-theme-scripts', THEME_URL . '/scripts/script.js', array( 'jquery' ), strtotime( 'now' ) );
	// FontAwesome Scripts
	wp_enqueue_script( 'fontawesome-kit', 'https://kit.fontawesome.com/790e123857.js', array(), '1.0.0' );
	// FontAwesome Scripts
	wp_enqueue_script( 'tithely-embed', 'https://static.tithely.com/give/give.js', array(), '1.0.0' );
	// Select2 Scripts
	// wp_enqueue_script( 'select2-scripts', 'https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'restoration_theme_enqueue_scripts' );

function restoration_theme_enqueue_editor_scripts() {
	if ( is_admin() ) {
		wp_enqueue_style( 'restoration-theme-editor-styles', get_stylesheet_uri() );
	}
}
add_action( 'enqueue_block_assets', 'restoration_theme_enqueue_editor_scripts', 999 );

// add_action('enqueue_block_assets,' function () {
// 	if (is_admin()) {
// 	   wp_enqueue_style('editor-assets-test', plugins_url('style.css', __FILE__));
// 	}
//    }, 999);

