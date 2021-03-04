<div class="group-mange-section no-mg right-0">
    <div class="manage-tools">
        <ul>
            <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/add?m=home_bg');">เพิ่มข้อมูล</a></li>
            <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/list?m=home_bg');">จัดการข้อมูล</a></li>
            <li class="order-list order-close">ปิด</li>
        </ul>
    </div>
    <a href="javascript:;">
        <div class="manage-edit">
            <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
        </div>
    </a>
</div>
 
<?php /*
<ul class="list-banner">

    <?php
    foreach($_SESSION['portal_website_bg_' . $mod . '_list'] as $r)
    {
        if(strpos($r->title,'|') > -1)
        {
            $arr_r_title = explode('|',$r->title);
            $r_title_1 = $arr_r_title[0];
            $r_title_2 = $arr_r_title[1];
        }
        else
        {
            $r_title_1 = $r->title;
            $r_title_2 = '';
        } 
        if(strpos($r->en_title,'|') > -1)
        {
            $arr_r_en_title = explode('|',$r->en_title);
            $r_en_title_1 = $arr_r_en_title[0];
            $r_en_title_2 = $arr_r_en_title[1];
        }
        else
        {
            $r_en_title_1 = $r->en_title;
            $r_en_title_2 = '';
        }  
        ?>
        <li>
        <div class="bg-layer"></div>
        <div class="banner" style="background-image: url('<?php echo $CustomHelper->get_file_form_code($r->img1,0) ?>');"></div>
        <div class="item-Onbanner-outer">
            <div class="item-Onbanner-inner">
                <div class="list">
                    <h2 class="title-banner"><?php echo $CustomHelper->L($r_title_1,$r_en_title_1) ?></h2>
                    <p class="desc-banner"><?php echo $CustomHelper->L($r_title_2,$r_en_title_2) ?></p>
                    <?php 
                    if($CustomHelper->L($r->url,$r->en_url) != '')
                    { 
                        ?>
                        <div class="action-link">
                            <a target="<?php echo $r->url_target ?>" href="<?php echo $CustomHelper->L($r->url,$r->en_url) ?>">รายละเอียดเพิ่มเติม</a>
                        </div> 
                        <?php 
                    }
                    ?> 
                </div>
            </div>
        </div>
    </li>
    <?php   
    }
    ?>   
</ul>
*/ ?>

<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        
        <?php /*<div class="swiper-slide">
            <!-- vdo -->
            <div class="group-banner-vdo">
                <div class="list">
                    <video class="item-video" loop="loop" autoplay="autoplay" muted="muted" playsinline="playsinline" preload="metadata" id="myVideo">    
                        <source src="{{ asset('Video/ocean.mp4')}}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div> */ ?>


<?php
    foreach($_SESSION['portal_website_bg_' . $mod . '_list'] as $r)
    {
        if(strpos($r->title,'|') > -1)
        {
            $arr_r_title = explode('|',$r->title);
            $r_title_1 = $arr_r_title[0];
            $r_title_2 = $arr_r_title[1];
        }
        else
        {
            $r_title_1 = $r->title;
            $r_title_2 = '';
        } 
        if(strpos($r->en_title,'|') > -1)
        {
            $arr_r_en_title = explode('|',$r->en_title);
            $r_en_title_1 = $arr_r_en_title[0];
            $r_en_title_2 = $arr_r_en_title[1];
        }
        else
        {
            $r_en_title_1 = $r->en_title;
            $r_en_title_2 = '';
        }  
        ?>
        <div class="swiper-slide"> 
            <div class="group-banner-img">
                <div class="bg-layer"></div>
                <div class="banner" style="background-image: url('<?php echo $CustomHelper->get_file_form_code($r->img1,0) ?>');"> 
                </div>
                <div class="item-Onbanner-outer">
                    <div class="item-Onbanner-inner">
                        <div class="list">
                            <h2 class="title-banner"><?php 
                                if(trim($CustomHelper->L($r_title_1,$r_en_title_1)) != 'Template')
                                {
                                    echo $CustomHelper->L($r_title_1,$r_en_title_1);
                                }
                                 ?></h2>
                            <p class="desc-banner"><?php echo $CustomHelper->L($r_title_2,$r_en_title_2) ?></p>
                            <?php 
                            if($CustomHelper->L($r->url,$r->en_url) != '' && $CustomHelper->L($r->url,$r->en_url) != '0' && $CustomHelper->L($r->url,$r->en_url) != '#')
                            { 
                                ?>
                                <div class="action-link">
                                    <a target="<?php echo $r->url_target ?>" href="<?php echo $CustomHelper->L($r->url,$r->en_url) ?>">รายละเอียดเพิ่มเติม</a>
                                </div> 
                                <?php 
                            }
                            ?>  
                        </div>
                    </div>
                </div>
            </div>

            <?php /*
            <!-- if add audio -->
            <audio id="audio" controls> 
                <source src="http://traffic.libsyn.com/altmod/indiefeed_65daysofstatic_px3.mp3" />
                <source src="http://www.tonycuffe.com/mp3/tail%20toddle.mp3" />
                <source src="http://www.tonycuffe.com/mp3/girlwho.mp3" />    
            </audio> */ ?>


        </div>
        <?php   
    }
    ?>  
         
    </div>
    <!-- Add Scrollbar -->
    <div class="swiper-scrollbar"></div>

    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>


</div>