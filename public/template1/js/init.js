// Menu
$(function () {
    // const get_Height = $('.menu-main-wrapper').height();
    // console.log(get_Height);
    $(".sub-menu-main li.open").hover(function(){
        $(this).addClass('show');
        $(this).find('.sub-menu-lv2').show();
    }, function(){
        $(".sub-menu-main li.open").removeClass('show');
        $(this).find('.sub-menu-lv2').hide();
    });

    $(".list-menu-lv2.open").hover(function(){
        $(this).addClass('show');
        $(this).find('.sub-menu-lv3').show();
    }, function(){
        $(".list-menu-lv2.open").removeClass('show');
        $(this).find('.sub-menu-lv3').hide();
    });

    //menu mobile
    window.onscroll = function() {myFunction()};
    var header = document.getElementById("menu_sticky");
    var sticky = header.offsetTop;
    
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }


    // Navigation Menu Slider
	$('#nav-expander').on('click',function(e){
		e.preventDefault();
		$('body').toggleClass('nav-expanded');
	});
	$('#nav-close').on('click',function(e){
		e.preventDefault();
		$('body').removeClass('nav-expanded');
		//$('#out_canvas').removeClass('cl_out_canvas');
	});
	$('.nav-menu-MB').navgoco({
        caretHtml: '<i class="fas fa-angle-down"></i>',
	    accordion: true,
	    openClass: 'open',
	});


	$(".menu-wrapper ul li").hover(function () {
	    $(this).addClass('active');
        $(this).find('.sub-menu').stop().slideDown('fast');
	}, function () {
	    $(this).removeClass('active');
	    $(this).find('.sub-menu').stop().slideUp('fast');
	});
        
});


// Search
$(function () {
    $('.search-site').click(function(){
        $(this).toggleClass('active');
        $('.section-search-wrapper').slideToggle();
    });
    $('.close-search').click(function(){
        $(this).closest('.section-search-wrapper').slideUp();
        $('.search-site').removeClass('active');
    })
});
// lang
$(function () {
    $('.lang-site').click(function(){
        $(this).toggleClass('active');
        $('.multi-lang').slideToggle();
    });
});


//slide
$(function () {
    // banner
    $('.list-banner').slick({
        autoplay: false,
        autoplaySpeed: 6000,
        infinite: false,
        dots: true,
        arrows: true,
    });
    // คำนวณ dots banenr
    var slick_dots = $('.slick-dots li').size();
    var calculate_dots =  100 / slick_dots;
    $('.slick-dots li').css('width', calculate_dots + '%');


    // ปฏิทินกิจกรรม
    const check_list_1 = $('#slide_1').children('li').length;
    $('#slide_1').on('init', function (event, slick, direction) {
        if (check_list_1 < 3) {
            $('#action-slide_1').parents('.action-slide .slide-wrapper').css('display','none');
        }else{
            $('#action-slide_1').parents('.action-slide .slide-wrapper').show();
        }
    });
    $('#slide_1').slick({
        autoplay: false,
        autoplaySpeed: 6000,
        infinite: false,
        dots: false,
        arrows: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        prevArrow: $('#action-slide_1 .slide-prev'),
        nextArrow: $('#action-slide_1 .slide-next'),
        responsive: [
            {
              breakpoint: 481,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
    });


    // คำถามที่พบบ่อย
    const check_list_2 = $('#slide_2').children('li').length;
    $('#slide_2').on('init', function (event, slick, direction) {
        if (check_list_2 < 3) {
            $('#action-slide_2').parents('.action-slide').css('display','none');
        }else{
            $('#action-slide_2').parents('.action-slide').show();
        }
    });
    $('#slide_2').slick({
        autoplay: false,
        autoplaySpeed: 6000,
        infinite: false,
        dots: false,
        arrows: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        prevArrow: $('#action-slide_2 .slide-prev'),
        nextArrow: $('#action-slide_2 .slide-next'),
        responsive: [
            {
              breakpoint: 481,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
    });

    // อัลบั้มภาพ
    const check_list_3 = $('#slide_3').children('li').length;
    $('#slide_3').on('init', function (event, slick, direction) {
        if (check_list_3 < 5) {
            $('#action-slide_3').parents('.action-slide').css('display','none');
        }else{
            $('#action-slide_3').parents('.action-slide').show();
        }
    });
    $('#slide_3').slick({
        autoplay: false,
        autoplaySpeed: 6000,
        infinite: false,
        dots: false,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: $('#action-slide_3 .slide-prev'),
        nextArrow: $('#action-slide_3 .slide-next'),
        responsive: [
            {
              breakpoint: 1025,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
              }
            },
            {
              breakpoint: 993,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 481,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
    });

    // DOWNLOAD
    const check_list_4 = $('#slide_4').children('li').length;
    $('#slide_4').on('init', function (event, slick, direction) {
        if (check_list_4 < 5) {
            $('#action-slide_4').parents('.action-slide').css('display','none');
        }else{
            $('#action-slide_4').parents('.action-slide').show();
        }
    });
    $('#slide_4').slick({
        autoplay: false,
        autoplaySpeed: 6000,
        infinite: false,
        dots: false,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: $('#action-slide_4 .slide-prev'),
        nextArrow: $('#action-slide_4 .slide-next'),
        responsive: [
            {
              breakpoint: 1025,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
              }
            },
            {
              breakpoint: 993,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 481,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
    });

    // BANNER
    const check_list_5 = $('#slide_5').children('li').length;
    $('#slide_5').on('init', function (event, slick, direction) {
        if (check_list_4 < 5) {
            $('#action-slide_5').parents('.action-slide').css('display','none');
        }else{
            $('#action-slide_5').parents('.action-slide').show();
        }
    });
    $('#slide_5').slick({
        autoplay: false,
        autoplaySpeed: 6000,
        infinite: false,
        dots: false,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: $('#action-slide_5 .slide-prev'),
        nextArrow: $('#action-slide_5 .slide-next'),
        responsive: [
            {
              breakpoint: 1025,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
              }
            },
            {
              breakpoint: 993,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 481,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
    });

    // QUESTIONNAIRE
    const check_list_6 = $('#slide_6').children('li').length;
    $('#slide_6').on('init', function (event, slick, direction) {
        if (check_list_6 < 3) {
            $('#action-slide_6').parents('.action-slide').css('display','none');
        }else{
            $('#action-slide_6').parents('.action-slide').show();
        }
    });
    $('#slide_6').slick({
        autoplay: false,
        autoplaySpeed: 6000,
        infinite: false,
        dots: false,
        arrows: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        prevArrow: $('#action-slide_6 .slide-prev'),
        nextArrow: $('#action-slide_6 .slide-next'),
        responsive: [
            {
              breakpoint: 481,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
    });

    // สถานี VDO
    const check_list_7 = $('#slide_7').children('li').length;
    $('#slide_7').on('init', function (event, slick, direction) {
        if (check_list_6 < 3) {
            $('#action-slide_7').parents('.action-slide').css('display','none');
        }else{
            $('#action-slide_7').parents('.action-slide').show();
        }
    });
    $('#slide_7').slick({
        autoplay: false,
        autoplaySpeed: 6000,
        infinite: false,
        dots: false,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: $('#action-slide_7 .slide-prev'),
        nextArrow: $('#action-slide_7 .slide-next'),
        responsive: [
            {
              breakpoint: 1025,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
              }
            },
            {
              breakpoint: 993,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 481,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
    });
});

//Gototop
function scrollToTop() {
    verticalOffset = typeof (verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $('body');
    offset = element.offset();
    offsetTop = offset.top;
    $('html, body').animate({ scrollTop: offsetTop }, 500, 'linear');
}
$(function () {
    $(document).on('scroll', function () {
        if ($(window).scrollTop() > 50) {
            $('.gototop').addClass('show');
        } else {
            $('.gototop').removeClass('show');
        }
    });

    $('.gototop').on('click', scrollToTop);
});


//DragDrop
$(function () {
  
  var sortable = new Sortable(manage_dragdrop, {
    ghostClass: "sortable-ghost",
    chosenClass: "sortable-chosen",
    dragClass: "sortable-drag",
    swapThreshold: 1,
    animation: 150,
    dataIdAttr: "data-id",
    //handle: '.manage-dragdrop',
  });

  //var order = sortable.toArray();
  //console.log(order);


  $('.getOrder_ele').click(function() {
    //var itemOrder = $('#manage_dragdrop').sortable("toArray");
      var order = sortable.toArray();
      alert(order);
      // for (var i = 0; i < order.length; i++) {
      //     alert("Position: " + i + " ID: " + order[i]);
      // }
  });

});


//Manage 
$(function () {

  $('.manage-edit').click(function(){
    $('.manage-edit').closest('.group-mange-section').find('.manage-tools').removeClass('active')
    $(this).closest('.group-mange-section').find('.manage-tools').addClass('active')
  });
  $('.order-close').click(function(){
    $(this).closest('.manage-tools').removeClass('active');
  });
});

