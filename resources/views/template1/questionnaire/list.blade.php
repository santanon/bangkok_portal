<div class="section-content">
    <div class="group-mange-section">
        <div class="manage-tools">
            <ul>
                <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/add?m=question_cat');">เพิ่มข้อมูล</a></li>
                <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/list?m=question_cat');">จัดการข้อมูล</a></li>
                <li class="order-list order-close">ปิด</li>
            </ul>
        </div> 
        <div class="manage-edit">
            <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="แก้ไข">
        </div>
        <!--<div class="manage-add">
            <img src="{{ asset('template1/assets/images/icons/icon-add.svg')}}" alt="เพิ่ม">
        </div>-->
    </div>
                <div class="container">
                    <div class="inner-content">
                        <div class="top-content">
                            <div class="group-text">
                                <h3 class="title color-primary"><?php echo $CustomHelper->L($r_title,$r_en_title) ?></h3>
                                <p class="desc color-secondary"><?php echo $CustomHelper->L($r_en_title,$r_title) ?></p>
                            </div>
                        </div>


                        <?php 
                        if($r_data_cat_num_rows > 0)
                        {
                            ?>
                            <div class="search-content">
                                <form method="post" action="<?php echo base_url() ?><?php echo $mod ?>/page/<?php echo $r_page_type ?>/<?php echo $r_page_id ?>/<?php echo $r_data_title ?>">
                                    @csrf <!-- {{ csrf_field() }} -->
                                    <div class="row">
                                        <div class="col-10 col-sm-6">
                                            <div class="input-custom inp-search">
                                                <input class="style-input" type="text" name="" placeholder="คำค้นหา" />
                                            </div>
                                        </div>
                
                
                                        <?php 
                                        
                                        /*
                                        <div class="col-lg-3">
                                            <select name="cat" style="width:350px;">
                                                <?php
                                                foreach($r_data_cat as $r)
                                                {
                                                    ?>
                                                    <option value="<?php echo $r->id ?>" <?php if($r_data_cat_this == $r->id){ ?> selected="selected" <?php } ?>><?php echo $CustomHelper->L($r->title,$r->title); ?></option>
                                                    <?php	
                                                }
                                                ?>
                                                </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <input name="mod_search" id="mod_search" type="text" style="width:300px" placeholder='- <?php echo $TextLanguage->lang('all') ?> -' value="<?php echo $r_data_search ?>" /> <input name="search" value="<?php echo $TextLanguage->lang('search') ?>" type="submit"> <?php 
                                                                
                                            if($r_data_start_search == '1')
                                            {
                                                ?> <input type="submit" name="reset" value="<?php echo $TextLanguage->lang('reset') ?>" onclick="if(!confirm('<?php echo $TextLanguage->lang('confirm') ?>?')){return false;}" /> <?php
                                            }
                                            
                                            ?>
                                        </div>
                                        <!--<div class="col-lg-3">
                                            <div class="input-custom inp-calendar">
                                                <input id="start_date" class="style-input" type="text" name="datefilter" placeholder="จากวันที่" autocomplete="off" data-provide="datepicker" data-date-language="th-th" />
                                                <div class="icon-calendar"><em class="far fa-calendar"></em></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="input-custom inp-calendar">
                                                <input id="end_date" class="style-input" type="text" name="datefilter" placeholder="ถึงวันที่" autocomplete="off" data-provide="datepicker" data-date-language="th-th" />
                                                <div class="icon-calendar"><em class="far fa-calendar"></em></div>
                                            </div>
                                        </div>-->
                                        */ ?>
                 
                                        <div class="col-lg-1">
                                            <div class="btn-search ">
                                                <button type="submit" class="icon-search bg-color-primary">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        width="20px" height="20px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                                    <g>
                                                        <circle class="st0" cx="9.3" cy="9.3" r="7.3"/>
                                                        <line class="st0" x1="14.9" y1="14.9" x2="18" y2="18"/>
                                                    </g>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="start_search" value="1" /> 
                                </form>
                            </div> 
                            <?php
                        }
                        ?> 




                        <div class="main-content"> 
                            <div class="group-slide group-list">
                                <div class="list-item">

                                    <?php 
                                    foreach($r_data_cat as $r)
                                    {
                                        ?>
                                        <div class="item -question">
                                        <div class="group-mange-section">
                                            <div class="manage-tools">
                                                <ul>
                                                    <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/edit?m=question_cat&id=<?php echo $r->id ?>');">แก้ไข</a></li> 
                                                    <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/set_status_hide?m=question_cat&id=<?php echo $r->id ?>');">ซ่อน</a></li>
                                                    <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/delete?m=question_cat&id=<?php echo $r->id ?>');">ลบ</a></li> 
                                                    <li class="order-list order-close">ปิด</li>
                                                </ul>
                                            </div> 
                                            <div class="manage-edit">
                                                <img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-edit.svg" alt="icon">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 col-lg-3 col-xl-3">
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
                                            <div class="col-sm-8 col-lg-9 col-xl-9">
                                                <div class="right">       
                                                    <div class="text-ontop color-secondary">
                                                        View : 340
                                                    </div>                                         
                                                    <div class="text-content">
                                                        <a href="<?php echo base_url() ?><?php echo $mod ?>/page/<?php echo $r_page_type ?>/<?php echo $r_page_id ?>/<?php echo $r_data_title ?>/<?php echo $r_data_this_page-1 ?>/info/<?php echo $r->id ?>/<?php echo $CustomHelper->remove_to_url($r->title,$r->en_title); ?>">
                                                            <?php echo $CustomHelper->L($r->title,$r->en_title); ?>
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
                                    ?>

                                    




                                </div>
                            </div>

                            <div class="pagination-custom d-flex justify-content-end align-items-center">
                                <div class="all-page">
                                    Page <span>1</span> of <span>120</span>
                                </div>
                                <div class="item-page d-flex justify-content-end align-items-center">
                                    <div class="slide-prev disabled"></div>
                                    <div class="input-custom">
                                        <input type="text" class="style-input" value="1">
                                    </div>
                                    <div class="slide-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>