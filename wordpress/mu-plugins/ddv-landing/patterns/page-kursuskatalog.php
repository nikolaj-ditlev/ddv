<?php
/**
 * Fuld side: Kursuskatalog (samler kurserne fra Barometeret/Analysen på én oversigtsside).
 * Sammensat af sektions-patterns, så du enten kan indsætte hele siden på én gang,
 * eller indsætte sektionerne enkeltvis og selv omarrangere dem i editoren.
 */
$sections = array( 'kursuskatalog-hero', 'kursuskatalog-grid' );

$content = array();
foreach ( $sections as $slug ) {
	$section = include __DIR__ . '/' . $slug . '.php';
	$content[] = $section['content'];
}

return array(
	'slug'       => 'page-kursuskatalog',
	'title'      => __( 'FULD SIDE – Kursuskatalog', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => implode( "\n\n", $content ),
);
