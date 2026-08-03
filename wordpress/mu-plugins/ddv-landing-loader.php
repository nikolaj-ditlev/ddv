<?php
/**
 * Plugin Name: DDV Landing Blocks (loader)
 * Description: WordPress' mu-plugins-scanner læser kun .php-filer direkte i wp-content/mu-plugins/,
 * ikke i undermapper. Denne fil skal ligge fladt i mu-plugins/ (ved siden af ddv-landing/-mappen)
 * og loader den rigtige plugin-fil fra undermappen.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once __DIR__ . '/ddv-landing/ddv-landing.php';
