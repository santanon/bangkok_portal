<div class="section-content">
                <div class="container">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="main-content p-0">
                                    <div class="group-back">
                                        <a href="/news-5">
                                            <div class="icon-more">
                                                <i class="fas fa-arrow-left"></i>
                                            </div>
                                            <p>
                                                ย้อนกลับ
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="post-content d-flex justify-content-between align-items-center">
                                    <div class="public-post d-flex align-items-center">
                                            <i class="far fa-calendar"></i>
                                            2 พฤศจิกายน 2563
                                    </div>
                                    <div class="source-post">
                                        <span>แหล่งที่มา : PR BKK</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                                              
                        <div class="top-content">
                            <div class="group-text">
                                <h3 class="title color-primary">การดำเนินงานด้านความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการทำงานของสำนักงานเลขานุการสภากรุงเทพมหานคร </h3>
                            </div>
                        </div>
                        <div class="main-content">
                            <!-- One image -->
                            <div class="group-oneimage">
                                <img src="{{ asset('template1/assets/images/img-album-demo3_2.jpg')}}" alt="image">

                                <!-- upload -->
                                <div class="group-mange-upload">
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
                                                    <div class="col-sm-1"><a class="btn-check-only"><i class="fa fa-times"></i></a></div><!-- col-1 -->
                                                </div><!--row-->
                                            </div><!--uploader-->
                                            <div class="text-center">
                                                <a class="btn btn-save"><i class="fa fa-save"></i> Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Gallery -->
                            <div class="group-gallery">
                                <div id="slider" class="flexslider main-slider">
                                    <ul class="slides">
                                        <li>
                                            <img src="{{ asset('template1/assets/images/img-album-demo2.jpg')}}" alt="images">
                                        </li>
                                        <li>
                                            <img src="{{ asset('template1/assets/images/img-album-demo3.jpg')}}" alt="images">
                                        </li>
                                        <li>
                                            <img src="{{ asset('template1/assets/images/img-album-demo4.jpg')}}" alt="images">
                                        </li>
                                        <li>
                                            <img src="{{ asset('template1/assets/images/img-album-demo1.png')}}" alt="images">
                                        </li>
                                        <li>
                                            <img src="{{ asset('template1/assets/images/img-album-demo3.jpg')}}" alt="images">
                                        </li>
                                    </ul>
                                </div>
                                <div id="carousel" class="flexslider thumbnail-slider">
                                    <ul class="slides">
                                        <li>
                                            <div class="bg-layer"></div>
                                            <img src="{{ asset('template1/assets/images/img-album-demo2.jpg')}}" alt="images">
                                        </li>
                                        <li>
                                            <div class="bg-layer"></div>
                                            <img src="{{ asset('template1/assets/images/img-album-demo3.jpg')}}" alt="images">
                                        </li>
                                        <li>
                                            <div class="bg-layer"></div>
                                            <img src="{{ asset('template1/assets/images/img-album-demo4.jpg')}}" alt="images">
                                        </li>
                                        <li>
                                            <div class="bg-layer"></div>
                                            <img src="{{ asset('template1/assets/images/img-album-demo1.png')}}" alt="images">
                                        </li>
                                        <li>
                                            <div class="bg-layer"></div>
                                            <img src="{{ asset('template1/assets/images/img-album-demo3.jpg')}}" alt="images">
                                        </li>
                                    </ul>
                                </div>

                                <!-- upload -->
                                <div class="group-mange-upload">
                                    <div class="row manage-upload">
                                        <div class="col box_upload">
                                            <h3 class="text-center">Upload</h3>
                                            <div id="uploader">
                                                <div class="row uploadDoc">
                                                    <div class="col">
                                                        <div class="docErr">Please upload valid file</div><!--error-->
                                                        <div class="fileUpload btn btn-orange">
                                                            <img src="https://image.flaticon.com/icons/svg/136/136549.svg" class="icon">
                                                            <span class="upl" id="upload">Upload document</span>
                                                            <input type="file" class="upload up" id="up" onchange="readURL(this);" />
                                                        </div><!-- btn-orange -->
                                                    </div><!-- col-3 -->
                                                    <div class="col-sm-1"><a class="btn-check"><i class="fa fa-times"></i></a></div><!-- col-1 -->
                                                </div><!--row-->
                                            </div><!--uploader-->
                                            <div class="text-center">
                                                <a class="btn btn-new"><i class="fa fa-plus"></i> Add new</a>
                                                <a class="btn btn-save"><i class="fa fa-save"></i> Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- youtube -->
                            <div class="group-vdo">
                                <div class="content-vdo">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/obIjRgyszjE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>

                                <!-- upload Embed -->
                                <div class="group-mange-upload">
                                    <div class="row manage-upload">
                                        <div class="col box_upload">
                                            <h3 class="text-center">Upload Embed</h3>
                                            <div class="row uploadMedia">
                                                <div class="col">
                                                    <div class="input-custom">
                                                        <input class="style-input" type="text" name="" placeholder="Embed Video">
                                                    </div>
                                                </div>
                                            </div><!--row-->
                                            <div class="text-center">
                                                <a class="btn btn-save"><i class="fa fa-save"></i> Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- vdo -->
                            <div class="group-vdo">
                                <div class="content-vdo">
                                    <video width="320" height="240" controls>
                                        <source src="{{ asset('template1/assets/vdo/sample-mp4-file.mp4')}}" type="video/mp4">
                                    </video>
                                </div>
                                <!-- upload File VDO -->
                                <div class="group-mange-upload">
                                    <div class="row manage-upload">
                                        <div class="col box_upload">
                                            <h3 class="text-center">Upload File VDO</h3>
                                            <div id="uploaderFilemedia">
                                                <div class="row uploaderFilemedia">
                                                    <div class="col">
                                                        <div class="docErr">Please upload valid file</div><!--error-->
                                                        <div class="fileUpload btn btn-orange">
                                                            <img src="https://image.flaticon.com/icons/svg/136/136549.svg" class="icon">
                                                            <span class="upl" id="upload">Upload File VDO</span>
                                                            <input type="file" class="upload up" id="upOnly" onchange="readURL(this);" />
                                                        </div><!-- btn-orange -->
                                                    </div><!-- col-3 -->
                                                    <div class="col-sm-1"><a class="btn-check-only-media"><i class="fa fa-times"></i></a></div><!-- col-1 -->
                                                </div><!--row-->
                                            </div><!--uploader-->
                                            <div class="text-center">
                                                <a class="btn btn-save"><i class="fa fa-save"></i> Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- text editor -->
                            <div class="group-editor" id="editor">
                                ได้จัดทำสื่อประชาสัมพันธ์สื่อองค์ความรู้ที่เกี่ยวข้องกับการป้องกันโรคติดเชื้อไวรัสโคโรนา 2109 (covid) 
                                เพื่อสร้างความตระหนักรู้แก่กลุ่มแรงงาน ผู้ประกอบกิจการและประชาชนทั่วไปในการป้องกันตนเอง 
                                และลดการเผยแพร่ของเชื้อดรคดังกล่าว
                                ผ่านทางเว็บไซต์ <a href="http://www.tosh.or.th/">http://www.tosh.or.th/</a> แอพลิเคชั่น T-OSH Guide และผ่านทางช่องทาง QR Code ท้ายหนังสือนี้
                            </div>

                            <!-- list file download -->
                            <div class="group-list-downloadfile">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="item">
                                            <div class="text-content color-primary">
                                                    เด็กอายุกี่ขวบต้องแจ้งการเข้าเรียนตามกฎหมาย และใช้เอกสารอะไรบ้าง?
                                            </div>
                                            <div class="btn-custom width-auto m-0 ml-auto">
                                                <a href="" class="btn btn-secondary">
                                                    Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="item">
                                            <div class="text-content color-primary">
                                                    เด็กอายุกี่ขวบต้องแจ้งการเข้าเรียนตามกฎหมาย และใช้เอกสารอะไรบ้าง?
                                            </div>
                                            <div class="btn-custom width-auto m-0 ml-auto">
                                                <a href="" class="btn btn-secondary">
                                                    Download
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- location -->
                            <div class="group-activity-location">
                                <div class="top-content">
                                    <div class="group-text">
                                        <h3 class="title color-primary">สถานที่กิจกรรม</h3>
                                    </div>
                                </div>
                                <div class="location">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3878.0338107750213!2d100.4296997148538!3d13.594746604576166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2bb0940b60c95%3A0x7916bd3efb77017b!2z4LiY4Liy4Lij4LiX4Liw4LmA4Lil4LiL4Li14Lif4Li54LmJ4LiU!5e0!3m2!1sen!2sth!4v1605687616968!5m2!1sen!2sth" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>

                            <div class="group-back v2">
                                <a href="/news">ย้อนกลับ</a>
                            </div>

                            <div class="group-social-share d-flex align-items-center justify-content-between">
                                <div class="shared-email d-flex align-items-center">
                                    <div class="social-wrapper d-flex align-items-center">
                                        <div class="text-social color-secondary">Share</div>
                                        <ul class="d-flex align-items-center">
                                            <li class="facebook d-flex align-items-center not-hover">
                                                <img src="{{ asset('template3/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> <span class="color-secondary">5</span> 
                                            </li>
                                            <li class="twitter d-flex align-items-center not-hover">
                                                <img src="{{ asset('template3/assets/images/icons/icon-social-twitter.svg')}}" alt="icon"> <span class="color-secondary">5</span> 
                                            </li>
                                            <li class="line d-flex align-items-center not-hover">
                                                <img src="{{ asset('template3/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"> <span class="color-secondary">5</span> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="email-link d-flex align-items-center">
                                        <div class="item">
                                            <a href="">
                                                <div class="text-email-link">อีเมล</div>
                                                <div class="icon -email">
                                                    <!-- <img src="{{ asset('template3/assets/images/icons/icon-email.png')}}" alt="icon"> -->
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                        <g>
                                                            <path class="st0" d="M12.9,7c1.2-0.3,2.5-0.1,3.5,0.9c0.9,0.9,1.2,2.3,0.9,3.5"/>
                                                            <g>
                                                                <path class="st0" d="M21,12.5c0.8-2.5,0.2-5.4-1.9-7.4c-2-2-4.9-2.6-7.4-1.9"/>
                                                            </g>
                                                            <path class="st0" d="M21,16v1.8c0,1.8-1.5,3.3-3.3,3.3H5.9c-1.8,0-3.3-1.5-3.3-3.3V9.2c0-1.3,1-2.3,2.3-2.3h4.4"/>
                                                            <path class="st0" d="M14.7,13.5l-1.2,1.2c-1,1-2.6,1-3.6,0L3.5,8.3"/>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="clearboth"></div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="">
                                                <div class="text-email-link">Copy Link</div>
                                                <div class="icon -link">
                                                    <!-- <img src="{{ asset('template3/assets/images/icons/icon-link.png')}}" alt="icon"> -->
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                        <g>
                                                            <path class="st0" d="M14.7,6.9h2.9c2.8,0,5.1,2.3,5.1,5.1v0c0,2.8-2.3,5.1-5.1,5.1h-2.9"/>
                                                            <path class="st0" d="M9.3,17.1H6.3c-2.8,0-5.1-2.3-5.1-5.1v0c0-2.8,2.3-5.1,5.1-5.1h2.9"/>
                                                            <line class="st0" x1="7.8" y1="12" x2="16.3" y2="12"/>
                                                        </g>
                                                    </svg>
                                                </div>
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
                                            <!-- <img src="{{ asset('template3/assets/images/icons/icon-like.png')}}" alt="icon"> -->
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="35px" height="35px" viewBox="0 0 35 35" style="enable-background:new 0 0 35 35;" xml:space="preserve">
                                            <path class="st0" d="M19,34h-3C7.7,34,1,27.3,1,19v-3C1,7.7,7.7,1,16,1h3c8.3,0,15,6.7,15,15v3C34,27.3,27.3,34,19,34z"/>
                                            <path class="st1" d="M27.6,19.5c0-1-0.3-1.3-0.7-1.6c0.2-0.3,0.7-1,0.7-1.6c0-1.5-1.4-2-3.7-2c-2.1,0-3.9,0.5-3.9,0.5
                                                c0.1-0.7,1-2.6,1-3.2c0-1.3-0.3-3-1.5-3.6c-0.4-0.2-0.7-0.3-1.1-0.3c-0.7,0-1.2,0.3-1.3,0.5C17,8.3,17,8.7,17,8.8l0.2,2.5
                                                c0,2-3.1,4.5-3.1,7.4v6c0,1.1,1.4,1.8,3.5,1.8h5.7c1.5,0,1.8-0.3,2.2-1c0.3-0.5,0.2-1,0-1.5c0.6-0.2,1.2-0.8,1.4-1.6
                                                c0.1-0.5,0-1-0.2-1.3C27.1,20.9,27.6,20.5,27.6,19.5 M8.9,16h1.8c0.8,0,1.5,0.7,1.5,1.5v8.3c0,0.8-0.7,1.5-1.5,1.5H8.9
                                                c-0.8,0-1.5-0.7-1.5-1.5v-8.3C7.4,16.7,8.1,16,8.9,16"/>
                                            </svg>
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
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="input-custom">
                                                            <div class="custom-control custom-switch">
                                                                <input type="radio" class="custom-control-input" id="customSwitch2" name="Ans_Vote">
                                                                <label class="custom-control-label" for="customSwitch2">ปานกลาง</label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="input-custom">
                                                            <div class="custom-control custom-switch">
                                                                <input type="radio" class="custom-control-input" id="customSwitch3" name="Ans_Vote">
                                                                <label class="custom-control-label" for="customSwitch3">ไม่เห็นด้วย</label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="btn-choice-vote -login">
                                                <div class="show-login">
                                                    <div class="btn icon -regis">
                                                        <a href="">
                                                            Register
                                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                                <g>
                                                                    <path class="st0" d="M21,21.8v-3.7c0-2.1-2.8-3.4-5.5-4l-0.9,2l-2.7,1.5l0,0L9.4,16l-0.9-2c-2.7,0.6-5.5,2-5.5,4v3.7"/>
                                                                    <line class="st0" x1="11.9" y1="17.3" x2="11.9" y2="21.8"/>
                                                                    <path class="st0" d="M8.6,7.2c0,1.5,1.5,3.3,3.3,3.3l0,0l0,0l0,0c1.8,0,3.3-1.8,3.3-3.3l0.1-2.8c0-0.6-1.8-2.2-3.4-2.2
                                                                        c-1.6-0.1-3.4,1.5-3.4,2.2L8.6,7.2z"/>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="btn icon -signin">
                                                        <a href="">
                                                            Sign in 
                                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                                <g>
                                                                    <path class="st0" d="M4.5,11.2l-0.6,5.6c-0.2,1.9,0.8,3.7,2.5,4.3c0.3,0.1,0.8,0.2,1.4,0.2h8.3c0.8,0,1.6-0.2,2.3-0.7
                                                                        c1.3-0.8,1.9-2.3,1.6-3.8l-0.6-5.6C19.5,9.5,4.5,9.5,4.5,11.2z M12,14.3v1.2"/>
                                                                    <path class="st1" d="M17.1,9.5l0.1-0.9c0.1-2.7-1.5-5.1-4-5.7c-0.5-0.1-0.8-0.1-1.2-0.1c-0.5,0-1,0.1-1.6,0.2
                                                                        C8.1,3.7,6.7,6,6.8,8.4v1"/>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </div>
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
                                            <a href="" class="btn btn-outline-dark" style="width: 100%">โหลดเพิ่มเติม</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>