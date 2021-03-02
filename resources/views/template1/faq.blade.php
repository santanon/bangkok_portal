<?php 
$_SESSION['arr_script_slide_f'] = $_SESSION['arr_script_slide_f']."slide_faq_".$this_box_real_id."|";
?>
<!-- คำถามที่พบบ่อย -->
<div id="faq" data-id="2_<?php echo $this_box_id ?>" class="section-content">
                <div class="group-mange-section">
                    <div class="manage-tools">
                        <ul>
                            <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/add?m=faq');">เพิ่มข้อมูล</a></li>
                            <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/set_cat?m=faq&id=<?php echo @${"data_box_".$r->box_number."_".$this_box_real_id}[0]->cat_id ?>');">จัดการข้อมูล</a></li>
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
                                        ?>คำถามที่พบบ่อย<?php
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
                                    ?><a href="<?php echo ${"data_box_link_".$r->box_number."_".$this_box_real_id} ?>" class="btn btn-outline-dark">คำถามทั้งหมด</a><?php
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
                                <div class="slide-wrapper" id="action-slide_faq_<?php echo $this_box_real_id ?>">
                                    <div class="slide-arrow slide-prev"></div>
                                    <div class="slide-arrow slide-next"></div>
                                </div>
                            </div>
                            
                            <div class="group-slide">
                                <div class="list-item" id="slide_faq_<?php echo $this_box_real_id ?>"> 
<?php
foreach(${"data_box_".$r->box_number."_".$this_box_real_id} as $r_sub)
{
    ?>
    <div class="item">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="left">
                    <div class="icon-content bg-color-primary">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            width="42.2px" height="42.2px" viewBox="0 0 42.2 42.2" style="enable-background:new 0 0 42.2 42.2;" xml:space="preserve">
                        <path class="st0" d="M5.1,21c0,8.6,6.9,15.5,15.4,16c5.7,0.4,11.4-1.3,16.5-3.9c-2.8-2.8-2.1-6.8-1.3-9.6c1.1-3.3,1.1-7-0.5-10.1
                            c-1.1-2.1-2.7-4-4.6-5.4c-0.7-0.6-2.4-1.4-2.4-1.4c-2.1-1-4.5-1.6-7-1.6c-9,0-16.2,7.3-16.2,16.2V21z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="right">
                    <div class="text-content">
                        <?php 
                        if(isset(${"data_box_link_".$r->box_number."_".$this_box_real_id}) && ${"data_box_link_".$r->box_number."_".$this_box_real_id} != '')
                        {
                            ?><a href="<?php echo ${"data_box_link_".$r->box_number."_".$this_box_real_id} ?>?i=<?php echo $r_sub->id ?>">
                            <?php echo $CustomHelper->L($r_sub->title,$r_sub->en_title); ?>
                            </a><?php
                        }
                        else
                        {
                            ?><a href="javascript:;">
                            <?php echo $CustomHelper->L($r_sub->title,$r_sub->en_title); ?>
                            </a><?php
                        }
                        ?>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
 
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>