<?php

if ( function_exists( 'acf_register_block_type' ) ) :
	// Recent Posts
	acf_register_block_type( [ 
		'name' => 'recentposts',
		'title' => __( 'Recent Posts', 'restoration-theme' ),
		'description' > __( 'A custom Recent Posts block', 'restoration-theme' ),
		'render_template' => 'partials/block-recent-posts.php',
		'category' => 'formatting',
		'icon' => 'excerpt-view',
		'keywords' => [ 'column', 'columns', '3', 'recent', 'posts' ],
	] );
endif;

if ( function_exists( 'acf_add_local_field_group' ) ) :
	// Recent Posts
	acf_add_local_field_group( array(
		'key' => 'group_5e5c2f4826e9b',
		'title' => 'Recent Posts',
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
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/recentposts',
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
