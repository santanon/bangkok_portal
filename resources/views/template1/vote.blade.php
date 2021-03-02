<!-- VOTE -->
<div id="vote" data-id="9_<?php echo $this_box_id ?>" class="section-content bg-color-white">
    <div class="group-mange-section">
        <div class="manage-tools">
            <ul>
                <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/add?m=poll');">เพิ่มข้อมูล</a></li>
                <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/set_cat?m=poll&id=<?php echo @${"data_box_".$r->box_number."_".$this_box_real_id}[0]->cat_id ?>');">จัดการข้อมูล</a></li>
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
                            ?>โพลล์/โหวต<?php
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
                        ?><a href="<?php echo ${"data_box_link_".$r->box_number."_".$this_box_real_id} ?>" class="btn btn-outline-dark">หัวข้อโหวตทั้งหมด</a><?php
                    }
                    else
                    {
                        ?><?php
                    }
                    ?>  
                </div>
            </div>

 

            <div class="main-content">
                <div class="group-vote">
                    <div class="score-wrapper bg-color-primary">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="text-score text-center">
                                    <div class="num-vote">1.6K</div>
                                    <div class="text-vote">ผู้โหวต</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8 col-8">
                                <div class="percent-voter">
                                    <div class="progress">
                                        <div class="progress-bar bg-color-secondary" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">(75%)<br/><span>ผู้โหวต</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="text-score text-center">
                                    <div class="num-vote">3.6K</div>
                                    <div class="text-vote">ผู้เข้าชม</div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-8 col-8">
                                <div class="text-score text-center">
                                    <div class="num-vote">200</div>
                                    <div class="text-vote">ออนไลน์</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="question-choice">
                         <form action=""> 
                        @csrf <!-- {{ csrf_field() }} -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="text-question"> 
                                        <?php echo $CustomHelper->L(${"data_box_".$r->box_number."_".$this_box_real_id}[0]->title,${"data_box_".$r->box_number."_".$this_box_real_id}[0]->en_title) ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="choice-question">
                                        <ul>
                                            <?php 
                                            for($i=1;$i<=10;$i++)
                                            {
                                                if($CustomHelper->L(${"data_box_".$r->box_number."_".$this_box_real_id}[0]->{'c'.$i},${"data_box_".$r->box_number."_".$this_box_real_id}[0]->{'en_c'.$i}) != '')
                                                {
                                                    ?>
                                                    <li>
                                                        <div class="input-custom">
                                                            <div class="custom-control custom-switch">
                                                                <input type="radio" class="custom-control-input" id="customSwitch<?php echo $i ?>" name="Ans_Vote" value="<?php echo $i ?>"> 
                                                                <label class="custom-control-label" for="customSwitch<?php echo $i ?>"><?php echo $CustomHelper->L(${"data_box_".$r->box_number."_".$this_box_real_id}[0]->{'c'.$i},${"data_box_".$r->box_number."_".$this_box_real_id}[0]->{'en_c'.$i}) ?></label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php
                                                }
                                               
                                            }
                                            ?> 
                                        </ul>
                                        <div class="btn-custom width-full d-flex justify-content-end">
                                            <button class="btn btn-primary" type="button">VOTE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social-wrapper">
                            <ul class="d-flex align-items-center">
                                <li class="facebook d-flex align-items-center not-hover">
                                    <img src="{{ asset('template1/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"><span class="color-secondary">5</span> 
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
                    <div class="top-content">
                        <div class="group-text">
                            <h3 class="title color-primary">ผลโหวต</h3>
                        </div>
                    </div>

                    <div class="score-choice">
                        <div class="row">

                            <?php 
                            for($i=1;$i<=10;$i++)
                            {
                                if($CustomHelper->L(${"data_box_".$r->box_number."_".$this_box_real_id}[0]->{'c'.$i},${"data_box_".$r->box_number."_".$this_box_real_id}[0]->{'en_c'.$i}) != '')
                                {
                                    ?>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="text-score">
                                            <div class="num-vote color-primary"><?php echo ${"data_box_".$r->box_number."_".$this_box_real_id}[0]->{'p'.$i} ?></div>
                                            <div class="text-vote"><?php echo $CustomHelper->L(${"data_box_".$r->box_number."_".$this_box_real_id}[0]->{'c'.$i},${"data_box_".$r->box_number."_".$this_box_real_id}[0]->{'en_c'.$i}) ?></div>
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
</div>