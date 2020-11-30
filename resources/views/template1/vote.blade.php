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
                        <div class="top-content">
                            <div class="group-text">
                                <h3 class="title color-primary">VOTE</h3>
                                <p class="desc color-secondary">The Bangkok Metropolitan Council Secretariat </p>
                            </div>
                            <div class="group-gotoall">
                                <a href="/vote" class="btn btn-outline-dark">หัวข้อโหวตทั้งหมด</a>
                            </div>
                        </div>
                        <div class="main-content">
                            <div class="group-vote">
                                <div class="score-wrapper">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-4 col-4">
                                            <div class="text-score text-center">
                                                <div class="num-vote">1.6K</div>
                                                <div class="text-vote">ผู้โหวต</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-8 col-8">
                                            <div class="percent-voter">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">(75%)<br/><span>ผู้โหวต</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-4">
                                            <div class="text-score text-center">
                                                <div class="num-vote">3.6K</div>
                                                <div class="text-vote">ผู้เข้าชม</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-8 col-8">
                                            <div class="text-score text-center">
                                                <div class="num-vote">200</div>
                                                <div class="text-vote">ออนไลน์</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="question-choice">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="text-question">
                                                    ร่วมส่งแรงใจให้เยาวชนนักเตะรุ่นใหม่ชิงชัยเอกสารที่ต้องใช้ 
                                                    1. สูติบัตร พร้อมสำเนา  2. ทะเบียนบ้าน พร้อมสำเนา
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
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
                                                    <div class="btn-custom bg-primary mg-left-auto">
                                                        <div class="input-custom">
                                                            <input type="submit" value="VOTE" class="btn btn-primary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="social-wrapper">
                                        <ul class="d-flex align-items-center">
                                            <li class="facebook d-flex align-items-center not-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> 5
                                            </li>
                                            <li class="twitter d-flex align-items-center not-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-social-twitter.svg')}}" alt="icon">  5
                                            </li>
                                            <li class="line d-flex align-items-center not-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon">   5
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>