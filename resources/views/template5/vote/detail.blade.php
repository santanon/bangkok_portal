<div class="section-content">
    <div class="container">
        <div class="inner-content">
            <div class="row">
                <div class="col-lg-2">
                    <div class="main-content p-0">
                        <div class="group-back">
                            <a href="/vote-5">
                                <div class="icon-more">
                                    <em class="fas fa-arrow-left"></em>
                                </div>
                                <p> ย้อนกลับ</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="main-content pt-0">
                        <div class="group-slide">
                            <div class="list-item">
                                <div class="item -question -inside">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">                                      
                                            <div class="text-content page-detail">
                                                <div class="title color-primary">
                                                    ร่วมส่งแรงใจให้เยาวชนนักเตะรุ่นใหม่ชิงชัย
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-content">
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
                                    <div class="btn-custom d-flex justify-content-center">
                                        <button class="btn btn-primary width-full" type="button">VOTE</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="score-wrapper">
                            <div class="row justify-content-center">
                                <div class="col-lg-2 col-md-4 col-12">
                                    <div class="text-score text-center">
                                        <div class="num-vote">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="160px" height="140px" viewBox="0 0 160 140" style="enable-background:new 0 0 160 140;" xml:space="preserve">
                                                <style type="text/css">
                                                    
                                                </style>
                                                <path class="st0" d="M28.7,131.9c-28.4-28.4-28.4-74.3,0-102.7s74.3-28.4,102.7,0s28.4,74.3,0,102.7"/>
                                            </svg>
                                            <span>1.6K</span> 
                                        </div>
                                        <div class="text-vote">ผู้โหวต</div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-12">
                                    <div class="text-score text-center">
                                        <div class="num-vote">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="160px" height="140px" viewBox="0 0 160 140" style="enable-background:new 0 0 160 140;" xml:space="preserve">
                                                <style type="text/css">
                                                    
                                                </style>
                                                <path class="st0" d="M28.7,131.9c-28.4-28.4-28.4-74.3,0-102.7s74.3-28.4,102.7,0s28.4,74.3,0,102.7"/>
                                            </svg>
                                            <span>3.6K</span>
                                        </div>
                                        <div class="text-vote">ผู้เข้าชม</div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-12">
                                    <div class="text-score text-center">
                                        <div class="num-vote">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="160px" height="140px" viewBox="0 0 160 140" style="enable-background:new 0 0 160 140;" xml:space="preserve">
                                                <style type="text/css">
                                                    
                                                </style>
                                                <path class="st0" d="M28.7,131.9c-28.4-28.4-28.4-74.3,0-102.7s74.3-28.4,102.7,0s28.4,74.3,0,102.7"/>
                                            </svg>
                                            <span>200</span>
                                        </div>
                                        <div class="text-vote">ออนไลน์</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="top-content">
                            <div class="group-text">
                                <h3 class="title color-primary text-center">ผลโหวต</h3>
                            </div>
                        </div>

                        <div class="score-choice mb-5">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="text-score">
                                        <div class="text-vote">พอใจมากที่สุด</div>
                                        <div class="percent-vote">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="num-vote">155คน ร่วมโหวต (25%)</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="text-score">
                                        <div class="text-vote">พอใจมาก</div>
                                        <div class="percent-vote">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="num-vote">155คน ร่วมโหวต (25%)</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="text-score">
                                        <div class="text-vote">ปานกลาง</div>
                                        <div class="percent-vote">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="num-vote">155คน ร่วมโหวต (25%)</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="text-score">
                                        <div class="text-vote">เฉย</div>
                                        <div class="percent-vote">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 49%" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="num-vote">155คน ร่วมโหวต (49%)</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="text-score">
                                        <div class="text-vote">ไม่น่าพอใจ</div>
                                        <div class="percent-vote">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="num-vote">155คน ร่วมโหวต (25%)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group-social-share d-flex align-items-center justify-content-between">
                        <div class="shared-email d-flex align-items-center">
                            <div class="social-wrapper d-flex align-items-center">
                                <div class="text-social color-secondary">Share</div>
                                <ul class="d-flex align-items-center">
                                    <li class="facebook d-flex align-items-center not-hover">
                                        <img src="{{ asset('../assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> <span class="color-secondary">5</span> 
                                    </li>
                                    <li class="twitter d-flex align-items-center not-hover">
                                        <img src="{{ asset('../assets/images/icons/icon-social-twitter.svg')}}" alt="icon"> <span class="color-secondary">5</span> 
                                    </li>
                                    <li class="line d-flex align-items-center not-hover">
                                        <img src="{{ asset('../assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"> <span class="color-secondary">5</span> 
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