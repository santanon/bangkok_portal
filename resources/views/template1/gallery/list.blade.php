<div class="section-content">
    <div class="group-mange-section">
        <div class="manage-tools">
            <ul>
                <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/add?m=gallery');">เพิ่มข้อมูล</a></li>
                <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/set_cat?m=gallery&id=<?php echo $r_cat_id ?>');">จัดการข้อมูล</a></li>
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
            <div class="search-content">
                <form action="">
                @csrf <!-- {{ csrf_field() }} -->
                    <div class="row">
                        <div class="col-10 col-sm-6">
                            <div class="input-custom inp-search">
                                <input class="style-input" type="text" name="" placeholder="คำค้นหา" />
                            </div>
                        </div>
                        <div class="col-2 col-sm-1">
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
                </form>
            </div>
            <div class="main-content">
                <div class="gallery-template">
                    <div class="row">

                        <?php 
                        $this_count = 1;
                        foreach($r_data as $r)
                        {
                            ?>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="item -album">
                                    <div class="group-mange-section no-mg right-0">
                                        <div class="manage-tools">
                                            <ul>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/edit?m=gallery&id=<?php echo $r->id ?>');">แก้ไข</a></li> 
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/set_status_hide?m=gallery&id=<?php echo $r->id ?>');">ซ่อน</a></li>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/delete?m=gallery&id=<?php echo $r->id ?>');">ลบ</a></li> 
                                                <li class="order-list order-close">ปิด</li>
                                            </ul>
                                        </div> 
                                        <div class="manage-edit">
                                            <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                        </div>
                                    </div>
                                    <div class="cover-album" style="background-image: url('<?php if(strlen($r->img1) > 5){ echo $r->img1; }else{ echo base_url()."assets/logo_default.jpg"; } ?>');">
                                        <a id="dynamic<?php echo $this_count ?>" href="javascript:void(0)" >
                                            <div class="bg-layer">
                                                <div class="icon-search-hover">
                                                    <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
                                                </div>
                                            </div>
                                        </a>
                                        <div class="top-album">
                                            <!--<div class="source bg-color-primary">
                                                <span>PR BKK</span>
                                            </div>-->
                                        </div>
                                        <div class="caption-album">
                                            <span><?php echo $CustomHelper->L($r->title,$r->title); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <?php
                            $this_count++;
                        }
                        ?>
                         
                    </div>
                </div>

                <div class="pagination-custom d-flex justify-content-end align-items-center">
                    <div class="all-page">
                        Page <span><?php echo $r_data_this_page ?></span> of <span><?php echo $r_data_total_pages ?></span>
                    </div>
                    <div class="item-page d-flex justify-content-end align-items-center"> 
                        <?php
                        if($r_data_this_page == 1)
                        {
                            ?>
                            <div class="slide-prev disabled"></div> 
                            <?php  
                        }
                        else
                        {
                            ?> 
                            <a href="<?php echo base_url() ?><?php echo $mod ?>/page/<?php echo $r_page_type ?>/<?php echo $r_page_id ?>/<?php echo $r_data_title ?>/<?php echo $r_data_this_page-2 ?>"><div class="slide-prev"></div></a>
                            <?php  
                        }
                        ?> 
                        <div class="input-custom">
                            <input type="text" class="style-input" value="1">
                        </div>
                        <?php
                        if($r_data_this_page == $r_data_total_pages)
                        {
                            ?>
                            <div class="slide-next disabled"></div>
                            <?php  
                        }
                        else
                        {
                            ?> 
                            <a href="<?php echo base_url() ?><?php echo $mod ?>/page/<?php echo $r_page_type ?>/<?php echo $r_page_id ?>/<?php echo $r_data_title ?>/<?php echo $r_data_this_page ?>"><div class="slide-next"></div></a>
                            <?php  
                        }
                        ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>