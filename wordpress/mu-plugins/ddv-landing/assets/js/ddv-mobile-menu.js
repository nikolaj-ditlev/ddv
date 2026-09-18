/**
 * Mobilmenu: sørger for at "Medlemskab"s undermenu altid starter
 * kollapset, når mobilmenuen åbnes. WordPress' navigations-blok (core
 * Interactivity API) starter selv en evt. undermenu som "åben"
 * (aria-expanded="true") første gang mobilmenuen slås til - CSS alene
 * kan ikke ændre den indledende tilstand, kun vise/skjule ud fra hvad
 * den er.
 *
 * Rører IKKE ved eksisterende funktionalitet: når mobilmenuen åbnes
 * (klassen "is-menu-open" tilføjes af WP selv på
 * ".wp-block-navigation__responsive-container"), finder scriptet enhver
 * undermenu-knap der allerede står som "åben", og klikker den - præcis
 * det samme klik en bruger selv ville lave for at lukke den. Ingen ny
 * tilstandshåndtering, ingen kamp mod WP's egen logik.
 */
( function () {
	function ddvCollapseOpenSubmenus( container ) {
		var openToggles = container.querySelectorAll(
			'.wp-block-navigation-submenu__toggle[aria-expanded="true"]'
		);
		openToggles.forEach( function ( toggle ) {
			toggle.click();
		} );
	}

	document.addEventListener( 'DOMContentLoaded', function () {
		var containers = document.querySelectorAll(
			'.wp-block-navigation__responsive-container'
		);

		containers.forEach( function ( container ) {
			var observer = new MutationObserver( function () {
				if ( container.classList.contains( 'is-menu-open' ) ) {
					ddvCollapseOpenSubmenus( container );
				}
			} );
			observer.observe( container, {
				attributes: true,
				attributeFilter: [ 'class' ],
			} );
		} );
	} );
} )();
