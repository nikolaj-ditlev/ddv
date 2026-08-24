<?php
/**
 * Kursus-side – Hero (skabelon).
 * Genbruges til alle 11 kursus-undersider: dupliker mønsteret, ret "KURSUS N.",
 * titel, kort beskrivelse, tjekliste-punkter og varighed pr. kursus.
 */
return array(
	'slug'       => 'kursus-hero',
	'title'      => __( 'Kursus-side – Hero (titel + tjekliste-kort)', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"align":"wide","className":"ddv-section","backgroundColor":"ddv-dark-teal","textColor":"ddv-white"} -->
<div class="wp-block-group alignwide ddv-section has-ddv-white-color has-ddv-dark-teal-background-color has-text-color has-background">

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">

<!-- wp:paragraph {"className":"ddv-eyebrow","textColor":"ddv-white"} -->
<p class="ddv-eyebrow has-ddv-white-color has-text-color">KURSUS 1.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textColor":"ddv-white","fontSize":"x-large"} -->
<h1 class="wp-block-heading has-ddv-white-color has-text-color has-x-large-font-size">Udvikling af jeres vedligehold</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"ddv-white"} -->
<p class="has-ddv-white-color has-text-color">Virksomheden har brug for yderligere vejledning og sparring i arbejdet med udvikling af vedligeholdet.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"42%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:42%">

<!-- wp:group {"className":"ddv-card ddv-card--yellow"} -->
<div class="wp-block-group ddv-card ddv-card--yellow">

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Kurset handler om</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"ddv-check-list"} -->
<ul class="wp-block-list ddv-check-list">
<!-- wp:list-item --><li>Forståelse af DDV Analyse</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Gennemgang af Analyseresultater</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Udvikling af Handlingsplaner</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Vejledning og Support</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Sparring med Eksperter</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Næste Skridt i Forbedringsprocessen</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Opfølgning og Evaluering</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"ddv-kursus-duration"} -->
<p class="ddv-kursus-duration">Varighed: Aftales individuelt</p>
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
