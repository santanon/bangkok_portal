slide_init = function(){

	if($('.foo5-banner-slider').length != 0 )
	{

		/* banner-slide */
		$('.slider-container').show();
		$('.foo5-banner-slider #foo5').carouFredSel({
			responsive: true,
			// auto: false,
			//width: '50%',
			swipe: {
				onTouch: true
			},
			scroll: {
				items		: 1,
				pauseOnHover: true
			},
			prev: '#foo5_prev',
			next: '#foo5_next',
			onCreate: function(){

				// if($('.mod-box-news').is('.news-type2')){
				// 	var imgWidth = $('.news-type2').children('.img-thumb').width();
				// 	var containerWidth = $('.mod-box-news').width();
				// 	var contentWidth = containerWidth - imgWidth;
				// 	$('.news-type2').children('.content').css('width',contentWidth-5);
				// }

			}
		});
		/* end banner-slide */

	}




	if($('.foo5-intab-slider').length != 0 )
	{

		/* banner-slide */
		$('.slider-container').show();
		$('.foo5-intab-slider #foo5').carouFredSel({
			// responsive: true,
			auto: false,
			width: '100%',
			// padding: 10,
			align: "left",
			swipe: {
				onTouch: true
			},
			scroll: {
				items		: 1,
				pauseOnHover: true
			},
			items: {
				// start       : "random",
				// width: 270,
				visible: {
					min:  1,
					max: 4
				}
			},
			prev: '#foo5_prev',
			next: '#foo5_next',
			onCreate: function(){

				// if($('.mod-box-news').is('.news-type2')){
				// 	var imgWidth = $('.news-type2').children('.img-thumb').width();
				// 	var containerWidth = $('.mod-box-news').width();
				// 	var contentWidth = containerWidth - imgWidth;
				// 	$('.news-type2').children('.content').css('width',contentWidth-5);
				// }

			}
		});
		/* end banner-slide */
	}

}


modbox_news_init = function(){

	if($('.mod-box-news').is('.news-type2')){

		var imgWidth = $('.news-type2').children('.img-thumb').width();
		var containerWidth = $('.mod-box-news').width();
		var contentWidth = containerWidth - imgWidth;
		$('.news-type2').children('.content').css('width',contentWidth-5);

	}

	slide_init();

}


$(function() {

	/* slide init */
	slide_init();

	if(Modernizr.mq('only all')){
	/* if media query is supported */

		/* window resize event with debounce (resize event with 200ms delay) */
		$(window).resize(
		$.debounce( 200, false, function(e){
		// #########################################
			//alert('resize');
			//$("#foo5").trigger("updateSizes");
			//alert('ok');



			/* mod-box-news responsive */
			modbox_news_init();


			if ( Modernizr.mq('only screen and (max-width: 40em)') ) {
				// for mobile


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


				/* for specify portrait or landscape */
				if ( Modernizr.mq('(orientation: portrait)') ) {
					// for tablet portrait only

				}
				else if ( Modernizr.mq('(orientation: landscape)') ) {
					// for tablet landscape only
				}
			}
			else if ( Modernizr.mq('only screen and (min-width: 64.063em)') ) {
				// for pc (min-width : 1025px)

			}

			//alert('resize');

		// #########################################
		})//end debounce
		).trigger('resize');//end window resize

		/* canvas menu init */
		// canvasmenu_swipe_init('init');
		//canvasmenu_button_init();

	}else{
	/* if media query is not supported (old browser) */

		/* canvas menu */
		//canvasmenu('desktop');

		/* mod-box-news responsive */
		modbox_news_init();
	}

	//$(window).trigger('resize');

});