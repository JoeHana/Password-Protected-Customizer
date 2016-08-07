(function( $ ) {
	'use strict';
	 
	/**
	 * ##################################################
	 * INIT FUNCTIONS ###################################
	 * ##################################################
	 */
	
	$( 'html' ).addClass( 'js' );
	
	$(window).load(function() {
		
		var $overlay 	= $('#intro');
		var $loader 	= $('#intro .intro-loader');
		
		// loading animation
		$loader.css({'width': '0'});				
		$loader.animate({'width': '100%'}, 2000);
		
		// intro fade effect
		$overlay.delay(2000).fadeOut(1000);
			
	});

    $(document).ready(function() {
		
		$( 'a[href="#more"]' ).click(function(e) {
			
			e.preventDefault();
			
			if( $( '.form' ).hasClass( 'visible' ) ) {
				
				$( '.form' ).addClass( 'invisible' );
				$( '.form' ).removeClass( 'visible' );
				
				$( '.info' ).addClass( 'visible' );
				$( '.info' ).removeClass( 'invisible' );
				
				$( this ).text( 'Already have a code?' );
	
			} else {
				
				$( '.form' ).addClass( 'visible' );
				$( '.form' ).removeClass( 'invisible' );
				
				$( '.info' ).addClass( 'invisible' );
				$( '.info' ).removeClass( 'visible' );
				
				$( this ).text( 'No Code?' );
	
			}
			
		});
		
	});
	
})( jQuery );
