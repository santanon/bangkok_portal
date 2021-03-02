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
@section('title', $CustomHelper->L($r_title,$r_en_title).' - '.$CustomHelper->L($_SESSION['portal_website_'.$mod.'_web_name_th'],$_SESSION['portal_website_'.$mod.'_web_name_en']))
@section('tagkeyword', $CustomHelper->L($r_title,$r_en_title).' - '.$CustomHelper->L($_SESSION['portal_website_'.$mod.'_web_name_th'],$_SESSION['portal_website_'.$mod.'_web_name_en']))
@section('tagdescription', $CustomHelper->L($r_title,$r_en_title).' - '.$CustomHelper->L($_SESSION['portal_website_'.$mod.'_web_name_th'],$_SESSION['portal_website_'.$mod.'_web_name_en']))

@extends('template1/include/start')
@section('contentpage')

<style>
    #modal_full_span{ font-size:30px; }
    </style>

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
        <div class="banner-wrapper"> 
            @include('template1/main-slide-sub')
        </div>

        <div class="group-section-breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/<?php echo $mod ?>"><?php echo $CustomHelper->L('หน้าแรก','Home') ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $CustomHelper->L($r_title,$r_en_title) ?></li>
                    </ol>
                </nav>
            </div>
            
        </div> 

        <div class="group-section-content">
            @include('template1/about.detail')
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

<!-- CKeditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/inline/ckeditor.js"></script>

<script>
    InlineEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection

