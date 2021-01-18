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
                        <img src="{{ asset('template1/assets/images/icons/icon-search-mobile.svg')}}" alt="icon">
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
                                <img src="{{ asset('template1/assets/images/icons/icon-signin-mobile.svg')}}" alt="icon">
                            </div>
                            <div class="text-top">เข้าสู่ระบบ</div>
                        </a>
                    </div>
                    
                </li>
                <li class="">
                    <div class="group-canvas-top">
                        <a href="">
                            <div class="icon-top">
                                <img src="{{ asset('template1/assets/images/icons/icon-register-mobile.svg')}}" alt="icon">
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
                    <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','manage-admin/edit_logo?m=setting_website');">
                        <div class="manage-edit">
                            <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
                        </div>
                    </a>
                </div>
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('template1/assets/images/logo.png')}}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="menu-right-top">
                <div class="bg-color-primary">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between">
                            <div class="account-wrapper">
                                <ul>
                                    <li>
                                        <a href="">
                                            <span class="icon-register"></span>Register
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-signin"></span>Sign in
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tools-web">
                                <div class="social-wrapper" style="display: none;">
                                    <ul>
                                        <li class="facebook">
                                            <a href="" title="facebook">
                                                <img src="{{ asset('template1/assets/images/icons/icon-social-facebook.svg')}}" alt="icon">
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="" title="twitter">
                                                <img src="{{ asset('template1/assets/images/icons/icon-social-twitter.svg')}}" alt="icon">
                                            </a>
                                        </li>
                                        <li class="line">
                                            <a href="" title="line">
                                                <img src="{{ asset('template1/assets/images/icons/icon-social-line.svg')}}" alt="icon">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <ul>
                                    <li>
                                        <div class="search-site">
                                            <div class="icon-search"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sizefonts-wrapper">
                                            <div class="reduce" id="reduce-size"></div>
                                            <div class="normal active" id="normal-size"></div>
                                            <div class="increase" id="increase-size"></div>
                                        </div>
                                    </li>
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
                </div>
                <div class="bg-color-menutop">
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
                            <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','manage-admin/list?m=top_menu');">
                                <div class="manage-edit">
                                    <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
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
        <div class="section-search-wrapper">
            <div class="group-search">
                <div class="close-search">
                    <div class="icon-close"></div>
                </div>
                <form action="">
                    <div class="input-custom">
                        <div class="input-box">
                            <input type="text" name="" required="">
                            <label for="">Search</label>
                        </div>
                        <div class="btn-search">
                            <input type="submit" class="icon-search">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="row bg-color-secondary">
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
                    <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','manage-admin/list?m=main_menu');">
                        <div class="manage-edit">
                            <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
                        </div>
                    </a>
                </div>
                <div class="menu-main-wrapper">
                    <ul class="sub-menu-main">
                        <li class="list">
                            <a href="" title="หน้าหลัก">
                                <img src="{{ asset('template1/assets/images/icons/icon-home-menu.png')}}" alt="icon home">
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
                        <div class="clearboth"></div>
                    </ul>
                </div>
            </div>
        </div>

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

    </div>
</div>

<div class="header-sm">
    <div class="logo-mobile">
        <div class="logo">
            <img src="{{ asset('template1/assets/images/logo.png')}}" alt="logo">
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




