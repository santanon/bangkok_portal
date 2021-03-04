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
@section('title', $title)
@section('tagkeyword', $CustomHelper->L($_SESSION['portal_website_style_'.$mod.'_info_keyword'],$_SESSION['portal_website_style_'.$mod.'_info_keyword']))
@section('tagdescription', $CustomHelper->L($_SESSION['portal_website_style_'.$mod.'_info_description'],$_SESSION['portal_website_style_'.$mod.'_info_description']))

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
        <div class="banner-wrapper"> 
            @include('template1/main-slide-app')
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
            @include('template1/gallery.list')
        </div>

    </div>

    <footer id="footer-wrapper">
        @include('template1/include.footer')
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


@include('template1/include.css_scripts')
<!-- Gallery -->
<link rel="stylesheet" href="{{ asset('gallery/lightgallery.css')}}">
<script type="text/javascript" src="{{ asset('gallery/lightgallery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gallery/lg-thumbnail.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('gallery/lg-zoom.min.js') }}"></script>
<style type="text/css">
    #lg-zoom-in, #lg-zoom-out{
        display: none;
    }
</style>
<script>
$(document).ready(function() {
    let $document = $(this);

    $document.on('onCloseAfter.lg', function(event) {
        $document.data('lightGallery').destroy(true);
    });

    <?php
    $this_loop = 1;
    foreach($r_data as $r)
    {
        ?>
        $('#dynamic<?php echo $this_loop ?>').on('click', function(e) {
        $(document).lightGallery({
        dynamic: true,
        dynamicEl: [  
        <?php 
        if(strpos($r->img1,'^') > -1)
        {
            $arr = explode('^',$r->img1);

            if(strpos($arr[0],'|') > -1)
            {
                $arr_d = explode('|',$arr[1]);
                $arr = explode('|',$arr[0]);
                    
                $this_loop_sub = 0;
                foreach($arr as $arr_item)
                {
                    if($arr_item != '')
                    {
                        ?>
                        {
                            src:    '<?php echo $arr_item ?>',
                            thumb:  '<?php echo $arr_item ?>',
                            subHtml:'<?php echo $arr_d[$this_loop_sub] ?>'
                        },
                        <?php
                        $this_loop_sub++;
                    } 
                }
            }  
        }
        else
        {
            ?>
            {
                src: '<?php echo $r->img1 ?>',
                thumb: '<?php echo $r->img1 ?>'
            } 
            <?php
        }
        ?> 
        ],
        slideEndAnimatoin: false,
        loop: false,
        hideControlOnEnd: true,
        download: false,
            });
        });
        <?php
        $this_loop++;
    }  
    ?>  
});
</script>
@endsection

