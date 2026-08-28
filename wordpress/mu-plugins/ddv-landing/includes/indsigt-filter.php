<?php
/**
 * Kategori-filter til Indsigt-oversigten.
 *
 * I modsætning til vores patterns (som er engangs-kopier, indsat i selve
 * sideindholdet) er dette en LEVENDE shortcode: knap-listen genereres på
 * ny ved hvert sidevisning, ud fra de kategorier der rent faktisk findes
 * under Indsigt → Kategorier lige nu. Tilføjer/fjerner I en kategori,
 * opdaterer filteret sig selv - ingen grund til at genindsætte noget i
 * editoren.
 *
 * Brug: indsæt en "Kortkode"-blok (Shortcode) lige OVER Query Loop-blokken
 * på Indsigt-oversigtssiden, med indholdet: [ddv_indsigt_filter]
 *
 * Selve filtreringen sker i assets/js/ddv-indsigt-filter.js, som læser
 * kategorien direkte fra kategori-mærkatets link på hvert Query Loop-kort
 * - ingen ekstra klasse/attribut nødvendig på selve kortene.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ddv_landing_render_indsigt_filter() {
	$buttons = '<button type="button" class="ddv-filter-btn is-active" data-ddv-filter="all">Alle</button>';

	$terms = get_terms(
		array(
			'taxonomy'   => 'indsigt_kategori',
			'hide_empty' => false,
		)
	);

	if ( ! is_wp_error( $terms ) ) {
		foreach ( $terms as $term ) {
			$buttons .= sprintf(
				'<button type="button" class="ddv-filter-btn" data-ddv-filter="%s">%s</button>',
				esc_attr( $term->slug ),
				esc_html( $term->name )
			);
		}
	}

	return '<div class="ddv-filter-bar">' . $buttons . '</div>';
}
add_shortcode( 'ddv_indsigt_filter', 'ddv_landing_render_indsigt_filter' );
