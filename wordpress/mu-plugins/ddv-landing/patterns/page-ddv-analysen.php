<?php
/**
 * Fuld side: DDV Analysen (screenshot 1).
 * Sammensat af sektions-patterns, så du enten kan indsætte hele siden på én gang,
 * eller indsætte sektionerne enkeltvis og selv omarrangere dem i editoren.
 */
$sections = array( 'analysen-hero', 'analysen-steps', 'analysen-testimonial', 'analysen-report-preview', 'faq', 'analysen-courses', 'cta-banner' );

$content = array();
foreach ( $sections as $slug ) {
	$section = include __DIR__ . '/' . $slug . '.php';
	$content[] = $section['content'];
}

return array(
	'slug'       => 'page-ddv-analysen',
	'title'      => __( 'FULD SIDE – DDV Analysen', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => implode( "\n\n", $content ),
);
