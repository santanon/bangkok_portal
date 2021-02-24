<div class="group-mange-section no-mg right-0">
    <!--<div class="manage-tools">
        <ul>
            <li class="order-list">จัดการ</li>
            <li class="order-list">ลบ</li>
            <li class="order-list">ซ่อน</li>
            <li class="order-list order-close">ปิด</li>
        </ul>
    </div> -->
    <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/list?m=home_bg');">
        <div class="manage-edit">
            <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
        </div>
    </a>
</div>
 

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