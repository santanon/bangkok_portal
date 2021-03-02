<div class="section-content">
    <div class="group-mange-section">
        <div class="manage-edit">
            <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="แก้ไข">
        </div>
        <div class="manage-add">
            <img src="{{ asset('template1/assets/images/icons/icon-add.svg')}}" alt="เพิ่ม">
        </div>
    </div>

                <div class="container">
                    <div class="inner-content">
                        <div class="top-content border-bottom">
                            <div class="group-text">
                                <h3 class="title color-primary">QUESTIONNAIRE</h3>
                                <p class="desc color-secondary">The Bangkok Metropolitan Council Secretariat</p>
                            </div>
                        </div>
                        <div class="search-content">
                             <form action="">
                @csrf <!-- {{ csrf_field() }} -->
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="input-custom inp-calendar">
                                            <input id="start_date" class="style-input" type="text" name="datefilter" placeholder="จากวันที่" autocomplete="off" data-provide="datepicker" data-date-language="th-th" />
                                            <div class="icon-calendar"><em class="far fa-calendar"></em></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="input-custom inp-calendar">
                                            <input id="end_date" class="style-input" type="text" name="datefilter" placeholder="ถึงวันที่" autocomplete="off" data-provide="datepicker" data-date-language="th-th" />
                                            <div class="icon-calendar"><em class="far fa-calendar"></em></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="input-custom inp-search">
                                            <input class="style-input" type="text" name="" placeholder="คำค้นหา" />
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="btn-search btn-stick-border">
                                            <button type="submit" class="icon-search bg-color-secondary">
                                                ค้นหา
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="main-content">
                            <div class="group-slide group-list">
                                <div class="list-item">
                                    <div class="item -question">
                                        <div class="group-mange-section">
                                            <div class="manage-tools">
                                                <ul>
                                                    <li class="order-list">จัดการ</li>
                                                    <li class="order-list">ลบ</li>
                                                    <li class="order-list">ซ่อน</li>
                                                    <li class="order-list order-close">ปิด</li>
                                                </ul>
                                            </div> 
                                            <div class="manage-edit">
                                                <img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-edit.svg" alt="icon">
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <div class="left bg-color-secondary active">
                                                    <div class="progress-content">
                                                        <!-- Progress bar 1 -->
                                                        <div class="progress" data-percentage="74">
                                                            <span class="progress-left">
                                                                <span class="progress-bar"></span>
                                                            </span>
                                                            <span class="progress-right">
                                                                <span class="progress-bar"></span>
                                                            </span>
                                                            <div class="progress-value">
                                                                <div>74%</div>
                                                            </div>
                                                        </div>
                                                        <!-- END -->
                                                    </div>
                                                    <div class="text-onbottom bg-color-secondary">
                                                        ผู้ตอบคำถาม<br>
                                                        <span>155 คน</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9">
                                                <div class="right">                                        
                                                    <div class="text-content">
                                                        <a href="/questionnaire-detail-3">
                                                            ร่วมส่งแรงใจให้เยาวชนนักเตะรุ่นใหม่ชิงชัยเอกสารที่ต้องใช้ 1. สูติบัตร พร้อมสำเนา 2. ทะเบียนบ้าน พร้อมสำเนา
                                                        </a>
                                                    </div>
                                                    <div class="text-onbottom">
                                                        <div class="social-wrapper">
                                                            <ul class="d-flex align-items-center">
                                                                <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> <span class="color-secondary">5</span>
                                                                </li>
                                                                <li class="twitter d-flex align-items-center not-hover">
                                                                    <img src="{{ asset('template1/assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span>
                                                                </li>
                                                                <li class="line d-flex align-items-center not-hover">
                                                                    <img src="{{ asset('template1/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="text-view color-secondary">View : 340</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item -question">
                                        <div class="group-mange-section">
                                            <div class="manage-tools">
                                                <ul>
                                                    <li class="order-list">จัดการ</li>
                                                    <li class="order-list">ลบ</li>
                                                    <li class="order-list">ซ่อน</li>
                                                    <li class="order-list order-close">ปิด</li>
                                                </ul>
                                            </div> 
                                            <div class="manage-edit">
                                                <img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-edit.svg" alt="icon">
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <div class="left bg-color-secondary active">
                                                    <div class="progress-content">
                                                        <!-- Progress bar 1 -->
                                                        <div class="progress" data-percentage="74">
                                                            <span class="progress-left">
                                                                <span class="progress-bar"></span>
                                                            </span>
                                                            <span class="progress-right">
                                                                <span class="progress-bar"></span>
                                                            </span>
                                                            <div class="progress-value">
                                                                <div>74%</div>
                                                            </div>
                                                        </div>
                                                        <!-- END -->
                                                    </div>
                                                    <div class="text-onbottom bg-color-secondary">
                                                        ผู้ตอบคำถาม<br>
                                                        <span>155 คน</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9">
                                                <div class="right">                                        
                                                    <div class="text-content">
                                                        <a href="/questionnaire-detail-3">
                                                            ร่วมส่งแรงใจให้เยาวชนนักเตะรุ่นใหม่ชิงชัยเอกสารที่ต้องใช้ 1. สูติบัตร พร้อมสำเนา 2. ทะเบียนบ้าน พร้อมสำเนา
                                                        </a>
                                                    </div>
                                                    <div class="text-onbottom">
                                                        <div class="social-wrapper">
                                                            <ul class="d-flex align-items-center">
                                                                <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> <span class="color-secondary">5</span>
                                                                </li>
                                                                <li class="twitter d-flex align-items-center not-hover">
                                                                    <img src="{{ asset('template1/assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span>
                                                                </li>
                                                                <li class="line d-flex align-items-center not-hover">
                                                                    <img src="{{ asset('template1/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="text-view color-secondary">View : 340</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pagination-custom d-flex justify-content-end align-items-center">
                                <div class="all-page">
                                    Page <span>1</span> of <span>120</span>
                                </div>
                                <div class="item-page d-flex justify-content-end align-items-center">
                                    <div class="slide-prev disabled"></div>
                                    <div class="input-custom">
                                        <input type="text" class="style-input" value="1">
                                    </div>
                                    <div class="slide-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>