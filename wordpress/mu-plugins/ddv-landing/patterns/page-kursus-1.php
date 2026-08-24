<?php
/**
 * Fuld side: Kursus 1 – Udvikling af jeres vedligehold.
 * Skabelon til de 11 kursus-undersider: dupliker denne fil (og ret slug/title),
 * eller indsæt "Kursus-side – Hero" + "Kursus-side – Indhold" enkeltvis i editoren
 * og ret teksten pr. kursus.
 */
$sections = array( 'kursus-hero', 'kursus-content', 'cta-banner' );

$content = array();
foreach ( $sections as $slug ) {
	$section = include __DIR__ . '/' . $slug . '.php';
	$content[] = $section['content'];
}

return array(
	'slug'       => 'page-kursus-1',
	'title'      => __( 'FULD SIDE – Kursus 1: Udvikling af jeres vedligehold', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => implode( "\n\n", $content ),
);
