<?php
/**
 * This file adds functions to the Athens Independent WordPress theme.
 *
 * @package athens-independent
 * @author  Ben Weibel
 * @license GNU General Public License v2 or later
 * @link    https://athensindependent.com
 */

namespace AthensIndie;

/**
 * Set up theme defaults and register various WordPress features.
 */
function setup() {

	// Enqueue editor styles and fonts.
	add_editor_style( 'style.css' );

	// Remove core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );


/**
 * Enqueue styles.
 */
function enqueue_style_sheet() {
	wp_enqueue_style( sanitize_title( __NAMESPACE__ ), get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style(
		'athensindie-core-post-featured-image',
		get_template_directory_uri() . '/assets/styles/core-post-featured-image.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_style_sheet' );


/**
 * Add block style variations.
 */
function register_block_styles() {

	$block_styles = array(
		'core/list'         => array(
			'list-check'        => __( 'Check', 'athens-independent' ),
			'list-check-circle' => __( 'Check Circle', 'athens-independent' ),
			'list-boxed'        => __( 'Boxed', 'athens-independent' ),
		),
		'core/code'         => array(
			'dark-code' => __( 'Dark', 'athens-independent' ),
		),
		'core/cover'        => array(
			'blur-image-less' => __( 'Blur Image Less', 'athens-independent' ),
			'blur-image-more' => __( 'Blur Image More', 'athens-independent' ),
			'rounded-cover'   => __( 'Rounded', 'athens-independent' ),
		),
		'core/column'       => array(
			'column-box-shadow' => __( 'Box Shadow', 'athens-independent' ),
		),
		'core/post-excerpt' => array(
			'excerpt-truncate-2' => __( 'Truncate 2 Lines', 'athens-independent' ),
			'excerpt-truncate-3' => __( 'Truncate 3 Lines', 'athens-independent' ),
			'excerpt-truncate-4' => __( 'Truncate 4 Lines', 'athens-independent' ),
		),
		'core/group'        => array(
			'column-box-shadow' => __( 'Box Shadow', 'athens-independent' ),
			'background-blur'   => __( 'Background Blur', 'athens-independent' ),
		),
		'core/separator'    => array(
			'separator-dotted' => __( 'Dotted', 'athens-independent' ),
			'separator-thin'   => __( 'Thin', 'athens-independent' ),
		),
		'core/image'        => array(
			'rounded-full' => __( 'Rounded Full', 'athens-independent' ),
			'media-boxed'  => __( 'Boxed', 'athens-independent' ),
		),
		'core/preformatted' => array(
			'preformatted-dark' => __( 'Dark Style', 'athens-independent' ),
		),
		'core/post-terms'   => array(
			'term-button' => __( 'Button Style', 'athens-independent' ),
		),
		'core/video'        => array(
			'media-boxed' => __( 'Boxed', 'athens-independent' ),
		),
		'core/pullquote'    => array(
			'aci-big' => __( 'Big Pull Quote', 'athens-independent' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', __NAMESPACE__ . '\register_block_styles' );


/**
 * Load custom block styles only when the block is used.
 */
function enqueue_custom_block_styles() {

	// Scan our styles folder to locate block styles.
	$files = glob( get_template_directory() . '/assets/styles/*.css' );

	foreach ( $files as $file ) {

		// Get the filename and core block name.
		$filename   = basename( $file, '.css' );
		$block_name = str_replace(
			array( 'core-', 'athensindependent-' ),
			array( 'core/', 'athensindependent/' ),
			$filename
		);

		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => "athensindie-block-{$filename}",
				'src'    => get_theme_file_uri( "assets/styles/{$filename}.css" ),
				'path'   => get_theme_file_path( "assets/styles/{$filename}.css" ),
			)
		);
	}
}
add_action( 'init', __NAMESPACE__ . '\enqueue_custom_block_styles' );


/**
 * Enqueue WooCommerce specific stylesheet
 */
function enqueue_woocommerce_styles() {

	// Only enqueue if WooCommerce is active
	if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style(
			'theme-woocommerce-style',
			get_template_directory_uri() . '/assets/styles/woocommerce.css',
			array(),
			'1.0.0'
		);
	}
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_woocommerce_styles' );

/**
 * // Enqueue navigation script for the frontend

 */
function enqueue_theme_scripts() {

	$scripts_base_path = get_template_directory_uri() . '/assets/js/';
	$scripts = ['navigation.js'];

	foreach ($scripts as $script) {
	// Register the navigation script
		$script_path   = $scripts_base_path . $script;
		$script_handle = 'mytheme-navigation-script';
		
		// If you want to add dependencies, include them in this array (e.g., ['jquery'])
		$dependencies = [];

		// Enqueue the script
		wp_enqueue_script(
			$script_handle,
			$script_path,
			$dependencies,
			null,
			true
		);
	}
    
}
// Hook into wp_enqueue_scripts, which is the right place for frontend scripts
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_theme_scripts' );

/**
 * Register pattern categories.
 */
function pattern_categories() {

	$block_pattern_categories = array(
		'athens-independent/card'           => array(
			'label' => __( 'Cards', 'athens-independent' ),
		),
		'athens-independent/call-to-action' => array(
			'label' => __( 'Call To Action', 'athens-independent' ),
		),
		'athens-independent/features'       => array(
			'label' => __( 'Features', 'athens-independent' ),
		),
		'athens-independent/hero'           => array(
			'label' => __( 'Hero', 'athens-independent' ),
		),
		'athens-independent/pages'          => array(
			'label' => __( 'Pages', 'athens-independent' ),
		),
		'athens-independent/posts'          => array(
			'label' => __( 'Posts', 'athens-independent' ),
		),
		'athens-independent/pricing'        => array(
			'label' => __( 'Pricing', 'athens-independent' ),
		),
		'athens-independent/testimonial'    => array(
			'label' => __( 'Testimonials', 'athens-independent' ),
		),
		'athens-independent/menu'    => array(
			'label' => __( 'Menu', 'athens-independent' ),
		)
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', __NAMESPACE__ . '\pattern_categories', 9 );


/**
 * Remove last separator on blog/archive if no pagination exists.
 */
function is_paginated() {
	global $wp_query;
	if ( $wp_query->max_num_pages < 2 ) {
		echo '<style>.blog .wp-block-post-template .wp-block-post:last-child .entry-content + .wp-block-separator, .archive .wp-block-post-template .wp-block-post:last-child .entry-content + .wp-block-separator, .blog .wp-block-post-template .wp-block-post:last-child .entry-content + .wp-block-separator, .search .wp-block-post-template .wp-block-post:last-child .wp-block-post-excerpt + .wp-block-separator { display: none; }</style>';
	}
}
add_action( 'wp_head', __NAMESPACE__ . '\is_paginated' );


/**
 * Add a Sidebar template part area
 */
function template_part_areas( array $areas ) {
	$areas[] = array(
		'area'        => 'sidebar',
		'area_tag'    => 'section',
		'label'       => __( 'Sidebar', 'athens-independent' ),
		'description' => __( 'The Sidebar template defines a page area that can be found on the Page (With Sidebar) template.', 'athens-independent' ),
		'icon'        => 'sidebar',
	);

	return $areas;
}
add_filter( 'default_wp_template_part_areas', __NAMESPACE__ . '\template_part_areas' );


/**
 * Route specific categories to the no-author single post template.
 * Uses get_post_metadata filter to return the template slug dynamically
 * without writing to the database.
 */
function athensindie_no_author_template_meta( $value, $object_id, $meta_key, $single ) {
	if ( '_wp_page_template' !== $meta_key ) {
		return $value;
	}
	if ( ! is_singular( 'post' ) ) {
		return $value;
	}

	static $in_filter = false;
	if ( $in_filter ) {
		return $value;
	}

	// Check if post has an explicit template already assigned (skip if so).
	$in_filter = true;
	$explicit  = get_post_meta( $object_id, '_wp_page_template', true );
	$in_filter = false;

	if ( $explicit && 'default' !== $explicit ) {
		return $value;
	}

	$no_author_categories = [
		'letters-to-the-editor',
		'op-ed',
	];

	if ( has_category( $no_author_categories, $object_id ) ) {
		return $single ? 'single-no-author' : [ 'single-no-author' ];
	}

	if ( has_category( 'obituaries', $object_id ) ) {
		return $single ? 'single-obituary' : [ 'single-obituary' ];
	}

	return $value;
}
add_filter( 'get_post_metadata', __NAMESPACE__ . '\athensindie_no_author_template_meta', 10, 4 );

/**
 * Append featured image caption below the featured image on single post pages.
 */
add_filter( 'render_block', __NAMESPACE__ . '\athensindie_featured_image_caption', 10, 2 );
function athensindie_featured_image_caption( $block_content, $block ) {
	if ( $block['blockName'] !== 'core/post-featured-image' ) {
		return $block_content;
	}
	if ( ! is_singular( 'post' ) ) {
		return $block_content;
	}
	$thumbnail_id = get_post_thumbnail_id();
	if ( ! $thumbnail_id ) {
		return $block_content;
	}
	$caption = get_post_field( 'post_excerpt', $thumbnail_id );
	if ( empty( trim( $caption ) ) ) {
		return $block_content;
	}
	$caption_html = '<figcaption class="aci-featured-image-caption">'
		. wp_kses_post( $caption )
		. '</figcaption>';
	return str_replace( '</figure>', $caption_html . '</figure>', $block_content );
}
