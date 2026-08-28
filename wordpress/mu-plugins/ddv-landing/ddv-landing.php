<?php
/**
 * Plugin Name: DDV Landing Blocks
 * Description: Farve-/typografitokens, komponent-CSS og genbrugelige block patterns til DDV's 3 landingssider (DDV Analysen, Vedligeholdsbarometer, Barometer forside). Virker sammen med jeres bloktema via Site Editor.
 * Version: 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'DDV_LANDING_DIR', __DIR__ );
define( 'DDV_LANDING_URL', plugin_dir_url( __FILE__ ) );

require_once DDV_LANDING_DIR . '/includes/cpt-indsigt.php';
require_once DDV_LANDING_DIR . '/includes/indsigt-filter.php';

/**
 * Enqueue komponent-CSS på både forside og i Site Editor / post-editor,
 * så patterns ser rigtige ud mens du redigerer.
 */
function ddv_landing_enqueue_assets() {
	wp_enqueue_style(
		'ddv-landing',
		DDV_LANDING_URL . 'assets/css/ddv-landing.css',
		array(),
		filemtime( DDV_LANDING_DIR . '/assets/css/ddv-landing.css' )
	);
}
add_action( 'wp_enqueue_scripts', 'ddv_landing_enqueue_assets' );
add_action( 'enqueue_block_editor_assets', 'ddv_landing_enqueue_assets' );

/**
 * Kategori-filter til Indsigt-oversigten (kun forsiden, ikke editoren -
 * det er en ren front-end klik-interaktion). Scriptet er et no-op på alle
 * andre sider, da det selv tjekker om .ddv-filter-bar findes på siden.
 */
function ddv_landing_enqueue_indsigt_filter() {
	wp_enqueue_script(
		'ddv-indsigt-filter',
		DDV_LANDING_URL . 'assets/js/ddv-indsigt-filter.js',
		array(),
		filemtime( DDV_LANDING_DIR . '/assets/js/ddv-indsigt-filter.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'ddv_landing_enqueue_indsigt_filter' );

/**
 * Egen kategori i pattern-inserteren, så de 12 DDV-patterns er nemme at finde.
 */
function ddv_landing_register_pattern_category() {
	register_block_pattern_category(
		'ddv-landing',
		array( 'label' => __( 'DDV Landingssider', 'ddv-landing' ) )
	);
}
add_action( 'init', 'ddv_landing_register_pattern_category' );

/**
 * Registrer alle patterns fra /patterns. Hver fil returnerer et array
 * med 'title', 'slug' (uden præfiks), 'categories', 'content'.
 */
function ddv_landing_register_patterns() {
	$patterns_dir = DDV_LANDING_DIR . '/patterns';
	foreach ( glob( $patterns_dir . '/*.php' ) as $file ) {
		$pattern = include $file;
		if ( ! is_array( $pattern ) || empty( $pattern['slug'] ) ) {
			continue;
		}
		register_block_pattern(
			'ddv-landing/' . $pattern['slug'],
			array(
				'title'      => $pattern['title'],
				'categories' => isset( $pattern['categories'] ) ? $pattern['categories'] : array( 'ddv-landing' ),
				'content'    => $pattern['content'],
			)
		);
	}
}
add_action( 'init', 'ddv_landing_register_patterns', 20 );
