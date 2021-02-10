@section('title', '')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('panel/include/start')
@section('contentpage')

<!--
<?php 
echo '<pre>';
print_r($_SESSION);
?>
-->

<script>
var main_iframe_url = '';
function sfi(title,url)
{
    document.getElementById('iframe_full').src = '';
    document.getElementById('modal_full_span').innerHTML = title;
    main_iframe_url = url;
}
</script>

<div class="main-wrapper bg-post-login">
    <header class="panel-header -admin">
        
        <!--
        <div class="header-top">
            @include('panel/include.head-top')
        </div>
        -->

        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <img src="{{ asset('assets/images/logo-panel.png')}}" alt="icon">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="step-template">
                            <ul>
                                <li>
                                    <div class="step -1">
                                        <div class="line active">
                                            <div class="circle active">1</div>
                                        </div>
                                        <div class="text-step">
                                            <span>ขั้นตอนที่ 1</span>
                                            เลือกแบบเว็บ Template และสี
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="step -2">
                                        <div class="line active">
                                            <div class="circle active">2</div>
                                        </div>
                                        <div class="text-step">
                                            <span>ขั้นตอนที่ 2</span>
                                            กำหนดเนื้อหาเว็บไซต์เบื้องต้น
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="step -3">
                                        <div class="line">
                                            <div class="circle">3</div>
                                        </div>
                                        <div class="text-step">
                                            <span>ขั้นตอนที่ 3</span>
                                            ตรวจสอบและเข้าสู่หน้าเว็บไซต์
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="content-wrapper container" >
        <div class="row">
            <div class="col-md-4">
                <div class="title-page">Web Portal</div>
                <div class="desc-page">
                    Create & Manage Web Site Portal by Bangkok PMS <br><br> 
                    <img src="{{ asset('panel/assets/images/template/template05.png')}}" alt="icon" title="Template05" style="width: 350px;"><br>
                    <div align="center" style="font-size:18px;">Template <?php echo substr($_SESSION['panel_style_template_id'],0,1) ?> 
                    <br>
                    <?php 
                    if(substr($_SESSION['panel_style_template_id'],1,1) == '1')
                    { 
                        ?>สีเขียว<?php 
                    } 
                    else if(substr($_SESSION['panel_style_template_id'],1,1) == '2')
                    { 
                        ?>สีฟ้า<?php 
                    }
                    else if(substr($_SESSION['panel_style_template_id'],1,1) == '3')
                    { 
                        ?>สีส้ม<?php 
                    }
                    else if(substr($_SESSION['panel_style_template_id'],1,1) == '4')
                    { 
                        ?>สีชมพู<?php 
                    }
                    else if(substr($_SESSION['panel_style_template_id'],1,1) == '5')
                    { 
                        ?>สีม่วง<?php 
                    }
                    ?></div>
                </div>
            </div>  
            <div class="col-md-8">
                <div class="group-list-menu">
                    <div class="row">
                        <div class="col-md-3">
 <div class="list-menu" data-toggle="modal" data-target="#modalpanel" onclick="sfi('กำลังโหลด...','/manage-admin/edit_logo?m=logo');">
                                <div class="icon-menu">
                                    <img src="{{ asset('assets/panel/icon-1.png')}}" alt="icon">
                                </div>
                                <div class="text-menu">โลโก้เว็บไซต์</div>
                                <?php
                                if($icon_logo_have == true)
                                {
                                    ?><div class="check -pass"><i class="fas fa-check"></i></div><?php
                                }
                                else
                                {
                                    ?><div class="check -notpass"><i class="fas fa-times"></i></div><?php
                                }
                                ?>
                            </div>
                        </div> 
                        <div class="col-md-3">
<div class="list-menu" data-toggle="modal" data-target="#modalpanel" onclick="sfi('กำลังโหลด...','/manage-admin/list?m=top_menu');">
                                <div class="icon-menu">
                                    <img src="{{ asset('assets/panel/icon-3.png')}}" alt="icon">
                                </div>
<div class="text-menu">เมนูด้านบน</div>
                                <?php
                                if($icon_topmenu_have == true)
                                {
                                    ?>(ok)<?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="list-menu" data-toggle="modal" data-target="#modalpanel" onclick="sfi('กำลังโหลด...','/manage-admin/list?m=main_menu');">
                                <div class="icon-menu">
                                    <img src="{{ asset('assets/panel/icon-3.png')}}" alt="icon">
                                </div>
                                <div class="text-menu">เมนูหลัก</div>
                                <?php 
                                if($icon_mainmenu_have == true)
                                {
                                    ?>(ok)<?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="list-menu" data-toggle="modal" data-target="#modalpanel" onclick="sfi('กำลังโหลด...','/manage-admin/list?m=home_bg');">
                                <div class="icon-menu">
                                    <img src="{{ asset('assets/panel/icon-4.png')}}" alt="icon">
                                </div>
                                <div class="text-menu">ภาพสไลด์หน้าแรก</div>
                                <?php 
                                if($icon_slide_have == true)
                                {
                                    ?>(ok)<?php
                                }
                                ?>
                            </div>
                        </div> 
                        <div class="col-md-3">
<div class="list-menu" data-toggle="modal" data-target="#modalpanel" onclick="sfi('กำลังโหลด...','/manage-admin/list?m=footer_menu');">
                                <div class="icon-menu">
                                    <img src="{{ asset('assets/panel/icon-4.png')}}" alt="icon">
                                </div>
                                <div class="text-menu">เมนูด้านล่าง</div>
                                <?php 
                                if($icon_footmenu_have == true)
                                {
                                    ?>(ok)<?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="list-menu" data-toggle="modal" data-target="#modalpanel" onclick="sfi('กำลังโหลด...','/manage-admin/edit_website?m=setting_website');">
                                <div class="icon-menu">
                                    <img src="{{ asset('assets/panel/icon-2.png')}}" alt="icon">
                                </div>
                                <div class="text-menu">ตั้งค่าเว็บไซต์</div>
                                <?php 
                                if($icon_text_have == true)
                                {
                                    ?>(ok)<?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                 &nbsp;
            </div>
            <div class="col-md-8">
                <div class="title-page">  
                    <div class="action-btn">
                        <div class="row"> 
                            <div class="col-lg-4 col-md-12">
                                 
                                <div class="btn-manage">
                                    <a href="/เริ่มต้นใช้งานเว็บไซต์/ขั้นตอนที่1">
                                        <button type="button" class="btn btn-gray">
                                        << ย้อนกลับ
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                
                                 
                            </div>
                            <div class="col-lg-4 col-md-12">
                                
                                <div class="btn-manage">
                                    <a href="/เริ่มต้นใช้งานเว็บไซต์/ขั้นตอนที่3">
                                        <button type="button" class="btn btn-blue">
                                            ถัดไป >>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <footer>
        @include('panel/include.footer')
    </footer>
</div>


<!-- Modal Full screen -->
<div class="modal fade modal-custom full" id="modalpanel" tabindex="-1" role="dialog" aria-labelledby="modalpanelLabel" aria-hidden="true">
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
 

@include('panel/include.css_scripts')

<script type="text/javascript">
$(document).ready(function(){ 
    $('#modalpanel').on('shown.bs.modal',function(){ 
    $(this).find('iframe').attr('src',main_iframe_url); 
    });
});
</script>
@endsection

