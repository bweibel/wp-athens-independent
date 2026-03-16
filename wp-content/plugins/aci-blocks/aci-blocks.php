<?php
/**
 * Plugin Name: ACI Blocks
 * Plugin URI:  https://athensindependent.com
 * Description: Custom Gutenberg blocks for Athens Independent.
 * Version:     1.1.0
 * Author:      Athens Independent
 * License:     GPL-2.0-or-later
 * Text Domain: aci-blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Register blocks.
add_action( 'init', function () {
	register_block_type( __DIR__ . '/blocks/recirculation' );
	register_block_type( __DIR__ . '/blocks/breaking-news' );
} );

// Register Breaking News CPT.
add_action( 'init', function () {
	register_post_type( 'aci_breaking_news', array(
		'labels' => array(
			'name'               => __( 'Breaking News', 'aci-blocks' ),
			'singular_name'      => __( 'Breaking News Item', 'aci-blocks' ),
			'add_new_item'       => __( 'Add New Breaking News Item', 'aci-blocks' ),
			'edit_item'          => __( 'Edit Breaking News Item', 'aci-blocks' ),
			'new_item'           => __( 'New Breaking News Item', 'aci-blocks' ),
			'view_item'          => __( 'View Breaking News Item', 'aci-blocks' ),
			'search_items'       => __( 'Search Breaking News', 'aci-blocks' ),
			'not_found'          => __( 'No breaking news found.', 'aci-blocks' ),
			'not_found_in_trash' => __( 'No breaking news found in trash.', 'aci-blocks' ),
			'menu_name'          => __( 'Breaking News', 'aci-blocks' ),
		),
		'public'       => false,
		'show_ui'      => true,
		'show_in_menu' => true,
		'show_in_rest' => true,
		'supports'     => array( 'title' ),
		'menu_icon'    => 'dashicons-megaphone',
	) );
} );

// Register Breaking News post meta.
add_action( 'init', function () {
	register_post_meta( 'aci_breaking_news', '_aci_breaking_news_url', array(
		'type'              => 'string',
		'single'            => true,
		'show_in_rest'      => true,
		'sanitize_callback' => 'esc_url_raw',
		'auth_callback'     => function () {
			return current_user_can( 'edit_posts' );
		},
	) );

	register_post_meta( 'aci_breaking_news', '_aci_breaking_news_active', array(
		'type'          => 'string',
		'single'        => true,
		'show_in_rest'  => true,
		'auth_callback' => function () {
			return current_user_can( 'edit_posts' );
		},
	) );
} );

// Add meta box for Breaking News CPT.
add_action( 'add_meta_boxes', function () {
	add_meta_box(
		'aci_breaking_news_meta',
		__( 'Breaking News Settings', 'aci-blocks' ),
		'aci_blocks_breaking_news_meta_box',
		'aci_breaking_news',
		'normal',
		'high'
	);
} );

function aci_blocks_breaking_news_meta_box( $post ) {
	wp_nonce_field( 'aci_breaking_news_save_meta', 'aci_breaking_news_nonce' );

	$url    = get_post_meta( $post->ID, '_aci_breaking_news_url', true );
	$active = get_post_meta( $post->ID, '_aci_breaking_news_active', true );
	?>
	<p>
		<label for="aci_breaking_news_url"><strong><?php esc_html_e( 'Link URL', 'aci-blocks' ); ?></strong></label><br>
		<input
			type="text"
			id="aci_breaking_news_url"
			name="aci_breaking_news_url"
			value="<?php echo esc_attr( $url ); ?>"
			style="width:100%"
			placeholder="https://"
		>
	</p>
	<p>
		<label>
			<input
				type="checkbox"
				name="aci_breaking_news_active"
				value="1"
				<?php checked( $active, '1' ); ?>
			>
			<strong><?php esc_html_e( 'Active', 'aci-blocks' ); ?></strong>
			&mdash; <?php esc_html_e( 'Display this item in the breaking news bar.', 'aci-blocks' ); ?>
		</label>
	</p>
	<?php
}

// Register ACI Options.
add_action( 'admin_init', function () {
	register_setting( 'aci_options_group', 'aci_options', array(
		'sanitize_callback' => function ( $input ) {
			return array(
				'breaking_news_enabled' => ! empty( $input['breaking_news_enabled'] ) ? '1' : '',
			);
		},
	) );

	add_settings_section(
		'aci_breaking_news_section',
		__( 'Breaking News', 'aci-blocks' ),
		'__return_false',
		'aci-settings'
	);

	add_settings_field(
		'aci_breaking_news_enabled',
		__( 'Enable Breaking News Bar', 'aci-blocks' ),
		'aci_blocks_field_breaking_news_enabled',
		'aci-settings',
		'aci_breaking_news_section'
	);
} );

function aci_blocks_field_breaking_news_enabled() {
	$options = get_option( 'aci_options', array() );
	$enabled = ! empty( $options['breaking_news_enabled'] ) || ! isset( $options['breaking_news_enabled'] );
	?>
	<label class="aci-toggle">
		<input type="checkbox" name="aci_options[breaking_news_enabled]" value="1" <?php checked( $enabled ); ?>>
		<span class="aci-toggle__track"><span class="aci-toggle__thumb"></span></span>
		<span class="aci-toggle__label"><?php esc_html_e( 'Show the breaking news bar on the frontend', 'aci-blocks' ); ?></span>
	</label>
	<?php
}

// Enqueue toggle styles on ACI Settings page only.
add_action( 'admin_enqueue_scripts', function ( $hook ) {
	if ( 'toplevel_page_aci-settings' !== $hook ) {
		return;
	}
	$css = '
		.aci-toggle {
			display: inline-flex;
			align-items: center;
			gap: 10px;
			cursor: pointer;
			user-select: none;
		}
		.aci-toggle input {
			position: absolute;
			opacity: 0;
			width: 0;
			height: 0;
		}
		.aci-toggle__track {
			position: relative;
			width: 44px;
			height: 24px;
			background: #c3c4c7;
			border-radius: 12px;
			transition: background 0.2s;
			flex-shrink: 0;
		}
		.aci-toggle__thumb {
			position: absolute;
			width: 18px;
			height: 18px;
			background: #fff;
			border-radius: 50%;
			top: 3px;
			left: 3px;
			transition: left 0.2s;
			box-shadow: 0 1px 3px rgba(0,0,0,.3);
		}
		.aci-toggle input:checked + .aci-toggle__track {
			background: #2271b1;
		}
		.aci-toggle input:checked + .aci-toggle__track .aci-toggle__thumb {
			left: 23px;
		}
		.aci-toggle input:focus-visible + .aci-toggle__track {
			outline: 2px solid #2271b1;
			outline-offset: 2px;
		}
		.aci-toggle__label {
			font-size: 14px;
		}
	';
	wp_register_style( 'aci-admin-settings', false );
	wp_enqueue_style( 'aci-admin-settings' );
	wp_add_inline_style( 'aci-admin-settings', $css );
} );

// Add ACI Settings menu page.
add_action( 'admin_menu', function () {
	add_menu_page(
		__( 'ACI Settings', 'aci-blocks' ),
		__( 'ACI Settings', 'aci-blocks' ),
		'manage_options',
		'aci-settings',
		'aci_blocks_settings_page',
		'dashicons-admin-settings',
		30
	);
} );

function aci_blocks_settings_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'ACI Settings', 'aci-blocks' ); ?></h1>
		<form method="post" action="options.php">
			<?php
			settings_fields( 'aci_options_group' );
			do_settings_sections( 'aci-settings' );
			submit_button();
			?>
		</form>
	</div>
	<?php
}

// Save meta box data.
add_action( 'save_post_aci_breaking_news', function ( $post_id ) {
	if ( ! isset( $_POST['aci_breaking_news_nonce'] ) ) {
		return;
	}
	if ( ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['aci_breaking_news_nonce'] ) ), 'aci_breaking_news_save_meta' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	$url = isset( $_POST['aci_breaking_news_url'] ) ? esc_url_raw( wp_unslash( $_POST['aci_breaking_news_url'] ) ) : '';
	update_post_meta( $post_id, '_aci_breaking_news_url', $url );

	$active = isset( $_POST['aci_breaking_news_active'] ) ? '1' : '';
	update_post_meta( $post_id, '_aci_breaking_news_active', $active );
} );
