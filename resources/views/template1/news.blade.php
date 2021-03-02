<!-- ข่าวสาร -->
<div id="news" data-id="1_<?php echo $this_box_id ?>" class="section-content">
    <div class="group-mange-section">
        <div class="manage-tools">
            <ul>
                <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/add?m=news');">เพิ่มข้อมูล</a></li>
                <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/set_cat?m=news&id=<?php echo @${"data_box_".$r->box_number."_".$this_box_real_id}[0]->cat_id ?>');">จัดการข้อมูล</a></li>
                <li class="order-list order-close">ปิด</li>
            </ul>
        </div>  
        <div class="manage-dragdrop">
            <img src="{{ asset('../../assets/images/icons/icon-dragdrop.svg')}}" alt="icon" title="Drag and Drop">
        </div>
        <a href="javascript:;">
            <div class="manage-edit">
                <img src="{{ asset('../../assets/images/icons/icon-edit.svg')}}" alt="icon">
            </div>
        </a>
    </div>
    <div class="container">
        <div class="inner-content">
            <div class="top-content">
                <div class="group-text"> 
                    <h3 class="title color-primary"><?php
  
                        if($this_box_id != '')
                        {
                            echo @$CustomHelper->L(${"data_box_cat_".$r->box_number."_".$this_box_real_id}[0]->title,${"data_box_cat_".$r->box_number."_".$this_box_real_id}[0]->en_title);
                        }
                        else 
                        {
                            ?>ข่าวสาร<?php
                        }
                        
                            ?></h3>
                        <p class="desc color-secondary"><?php 
                        
                        if($this_box_id != '')
                        {
                            echo @$CustomHelper->L(${"data_box_cat_".$r->box_number."_".$this_box_real_id}[0]->en_title,"");
                        }
                        ?> 
                        </p>  
                </div>
                <div class="group-gotoall"> 
                    <?php 
                    if(isset(${"data_box_link_".$r->box_number."_".$this_box_real_id}) && ${"data_box_link_".$r->box_number."_".$this_box_real_id} != '')
                    {
                        ?><a href="<?php echo ${"data_box_link_".$r->box_number."_".$this_box_real_id} ?>" class="btn btn-outline-dark">ข่าวสารทั้งหมด</a><?php
                    }
                    else
                    {
                        ?><?php
                    }
                    ?> 
                </div>
            </div>
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-6">

                        <!-- <div class="group-mange-section">
                            <div class="manage-tools">
                                <ul>
                                    <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/edit?m=news');">แก้ไข</a></li> 
                                    <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_hide">ซ่อน</a></li>
                                    <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_delete">ลบ</a></li> 
                                    <li class="order-list order-close">ปิด</li>
                                </ul>
                            </div>
                            <div class="manage-edit">
                                <img src="{{ asset('../../assets/images/icons/icon-edit.svg')}}" alt="icon">
                            </div> 
                        </div> --> 
                        <?php 
                        if(isset(${"data_box_".$r->box_number."_".$this_box_real_id}[0]->title))
                        {
                            ?>
                            <div class="main-news">
                                <div class="group-mange-section">
                                    <div class="manage-tools">
                                        <ul>
                                            <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/edit?m=news&id=<?php echo ${"data_box_".$r->box_number."_".$this_box_real_id}[0]->id ?>');">แก้ไข</a></li> 
                                            <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/set_status_hide?m=news&id=<?php echo ${"data_box_".$r->box_number."_".$this_box_real_id}[0]->id ?>');">ซ่อน</a></li>
                                            <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/delete?m=news&id=<?php echo ${"data_box_".$r->box_number."_".$this_box_real_id}[0]->id ?>');">ลบ</a></li> 
                                            <li class="order-list order-close">ปิด</li>
                                        </ul>
                                    </div>
                                    <div class="manage-edit">
                                        <img src="{{ asset('../../assets/images/icons/icon-edit.svg')}}" alt="icon">
                                    </div> 
                                </div>

                                <?php 
                                $info_url = "#";
                                if(isset(${"data_box_link_".$r->box_number."_".$this_box_real_id}) && ${"data_box_link_".$r->box_number."_".$this_box_real_id} != '')
                                {
                                    $info_url = ${"data_box_link_".$r->box_number."_".$this_box_real_id}."/0/info/".${"data_box_".$r->box_number."_".$this_box_real_id}[0]->id."/".${"data_box_".$r->box_number."_".$this_box_real_id}[0]->title; 
                                } 
                                ?> 

                                <?php 
                                $this_img = 'http://127.0.0.1:8000/assets/logo_default.jpg';
                                if(${"data_box_".$r->box_number."_".$this_box_real_id}[0]->img1 != '')
                                {
                                    $this_img = $CustomHelper->get_file_form_code(${"data_box_".$r->box_number."_".$this_box_real_id}[0]->img1,0);
                                }
                                ?>
                                <a href="<?php echo $info_url ?>">
                                    <div class="img-news" style="background-image: url('<?php echo $this_img ?>');"></div>
                                </a>
                                <div class="content-news-main">
                                    <div class="date">
                                        <span>ข่าววันที่ : <?php echo $CustomHelper->date_unix_to_thai(${"data_box_".$r->box_number."_".$this_box_real_id}[0]->date_news) ?></span>&nbsp; <img src="{{ asset('../../assets/images/icons/icon-new.png')}}" alt="icon">
                                    </div>
                                    <div class="desc-news">
                                        <a href="<?php echo $info_url ?>">
                                            <?php echo $CustomHelper->L(${"data_box_".$r->box_number."_".$this_box_real_id}[0]->title,${"data_box_".$r->box_number."_".$this_box_real_id}[0]->en_title) ?>
                                        </a>
                                    </div>
                                    
                                    <div class="social-wrapper">
                                        <ul class="d-flex align-items-center">
                                            <li class="facebook d-flex align-items-center not-hover">
                                                <img src="{{ asset('../../assets/images/icons/icon-social-facebook.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                            </li>
                                            <li class="twitter d-flex align-items-center not-hover">
                                                <img src="{{ asset('../../assets/images/icons/icon-social-twitter.svg')}}" alt="icon"> <span class="color-secondary">5</span> 
                                            </li>
                                            <li class="line d-flex align-items-center not-hover">
                                                <img src="{{ asset('../../assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"> <span class="color-secondary">5</span> 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="read-news-outer">
                                    <a href="<?php echo $info_url ?>">
                                        อ่านข่าวสาร
                                    </a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        
                    </div>
                    <div class="col-lg-6">

                        <?php 
                        if(isset(${"data_box_".$r->box_number."_".$this_box_real_id}[1]->title))
                        {
                            ?>
                            <div class="row">
                            
                                <div class="col-lg-12">

                                    <!-- <div class="group-mange-section">
                                        <div class="manage-tools">
                                            <ul>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/edit?m=news');">แก้ไข</a></li> 
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_hide">ซ่อน</a></li>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_delete">ลบ</a></li>
                                                <li class="order-list order-close">ปิด</li>
                                            </ul>
                                        </div>
                                        <div class="manage-edit">
                                            <img src="{{ asset('../../assets/images/icons/icon-edit.svg')}}" alt="icon">
                                        </div> 
                                    </div> -->

                                    <div class="sub-news">
                                        <div class="group-mange-section">
                                            <div class="manage-tools">
                                                <ul> 
                                                    <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/edit?m=news&id=<?php echo ${"data_box_".$r->box_number."_".$this_box_real_id}[1]->id ?>');">แก้ไข</a></li> 
                                                    <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/set_status_hide?m=news&id=<?php echo ${"data_box_".$r->box_number."_".$this_box_real_id}[1]->id ?>');">ซ่อน</a></li>
                                                    <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/delete?m=news&id=<?php echo ${"data_box_".$r->box_number."_".$this_box_real_id}[1]->id ?>');">ลบ</a></li> 
                                                    <li class="order-list order-close">ปิด</li>
                                                </ul>
                                            </div>
                                            <div class="manage-edit">
                                                <img src="{{ asset('../../assets/images/icons/icon-edit.svg')}}" alt="icon">
                                            </div> 
                                        </div>

                                        <?php 
                                        $info_url = "#";
                                        if(isset(${"data_box_link_".$r->box_number."_".$this_box_real_id}) && ${"data_box_link_".$r->box_number."_".$this_box_real_id} != '')
                                        {
                                            $info_url = ${"data_box_link_".$r->box_number."_".$this_box_real_id}."/0/info/".${"data_box_".$r->box_number."_".$this_box_real_id}[1]->id."/".${"data_box_".$r->box_number."_".$this_box_real_id}[1]->title; 
                                        } 
                                        ?>  
                                        <div class="row no-gutters">
                                            <div class="col-lg-6">
                                                <?php 
                                                $this_img = 'http://127.0.0.1:8000/assets/logo_default.jpg';
                                                if(${"data_box_".$r->box_number."_".$this_box_real_id}[1]->img1 != '')
                                                {
                                                    $this_img = $CustomHelper->get_file_form_code(${"data_box_".$r->box_number."_".$this_box_real_id}[1]->img1,0);
                                                }
                                                ?>
                                                <div class="img-news" style="background-image: url('<?php echo $this_img ?>');">
                                                    <div class="read-news-outer">
                                                        <a href="<?php echo $info_url ?>">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="col-lg-6">
                                                <div class="content">
                                                    <div class="date color-secondary">
                                                        <span>ข่าววันที่ : <?php echo $CustomHelper->date_unix_to_thai(${"data_box_".$r->box_number."_".$this_box_real_id}[1]->date_news) ?></span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="<?php echo $info_url ?>">
                                                            <?php echo $CustomHelper->L(${"data_box_".$r->box_number."_".$this_box_real_id}[1]->title,${"data_box_".$r->box_number."_".$this_box_real_id}[1]->en_title) ?>
                                                        </a>
                                                    </div> 
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-facebook.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-12">

                                    <!-- <div class="group-mange-section">
                                        <div class="manage-tools">
                                            <ul>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/edit?m=news');">แก้ไข</a></li> 
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_hide">ซ่อน</a></li>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_delete">ลบ</a></li>
                                                <li class="order-list order-close">ปิด</li>
                                            </ul>
                                        </div>
                                        <div class="manage-edit">
                                            <img src="{{ asset('../../assets/images/icons/icon-edit.svg')}}" alt="icon">
                                        </div> 
                                    </div> -->
                                    
                                    <?php 
                                    if(isset(${"data_box_".$r->box_number."_".$this_box_real_id}[2]->title))
                                    {
                                        ?>
                                            <div class="sub-news">
                                            <div class="group-mange-section">
                                                <div class="manage-tools">
                                                    <ul> 
                                                        <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/edit?m=news&id=<?php echo ${"data_box_".$r->box_number."_".$this_box_real_id}[2]->id ?>');">แก้ไข</a></li> 
                                                        <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/set_status_hide?m=news&id=<?php echo ${"data_box_".$r->box_number."_".$this_box_real_id}[2]->id ?>');">ซ่อน</a></li>
                                                        <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/delete?m=news&id=<?php echo ${"data_box_".$r->box_number."_".$this_box_real_id}[2]->id ?>');">ลบ</a></li> 
                                                        <li class="order-list order-close">ปิด</li>
                                                    </ul>
                                                </div>
                                                <div class="manage-edit">
                                                    <img src="{{ asset('../../assets/images/icons/icon-edit.svg')}}" alt="icon">
                                                </div> 
                                            </div>

                                            <?php 
                                            $info_url = "#";
                                            if(isset(${"data_box_link_".$r->box_number."_".$this_box_real_id}) && ${"data_box_link_".$r->box_number."_".$this_box_real_id} != '')
                                            {
                                                $info_url = ${"data_box_link_".$r->box_number."_".$this_box_real_id}."/0/info/".${"data_box_".$r->box_number."_".$this_box_real_id}[2]->id."/".${"data_box_".$r->box_number."_".$this_box_real_id}[2]->title; 
                                            } 
                                            ?> 


                                            <div class="row no-gutters">
                                                <div class="col-lg-6">
                                                 <?php 
                                                $this_img = 'http://127.0.0.1:8000/assets/logo_default.jpg';
                                                if(${"data_box_".$r->box_number."_".$this_box_real_id}[2]->img1 != '')
                                                {
                                                    $this_img = $CustomHelper->get_file_form_code(${"data_box_".$r->box_number."_".$this_box_real_id}[2]->img1,0);
                                                }
                                                ?>

                                                    <div class="img-news" style="background-image: url('<?php echo $this_img ?>');">
                                                        <div class="read-news-outer">
                                                            <a href="<?php echo $info_url ?>">
                                                                อ่านข่าวสาร
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="content">
                                                        <div class="date color-secondary">
                                                            <span>ข่าววันที่ : <?php echo $CustomHelper->date_unix_to_thai(${"data_box_".$r->box_number."_".$this_box_real_id}[2]->date_news) ?></span>
                                                        </div>
                                                        <div class="desc-news">
                                                            <a href="<?php echo $info_url ?>">
                                                                <?php echo $CustomHelper->L(${"data_box_".$r->box_number."_".$this_box_real_id}[2]->title,${"data_box_".$r->box_number."_".$this_box_real_id}[2]->en_title) ?>
                                                            </a>
                                                        </div>
                                                        <div class="social-wrapper">
                                                            <ul class="d-flex align-items-center">
                                                                <li class="facebook d-flex align-items-center not-hover">
                                                                    <img src="{{ asset('../../assets/images/icons/icon-social-facebook.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                                </li>
                                                                <li class="twitter d-flex align-items-center not-hover">
                                                                    <img src="{{ asset('../../assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                                </li>
                                                                <li class="line d-flex align-items-center not-hover">
                                                                    <img src="{{ asset('../../assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                                </li>
                                                            </ul>
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
                            <?php
                        }
                        ?>

                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>