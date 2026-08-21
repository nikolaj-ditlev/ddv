<?php
return array(
	'slug'       => 'barometer-hero',
	'title'      => __( 'Barometer (data-side) – Hero', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"align":"wide","className":"ddv-section","backgroundColor":"ddv-dark-teal","textColor":"ddv-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide ddv-section has-ddv-white-color has-ddv-dark-teal-background-color has-text-color has-background">
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
<!-- wp:paragraph {"className":"ddv-eyebrow ddv-eyebrow--solid"} -->
<p class="ddv-eyebrow ddv-eyebrow--solid">Det Danske Vedligeholdsbarometer</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"fontSize":"x-large","className":"ddv-hero-heading-60"} -->
<h1 class="wp-block-heading has-x-large-font-size ddv-hero-heading-60">Bag hvert tal ligger en problemstilling, du måske kender</h1>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Vi gennemgår barometerets data fra forskellige vinkler. Hver historie ender samme sted: ved spørgsmålet "hvordan ser det så ud hos os?"</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
<!-- wp:image {"sizeSlug":"large","className":"ddv-rounded-image"} -->
<figure class="wp-block-image size-large ddv-rounded-image"><img src="https://placehold.co/560x420/2E453F/F3EEE2?text=Data+%26+grafer" alt="Illustration af tablet med grafer og data"/></figure>
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
