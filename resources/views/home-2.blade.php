<?php
$CustomHelper = new \App\CustomHelper;
$TextLanguage = new \App\TextLanguage;
if(!function_exists('base_url')) 
{
    function base_url()
    {
        return 'http://127.0.0.1:8000/';
    }
} 
?> 
@section('title', $CustomHelper->L($_SESSION['portal_website_'.$mod.'_web_name_th'],$_SESSION['portal_website_'.$mod.'_web_name_en']))
@section('tagkeyword', $CustomHelper->L($_SESSION['portal_website_style_'.$mod.'_info_keyword'],$_SESSION['portal_website_style_'.$mod.'_info_keyword']))
@section('tagdescription', $CustomHelper->L($_SESSION['portal_website_style_'.$mod.'_info_description'],$_SESSION['portal_website_style_'.$mod.'_info_description']))

@extends('template2/include/start')
@section('contentpage')
 
<div class="main-wrapper">
    <div class="panel-header">
        <div class="header-top">
            @include('panel/include.head-top')
        </div>
    </div>

    <header id="header-wrapper">
        @include('template2/include.header')
    </header>
    
    <div id="site-content">
        
        <div class="banner-wrapper">
            @include('template2/main-slide')
        </div>

        <div class="group-section-content" id="manage_dragdrop">
            @include('template2/news')

            @include('template2/calendar')

            @include('template2/faq')

            @include('template2/album')

            @include('template2/vdo')

            @include('template2/download')

            @include('template2/bannerlink')

            @include('template2/questionnaire')

            @include('template2/vote')
        </div>
        
        <!--
        <button type="button" class="getOrder_ele">Get Order of Elements</button> 
        <button type="button" data-toggle="modal" data-target="#modal_Alert">Modal Alert System</button> 
        <button class="" data-toggle="modal" data-target="#modalpanel">Modal Full Screen</button>
        -->

    </div>

    <footer id="footer-wrapper">
        @include('template2/include.footer')
    </footer>


    <!-- Manage Save -->
    <!-- <div class="manage-save">
        <em class="fas fa-save"></em> SAVED
    </div> -->

</div>


<!-- Modal -->
<div class="modal fade" id="Modal_" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content no-border bg-color-inherit">
            <div class="modal-close" data-dismiss="modal" aria-label="Close">
                <div class="icon-close"></div>
            </div>
            <div class="modal-body p-0">
                <div class="row no-gutters">
                    <!-- กรณีไม่มีข้อความ -->
                    <!-- <div class="col-md-12">
                        <div class="group-modal">
                            <div class="img-modal">
                                <img src="{{ asset('template2/assets/images/img-modal-demo.png')}}" alt="icon">
                            </div>
                            <div class="section-btn">
                                <ul>
                                    <li class="bg-color-gray">
                                        <a href="/">อ่านข่าวสาร</a>
                                    </li>
                                    <li class="bg-color-primary">
                                        <a href="/">เข้าสู่เว็บไซต์</a>
                                    </li>
                                    <li class="bg-color-secondary">
                                        <a href="/">Enter Site</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <!-- กรณีมีข้อความ -->
                    <div class="col-md-12">
                        <div class="group-modal">
                            <div class="img-modal">
                                <img src="{{ asset('template2/assets/images/img-modal-demo.png')}}" alt="icon">
                            </div>
                            <div class="section-btn">
                                <ul>
                                    <li class="bg-color-gray">
                                        <a href="/">อ่านข่าวสาร</a>
                                    </li>
                                    <li class="bg-color-primary">
                                        <a href="/">เข้าสู่เว็บไซต์</a>
                                    </li>
                                    <li class="bg-color-secondary">
                                        <a href="/">Enter Site</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="group-modal">
                            <div class="text-modal">
                                Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ 
                                มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal alert -->
<div class="modal fade" id="modal_Alert" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content no-border">
      <div class="modal-header">
        <h5 class="modal-title" id="alertModalLabel">แจ้งเตือน</h5>
      </div>
      <div class="modal-body">
        <div class="group-modal">
            <div class="text-modal text-alert-system d-flex align-items-center">
                <em class="fas fa-exclamation-circle"></em> ข้อความระบบ
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Full screen -->
<div class="modal fade modal-custom" id="modalpanel" tabindex="-1" role="dialog" aria-labelledby="modalpanelLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content no-border">
        <div class="modal-header">
            <h3 class="modal-title" id="alertModalLabel">ระบบหลังบ้าน</h3>
            <div class="modal-close" data-dismiss="modal" aria-label="Close">
                <div class="icon-close"></div>
            </div>
        </div>
        <div class="modal-body">
            <iframe src="/user/dashboard" height="600px" frameborder="0" allowtransparency="true"></iframe>  
        </div>
    </div>
  </div>
</div>

<div class="modal fade modal-custom" id="modal_full" tabindex="-1" role="dialog" aria-labelledby="modalpanelLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content no-border">
            <div class="modal-header">
                <h3 class="modal-title" id="alertModalLabel"><span id="modal_full_span">INFORMATION</span></h3>
                <div class="modal-close" data-dismiss="modal" aria-label="Close">
                    <div class="icon-close"></div>
                </div>
            </div>
            <div class="modal-body">
                <iframe id="iframe_full" height="600px" frameborder="0" allowtransparency="true"></iframe>  
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_Alert_delete" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content no-border">
      <div class="modal-header">
        <h5 class="modal-title" id="alertModalLabel">แจ้งเตือน</h5>
      </div>
      <div class="modal-body">
        <div class="group-modal">
            <div class="text-modal text-alert-system d-flex align-items-center">
                <em class="fas fa-exclamation-circle" style="color: red;"></em> ยืนยันการลบ?
            </div>
        </div>
      </div>
      <div class="modal-footer"> 
        <button type="button" class="btn btn-primary" style="background-color:red;">ลบข้อมูล</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_Alert_hide" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content no-border">
        <div class="modal-header">
          <h5 class="modal-title" id="alertModalLabel">แจ้งเตือน</h5>
        </div>
        <div class="modal-body">
          <div class="group-modal">
              <div class="text-modal text-alert-system d-flex align-items-center">
                  <em class="fas fa-exclamation-circle"></em> ต้องการซ่อนหรือไม่?
              </div>
          </div>
        </div>
        <div class="modal-footer"> 
          <button type="button" class="btn btn-primary">ซ่อนข้อมูล</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        </div>
      </div>
    </div>
  </div>
 
@include('template2/include.css_scripts')


<link rel="stylesheet" href="{{ asset('swiper/swiper-bundle.min.css')}}">
<script src="{{ asset('swiper/swiper-bundle.js') }}"></script>
<script src="{{ asset('swiper/swiper-bundle.min.js') }}"></script>

<script>
    $(document).ready(function () {
        //$('#exampleModal').modal('show')
        if($('body').hasClass('manage')){
            $("div.group-section-content").attr('id', 'manage_dragdrop');
            // DragDrop
            var sortable = new Sortable(manage_dragdrop, {
                ghostClass: "sortable-ghost",
                chosenClass: "sortable-chosen",
                dragClass: "sortable-drag",
                forceFallback: true,
                swapThreshold: 1,
                animation: 150,
                dataIdAttr: "data-id",
                //handle: '.manage-dragdrop',
            });
            //var order = sortable.toArray();
            //console.log(order);
            $('.getOrder_ele').click(function() {
                var order = sortable.toArray();
                alert(order);
                // for (var i = 0; i < order.length; i++) {
                //     alert("Position: " + i + " ID: " + order[i]);
                // }
            });
        }else{
            $("div.group-section-content").removeAttr("id");
        }


        const swiper = new Swiper('.swiper-container', {
        speed: 2200,
        lazy: true,
        effect: 'fade',
        autoplay: {
            delay: 5000,
        },
        //autoHeight: true, //enable auto height
        //loop: true,
        // autoplay: {
        //     delay: 5000,
        //     disableOnInteraction: false,
        // }, 
        <?php 
        $effect = 1;
        if($effect == 1)
        {
            //Effect Fade
            ?> 
            effect: 'fade',
            fadeEffect: {
             crossFade: true
            },
            <?php
        }
        else if($effect == 2)
        {
            //Effect Flip
            ?> 
            effect: 'flip',
            grabCursor: true,
            <?php
        }
        else if($effect == 3)
        {
            //Effect Cube
            ?>  
            effect: 'cube',
            grabCursor: true,
            cubeEffect: {
                shadow: true,
                slideShadows: true,
                shadowOffset: 20,
                shadowScale: 0.94,
                },
            <?php
        }
        else if($effect == 4)
        {
            //Effect Cover Flow
            ?>  
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            <?php
        }
        ?>  
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
        },
        // pagination: {
        //     el: '.swiper-pagination',
        //     type: 'fraction',// Number
        // },

        on: {
            slideChangeTransitionStart: function(){
                //alert('before Change')
                var activeIndex = this.activeIndex;
                //this.slides.addClass('sliding');

                $('.swiper-slide').removeClass('effect-slide');
                this.slides.eq(activeIndex).addClass('effect-slide');
                //console.log(activeIndex);
            },
            slideChangeTransitionEnd: function () {
                $('.swiper-slide').removeClass('effect-slide');
                //$('.swiper-slide').removeClass('sliding');
            },
            
        }
    });


    });
</script>
<!-- Gallery -->
<link rel="stylesheet" href="{{ asset('gallery/lightgallery.css')}}">
<script src="{{ asset('gallery/lightgallery.min.js') }}"></script>
<script src="{{ asset('gallery/lg-thumbnail.min.js') }}"></script>
<script src="{{ asset('gallery/lg-zoom.min.js') }}"></script>
<script src="{{ asset('gallery/lg-fullscreen.min.js') }}"></script>
<script src="{{ asset('gallery/lg-video.min.js') }}"></script>
<style type="text/css">
    #lg-zoom-in, #lg-zoom-out{
        display: none;
    }
</style>
<script>
    $(document).ready(function(){
        $('#video-gallery').lightGallery({
        });
    });
</script>
<script>
    $(document).ready(function() {
        let $document = $(this);

        $document.on('onCloseAfter.lg', function(event) {
            $document.data('lightGallery').destroy(true);
        });

        $('#dynamic1').on('click', function(e) {
            $(document).lightGallery({
                dynamic: true,
                dynamicEl: [{
                    src: 'https://sachinchoolur.github.io/lightGallery/static/img/1.jpg',
                    thumb: 'https://sachinchoolur.github.io/lightGallery/static/img/thumb-1.jpg'
                },{
                    src: 'https://www.youtube.com/watch?v=meBbDqAXago',
                    thumb: 'https://sachinchoolur.github.io/lightGallery/static/img/thumb-v-y-1.jpg',
                    poster: 'https://sachinchoolur.github.io/lightGallery/static/img/videos/y-video1-cover.jpg'
                },{
                    html: '#video2',
                    thumb: 'https://sachinchoolur.github.io/lightGallery/static/img/videos/y-video1-cover.jpg',
                    poster: 'https://sachinchoolur.github.io/lightGallery/static/img/thumb-v-y-1.jpg'
                },{
                    src: 'https://sachinchoolur.github.io/lightGallery/static/img/4.jpg',
                    thumb: 'https://sachinchoolur.github.io/lightGallery/static/img/thumb-4.jpg'
                }],
                slideEndAnimatoin: false,
                loop: false,
                hideControlOnEnd: true,
                download: false,
            });
        });

        $('#dynamic2').on('click', function(e) {
            $(document).lightGallery({
                dynamic: true,
                dynamicEl: [{
                    src: 'https://sachinchoolur.github.io/lightGallery/static/img/1.jpg',
                    thumb: 'https://sachinchoolur.github.io/lightGallery/static/img/thumb-1.jpg'
                },{
                    src: 'https://www.youtube.com/watch?v=meBbDqAXago',
                    thumb: 'https://sachinchoolur.github.io/lightGallery/static/img/thumb-v-y-1.jpg',
                    poster: 'https://sachinchoolur.github.io/lightGallery/static/img/videos/y-video1-cover.jpg'
                },{
                    src: 'https://sachinchoolur.github.io/lightGallery/static/img/4.jpg',
                    thumb: 'https://sachinchoolur.github.io/lightGallery/static/img/thumb-4.jpg'
                }],
                slideEndAnimatoin: false,
                loop: false,
                hideControlOnEnd: true,
                download: false,
            });
        });

        $('#dynamic3').on('click', function(e) {
            $(document).lightGallery({
                dynamic: true,
                dynamicEl: [{
                    src: 'https://youtu.be/YD_gvR234qg',
                    thumb: 'https://sachinchoolur.github.io/lightGallery/static/img/thumb-1.jpg'
                }],
                slideEndAnimatoin: false,
                loop: false,
                hideControlOnEnd: true,
                download: false,
            });
        });


        $('#dynamic4').on('click', function(e) {
            $(document).lightGallery({
                dynamic: true,
                dynamicEl: [{
                    src: 'https://www.youtube.com/watch?v=meBbDqAXago',
                    thumb: 'https://sachinchoolur.github.io/lightGallery/static/img/thumb-v-y-1.jpg',
                    poster: 'https://sachinchoolur.github.io/lightGallery/static/img/videos/y-video1-cover.jpg'
                }],
                slideEndAnimatoin: false,
                loop: false,
                hideControlOnEnd: true,
                download: false,
            });
        });

        $('#modal_full').on('shown.bs.modal',function(){
            $(this).find('iframe').attr('src',main_iframe_url); 
            })
        });
</script>



<link rel="stylesheet" href="{{ asset('template2/js/calendar3_9/fullcalendar.min.css')}}">
<script src="{{ asset('template2/js/calendar3_9/lib/moment.min.js') }}"></script>
<script src="{{ asset('template2/js/calendar3_9/fullcalendar.min.js') }}"></script>
<script src="{{ asset('template2/js/calendar3_9/locale-all.js') }}"></script>
<script>

  $(document).ready(function() {

    var d = new Date();
    var y = d.getFullYear();

    $('#calendar').fullCalendar({
      header:false,
      locale: 'th',
      defaultDate: moment().format("YYYY-MM-DD"),
      navLinks: false, // can click day/week names to navigate views
      editable: false,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'Lunch',
          start: '2021-01-12'
        },
        {
          title: 'Meeting',
          start: '2021-01-12'
        },
        {
          title: 'Happy Hour',
          start: '2021-01-12'
        },
        {
          title: 'Dinner',
          start: '2021-01-12'
        },
        {
          title: 'Birthday Party',
          start: '2021-01-13'
        },
        {
          title: 'Birthday Party2',
          start: '2021-01-13'
        },
        {
          title: 'Click for Google',
          url: '/calendar-detail-2',
          start: '2021-01-28'
        }
      ]
    });

   $(".-month").on("change", function(event) {
      $('#calendar').fullCalendar('changeView', 'month', this.value);
      $('#calendar').fullCalendar('gotoDate', y +"-"+ this.value);
   });

  });

</script>

@endsection

