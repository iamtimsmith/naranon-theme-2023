<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
add_theme_support( 'editor-styles' );
add_theme_support( 'align-wide' );

// Enable HTML in User Bio
remove_filter( 'pre_user_description', 'wp_filter_kses' );

/**
 * Modify default classes on custom logo
 */
function change_logo_class( $html ) {

	$html = str_replace( 'custom-logo-link', 'site-header__logo', $html );
	$html = str_replace( 'custom-logo', 'site-header__logo-text', $html );

	return $html;
}
add_filter( 'get_custom_logo', 'change_logo_class' );

/**
 * Add support for woocommerce plugin
 */
function add_woocommerce_support() {
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 500,
		'single_image_width' => 1000,

		'product_grid' => array(
			'default_rows' => 3,
			'min_rows' => 2,
			'max_rows' => 8,
			'default_columns' => 4,
			'min_columns' => 2,
			'max_columns' => 5,
		),
	) );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'add_woocommerce_support' );

/**
 * Excerpt Modification
 */
function excerpt_readmore( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'excerpt_readmore' );

/**
 * Excerpt length modification
 */
function change_excerpt_length( $length ) {
	return 22;
}
add_filter( 'excerpt_length', 'change_excerpt_length' );

function editor_styles() {

	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

}
add_action( 'after_setup_theme', 'editor_styles' );

function add_tithely_to_menu_item( $atts, $item, $args ) {
	$isTithelyButton = in_array( 'menu__button--give', $item->classes );

	if ( $isTithelyButton ) {
		$atts['data-form'] = 'fa7a6f12-a2ca-4760-9ee3-974e5e02674d';
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_tithely_to_menu_item', 10, 3 );

function featuredImageToRSS( $content ) {
	global $post;
	if ( has_post_thumbnail( $post->ID ) ) {
		$content = '<div>' . get_the_post_thumbnail( $post->ID, 'medium', array( 'style' => 'margin-bottom: 15px;' ) ) . '</div>' . $content;
	}
	return $content;
}

add_filter( 'the_excerpt_rss', 'featuredImageToRSS' );
add_filter( 'the_content_feed', 'featuredImageToRSS' );

/* Change 404 page title text */
function custom404PageTitle( $title ) {
	$siteTitle = get_bloginfo( 'title' );
	if ( is_404() ) {
		$title = '404: Page Not Found | ' . $siteTitle;
	}
	return $title;
}
add_filter( 'pre_get_document_title', 'alvand_dev_filter_wp_title', 10 );
