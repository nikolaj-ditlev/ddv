<?php
/**
 * Kursus-side – Indhold (skabelon).
 * Genbruges til alle 11 kursus-undersider: dupliker mønsteret og udskift teksten
 * pr. kursus. Afklarings- og afklaringsmøde-afsnittene er valgfrie – slet dem i
 * editoren for kurser der ikke skal have dem (se fx "Kursus 2"-screenshottet,
 * som kun har "Forløbet"/"Vi vil arbejde med"/"Formål").
 */
return array(
	'slug'       => 'kursus-content',
	'title'      => __( 'Kursus-side – Indhold (forløb, arbejdsområder, formål)', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"align":"wide","className":"ddv-section"} -->
<div class="wp-block-group alignwide ddv-section">

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Afklaring omkring næste skridt</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ddv-intro-text"} -->
<p class="ddv-intro-text">Virksomheden har brug for yderligere vejledning og sparring i arbejdet med udvikling af vedligeholdet for at:</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>At evaluere og forstå det nuværende vedligeholdsniveau i virksomheden.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>At identificere eventuelle mangler, ineffektiviteter eller områder med potentiale for forbedring i den eksisterende vedligeholdspraksis.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>At skabe et grundlag for at udvikle og implementere forbedrede vedligeholdsstrategier og -metoder.</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->

<!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top">

<!-- wp:column {"verticalAlignment":"top","width":"58%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:58%">

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Forløbet vil give dig følgende</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Kursisterne skal lære at bruge DDV analyse resultatet konkret og konstruktivt til at forbedre deres vedligehold. De vil modtage vejledning, support og sparring, som skal hjælpe dem med at vælge retning – næste skridt i forhold til, at udvikle og implementere effektive handlingsplaner. Dette skal føre til kontinuerlige forbedringer i deres vedligeholdsprocesser og -strategier, hvilket skaber langvarig værdi for deres organisationer.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"42%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:42%">

<!-- wp:image {"sizeSlug":"large","className":"ddv-rounded-image"} -->
<figure class="wp-block-image size-large ddv-rounded-image"><img src="https://ddv.org/wp-content/uploads/2026/08/jonas-niels.png" alt="Foto af underviserne Jonas og Niels-Jacob"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"ddv-audio-card"} -->
<div class="wp-block-group ddv-audio-card">
<!-- wp:paragraph {"className":"ddv-audio-card__title"} -->
<p class="ddv-audio-card__title">Hvorfor DDV analysen virker – Jonas Bek Jensen</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"ddv-audio-card__row","layout":{"type":"flex"}} -->
<div class="wp-block-group ddv-audio-card__row">
<!-- wp:paragraph {"className":"ddv-audio-card__playbtn"} -->
<p class="ddv-audio-card__playbtn">▶</p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div class="ddv-audio-card__waveform"><span style="height:40%"></span><span style="height:70%"></span><span style="height:50%"></span><span style="height:90%"></span><span style="height:60%"></span><span style="height:30%"></span><span style="height:80%"></span><span style="height:55%"></span><span style="height:45%"></span><span style="height:75%"></span><span style="height:65%"></span><span style="height:35%"></span><span style="height:85%"></span><span style="height:50%"></span><span style="height:60%"></span><span style="height:40%"></span><span style="height:70%"></span><span style="height:55%"></span><span style="height:45%"></span><span style="height:80%"></span></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"ddv-audio-card__duration"} -->
<p class="ddv-audio-card__duration">🎧 2 min og 14 sek</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Vi vil arbejde med</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ddv-kursus-subsection"} -->
<div class="wp-block-group ddv-kursus-subsection">
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Forståelse af DDV Analyse</h3>
<!-- /wp:heading -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>Grundlæggende forståelse af DDV analysen og dens formål.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Evnen til at fortolke og anvende resultaterne af en DDV analyse for at identificere styrker og svagheder i vedligeholdsstrategier.</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ddv-kursus-subsection"} -->
<div class="wp-block-group ddv-kursus-subsection">
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Gennemgang af Analyseresultater</h3>
<!-- /wp:heading -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>Teknikker til effektiv gennemgang og vurdering af DDV analyse resultater.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Kompetence i at identificere nøgleområder, der kræver forbedring, baseret på analysens resultater.</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ddv-kursus-subsection"} -->
<div class="wp-block-group ddv-kursus-subsection">
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Udvikling af Handlingsplaner</h3>
<!-- /wp:heading -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>Udvikling af konkrete handlingsplaner baseret på DDV analysens anbefalinger.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Evnen til at formulere og implementere effektive handlingsplaner, der adresserer identificerede problemområder.</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ddv-kursus-subsection"} -->
<div class="wp-block-group ddv-kursus-subsection">
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Vejledning og Support</h3>
<!-- /wp:heading -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>Modtagelse af målrettet vejledning og support til at implementere handlingsplaner.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Praktisk støtte i at tage de næste skridt for at forbedre vedligeholdsprocesser og -strategier.</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ddv-kursus-subsection"} -->
<div class="wp-block-group ddv-kursus-subsection">
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Sparring med Eksperter</h3>
<!-- /wp:heading -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>Deltagelse i sparringssessioner med eksperter for at diskutere udfordringer og løsninger.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Ny indsigt og ideer fra erfarne fagfolk, der kan hjælpe med at forbedre vedligeholdspraksis.</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ddv-kursus-subsection"} -->
<div class="wp-block-group ddv-kursus-subsection">
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Næste Skridt i Forbedringsprocessen</h3>
<!-- /wp:heading -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>Identifikation af næste skridt og prioritering af handlinger for løbende forbedringer.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Klar plan for fremtidige handlinger, der vil lede til vedvarende forbedringer i vedligeholdsstrategier.</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ddv-kursus-subsection"} -->
<div class="wp-block-group ddv-kursus-subsection">
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Opfølgning og Evaluering</h3>
<!-- /wp:heading -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>Metoder til løbende opfølgning og evaluering af implementerede handlingsplaner.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Evnen til at overvåge fremskridt og foretage nødvendige justeringer for at sikre succesfuld gennemførelse af forbedringer.</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Formål og forløbets målgruppe</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ddv-intro-text"} -->
<p class="ddv-intro-text">Ved at have klare mål og formål samt passende support i forbindelse med analysen, kan virksomheden identificere de mest effektive kurser og træningsmuligheder, der vil bidrage til at forbedre deres vedligeholdspraksis og optimere deres driftsresultater.</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>At sikre maksimal drifts- og produktionseffektivitet ved at optimere vedligeholdsprocesserne.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>At reducere nedetid og driftsforstyrrelser ved at implementere mere effektive vedligeholdsplaner og -procedurer.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>At forbedre sikkerheden og pålideligheden af udstyr og anlæg gennem en mere omhyggelig og struktureret tilgang til vedligehold.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>At øge virksomhedens konkurrenceevne og rentabilitet ved at minimere unødvendige omkostninger og maksimere produktionskapaciteten.</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Afklaringsmøde med instruktør</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"ddv-intro-text"} -->
<p class="ddv-intro-text">DDVs instruktører på kurserne har stor praktisk erfaring i arbejdet med vedligeholdsstrategier og -metoder. De kan give jer input og sparring i arbejdet med netop jeres virksomhed.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ddv-intro-text"} -->
<p class="ddv-intro-text">Gennem DDV tilbydes I et gratis online afklaringsmøde (1-2 timer), hvor I taler om jeres behov. Finder I ud af at fortsætte samarbejdet, aftales det direkte med instruktøren/konsulenten, og det videre forløb er uafhængig af DDV.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
HTML
	,
);
