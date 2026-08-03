<?php
return array(
	'slug'       => 'barometer-comparison',
	'title'      => __( 'Barometer – Sammenligning (Barometer vs. Analysen)', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"align":"wide","className":"ddv-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide ddv-section">

<!-- wp:paragraph {"align":"center","className":"ddv-card__eyebrow"} -->
<p class="has-text-align-center ddv-card__eyebrow">SÅDAN FUNGERER DET</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Barometeret er hele landet, analysen er Jer!</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Landstallene viser mønstrene. DDV Analysen oversætter dem til jeres egen virksomhed – på få minutter.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"44%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%">
<!-- wp:group {"className":"ddv-card ddv-card--cream"} -->
<div class="wp-block-group ddv-card ddv-card--cream">
<!-- wp:paragraph {"className":"ddv-card__eyebrow"} -->
<p class="ddv-card__eyebrow">DET DANSKE VEDLIGEHOLDSBAROMETER</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Det samlede billede</h3>
<!-- /wp:heading -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>Samlet data fra 244 danske virksomheder</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Nationale snit og brancheindblik</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Fortællinger med fokus på reelle problemstillinger</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"999px"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" style="border-radius:999px">Læs mere fakta</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"12%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:12%">
<!-- wp:paragraph {"className":"ddv-connector","align":"center"} -->
<p class="ddv-connector has-text-align-center">→</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"44%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%">
<!-- wp:group {"className":"ddv-card ddv-card--red"} -->
<div class="wp-block-group ddv-card ddv-card--red">
<!-- wp:paragraph {"className":"ddv-card__eyebrow"} -->
<p class="ddv-card__eyebrow">DDV ANALYSEN</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"textColor":"ddv-white"} -->
<h3 class="wp-block-heading has-ddv-white-color has-text-color">Jeres eget billede</h3>
<!-- /wp:heading -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>26 trin – ca. 30 minutter</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Jeres placering på modenhedspyramiden</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Benchmark direkte mod barometerets landstal</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Anbefalede DDV-kurser på jeres svageste områder</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"ddv-white","textColor":"ddv-red","style":{"border":{"radius":"999px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-ddv-red-color has-ddv-white-background-color has-text-color has-background wp-element-button" style="border-radius:999px">Tag DDV Analysen</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->
HTML
	,
);
