<?php
/**
 * Plugin Name: ACI Blocks
 * Plugin URI:  https://athensindependent.com
 * Description: Custom Gutenberg blocks for Athens Independent.
 * Version:     1.0.0
 * Author:      Athens Independent
 * License:     GPL-2.0-or-later
 * Text Domain: aci-blocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', function () {
	register_block_type( __DIR__ . '/blocks/recirculation' );
} );
