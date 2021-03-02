<div class="group-mange-section no-mg right-0"> 
    <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/edit?m=<?php echo $this_manage ?>&id=<?php echo $r_id ?>');">
        <div class="manage-edit">
             <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
        </div>
    </a>
</div>
 
<ul class="list-banner">

    <?php
    if(true)
    {
        $r_title_1 = '';
        $r_title_2 = '';

        $r_en_title_1 = '';
        $r_en_title_2 = '';
        ?>
        <li>
        <div class="bg-layer"></div>
        <div class="banner" style="background-image: url('<?php echo $CustomHelper->get_file_form_code($main_bg,0) ?>');"></div>
        <div class="item-Onbanner-outer">3
            <div class="item-Onbanner-inner">
                <div class="list">
                    <h2 class="title-banner"><?php echo $CustomHelper->get_text_form_code($main_bg,0,$_SESSION['portal_lang']) ?></h2>
                    <p class="desc-banner">&nbsp;</p> 
                </div>
            </div>
        </div>
    </li>
    <?php   
    }
    ?>   
</ul>