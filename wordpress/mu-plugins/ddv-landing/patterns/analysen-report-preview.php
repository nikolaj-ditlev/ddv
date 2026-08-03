<?php
return array(
	'slug'       => 'analysen-report-preview',
	'title'      => __( 'DDV Analysen – Rapport-preview', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"align":"wide","className":"ddv-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide ddv-section">
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
<!-- wp:paragraph {"className":"ddv-card__eyebrow"} -->
<p class="ddv-card__eyebrow">JERES RAPPORT</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Ikke bare tal – men reel data til optimering af jeres virksomhed</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>I får jeres score, jeres position i branchen, og vigtigst – de tre prioriteter der løfter jer mest.</p>
<!-- /wp:paragraph -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item -->
<li>Samlet score i decideret på 5 niveauer</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Benchmark mod 247 sammenlignelige virksomheder</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Tre prioriterede indsatsområder</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>Kursusanbefalinger på jeres svageste område</li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li>PDF du kan dele med bestyrelsen</li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"ddv-red","textColor":"ddv-white","style":{"border":{"radius":"999px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-ddv-white-color has-ddv-red-background-color has-text-color has-background wp-element-button" style="border-radius:999px">Se hvad analysen giver jer</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
<!-- wp:image {"sizeSlug":"large","className":"ddv-rounded-image"} -->
<figure class="wp-block-image size-large ddv-rounded-image"><img src="https://placehold.co/560x480/FFFFFF/2E453F?text=Rapport%3A+Samlet+resultat+62%2F100" alt="Mockup af DDV rapport med modenhedspyramide"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
HTML
	,
);
