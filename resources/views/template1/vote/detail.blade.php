<div align="center" class="tools">
    <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/edit?m=poll&id=<?php echo $r_data_this[0]->id ?>');"><img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-edit.svg" alt="icon">&nbsp; <b style="font-size:18px;">แก้ไขข้อมูล</b></a><br><br> 
</div>

<div class="section-content">
    <div class="container">
        <div class="inner-content">
            <div class="top-content">
                <div class="group-text">
                    <h3 class="title color-primary"><?php echo $CustomHelper->L($r_data_this[0]->title,$r_data_this[0]->en_title); ?></h3>
                </div>
            </div>

            <div class="main-content border-bottom">
                <div class="vote-template">
                <div class="group-vote detail-page">
                    <div class="question-choice">
                         <form action="">
                @csrf <!-- {{ csrf_field() }} -->
                            <div class="choice-question">
                                <ul>
                                    <li>
                                        <div class="input-custom">
                                            <div class="custom-control custom-switch">
                                                <input type="radio" class="custom-control-input" id="customSwitch1" name="Ans_Vote">
                                                <label class="custom-control-label" for="customSwitch1">พอใจมากที่สุด</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="input-custom">
                                            <div class="custom-control custom-switch">
                                                <input type="radio" class="custom-control-input" id="customSwitch2" name="Ans_Vote">
                                                <label class="custom-control-label" for="customSwitch2">พอใจมาก</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="input-custom">
                                            <div class="custom-control custom-switch">
                                                <input type="radio" class="custom-control-input" id="customSwitch3" name="Ans_Vote">
                                                <label class="custom-control-label" for="customSwitch3">ปานกลาง</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="input-custom">
                                            <div class="custom-control custom-switch">
                                                <input type="radio" class="custom-control-input" id="customSwitch4" name="Ans_Vote">
                                                <label class="custom-control-label" for="customSwitch4">เฉยๆ</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="input-custom">
                                            <div class="custom-control custom-switch">
                                                <input type="radio" class="custom-control-input" id="customSwitch5" name="Ans_Vote">
                                                <label class="custom-control-label" for="customSwitch5">ไม่น่าพอใจ</label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="btn-custom width-full d-flex justify-content-center">
                                    <button class="btn btn-primary" type="button">VOTE</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="score-wrapper">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-4">
                                <div class="text-score text-center">
                                    <div class="num-vote color-primary">1.6K</div>
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
                                    <div class="num-vote color-primary">3.6K</div>
                                    <div class="text-vote">ผู้เข้าชม</div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-8 col-8">
                                <div class="text-score text-center">
                                    <div class="num-vote color-primary">200</div>
                                    <div class="text-vote">ออนไลน์</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="top-content">
                        <div class="group-text">
                            <h3 class="title color-primary">ผลโหวต</h3>
                        </div>
                    </div>

                    <div class="score-choice">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="text-score">
                                    <div class="num-vote color-primary">545</div>
                                    <div class="text-vote">พอใจมากที่สุด</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="text-score">
                                    <div class="num-vote color-primary">224</div>
                                    <div class="text-vote">พอใจมาก</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="text-score">
                                    <div class="num-vote color-primary">105</div>
                                    <div class="text-vote">ปานกลาง</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="text-score">
                                    <div class="num-vote color-primary">105</div>
                                    <div class="text-vote">เฉยๆ</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="text-score">
                                    <div class="num-vote color-primary">0</div>
                                    <div class="text-vote">ไม่น่าพอใจ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group-back">
                    <a href="/vote">ย้อนกลับ</a>
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
                            View : <span class="color-secondary">1.5K</span>
                        </div>
                        <div class="like-count d-flex align-items-center">
                            <div class="icon-like">
                                <img src="{{ asset('template1/assets/images/icons/icon-like.png')}}" alt="icon">
                            </div>
                            <span class="color-secondary">1.2K</span>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="vote-comment-content">
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