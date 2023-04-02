( function( $ ) {

	wp.customize( 'gb_offnungszeiten', function( value ) {
		value.bind( function( newval ) {
			$( '#gb_offnungszeiten' ).html( newval );
		} );
    } );
    wp.customize( 'footer_address', function( value ) {
		value.bind( function( newval ) {
			$( '#footer_address' ).html( newval );
		} );
    } );
    wp.customize( 'footer_phone', function( value ) {
		value.bind( function( newval ) {
			$( '#footer_phone' ).html( newval );
		} );
		} );
		wp.customize( 'gb_textsimple', function( value ) {
			value.bind( function( newval ) {
				$( '#gb_text' ).html( newval );
			} );
			} );
//test
			wp.customize( 'gb_name1', function( value ) {
				value.bind( function( newval ) {
					$( '#gb_name1' ).html( newval );
				} );
				} );

				wp.customize( 'gb_name2', function( value ) {
					value.bind( function( newval ) {
						$( '#gb_name2' ).html( newval );
					} );
					} );

					wp.customize( 'gb_fax', function( value ) {
						value.bind( function( newval ) {
							$( '#gb_fax' ).html( newval );
						} );
						} );

						wp.customize( 'footer_phone2', function( value ) {
							value.bind( function( newval ) {
								$( '#footer_phone2' ).html( newval );
							} );
							} );
			
							wp.customize( 'footer_fax', function( value ) {
								value.bind( function( newval ) {
									$( '#footer_fax' ).html( newval );
								} );
								} );
		
//test
    wp.customize( 'footer_email', function( value ) {
		value.bind( function( newval ) {
			$( '#footer_email' ).html( newval );
		} );
    } );
    wp.customize( 'footer_copyrights', function( value ) {
		value.bind( function( newval ) {
			$( '#footer_copyrights' ).html( newval );
		} );
	} ); 
		
} )( jQuery );

$('.count').each(function () {
	$(this).prop('Counter',0).animate({
			Counter: $(this).text()
	}, {
			duration: 4000,
			easing: 'swing',
			step: function (now) {
					$(this).text(Math.ceil(now));
			}
	});
});