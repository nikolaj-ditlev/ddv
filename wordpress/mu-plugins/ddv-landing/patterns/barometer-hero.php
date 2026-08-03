<?php
return array(
	'slug'       => 'barometer-hero',
	'title'      => __( 'Barometer (data-side) – Hero', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"className":"ddv-section","backgroundColor":"ddv-dark-teal","textColor":"ddv-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group ddv-section has-ddv-white-color has-ddv-dark-teal-background-color has-text-color has-background">
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
<!-- wp:paragraph {"className":"ddv-eyebrow"} -->
<p class="ddv-eyebrow">Det Danske Vedligeholdsbarometer</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"fontSize":"x-large"} -->
<h1 class="wp-block-heading has-x-large-font-size">Bag hvert tal ligger en problemstilling, du måske kender</h1>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Vi gennemgår barometerets data fra forskellige vinkler. Hver historie ender samme sted: ved spørgsmålet "hvordan ser det så ud hos os?"</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"16px"}}} -->
<figure class="wp-block-image size-large"><img src="https://placehold.co/560x420/2E453F/F3EEE2?text=Data+%26+grafer" alt="Illustration af tablet med grafer og data" style="border-radius:16px"/></figure>
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
