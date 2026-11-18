<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

final class TT_Plugin {

	private static $instance = null;

	public static function instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	private function __construct() {
		add_action( 'init', [ $this, 'register_post_types' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_assets' ] );
		add_action( 'rest_api_init', [ $this, 'register_routes' ] );
		add_shortcode( 'tt_example', [ $this, 'render_shortcode' ] );
	}

	public function register_post_types() {
	}

	public function register_assets() {
		wp_register_style( 'tt-style', TT_URL . 'assets/style.css', [], TT_VERSION );
		wp_register_script( 'tt-script', TT_URL . 'assets/app.js', [], TT_VERSION, true );
	}

	public function register_routes() {
	}

	public function render_shortcode( $atts ) {
		$atts = shortcode_atts( [ 'name' => 'World' ], $atts, 'tt_example' );

		return '<p class="tt-example">' . esc_html( 'Hello, ' . $atts['name'] ) . '</p>';
	}
}
