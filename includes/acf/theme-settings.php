<?php
if ( function_exists( 'acf_add_options_page' ) ) {
	// Add settings page
	acf_add_options_page( array(
		'page_title' => 'Restoration Theme Settings',
		'menu_title' => 'Theme Settings',
		'menu_slug' => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect' => false
	) );
}

if ( function_exists( 'acf_add_local_field_group' ) ) :
	// Theme Settings
	acf_add_local_field_group( array(
		'key' => 'group_5e5bee078e4bc',
		'title' => 'Theme Settings',
		'fields' => array(
			array(
				'key' => 'field_65c9a26abaff9',
				'label' => 'Show Main Menu',
				'name' => 'show_main_menu',
				'aria-label' => '',
				'type' => 'true_false',
				'instructions' => 'Decide whether to show the main menu in the navbar or just show a hamburger menu',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'theme-general-settings',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'seamless',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	) );
endif;
