@section('title', 'กรุงเทพมหานคร')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('template1/include/start')
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
        @include('template1/include.header')
    </header>
    
    <div id="site-content">

        <div class="group-link-mainbkk">
            <a href="">
                <div class="icon-bkk">
                    <img src="{{ asset('template1/assets/images/icons/icon-bkk.png')}}" alt="icon">
                </div>
                <div class="text-bkk">
                    <label>กรุงเทพมหานคร</label>
                    Bangkok.go.th
                </div>
            </a>
        </div>
 
        <div class="banner-wrapper">
            @include('template1/main-slide')
        </div>

        <div class="group-section-content" id="manage_dragdrop">
            @include('template1/news')

            @include('template1/calendar')

            @include('template1/faq')

            @include('template1/album')

            @include('template1/vdo')

            @include('template1/download')

            @include('template1/bannerlink')

            @include('template1/questionnaire')

            @include('template1/vote')
        </div>
        
        <!--
        <button type="button" class="getOrder_ele">Get Order of Elements</button> 
        <button type="button" data-toggle="modal" data-target="#modal_Alert">Modal Alert System</button> 
        <button class="" data-toggle="modal" data-target="#modalpanel">Modal Full Screen</button>
        -->

    </div>

    <footer id="footer-wrapper">
        @include('template1/include.footer')
    </footer>


    <!-- Manage Save -->
    <!-- <div class="manage-save">
        <i class="fas fa-save"></i> SAVED
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
                <i class="fas fa-exclamation-circle"></i> ข้อความระบบ
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
                <i class="fas fa-exclamation-circle" style="color: red;"></i> ยืนยันการลบ?
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
                  <i class="fas fa-exclamation-circle"></i> ต้องการซ่อนหรือไม่?
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
 
@include('template1/include.css_scripts')


<script type="text/javascript">
    $(document).ready(function () {
        
        //$('#exampleModal').modal('show')

        // DragDrop
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
            var order = sortable.toArray();
            alert(order);
            // for (var i = 0; i < order.length; i++) {
            //     alert("Position: " + i + " ID: " + order[i]);
            // }
        });
    });
</script>
<!-- Gallery -->
<link rel="stylesheet" href="{{ asset('gallery/lightgallery.css')}}">
<script type="text/javascript" src="{{ asset('gallery/lightgallery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gallery/lg-thumbnail.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gallery/lg-zoom.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gallery/lg-fullscreen.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gallery/lg-video.min.js') }}"></script>
<style type="text/css">
    #lg-zoom-in, #lg-zoom-out{
        display: none;
    }
</style>
<script type="text/javascript">
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

@endsection

