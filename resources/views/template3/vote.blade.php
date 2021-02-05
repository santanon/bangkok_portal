<!-- VOTE -->
<div id="vote" data-id="vote" class="section-content bg-color-white">
    <div class="group-mange-section">
        <div class="manage-tools">
            <ul>
                <li class="order-list">จัดการ</li>
                <li class="order-list">ลบ</li>
                <li class="order-list">ซ่อน</li>
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
            <div class="top-content border-bottom">
                <div class="group-text">
                    <h3 class="title color-primary">VOTE</h3>
                    <p class="desc color-secondary">The Bangkok Metropolitan Council Secretariat</p>
                </div>
                <div class="group-gotoall">
                    <a href="/vote-3">
                        MORE 
                        <div class="icon-more">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                <g>
                                    <path class="st0" d="M3.9,4.5C3.4,5,3.4,5.8,3.9,6.3L9.6,12l-5.7,5.7l0,0c-0.5,0.5-0.5,1.4,0,1.9l0,0c0.5,0.5,1.4,0.5,1.9,0
                                        l6.6-6.6l0,0c0.5-0.5,0.5-1.4,0-1.9L5.7,4.5l0,0C5.2,4,4.4,4,3.9,4.5L3.9,4.5z"/>
                                    <path class="st0" d="M11.6,4.5c-0.5,0.5-0.5,1.3,0,1.8l5.7,5.7l-5.7,5.7l0,0c-0.5,0.5-0.5,1.4,0,1.9l0,0c0.5,0.5,1.4,0.5,1.9,0
                                        l6.6-6.6l0,0c0.5-0.5,0.5-1.4,0-1.9l-6.7-6.6l0,0C12.9,4,12.1,4,11.6,4.5L11.6,4.5z"/>
                                </g>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
            <div class="main-content">
                <div class="group-vote">
                    <div class="question-choice">
                         <form action="">
                @csrf <!-- {{ csrf_field() }} -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-question">
                                        ร่วมส่งแรงใจให้เยาวชนนักเตะรุ่นใหม่ชิงชัยเอกสารที่ต้องใช้ 
                                        1. สูติบัตร พร้อมสำเนา  2. ทะเบียนบ้าน พร้อมสำเนา
                                    </div>
                                </div>
                                <div class="col-lg-12">
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
                                        <div class="btn-custom d-flex justify-content-start">
                                            <button class="btn btn-primary width-full" type="button">VOTE</button>
                                        </div>
                                    </div>
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
                                        <div class="progress-bar bg-color-primary" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">(75%)<br/><span>ผู้โหวต</span></div>
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
                    
                    <!-- <div class="top-content">
                        <div class="group-text">
                            <h3 class="title color-primary">ผลโหวต</h3>
                        </div>
                    </div> -->

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

                    <div class="social-wrapper">
                        <ul class="d-flex align-items-center">
                            <li class="facebook d-flex align-items-center not-hover">
                                <img src="{{ asset('template3/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                            </li>
                            <li class="twitter d-flex align-items-center not-hover">
                                <img src="{{ asset('template3/assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                            </li>
                            <li class="line d-flex align-items-center not-hover">
                                <img src="{{ asset('template3/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>