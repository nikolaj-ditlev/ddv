<?php
/**
 * Kursus 2-side – Hero.
 * Udfyldt ud fra brugerens Figma-oplæg for "Vedligeholdsorganisationen".
 */
return array(
	'slug'       => 'kursus-2-hero',
	'title'      => __( 'Kursus 2-side – Hero', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"align":"wide","className":"ddv-section ddv-kursus-hero-bg","textColor":"ddv-white"} -->
<div class="wp-block-group alignwide ddv-section ddv-kursus-hero-bg has-ddv-white-color has-text-color">

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">

<!-- wp:paragraph {"className":"ddv-eyebrow","textColor":"ddv-white"} -->
<p class="ddv-eyebrow has-ddv-white-color has-text-color">KURSUS 2.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"textColor":"ddv-white","fontSize":"x-large"} -->
<h1 class="wp-block-heading has-ddv-white-color has-text-color has-x-large-font-size">Vedligeholdsorganisationen</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"ddv-white"} -->
<p class="has-ddv-white-color has-text-color">Optimering og opbygning af vedligeholdsorganisationen, herunder sikkerhed og arbejdsmiljø samt ressourcer og kompetencer.</p>
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
<!-- wp:list-item --><li>Asset Management</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Vedligeholdsorganisation</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Sikkerhed og Arbejdsmiljø i Vedligehold</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Organisationsstruktur og Ressourceallokering</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Udvikling af Kompetencer og Uddannelse</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Sikkerhed og Arbejdsmiljø</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Effektiv Ressourcestyring</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Kompetenceudvikling og Talentudvikling</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->

<!-- wp:paragraph {"className":"ddv-kursus-duration"} -->
<p class="ddv-kursus-duration">Varighed: 1 dag</p>
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
