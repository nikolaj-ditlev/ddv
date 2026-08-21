<?php
return array(
	'slug'       => 'barometer-hero',
	'title'      => __( 'Barometer (data-side) – Hero', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"align":"wide","className":"ddv-section","backgroundColor":"ddv-dark-teal","textColor":"ddv-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide ddv-section has-ddv-white-color has-ddv-dark-teal-background-color has-text-color has-background">
<!-- wp:columns {"className":"ddv-barometer-hero-row"} -->
<div class="wp-block-columns ddv-barometer-hero-row">

<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"ddv-barometer-hero-text"} -->
<div class="wp-block-column is-vertically-aligned-center ddv-barometer-hero-text" style="flex-basis:55%">
<!-- wp:paragraph {"className":"ddv-eyebrow ddv-eyebrow--solid"} -->
<p class="ddv-eyebrow ddv-eyebrow--solid">Det Danske Vedligeholdsbarometer</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"textColor":"ddv-white","fontSize":"x-large","className":"ddv-hero-heading-60"} -->
<h1 class="wp-block-heading has-ddv-white-color has-text-color has-x-large-font-size ddv-hero-heading-60">Bag hvert tal ligger en problemstilling, du måske kender</h1>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Vi gennemgår barometerets data fra forskellige vinkler. Hver historie ender samme sted: ved spørgsmålet "hvordan ser det så ud hos os?"</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%","className":"ddv-barometer-hero-photo"} -->
<div class="wp-block-column ddv-barometer-hero-photo" style="flex-basis:45%">
<!-- wp:image {"sizeSlug":"large","className":"ddv-barometer-hero-photo__img"} -->
<figure class="wp-block-image size-large ddv-barometer-hero-photo__img"><img src="https://ddv.org/wp-content/uploads/2026/08/hero-ddv-barometeret.jpg" alt="Hånd der bruger tablet med data og grafer fra Vedligeholdsbarometeret"/></figure>
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
