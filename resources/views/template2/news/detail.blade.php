<div class="section-content">
    <div class="container">
        <div class="inner-content">
            <div class="top-content">
                <div class="group-text__no-styled">
                    <h3 class="title">การดำเนินงานด้านความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการทำงานของสำนักงานเลขานุการสภากรุงเทพมหานคร </h3>
                </div>
            </div>
            <div class="post-content d-flex justify-content-between align-items-center">
                <div class="public-post">
                    <i class="far fa-calendar"></i> 2 กรกฎาคม 2556
                </div>
                <div class="source-post color-secondary">
                    แหล่งที่มา <span class="bg-color-secondary">PR BKK</span>
                </div>
            </div>
            <div class="main-content border-bottom">
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
                    <a href="" class="item">
                        <div class="icon-content">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                            <g>
                                <line class="st0" x1="15.2" y1="14.1" x2="15.2" y2="20.3"/>
                                <polyline class="st0" points="18.4,18.3 15.2,21.4 12,18.3 	"/>
                                <path class="st1" d="M9.4,21.4H6.9c-1.3,0-2.3-1-2.3-2.3V4.9c0-1.3,1-2.3,2.3-2.3H13l6.4,6.4v5.3"/>
                                <path class="st2" d="M19.4,9h-4.2C14,9,13,8,13,6.8V2.6"/>
                            </g>
                            </svg>
                        </div>
                        <div class="text-content flex-grow-1">
                            <p>
                                สื่อประชาสัมพันธ์สื่อองค์ความรู้ที่เกี่ยวข้องกับการป้องกันโรคติดเชื้อไวรัสโคโรนา
                            </p>
                        </div>
                        <div class="text-onbottom">
                            <p>Download</p>
                        </div>
                    </a>
                </div>
                <!-- location -->
                <div class="group-activity-location">
                    <div class="top-content">
                        <div class="group-text__no-styled">
                            <h3 class="title color-primary">สถานที่กิจกรรม</h3>
                        </div>
                    </div>
                    <div class="location">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3878.0338107750213!2d100.4296997148538!3d13.594746604576166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2bb0940b60c95%3A0x7916bd3efb77017b!2z4LiY4Liy4Lij4LiX4Liw4LmA4Lil4LiL4Li14Lif4Li54LmJ4LiU!5e0!3m2!1sen!2sth!4v1605687616968!5m2!1sen!2sth" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                
                <div class="group-back">
                    <a href="/news">ย้อนกลับ</a>
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
                        <div class="view-count">
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
                                        <ul>
                                            <li>
                                                <a href="">
                                                    Register<span class="icon-register"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    Sign in<span class="icon-signin"></span>
                                                </a>
                                            </li>
                                        </ul>
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