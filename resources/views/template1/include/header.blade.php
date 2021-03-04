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
    <span>EN</span><em class="fas fa-angle-up"></em>
    <ul class="multi-lang">
        <li>
            <a href="javascript:;" onclick="window.location = a_lang;">TH</a>
        </li>
    </ul>
    <?php
}
else 
{
    ?>
    <span>TH</span><em class="fas fa-angle-up"></em>
    <ul class="multi-lang">
        <li>
            <a href="javascript:;" onclick="window.location = b;">EN</a>
        </li>
    </ul>
    <?php 
}
?>
   
        <div class="canvas-lang">
            <ul>
                <li class="lang active">
                    <a href="javascript:;" onclick="window.location = a_lang;">TH</a>
                </li>
                <li class="lang">
                    <a hhref="javascript:;" onclick="window.location = b;>EN</a>
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
                        <a href="http://siamedigital.com:8002/login" target="_blank">
                            <div class="icon-top">
                                <img src="{{ asset('template1/assets/images/icons/icon-signin-mobile.svg')}}" alt="icon">
                            </div>
                            <div class="text-top">เข้าสู่ระบบ</div>
                        </a>
                    </div>
                    
                </li>
                <li class="">
                    <div class="group-canvas-top">
                        <a href="http://siamedigital.com:8002/register" target="_blank">
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
                            <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
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
                <div class="bg-color-primary">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between">
                            <div class="account-wrapper">
                                <ul>
                                    <li>
                                        <a href="http://siamedigital.com:8002/register" target="_blank">
                                            <span class="icon-register"></span>Register
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://siamedigital.com:8002/login" target="_blank">
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




                                    <li>
                                        <div class="lang-site">

                                            <?php 
                                            if($_SESSION["portal_lang"] == "english")
                                            {
                                                ?>
                                                <span>EN</span><em class="fas fa-angle-up"></em>
                                                <ul class="multi-lang">
                                                    <li>
                                                        <a href="javascript:;" onclick="window.location = a_lang;">TH</a>
                                                    </li>
                                                </ul>
                                                <?php
                                            }
                                            else 
                                            {
                                                ?>
                                                <span>TH</span><em class="fas fa-angle-up"></em>
                                                <ul class="multi-lang">
                                                    <li>
                                                        <a href="javascript:;" onclick="window.location = b;">EN</a>
                                                    </li>
                                                </ul>
                                                <?php 
                                            }
                                            ?>
                                            
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
                            <div class="manage-tools">
                                <ul>
                                    <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/add?m=top_menu');">เพิ่มข้อมูล</a></li>
                            <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/list?m=top_menu');">จัดการข้อมูล</a></li>
                                    <li class="order-list order-close">ปิด</li>
                                </ul>
                            </div>
                            <a href="javascript:;">
                                <div class="manage-edit">
                                    <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                </div>
                            </a>
                        </div>
                        <div class="menu-top-wrapper">
                            <ul> 
                                <?php
                                foreach($_SESSION['portal_website_sub_menu_' . $mod . '_list'] as $r)
                                {
                                    ?>
                                    <li>
                                    <div class="list-menu">
                                        <a target="<?php if($r->url_target == '') { echo '_top'; } else if($r->url_target == '0') { echo '_top'; } else { echo $r->url_target; } ?>" title="<?php echo $CustomHelper->L($r->title,$r->en_title) ?>" href="<?php echo base_url() ?><?php echo $mod ?>/page/top/<?php echo $r->id ?>/<?php echo $CustomHelper->remove_to_url($r->title,$r->en_title) ?>"><?php echo $CustomHelper->L($r->title,$r->en_title) ?></a>
                                    </div>
                                    </li>  
                                    <?php
                                        /*
                                        if($r->page_type == 'url')
                                        {
                                            ?>
                                            <li><span class="fontfacetext"><a href="<?php echo $CustomHelper->L($r->url,$r->en_url) ?>" target="<?php echo $r->url_target ?>"><?php echo $CustomHelper->L($r->title,$r->en_title) ?></a></span></li> 
                                            <?php		
                                        }
                                        else
                                        {
                                            ?>
                                            <li><span class="fontfacetext"><a href="<?php echo base_url() ?><?php echo $mod ?>/page/top/<?php echo $r->id ?>/<?php echo $ci_obj->util->remove_to_url($r->title,$r->en_title) ?>" target="_top"><?php echo $CustomHelper->L($r->title,$r->en_title) ?></a></span></li> 
                                            <?php		
                                        }
                                        */	 
                                }
                                ?>   
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
                @csrf <!-- {{ csrf_field() }} -->
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
                    <div class="manage-tools">
                        <ul>
                            <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/add?m=main_menu');">เพิ่มข้อมูล</a></li>
                            <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/list?m=main_menu');">จัดการข้อมูล</a></li>
                            <li class="order-list order-close">ปิด</li>
                        </ul>
                    </div>
                    <a href="javascript:;">
                        <div class="manage-edit">
                            <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
                        </div>
                    </a>
                </div>
                <div class="menu-main-wrapper">
                    <ul class="sub-menu-main">











<?php
foreach($_SESSION['portal_website_main_menu_' . $mod . '_list'] as $r)
{ 
    if($r->page_type == 'group')
    {
        ?>
        <li class="list open">
            <a href="javascript;;" title="<?php echo $CustomHelper->L($r->title,$r->en_title) ?>"><?php echo $CustomHelper->L($r->title,$r->en_title) ?></a>
            <div class="sub-menu-lv2">
                <div class="container">
                    <div class="row">  
                    <?php
                    if(isset($_SESSION['portal_website_page_' . $r->id . '_' . $mod . '_list']))
                    {
                        foreach($_SESSION['portal_website_page_' . $r->id . '_' . $mod . '_list'] as $r_sub)
                        { 
                            if($r_sub->page_type == 'group')
                            {
                                ?>
                                <div class="col-lg-3">
                                    <div class="list-menu-lv2 open">
                                        <a href=""><?php echo $CustomHelper->L($r_sub->title,$r_sub->en_title) ?></a>
                                        <div class="sub-menu-lv3">
                                            <div class="container">
                                                <div class="row"> 
                                                    <?php 
                                                    if(isset($_SESSION['portal_website_page_' . $r->id . '_' . $r_sub->id . '_' . $mod . '_list']))
                                                    { 
                                                        $menu_cache_name = "menu_cache_f/".$r->id."_".$r_sub->id."_".$mod.".php"; 
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
                                                                $str_gen_1 = $str_gen_1.'<div class="col-lg-12">';
                                                                $str_gen_1 = $str_gen_1.'<div class="list-menu-lv3">';
                                                                $str_gen_1 = $str_gen_1.'<a title="'.$CustomHelper->L($r_sub_sub->title,$r_sub_sub->en_title).'" href="'.base_url().$mod.'/page/sub/'.$r_sub_sub->id.'/'.$CustomHelper->remove_to_url($r_sub_sub->title,$r_sub_sub->en_title).'" >'.$CustomHelper->L($r_sub_sub->title,$r_sub_sub->en_title).'</a>';
                                                                $str_gen_1 = $str_gen_1.'</div>';
                                                                $str_gen_1 = $str_gen_1.'</div>';	
                                                            }
                                                            ?>
                                                            [[<?php echo  $str_gen_1 ?>]]
                                                            --><?php
                                                            @file_put_contents($menu_cache_name,$str_gen_1); 
                                                        }
                            
                                                        include($menu_cache_name);
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            else
                            {
                                ?>
                                <div class="col-lg-3">
                                    <div class="list-menu-lv2">
                                        <a title="<?php echo $CustomHelper->L($r_sub->title,$r_sub->en_title) ?>" href="<?php echo base_url() ?><?php echo $mod ?>/page/sub/<?php echo $r_sub->id ?>/<?php echo $CustomHelper->remove_to_url($r_sub->title,$r_sub->en_title) ?>" target="<?php if($r_sub->url_target == '') { echo '_top'; } else if($r_sub->url_target == '0') { echo '_top'; } else { echo $r_sub->url_target; } ?>"><?php echo $CustomHelper->L($r_sub->title,$r_sub->en_title) ?></a>
                                    </div>
                                </div>
                                <?php
                            }
                        } 
                    }
                    ?>  
                    </div> 
                </div>
            </div>
        </li>
        <?php
    }
    else 
    {
        ?>
        <li class="list">
            <a title="<?php echo $CustomHelper->L($r->title,$r->en_title) ?>" href="<?php echo base_url() ?><?php echo $mod ?>/page/main/<?php echo $r->id ?>/<?php echo $CustomHelper->remove_to_url($r->title,$r->en_title) ?>" target="<?php if($r->url_target == '') { echo '_top'; } else if($r->url_target == '0') { echo '_top'; } else { echo $r->url_target; } ?>"><?php echo $CustomHelper->L($r->title,$r->en_title) ?></a>
        </li>
        <?php
    }
}
?>

 
                        <div class="clearboth"></div>
                    </ul>
                </div>
            </div>
        </div>

        <div class="group-link-mainbkk">
            <a href="http://siamedigital.com:8002/" target="_blank">
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
            <a href="/<?php echo $mod ?>" title="<?php echo $CustomHelper->get_text_form_code($_SESSION['portal_website_style_'.$mod.'_logo_img1'],0,$_SESSION["portal_lang"]) ?>">
                <img style="max-width: 500px;" src="<?php echo $CustomHelper->get_file_form_code($_SESSION['portal_website_style_'.$mod.'_logo_img1'],0) ?>" alt="<?php echo $CustomHelper->get_text_form_code($_SESSION['portal_website_style_'.$mod.'_logo_img1'],0,$_SESSION["portal_lang"]) ?>">
            </a>
        </div>
        <div id="menu_sticky" class="menu-sizefonts-wrapper">
            <div class="bar-menu" id="nav-expander">
                <div class="icon-menu">
                    <em class="fas fa-bars"></em>
                </div>
            </div>
            <div class="tools-sizefonts">
                <div class="sizefonts-wrapper">
                    <div id="reduce-size-md" class="reduce"></div>
                    <div id="normal-size-mb" class="normal active"></div>
                    <div id="increase-size-mb" class="increase"></div>
                </div>
            </div>
        </div>
    </div>

</div>




