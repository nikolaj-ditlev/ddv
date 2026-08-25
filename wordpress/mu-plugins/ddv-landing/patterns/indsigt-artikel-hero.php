<?php
/**
 * Indsigt-artikel – Hero (skabelon).
 * Genbruges til alle fremtidige Indsigt-artikler: dupliker mønsteret, og
 * udskift eyebrow, overskrift, underrubrik og billede pr. artikel.
 * I modsætning til de andre heroes (Analysen, Barometer osv.) har denne
 * INGEN farvet baggrund - den ligger direkte på sidens cremefarvede
 * baggrund, centreret, med et stort billede i sitets signatur-facon.
 */
return array(
	'slug'       => 'indsigt-artikel-hero',
	'title'      => __( 'Indsigt-artikel – Hero (overskrift, underrubrik, billede)', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"align":"wide","className":"ddv-section ddv-indsigt-artikel-hero"} -->
<div class="wp-block-group alignwide ddv-section ddv-indsigt-artikel-hero">

<!-- wp:paragraph {"align":"center","className":"ddv-card__eyebrow"} -->
<p class="has-text-align-center ddv-card__eyebrow">ALARMERENDE TAL:</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textAlign":"center","fontSize":"x-large"} -->
<h1 class="wp-block-heading has-text-align-center has-x-large-font-size">Kan føre til milliardtab i nedetid hos danske virksomheder</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"ddv-intro-text ddv-intro-text--center"} -->
<p class="has-text-align-center ddv-intro-text ddv-intro-text--center">Danske virksomheder bliver dårligere til at planlægge deres vedligehold. Det viser en ny rapport.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"large","className":"ddv-rounded-image ddv-indsigt-artikel-image"} -->
<figure class="wp-block-image size-large ddv-rounded-image ddv-indsigt-artikel-image"><img src="https://ddv.org/wp-content/uploads/2026/08/indsigt-artikel-placeholder.png" alt="Illustration til artiklen"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->
HTML
	,
);
