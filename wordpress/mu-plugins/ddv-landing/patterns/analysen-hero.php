<?php
return array(
	'slug'       => 'analysen-hero',
	'title'      => __( 'DDV Analysen – Hero', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"align":"wide","className":"ddv-section ddv-analysen-hero-bg","textColor":"ddv-white"} -->
<div class="wp-block-group alignwide ddv-section ddv-analysen-hero-bg has-ddv-white-color has-text-color">

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">

<!-- wp:group {"className":"ddv-eyebrow-row","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group ddv-eyebrow-row">
<!-- wp:paragraph {"className":"ddv-eyebrow"} -->
<p class="ddv-eyebrow">Gratis – uden login</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ddv-eyebrow"} -->
<p class="ddv-eyebrow">30 min. i alt</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"fontSize":"x-large"} -->
<h1 class="wp-block-heading has-x-large-font-size">DDV Analysen giver jer svarene på jeres vedligeholdsniveau</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Få en uvildig vurdering af jeres vedligeholdsniveau på 26 trin – og se præcis hvor I står stærkt, og hvor I mister penge.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"ddv-red","textColor":"ddv-white","style":{"border":{"radius":"999px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-ddv-white-color has-ddv-red-background-color has-text-color has-background wp-element-button" style="border-radius:999px">Start din analyse</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline ddv-btn-outline-white","textColor":"ddv-white"} -->
<div class="wp-block-button is-style-outline ddv-btn-outline-white"><a class="wp-block-button__link has-ddv-white-color has-text-color wp-element-button">Se relaterede kurser</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"className":"ddv-hero-trust","fontSize":"small"} -->
<p class="ddv-hero-trust has-small-font-size">Ingen kreditkort · Resultat med det samme · PDF til ledergruppen</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">

<!-- wp:group {"className":"ddv-hero-visual"} -->
<div class="wp-block-group ddv-hero-visual">
<!-- wp:image {"sizeSlug":"large","className":"ddv-rounded-image"} -->
<figure class="wp-block-image size-large ddv-rounded-image"><img src="https://ddv.org/wp-content/uploads/2026/08/jonas-niels.png" alt="Jonas og Niels-Jacob fra DDV"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"className":"ddv-floating-badge"} -->
<p class="ddv-floating-badge">Tager ca. 30-45 minutter<br/>Kan spare millioner</p>
<!-- /wp:paragraph -->
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
