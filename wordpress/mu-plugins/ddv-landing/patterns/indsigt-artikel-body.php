<?php
/**
 * Indsigt-artikel – Brødtekst (skabelon).
 * To-spalte layout: selve artikelteksten i venstre (bredeste) spalte, og et
 * fremhævet citat i højre spalte der "flyder" ud for midten af teksten.
 * Derunder en fuldbredde opsummerings-sektion (overskrift + 2 afsnit).
 * Udskift alle tekster pr. artikel - strukturen/klasserne kan genbruges 1:1.
 */
return array(
	'slug'       => 'indsigt-artikel-body',
	'title'      => __( 'Indsigt-artikel – Brødtekst (tekst, citat, opsummering)', 'ddv-landing' ),
	'categories' => array( 'ddv-landing' ),
	'content'    => <<<'HTML'
<!-- wp:group {"align":"wide","className":"ddv-section ddv-indsigt-artikel-body"} -->
<div class="wp-block-group alignwide ddv-section ddv-indsigt-artikel-body">

<!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top">

<!-- wp:column {"verticalAlignment":"top","width":"66%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:66%">

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet consectetur. Et ipsum faucibus at placerat. Posuere leo ornare vulputate eget erat adipiscing. Tellus magna nulla vitae diam id aliquet condimentum at. Dolor odio morbi ut nec nulla in egestas hac.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Lectus sapien diam vulputate ultrices lectus enim at. Ac dolor interdum dui dignissim. Cras ultrices velit posuere in tellus sem pellentesque. Aliquam quis sed elit lectus in tortor vel vitae imperdiet. Tortor interdum vitae tellus faucibus pharetra quis sed laoreet. Purus posuere sed ut massa ac. Ac urna volutpat sed elementum aenean. In morbi donec tristique amet sagittis quisque vivamus. Dui eget sit ante eros. Penatibus sit purus ullamcorper senectus.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Commodo sed tellus velit integer interdum. Est pharetra eu in euismod. Nisl faucibus fusce donec varius nec tempus. Feugiat arcu consequat in ut turpis adipiscing facilisis diam elementum. Hac sit aliquam lacus velit malesuada quis.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Purus netus faucibus blandit velit nulla mattis tincidunt. Nulla ac nascetur odio fusce phasellus. Tortor pulvinar purus cursus amet. Aliquam enim netus pulvinar enim imperdiet. Sem in dictumst pulvinar sit lacus consectetur ornare neque accumsan. Pretium donec gravida pulvinar metus pretium in fringilla. Sed sed suspendisse est ullamcorper. Accumsan egestas justo mi ultrices gravida. Aliquam magna gravida amet dictum urna quis id. Ut adipiscing velit porta amet sit arcu leo posuere. A congue ultrices arcu nulla orci nibh tempor.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Pulvinar a quis arcu malesuada tristique convallis semper eget. Libero id varius nisi in quam in sed dictum pellentesque. Amet nam pharetra fusce ut quam. Dignissim ac cursus vitae varius. Arcu quis vestibulum amet eu porta massa felis sit. Augue faucibus etiam fringilla erat. Nibh nec turpis nulla rutrum netus non sed proin tristique. Ut in neque urna lobortis penatibus a dictumst. Non proin mattis tortor eget aliquam eu sodales. Lacus volutpat feugiat mauris consequat dui sit ut fermentum tristique. Amet ut scelerisque porttitor sed.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"34%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:34%">

<!-- wp:paragraph {"className":"ddv-indsigt-quote"} -->
<p class="ddv-indsigt-quote">»Eksperter frygter, at det kan koste danske virksomheder milliarder af kroner i løbet af de næste fem år, hvis ikke de får styr på planlægningen.«</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Elementum proin et amet id proin nisl mattis vitae.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Purus adipiscing id quam molestie elit porttitor. Volutpat malesuada auctor condimentum nunc ac enim nisl est. Integer magna sagittis tristique viverra vitae. Integer euismod felis fermentum sed quis mauris cursus. Massa netus in id nunc. Sed facilisi elementum est sit sed etiam lectus eleifend. Consequat phasellus netus quisque pellentesque. Arcu euismod et cursus scelerisque. Commodo libero fermentum ac elementum id ullamcorper nibh duis ultrices. In ut ultricies quis tempus ante risus leo tristique est. Est magna quis pulvinar donec eu nisl leo. Cursus mauris tempor diam at volutpat. In etiam facilisi morbi pulvinar massa vel non. Quis turpis ut viverra semper aliquam id enim. Arcu justo semper in tellus nibh nullam quis.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Faucibus suspendisse egestas dictum ac nam convallis. Maecenas viverra quis amet dolor curabitur magna. Urna scelerisque maecenas viverra feugiat tellus. Consectetur nec maecenas orci in. Pharetra lorem adipiscing sit proin amet. Nisi amet eu elementum tincidunt adipiscing tristique netus enim. Ac ante semper feugiat ut ut tortor pulvinar pellentesque. At sit tempor diam fames. Morbi facilisi senectus pharetra sed ullamcorper ut consequat volutpat malesuada. Enim ultrices posuere velit morbi venenatis parturient. Sed nec quis eget curabitur. Blandit ac venenatis sit suspendisse amet laoreet. Condimentum adipiscing et pretium netus vulputate elit mauris.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
HTML
	,
);
