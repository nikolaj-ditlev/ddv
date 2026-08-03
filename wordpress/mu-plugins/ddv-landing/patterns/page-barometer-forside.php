<?php
/**
 * Fuld side: Barometer forside/hub (screenshot 3).
 * Kun hero-delen er unik – header/footer er jeres globale template parts.
 */
$sections = array( 'barometer-forside-hero' );

$content = array();
foreach ( $sections as $slug ) {
	$section = include __DIR__ . '/' . $slug . '.php';
	$content[] = $section['content'];
}

return array(
	'slug'       => 'page-barometer-forside',
	'title'      => __( 'FULD SIDE – Barometer forside', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => implode( "\n\n", $content ),
);
