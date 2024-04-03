<?php
/**
 * Register custom blocks
 */
if ( function_exists( 'acf_register_block_type' ) ) :
	// Content
	acf_register_block_type( [ 
		'name' => 'background',
		'title' => __( 'Background', 'restoration-theme' ),
		'description' > __( 'A custom background block', 'restoration-theme' ),
		'render_template' => 'partials/block-background.php',
		'category' => 'formatting',
		'icon' => 'align-left',
		'keywords' => [ 'background', 'bg' ],
	] );
endif;

/**
 * Create field groups
 */
if ( function_exists( 'acf_add_local_field_group' ) ) :
	// Content
	acf_add_local_field_group( array(
		'key' => 'group_65caf47cd5833',
		'title' => 'Background',
		'fields' => array(
			array(
				'key' => 'field_65caf47d87844',
				'label' => 'Alignment',
				'name' => 'alignment',
				'aria-label' => '',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui_on_text' => 'Right',
				'ui_off_text' => 'Left',
				'ui' => 1,
			),
			array(
				'key' => 'field_65caf4c687845',
				'label' => 'Color',
				'name' => 'color',
				'aria-label' => '',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'light' => 'Light',
					'mid' => 'Mid',
					'dark' => 'Dark',
				),
				'default_value' => 'light',
				'return_format' => 'value',
				'multiple' => 0,
				'allow_null' => 0,
				'ui' => 0,
				'ajax' => 0,
				'placeholder' => '',
			),
			array(
				'key' => 'field_65caf50787846',
				'label' => 'Height',
				'name' => 'height',
				'aria-label' => '',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 500,
				'min' => 0,
				'max' => '',
				'placeholder' => '',
				'step' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_65caf53087847',
				'label' => 'Position',
				'name' => 'position',
				'aria-label' => '',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'min' => '',
				'max' => '',
				'placeholder' => '',
				'step' => '',
				'prepend' => '',
				'append' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/background',
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
