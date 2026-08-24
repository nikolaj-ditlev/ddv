# DDV landingssider i Gutenberg Site Editor — guide

Dette bygger DDV's landingssider (DDV Analysen, Vedligeholdsbarometer,
Barometer forside, Kursuskatalog, Kursus-undersider, Indsigt) med **kun
kernens Gutenberg-blokke** (Group, Columns, Heading, Paragraph, Buttons,
List, Image, Details, Query Loop) plus lidt CSS. Ingen page builder-plugin,
ingen ACF, ingen custom blocks — det gør det nemt at vedligeholde og
lynhurtigt at loade.

Da I kører **Site Editor med et bloktema**, styres farver/fonte af temaets
`theme.json`, og indholdet bygges som almindelige sider (Pages) i block-
editoren. Header/footer/nav er allerede globale template parts i jeres tema —
dem skal du IKKE genbygge.

## 1. Sådan er pakken bygget

```
wordpress/
├── mu-plugins/
│   ├── ddv-landing-loader.php       ← SKAL ligge fladt i mu-plugins/ (se punkt 2 nedenfor)
│   └── ddv-landing/
│       ├── ddv-landing.php              ← loaderen: enqueuer CSS, registrerer patterns + CPT
│       ├── theme-json-snippet.json      ← farver/fonte du merger ind i temaets theme.json
│       ├── includes/
│       │   └── cpt-indsigt.php          ← custom post type + kategori-taksonomi til "Indsigt"
│       ├── assets/css/ddv-landing.css   ← styling af custom komponenter (kort, FAQ, badges...)
│       └── patterns/
│           ├── analysen-*.php           ← sektioner til DDV Analysen
│           ├── barometer-*.php          ← sektioner til Vedligeholdsbarometer
│           ├── barometer-forside-*.php  ← sektion til Barometer forside
│           ├── kursuskatalog-*.php      ← sektioner til Kursuskatalog (oversigt over alle kurser)
│           ├── kursus-*.php             ← skabelon til de 11 kursus-undersider
│           ├── indsigt-hero.php         ← hero til Indsigt-oversigten (selve artikellisten
│           │                               indsættes som en Query Loop-blok direkte i editoren,
│           │                               se afsnit 4.6)
│           ├── faq.php, cta-banner.php  ← delte sektioner (bruges på flere sider)
│           └── page-*.php               ← "fuld side"-patterns, der samler sektionerne
└── GUIDE.md

.github/workflows/
└── deploy-ddv-landing.yml           ← valgfri GitHub Action: auto-deploy til FTP ved push til main
```

Hver `.php`-fil i `patterns/` returnerer rigtig Gutenberg-blok-markup. Når
mu-plugin'et er aktivt, dukker de op i pattern-inserteren under kategorien
**"DDV Landingssider"** — klar til at klikke ind på en side.

> **Vigtigt:** WordPress' mu-plugins-mekanisme scanner **kun** `.php`-filer der
> ligger direkte i `wp-content/mu-plugins/` — den kigger ikke i undermapper.
> Derfor findes `ddv-landing-loader.php`, som skal ligge ved siden af
> `ddv-landing/`-mappen (ikke inde i den) og blot `require`'er den rigtige fil.

## 2. Installation (5 min)

1. Upload både mappen `ddv-landing/` **og** filen `ddv-landing-loader.php` til
   jeres WP-installations `wp-content/mu-plugins/`-mappe, så de ligger side
   om side (`wp-content/mu-plugins/ddv-landing-loader.php` og
   `wp-content/mu-plugins/ddv-landing/...`). Har I ikke en `mu-plugins`-mappe,
   opret den blot (mu = "must use", loader automatisk, ingen aktivering
   nødvendig — men filen med koden skal altså ligge fladt, se boksen ovenfor).
2. Åbn jeres bloktemas `theme.json` (Appearance → Editor → Tema, eller i
   temaets filer) og **merge** indholdet af `theme-json-snippet.json` ind i
   de eksisterende `settings.color.palette` og `settings.typography.fontFamilies`
   arrays. Overskriv ikke jeres eksisterende farver/fonte — tilføj ved siden af.
   - **Farver ændres nemmest direkte i WordPress**, ikke i denne fil: Site
     Editor → Styles → Farver → klik paletfarven → skift hex-værdi. Filen her
     er kun en referencekopi og opdaterer intet live af sig selv (se afsnit 5).
   - **Fonte:** Hvis jeres tema allerede definerer rigtige brandfonte under
     `settings.typography.fontFamilies`, spring `fontFamilies`-delen af
     snippet'et over. Mønstrene sætter ingen eksplicit skrifttype på
     overskrifter/tekst som udgangspunkt, så de arver automatisk jeres temas
     fonte — bortset fra enkelte steder hvor et element (fx H1/H2) har fået en
     eksplicit `textColor`/skrifttype for at undgå at det falder tilbage til
     temaets standardfarve/-skrift på en mørk baggrund.
3. **Nulstil permalinks:** Indstillinger → Permalinks → klik **Gem ændringer**
   (uden at ændre noget). Nødvendigt fordi `cpt-indsigt.php` registrerer en ny
   post type med sin egen URL-struktur (`/indsigt/...`) — uden dette trin
   404'er de nye sider.
4. Gem/genindlæs Site Editor. Gå til **Sider → Opret ny side** (eller åbn en
   eksisterende landingsside) og åbn block-editoren.
5. Klik **+ (Indsæt blok/mønster)** → fanen **Mønstre** → kategori
   **"DDV Landingssider"**. Her finder du både `FULD SIDE – ...`-patterns og
   alle enkelt-sektionerne.

Tip: Indsæt en `FULD SIDE`-pattern først for at få hele strukturen på plads,
og udskift derefter tekst/billeder direkte i editoren. Vil du starte forfra
med kun én sektion ad gangen (fx for at genbruge CTA-båndet på en helt anden
side), indsæt sektions-patterns enkeltvis i stedet.

### Valgfrit: automatisk deploy via GitHub Actions

`.github/workflows/deploy-ddv-landing.yml` kan uploade `wordpress/mu-plugins/`
til jeres FTP-server automatisk ved push til `main`, så I slipper for manuel
download/upload. Kræver tre repo-secrets (`FTP_SERVER`, `FTP_USERNAME`,
`FTP_PASSWORD`) og at `server-dir`-stierne i filen rettes til jeres rigtige
serversti. Rent valgfrit — al manuel FTP-upload beskrevet i denne guide
virker uafhængigt af om workflowet er sat op.

## 3. Sektion → blok-opskrift (hvis du selv vil bygge/tilpasse)

| Sektion | Core-blokke | Custom klasse |
|---|---|---|
| Hero (mørk baggrund, evt. 2 kolonner) | Group (bg-farve/-billede) → evt. Columns → Column | `ddv-section`, `ddv-eyebrow-row`, `ddv-hero-lead` |
| Eyebrow-pil ("Gratis – uden login") | Paragraph | `ddv-eyebrow` (evt. `ddv-eyebrow--solid` for udfyldt variant) |
| 3 farvede trin-/kursus-kort | Columns → Column → Group (bg-farve) → Heading/Paragraph | `ddv-card ddv-card--yellow/sage/blue/cream/tan/red/dark` |
| Nummer-badge i kort | Paragraph | `ddv-card__badge` |
| Fremdrifts-bar under trin-kort | Group (tomt, med inline `--ddv-progress-value`) | `ddv-progress` / `ddv-progress__fill` |
| "Læs historien →"-link | Paragraph med link | `ddv-arrow-link` |
| To kort forbundet af pil (Barometer vs. Analysen) | Columns (kort / smal kolonne / kort) | `ddv-connector` i midterkolonnen |
| Nummereret liste (Datagrundlaget) | Group (flex) → Paragraph (tal) + Group (tekst) | `ddv-numbered-item`, `ddv-numbered-item__index` |
| FAQ-accordion | Details-blok (kernens `core/details`, WP 6.4+) | wrap alle `Details` i en Group med `ddv-faq` |
| Rødt CTA-bånd (fast 1180px, centreret) | Group (bg-farve, centreret indhold) → Heading/Paragraph/Buttons | `ddv-cta-banner ddv-card--red` |
| Tjekliste med flueben (kursus-hero-kort) | List | `ddv-check-list` |
| Lydklip-kort (afspilknap + waveform + varighed) | Group + Paragraph + `wp:html` (waveform-bars) | `ddv-audio-card` og undertyper, se `kursus-content.php` |
| Artikelkort (Indsigt, Query Loop) | `core/query` → `core/post-template` (Featured Image/Terms/Title/Excerpt) | Rammer strukturen direkte (`.wp-block-post-template`), ingen ekstra CSS-klasse nødvendig |
| Sektion hvor kun baggrunden skal fylde bredden ud, indhold i grid | 3 lag: Group (align=full, `ddv-bleed-1440`) → Group (`ddv-section`, bg-farve) → Group (`ddv-section-inner`) | `ddv-bleed-1440` / `ddv-section-inner` — se kommentar i CSS-filen |

Alle farve-/afstands-værdier hentes fra `theme.json` via CSS custom
properties (`--wp--preset--color--ddv-*`), så hvis I justerer en farve i
Site Editor → Styles, opdaterer det automatisk alle kortene — undtagen
enkelte steder med bevidst afvigende hex-farve direkte i CSS'en (fx
Kursus-heroens `#3C5956`, som er anderledes end det almindelige
`ddv-dark-teal`-token).

### Hero-bredde/-højde (gælder alle 6 heroer)

DDV Analysen, Barometer (data-side), Barometer forside, Kursuskatalog,
Kursus-side og Indsigt deler samme hero-behandling: **1840px bred** (i
stedet for standardens 1440px) og **100px højere** end almindelige
sektioner. Det styres af CSS-selektorer der matcher heroens egen
baggrundsklasse (fx `.ddv-analysen-hero-bg`, `.ddv-kursus-hero-bg`) kombineret
med `.alignwide` / `.ddv-section` — ikke af en global regel. Skal en ny hero
have samme behandling, tilføj dens klasse til de to selektor-lister i
`ddv-landing.css` (søg efter "alle 6").

## 4. Trin-for-trin: byg siderne i editoren

### 4.1 DDV Analysen (landingsside for selve analysen)
1. Opret siden, indsæt pattern **"FULD SIDE – DDV Analysen"**.
2. Hero'en har intet billede (motivet ligger i baggrundsbilledet) — ret kun
   tekst/knap-links.
3. I 3-trins-sektionen: ret tal/tekst i hvert kort, og juster
   `--ddv-progress-value` direkte i HTML via kode-editor for blokken.
4. Testimonial-sektionen: udskift foto, og link "▶ Hør DDV Analysen
   forklaret" til jeres faktiske lydfil/side.
5. FAQ: dupliker en `Details`-blok pr. ekstra spørgsmål.
6. Kursusbånd: ret de 3 kort til jeres aktuelle anbefalede kurser (kan evt.
   linke direkte til de nye kursus-undersider, se 4.4), og opdatér
   "Se alle kurser"-linket til Kursuskatalog-siden.
7. CTA-bånd i bunden: samme delte pattern som de andre sider.

### 4.2 Vedligeholdsbarometer (data-/storytelling-side)
1. Opret siden, indsæt pattern **"FULD SIDE – Vedligeholdsbarometer"**.
2. Statistik-grid: de 5 kort ligger i to Columns-blokke (2 kort øverst, 3
   nederst). Ret tal, overskrift, brødtekst og "Læs historien"-linket.
3. Sammenlignings-sektionen: sørg for at "Tag DDV Analysen"-knappen linker
   til DDV Analysen-siden.
4. Datagrundlaget: ret de 4 punkter hvis jeres metode ændrer sig.

### 4.3 Barometer forside/hub
1. Opret siden, indsæt pattern **"FULD SIDE – Barometer forside"**.
2. Split-hero: stor overskrift + 2 knapper venstre, 2 stablede farvede kort
   højre. Ret tekst/links, udskift billedet.
3. Indsæt evt. flere patterns fra Barometer-siden nedenunder, hvis siden skal
   udbygges.

### 4.4 Kursuskatalog (oversigt over alle 11 kurser)
1. Opret siden, indsæt pattern **"FULD SIDE – Kursuskatalog"**.
2. Grid'et med de 11 kort cykler automatisk farve hvert 4. kort
   (gul→grøn→blå→cream). Ret titel/beskrivelse/link pr. kort — de linker
   naturligt til de tilsvarende kursus-undersider (4.5).

### 4.5 Kursus-undersider (11 stk., én pr. kursus)
1. `page-kursus-1.php` er allerede udfyldt med Kursus 1's rigtige indhold —
   brug den som reference for hvordan de andre 10 skal se ud.
2. For hvert af de øvrige kurser: opret en ny side, indsæt patterns
   **"Kursus-side – Hero"** og **"Kursus-side – Indhold"**, og erstat teksten:
   - Hero: "KURSUS N.", titel, kort beskrivelse, tjekliste (7 punkter i
     eksemplet, men kan være færre/flere), varighed.
   - Indhold: "Afklaring omkring næste skridt" og "Afklaringsmøde med
     instruktør" er **valgfrie** — slet dem hvis kurset ikke skal have dem
     (se Kursus 2-designet, som kun har "Forløbet"/"Vi vil arbejde med"/
     "Formål"). "Vi vil arbejde med"-afsnittet er en liste af
     underoverskrift+bullets — dupliker den gruppe (klassen
     `ddv-kursus-subsection`) for hvert emne.
   - Foto/lydklip: skift billede og lydklip-titel til den rigtige underviser,
     hvis det ikke er Jonas/Niels-Jacob.
3. CTA-båndet i bunden er det delte `cta-banner.php` — ingen ændring
   nødvendig.

### 4.6 Indsigt (nyheds-/artikeloversigt)
Indsigt bruger sin **egen post type** (`indsigt`), adskilt fra almindelige
Indlæg (Post) som allerede er i brug til andet indhold — se
`includes/cpt-indsigt.php`. Menupunktet **"Indsigt"** i wp-admin (lige under
"Indlæg") har sin egen artikelliste og sin egen kategoriliste.

1. **Kategorier:** Indsigt → Kategorier → opret dem I vil filtrere imellem
   senere.
2. **Artikler:** Indsigt → Tilføj ny — sæt fremhævet billede + kategori pr.
   artikel.
3. **Oversigtssiden:** opret siden "Indsigt", indsæt pattern
   **"Indsigt – Hero"**.
4. Under hero'en: indsæt en **Query Loop-blok** (+ → søg "Forespørgsel").
   I blokkens indstillinger: sæt **Posttype: Indsigt** (ikke Indlæg),
   **Kolonner: 3**. Sørg for at Indlægsskabelonen indeholder Fremhævet
   billede, Post-termer (kategori), Titel og Uddrag — CSS'en rammer
   Query Loop-strukturen direkte (`.wp-block-post-template`,
   `.wp-block-post-terms` osv.), ingen ekstra CSS-klasse nødvendig.
   Kategori-mærkatet lægger sig automatisk oven på billedet og er
   ikke-klikbart.
5. **Filtrering på kategori** (senere): Query Loop kan låses til én kategori
   ad gangen (nyttigt til fx `/indsigt/analyser/`-undersider). Et
   klik-og-filtrér-UI på samme side kræver mere (flere Query Loop-blokke bag
   et filter, eller en kategori-arkiv-skabelon) — tag fat når I når dertil.

## 5. Vedligehold og videre arbejde

- **Farver bor i WordPress, ikke i denne repo:** `theme-json-snippet.json` er
  kun en referencekopi fra dengang paletten første gang blev merget ind i
  temaets `theme.json`. Fra det øjeblik er farven en **levende WordPress-
  indstilling** (enten i temaets `theme.json`-fil, eller som en "Global
  Styles"-override i databasen hvis den er redigeret via Site Editor UI).
  At redigere `theme-json-snippet.json` her opdaterer intet live. Skift
  farver via **Site Editor → Styles → Farver**, eller ret temaets egen
  `theme.json` via FTP.
- **Bloksider er én-gangs-kopier, ikke levende skabeloner:** når et pattern
  indsættes på en side, kopieres blokkene ind i sidens eget indhold i
  databasen. Ændrer du en `.php`-patternfil her og uploader den, opdaterer
  det **kun** mønster-biblioteket for *fremtidige* indsættelser — allerede
  byggede sider skal enten redigeres manuelt, eller have den relevante
  sektion slettet og genindsat.
- **Nye korttyper:** kopiér en `.ddv-card--*`-regel i `ddv-landing.css` og
  giv den et nyt farve-slug fra paletten.
- **Nye heroer:** genbrug opskriften i afsnit 3 ("Hero-bredde/-højde") for at
  få samme 1840px/100px-højere behandling som de øvrige 6.
- **Tilføj flere FAQ/kort:** dupliker den relevante blok i editoren — al
  styling følger automatisk med klassenavnene.
- **Performance:** CSS-filen er ét lille stylesheet (ingen page builder-
  overhead), og alle billeder bør I selv optimere/uploade til
  Mediebiblioteket i stedet for at bruge `placehold.co`-pladsholderne fra
  patterns, hvor de stadig forekommer.
- **A11y:** `core/details` giver dig gratis tastatur- og skærmlæser-support
  til FAQ'en. Behold semantisk hierarki (H1 → H2 → H3) — ret ikke niveauer
  bare for at ramme en bestemt skriftstørrelse; brug i stedet blokkens
  `fontSize`-indstilling.
