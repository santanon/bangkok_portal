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
@section('title', 'วิดิทัศน์')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('template1/include/start')
@section('contentpage')

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
        <div class="banner-wrapper onlyOne">
            <div class="group-mange-section no-mg right-0">
                <div class="manage-tools">
                    <ul>
                        <li class="order-list">จัดการ</li>
                        <li class="order-list">ลบ</li>
                        <li class="order-list">ซ่อน</li>
                        <li class="order-list order-close">ปิด</li>
                    </ul>
                </div> 
                <div class="manage-edit">
                    <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
                </div>
            </div>
            <ul>
                <li>
                    <div class="bg-layer"></div>
                    <div class="banner" style="background-image: url('../../template1/assets/images/banner/img-banner-demo.png');"></div>
                    <div class="item-Onbanner-outer">
                        <div class="item-Onbanner-inner">
                            <div class="list">
                                <h2 class="title-banner">ข่าวสาร</h2>
                                <p class="desc-banner">มุ่งมั่นการทำงาน แหล่งค้นคว้าการประชุม เครือข่ายมหานครอาเซียน</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="group-section-breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="#">ข่าวสาร</a></li>
                        <li class="breadcrumb-item active" aria-current="page">สถานี VDO</li>
                    </ol>
                </nav>
            </div>
            
        </div> 

        <div class="group-section-content">
            @include('template1/video.list')
        </div>

    </div>

    <footer id="footer-wrapper">
        @include('template1/include.footer')
    </footer>


    <!-- Manage Save -->
    <!-- <div class="manage-save">
        <i class="fas fa-save"></i> SAVED
    </div> -->

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
<div class="modal fade" id="modalpanel" tabindex="-1" role="dialog" aria-labelledby="modalpanelLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content no-border">
        <div class="modal-close" data-dismiss="modal" aria-label="Close">
            <div class="icon-close"></div>
        </div>
        <div class="modal-header">
            <h5 class="modal-title" id="alertModalLabel">ระบบหลังบ้าน</h5>
        </div>
        <div class="modal-body">
            <iframe src="/user/dashboard" height="600px" frameborder="0" allowtransparency="true"></iframe>  
        </div>
    </div>
  </div>
</div>


@include('template1/include.css_scripts')
<!-- Gallery -->
<link rel="stylesheet" href="{{ asset('gallery/lightgallery.css')}}">
<script type="text/javascript" src="{{ asset('gallery/lightgallery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gallery/lg-thumbnail.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gallery/lg-fullscreen.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gallery/lg-video.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        let $document = $(this);

        $document.on('onCloseAfter.lg', function(event) {
            $document.data('lightGallery').destroy(true);
        });

        $('#dynamic3').on('click', function(e) {
            $(document).lightGallery({
                dynamic: true,
                dynamicEl: [{
                    src: 'https://www.youtube.com/watch?v=rJaQrQmCqvw',
                    thumb: 'https://sachinchoolur.github.io/lightGallery/static/img/thumb-v-y-1.jpg',
                },{
                    src: 'https://www.youtube.com/watch?v=COz95PuG5vQ',
                    thumb: 'https://sachinchoolur.github.io/lightGallery/static/img/thumb-v-y-1.jpg',
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
                    src: 'https://www.youtube.com/watch?v=hE4dFMdaMhQ',
                    thumb: 'https://sachinchoolur.github.io/lightGallery/static/img/thumb-v-y-1.jpg',
                },{
                    src: 'https://www.youtube.com/watch?v=dTRtpvawXpo',
                    thumb: 'https://sachinchoolur.github.io/lightGallery/static/img/thumb-v-y-1.jpg',
                }],
                slideEndAnimatoin: false,
                loop: false,
                hideControlOnEnd: true,
                download: false,
            });
        });
    });
</script>

<script type="text/javascript">
    // TH
    $.datepicker.regional['th'] ={
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        dayNamesMin: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
        monthNamesShort: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
        constrainInput: true,
        yearOffSet : 543,
        yearRange: '-40:+0',
    };
    $.datepicker.setDefaults($.datepicker.regional['th']);

    // EN
    $.datepicker.regional['en'] ={
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true,
        constrainInput: true,
        yearOffSet : 0,
        yearRange: '-40:+0',
    };
    //$.datepicker.setDefaults($.datepicker.regional['en']);

    $(document).ready(function () {

        
        $("#start_date").datepicker({
            maxDate: 0,
            onSelect: function(){
                $('#end_date').val('');
                var dt2 = $('#end_date');
                var startDate = $(this).datepicker('getDate');
                var minDate = $(this).datepicker('getDate');
                dt2.datepicker('option', 'minDate', startDate);
            },
        });
        $("#start_date").datepicker( "setDate", new Date());
        $( "#end_date" ).datepicker({
            maxDate: 0,
        });
        $("#end_date").datepicker( "setDate", new Date());
    });
</script>
@endsection

