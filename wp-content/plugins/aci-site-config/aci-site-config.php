<?php
/**
 * Plugin Name: ACI Site Config
 * Plugin URI:  https://athensindependent.com
 * Description: Site-wide configuration tweaks for Athens Independent.
 * Version:     1.0.0
 * Author:      Athens Independent
 * License:     GPL-2.0-or-later
 * Text Domain: aci-site-config
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ---------------------------------------------------------------------------
// Disable comments sitewide.
// ---------------------------------------------------------------------------

// Close comments and pings on all posts.
add_filter( 'comments_open', '__return_false', 20 );
add_filter( 'pings_open',    '__return_false', 20 );

// Return empty comment lists everywhere.
add_filter( 'comments_array', '__return_empty_array', 10 );

// Remove comment support from every post type that has it.
add_action( 'init', function () {
	foreach ( get_post_types() as $post_type ) {
		if ( post_type_supports( $post_type, 'comments' ) ) {
			remove_post_type_support( $post_type, 'comments' );
			remove_post_type_support( $post_type, 'trackbacks' );
		}
	}
}, 100 );

// Remove Comments from the admin menu and admin bar.
add_action( 'admin_init', function () {
	// Remove the Discussion settings page link from Settings menu.
	remove_menu_page( 'edit-comments.php' );
} );

add_action( 'admin_menu', function () {
	remove_menu_page( 'edit-comments.php' );
} );

add_action( 'wp_before_admin_bar_render', function () {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu( 'comments' );
} );

// Redirect any attempt to reach the comments admin page.
add_action( 'current_screen', function ( $screen ) {
	if ( in_array( $screen->id, array( 'edit-comments', 'options-discussion' ), true ) ) {
		wp_safe_redirect( admin_url() );
		exit;
	}
} );

// Remove comments column from post list tables.
add_filter( 'manage_posts_columns',       'aci_site_config_remove_comments_column' );
add_filter( 'manage_pages_columns',       'aci_site_config_remove_comments_column' );
add_filter( 'manage_media_columns',       'aci_site_config_remove_comments_column' );
function aci_site_config_remove_comments_column( $columns ) {
	unset( $columns['comments'] );
	return $columns;
}

// Remove comments widget.
add_action( 'widgets_init', function () {
	unregister_widget( 'WP_Widget_Recent_Comments' );
} );

// Remove comments feed links from <head>.
add_action( 'wp_head', function () {
	remove_action( 'wp_head', 'feed_links_extra', 3 );
}, 1 );
