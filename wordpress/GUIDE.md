# DDV landingssider i Gutenberg Site Editor — guide

Dette bygger de 3 landingssider (DDV Analysen, Vedligeholdsbarometer, Barometer
forside) med **kun kernens Gutenberg-blokke** (Group, Columns, Heading,
Paragraph, Buttons, List, Image, Details) plus lidt CSS. Ingen page builder-
plugin, ingen ACF, ingen custom blocks — det gør det nemt at vedligeholde og
lynhurtigt at loade.

Da I kører **Site Editor med et bloktema**, styres farver/fonte af temaets
`theme.json`, og indholdet bygges som almindelige sider (Pages) i block-
editoren. Header/footer/nav er allerede globale template parts i jeres tema —
dem skal du IKKE genbygge, de er ens på alle 3 screenshots.

## 1. Sådan er pakken bygget

```
wordpress/
├── mu-plugins/ddv-landing/
│   ├── ddv-landing.php              ← loader: enqueuer CSS + registrerer patterns
│   ├── theme-json-snippet.json      ← farver/fonte du merger ind i temaets theme.json
│   ├── assets/css/ddv-landing.css   ← styling af custom komponenter (kort, FAQ, badges...)
│   └── patterns/
│       ├── analysen-*.php           ← sektioner til side 1 (DDV Analysen)
│       ├── barometer-*.php          ← sektioner til side 2 (Vedligeholdsbarometer)
│       ├── barometer-forside-*.php  ← sektion til side 3 (Barometer forside)
│       ├── faq.php, cta-banner.php  ← delte sektioner (bruges på flere sider)
│       └── page-*.php               ← 3 "fuld side"-patterns, der samler sektionerne
└── GUIDE.md
```

Hver `.php`-fil i `patterns/` returnerer rigtig Gutenberg-blok-markup. Når
mu-plugin'et er aktivt, dukker de op i pattern-inserteren under kategorien
**"DDV Landingssider"** — klar til at klikke ind på en side.

## 2. Installation (5 min)

1. Kopiér `wordpress/mu-plugins/ddv-landing/` til jeres WP-installations
   `wp-content/mu-plugins/`-mappe (mu = "must use", loader automatisk, ingen
   aktivering nødvendig). Har I ikke en `mu-plugins`-mappe, opret den blot.
2. Åbn jeres bloktemas `theme.json` (Appearance → Editor → Tema, eller i
   temaets filer) og **merge** indholdet af `theme-json-snippet.json` ind i
   de eksisterende `settings.color.palette` og `settings.typography.fontFamilies`
   arrays. Overskriv ikke jeres eksisterende farver/fonte — tilføj ved siden af.
   - Erstat hex-koderne med jeres officielle brandfarver (dem her er aflæst
     omtrentligt fra screenshots og skal kalibreres mod jeres designsystem).
   - Har I egne webfonte, peg `fontFamily` i snippet'et på dem i stedet for
     fallback-stakken.
3. Gem/genindlæs Site Editor. Gå til **Sider → Opret ny side** (eller åbn en
   eksisterende landingsside) og åbn block-editoren.
4. Klik **+ (Indsæt blok/mønster)** → fanen **Mønstre** → kategori
   **"DDV Landingssider"**. Her finder du både de 3 fulde side-patterns
   (`FULD SIDE – ...`) og alle enkelt-sektionerne.

Tip: Indsæt en `FULD SIDE`-pattern først for at få hele strukturen på plads,
og udskift derefter tekst/billeder direkte i editoren. Vil du starte forfra
med kun én sektion ad gangen (fx for at genbruge CTA-båndet på en helt anden
side), indsæt sektions-patterns enkeltvis i stedet.

## 3. Sektion → blok-opskrift (hvis du selv vil bygge/tilpasse)

| Screenshot-sektion | Core-blokke | Custom klasse |
|---|---|---|
| Hero (mørk baggrund, 2 kolonner) | Group (bg-farve) → Columns → Column | `ddv-section`, `ddv-eyebrow-row`, `ddv-hero-visual` |
| Eyebrow-pil ("Gratis – uden login") | Paragraph | `ddv-eyebrow` |
| Flydende gul badge på hero-billede | Paragraph inde i Group med `position:relative` | `ddv-floating-badge` |
| 3 farvede trin-kort | Columns → Column → Group (bg-farve) → Heading/Paragraph | `ddv-card ddv-card--yellow/sage/blue` |
| Nummer-badge i kort | Paragraph | `ddv-card__badge` |
| Fremdrifts-bar under trin-kort | Group (tomt, med inline `--ddv-progress-value`) | `ddv-progress` / `ddv-progress__fill` |
| Statistik-kort (store tal) | Group (bg-farve) → Paragraph (stort tal) → Heading → Paragraph | `ddv-card ddv-card--*`, `ddv-card__stat` |
| "Læs historien →"-link | Paragraph med link | `ddv-arrow-link` |
| To kort forbundet af pil (Barometer vs. Analysen) | Columns (kort / smal kolonne / kort) | `ddv-connector` i midterkolonnen |
| Nummereret liste (Datagrundlaget) | Group (flex) → Paragraph (tal) + Group (tekst) | `ddv-numbered-item`, `ddv-numbered-item__index` |
| FAQ-accordion | Details-blok (kernens `core/details`, WP 6.4+) | wrap alle `Details` i en Group med `ddv-faq` |
| Rødt CTA-bånd | Group (bg-farve, centreret indhold) → Heading/Paragraph/Buttons | `ddv-cta-banner ddv-card--red` |
| Kursuskort | Samme opskrift som trin-kort, med badge-tekst i stedet for tal | `ddv-card__eyebrow` |

Alle farve-/afstands-værdier hentes fra `theme.json` via CSS custom
properties (`--wp--preset--color--ddv-*`), så hvis I justerer en farve i
Site Editor → Styles, opdaterer det automatisk alle kortene.

## 4. Trin-for-trin: byg de 3 sider i editoren

### Side 1 — DDV Analysen (landingsside for selve analysen)
1. Opret siden, indsæt pattern **"FULD SIDE – DDV Analysen"**.
2. I hero'en: udskift billedet (klik billedet → Erstat) med jeres rigtige
   score-mockup, og ret CTA-knappernes links (marker knappen → link-ikonet).
3. I 3-trins-sektionen: ret tal/tekst i hvert kort, og sæt
   `--ddv-progress-value` (Avanceret → Ekstra CSS-klasse er allerede sat;
   for at ændre procenten, redigér tallet direkte i HTML via kode-editor for
   blokken, eller dupliker mønsteret med den rigtige værdi).
4. Testimonial-sektionen: udskift foto, og link "▶ Hør DDV Analysen
   forklaret" til jeres faktiske lydfil/side.
5. FAQ: dupliker en `Details`-blok pr. ekstra spørgsmål — de arver automatisk
   accordion-stylingen fra `.ddv-faq`.
6. Kursusbånd: ret de 3 kort til jeres aktuelle anbefalede kurser, og opdatér
   "Se alle kurser"-linket.
7. CTA-bånd i bunden: samme pattern som side 2 bruger — ret kun teksten hvis
   nødvendigt, ellers lad den være identisk for genkendelighed.

### Side 2 — Vedligeholdsbarometer (data-/storytelling-side)
1. Opret siden, indsæt pattern **"FULD SIDE – Vedligeholdsbarometer"**.
2. Hero: ret overskrift/tekst, udskift illustrationen.
3. Statistik-grid: de 5 kort ligger i to Columns-blokke (2 kort øverst, 3
   nederst — matcher screenshottets asymmetriske grid). Ret tal, overskrift,
   brødtekst og "Læs historien"-linket pr. kort til jeres rigtige historier.
4. Sammenlignings-sektionen ("Barometeret er hele landet"): ret teksten i de
   to kort og sørg for at "Tag DDV Analysen"-knappen linker til side 1.
5. Datagrundlaget: ret de 4 punkter hvis jeres metode ændrer sig.
6. CTA-bånd: samme pattern som side 1.

### Side 3 — Barometer forside/hub
1. Opret siden, indsæt pattern **"FULD SIDE – Barometer forside"**.
2. Dette er en kort split-hero: stor overskrift + 2 knapper i venstre/midt-
   kolonne, og 2 stablede farvede kort i højre kolonne (grøn: arrangementer,
   blå: bliv medlem). Ret tekst/links, udskift billedet.
3. Da screenshottet kun viser hero'en, kan du herefter frit indsætte flere af
   patterns fra side 2 (fx statistik-grid) nedenunder, hvis siden skal
   udbygges — de er designet til at kunne genbruges på tværs af sider.

## 5. Vedligehold og videre arbejde

- **Farver bor ét sted:** rediger dem i `theme.json` (eller Site Editor →
  Styles → Farver), ikke i CSS-filen. CSS-filen refererer kun til
  `var(--wp--preset--color--ddv-*)`.
- **Nye korttyper:** kopiér en `.ddv-card--*`-regel i `ddv-landing.css` og
  giv den et nyt farve-slug fra paletten.
- **Tilføj flere FAQ/kort:** dupliker den relevante blok i editoren — al
  styling følger automatisk med klassenavnene.
- **Performance:** CSS-filen er ét lille stylesheet (ingen page builder-
  overhead), og alle billeder bør I selv optimere/uploade til Medie­biblioteket
  i stedet for at bruge `placehold.co`-pladsholderne fra patterns.
- **A11y:** `core/details` giver dig gratis tastatur- og skærmlæser-support
  til FAQ'en. Behold semantisk hierarki (H1 → H2 → H3) — ret ikke niveauer
  bare for at ramme en bestemt skriftstørrelse; brug i stedet blokkens
  `fontSize`-indstilling.
