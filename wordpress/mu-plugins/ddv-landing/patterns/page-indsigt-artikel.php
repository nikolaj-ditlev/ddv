<?php
/**
 * FULD SIDE: Indsigt-artikel (skabelon).
 * Bruges til hver ny "Indsigt"-artikel du opretter under indholdstypen
 * "Indsigt": indsæt hele skabelonen, og udskift eyebrow/overskrift/billede/
 * brødtekst/citat med artiklens eget indhold. CTA-båndet i bunden er det
 * samme som på Analysen/Barometer-siderne.
 */
$sections = array( 'indsigt-artikel-hero', 'indsigt-artikel-body', 'cta-banner' );

$content = array();
foreach ( $sections as $slug ) {
	$section = include __DIR__ . '/' . $slug . '.php';
	$content[] = $section['content'];
}

return array(
	'slug'       => 'page-indsigt-artikel',
	'title'      => __( 'FULD SIDE – Indsigt-artikel (skabelon)', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => implode( "\n\n", $content ),
);
