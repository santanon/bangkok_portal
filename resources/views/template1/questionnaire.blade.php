<?php 
$_SESSION['arr_script_slide_q'] = $_SESSION['arr_script_slide_q']."slide_question_".$this_box_real_id."|";
?>
<!-- QUESTIONNAIRE -->
<div id="questionnaire" data-id="8_<?php echo $this_box_id ?>" class="section-content">
                <div class="group-mange-section">
                    <div class="manage-tools">
                        <ul>
                            <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/add?m=question');">เพิ่มข้อมูล</a></li>
                            <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/set_cat?m=question&id=<?php echo @${"data_box_".$r->box_number."_".$this_box_real_id}[0]->cat_id ?>');">จัดการข้อมูล</a></li>
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
                                        echo @$CustomHelper->L(${"data_box_cat_".$r->box_number."_".$this_box_real_id}[0]->title,${"data_box_cat_".$r->id."_".$this_box_real_id}[0]->en_title);
                                    }
                                    else 
                                    {
                                        ?>แบบสอบถาม<?php
                                    }
                                    
                                     ?></h3>
                                            <p class="desc color-secondary"><?php 
                                            
                                            if($this_box_id != '')
                                            {
                                                echo @$CustomHelper->L(${"data_box_cat_".$r->box_number."_".$this_box_real_id}[0]->en_title,"");
                                            }
                                            
                                             ?> </p> 
                            </div>
                            <div class="group-gotoall">
                                <?php 
                                if(isset(${"data_box_link_".$r->box_number."_".$this_box_real_id}) && ${"data_box_link_".$r->box_number."_".$this_box_real_id} != '')
                                {
                                    ?><a href="<?php echo ${"data_box_link_".$r->box_number."_".$this_box_real_id} ?>" class="btn btn-outline-dark">แบบสอบถามทั้งหมด</a><?php
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
                                <div class="slide-wrapper" id="action-slide_question_<?php echo $this_box_real_id ?>">
                                    <div class="slide-arrow slide-prev"></div>
                                    <div class="slide-arrow slide-next"></div>
                                </div>
                            </div>
                            
                            <div class="group-slide">
                                <div class="list-item" id="slide_question_<?php echo $this_box_real_id ?>"> 
<?php 
$this_loop = 1;
if(isset(${"data_box_".$r->box_number."_".$this_box_real_id}))
{
    foreach(${"data_box_".$r->box_number."_".$this_box_real_id} as $r_sub)
    {  
        $info_url = "#";
        if(isset(${"data_box_link_".$r->box_number."_".$this_box_real_id}) && ${"data_box_link_".$r->box_number."_".$this_box_real_id} != '')
        {
            $info_url = ${"data_box_link_".$r->box_number."_".$this_box_real_id}."/0/info/".$r_sub->id."/question";
        } 
        ?>  
        <div class="item -question">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="left bg-color-primary active">
                        <div class="progress-content">
                            <!-- Progress bar 1 -->
                            <div class="progress" data-percentage="74">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">
                                    <div>74%</div>
                                </div>
                            </div>
                            <!-- END -->
                            <div class="total-people">155 <span>คน</span></div>
                        </div>
                        <div class="text-onbottom bg-color-secondary">ผู้ตอบคำถาม</div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="right">       
                        <div class="text-ontop color-secondary">
                            View : 340
                        </div>                                         
                        <div class="text-content">
                            <a href="<?php echo $info_url ?>">
                                <?php echo $CustomHelper->L($r_sub->title,$r_sub->title) ?>
                            </a>
                        </div>

                        <div class="text-onbottom">
                            <div class="social-wrapper">
                                <ul class="d-flex align-items-center">
                                    <li class="facebook d-flex align-items-center not-hover">
                                    <img src="{{ asset('template1/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> <span class="color-secondary">5</span>
                                    </li>
                                    <li class="twitter d-flex align-items-center not-hover">
                                        <img src="{{ asset('template1/assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span>
                                    </li>
                                    <li class="line d-flex align-items-center not-hover">
                                        <img src="{{ asset('template1/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
} 
?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>