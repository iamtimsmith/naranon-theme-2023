<?php
/**
 * Register custom blocks
 */
if ( function_exists( 'acf_register_block_type' ) ) :
	// Staff
	acf_register_block_type( [
		'name' => 'staff',
		'title' => __( 'Staff', 'restoration-theme' ),
		'description' > __( 'Display staff members', 'restoration-theme' ),
		'render_template' => 'partials/block-staff.php',
		'category' => 'formatting',
		'icon' => 'groups',
		'keywords' => [ 'staff', 'user' ],
	] );
endif;

/**
 * Create field groups
 */
if ( function_exists( 'acf_add_local_field_group' ) ) :
	// Content
	acf_add_local_field_group( array(
		'key' => 'group_65caf47cd5858',
		'title' => 'Staff',
		'fields' => array(
			array(
				'key' => 'field_65d92d12b4fb9',
				'label' => 'Title',
				'name' => 'title',
				'aria-label' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Staff',
				'maxlength' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_65d926ef9d1be',
				'label' => 'Users',
				'name' => 'users',
				'aria-label' => '',
				'type' => 'user',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'role' => array(
					0 => 'administrator',
					1 => 'editor',
				),
				'return_format' => 'object',
				'multiple' => 1,
				'allow_null' => 0,
				'bidirectional' => 0,
				'bidirectional_target' => array(
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/staff',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 1,
	) );
endif;
