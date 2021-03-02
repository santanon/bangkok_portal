<?php 
$_SESSION['arr_script_slide_b'] = $_SESSION['arr_script_slide_b']."slide_banner_".$this_box_real_id."|";
?>
<!-- BANNER -->
<div id="banner" data-id="7_<?php echo $this_box_id ?>" class="section-content bg-color-white">
                <div class="group-mange-section">
                    <div class="manage-tools"> 
                        <ul>
                            <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/add?m=banner');">เพิ่มข้อมูล</a></li>
                            <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/set_cat?m=banner&id=<?php echo @${"data_box_".$r->box_number."_".$this_box_real_id}[0]->cat_id ?>');">จัดการข้อมูล</a></li>
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
                                        ?>แบนเนอร์ลิงค์<?php
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
                                    ?><a href="<?php echo ${"data_box_link_".$r->box_number."_".$this_box_real_id} ?>" class="btn btn-outline-dark">แบนเนอร์ลิงค์ทั้งหมด</a><?php
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
                                <div class="slide-wrapper" id="action-slide_banner_<?php echo $this_box_real_id ?>">
                                    <div class="slide-arrow slide-prev"></div>
                                    <div class="slide-arrow slide-next"></div>
                                </div>
                            </div>
                            <div class="group-slide">
                                <ul id="slide_banner_<?php echo $this_box_real_id ?>" class="list-item">


<?php 
foreach(${"data_box_".$r->box_number."_".$this_box_real_id} as $r_sub)
{
    ?>
    <li>
        <div class="item -album">
            <div class="cover-album" style="background-image: url('<?php echo $CustomHelper->get_file_form_code($r_sub->img1,0) ?>');">
                <a href="<?php echo $CustomHelper->L($r_sub->url,$r_sub->en_url) ?>" target="<?php echo $r_sub->url_target ?>"><div class="bg-layer"></div></a>
                <!-- <div class="top-album">
                    <div class="source">
                        <span>FACEBOOK</span>
                    </div>
                </div> -->
                <div class="caption-album show bg-color-primary-opacity">
                    <span><?php echo $CustomHelper->L($r_sub->title,$r_sub->title) ?></span>
                </div>
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