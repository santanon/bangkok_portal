<!-- ปฏิทินกิจกรรม -->
<div id="calendar" data-id="3_<?php echo $this_box_id ?>" class="section-content bg-color-white">
                <div class="group-mange-section">
                    <div class="manage-tools">
                        <ul>
                            <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/add?m=activities');">เพิ่มข้อมูล</a></li>
                            <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/list?m=activities');">บริหารจัดการ</a></li> 
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
                                <h3 class="title color-primary">ปฏิทินกิจกรรม</h3>
                                <p class="desc color-secondary">The Bangkok Metropolitan Council Secretariat</p>
                            </div>
                            <div class="group-gotoall">
                                <a href="/calendar" class="btn btn-outline-dark">กิจกรรมทั้งหมด</a>
                            </div>
                        </div>
                        <div class="main-content">
                            <div class="action-slide dis-flex justify-between">
                                <div class="input-custom">
                                    <div class="select-wrapper">
                                        <select name="month" class="slc">
                                            <optgroup label="เดือน">
                                                <option value="1">มกราคม</option>
                                                <option value="2">กุมภาพันธ์</option>
                                                <option value="3">มีนาคม</option>
                                                <option value="4">เมษายน</option>
                                                <option value="5">พฤษภาคม</option>
                                                <option value="6">มิถุนายน</option>
                                                <option value="7">กรกฎาคม</option>
                                                <option value="8">สิงหาคม</option>
                                                <option value="9">กันยายน</option>
                                                <option value="10">ตุลาคม</option>
                                                <option value="11">พฤศจิกายน</option>
                                                <option value="12">ธันวาคม</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>

                                <div class="slide-wrapper" id="action-slide_1">
                                    <div class="slide-arrow slide-prev"></div>
                                    <div class="slide-arrow slide-next"></div>
                                </div>
                            </div>
                            
                            <div class="group-slide">
                                <div class="list-item" id="slide_1">
<?php
foreach(${"data_box_".$r->box_number} as $r_sub)
{
    ?>
    <div class="item">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="left">
                    <div class="text-content bg-color-primary">2</div>
                    <div class="text-onbottom bg-color-secondary">พ.ย.</div>
                </div>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                <div class="right">
                    <div class="text-content">
                        <a href="/calendar-detail">
                            <?php echo $CustomHelper->L($r_sub->title,$r_sub->en_title); ?>
                        </a>
                    </div>
                    <!--<div class="text-onbottom"><i class="fas fa-map-marker-alt"></i> ถนนเสรีไทย ฝั่งเลขคู่</div>-->
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