<div align="center" class="tools">
    <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/edit?m=<?php echo $this_manage ?>&id=<?php echo $r_id ?>');"><img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-edit.svg" alt="icon">&nbsp; <b style="font-size:18px;">แก้ไขข้อมูล</b></a><br><br> 
</div>

<div class="section-content">
                <div class="container">
                    <div class="inner-content">
                        <div class="top-content">
                            <div class="group-text">
                                <h3 class="title color-primary"><?php echo $CustomHelper->L($r_title,$r_en_title) ?></h3>
                                <p class="desc color-secondary"><?php echo $CustomHelper->L($r_en_title,$r_title) ?></p>
                            </div>
                        </div>
                        <div class="main-content border-bottom">
                             <form method="post"  action="http://127.0.0.1:8000/manage-admin/edit_submit2?m=<?php echo $this_manage ?>" onsubmit="document.getElementById('this_info').value = page_editor.getData();">
                            <!-- text editor -->
                            <div class="group-editor" id="editor">
                                <?php echo $r_info ?>
                            </div>
                            
                            <div align="center" class="tools"><input type="submit" value="บันทึกข้อมูล"><br><br><br></div>
                            @csrf <!-- {{ csrf_field() }} -->
                            <input type="hidden" name="this_info" id="this_info" value="">
                            <input type="hidden" name="id" id="id" value="<?php echo $r_id ?>">
                            </form>
                            <!-- <div class="group-back">
                                <a href="/">ย้อนกลับ</a>
                            </div> -->

                            <div class="group-social-share d-flex align-items-center justify-content-between">
                                <div class="shared-email d-flex align-items-center">
                                    <div class="social-wrapper d-flex align-items-center">
                                        <div class="text-social color-secondary">Share</div>
                                        <ul class="d-flex align-items-center">
                                            <li class="facebook d-flex align-items-center not-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> <span class="color-secondary">5</span> 
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
                    </div>
                </div>
            </div> 