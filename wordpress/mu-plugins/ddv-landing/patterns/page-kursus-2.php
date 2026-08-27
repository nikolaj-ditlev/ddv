<?php
/**
 * FULD SIDE: Kursus 2 (Vedligeholdsorganisationen).
 */
$sections = array( 'kursus-2-hero', 'kursus-2-content', 'cta-banner' );

$content = array();
foreach ( $sections as $slug ) {
	$section = include __DIR__ . '/' . $slug . '.php';
	$content[] = $section['content'];
}

return array(
	'slug'       => 'page-kursus-2',
	'title'      => __( 'FULD SIDE – Kursus 2 (Vedligeholdsorganisationen)', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => implode( "\n\n", $content ),
);
