/* fastclick for touch screen, remove 300ms delay on click event  */
if (Modernizr.touch) {
	window.addEventListener('load', function() {
	    new FastClick(document.body);
	}, false);
}


function mainmenuFocus(rowId,mainId,subId){
	var $mainmenu = $('#se-header__mainmenu');
	var $focusRow = $mainmenu.children('.mainmenu-row[data-m-row='+ rowId +']');
	var $focusMain = $focusRow.children('.mainmenu-list').children('li[data-m-btn='+ mainId +']').addClass('active');
	var $focusSubRow = $focusRow.children('.submenu-row');
	var $focusSub = $focusSubRow.children('ul[data-s-list='+ mainId +']');

	if($focusSub.length > 0){
		$focusSubRow.addClass('open');
		$focusSub.addClass('active').children('li').eq(subId-1).addClass('active');
		$focusSubRow.children($('.submenu-row__close')).data('atMenu',mainId);
	}
}



function btn2stageFocus(grpId,btnId){
	var $grp = $('.btn-2stage[data-btn-group-id='+ grpId +']');
	var $btn = $('.btn-2stage[data-btn-group-id='+ grpId +'][data-btn-id='+ btnId +']');

	if( ($grp.length > 0) && ( $btn.length > 0 ) )
	{
		$grp.removeClass('active');
		$btn.addClass('active');
	}
	else
	{
		window.console && console.log('btn2stageFocus: Can not find group or button id');
	}
}

function tabFocus(groupId,tabId){
	var $targetTabGroup = $('.mod_tab-content[data-tab-group='+ groupId +']');
	var $targetTabBtn = $targetTabGroup.children('.header').find('.tab-btn[data-tab-id='+tabId+']');
	var $targetTabContent = $targetTabGroup.children('.content').find('.tab-content[data-tab-id='+ tabId +']');
	//console.log($targetTabBtn);
	if($targetTabContent.length > 0)
	{
		$targetTabContent.addClass('show');
		$targetTabBtn.addClass('active');
		//btn2stageFocus($targetTabBtn);
	}
	else
	{
		window.console && console.log('tabFocus: Can not find groupId='+ groupId +' or tabId='+tabId+'.');
	}
}

function selectFocus(selectId,optVal){
	var $select = $('#'+selectId);

	$select.children('option').each(function() {
		if($(this).val() == optVal){
			//console.log($(this));
			$(this).prop('selected',true);
			$select.selectric('refresh');
		}
	});
}

function switchRender(){

	$('.switch-onoff').each(function(){
		var checkboxVal = $(this).children('.hidden-checkbox').prop('checked');
		if(checkboxVal)
		{
			$(this).children('label').addClass('switch-on');
		}
		else
		{
			$(this).children('label').addClass('switch-off');
		}
	});//end each
}

function callLightbox(boxLink,boxWidth,boxHeight){

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
}

function callLightbox_fm(boxLink,boxWidth,boxHeight){

	if(!boxWidth){
		var boxWidth = 800;
	}
	if(!boxHeight){
		var boxWidth = 600;
	}

	$.fancybox({
		maxWidth	: boxWidth,
		maxHeight	: boxHeight, 
		closeBtn	: false,
		fitToView	: false,
		width		: '94%',
		height		: '94%',
		autoSize	: false, 
		type : 'iframe',
		href : boxLink
	});

	return false;
}

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
		//container : "#foo_pager",
		// anchorBuilder : function(item){
		// 	// var word = [ 'test1','test2','test3','test4' ]
		// 	return '<span class="pager_list"><a href="#"></a></span>';
		// }
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
		height: 620,		//optionally resize item-height
		visible: {
			min:  1,
			max: 1
		}
	}
});
/* end bg-slider */

/* main menu script */
var $ob_mainmenu = $('#se-header__mainmenu').children('.mainmenu-row');
var $ob_mainmenu_list = $ob_mainmenu.children('.mainmenu-list');
var $ob_mainmenu_btn = $ob_mainmenu_list.find('li');

$ob_mainmenu_btn.on('click',function(){

	if($(this).children('a').attr('href') == "#"){

		var mBtn = $(this).data('m-btn');
		var mRow = $(this).closest('.mainmenu-row').data('m-row');
		var $mRow = $('.mainmenu-row[data-m-row="'+ mRow + '"]');
		var $mRowSub = $mRow.find('.submenu-row');

		if($(this).is('.active'))
		{
			$(this).removeClass('active');
			$mRowSub.stop(true).slideUp('200').find('ul').hide();
		}
		else
		{
			$ob_mainmenu_btn.removeClass('active');
			$(this).addClass('active');

			$ob_mainmenu.find('.submenu-row').slideUp('200').find('ul').hide();
			$mRowSub.stop(true).slideDown('200',function(){
				$(this).find('ul[data-s-list="'+ mBtn +'"]').fadeIn('200');
			});
		}

		$('.submenu-row__close').data('atMenu',mBtn);

		return false;
	}
});
$('.submenu-row__close').on('click',function(){
	var atMenu = $(this).data('at-menu');
	var $mRow = $(this).closest('.mainmenu-row');
	$mRow.find('li[data-m-btn="'+ atMenu +'"]').trigger('click');

	return false;
});
/* end menu script */

/* homepage content slide */
$('.trigger-text').on('click',function(){
	var $slideBox = $(this).closest('.content-slide-box');
	$slideBox.addClass('expanded').siblings().removeClass('expanded');
	$slideBox.appendTo($slideBox.parent());

	return false;
});
/* selectric dropdown select render */
$('.selectric').selectric({responsive:true,inheritOriginalWidth:true});

/* btn disable prevent click */
$('.btn > a,.btn > input[type=button],.btn > input[type=submit],.btn > input[type=reset]').on('click',function(){
	if($(this).parent().is('.disabled')){
		return false;
	}
});

/* select all in input text or password  */
$('.selectonclick').on({ 'mouseup' : function(){
		$(this).select();
	    return false;
	}
});

/* on-off switch checkbox init */
switchRender();

/* btn 2stage click */
$('.btn-2stage > a').on('click',function(){

	if($(this).attr('href') == "#" ){

		var btnGroupId = $(this).parent().data('btn-group-id');

		if(btnGroupId != undefined)
		{
			$('.btn-2stage[data-btn-group-id='+ btnGroupId +']').removeClass('active');
			$(this).parent().addClass('active');
		}

		return false;

	}
	else if($(this).parent().is('.active'))
	{
		return false;
	}
});

/* tab content click */
$('.mod_tab-content').children('.header').find('.tab-btn a').on('click',function(){
	var $tab = $(this).closest('.tab-btn');
	var tabId = $tab.data('tab-id');

	//alert(tabId);
	$tab.addClass('active').siblings('.tab-btn').removeClass('active');

	$(this).closest('.header').siblings('.content').children().removeClass('show');
	$(this).closest('.header').siblings('.content').children('.tab-content[data-tab-id='+tabId+']').addClass('show');
});

/* on-off switch checkbox */
$('.switch-onoff label').on('click',function(){
	$(this).toggleClass('switch-on').toggleClass('switch-off');
});

/* call lightbox */
$('.clightbox').on('click',function(){
	var dataLink = $(this).attr('href');
	var dataWidth = $(this).attr('data-width');
	var dataHeight = $(this).attr('data-height');

	callLightbox(dataLink,dataWidth,dataHeight);

	return false;
});



