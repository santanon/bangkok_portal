<div class="canvas-menu-wrapper">
    <div class="canvas-menu">
        <!-- Close -->
        <div class="canvas-header">
            <div class="close-menu" id="nav-close">
                <i class="fas fa-times"></i> 
            </div>
            <div class="clearPrefix"></div>
        </div>
        <div class="canvas-lang">
            <ul>
                <li class="lang active">
                    <a href="">TH</a>
                </li>
                <li class="lang">
                    <a href="">EN</a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ asset('template2/assets/images/icons/icon-search-mobile.svg')}}" alt="icon">
                    </a>
                </li>
            </ul>
        </div>
        <div class="canvas-top">
            <ul>
                <li class="">
                    <div class="group-canvas-top">
                        <a href="">
                            <div class="icon-top">
                                <img src="{{ asset('template2/assets/images/icons/icon-signin-mobile.svg')}}" alt="icon">
                            </div>
                            <div class="text-top">เข้าสู่ระบบ</div>
                        </a>
                    </div>
                    
                </li>
                <li class="">
                    <div class="group-canvas-top">
                        <a href="">
                            <div class="icon-top">
                                <img src="{{ asset('template2/assets/images/icons/icon-register-mobile.svg')}}" alt="icon">
                            </div>
                            <div class="text-top">สมัครสมาชิก</div>
                        </a>
                    </div>
                    
                </li>
            </ul>
        </div>
        <div class="canvas-list-menu">
            <ul class="nav-menu-MB">
                <li><a href="">ศูนย์ข้อมูลกรุงเทพมหานคร</a></li>
                <li><a href="">หน่วยงานกรุงเทพมหานคร</a></li>
                <li><a href="">ติดต่อสำนักงานเลขานุการสภา กทม.</a></li>
                <li><a href="">หน้าหลัก</a></li>
                <li><a href="">สภากรุงเทพมหานคร</a></li>
                <li><a href="#">เกี่ยวกับหน่วยงาน</a>
                    <ul class="menu-lv2">
                        <li><a href="#">วิสัยทัศน์</a></li>
                        <li><a href="#">ภารกิจหน้าที่</a></li>
                        <li><a href="#">โครงสร้างหน่วยงาน</a></li>
                        <li><a href="#">แผนปฏิบัติราชการและผลการดำเนินการ</a></li>
                        <li>
                            <a href="#">ติดตามและรายงานผลการปฏิบัติงานตามแผนปฏิบัติราชการ</a>
                            <ul class="menu-lv3">
                                <li><a href="">ระบบติดตามผลการปฏิบัติราชการสำหรับผู้บริหาร (BMA MONITOR)</a></li>
                                <li><a href="">ระบบติดตามและประเมินผลแผนพัฒนากรุงเทพมหานคร (Daily plans)</a></li>
                                <li><a href="">ระบบติดตามและประเมินผลแผนพัฒนากรุงเทพมหานคร (Digital plans)</a></li>
                            </ul>
                        </li>
                        <li><a href="">คู่มือการปฏิบัติงาน</a></li>
                        <li><a href="">การบริหารเงินงบประมาณ</a></li>
                    </ul>
                </li>
                <li><a href="#">ข่าวสาร</a></li>
                <li><a href="#">การให้บริการ</a></li>
                <li><a href="">ปฏิทินกิจกรรม</a></li>
                <li><a href="">การรับฟังปัญหา/ข้อคิดเห็น</a></li>
            </ul>
        </div>
    </div>
</div>


<div class="header-lg">
    <div class="container-fluid">
        <div class="row">
            <div class="logo-wrapper">
                <div class="group-mange-section no-mg right-0">
                    <!--<div class="manage-tools">
                        <ul>
                            <li class="order-list">บริหารจัดการ</li>
                            <li class="order-list">ลบ</li>
                            <li class="order-list">ซ่อน</li>
                            <li class="order-list order-close">ปิด</li>
                        </ul>
                    </div>-->
                    <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('LOGO','manage-admin/edit_logo?m=portal_website');">
                        <div class="manage-edit">
                            <img src="{{ asset('template2/assets/images/icons/icon-edit.svg')}}" alt="icon">
                        </div>
                    </a>
                </div>
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('template2/assets/images/logo.png')}}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="menu-right-top">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-end">
                        <div class="account-wrapper">
                            <ul>
                                <li>
                                    <a href="">
                                        Register<span class="icon-register"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        Sign in<span class="icon-signin"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tools-web">
                            <ul>
                                <!-- <li>
                                    <div class="search-site">
                                        <div class="icon-search"></div>
                                    </div>
                                </li> -->
                                <!-- <li>
                                    <div class="sizefonts-wrapper">
                                        <div class="reduce" id="reduce-size"></div>
                                        <div class="normal active" id="normal-size"></div>
                                        <div class="increase" id="increase-size"></div>
                                    </div>
                                </li> -->
                                <li>
                                    <div class="lang-site">
                                        <span>TH</span><i class="fas fa-angle-up"></i>
                                        <ul class="multi-lang">
                                            <li>
                                                <a href="/">EN</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="section-search-wrapper">
                        <div class="group-search">
                            <form>
                                <div class="input-custom">
                                    <div class="input-box">
                                        <input type="text" name="KEYWORD" required="" placeholder="KEYWORD">
                                        <!-- <label for="">KEYWORD</label> -->
                                    </div>
                                    <div class="btn-search">
                                        <button type="submit" class="icon-search">ค้นหา</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="group-mange-section no-mg right-0">
                    <!--<div class="manage-tools">
                        <ul>
                            <li class="order-list">จัดการ</li>
                            <li class="order-list">ลบ</li>
                            <li class="order-list">ซ่อน</li>
                            <li class="order-list order-close">ปิด</li>
                        </ul>
                    </div> --> 
                    <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('TOP MENU','manage-admin/list?m=portal_website_main_menu_page');">
                        <div class="manage-edit">
                            <img src="{{ asset('template2/assets/images/icons/icon-edit.svg')}}" alt="icon">
                        </div>
                    </a>
                </div>
                <div class="menu-main-wrapper">
                    <ul class="sub-menu-main">
                        <li class="list">
                            <a href="" title="หน้าหลัก">
                                <!-- <img src="{{ asset('template2/assets/images/icons/icon-home-menu.png')}}" alt="icon home"> -->
                                    <!-- Generator: Adobe Illustrator 23.0.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                    <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill:none;stroke:#E16500;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;}
                                    </style>
                                    <path class="st0" d="M5.3,18.7v-7.2L12,5.3l6.7,6.3v7.2H5.3z"/>
                                    </svg>
                            </a>
                        </li>
                        <li class="list open">
                            <a href="" title="สภากรุงเทพมหานคร">สภากรุงเทพมหานคร</a>
                            <div class="sub-menu-lv2">
                                <div class="container">

                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="list-menu-lv2">
                                                <a href="">วิสัยทัศน์</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="list-menu-lv2 open">
                                                <a href="">ภารกิจหน้าที่</a>
                                                <div class="sub-menu-lv3">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="list-menu-lv3">
                                                                    <a href="">ระบบติดตามผลการปฏิบัติราชการสำหรับผู้บริหาร (BMA MONITOR)</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="list-menu-lv3">
                                                                    <a href="">ระบบติดตามและประเมินผลแผนพัฒนากรุงเทพมหานคร (Daily plans)</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="list-menu-lv3">
                                                                    <a href="">ระบบติดตามและประเมินผลแผนพัฒนากรุงเทพมหานคร (Digital plans) </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="list-menu-lv2">
                                                <a href="">โครงสร้างหน่วยงาน</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="list-menu-lv2">
                                                <a href="">คณะผู้บริหารของหน่วยงาน</a>
                                            </div>
                                        </div>
                                    
                                        <div class="col-lg-3">
                                            <div class="list-menu-lv2">
                                                <a href="">แผนปฏิบัติราชการและผลการดำเนินการ</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="list-menu-lv2 open">
                                                <a href="">ติดตามและรายงานผลการปฏิบัติงานตามแผนปฏิบัติราชการ</a>
                                                <div class="sub-menu-lv3">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="list-menu-lv3">
                                                                    <a href="">เมนูย่อย 1</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="list-menu-lv3">
                                                                    <a href="">เมนูย่อย 2</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="list-menu-lv2">
                                                <a href="">คู่มือการปฏิบัติงาน</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="list-menu-lv2">
                                                <a href="">การบริหารเงินงบประมาณ</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="list">
                            <a href="about" title="เกี่ยวกับหน่วยงาน">เกี่ยวกับหน่วยงาน</a>
                        </li>
                        <li class="list">
                            <a href="news" title="ข่าวสาร">ข่าวสาร</a>
                        </li>
                        <li class="list">
                            <a href="album" title="ภาพกิจกรรม">ภาพกิจกรรม</a>
                        </li> 
                        <li class="list">
                            <a href="video" title="วิดิทัศน์">วิดิทัศน์</a>
                        </li> 
                        <li class="list">
                            <a href="download" title="ดาวน์โหลดคู่มือ">ดาวน์โหลดคู่มือ</a>
                        </li>
                        <li class="list">
                            <a href="calendar" title="ปฏิทินกิจกรรม">ปฏิทินกิจกรรม</a>
                        </li>
                        <li class="list">
                            <a href="questionnaire" title="การรับฟังปัญหา/ข้อคิดเห็น">การรับฟังปัญหา/ข้อคิดเห็น</a>
                        </li> 
                        <li class="list">
                            <a href="faq" title="คำถามที่พบบ่อย">คำถามที่พบบ่อย</a>
                        </li> 
                        <li class="list">
                            <a href="contact" title="ติดต่อสอบถาม">ติดต่อสอบถาม</a>
                        </li> 
                    </ul>
                    <div class="clearboth"></div>
                </div>
            </div>
        </div>

        <div class="row bg-color-menutop">
            <div class="col-lg-12">
                <div class="group-mange-section no-mg right-0">
                    <!--<div class="manage-tools">
                        <ul>
                            <li class="order-list">เพิ่ม</li>
                            <li class="order-list">บริหารจัดการ</li>
                            <li class="order-list">ซ่อน</li>
                            <li class="order-list">ลบ</li>
                            <li class="order-list order-close">ปิด</li>
                        </ul>
                    </div>-->
                    <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('TOP MENU','manage-admin/list?m=portal_website_top_menu_page');">
                        <div class="manage-edit">
                            <img src="{{ asset('template2/assets/images/icons/icon-edit.svg')}}" alt="icon">
                        </div>
                    </a>
                </div>
                <div class="menu-top-wrapper">
                    <ul>
                        <li>
                            <div class="list-menu">
                                <a href="">ศูนย์ข้อมูลกรุงเทพมหานคร</a>
                            </div>
                        </li>
                        <li>
                            <div class="list-menu">
                                <a href="">หน่วยงานกรุงเทพมหานคร</a>
                            </div>
                        </li>
                        <li>
                            <div class="list-menu">
                                <a href="">ติดต่อสำนักงานเลขานุการสภา กทม.</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="header-sm">
    <div class="logo-mobile">
        <div class="logo">
            <img src="{{ asset('template2/assets/images/logo.png')}}" alt="logo">
        </div>
        <div id="menu_sticky" class="menu-sizefonts-wrapper">
            <div class="bar-menu" id="nav-expander">
                <div class="icon-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div class="tools-sizefonts">
                <div class="sizefonts-wrapper">
                    <div class="reduce"></div>
                    <div class="normal active"></div>
                    <div class="increase"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="fixed-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="fixed-left-wrapper">
                    <div class="online-wrapper">
                        <div class="group-online">
                            <div class="icon-online">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                    <g>
                                        <polyline class="st0" points="21.1,13.2 21.1,15.6 1.5,15.6 1.5,2.3 10,2.3 	"/>
                                        <line class="st0" x1="5.9" y1="21.2" x2="16.1" y2="21.2"/>
                                        <circle class="st1" cx="22.1" cy="21.2" r="1.5"/>
                                        <g>
                                            <path class="st1" d="M14.4,1.3c-0.2,0-0.4,0-0.7,0c-0.5,0-0.9,0.5-0.9,1s0.5,0.9,1,0.9h0.5c3.2,0,5.7,2.6,5.7,5.7
                                                c0,0.2,0,0.3,0,0.5c0,0.5,0.3,1,0.9,1h0.1c0.5,0,0.9-0.4,1-0.9c0-0.2,0-0.4,0-0.7C22.1,4.8,18.6,1.3,14.4,1.3z"/>
                                            <path class="st1" d="M15.6,9.7c0,0.5,0.4,1,1,1c0.5,0,1-0.4,1-1c0-2.1-1.7-3.8-3.8-3.8c-0.5,0-1,0.4-1,1s0.4,1,1,1
                                                C14.8,7.8,15.6,8.6,15.6,9.7z"/>
                                        </g>
                                        <line class="st0" x1="11.3" y1="21.2" x2="11.3" y2="15.6"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="text-online">Online</div>
                        </div>
                        <div class="num-online">1.6K</div>
                    </div>
                    <div class="social-wrapper">
                        <ul>
                            <li class="facebook">
                                <a href="" title="facebook">
                                    <img src="{{ asset('template2/assets/images/icons/icon-social-facebook.svg')}}" alt="icon">
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="" title="twitter">
                                    <img src="{{ asset('template2/assets/images/icons/icon-social-twitter.svg')}}" alt="icon">
                                </a>
                            </li>
                            <li class="line">
                                <a href="" title="line">
                                    <img src="{{ asset('template2/assets/images/icons/icon-social-line.svg')}}" alt="icon">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="fixed-right-wrapper">
                    <div class="sizefonts-wrapper">
                        <div class="reduce" id="reduce-size"></div>
                        <div class="normal active" id="normal-size"></div>
                        <div class="increase" id="increase-size"></div>
                    </div>
                    <div class="group-link-mainbkk">
                        <a href="">
                            <div class="icon-bkk">
                                <img src="{{ asset('template2/assets/images/icons/icon-bkk.png')}}" alt="icon">
                            </div>
                            <div class="text-bkk">
                                <strong>กรุงเทพมหานคร</strong>
                                Bangkok.go.th
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





