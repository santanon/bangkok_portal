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
                        <li class="breadcrumb-item active" aria-current="page">โครงสร้างองค์กร</li>
                    </ol>
                </nav>
            </div> 
        </div>

        <div class="group-section-content">
            <div class="section-content">
                <div class="container">
                    <div class="inner-content">
                        <div class="top-content">
                            <div class="group-text">
                                <h3 class="title color-primary"><?php echo $CustomHelper->L('โครงสร้างองค์กร','Organization Charts') ?></h3>
                                <p class="desc color-secondary"><?php echo $CustomHelper->L('Organization Charts','โครงสร้างองค์กร') ?></p>
                            </div>
                        </div>
                        <div class="main-content border-bottom">
                            <div class="group-editor" id="editor">
                                <div id="orgChartContainer">
                                    <div id="orgChart"></div>
                                </div>
                            </div>

                            <form method="post"  action="http://127.0.0.1:8000/manage-admin/organize_submit?m=setting_html_css" onsubmit="document.getElementById('this_info').value = JSON.stringify(org_chart.getData());">
                            @csrf <!-- {{ csrf_field() }} -->
                            <div align="center"><input type="submit" value="บันทึกข้อมูล"><br><br><br></div>
                            <input type="hidden" name="this_info" id="this_info" value="">
                            </form>

                            <div class="group-social-share d-flex align-items-center justify-content-between">
                                <div class="shared-email d-flex align-items-center">
                                    <div class="social-wrapper d-flex align-items-center">
                                        <div class="text-social color-secondary">Share</div>
                                        <ul class="d-flex align-items-center">
                                            <li class="facebook d-flex align-items-center not-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> <span class="color-secondary">5</span> 
                                            </li>
                                            <li class="twitter d-flex align-items-center not-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-social-twitter.svg')}}" alt="icon"> <span class="color-secondary">5</span> 
                                            </li>
                                            <li class="line d-flex align-items-center not-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"> <span class="color-secondary">5</span> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="email-link d-flex align-items-center">
                                        <div class="item">
                                            <a href="">
                                                <div class="icon -email">
                                                    <img src="{{ asset('template1/assets/images/icons/icon-email.png')}}" alt="icon">
                                                </div>
                                                <div class="text-email-link">อีเมล</div>
                                                <div class="clearboth"></div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="">
                                                <div class="icon -link">
                                                    <img src="{{ asset('template1/assets/images/icons/icon-link.png')}}" alt="icon">
                                                </div>
                                                <div class="text-email-link">Copy Link</div>
                                                <div class="clearboth"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="views-like d-flex align-items-center">
                                    <div class="view-count color-secondary">
                                        View : <span>1.5K</span>
                                    </div>
                                    <div class="like-count d-flex align-items-center">
                                        <a href="#" title="Love it" data-count="0" class="icon-like">
                                            <img src="{{ asset('template1/assets/images/icons/icon-like.png')}}" alt="icon">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

<script type="text/javascript" src="{{ asset('template1/js/jquery.orgchart.js') }}"></script>
<link rel="stylesheet" href="{{ asset('template1/theme-blue/css/layout/organization.css')}}">

<script type="text/javascript">
    var dataOrg = 

        <?php echo $this_data[0]->organize_data; ?>

    ;
    //console.log(dataOrg);

    var allNode = [];

    $(function(){
        org_chart = $('#orgChart').orgChart({
            data: dataOrg,

            <?php 
            if(isset($_SESSION['panel_login']) && $_SESSION['panel_login'] == '1' && trim($_SESSION['panel_web_url']) == trim($_SESSION['portal_website_'.$mod.'_web_url']))
            { 
                ?>
                showControls: true,
                allowEdit: true,
                <?php             
            }
            else
            {
                ?> 
                showControls: false,
                allowEdit: false,
                <?php
            }
            ?>
 
            onAddNode: function(node){ 
                //log('Created new node on node '+node.data.id);
                org_chart.newNode(node.data.id); 

                //outData
                allNode = org_chart.getData(); 
                //console.log(JSON.stringify(org_chart.getData()));
            },
            onDeleteNode: function(node){
                //log('Deleted node '+node.data.id);
                org_chart.deleteNode(node.data.id); 
            },
            onClickNode: function(node){
                //log('Clicked node '+node.data.id);
            }
        });
    });
</script>

@endsection

