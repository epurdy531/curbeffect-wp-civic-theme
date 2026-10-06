( function () {
	'use strict';

	function initSearchToggle() {
		document.querySelectorAll( 'header .wp-block-search__button-only' ).forEach( function ( form ) {
			var button = form.querySelector( '.wp-block-search__button' );
			var input  = form.querySelector( '.wp-block-search__input' );

			if ( ! button || ! input ) return;

			var isOpen = false;

			function openSearch() {
				isOpen = true;
				input.removeAttribute( 'hidden' );
				form.classList.remove( 'wp-block-search__searchfield-hidden' );
				button.setAttribute( 'aria-expanded', 'true' );
				input.focus();
			}

			function closeSearch() {
				isOpen = false;
				input.setAttribute( 'hidden', '' );
				form.classList.add( 'wp-block-search__searchfield-hidden' );
				button.setAttribute( 'aria-expanded', 'false' );
				button.focus();
			}

			// Intercept in capture phase so we run before WP's Interactivity API handler.
			button.addEventListener( 'click', function ( e ) {
				e.preventDefault();
				e.stopImmediatePropagation();
				if ( isOpen ) {
					input.value.trim() ? form.submit() : closeSearch();
				} else {
					openSearch();
				}
			}, true );

			// Escape closes the field.
			input.addEventListener( 'keydown', function ( e ) {
				if ( e.key === 'Escape' ) closeSearch();
			} );

			// Click outside closes the field.
			document.addEventListener( 'click', function ( e ) {
				if ( isOpen && ! form.contains( e.target ) ) closeSearch();
			} );
		} );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', initSearchToggle );
	} else {
		initSearchToggle();
	}
} )();
