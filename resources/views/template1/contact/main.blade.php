<div class="section-content">
    <div class="group-mange-section">
        <div class="manage-tools">
            <ul>
                <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/list?m=contactus');">ข้อมูลติดต่อ</a></li>
                <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/contact_info1?m=contactus');">แก้ไขที่อยู่</a></li>
                <li class="order-list order-close">ปิด</li>
            </ul>
        </div> 
        <div class="manage-edit">
            <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="แก้ไข">
        </div>
       <!-- <div class="manage-add">
            <img src="{{ asset('template1/assets/images/icons/icon-add.svg')}}" alt="เพิ่ม">
        </div>  -->
    </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="inner-content">
                                <div class="top-content">
                                    <div class="group-text">
                                        <h3 class="title color-primary">ติดต่อสอบถาม</h3>
                                        <p class="desc color-secondary">กรุณากรอกข้อมูลของท่าน</p>
                                    </div>
                                </div>
                                <div class="main-content">
                                     <form action=""> 
                                    @csrf <!-- {{ csrf_field() }} -->
                                        <div class="group-form-section -contact">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="input-custom inp-categories">
                                                        <div class="select-wrapper width-full">
                                                            <select name="topic" class="slc"> 
                                                                <option value="">- เรื่อง -</option>
                                                                    <option value="ติดต่อสอบถาม">ติดต่อสอบถาม</option>
                                                                    <option value="ชมเชย">ชมเชย</option>
                                                                    <option value="เสนอแนะ">เสนอแนะ</option>
                                                                    <option value="รับฟ้งความคิดเห็น">รับฟ้งความคิดเห็น</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-custom">
                                                        <textarea class="text-area" name="" id="" rows="3" placeholder="ข้อความ"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-custom">
                                                        <label for="" class="title-field">ชื่อ-นามสกุล</label>
                                                        <input class="style-input" type="text" name="" placeholder="ระบุ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-custom">
                                                        <label for="" class="title-field">ที่อยู่</label>
                                                        <input class="style-input" type="text" name="" placeholder="ระบุ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-custom">
                                                        <label for="" class="title-field">เบอร์โทรศัพท์</label>
                                                        <input class="style-input" type="text" name="" placeholder="ระบุ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-custom">
                                                        <label for="" class="title-field">อีเมล</label>
                                                        <input class="style-input" type="text" name="" placeholder="ระบุ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-custom width-full d-flex justify-content-center">
                                            <button class="btn btn-primary" type="submit">ส่งข้อความ</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
/*
$_SESSION['portal_website_style_' . $this->mod . '_contact_text_1']
$_SESSION['portal_website_style_' . $this->mod . '_contact_text_2']
$_SESSION['portal_website_style_' . $this->mod . '_contact_text_3']
$_SESSION['portal_website_style_' . $this->mod . '_contact_text_4']
*/
                        ?>
                        <div class="col-lg-6">
                            <div class="inner-content">
                                <div class="top-content">
                                    <div class="group-text">
                                        <h3 class="title color-primary">สำนักงานเลขานุการสภากรุงเทพฯ</h3>
                                        <p class="desc color-secondary">ชั้น 3 ศาลาว่าการกรุงเทพมหานคร 173 ถนนดินสอ เขตพระนคร กรุงเทพมหานคร 10200</p>
                                    </div>
                                </div>
                                <div class="main-content -contact">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="contact-tel">
                                                <img src="{{ asset('template1/assets/images/icons/icon-tel-gray.svg')}}" alt="icon"> 
                                                <a class="link-tel" href="tel:022212141">0-2221-2141-69</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="contact-tel">
                                                <img src="{{ asset('template1/assets/images/icons/icon-fax-gray.svg')}}" alt="icon"> 
                                                <a class="link-tel" href="tel:022243038">0-2224-3038</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="iframe-map">

 <iframe frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" src="https://maps.google.com/maps?q=<?php echo $_SESSION['portal_website_style_' . $mod . '_contact_text_3'] ?>,<?php echo $_SESSION['portal_website_style_' . $mod . '_contact_text_4'] ?>&hl=es&z=14&amp;output=embed"></iframe> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

<div class="section-content bg-color-white">
    <div class="group-mange-section">
        <div class="manage-tools">
            <ul>
                <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/add?m=contactus_sub');">เพิ่มข้อมูล</a></li>
                <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/list?m=contactus_sub');">จัดการข้อมูล</a></li>
                <li class="order-list order-close">ปิด</li>
            </ul>
        </div> 
        <div class="manage-edit">
            <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="แก้ไข">
        </div>
       <!-- <div class="manage-add">
            <img src="{{ asset('template1/assets/images/icons/icon-add.svg')}}" alt="เพิ่ม">
        </div> -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <div class="top-content">
                        <div class="group-text">
                            <h3 class="title color-primary">ติดต่อส่วนราชการ</h3>
                            <p class="desc color-secondary"><?php echo $_SESSION['portal_website_' . $mod . '_web_name'] ?></p>
                        </div>
                    </div>
                    <div class="main-content -contact">
                        <div class="row">
<?php
foreach($r_sub as $r)
{
    ?>
    <div class="col-lg-4">
        <div class="list-item-gov">
            <div class="title-gov"><?php echo $CustomHelper->L($r->title,$r->en_title) ?></div>
            <div class="contact-gov d-flex">
                <div class="tel-gov bg-color-secondary">
                    <div class="on">
                        <img src="{{ asset('template1/assets/images/icons/icon-tel.svg')}}" alt="icon">
                    </div>
                    <div class="number"><?php echo $r->info ?></div>
                </div>
                <div class="tel-internal bg-color-primary">
                    <div class="on">ภายใน</div>
                    <div class="number"><?php echo $r->en_info ?></div>
                </div>
            </div>
            <?php 
            if($r->file1 <> '')
            {
                ?>
            <div class="social-wrapper d-flex align-items-center">
                <ul>
                    <li class="facebook">
                        <a href="<?php echo $r->file1 ?>" title="facebook">
                            <img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-social-facebook.svg" alt="icon">
                        </a>
                    </li>
                </ul>
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
                        <!--<div class="load-more text-right">
                            <a href="" class="btn btn-outline-dark">โหลดเพิ่มเติม</a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>