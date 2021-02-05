canvasmenu_init = function(){
	/* casvas menu control */
	$('#mainlogo').on('click','#mobile-menu-trigger',function(){
		$('#page-container').toggleClass('expanded-right');
		$('#se-footer-wrapper').toggleClass('expanded-right');
	});
}