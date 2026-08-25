<?php
/**
 * Indsigt-artikel – Eyebrow + underrubrik (skabelon).
 * Sættes ind i Indhold-området, lige under titel/udvalgt billede (som nu
 * trækkes AUTOMATISK ind af skabelonen "Enkelt Indsigt" via Post-titel- og
 * Udvalgt billede-blokkene - se GUIDE.md afsnit 4.7). Selve overskriften og
 * billedet skal derfor IKKE indsættes her, kun eyebrow + underrubrik.
 */
return array(
	'slug'       => 'indsigt-artikel-intro',
	'title'      => __( 'Indsigt-artikel – Eyebrow + underrubrik', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"align":"wide","className":"ddv-section ddv-indsigt-artikel-hero"} -->
<div class="wp-block-group alignwide ddv-section ddv-indsigt-artikel-hero">

<!-- wp:paragraph {"align":"center","className":"ddv-card__eyebrow"} -->
<p class="has-text-align-center ddv-card__eyebrow">ALARMERENDE TAL:</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"ddv-intro-text ddv-intro-text--center"} -->
<p class="has-text-align-center ddv-intro-text ddv-intro-text--center">Danske virksomheder bliver dårligere til at planlægge deres vedligehold. Det viser en ny rapport.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
HTML
	,
);
