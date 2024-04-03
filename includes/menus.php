<?php

function restoration_theme_register_menus() {
	register_nav_menus( [
		'primary' => __( 'Primary Menu', 'restoration-theme' ),
		'footer' => __( 'Footer Menu', 'restoration-theme' ),
		'social' => __( 'Social Menu', 'restoration-theme' ),
		'listen' => __( 'Listen Menu', 'restoration-theme' ),
	] );
}
add_action( 'after_setup_theme', 'restoration_theme_register_menus' );

/**
 * Get nav menu items by location
 *
 * @param $location The menu location id
 */
function get_menu( $location, $args = [
	'echo' => false,
	'container' => '',
	'items_wrap' => '%3$s'
] ) {
	// Get all locations
	$locations = get_nav_menu_locations();
	// Get object id by location
	$object = wp_get_nav_menu_object( $locations[ $location ] );
	// If the menu has no items, return null
	if ( ! $object )
		return null;
	// Add assigned menu to args
	$args['menu'] = $object;
	// Get menu by menu name
	$menu_items = wp_nav_menu( $args );
	// Return menu post objects
	return $menu_items;
}
