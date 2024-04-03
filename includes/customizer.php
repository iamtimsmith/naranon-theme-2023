<?php

function starter_customize_register( $wp_customize ) {
	$wp_customize->add_setting( 'custom_404_page', array(
		'capability' => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'custom_404', array(
		'type' => 'dropdown-pages',
		'section' => 'static_front_page',
		'label' => __( '404 Page' ),
		'priority' => 90,
		'allow_addition' => true,
		'settings' => 'custom_404_page',
	) ) );
}
add_action( 'customize_register', 'starter_customize_register' );

// $wp_customize->add_setting( 'restoration-theme-custom-404', array(
// 	'type' => 'theme_mod',
// 	'default' => '23',
// 	'capability' => 'edit_theme_options',
// 	'transport' => 'refresh',
// 	// 'sanitize_callback' => 'restoration_theme_sanitize_dropdown_pages',
// ) );

// $wp_customize->add_control( 'restoration-theme-custom-404', array(
// 	'type' => 'dropdown-pages',
// 	'section' => 'static_front_page',
// 	'label' => __( '404 Page' ),
// 	'priority' => 90,
// 	'allow_addition' => true,
// ) );

// function restoration_theme_sanitize_dropdown_pages() {
// 	// echo '<script>console.log(' . json_encode( $page_id ) . ')</script>';
// 	// Ensure $input is an absolute integer.
// 	// $page_id = absint( $page_id );


// 	// If $page_id is an ID of a published page, return it; otherwise, return the default.
// 	// return 1;
// }

