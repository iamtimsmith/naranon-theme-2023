<?php

/**
 * Create block
 */
if ( function_exists( 'acf_register_block_type' ) ) :
	// Call-to-Action
	acf_register_block_type( [ 
		'name' => 'cta',
		'title' => __( 'Call-to-Action', 'restoration-theme' ),
		'description' > __( 'A custom call-to-action block', 'restoration-theme' ),
		'render_template' => 'partials/block-cta.php',
		'category' => 'formatting',
		'icon' => 'share-alt2',
		'keywords' => [ 'cta', 'call to action' ],
	] );
endif;

/**
 * Create fields
 */
if ( function_exists( 'acf_add_local_field_group' ) ) :
	// Call-to-action
	acf_add_local_field_group( array(
		'key' => 'group_5e5d1b5c8527c',
		'title' => 'Call To Action Module',
		'fields' => array(
			array(
				'key' => 'field_5e5d1b87b0a80',
				'label' => 'Form ID',
				'name' => 'form_id',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5e5d1b66b0a7e',
				'label' => 'Title',
				'name' => 'title',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5e5d1b7ab0a7f',
				'label' => 'Content',
				'name' => 'content',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/cta',
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
	) );
endif;
