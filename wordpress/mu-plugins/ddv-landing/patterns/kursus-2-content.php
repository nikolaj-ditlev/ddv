<?php
/**
 * Kursus 2-side – Indhold.
 * Udfyldt ud fra brugerens Figma-oplæg. I modsætning til den generiske
 * kursus-content.php-skabelon er to-kolonne-layoutet her bevidst bredere:
 * højre spalte (fakta om underviseren) følger BÅDE "Forløbet vil give dig
 * følgende" og "Vi vil arbejde med" - først "Formål og forløbets
 * målgruppe" går tilbage til fuld bredde.
 */
return array(
	'slug'       => 'kursus-2-content',
	'title'      => __( 'Kursus 2-side – Indhold (forløb, arbejdsområder, underviser, formål)', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"align":"wide","className":"ddv-section"} -->
<div class="wp-block-group alignwide ddv-section">

<!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top">

<!-- wp:column {"verticalAlignment":"top","width":"58%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:58%">

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Forløbet vil give dig følgende</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Kurset giver deltagerne værktøjer til at starte vedligeholdsrejsen og bygge fundamentet i vedligeholds-/tekniske afdeling med fokus på den vigtigste ressource, nemlig medarbejderne og definition af kerneopgaven og forståelse for Asset Management.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Fundamentet skal være på plads til at kunne skabe struktur og systematik. Medarbejderne skal være klædt på til de opgaver og udfordringer afdelingen står overfor eller kan komme ud for, så de kan tage selvstændige beslutninger på et oplyst grundlag.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Deltagerne vil få værktøjer til at skabe en vedligeholdsorganisation, der er effektiv, sikker og i stand til at udnytte og maksimere deres ressourcer og kompetencer, hvilket vil forbedre effektiviteten og øge et godt og sikkert arbejdsmiljø.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Vi vil arbejde med</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"ddv-kursus-subsection"} -->
<div class="wp-block-group ddv-kursus-subsection">
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Introduktion Asset Management (AM)</h3>
<!-- /wp:heading -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>Hvad er AM, hvorfor er AM vigtig og hvordan administreres AM?</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ddv-kursus-subsection"} -->
<div class="wp-block-group ddv-kursus-subsection">
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Vedligeholdsorganisation</h3>
<!-- /wp:heading -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>Forklaring af konceptet vedligeholdsorganisation og dens centrale rolle i en virksomheds drift.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Identifikation af nøgleområder, herunder sikkerhed, arbejdsmiljø, ressourcer og kompetencer.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Forudsætninger for og indsigt i AM.</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ddv-kursus-subsection"} -->
<div class="wp-block-group ddv-kursus-subsection">
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Sikkerhed og Arbejdsmiljø i Vedligehold</h3>
<!-- /wp:heading -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>Gennemgang af sikkerhedsstandarder og -procedurer inden for vedligeholdsområdet.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Implementering af effektive strategier for at sikre et sikkert og sundt arbejdsmiljø.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Diskussion af vigtigheden af at integrere sikkerheds- og arbejdsmiljøhensyn i vedligeholdsplanlægningen.</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ddv-kursus-subsection"} -->
<div class="wp-block-group ddv-kursus-subsection">
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Organisationsstruktur og Ressourceallokering</h3>
<!-- /wp:heading -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>Analyse af forskellige modeller for vedligeholdsorganisation.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Overvejelse af ressourcebehov og optimal allokeringsstrategi.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Diskussion af metoder til at optimere organisatorisk effektivitet med fokus på vedligeholdsopgaver.</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ddv-kursus-subsection"} -->
<div class="wp-block-group ddv-kursus-subsection">
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Udvikling af Kompetencer og Uddannelse</h3>
<!-- /wp:heading -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>Identifikation af nødvendige kompetencer inden for vedligeholdsorganisationen.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Implementering af strategier for kompetenceudvikling og uddannelse.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Gennemgang af best practice for at opretholde og forbedre medarbejdernes færdigheder og viden.</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ddv-kursus-subsection"} -->
<div class="wp-block-group ddv-kursus-subsection">
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Integration af Sikkerhed og Arbejdsmiljø i Organisationskulturen</h3>
<!-- /wp:heading -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>Undersøgelse af, hvordan sikkerhed og arbejdsmiljø kan integreres som centrale værdier i vedligeholdsorganisationens kultur.</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ddv-kursus-subsection"} -->
<div class="wp-block-group ddv-kursus-subsection">
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Effektiv Ressourcestyring</h3>
<!-- /wp:heading -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>Anvendelse af metoder til at optimere ressourceudnyttelse inden for vedligehold.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Gennemgang af teknologier og værktøjer, der kan understøtte effektiv ressourcestyring.</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"ddv-kursus-subsection"} -->
<div class="wp-block-group ddv-kursus-subsection">
<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size">Strategier for Kompetenceudvikling og Talentudvikling</h3>
<!-- /wp:heading -->
<!-- wp:list -->
<ul class="wp-block-list">
<!-- wp:list-item --><li>Udvikling af en strategisk tilgang til kompetenceudvikling.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Overvejelse af talentforvaltningsstrategier for at bevare og tiltrække kompetent personale.</li><!-- /wp:list-item -->
<!-- wp:list-item --><li>Metoder til konstant forbedring og evaluering af organisatorisk ydeevne.</li><!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"42%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:42%">

<!-- wp:image {"sizeSlug":"large","className":"ddv-rounded-image"} -->
<figure class="wp-block-image size-large ddv-rounded-image"><img src="https://ddv.org/wp-content/uploads/2026/08/Jonas-Bek-Jensen_Profil.png" alt="Foto af underviser Jonas Bek Jensen"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"ddv-card__eyebrow"} -->
<p class="ddv-card__eyebrow">MØD UNDERVISEREN</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Jonas Bek Jensen</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Jonas har erfaring med at omsætte vedligeholdsstrategi til konkrete arbejdsgange og med at skabe struktur omkring roller, ansvar og prioriteringer i den tekniske organisation.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>På kurset kobler han teori med eksempler fra praksis, så deltagerne får metoder og værktøjer, der kan anvendes direkte i egen hverdag.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Specialiserer sig i</strong><br>Jonas arbejder blandt andet med Asset Management, vedligeholdsstrategi, organisering af vedligehold og udvikling af medarbejdere og arbejdsprocesser.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Et centralt fokus er at skabe sammenhæng mellem virksomhedens mål og den måde, vedligeholdsorganisationen prioriterer sine ressourcer og opgaver på.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Hør Jonas fortælle om kurset</strong><br>I episoden nedenfor fortæller Jonas kort om kursets indhold, hvem det er relevant for, og hvad deltagerne kan forvente at få med hjem.</p>
<!-- /wp:paragraph -->

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

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Formål og forløbets målgruppe</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Vedligeholds- og tekniske chefer, ledere og teamledere samt koordinatorer bliver på dette kursus klædt på til at opbygge vedligeholdsafdelingen med fokus på, at ressourcerne har de rette kompetencer i forhold til de udfordringer, man står overfor.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Fokus på kultur, mindset og adfærd gennem ledelse af medarbejderne i et sikkert og godt arbejdsmiljø, hvor der arbejdes med at tage ansvar og ejerskab.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Dette kursus vil udstyre deltagerne med værdifuld viden og praksisorienterede værktøjer til at opbygge og optimere en vedligeholdsorganisation med et særligt fokus på sikkerhed, arbejdsmiljø, ressourcer og kompetencer.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
HTML
	,
);
