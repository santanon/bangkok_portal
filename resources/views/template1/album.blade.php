<!-- อัลบั้มภาพ -->
<div id="album" data-id="4_<?php echo $this_box_id ?>" class="section-content bg-color-white">
    <div class="group-mange-section">
        <div class="manage-tools">
            <ul>
                <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/add?m=gallery');">เพิ่มข้อมูล</a></li>
                <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/set_cat?m=gallery&id=<?php echo @${"data_box_".$r->box_number."_".$this_box_real_id}[0]->cat_id ?>');">จัดการข้อมูล</a></li>
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
                            ?>ภาพกิจกรรม<?php
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
                                    ?><a href="<?php echo ${"data_box_link_".$r->box_number."_".$this_box_real_id} ?>" class="btn btn-outline-dark">ภาพกิจกรรมทั้งหมด</a><?php
                                }
                                else
                                {
                                    ?><?php
                                }
                                ?> 
 
                </div>
            </div>
            <div class="main-content">
                <div class="gallery-template">
                    <div class="row">

<?php 
$this_loop = 1;
foreach(${"data_box_".$r->box_number."_".$this_box_real_id} as $r_sub)
{
    ?>
    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            
        <div class="item -album">
            <div class="group-mange-section">
                <div class="manage-tools">
                    <ul>
                        <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/edit?m=gallery&id=<?php echo ${"data_box_".$r->box_number."_".$this_box_real_id}[$this_loop-1]->id ?>');">แก้ไข</a></li> 
                        <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/set_status_hide?m=gallery&id=<?php echo ${"data_box_".$r->box_number."_".$this_box_real_id}[$this_loop-1]->id ?>');">ซ่อน</a></li>
                        <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/delete?m=gallery&id=<?php echo ${"data_box_".$r->box_number."_".$this_box_real_id}[$this_loop-1]->id ?>');">ลบ</a></li> 
                        <li class="order-list order-close">ปิด</li>
                    </ul>
                </div> 
                <div class="manage-edit">
                    <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
                </div>
            </div>
            <div class="cover-album" style="background-image: url('<?php echo $CustomHelper->get_file_form_code_sort(${"data_box_".$r->box_number."_".$this_box_real_id}[$this_loop-1]->img1,0) ?>');">
                <a id="dynamic<?php echo $this_loop ?>" href="javascript:void(0)" >
                    <div class="bg-layer">
                        <div class="icon-search-hover">
                            <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
                        </div>
                    </div>
                </a>
                <div class="top-album">
                    <div class="source bg-color-primary">
                        <span><?php echo $CustomHelper->L(${"data_box_".$r->box_number."_".$this_box_real_id}[$this_loop-1]->title,${"data_box_".$r->box_number."_".$this_box_real_id}[$this_loop-1]->en_title) ?></span>
                    </div>
                </div>
                <div class="caption-album">
                    <span><?php echo $CustomHelper->L(${"data_box_".$r->box_number."_".$this_box_real_id}[$this_loop-1]->title,${"data_box_".$r->box_number."_".$this_box_real_id}[$this_loop-1]->en_title) ?></span>
                </div>
            </div>
        </div>
    </div>
    <?php
    $this_loop++;
}
?>
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 