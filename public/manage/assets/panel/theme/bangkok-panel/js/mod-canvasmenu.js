canvasmenu_init = function(){
	/* casvas menu control */
	var cvContent = $(".canvas-wrapper");
	var cvExit = $('#exit-canvas');
	var twCanvasMenu = new TimelineLite();
	twCanvasMenu.pause();
	twCanvasMenu.add("myLabel",0);
	twCanvasMenu.add(TweenLite.to(cvContent, 0.5, {transform:"translate3d(200px,0,0)"}), "myLabel");
	twCanvasMenu.add(TweenLite.to(cvExit, 0.5, {autoAlpha:0.3}), "myLabel");

	$('#menu-trigger').on('click',function(){
		twCanvasMenu.play();
		$(this).toggleClass('open');
		return false;
	});
	$('#exit-canvas').on('click',function(){
		twCanvasMenu.reverse();
		$('#menu-trigger').toggleClass('open');
		return false;
	});
}
canvasmenu = function(device){

	switch(device){

		case "mobile" :

			break;

		case "mobile-portrait" :

			break;

		case "mobile-landscape" :

			break;

		case "tablet" :

			break;

		case "tablet-portrait" :

			break;

		case "tablet-landscape" :

			if($('#main-menu').html() == ""){
				var menu = $('#canvas-menu-section').children('ul').clone();
				menu.appendTo($('#main-menu'));
			}

			break;

		case "desktop" :

			if($('#main-menu').html() == ""){
				var menu = $('#canvas-menu-section').children('ul').clone();
				menu.appendTo($('#main-menu'));
			}

			break;
	}

}