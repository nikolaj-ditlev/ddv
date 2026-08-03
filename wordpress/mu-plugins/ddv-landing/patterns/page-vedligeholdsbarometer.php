<?php
/**
 * Fuld side: Vedligeholdsbarometer / data-side (screenshot 2).
 */
$sections = array( 'barometer-hero', 'barometer-stat-grid', 'barometer-comparison', 'barometer-datagrundlag', 'cta-banner' );

$content = array();
foreach ( $sections as $slug ) {
	$section = include __DIR__ . '/' . $slug . '.php';
	$content[] = $section['content'];
}

return array(
	'slug'       => 'page-vedligeholdsbarometer',
	'title'      => __( 'FULD SIDE – Vedligeholdsbarometer', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => implode( "\n\n", $content ),
);
