<?php
/**
 * Register custom blocks
 */
if ( function_exists( 'acf_register_block_type' ) ) :
	// Three Column
	acf_register_block_type( [ 
		'name' => 'threecolumn',
		'title' => __( 'Three Column', 'restoration-theme' ),
		'description' > __( 'A custom 3 column block', 'restoration-theme' ),
		'render_template' => 'partials/block-three-column.php',
		'category' => 'formatting',
		'icon' => 'columns',
		'keywords' => [ 'column', 'columns', '3' ],
	] );
endif;

/**
 * Create field groups
 */
if ( function_exists( 'acf_add_local_field_group' ) ) :

	// Three Column
	acf_add_local_field_group( array(
		'key' => 'group_5e5c2f4826e9a',
		'title' => 'Three Column Block',
		'fields' => array(
			array(
				'key' => 'field_5e5c2f4d1e987',
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
				'key' => 'field_5e5e7d08b5172',
				'label' => 'Alignment',
				'name' => 'alignment',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'right' => 'Background Right',
					'left' => 'Background Left',
				),
				'default_value' => array(
					0 => 'right',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			),
			array(
				'key' => 'field_5e5e8fa3342c6',
				'label' => 'Background Color',
				'name' => 'background_color',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'#604B50' => 'Purple',
					'#222222' => 'Black',
					'#A78E8A' => 'Gold',
				),
				'default_value' => array(
					0 => '#604B50',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			),
			array(
				'key' => 'field_5e5c2f561e988',
				'label' => 'Merch',
				'name' => 'merch',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => '',
				'sub_fields' => array(
					array(
						'key' => 'field_5e5c2f7d1e989',
						'label' => 'Image',
						'name' => 'image',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '33',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'preview_size' => 'medium',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
					),
					array(
						'key' => 'field_5e5c2f8b1e98a',
						'label' => 'Name',
						'name' => 'name',
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
						'key' => 'field_5e5c2f921e98b',
						'label' => 'Url',
						'name' => 'url',
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
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/threecolumn',
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
