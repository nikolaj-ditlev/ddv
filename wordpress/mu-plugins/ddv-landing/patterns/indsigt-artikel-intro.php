<?php
/**
 * Indsigt-artikel – Eyebrow (skabelon).
 * Sættes ind i Indhold-området, lige under titel/uddrag/udvalgt billede (som
 * nu trækkes AUTOMATISK ind af skabelonen "Enkelt Indsigt" via Post-titel-,
 * Uddrag- og Udvalgt billede-blokkene - se GUIDE.md afsnit 4.7). Selve
 * overskriften, underrubrikken og billedet skal derfor IKKE indsættes her,
 * kun eyebrow'en.
 */
return array(
	'slug'       => 'indsigt-artikel-intro',
	'title'      => __( 'Indsigt-artikel – Eyebrow', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"align":"wide","className":"ddv-section ddv-indsigt-artikel-hero"} -->
<div class="wp-block-group alignwide ddv-section ddv-indsigt-artikel-hero">

<!-- wp:paragraph {"align":"center","className":"ddv-card__eyebrow"} -->
<p class="has-text-align-center ddv-card__eyebrow">ALARMERENDE TAL:</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
HTML
	,
);
