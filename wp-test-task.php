<?php
/**
 * Plugin Name:       Test Task
 * Description:       Test task plugin.
 * Version:           1.0.0
 * Author:            Your Name
 * Text Domain:       wp-test-task
 * Requires at least: 6.0
 * Requires PHP:      7.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'TT_VERSION', '1.0.0' );
define( 'TT_PATH', plugin_dir_path( __FILE__ ) );
define( 'TT_URL', plugin_dir_url( __FILE__ ) );

require_once TT_PATH . 'includes/class-tt-plugin.php';

add_action( 'plugins_loaded', [ 'TT_Plugin', 'instance' ] );
