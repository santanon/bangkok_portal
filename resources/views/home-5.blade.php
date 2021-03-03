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
@section('title', 'กรุงเทพมหานคร')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('template5/include/start')
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
        @include('template5/include.header')
    </header>
    
    <div id="site-content">
        <div class="banner-wrapper">
            @include('template5/main-slide')
        </div>

        <div class="group-section-content" id="manage_dragdrop">
            @include('template5/news')

            @include ('template5/calendar')

            @include('template5/faq')

            @include('template5/album')

            @include('template5/vdo')

            @include('template5/download')

            @include('template5/bannerlink')

            @include('template5/questionnaire')

            @include('template5/vote')
        </div>
        
        <!--
        <button type="button" class="getOrder_ele">Get Order of Elements</button> 
        <button type="button" data-toggle="modal" data-target="#modal_Alert">Modal Alert System</button> 
        <button class="" data-toggle="modal" data-target="#modalpanel">Modal Full Screen</button>
        -->

    </div>

    <footer id="footer-wrapper">
        @include('template5/include.footer')
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
                                <img src="{{ asset('template1/assets/images/img-modal-demo.png')}}" alt="icon">
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
                                <img src="{{ asset('template1/assets/images/img-modal-demo.png')}}" alt="icon">
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
 


  @include('template5/include.css_scripts')


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
<!-- Matchheight -->
<script rel="preload" src="{{ asset('template5/js/jquery.matchHeight.js') }}"></script>

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


<!-- calendar -->
<link rel="stylesheet" href="{{ asset('template5/theme-purple/css/calendar-fixed.css')}}">

<!-- <link rel="stylesheet" href="{{ asset('template5/theme-blue/css/calendar-fixed.css')}}"> -->
<!-- <link rel="stylesheet" href="{{ asset('template5/theme-orange/css/calendar-fixed.css')}}"> -->
<!-- <link rel="stylesheet" href="{{ asset('template5/theme-green/css/calendar-fixed.css')}}"> -->
<!-- <link rel="stylesheet" href="{{ asset('template5/theme-pink/css/calendar-fixed.css')}}"> -->
<link rel="stylesheet" href="{{ asset('template5/theme-purple/css/calendar-fixed.css')}}">



<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
<script src="{{ asset('template5/js/calendar-manual.js') }}"></script>
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

        //Question
        $('.match-height').matchHeight({});
        $('.match-height2').matchHeight({});

        //calendar
        var data = [
            {eventName: 'Lunch Meeting w/ Mark', calendar: 'Work', color: 'orange', eventTime: moment()},
            {eventName: 'Interview - Jr. Web Developer', calendar: 'Work', color: 'orange', eventTime: moment("2021-01-23")},
            {eventName: 'Demo New App to the Board', calendar: 'Work', color: 'orange', eventTime: moment("2021-01-05")},
            {eventName: 'Dinner w/ Marketing', calendar: 'Work', color: 'orange', eventTime: moment("2020-05-30")},
        
            {eventName: 'Game vs Portalnd', calendar: 'Sports', color: 'blue', eventTime: moment("2020-05-16")},
            {eventName: 'Game vs Houston', calendar: 'Sports', color: 'blue', eventTime: moment("2020-05-5")},
            {eventName: 'Game vs Denver', calendar: 'Sports', color: 'blue', eventTime: moment("2020-05-8")},
            {eventName: 'Game vs San Degio', calendar: 'Sports', color: 'blue', eventTime: moment("2020-05-10")},
        
            {eventName: 'School Play', calendar: 'Kids', color: 'yellow', eventTime: moment("2020-01-19")},
            {eventName: 'Parent/Teacher Conference', calendar: 'Kids', color: 'yellow', eventTime: moment("2020-05-13")},
            {eventName: 'Pick up from Soccer Practice', calendar: 'Kids', color: 'yellow', eventTime: moment("2020-05-26")},
            {eventName: 'Ice Cream Night', calendar: 'Kids', color: 'yellow', eventTime: moment("2020-05-22")},
        
            {eventName: 'Free Tamale Night', calendar: 'Other', color: 'green', eventTime: moment("2020-05-6")},
            {eventName: 'Bowling Team', calendar: 'Other', color: 'green', eventTime: moment("2020-05-27")},
            {eventName: 'Teach Kids to Code', calendar: 'Other', color: 'green', eventTime: moment("2020-05-19")},
            {eventName: 'Startup Weekend', calendar: 'Other', color: 'green', eventTime: moment("2020-05-31")}
        ];
        var calendar = new Calendar('#calendar_home', data);
        
        $("#slc-month").on('change', function(){
            var value = $("option:selected", this).val() - 1;
            calendar.goToMonth(value);
        })

</script>

@endsection

