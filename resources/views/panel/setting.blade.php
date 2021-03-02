@section('title', 'ตั้งค่าเว็บไซต์')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('panel/include/start')
@section('contentpage')

<?php 
$CustomHelper = new \App\CustomHelper; 
$TextLanguage = new \App\TextLanguage;  
?> 
 
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
        
       
        <div class="header-top">
            @include('panel/include.head-top')
        </div>
      

        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <img src="{{ asset('assets/images/logo-panel.png')}}" alt="icon">
                            <!-- <img src="<?php echo $CustomHelper->get_file_form_code($_SESSION['panel_style_logo_img1'],0) ?>" alt="icon"> -->
                        </div>
                    </div>
                    <div class="col-md-9">
                         
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="content-wrapper container" >
        <div class="row">
            <div class="col-md-4">
                <div class="title-page">ตั้งค่าเว็บไซต์</div>
                <div class="desc-page">
                    Create & Manage Web Site Portal by Bangkok PMS <br><br>  
                    <div style="position: relative;height: 410px;overflow: hidden;"><img src="http://127.0.0.1:8000/panel/assets/images/template/<?php echo $_SESSION['panel_style_template_id'] ?>.jpg" style="width: 350px;"></div> 
                    <div align="center" style="font-size:18px;">Template<br>แบบที่ <?php echo substr($_SESSION['panel_style_template_id'],0,1) ?> 
                    &nbsp;
                    <?php 
                    if(substr($_SESSION['panel_style_template_id'],1,1) == '1')
                    { 
                        ?>สีฟ้า<?php 
                    } 
                    else if(substr($_SESSION['panel_style_template_id'],1,1) == '2')
                    { 
                        ?>สีส้ม<?php 
                    }
                    else if(substr($_SESSION['panel_style_template_id'],1,1) == '3')
                    { 
                        ?>สีเขียว<?php 
                    }
                    else if(substr($_SESSION['panel_style_template_id'],1,1) == '4')
                    { 
                        ?>สีชมพู<?php 
                    }
                    else if(substr($_SESSION['panel_style_template_id'],1,1) == '5')
                    { 
                        ?>สีม่วง<?php 
                    }
                    ?>
                    
                    <div class="btn-manage" style="width:200px;">
                        <a href="/manage-admin/change_template">
                            <button type="button" class="btn btn-blue" style="background-color:green;"> 
                                เปลี่ยน Template
                            </button>
                        </a>
                    </div>

                    </div>
                </div>
            </div>  
            <div class="col-md-8">
                <div class="group-list-menu">
                    <div class="row">
 
                            <div class="col-md-3">
                            <div class="list-menu success" data-toggle="modal" data-target="#modalpanel" onclick="sfi('กำลังโหลด...','/manage-admin/edit_website?m=setting_website');">
                            <div class="icon-menu"> 
                                <i class="fas fa-cog"></i>
                            </div>
                            <div class="text-menu">ตั้งค่าเว็บไซต์</div> 
                            </div>
                            </div> 
                            
                            <div class="col-md-3">
                            <div class="list-menu success" data-toggle="modal" data-target="#modalpanel" onclick="sfi('กำลังโหลด...','/manage-admin/edit_bg?m=setting_bg');">
                            <div class="icon-menu"> 
                                <i class="far fa-images"></i>
                            </div>
                            <div class="text-menu">รูปภาพสไลด์ทุกหน้า</div> 
                            </div>
                            </div> 

                            <div class="col-md-3">
                            <div class="list-menu success" data-toggle="modal" data-target="#modalpanel" onclick="sfi('กำลังโหลด...','/manage-admin/edit_html_css?m=setting_html_css');">
                            <div class="icon-menu">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="text-menu">โค้ด HTML & CSS</div> 
                            </div>
                            </div> 

                            <div class="col-md-3">
                            <div class="list-menu success" data-toggle="modal" data-target="#modalpanel" onclick="sfi('กำลังโหลด...','/manage-admin/edit_copyright?m=copyright');">
                            <div class="icon-menu">
                                <i class="far fa-copyright"></i>
                            </div>
                            <div class="text-menu">ข้อความด่านล่าง</div> 
                            </div>
                            </div> 

                            <div class="col-md-3">
                            <div class="list-menu success" data-toggle="modal" data-target="#modalpanel" onclick="sfi('กำลังโหลด...','/manage-admin/edit_social?m=social');">
                            <div class="icon-menu">
                                <i class="fab fa-facebook-square"></i>
                            </div>
                            <div class="text-menu">สังคมออนไลน์</div> 
                            </div>
                            </div> 

                            <div class="col-md-3">
                            <div class="list-menu success" data-toggle="modal" data-target="#modalpanel" onclick="sfi('กำลังโหลด...','/manage-admin/edit_statistic?m=statistic');">
                            <div class="icon-menu">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <div class="text-menu">สถิติเว็บไซต์</div> 
                            </div>
                            </div>

                            <div class="col-md-3">
                            <div class="list-menu success" data-toggle="modal" data-target="#modalpanel" onclick="sfi('กำลังโหลด...','/manage-admin/edit_search?m=search');">
                            <div class="icon-menu">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="text-menu">ช่องค้นหา</div> 
                            </div>
                            </div>

                            <div class="col-md-3">
                            <div class="list-menu success" data-toggle="modal" data-target="#modalpanel" onclick="sfi('กำลังโหลด...','/manage-admin/edit_ga?m=ga');">
                            <div class="icon-menu">
                                <i class="fab fa-google"></i>
                            </div>
                            <div class="text-menu">Google Analytics</div> 
                            </div>
                            </div>

                            <div class="col-md-3">
                            <div class="list-menu success" data-toggle="modal" data-target="#modalpanel" onclick="sfi('กำลังโหลด...','/manage-admin/list?m=inbox');">
                            <div class="icon-menu">
                                <i class="fas fa-comments"></i>
                            </div>
                            <div class="text-menu">ข้อความสนทนา</div> 
                            </div>
                            </div>

                            <div class="col-md-3">
                            <div class="list-menu success" data-toggle="modal" data-target="#modalpanel" onclick="sfi('กำลังโหลด...','/manage-admin/list?m=member');">
                            <div class="icon-menu">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="text-menu">จัดการผู้ใช้งาน</div> 
                            </div>
                            </div>

                            <div class="col-md-3">
                            <div class="list-menu success" data-toggle="modal" data-target="#modalpanel" onclick="sfi('กำลังโหลด...','/manage-admin/edit_account?m=setting_account');">
                            <div class="icon-menu">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="text-menu">เปลี่ยนรหัสผ่าน</div> 
                            </div>
                            </div> 

                            <div class="col-md-3">
                            <div class="list-menu success" data-toggle="modal" data-target="#modalpanel" onclick="sfi('กำลังโหลด...','/manage-admin/edit_profile?m=setting_account');">
                            <div class="icon-menu">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="text-menu">เปลี่ยนอีเมล์</div> 
                            </div>
                            </div> 

                    </div>





                    <div class="row" style="justify-content: center;">
                        <div class="col-lg-4 col-md-12">
                            <div class="btn-manage">
                                <a href="/<?php echo $_SESSION['panel_web_url'] ?>">
                                    <button type="button" class="btn btn-blue">
                                        ไปยังหน้าเว็บไซต์ >>
                                    </button>
                                </a>
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
            <iframe id="iframe_full" frameborder="0" allowtransparency="true"></iframe>  
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

