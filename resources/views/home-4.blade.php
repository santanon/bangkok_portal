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

@extends('template4/include/start')
@section('contentpage')
 
<!--<?php print_r($_SESSION) ?>-->

<script>
var main_iframe_url = '';
function sfi(title,url)
{
    document.getElementById('iframe_full').src = '';
    document.getElementById('modal_full_span').innerHTML = title;
    main_iframe_url = url;
}
</script>
 
<div class="main-wrapper">
    <div class="panel-header">
        <div class="header-top">
            @include('panel/include.head-top')
        </div>
    </div>

    <header id="header-wrapper">
        @include('template4/include.header')
    </header>
    
    <div id="site-content">
        <div class="group-section-content-head">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="banner-wrapper">
                            @include('template4/main-slide')
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="gallery-template">
                            <div class="item video">
                                <div class="cover" style="background-image: url('../../template4/assets/images/img-album-demo1.png');">
                                    <a id="dynamic3" href="javascript:void(0)" >
                                        <div class="bg-layer">
                                            <div class="icon-search-hover">
                                                <svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="30px" height="30px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                <path class="st0" d="M19.4,13.9L6.9,22c-1.4,0.9-3.4-0.2-3.4-1.8V3.9c0-1.8,2-2.9,3.4-1.8l12.5,8.1C20.9,11,20.9,13.1,19.4,13.9z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="title">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                                <div class="group-mange-section">
                                    <div class="manage-tools">
                                        <ul>
                                            <li class="order-list">จัดการ</li>
                                            <li class="order-list">ลบ</li>
                                            <li class="order-list">ซ่อน</li>
                                            <li class="order-list order-close">ปิด</li>
                                        </ul>
                                    </div> 
                                    <div class="manage-edit">
                                        <img src="{{ asset('template4/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                    </div>
                                </div>
                            </div>
                            <div class="item video">
                                <div class="cover" style="background-image: url('../../template4/assets/images/img-album-demo2.jpg');">
                                    <a id="dynamic4" href="javascript:void(0)" >
                                        <div class="bg-layer">
                                            <div class="icon-search-hover">
                                                <svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="30px" height="30px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                <path class="st0" d="M19.4,13.9L6.9,22c-1.4,0.9-3.4-0.2-3.4-1.8V3.9c0-1.8,2-2.9,3.4-1.8l12.5,8.1C20.9,11,20.9,13.1,19.4,13.9z"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="title">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                                <div class="group-mange-section">
                                    <div class="manage-tools">
                                        <ul>
                                            <li class="order-list">จัดการ</li>
                                            <li class="order-list">ลบ</li>
                                            <li class="order-list">ซ่อน</li>
                                            <li class="order-list order-close">ปิด</li>
                                        </ul>
                                    </div> 
                                    <div class="manage-edit">
                                        <img src="{{ asset('template4/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="group-section-content" id="manage_dragdrop">
            @include('template4/news')

            @include('template4/calendar')

            @include('template4/faq')

            @include('template4/album')

            @include('template4/vdo')

            @include('template4/download')

            @include('template4/bannerlink')

            @include('template4/questionnaire')

            @include('template4/vote')
        </div>
        
        <!--
        <button type="button" class="getOrder_ele">Get Order of Elements</button> 
        <button type="button" data-toggle="modal" data-target="#modal_Alert">Modal Alert System</button> 
        <button class="" data-toggle="modal" data-target="#modalpanel">Modal Full Screen</button>
        -->

    </div>

    <footer id="footer-wrapper">
        @include('template4/include.footer')
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
                                <img src="{{ asset('template4/assets/images/img-modal-demo.png')}}" alt="icon">
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
                                <img src="{{ asset('template4/assets/images/img-modal-demo.png')}}" alt="icon">
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
 
@include('template4/include.css_scripts')


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
                },{
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

<link rel="stylesheet" href="{{ asset('template4/js/calendar3_9/fullcalendar.min.css')}}">
<script src="{{ asset('template4/js/calendar3_9/lib/moment.min.js') }}"></script>
<script src="{{ asset('template4/js/calendar3_9/fullcalendar.min.js') }}"></script>
<script src="{{ asset('template4/js/calendar3_9/locale-all.js') }}"></script>
<script>

  $(document).ready(function() {

    var d = new Date();
    var y = d.getFullYear();

    $('#calendar').fullCalendar({
        header: {
            left: '',
            center: 'title',
            right: ''
        },
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
                url: '/calendar-detail-4',
                start: '2021-01-28'
            }
        ]
    });

    var text_my = $('.fc-center h2').text();
    var text_m = text_my.split(" ")[0];
    $('.fc-center h2').html(text_m);

    $(".-month").on("change", function(event) {
        $('#calendar').fullCalendar('changeView', 'month', this.value);
        $('#calendar').fullCalendar('gotoDate', y +"-"+ this.value);
        //$('#calendar').fullCalendar('gotoDate', $(".select_year").val()+"-"+this.value);
        var text_my = $('.fc-center h2').text();
        var text_m = text_my.split(" ")[0];
        $('.fc-center h2').html(text_m);
        //console.log(text_m);
    });

  });

</script>
@endsection

