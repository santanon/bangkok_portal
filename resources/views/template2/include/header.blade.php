<div class="canvas-menu-wrapper">
    <div class="canvas-menu">
        <!-- Close -->
        <div class="canvas-header">
            <div class="close-menu" id="nav-close">
                <em class="fas fa-times"></em> 
            </div>
            <div class="clearPrefix"></div>
        </div>

<script>
var a_lang = top.location.href; 
a_lang = a_lang.replace("&lang=th",""); 
a_lang = a_lang.replace("?lang=th&","?"); 
a_lang = a_lang.replace("?lang=th",""); 
a_lang = a_lang.replace("&lang=en",""); 
a_lang = a_lang.replace("?lang=en&","?"); 
a_lang = a_lang.replace("?lang=en",""); 
if(a_lang.indexOf("?") > -1)
{ 
    a_lang = a_lang + "&lang=th";	 
}
else
{  
    a_lang = a_lang + "?lang=th";	
} 
</script> 
                    
<script>
var b = top.location.href; 
b = b.replace("&lang=th",""); 
b = b.replace("?lang=th&","?"); 
b = b.replace("?lang=th",""); 
b = b.replace("&lang=en",""); 
b = b.replace("?lang=en&","?"); 
b = b.replace("?lang=en",""); 
if(b.indexOf("?") > -1)
{ 
    b = b + "&lang=en";	 
}
else
{  
    b = b + "?lang=en";	
} 
</script> 

<?php 
if($_SESSION["portal_lang"] == "english")
{
    ?>
     <div class="canvas-lang">
        <ul>
            <li class="lang">
                <a href="javascript:;" onclick="window.location = a_lang;">TH</a>
            </li>
            <li class="lang active">
                <a href="javascript:;">EN</a>
            </li>
            <li>
                <a href="">
                    <img src="{{ asset('template2/assets/images/icons/icon-search-mobile.svg')}}" alt="icon">
                </a>
            </li>
        </ul>
    </div>
    <?php
}
else 
{
    ?>
     <div class="canvas-lang">
        <ul>
            <li class="lang active">
                <a href="javascript:;">TH</a>
            </li>
            <li class="lang">
                <a href="javascript:;" onclick="window.location = b;">EN</a>
            </li>
            <li>
                <a href="">
                    <img src="{{ asset('template2/assets/images/icons/icon-search-mobile.svg')}}" alt="icon">
                </a>
            </li>
        </ul>
    </div>
    <?php 
}
?>
        



        <div class="canvas-top">
            <ul>
                <li class="">
                    <div class="group-canvas-top">
                        <a href="http://siamedigital.com:8002/login" target="_blank">
                            <div class="icon-top">
                                <img src="{{ asset('template2/assets/images/icons/icon-signin-mobile.svg')}}" alt="icon">
                            </div>
                            <div class="text-top">เข้าสู่ระบบ</div>
                        </a>
                    </div>
                    
                </li>
                <li class="">
                    <div class="group-canvas-top">
                        <a href="http://siamedigital.com:8002/register" target="_blank">
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
                <?php
                foreach($_SESSION['portal_website_sub_menu_' . $mod . '_list'] as $r)
                {
                    if($r->page_type == 'group')
                    {
                        ?>
                        <li><a href="#"><?php echo $CustomHelper->L($r->title,$r->en_title) ?></a></li>
                        <?php
                    }
                    else
                    {
                        ?>
                        <li><a title="<?php echo $CustomHelper->L($r->title,$r->en_title) ?>" href="<?php echo base_url() ?><?php echo $mod ?>/page/top/<?php echo $r->id ?>/<?php echo $CustomHelper->remove_to_url($r->title,$r->en_title) ?>" target="<?php if($r->url_target == '') { echo '_top'; } else if($r->url_target == '0') { echo '_top'; } else { echo $r->url_target; } ?>"><?php echo $CustomHelper->L($r->title,$r->en_title) ?></a></li> 
                        <?php  
                    }  
                } 
                foreach($_SESSION['portal_website_main_menu_' . $mod . '_list'] as $r)
                { 
                    if($r->page_type == 'group')
                    {
                        ?>
                        <li><a href="#"><?php echo $CustomHelper->L($r->title,$r->en_title) ?></a>
                        <ul class="menu-lv2">           
                        <?php
                        if(isset($_SESSION['portal_website_page_' . $r->id . '_' . $mod . '_list']))
                        {
                            foreach($_SESSION['portal_website_page_' . $r->id . '_' . $mod . '_list'] as $r_sub)
                            { 
                                if($r_sub->page_type == 'group')
                                {
                                    ?>
                                    <li><a href="#"><?php echo $CustomHelper->L($r_sub->title,$r_sub->en_title) ?></a>
                                    <ul class="menu-lv3">
                 
                                        <?php 
                                        if(isset($_SESSION['portal_website_page_' . $r->id . '_' . $r_sub->id . '_' . $mod . '_list']))
                                        {
                                            ?> 
                                            <?php
                                            $menu_cache_name = "menu_cache/".$r->id."_".$r_sub->id."_".$mod.".php";
                
                                            ?><!-- ***<?php echo  $menu_cache_name ?> --><?php
                
                                            if (file_exists($menu_cache_name)) 
                                            {
                                                ?><!-- Yes files --><?php
                                            }
                                            else
                                            {
                                                ?><!-- No files<?php
                                                $str_gen_1 = '';
                                                
                                                foreach($_SESSION['portal_website_page_' . $r->id . '_' . $r_sub->id . '_' . $mod . '_list'] as $r_sub_sub)
                                                {
                                                    $str_gen_1 = $str_gen_1.'<li>';
                                                    
                                                    $str_gen_1 = $str_gen_1.'<a title="'.$CustomHelper->L($r_sub_sub->title,$r_sub_sub->en_title).'" href="'.base_url().$mod.'/page/sub/'.$r_sub_sub->id.'/'.$CustomHelper->remove_to_url($r_sub_sub->title,$r_sub_sub->en_title).'" target="'.$r_sub_sub->url_target.'">'.$CustomHelper->L($r_sub_sub->title,$r_sub_sub->en_title).'</a>'; 
                                                    
                                                    $str_gen_1 = $str_gen_1.'</li>';  	
                                                }
                                                ?>
                                                
                                                [[<?php echo  $str_gen_1 ?>]]
                                                
                                                --><?php
                                                
                                                @file_put_contents($menu_cache_name,$str_gen_1); 
                                            }
                
                                            include($menu_cache_name);
                                        }
                                        ?>
                                    </ul>
                                    </li>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <li>
                                    <a title="<?php echo $CustomHelper->L($r_sub->title,$r_sub->en_title) ?>" href="<?php echo base_url() ?><?php echo $mod ?>/page/sub/<?php echo $r_sub->id ?>/<?php echo $CustomHelper->remove_to_url($r_sub->title,$r_sub->en_title) ?>" target="<?php if($r_sub->url_target == '') { echo '_top'; } else if($r_sub->url_target == '0') { echo '_top'; } else { echo $r_sub->url_target; } ?>"><?php echo $CustomHelper->L($r_sub->title,$r_sub->en_title) ?></a>
                                    </li>
                                    <?php	
                                    
                                    /*if($r_sub->page_type == 'url')
                                    {
                                        ?>
                                        <a title="<?php echo $CustomHelper->L($r_sub->title,$r_sub->en_title) ?>" href="<?php echo $CustomHelper->L($r_sub->url,$r_sub->en_url) ?>" target="<?php echo $r_sub->url_target ?>"><?php echo $CustomHelper->L($r_sub->title,$r_sub->en_title) ?></a>
                                        <?php		
                                    }
                                    else
                                    {
                                        ?>
                                        <a title="<?php echo $CustomHelper->L($r_sub->title,$r_sub->en_title) ?>" href="<?php echo base_url() ?><?php echo $mod ?>/page/sub/<?php echo $r_sub->id ?>/<?php echo $CustomHelper->remove_to_url($r_sub->title,$r_sub->en_title) ?>" target="_top"><?php echo $CustomHelper->L($r_sub->title,$r_sub->en_title) ?></a>
                                        <?php		
                                    } */
                                }
                            } 
                        }
                        ?> 
                        </ul> 
                        </li>
                        <?php
                 
                    }
                    else
                    { 
                        ?>
                        <li><a title="<?php echo $CustomHelper->L($r->title,$r->en_title) ?>" href="<?php echo base_url() ?><?php echo $mod ?>/page/main/<?php echo $r->id ?>/<?php echo $CustomHelper->remove_to_url($r->title,$r->en_title) ?>" target="<?php if($r->url_target == '') { echo '_top'; } else if($r->url_target == '0') { echo '_top'; } else { echo $r->url_target; } ?>"><?php echo $CustomHelper->L($r->title,$r->en_title) ?></a></li>
                        <?php
                    }
                }
                ?> 
            </ul>
        </div>
    </div>
</div>


<div class="header-lg">
    <div class="container-fluid">
        <div class="row">
            <div class="logo-wrapper">
                <div class="group-mange-section no-mg right-0"> 
                    <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/edit_logo?m=logo');">
                        <div class="manage-edit">
                            <img src="{{ asset('template2/assets/images/icons/icon-edit.svg')}}" alt="icon">
                        </div>
                    </a>
                </div>
                <div class="logo">
                    <a href="/<?php echo $mod ?>" title="<?php echo $CustomHelper->get_text_form_code($_SESSION['portal_website_style_'.$mod.'_logo_img1'],0,$_SESSION["portal_lang"]) ?>">
                        <img style="max-width: 500px;" src="<?php echo $CustomHelper->get_file_form_code($_SESSION['portal_website_style_'.$mod.'_logo_img1'],0) ?>" alt="<?php echo $CustomHelper->get_text_form_code($_SESSION['portal_website_style_'.$mod.'_logo_img1'],0,$_SESSION["portal_lang"]) ?>">
                    </a>
                </div>
            </div>
            <div class="menu-right-top">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-end">
                        <div class="account-wrapper">
                            <ul>
                                <li>
                                    <a href="http://siamedigital.com:8002/register" target="_blank">
                                        Register<span class="icon-register"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://siamedigital.com:8002/login" target="_blank">
                                        Sign in<span class="icon-signin"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <script>
                            var a_lang = top.location.href; 
                            a_lang = a_lang.replace("&lang=th",""); 
                            a_lang = a_lang.replace("?lang=th&","?"); 
                            a_lang = a_lang.replace("?lang=th",""); 
                            a_lang = a_lang.replace("&lang=en",""); 
                            a_lang = a_lang.replace("?lang=en&","?"); 
                            a_lang = a_lang.replace("?lang=en",""); 
                            if(a_lang.indexOf("?") > -1)
                            { 
                                a_lang = a_lang + "&lang=th";	 
                            }
                            else
                            {  
                                a_lang = a_lang + "?lang=th";	
                            } 
                            </script> 
                                                
                            <script>
                            var b = top.location.href; 
                            b = b.replace("&lang=th",""); 
                            b = b.replace("?lang=th&","?"); 
                            b = b.replace("?lang=th",""); 
                            b = b.replace("&lang=en",""); 
                            b = b.replace("?lang=en&","?"); 
                            b = b.replace("?lang=en",""); 
                            if(b.indexOf("?") > -1)
                            { 
                                b = b + "&lang=en";	 
                            }
                            else
                            {  
                                b = b + "?lang=en";	
                            } 
                            </script> 

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


                                <?php 
                                if($_SESSION["portal_lang"] == "english")
                                {
                                    ?>
                                    <li>
                                        <div class="lang-site">
                                            <span>EN</span><em class="fas fa-angle-up"></em>
                                            <ul class="multi-lang">
                                                <li>
                                                    <a href="javascript:;" onclick="window.location = a_lang;">TH</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> 
                                    <?php
                                }
                                else 
                                {
                                    ?>
                                    <li>
                                        <div class="lang-site">
                                            <span>TH</span><em class="fas fa-angle-up"></em>
                                            <ul class="multi-lang">
                                                <li>
                                                    <a href="javascript:;" onclick="window.location = b_lang;">EN</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> 
                                    <?php 
                                }
                                ?>

                                
                                
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
            <div class="col-lg-12">
                <div class="menu-main-wrapper">
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
                    <ul class="sub-menu-main">
                        <li class="list">
                            <a href="home-2" title="หน้าหลัก">
                                <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
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
                            <a href="about-2" title="เกี่ยวกับหน่วยงาน">เกี่ยวกับหน่วยงาน</a>
                        </li>
                        <li class="list">
                            <a href="news-2" title="ข่าวสาร">ข่าวสาร</a>
                        </li>
                        <li class="list">
                            <a href="album-2" title="ภาพกิจกรรม">ภาพกิจกรรม</a>
                        </li> 
                        <li class="list">
                            <a href="video-2" title="วิดิทัศน์">วิดิทัศน์</a>
                        </li> 
                        <li class="list">
                            <a href="download-2" title="ดาวน์โหลดคู่มือ">ดาวน์โหลดคู่มือ</a>
                        </li>
                        <li class="list">
                            <a href="calendar-2" title="ปฏิทินกิจกรรม">ปฏิทินกิจกรรม</a>
                        </li>
                        <li class="list">
                            <a href="questionnaire-2" title="การรับฟังปัญหา/ข้อคิดเห็น">การรับฟังปัญหา/ข้อคิดเห็น</a>
                        </li> 
                        <li class="list">
                            <a href="faq-2" title="คำถามที่พบบ่อย">คำถามที่พบบ่อย</a>
                        </li> 
                        <li class="list">
                            <a href="contact-2" title="ติดต่อสอบถาม">ติดต่อสอบถาม</a>
                        </li> 
                    </ul>
                    <div class="clearboth"></div>
                </div>
            </div>
        </div>

        <div class="row bg-color-menutop">
            <div class="col-lg-12">
                
                <div class="menu-top-wrapper">
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
                    <em class="fas fa-bars"></em>
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
                        <a href="http://siamedigital.com:8002/" target="_blank">
                            <div class="icon-bkk">
                                <img src="{{ asset('template2/assets/images/icons/icon-bkk.png')}}" alt="icon bangkok">
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





