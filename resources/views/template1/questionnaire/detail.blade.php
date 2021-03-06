<div align="center" class="tools">
    <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/list?m=question&id=<?php echo $r_news_info_cat[0]->id ?>');"><img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-edit.svg" alt="icon">&nbsp; <b style="font-size:18px;">แก้ไขข้อมูล</b></a><br><br> 
</div>

<div class="section-content">
    <div class="container">
        <div class="inner-content">
            <div class="main-content border-bottom">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="group-slide">
                            <div class="list-item">
                                <div class="item -question">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-4">
                                            <div class="left bg-color-primary active">
                                                <div class="progress-content">
                                                    <!-- Progress bar 1 -->
                                                    <div class="progress" data-percentage="50">
                                                        <span class="progress-left">
                                                            <span class="progress-bar"></span>
                                                        </span>
                                                        <span class="progress-right">
                                                            <span class="progress-bar"></span>
                                                        </span>
                                                        <div class="progress-value">
                                                            <div>50%</div>
                                                        </div>
                                                    </div>
                                                    <!-- END -->
                                                    <div class="total-people">150 <span>คน</span></div>
                                                </div>
                                                <div class="text-onbottom bg-color-secondary">ผู้ตอบคำถาม</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <div class="right">                                          
                                                <div class="text-content page-detail">
                                                    <div class="title color-primary">
                                                        <?php echo $CustomHelper->L($r_news_info_cat[0]->title,$r_news_info_cat[0]->en_title); ?>
                                                    </div>
                                                    <p>
                                                         
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group-form-section">
                    <div class="top-content">
                        <div class="group-text">
                            <h3 class="title color-primary">แบบสอบถามข้อมูล</h3>
                            <p class="desc color-secondary">กรุณากรอกข้อมูลของท่าน</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-custom">
                                <label for="" class="title-field">ชื่อ-นามสกุล</label>
                                <input class="style-input" type="text" name="" placeholder="ระบุ">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-custom">
                                <label for="" class="title-field">เบอร์โทรศัพท์</label>
                                <input class="style-input" type="text" name="" placeholder="ระบุ">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="input-custom">
                                <label for="" class="title-field">อีเมล</label>
                                <input class="style-input" type="text" name="" placeholder="ระบุ">
                            </div>
                        </div>
                    </div>

                    <div class="topic-form">
                        <div class="order-topic">
                            <div class="title-article border-bt">ท่านอายุเท่าไร</div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="list-choice">
                                        <div class="input-custom d-flex">
                                            <div class="custom-control custom-switch">
                                                <input type="radio" class="custom-control-input" id="custom_1_1" name="Q_1">
                                                <label class="custom-control-label" for="custom_1_1">60 ขึ้นไป</label>
                                            </div>
                                            <span class="text-inline margin-left-auto color-secondary">(6%)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="list-choice">
                                        <div class="input-custom d-flex">
                                            <div class="custom-control custom-switch">
                                                <input type="radio" class="custom-control-input" id="custom_1_2" name="Q_1">
                                                <label class="custom-control-label" for="custom_1_2">40-50</label>
                                            </div>
                                            <span class="text-inline margin-left-auto color-secondary">(6%)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="list-choice">
                                        <div class="input-custom d-flex">
                                            <div class="custom-control custom-switch">
                                                <input type="radio" class="custom-control-input" id="custom_1_3" name="Q_1">
                                                <label class="custom-control-label" for="custom_1_3">25-39</label>
                                            </div>
                                            <span class="text-inline margin-left-auto color-secondary">(6%)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="list-choice">
                                        <div class="input-custom d-flex">
                                            <div class="custom-control custom-switch">
                                                <input type="radio" class="custom-control-input" id="custom_1_4" name="Q_1">
                                                <label class="custom-control-label" for="custom_1_4">25-39</label>
                                            </div>
                                            <span class="text-inline margin-left-auto color-secondary">(0%)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order-topic">
                            <div class="title-article border-bt">ระยะเวลาในการเข้าใช้งานห้องสมุด</div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="list-choice">
                                        <div class="input-custom d-flex">
                                            <div class="custom-control custom-switch">
                                                <input type="radio" class="custom-control-input" id="Q_2_1" name="Q_2">
                                                <label class="custom-control-label" for="Q_2_1">1 ปี/ครั้ง</label>
                                            </div>
                                            <span class="text-inline margin-left-auto color-secondary">(6%)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="list-choice">
                                        <div class="input-custom d-flex">
                                            <div class="custom-control custom-switch">
                                                <input type="radio" class="custom-control-input" id="Q_2_2" name="Q_2">
                                                <label class="custom-control-label" for="Q_2_2">6 เดือน/ครั้ง</label>
                                            </div>
                                            <span class="text-inline margin-left-auto color-secondary">(6%)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="list-choice">
                                        <div class="input-custom d-flex">
                                            <div class="custom-control custom-switch">
                                                <input type="radio" class="custom-control-input" id="Q_2_3" name="Q_2">
                                                <label class="custom-control-label" for="Q_2_3">3 เดือน/ครั้ง</label>
                                            </div>
                                            <span class="text-inline margin-left-auto color-secondary">(6%)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="list-choice">
                                        <div class="input-custom d-flex">
                                            <div class="custom-control custom-switch">
                                                <input type="radio" class="custom-control-input" id="Q_2_4" name="Q_2">
                                                <label class="custom-control-label" for="Q_2_4">1 เดือน/ครั้ง</label>
                                            </div>
                                            <span class="text-inline margin-left-auto color-secondary">(0%)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order-topic">
                            <div class="title-article border-bt">ท่านทราบข้อมูลห้องสนุดจากที่ไหน</div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="list-choice">
                                        <div class="input-custom d-flex">
                                            <div class="custom-control custom-switch">
                                                <input type="radio" class="custom-control-input" id="Q_3_1" name="Q_3">
                                                <label class="custom-control-label" for="Q_3_1">เว็บไซต์</label>
                                            </div>
                                            <span class="text-inline margin-left-auto color-secondary">(6%)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="list-choice">
                                        <div class="input-custom d-flex">
                                            <div class="custom-control custom-switch">
                                                <input type="radio" class="custom-control-input" id="Q_3_2" name="Q_3">
                                                <label class="custom-control-label" for="Q_3_2">สื่อออนไลน์</label>
                                            </div>
                                            <span class="text-inline margin-left-auto color-secondary">(6%)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="list-choice">
                                        <div class="input-custom d-flex">
                                            <div class="custom-control custom-switch">
                                                <input type="radio" class="custom-control-input" id="Q_3_3" name="Q_3">
                                                <label class="custom-control-label" for="Q_3_3">เพื่อน</label>
                                            </div>
                                            <span class="text-inline margin-left-auto color-secondary">(6%)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order-topic">
                            <div class="title-article border-bt">ท่านใช้อุปกรณ์ใดในการเข้าเว็บไซต์</div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="input-custom">
                                        <label for="" class="title-field">อุปกรณ์ที่ใช้ในการเข้าเว็บไซต์</label>
                                        <input class="style-input" type="text" name="" placeholder="ระบุ">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="btn-custom width-full d-flex justify-content-center">
                            <button class="btn btn-primary" type="button">SEND</button>
                        </div>
                    </div>
                </div>
                <div class="group-back">
                    <a href="/questionnaire">ย้อนกลับ</a>
                </div>

                <div class="group-social-share d-flex align-items-center justify-content-between">
                    <div class="shared-email d-flex align-items-center">
                        <div class="social-wrapper d-flex align-items-center">
                            <div class="text-social color-secondary">Share</div>
                            <ul class="d-flex align-items-center">
                                <li class="facebook d-flex align-items-center not-hover">
                                    <img src="{{ asset('template1/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                </li>
                                <li class="twitter d-flex align-items-center not-hover">
                                    <img src="{{ asset('template1/assets/images/icons/icon-social-twitter.svg')}}" alt="icon"> <span class="color-secondary">5</span> 
                                </li>
                                <li class="line d-flex align-items-center not-hover">
                                    <img src="{{ asset('template1/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"> <span class="color-secondary">5</span> 
                                </li>
                            </ul>
                        </div>
                        <div class="email-link d-flex align-items-center">
                            <div class="item">
                                <a href="">
                                    <div class="icon -email">
                                        <img src="{{ asset('template1/assets/images/icons/icon-email.png')}}" alt="icon">
                                    </div>
                                    <div class="text-email-link">อีเมล</div>
                                    <div class="clearboth"></div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="">
                                    <div class="icon -link">
                                        <img src="{{ asset('template1/assets/images/icons/icon-link.png')}}" alt="icon">
                                    </div>
                                    <div class="text-email-link">Copy Link</div>
                                    <div class="clearboth"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="views-like d-flex align-items-center">
                        <div class="view-count color-secondary">
                            View : <span>1.5K</span>
                        </div>
                        <div class="like-count d-flex align-items-center">
                            <a href="#" title="Love it" data-count="0" class="icon-like">
                                <img src="{{ asset('template1/assets/images/icons/icon-like.png')}}" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vote-comment-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content -comment">
                            <div class="box-title d-flex justify-content-between align-items-center">
                                <div class="title-head color-primary">ความคิดเห็น</div>
                                <div class="order-all color-secondary">5 รายการ</div>
                            </div>
                            <div class="sort-order d-flex justify-content-end align-items-center">
                                <div class="text-order">เรียงลำดับตาม</div>
                                <div class="input-custom">
                                    <div class="select-wrapper width-full">
                                        <select name="" class="slc">
                                            <optgroup label="เรียงลำดับ">
                                                <option value="">เก่าที่สุด</option>
                                                <option value="">ใหม่ที่สุด</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="input-custom">
                                <textarea class="text-area" name="" id="" rows="3"></textarea>
                            </div>
                            <div class="btn-custom width-full d-flex justify-content-end">
                                <button class="btn btn-primary" type="button">SEND</button>
                            </div>
                        </div>
                        <div class="user-comment-wrapper">
                            <ul>
                                <li>
                                    <div class="list-comment d-flex align-items-center">
                                        <div class="image-user">
                                            <img src="{{ asset('template1/assets/images/icons/icon-user-post.png')}}" alt="icon">
                                        </div>
                                        <div class="post-user">
                                            <span class="name color-secondary">Attapon :</span> Excellent, I like this 
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-comment d-flex align-items-center">
                                        <div class="image-user">
                                            <img src="{{ asset('template1/assets/images/icons/icon-user-post.png')}}" alt="icon">
                                        </div>
                                        <div class="post-user">
                                            <span class="name color-secondary">Santanon :</span> เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ 
                                            มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16 
                                            เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-comment d-flex align-items-center">
                                        <div class="image-user">
                                            <img src="{{ asset('template1/assets/images/icons/icon-user-post.png')}}" alt="icon">
                                        </div>
                                        <div class="post-user">
                                            <span class="name color-secondary">Sittichok :</span> Excellent, I like this 
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="load-more">
                                <a href="" class="btn btn-outline-dark">โหลดเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>