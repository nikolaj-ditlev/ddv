<?php
return array(
	'slug'       => 'barometer-forside-indsigter',
	'title'      => __( 'Barometer forside – Seneste 4 indsigter', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"align":"wide","className":"ddv-section ddv-forside-indsigt-preview"} -->
<div class="wp-block-group alignwide ddv-section ddv-forside-indsigt-preview">

<!-- wp:group {"className":"ddv-forside-indsigt-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group ddv-forside-indsigt-head">
<!-- wp:group {"className":"ddv-intro-text"} -->
<div class="wp-block-group ddv-intro-text">
<!-- wp:paragraph {"className":"ddv-eyebrow"} -->
<p class="ddv-eyebrow">INDSIGT</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Seneste indsigter</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline ddv-btn-outline-petrol"} -->
<div class="wp-block-button is-style-outline ddv-btn-outline-petrol"><a class="wp-block-button__link wp-element-button" href="#">Se alle indsigter</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":0,"postType":"indsigt","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]}} -->
<div class="wp-block-query">
<!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->

<!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:post-title {"level":2,"isLink":true} /-->
<!-- wp:post-excerpt {"moreText":"","excerptLength":16} /-->
<!-- wp:post-terms {"term":"indsigt_kategori"} /-->
</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
</div>
<!-- /wp:query -->

</div>
<!-- /wp:group -->
HTML
	,
);
