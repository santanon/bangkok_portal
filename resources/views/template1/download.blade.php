<?php 
$_SESSION['arr_script_slide_d'] = $_SESSION['arr_script_slide_d']."slide_download_".$this_box_real_id."|";
?>
<!-- DOWNLOAD -->
<div id="download" data-id="6_<?php echo $this_box_id ?>" class="section-content">
<div class="group-mange-section">
    <div class="manage-tools">
        <ul>
            <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/add?m=download');">เพิ่มข้อมูล</a></li>
            <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/set_cat?m=download&id=<?php echo @${"data_box_".$r->box_number."_".$this_box_real_id}[0]->cat_id ?>');">จัดการข้อมูล</a></li>
            <li class="order-list order-close">ปิด</li>
        </ul> 
    </div> 
    <div class="manage-dragdrop">
        <img src="{{ asset('template1/assets/images/icons/icon-dragdrop.svg')}}" alt="icon" title="Drag and Drop">
    </div>
    <div class="manage-edit">
        <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
    </div>
</div>
<div class="container">
    <div class="inner-content">
        <div class="top-content">
            <div class="group-text">

                <h3 class="title color-primary"><?php
        
                    if($this_box_id != '')
                    {
                        echo $CustomHelper->L(${"data_box_cat_".$r->box_number."_".$this_box_real_id}[0]->title,${"data_box_cat_".$r->box_number."_".$this_box_real_id}[0]->en_title);
                    }
                    else 
                    {
                        ?>ดาวน์โหลด<?php
                    }
                    
                        ?></h3>
                            <p class="desc color-secondary"><?php 
                            
                            if($this_box_id != '')
                            {
                                echo $CustomHelper->L(${"data_box_cat_".$r->box_number."_".$this_box_real_id}[0]->en_title,"");
                            }
                            
                                ?> </p> 
            </div>
            <div class="group-gotoall">

                <?php 
                if(isset(${"data_box_link_".$r->box_number."_".$this_box_real_id}) && ${"data_box_link_".$r->box_number."_".$this_box_real_id} != '')
                {
                    ?><a href="<?php echo ${"data_box_link_".$r->box_number."_".$this_box_real_id} ?>" class="btn btn-outline-dark">ดาวน์โหลดทั้งหมด</a><?php
                }
                else
                {
                    ?><?php
                }
                ?>  
            </div>
        </div>
        <div class="main-content">
            <div class="action-slide dis-flex justify-end">
                <div class="slide-wrapper" id="action-slide_download_<?php echo $this_box_real_id ?>">
                    <div class="slide-arrow slide-prev"></div>
                    <div class="slide-arrow slide-next"></div>
                </div>
            </div>
            
            <div class="group-slide">
                <ul id="slide_download_<?php echo $this_box_real_id ?>" class="list-item">

                    <?php
                    foreach(${"data_box_".$r->box_number."_".$this_box_real_id} as $r_sub)
                    {
                        ?>
                        <li>
                            <div class="item -download">
                                <div class="box-full bg-color-primary">
                                    <a target="_blank" href="<?php echo $CustomHelper->get_file_form_code($CustomHelper->L($r_sub->file1,$r_sub->en_file1),0); ?>" download>
                                        <div class="icon-content">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="42.2px" height="42.2px" viewBox="0 0 42.2 42.2" style="enable-background:new 0 0 42.2 42.2;" xml:space="preserve">                                                 
                                                <g>
                                                    <path class="st0" d="M34.6,15.7L22.9,4.1H11.8C9.5,4.1,7.6,6,7.6,8.3v25.6c0,2.3,1.9,4.2,4.2,4.2h4.5h14c2.3,0,4.2-1.9,4.2-4.2
                                                        V15.7z"/>
                                                    <path class="st1" d="M34.6,15.7h-7.6c-2.2,0-4-1.8-4-4V4.1"/>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="text-content">
                                            <?php echo $CustomHelper->L($r_sub->title,$r_sub->en_title); ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <?php 
                    }
                    ?>

                </ul>
            </div>
        </div>
    </div>
</div>
</div>