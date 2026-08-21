<?php
return array(
	'slug'       => 'barometer-hero',
	'title'      => __( 'Barometer (data-side) – Hero', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"align":"wide","className":"ddv-section ddv-barometer-hero-bg","textColor":"ddv-white"} -->
<div class="wp-block-group alignwide ddv-section ddv-barometer-hero-bg has-ddv-white-color has-text-color">

<!-- wp:group {"className":"ddv-barometer-hero-content"} -->
<div class="wp-block-group ddv-barometer-hero-content">
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
<!-- /wp:group -->

</div>
<!-- /wp:group -->
HTML
	,
);
