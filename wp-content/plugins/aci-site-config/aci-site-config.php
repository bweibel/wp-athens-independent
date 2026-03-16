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

// ---------------------------------------------------------------------------
// Editor: hide template canvas (header/footer) when editing pages and posts.
// ---------------------------------------------------------------------------

add_filter( 'block_editor_settings_all', function ( $settings, $context ) {
	if ( ! empty( $context->post ) && in_array( $context->post->post_type, array( 'page', 'post' ), true ) ) {
		$settings['defaultRenderingMode'] = 'post-only';
	}
	return $settings;
}, 10, 2 );

// ---------------------------------------------------------------------------
// Scoop Says CPT.
// ---------------------------------------------------------------------------

add_action( 'init', function () {
	register_post_type( 'aci_scoop_says', array(
		'labels' => array(
			'name'               => __( 'Scoop Says', 'aci-site-config' ),
			'singular_name'      => __( 'Scoop Says', 'aci-site-config' ),
			'add_new_item'       => __( 'Add New Scoop Says', 'aci-site-config' ),
			'edit_item'          => __( 'Edit Scoop Says', 'aci-site-config' ),
			'new_item'           => __( 'New Scoop Says', 'aci-site-config' ),
			'search_items'       => __( 'Search Scoop Says', 'aci-site-config' ),
			'not_found'          => __( 'No entries found.', 'aci-site-config' ),
			'not_found_in_trash' => __( 'No entries found in trash.', 'aci-site-config' ),
			'menu_name'          => __( 'Scoop Says', 'aci-site-config' ),
		),
		'public'       => false,
		'show_ui'      => true,
		'show_in_menu' => true,
		'show_in_rest' => true,
		'supports'     => array( 'title' ),
		'menu_icon'    => 'dashicons-megaphone',
	) );
} );

// Meta box: enforce 30-character limit with a live counter.
add_action( 'add_meta_boxes', function () {
	add_meta_box(
		'aci_scoop_says_limit',
		__( 'Character Limit', 'aci-site-config' ),
		'aci_site_config_scoop_says_meta_box',
		'aci_scoop_says',
		'normal',
		'high'
	);
} );

function aci_site_config_scoop_says_meta_box() {
	?>
	<p style="margin:0;">
		<?php esc_html_e( 'The title above is the Scoop Says text. Maximum 30 characters.', 'aci-site-config' ); ?>
		<br><span id="aci-scoop-counter" style="font-weight:600;"></span>
	</p>
	<script>
	( function () {
		var MAX  = 30;
		var titleInput = document.getElementById( 'title' );
		var counter    = document.getElementById( 'aci-scoop-counter' );
		if ( ! titleInput || ! counter ) return;

		function update() {
			var len       = titleInput.value.length;
			var remaining = MAX - len;
			counter.textContent = remaining >= 0
				? remaining + ' characters remaining'
				: Math.abs( remaining ) + ' characters over limit';
			counter.style.color = remaining < 0 ? '#d63638' : remaining <= 5 ? '#dba617' : '#1e8234';
			if ( len > MAX ) {
				titleInput.value = titleInput.value.slice( 0, MAX );
				update();
			}
		}

		titleInput.addEventListener( 'input', update );
		update();
	} )();
	</script>
	<?php
}

// Server-side: trim title to 30 characters on save.
add_filter( 'wp_insert_post_data', function ( $data ) {
	if ( 'aci_scoop_says' === $data['post_type'] && ! empty( $data['post_title'] ) ) {
		$data['post_title'] = mb_substr( $data['post_title'], 0, 30 );
	}
	return $data;
} );

// ---------------------------------------------------------------------------
// RSS feed: add media nodes for Letterhead image embedding.
//
// Letterhead requires images in <media:content>, <media:thumbnail>, or
// <enclosure>. WordPress only outputs images as <img> tags inside
// <description> CDATA, which Letterhead ignores.
// ---------------------------------------------------------------------------

add_action( 'rss2_ns', function () {
	echo 'xmlns:media="http://search.yahoo.com/mrss/"' . "\n";
} );

add_action( 'rss2_item', function () {
	$post_id  = get_the_ID();
	$thumb_id = get_post_thumbnail_id( $post_id );

	if ( ! $thumb_id ) {
		return;
	}

	$full   = wp_get_attachment_image_src( $thumb_id, 'full' );
	$medium = wp_get_attachment_image_src( $thumb_id, 'medium_large' );

	if ( ! $full ) {
		return;
	}

	$url    = esc_url( $full[0] );
	$width  = (int) $full[1];
	$height = (int) $full[2];
	$alt    = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true ) ?: get_the_title();
	$mime   = get_post_mime_type( $thumb_id ) ?: 'image/jpeg';

	// <media:content> — primary node Letterhead looks for.
	printf(
		'<media:content url="%s" medium="image" type="%s"%s%s>' . "\n",
		$url,
		esc_attr( $mime ),
		$width  ? ' width="' . $width . '"'   : '',
		$height ? ' height="' . $height . '"' : ''
	);
	printf( "\t" . '<media:title><![CDATA[%s]]></media:title>' . "\n", esc_html( $alt ) );
	if ( $medium ) {
		printf(
			"\t" . '<media:thumbnail url="%s" width="%d" height="%d"/>' . "\n",
			esc_url( $medium[0] ),
			(int) $medium[1],
			(int) $medium[2]
		);
	}
	echo '</media:content>' . "\n";

	// <enclosure> — fallback for readers that don't support the media namespace.
	$filesize = 0;
	$file     = get_attached_file( $thumb_id );
	if ( $file && file_exists( $file ) ) {
		$filesize = (int) filesize( $file );
	}
	printf(
		'<enclosure url="%s" length="%d" type="%s"/>' . "\n",
		$url,
		$filesize,
		esc_attr( $mime )
	);
} );
