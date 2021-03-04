<div align="center" class="tools">
    <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/edit?m=activities&id=<?php echo $r_id ?>');"><img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-edit.svg" alt="icon">&nbsp; <b style="font-size:18px;">แก้ไขข้อมูล</b></a><br><br> 
</div>

<div class="section-content">
                <div class="container">
                    <div class="inner-content">
                        <div class="group-inner d-flex">
                            <div class="date">
                                <div class="text-content bg-color-primary"><?php echo date('j',$r_news_info[0]->date_news)  ?></div>
                                <div class="text-onbottom bg-color-secondary"><?php echo $CustomHelper->date_unix_to_thai_mon($r_news_info[0]->date_news) ?></div>
                            </div>
                            <div class="content">
                                <div class="top-content">
                                    <div class="group-text">
                                        <h3 class="title color-primary"><?php echo $CustomHelper->L($r_news_info[0]->title,$r_news_info[0]->en_title); ?></h3>
                                        <p class="desc color-secondary">
                                             
                                        </p>
                                    </div>
                                </div>
                                <div class="post-content d-flex justify-content-between align-items-center">
                                    <div class="public-post">
                                        <em class="far fa-calendar"></em> <?php echo $CustomHelper->date_unix_to_thai_mon_long($r_news_info[0]->date_news) ?>
                                    </div>
                                    <div class="source-post no-bg">
                                        <?php /*<span><em class="fas fa-clock"></em> <?php echo date('H:i',$r_news_info[0]->date_news) ?> น.</span>
                                        <span><em class="fas fa-map-marker-alt"></em></span>*/ ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-content border-bottom">
                            <form method="post"  action="http://127.0.0.1:8000/manage-admin/edit_submit2?m=activities" onsubmit="document.getElementById('this_info').value = page_editor.getData();">
                            <!-- One image -->
                            <div class="group-oneimage">
                                <img src="<?php echo $CustomHelper->get_file_form_code($r_news_info[0]->img1,0) ?>" alt="image">

                                <!-- upload -->
                                <?php /*<div class="group-mange-upload">
                                    <div class="row manage-upload">
                                        <div class="col box_upload">
                                            <h3 class="text-center">Upload</h3>
                                            <div id="uploaderOnly">
                                                <div class="row uploadDocOnly">
                                                    <div class="col">
                                                        <div class="docErr">Please upload valid file</div><!--error-->
                                                        <div class="fileUpload btn btn-orange">
                                                            <img src="https://image.flaticon.com/icons/svg/136/136549.svg" class="icon">
                                                            <span class="upl" id="upload">Upload document</span>
                                                            <input type="file" class="upload up" id="upOnly" onchange="readURL(this);" />
                                                        </div><!-- btn-orange -->
                                                    </div><!-- col-3 -->
                                                    <div class="col-sm-1"><a class="btn-check-only"><em class="fa fa-times"></em></a></div><!-- col-1 -->
                                                </div><!--row-->
                                            </div><!--uploader-->
                                            <div class="text-center">
                                                <a class="btn btn-save"><em class="fa fa-save"></em> Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>*/ ?>
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
                    </div>
                </div>
            </div>