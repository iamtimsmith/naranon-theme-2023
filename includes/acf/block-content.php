<?php
/**
 * Register custom blocks
 */
if ( function_exists( 'acf_register_block_type' ) ) :
	// Content
	acf_register_block_type( [ 
		'name' => 'content',
		'title' => __( 'Content', 'restoration-theme' ),
		'description' > __( 'A custom content block', 'restoration-theme' ),
		'render_template' => 'partials/block-content.php',
		'category' => 'formatting',
		'icon' => 'editor-kitchensink',
		'keywords' => [ 'content', 'text' ],
	] );
endif;

/**
 * Create field groups
 */
if ( function_exists( 'acf_add_local_field_group' ) ) :
	// Content
	acf_add_local_field_group( array(
		'key' => 'group_5e5ac5a81eca2',
		'title' => 'Content Block',
		'fields' => array(
			array(
				'key' => 'field_5e5ac5b349e80',
				'label' => 'Title',
				'name' => 'title',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
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
				'key' => 'field_5e5ad06b5274c',
				'label' => 'Alignment',
				'name' => 'alignment',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'right' => 'Title left, content right',
					'left' => 'Content left, title right',
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
				'key' => 'field_5e5aca1649e81',
				'label' => 'Content',
				'name' => 'content',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '100',
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
					'value' => 'acf/content',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'seamless',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'the_content',
		),
		'active' => true,
		'description' => '',
	) );
endif;
