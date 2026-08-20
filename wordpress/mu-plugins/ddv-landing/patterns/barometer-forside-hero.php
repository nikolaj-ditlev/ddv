<?php
return array(
	'slug'       => 'barometer-forside-hero',
	'title'      => __( 'Barometer forside – Split-hero med 2 sidekort', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"align":"wide","className":"ddv-section ddv-hero-forside-wrap","backgroundColor":"ddv-cream","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide ddv-section ddv-hero-forside-wrap has-ddv-cream-background-color has-background">

<!-- wp:columns {"verticalAlignment":"center","className":"ddv-hero-forside-content"} -->
<div class="wp-block-columns are-vertically-aligned-center ddv-hero-forside-content">

<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">
<!-- wp:paragraph {"className":"ddv-eyebrow"} -->
<p class="ddv-eyebrow">Det danske Vedligeholdsbarometer</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"fontSize":"x-large"} -->
<h1 class="wp-block-heading has-x-large-font-size">Sådan står det til med Dansk vedligehold</h1>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Barometeret samler svarene fra <strong>244 danske virksomheder</strong>, der har taget DDV Analysen, til ét nationalt billede. Det viser, hvor branchen reelt står – og hvor pengene typisk tabes.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"ddv-red","textColor":"ddv-white","style":{"border":{"radius":"999px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-ddv-white-color has-ddv-red-background-color has-text-color has-background wp-element-button" style="border-radius:999px">Læs hvad tallene fortæller</a></div>
<!-- /wp:button -->
<!-- wp:button {"backgroundColor":"ddv-dark-teal","textColor":"ddv-white","style":{"border":{"radius":"999px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-ddv-white-color has-ddv-dark-teal-background-color has-text-color has-background wp-element-button" style="border-radius:999px">DDV Analysen</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:columns {"fontSize":"small"} -->
<div class="wp-block-columns has-small-font-size">
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Baseret på svarene fra 244 virksomheder.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Få svar på din virksomheds vedligeholdsniveau</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"42%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:42%">

<!-- wp:group {"className":"ddv-card ddv-card--sage","style":{"spacing":{"blockGap":"1.5rem"}}} -->
<div class="wp-block-group ddv-card ddv-card--sage">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Få et nyt perspektiv på hverdagens udfordringer</h3>
<!-- /wp:heading -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"ddv-dark-teal","textColor":"ddv-white","style":{"border":{"radius":"999px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-ddv-white-color has-ddv-dark-teal-background-color has-text-color has-background wp-element-button" style="border-radius:999px">Se arrangementer</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ddv-card ddv-card--blue","style":{"spacing":{"blockGap":"1.5rem"}}} -->
<div class="wp-block-group ddv-card ddv-card--blue">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Bliv medlem af DDV</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Brug medlemsfordelene til at styrke dine faglige og praktiske kompetencer inden for strategisk vedligehold og sæt skub i din karriere.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"ddv-dark-teal","textColor":"ddv-white","style":{"border":{"radius":"999px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-ddv-white-color has-ddv-dark-teal-background-color has-text-color has-background wp-element-button" style="border-radius:999px">Bliv medlem</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- wp:group {"className":"ddv-hero-forside-photo"} -->
<div class="wp-block-group ddv-hero-forside-photo">
<!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="https://ddv.org/wp-content/uploads/2026/08/forside-hero-bagggrund.jpg" alt="Hånd der holder telefon med stigende søjlediagram"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
HTML
	,
);
