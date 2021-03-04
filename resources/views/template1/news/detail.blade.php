<div align="center" class="tools">
    <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/edit?m=news&id=<?php echo $r_id ?>');"><img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-edit.svg" alt="icon">&nbsp; <b style="font-size:18px;">แก้ไขข้อมูล</b></a><br><br> 
</div>

<div class="section-content">
                <div class="container">
                    <div class="inner-content">
                        <div class="top-content">
                            <div class="group-text">
                                <h3 class="title color-primary"><?php echo $CustomHelper->L($r_news_info[0]->title,$r_news_info[0]->en_title); ?> </h3>
                            </div>
                        </div>
                        <div class="post-content d-flex justify-content-between align-items-center">
                            <div class="public-post">
                                <em class="far fa-calendar"></em> <?php echo $CustomHelper->date_unix_to_thai_mon_long($r_news_info[0]->date_news) ?>
                            </div>
                            <!--<div class="source-post color-secondary">
                                แหล่งที่มา <span class="bg-color-secondary">PR BKK</span>
                            </div>-->
                        </div>
                        <div class="main-content border-bottom">
                            <form method="post"  action="http://127.0.0.1:8000/manage-admin/edit_submit2?m=news" onsubmit="document.getElementById('this_info').value = page_editor.getData();">
                            <!-- One image -->
                            <div class="group-oneimage">
                                <img src="<?php echo $CustomHelper->get_file_form_code($r_news_info[0]->img1,0) ?>" alt="image">  
                            </div>
                            
                            <!-- text editor -->
                            <div class="group-editor" id="editor">
                                <?php echo $CustomHelper->L($r_news_info[0]->info,$r_news_info[0]->en_info); ?>
                            </div>
 
                            <div class="group-back">
                                <a href="javascript:window.history.back();">ย้อนกลับ</a>
                            </div>

                            <div align="center" class="tools"><input type="submit" value="บันทึกข้อมูล"><br><br><br></div>
                            @csrf <!-- {{ csrf_field() }} -->
                            <input type="hidden" name="this_info" id="this_info" value="">
                            <input type="hidden" name="id" id="id" value="<?php echo $r_id ?>">
                            </form>

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
                                <div class="col-lg-6">
                                    <div class="content -vote">
                                        <div class="box-title">
                                            <div class="title-head color-primary">คุณเห็นด้วยกับข่าวนี้หรือไม่</div>
                                        </div>
                                         <form action="">
                @csrf <!-- {{ csrf_field() }} -->
                                            <div class="list-choice-vote">
                                                <ul>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="input-custom">
                                                            <div class="custom-control custom-switch">
                                                                <input type="radio" class="custom-control-input" id="customSwitch1" name="Ans_Vote">
                                                                <label class="custom-control-label" for="customSwitch1">เห็นด้วยมาก</label>
                                                            </div>
                                                        </div>
                                                        <div class="total-vote color-secondary">(26%)</div>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="input-custom">
                                                            <div class="custom-control custom-switch">
                                                                <input type="radio" class="custom-control-input" id="customSwitch2" name="Ans_Vote">
                                                                <label class="custom-control-label" for="customSwitch2">ปานกลาง</label>
                                                            </div>
                                                        </div>
                                                        <div class="total-vote color-secondary">(24%)</div>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="input-custom">
                                                            <div class="custom-control custom-switch">
                                                                <input type="radio" class="custom-control-input" id="customSwitch3" name="Ans_Vote">
                                                                <label class="custom-control-label" for="customSwitch3">ไม่เห็นด้วย</label>
                                                            </div>
                                                        </div>
                                                        <div class="total-vote color-secondary">(0%)</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="btn-choice-vote -login">
                                                <div class="show-login">
                                                    <button class="btn btn-primary icon" type="button"><em class="fas fa-lock"></em> Sign in</button>
                                                    <a href="">Register</a>
                                                </div>
                                                <button class="btn btn-primary" type="button">VOTE</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6">
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