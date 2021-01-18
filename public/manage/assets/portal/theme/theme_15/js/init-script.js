/* fastclick for touch screen, remove 300ms delay on click event  */
if (Modernizr.touch) {
	window.addEventListener('load', function() {
	    new FastClick(document.body);
	}, false);
}
/* grid responsive switch class */
grid_responsive = function(scrSize){

	var $row = $('.se-box');

	if(scrSize == 'tablet')
	{

		$row.each(function(){

			var $box3 = $(this).children('.se-box__item--span3');
			var $box4 = $(this).children('.se-box__item--span4');

			if($box3.length != 0){
				$box3.data('old-size','se-box__item--span3');
				$box3.removeClass('se-box__item--span3').addClass('se-box__item--span6');
			}

			if($box4.length != 0){
				$box4.data('old-size','se-box__item--span4');
				$box4.removeClass('se-box__item--span4');
				$box4.last().addClass('se-box__item--span12').siblings().addClass('se-box__item--span6');
				if($box4.length % 2 == 0 )
				{
					$box4.removeClass('se-box__item--span4').addClass('se-box__item--span6');
				}

			}


		});


	}
	else if(scrSize == 'desktop')
	{

		var $box = $row.children('.se-box__item');

		$box.each(function(){
			if($(this).data('old-size') != null )
			{
				var oldSize = $(this).data('oldSize');
				$(this).addClass(oldSize).removeClass('se-box__item--span6').removeClass('se-box__item--span12');
			}
		});

	}


}

/* canvas menu */
canvasmenu_button_init = function(status){
	/* casvas menu button control */

	if(status == 'close')
	{
		$('#exit-canvas').removeClass('expanded');
		$('#canvas-menu-section').removeClass('expanded-right');
		$('#page-container').removeClass('expanded-right');
		$('#se-footer-wrapper').removeClass('expanded-right');
		$('#canvas-menu-section').find('#mainmenu-list').find('li').removeClass('active');
	}
	else if(status == undefined)
	{


		$('#mainlogo').on('click','#mobile-menu-trigger',function(){
			$('#exit-canvas').toggleClass('expanded');
			$('#page-container').toggleClass('expanded-right');
			$('#se-footer-wrapper').toggleClass('expanded-right');
			$('#canvas-menu-section').toggleClass('expanded-right');
			return false;
		});

		$('#page-container').on('click','#exit-canvas',function(){
			$(this).toggleClass('expanded');
			$('#canvas-menu-section').toggleClass('expanded-right');
			$('#page-container').toggleClass('expanded-right');
			$('#se-footer-wrapper').toggleClass('expanded-right');

			$('#canvas-menu-section').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
				$(this).find('#mainmenu-list').find('li').removeClass('active');
			});
			return false;
		});




	}
}
canvasmenu_swipe_init = function(opt){
	/* casvas menu swipe control */
	if(!$('html').is('.no-touch')){
		//alert('touch');
		if(opt == 'enable'){
			alert(opt);
			$("#se-wrapper").swipe("enable");
		}
		else if(opt == 'disable')
		{
			alert(opt);
			$("#se-wrapper").swipe("disable");
		}
		else if(opt == 'init')
		{
			//alert(opt);
			//Init swiping...
			$("#se-wrapper").swipe( {
				//Generic swipe handler for all directions
				swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
					if(direction == "left"){
						if(!$('#page-container').is('.expanded-right'))
						{
							// $('#page-container').addClass('expanded-right');
							// $('#se-footer-wrapper').addClass('expanded-right');
							// $('#canvas-menu-section').addClass('expanded-right');
							// $('#exit-canvas').fadeIn().addClass('expanded');
						}

					}
					else if(direction == "right")
					{
						// $('#exit-canvas').fadeOut().removeClass('expanded');
						// $('#canvas-menu-section').removeClass('expanded-right');
						// $('#page-container').removeClass('expanded-right');
						// $('#se-footer-wrapper').removeClass('expanded-right');
					}
				},
				//Default is 75px, set to 0 for demo so any distance triggers swipe
				threshold:20
			});
		}//end if enable disable init

	}// end  if html is no-touch

}//end function

/*  main menu */
expandable_mainmenu_init = function(){

	$('#mainmenu-list').find('.main-submenu').parent().addClass('expandable');
}
mainmenu_pc_event = function(status){

	var mainmenu = $('#mainmenu-list');

	if(status == 'on')
	{

		$('#header-mainmenu-box').on('mouseover','#mainmenu-list > li',function(){
			$(this).addClass('active');
		}).on('mouseout','#mainmenu-list > li',function(){
			$(this).removeClass('active');
		});
		$('#header-mainmenu-box').on('mouseover','.mainmenu-lv2-list > li',function(){
			$(this).addClass('active');
		}).on('mouseout','.mainmenu-lv2-list > li',function(){
			$(this).removeClass('active');
		});

	}
	else if(status == 'off')
	{
		$('#header-mainmenu-box').off('mouseover','#mainmenu-list > li').off('mouseout','#mainmenu-list > li');
		$('#header-mainmenu-box').off('mouseover','.mainmenu-lv2-list > li').off('mouseout','.mainmenu-lv2-list > li');
	}

}//end function
mainmenu_res_event = function(){
	var outcanvas = $('#canvas-menu-section');
	var mainmenu = $('#mainmenu-list').clone();
	var topmenu = $('#top-menu').clone();
	var afterlogin = $('#after-login').clone();
	var switchlang = $('#switch-language').clone();
	var searchbox = $('#search-site').clone();
	var social = $('#top-social').clone();
	var enewsletter = $('#enewsletter').clone();
	var callcenter = $('#callcenter').clone();
	var sitestat = $('#site-stat').clone();

	if(outcanvas.find('#after-login').length == 0 )
	{
		if(afterlogin.length > 0)
		{
			afterlogin.appendTo(outcanvas.find('#canvas-afterlogin-box').show());
		}
	}
	if(outcanvas.find('#switch-language').length == 0 )
	{
		if(switchlang.length > 0)
		{
			switchlang.appendTo(outcanvas.find('#canvas-language-box').show());
		}
	}

	if(outcanvas.find('#search-site').length == 0 )
	{
		if(searchbox.length > 0)
		{
			searchbox.appendTo(outcanvas.find('#canvas-search-box').show());
		}
	}

	if(outcanvas.find('#top-menu').length == 0 )
	{
		if(topmenu.length > 0)
		{
			topmenu.appendTo(outcanvas.find('#canvas-topmenu-box').show());
		}
	}

	if(outcanvas.find('#mainmenu-list').length == 0 )
	{
		if(mainmenu.length > 0)
		{
			mainmenu.appendTo(outcanvas.find('#canvas-mainmenu-box').show());
		}
	}

	if(outcanvas.find('#top-social').length == 0 )
	{
		if(social.length > 0)
		{
			social.appendTo(outcanvas.find('#canvas-socialmedia-box').show());
		}
	}

	if(outcanvas.find('#enewsletter').length == 0 )
	{
		if(enewsletter.length > 0)
		{
			enewsletter.appendTo(outcanvas.find('#canvas-enewsletter-box').show());
		}
	}

	if(outcanvas.find('#callcenter').length == 0 )
	{
		if(callcenter.length > 0)
		{
			callcenter.appendTo(outcanvas.find('#canvas-callcenter-box').show());
		}
	}

	if(outcanvas.find('#site-stat').length == 0 )
	{
		if(sitestat.length > 0)
		{
			sitestat.appendTo(outcanvas.find('#canvas-sitestat-box').show());
		}
	}

}//end function
offcanvas_mainmenu_event = function(status){


	if(status == 'on')
	{

		$('#canvas-menu-section').on('click','#mainmenu-list > li > span > a',function(){
			if($(this).closest('li').find('.mainmenu-lv2').length > 0)
			{
				// $(this).closest('ul').find('li').removeClass('active');
				if($(this).closest('li').is('.active'))
				{
					$(this).closest('li').find('li').removeClass('active');
				}
				$(this).closest('li').toggleClass('active');

				return false;
			}
		});
		$('#canvas-menu-section').on('click','.mainmenu-lv2-list > li > span > a',function(){

			if($(this).closest('li').find('.mainmenu-lv3').length > 0)
			{
				$(this).closest('li').toggleClass('active');

				return false;
			}
		});

	}
	else if(status == 'off')
	{
		$('#canvas-menu-section').off('click','#mainmenu-list > li > span > a');
		$('#canvas-menu-section').off('click','.mainmenu-lv2-list > li > span > a');
	}



}//end function

//adjust footer
adjustFooter = function(){
	var fHeight = $('#se-footer-wrapper').outerHeight(true);
	$('#se-maincontainer-wrapper').css('paddingBottom',fHeight);
}

init_mediaelement = function(){

	$('video').mediaelementplayer({
		success: function(player, node) {
			$('#' + node.id + '-mode').html('mode: ' + player.pluginType);
		}
	});
	$('#stopall').click(function() {
	$('video').each(function() {
			  $(this)[0].player.pause();
		});
	});

}

callLightbox = function(boxLink,boxWidth,boxHeight){

	if(!boxWidth){
		var boxWidth = 800;
	}
	if(!boxHeight){
		var boxWidth = 600;
	}

	$.fancybox({
		maxWidth	: boxWidth,
		maxHeight	: boxHeight,
		fitToView	: false,
		width		: '94%',
		height		: '94%',
		autoSize	: false,
		closeClick	: false,
		helpers: {
			overlay: {
				locked: false
			}
		},
		type : 'iframe',
		href : boxLink
	});

	return false;
}//end function



//adjust modbox iframe
modboxIframeAdjust = function(){
	var $seBox = $('.se-box');
	if($seBox.length > 0){
		var $boxIframe = $seBox.find('iframe');
		var boxWidth;
		$boxIframe.each(function(){
			boxWidth = $(this).parent().width();
			$(this).css('width',boxWidth);
		});
		//alert(boxWidth);
		//alert('Iframe='+boxIframe.width()+' box='+boxWidth  );
	}
}

//tab-content focus function
tabFocus = function(groupId,tabId){
	var $targetTabGroup = $('.mod_tab-content[data-tab-group='+ groupId +']');
	var $targetTabBtn = $targetTabGroup.children('.header').find('.tab-btn[data-tab-id='+tabId+']');
	var $targetTabContent = $targetTabGroup.children('.content').find('.tab-content[data-tab-id='+ tabId +']');
	//console.log($targetTabBtn);
	if($targetTabContent.length > 0)
	{
		$targetTabContent.addClass('show');
		$targetTabBtn.addClass('active');
		//btn2stageFocus($targetTabBtn);

		if($targetTabContent.find('iframe').length > 0){
			var dataLink = $targetTabContent.find('iframe').data('src');
			$targetTabContent.find('iframe').attr('src',dataLink);
		}
	}
	else
	{
		window.console && console.log('tabFocus: Can not find groupId='+ groupId +' or tabId='+tabId+'.');
	}
}

tab_init = function(){

	/* tab content click */
	$('.mod_tab-content').children('.header').find('.tab-btn a').on('click',function(){
		var $tab = $(this).closest('.tab-btn');
		var tabId = $tab.data('tab-id');
		var $tabContent = $(this).closest('.header').siblings('.content').children();
		var $tabContentThis = $(this).closest('.header').siblings('.content').children('.tab-content[data-tab-id='+tabId+']');

		//alert(tabId);
		$tab.addClass('active').siblings('.tab-btn').removeClass('active');

		$tabContent.removeClass('show');
		$tabContentThis.addClass('show');

		if($tabContentThis.find('iframe').length > 0 && $tabContentThis.find('iframe').attr('src') == "" ){
			var dataLink = $tabContentThis.find('iframe').data('src');
			$tabContentThis.find('iframe').attr('src',dataLink);
		}
		boxWidth = $tabContentThis.width();
		$tabContentThis.find('iframe').css('width',boxWidth);

		return false;
	});

}
listgroup_init = function(){
    $('.list-group').find('.list-group-content').each(function () {
        if ($(this).is('.opened')) {
            if ($(this).find('iframe').attr('data-iframe') != undefined) {
                var datafile = $(this).find('iframe').attr('data-iframe');
                $(this).find('iframe').attr('src', datafile);
            }
        }
    });

    $('.list-group').find('.list-group-head')
    .click(function () {

        if ($(this).is('.active')) {
            $(this).removeClass('active').next().slideUp();
        } else {
            $(this).parent().siblings().children('.active').removeClass('active').next().slideUp();
            $(this).addClass('active').next().slideDown();

            if ($(this).next().find('iframe').attr('src') == undefined) {
                var datafile = $(this).next().find('iframe').attr('data-iframe');
                $(this).next().find('iframe').attr('src', datafile);
            }
        }
        return false;
    });
}
//resize dynamic content iframe /w specify id
resizeIframeHeight = function(ele,id) {

	if(jQuery.type(ele) == 'string'){
		$(id).css('height',ele);
		// repositionFooter();
		//alert(id + ' ' + ele);
	}else{
		var iFrames = ele;
		iFrames.load(function()
			{
				var getHeight = this.contentWindow.document.body.offsetHeight + 'px';
				iFrames.css('height',getHeight);
				// repositionFooter();
			}
		);
	}//end if
	// Check if browser is Safari or Opera.
	if ($.browser.safari || $.browser.opera)
	{
		// Safari and Opera need a kick-start.
		var iSource = iFrames.src;
		iFrames.src = '';
		iFrames.src = iSource;
	}
	//repositionFooter();
}

$('#header-mainmenu-box').prependTo('#se-header');

/* bg-slider */
$('.slider-container').show();
$('#foo').carouFredSel({
	responsive: true,
	width: '100%',
	//height: 'auto',
	auto: true,
	// prev: '#foo_prev',
	// next: '#foo_next',
	// pagination: "#foo_pager",
	pagination: {
		container : "#foo_pager",
		anchorBuilder : function(item){
			// var word = [ 'test1','test2','test3','test4' ]
			return '<span class="pager_list"><a href="#"></a></span>';
		}
	},
	swipe: {
		onTouch: true
	},
	scroll: {
		fx          : "crossfade",
		easing      : "linear",
		duration    : 1000
	},
	items: {
		// start       : "random",
		height: '58%',		//optionally resize item-height
		visible: {
			min:  1,
			max: 1
		}
	}
});
/* end bg-slider */

/* banner-slide */
$('.banner-slider-container').show();
$('#foo5').carouFredSel({
	//responsive: true,
	width: '100%',
	swipe: {
		//onTouch: true
	},
	scroll: {
		items		: 1,
		pauseOnHover: true
	},
	prev: '#foo5_prev',
	next: '#foo5_next'
});
/* end banner-slide */

/* homepage content slide */
$('.trigger-text').on('click',function(){
	var $slideBox = $(this).closest('.content-slide-box');
	$slideBox.addClass('expanded').siblings().removeClass('expanded');
	$slideBox.appendTo($slideBox.parent());

	return false;
});

/* call lightbox */
$('.clightbox').on('click',function(){
	var dataLink = $(this).attr('href');
	var dataWidth = $(this).attr('data-width');
	var dataHeight = $(this).attr('data-height');

	callLightbox(dataLink,dataWidth,dataHeight);

	return false;
});

 /* mainmenu */
 expandable_mainmenu_init();
 mainmenu_pc_event('on');


 /* adjust content footer padding */
 // adjustFooter();

/* init tab content */
 tab_init();

 /* listgroup content*/
 listgroup_init();

/* video element render */
 // init_mediaelement();










