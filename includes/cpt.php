<?php

function create_events() {

	register_post_type( 'event',
		// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Events' ),
				'singular_name' => __( 'Event' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array( 'slug' => 'events', 'with_front' => false ),
			'show_in_rest' => true,
			'menu_position' => 5,
			'menu_icon' => 'dashicons-calendar-alt',
			'supports' => array( 'editor', 'thumbnail', 'title' ),
		)
	);
}
add_action( 'init', 'create_events' );
