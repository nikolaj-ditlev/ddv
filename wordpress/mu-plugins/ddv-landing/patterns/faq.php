<?php
return array(
	'slug'       => 'faq',
	'title'      => __( 'FAQ – accordion (core/details)', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"align":"wide","className":"ddv-section","layout":{"type":"flow"}} -->
<div class="wp-block-group alignwide ddv-section">
<!-- wp:columns -->
<div class="wp-block-columns">

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%">
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Det vi oftest bliver spurgt om</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ddv-faq"} -->
<div class="wp-block-group ddv-faq">

<!-- wp:details -->
<details class="wp-block-details"><summary>Er det virkeligt gratis?</summary>
<!-- wp:paragraph -->
<p>Ja. DDV Analysen er gratis og kræver ikke login eller kreditkort.</p>
<!-- /wp:paragraph -->
</details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Hvor lang tid tager det?</summary>
<!-- wp:paragraph -->
<p>Cirka 30-45 minutter afhængigt af hvor detaljeret I svarer på de 26 trin.</p>
<!-- /wp:paragraph -->
</details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Hvor kommer benchmark-tallene fra?</summary>
<!-- wp:paragraph -->
<p>Fra Det Danske Vedligeholdsbarometer – anonymiserede svar fra 244+ danske virksomheder.</p>
<!-- /wp:paragraph -->
</details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Hvad sker der med vores svar?</summary>
<!-- wp:paragraph -->
<p>Svarene bruges kun samlet og anonymiseret til barometeret – aldrig til markedsføring.</p>
<!-- /wp:paragraph -->
</details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Skal jeg være ekspert for at svare?</summary>
<!-- wp:paragraph -->
<p>Nej. Spørgsmålene handler om praksis, planer og kompetencer – ingen tekniske detaljer.</p>
<!-- /wp:paragraph -->
</details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Kan vi gentage analysen?</summary>
<!-- wp:paragraph -->
<p>Ja, I kan tage analysen igen når som helst for at følge jeres udvikling.</p>
<!-- /wp:paragraph -->
</details>
<!-- /wp:details -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%">
<!-- wp:paragraph {"className":"ddv-card__eyebrow"} -->
<p class="ddv-card__eyebrow">MANGLER DU SVAR?</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>Skriv til <a href="mailto:ddv@ddv.org">ddv@ddv.org</a> – vi svarer typisk samme dag.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
HTML
	,
);
