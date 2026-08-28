/**
 * Kategori-filter til Indsigt-oversigten. Virker sammen med patternet
 * "Indsigt – Filterknapper" (.ddv-filter-bar) og Query Loop-blokkens
 * kort (.wp-block-post-template li.wp-block-post). Ingen ekstra
 * data-attributter/klasser nødvendige på selve kortene - filteret læser
 * kategorien direkte fra kategori-mærkatets link (URL'en indeholder altid
 * kategoriens slug, uanset hvordan Query Loop'en er sat op i editoren).
 */
( function () {
	function ddvSlugFromHref( href ) {
		if ( ! href ) {
			return '';
		}
		var parts = href.split( '/' ).filter( Boolean );
		return parts.length ? parts[ parts.length - 1 ] : '';
	}

	document.addEventListener( 'DOMContentLoaded', function () {
		var bar = document.querySelector( '.ddv-filter-bar' );
		if ( ! bar ) {
			return;
		}

		var cards = document.querySelectorAll( '.wp-block-post-template li.wp-block-post' );
		var buttons = bar.querySelectorAll( '.ddv-filter-btn' );

		bar.addEventListener( 'click', function ( event ) {
			var btn = event.target.closest( '.ddv-filter-btn' );
			if ( ! btn ) {
				return;
			}

			buttons.forEach( function ( b ) {
				b.classList.remove( 'is-active' );
			} );
			btn.classList.add( 'is-active' );

			var filter = btn.getAttribute( 'data-ddv-filter' );

			cards.forEach( function ( card ) {
				if ( filter === 'all' ) {
					card.classList.remove( 'ddv-filtered-out' );
					return;
				}

				var termLinks = card.querySelectorAll( '.wp-block-post-terms a' );
				var slugs = Array.prototype.map.call( termLinks, function ( a ) {
					return ddvSlugFromHref( a.getAttribute( 'href' ) );
				} );

				if ( slugs.indexOf( filter ) !== -1 ) {
					card.classList.remove( 'ddv-filtered-out' );
				} else {
					card.classList.add( 'ddv-filtered-out' );
				}
			} );
		} );
	} );
} )();
