<?php
/**
 * Scroll-indikator (outline-mus med animeret streg) til hero-sektioner.
 *
 * Samme princip som indsigt-filteret: et LEVENDE, centralt element i stedet
 * for noget der skal kopieres ind i hver enkelt pattern. Da flere heroer
 * allerede er rettet direkte på siderne (og dermed er løbet fra deres
 * oprindelige pattern), undgår dette at I skal genopbygge/erstatte de
 * rettelser - I indsætter bare selve elementet med en "Kortkode"-blok.
 *
 * Brug: indsæt en "Kortkode"-blok som det SIDSTE element i hero-sektionen,
 * med indholdet: [ddv_scroll_indicator]
 *
 * Farven følger som udgangspunkt automatisk tekstfarven i den sektion den
 * står i (via currentColor), så den ikke skal justeres manuelt fra hero til
 * hero. Hvis en hero har en baggrund hvor det ikke rammer rigtigt, kan
 * farven sættes eksplicit: [ddv_scroll_indicator color="white"] eller
 * [ddv_scroll_indicator color="dark"].
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ddv_landing_render_scroll_indicator( $atts ) {
	$atts = shortcode_atts(
		array(
			'color' => '', // tom = arver currentColor fra konteksten.
		),
		$atts,
		'ddv_scroll_indicator'
	);

	$class = 'ddv-scroll-indicator';
	if ( 'white' === $atts['color'] ) {
		$class .= ' ddv-scroll-indicator--white';
	} elseif ( 'dark' === $atts['color'] ) {
		$class .= ' ddv-scroll-indicator--dark';
	}

	return '<div class="' . esc_attr( $class ) . '" aria-hidden="true">'
		. '<svg class="ddv-scroll-indicator__svg" width="24" height="38" viewBox="0 0 24 38" fill="none" xmlns="http://www.w3.org/2000/svg">'
		. '<rect x="1.5" y="1.5" width="21" height="35" rx="10.5" stroke="currentColor" stroke-width="2"/>'
		. '<rect class="ddv-scroll-indicator__line" x="10" y="7" width="4" height="9" rx="2" fill="currentColor"/>'
		. '</svg>'
		. '</div>';
}
add_shortcode( 'ddv_scroll_indicator', 'ddv_landing_render_scroll_indicator' );
