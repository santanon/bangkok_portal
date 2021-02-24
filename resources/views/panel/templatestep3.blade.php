@section('title', '')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('panel/include/start')
@section('contentpage')

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
                                        <div class="line active">
                                            <div class="circle active">3</div>
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
                    Create & Manage Web Site Portal by Bangkok PMS
                </div>
            </div>
            <div class="col-md-8">
                <div class="group-list-menu">
                    <div class="row">
                        <div class="col-md-12"><div align="center" style="font-size: 20px; color:#FFFFFF"><br><br>หน้าเว็บไซต์ของท่านพร้อมใช้งานแล้ว<br>URL ของเว็บไซต์คือ <a href="/<?php echo $_SESSION['panel_web_url'] ?>" target="_blank" style="text-decoration: underline; color:#FFFFFF;">http://www.bangkok.go.th/<?php echo $_SESSION['panel_web_url'] ?></a><br><br>หลังจากนี้ ท่านสามารถบริหารจัดการเนื้อหาเว็บไซต์ได้โดยคลิกที่รูป 
                        <img src="/template1/assets/images/icons/icon-edit.svg" alt="icon">    
                        <br>เมื่อใช้งานระบบเสร็จแล้ว กรุณาออกจากระบบเพื่อความปลอดภัย</div></div> 
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
                                <br><br><br>
                                <div class="btn-manage">
                                    <a href="/เริ่มต้นใช้งานเว็บไซต์/ขั้นตอนที่2">
                                    <button type="button" class="btn btn-gray">
                                       << ย้อนกลับ
                                    </button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <br><br><br>
                                 
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <br><br><br>
                                <div class="btn-manage">
                                    <a href="/<?php echo $_SESSION['panel_web_url'] ?>">
                                    <button type="button" class="btn btn-blue">
                                        ไปยังหน้าเว็บไซต์
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

@include('panel/include.css_scripts')


<script type="text/javascript">



</script>
@endsection

