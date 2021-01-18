$(function() {

	if(Modernizr.mq('only all')){
	/* if media query is supported */

		/* window resize event with debounce (resize event with 200ms delay) */
		$(window).resize(
		$.debounce( 200, false, function(e){
		// #########################################


			if ( Modernizr.mq('only screen and (max-width: 40em)') ) {
				// for mobile

				/* canvas menu */
				canvasmenu('mobile');

				/* for specify portrait or landscape */
				if ( Modernizr.mq('(orientation: portrait)') ) {
					// for mobile portrait only
				}
				else if ( Modernizr.mq('(orientation: landscape)') ) {
					// for mobile landscape only
				}
			}
			else if ( Modernizr.mq('only screen and (min-width: 40.063em) and (max-width: 64em)') ) {
				// for tablet

				/* canvas menu */
				canvasmenu('tablet');

				/* for specify portrait or landscape */
				if ( Modernizr.mq('(orientation: portrait)') ) {
					// for tablet portrait only

				}
				else if ( Modernizr.mq('(orientation: landscape)') ) {
					// for tablet landscape only

					/* canvas menu */
					canvasmenu('tablet-landscape');

				}
			}
			else if ( Modernizr.mq('only screen and (min-width: 64.063em)') ) {
				// for pc (min-width : 1025px)

				/* canvas menu */
				canvasmenu('desktop');

			}




		// #########################################
		})//end debounce
		).trigger('resize');//end window resize

		/* canvasmenu ready */
		canvasmenu_init();



	}else{
	/* if media query is not supported (old browser) */

		/* canvas menu */
		canvasmenu('desktop');
	}

});