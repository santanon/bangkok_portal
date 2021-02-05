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
				// canvasmenu_swipe_init('enable');

				/* turn off mainmenu pc event */
				mainmenu_pc_event('off');

				/* clone mainmenu to outcanvas */
				mainmenu_res_event();

				/* turn on outcanvas mainmenu */
				offcanvas_mainmenu_event('off');
				offcanvas_mainmenu_event('on');

				/* for specify portrait or landscape */
				if ( Modernizr.mq('(orientation: portrait)') ) {
					// for mobile portrait only
					modboxIframeAdjust();
				}
				else if ( Modernizr.mq('(orientation: landscape)') ) {
					// for mobile landscape only
					modboxIframeAdjust();
				}
			}
			else if ( Modernizr.mq('only screen and (min-width: 40.063em) and (max-width: 64em)') ) {
				// for tablet

				/* grid switch class */
				grid_responsive('tablet');

				/* canvas menu */
				// canvasmenu_swipe_init('enable');

				/* turn off mainmenu pc event */
				mainmenu_pc_event('off');

				/* clone mainmenu to outcanvas */
				mainmenu_res_event();

				/* turn on outcanvas mainmenu */
				offcanvas_mainmenu_event('off');
				offcanvas_mainmenu_event('on');

				/* for specify portrait or landscape */
				if ( Modernizr.mq('(orientation: portrait)') ) {
					// for tablet portrait only
					modboxIframeAdjust();
				}
				else if ( Modernizr.mq('(orientation: landscape)') ) {
					// for tablet landscape only
					modboxIframeAdjust();
				}
			}
			else if ( Modernizr.mq('only screen and (min-width: 64.063em)') ) {
				// for pc (min-width : 1025px)

				/* grid switch class */
				grid_responsive('desktop');

				/* canvas menu */
				// canvasmenu_swipe_init('disable');

				/* close outcanvas */
				canvasmenu_button_init('close');

				/* turn on mainmenu pc event */
				mainmenu_pc_event('on');

				/* turn off outcanvas mainmenu */
				offcanvas_mainmenu_event('off');

				/* index mod-box iframe adjust */
				modboxIframeAdjust();

			}

			/* adjust content footer padding */
 			adjustFooter();



		// #########################################
		})//end debounce
		).trigger('resize');//end window resize

		/* canvas menu init */
		// canvasmenu_swipe_init('init');
		canvasmenu_button_init();

	}else{
	/* if media query is not supported (old browser) */

		/* canvas menu */
		//canvasmenu('desktop');

		/* adjust content footer padding */
 		adjustFooter();
	}

});