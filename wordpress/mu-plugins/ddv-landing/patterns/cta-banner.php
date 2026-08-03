<?php
return array(
	'slug'       => 'cta-banner',
	'title'      => __( 'CTA-bånd (rød, genbruges på alle 3 sider)', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"className":"ddv-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group ddv-section">
<!-- wp:group {"className":"ddv-cta-banner ddv-card--red","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"2rem","right":"2rem"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group ddv-cta-banner ddv-card--red" style="padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem">
<!-- wp:paragraph {"align":"center","className":"ddv-card__eyebrow"} -->
<p class="has-text-align-center ddv-card__eyebrow">START NU</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">26 trin mellem jer og et klart billede af jeres drift</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Din tid er godt givet ud – I får jeres tal, jeres benchmark og en konkret plan.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"ddv-dark-teal","textColor":"ddv-white","style":{"border":{"radius":"999px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-ddv-white-color has-ddv-dark-teal-background-color has-text-color has-background wp-element-button" style="border-radius:999px">Start gratis analyse</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
HTML
	,
);
