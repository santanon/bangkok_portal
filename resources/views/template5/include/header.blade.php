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
        <div class="row bg-color-white">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="menu-right-top">
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
                    
                    <div class="social-wrapper">
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

                    <div class="tools-web" style="display: none;">
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
                            <li>
                                <div class="search-site">
                                    <div class="icon-search"></div>
                                </div>
                            </li>
                        </ul>

                        <div class="section-search-wrapper">
                            <div class="group-search">
                                 <form action="">
                                    @csrf <!-- {{ csrf_field() }} -->
                                    <div class="input-custom">
                                        <div class="input-box">
                                            <input type="text" name="" required="">
                                            <label for="">Search</label>
                                        </div>
                                    </div>
                                    <div class="btn-search d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">SEARCH</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="close-menu">
        <div class="icon">
            <img src="{{ asset('template5/assets/images/icons/icon-close.svg')}}" alt="icon close">
        </div>
    </div> -->
    

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




