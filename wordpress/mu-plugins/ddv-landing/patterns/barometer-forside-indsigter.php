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

<!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":0,"postType":"indsigt","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"className":"ddv-forside-indsigt-query"} -->
<div class="wp-block-query ddv-forside-indsigt-query">
<!-- wp:post-template {"className":"ddv-forside-indsigt-grid","layout":{"type":"grid","columnCount":4}} -->

<!-- wp:group {"className":"ddv-forside-indsigt-card"} -->
<div class="wp-block-group ddv-forside-indsigt-card">

<!-- wp:group {"className":"ddv-forside-indsigt-media"} -->
<div class="wp-block-group ddv-forside-indsigt-media">
<!-- wp:post-featured-image {"isLink":true,"className":"ddv-forside-indsigt-image"} /-->
<!-- wp:post-terms {"term":"indsigt-kategori","className":"ddv-forside-indsigt-badge"} /-->
</div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"ddv-forside-indsigt-title"} /-->
<!-- wp:post-excerpt {"moreText":"","excerptLength":16,"className":"ddv-forside-indsigt-excerpt"} /-->

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
