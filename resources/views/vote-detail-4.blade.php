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
@section('title', 'รายละเอียดโหวต')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('template4/include/start')
@section('contentpage')

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
        <div class="group-section-breadcrumb">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                                <li class="breadcrumb-item"><a href="#">การรับฟังปัญหา/ข้อคิดเห็น</a></li>
                                <li class="breadcrumb-item"><a href="#">Vote</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detail</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div> 

        <div class="banner-wrapper onlyOne">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-wrapper">
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
                                    <img src="{{ asset('template4/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <div class="bg-layer"></div>
                                    <div class="banner" style="background-image: url('../../template4/assets/images/banner/img-banner-vote.png');"></div>
                                    <div class="item-Onbanner-outer">
                                        <div class="item-Onbanner-inner">
                                            <div class="list">
                                                <h2 class="title-banner">การรับฟังปัญหา/ข้อคิดเห็น</h2>
                                                <p class="desc-banner">มุ่งมั่นการทำงาน แหล่งค้นคว้าการประชุม เครือข่ายมหานครอาเซียน</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <div class="group-section-content">
            @include('template4/vote.detail')
        </div>

    </div>

    <footer id="footer-wrapper">
        @include('template4/include.footer')
    </footer>


    <!-- Manage Save -->
    <!-- <div class="manage-save">
        <em class="fas fa-save"></em> SAVED
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


@include('template4/include.css_scripts')
<!-- Gallery -->
<link rel="stylesheet" href="{{ asset('gallery/lightgallery.css')}}">
<script type="text/javascript" src="{{ asset('gallery/lightgallery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gallery/lg-thumbnail.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gallery/lg-fullscreen.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gallery/lg-video.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#lightgallery').lightGallery({
            thumbnail:true
        });
    });
</script>
@endsection

