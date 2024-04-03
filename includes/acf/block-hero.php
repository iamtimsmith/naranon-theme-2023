<?php

if ( function_exists( 'acf_register_block_type' ) ) :
	// Hero
	acf_register_block_type( [
		'name' => 'hero',
		'title' => __( 'Hero', 'restoration-theme' ),
		'description' > __( 'A custom hero block', 'restoration-theme' ),
		'render_template' => 'partials/block-hero.php',
		'category' => 'formatting',
		'icon' => 'align-center',
		'keywords' => [ 'hero', 'banner' ],
	] );
endif;

if ( function_exists( 'acf_add_local_field_group' ) ) :
	// Hero
	acf_add_local_field_group( array(
		'key' => 'group_5e5a0f3904d29',
		'title' => 'Hero Block',
		'fields' => array(
			array(
				'key' => 'field_5e5a0f42933b9',
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
				'key' => 'field_5e5a0f61933ba',
				'label' => 'Content',
				'name' => 'content',
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
				'key' => 'field_65d5f4b9bcbdf',
				'label' => 'Source',
				'name' => 'media_source',
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
				'default_value' => 1,
				'ui_on_text' => 'Library',
				'ui_off_text' => 'URL',
				'ui' => 1,
			),
			array(
				'key' => 'field_65d5e63baa269',
				'label' => 'Media',
				'name' => 'media',
				'aria-label' => '',
				'type' => 'file',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_65d5f4b9bcbdf',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'library' => 'all',
				'min_size' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_65d5f409c40c2',
				'label' => 'Media Url',
				'name' => 'media_url',
				'aria-label' => '',
				'type' => 'url',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_65d5f4b9bcbdf',
							'operator' => '!=',
							'value' => '1',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
			),
			array(
				'key' => 'field_65d5f549bcbe0',
				'label' => 'Media Type',
				'name' => 'media_type',
				'aria-label' => '',
				'type' => 'true_false',
				'instructions' => 'What type of media is coming from the URL?',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_65d5f4b9bcbdf',
							'operator' => '!=',
							'value' => '1',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 1,
				'ui_on_text' => 'Image',
				'ui_off_text' => 'Video',
				'ui' => 1,
			),
			array(
				'key' => 'field_5e5ac2cb594d3',
				'label' => 'Button',
				'name' => 'button',
				'type' => 'link',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '33',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
			),
			array(
				'key' => 'field_5e5acb032089c',
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
					'right' => 'Image left, content right',
					'left' => 'Content left, image right',
				),
				'default_value' => array(
					0 => 'contentRight',
				),
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/hero',
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
