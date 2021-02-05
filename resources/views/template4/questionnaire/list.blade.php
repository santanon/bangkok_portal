<div class="section-content">
    <div class="inner-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="top-content flex-row bg-color-secondary">
                        <div class="group-text">
                            <h3 class="title">QUESTIONNAIRE</h3>
                            <p class="desc">The Bangkok Metropolitan Council Secretariat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                         <form action="">
                @csrf <!-- {{ csrf_field() }} -->
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="input-custom inp-calendar">
                                        <input id="start_date" class="style-input" type="text" name="datefilter" placeholder="จากวันที่" autocomplete="off" data-provide="datepicker" data-date-language="th-th" />
                                        <div class="icon-calendar"><i class="far fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="input-custom inp-calendar">
                                        <input id="end_date" class="style-input" type="text" name="datefilter" placeholder="ถึงวันที่" autocomplete="off" data-provide="datepicker" data-date-language="th-th" />
                                        <div class="icon-calendar"><i class="far fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="input-custom inp-search">
                                        <input class="style-input" type="text" name="" placeholder="คำค้นหา" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="btn-custom width-full btn-custom-skew skew-color-gray">
                                        <button class="btn btn-default icn-right">
                                            ค้นหา
                                            <svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="20px" height="20px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                            <g>
                                                <circle class="st0" cx="9.3" cy="9.3" r="7.3"/>
                                                <line class="st0" x1="14.9" y1="14.9" x2="18" y2="18"/>
                                            </g>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="main-content">
                        <div class="group-slide group-list">
                            <div class="list-item">
                                <div class="item question">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="right">                                                 
                                                <div class="text-content">
                                                    <a href="questionnaire-detail-4">
                                                        ร่วมส่งแรงใจให้เยาวชนนักเตะรุ่นใหม่ชิงชัยเอกสารที่ต้องใช้ 1. สูติบัตร พร้อมสำเนา 2. ทะเบียนบ้าน พร้อมสำเนา
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="left">
                                                <div class="text-ontop">
                                                    View : 340
                                                </div>
                                                <div class="progress-content">
                                                    <div class="percent-voter">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-color-secondary" role="progressbar" style="width: 6%;" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="total-people"><span>155</span> คน ร่วมตอบคำถาม <span>(52%)</span></div>
                                                </div>
                                                <div class="text-onbottom">
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                            <img src="{{ asset('template4/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> <span class="color-secondary">5</span>
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template4/assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span>
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template4/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item question">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="right">                                                 
                                                <div class="text-content">
                                                    <a href="questionnaire-detail-4">
                                                        ร่วมส่งแรงใจให้เยาวชนนักเตะรุ่นใหม่ชิงชัยเอกสารที่ต้องใช้ 1. สูติบัตร พร้อมสำเนา 2. ทะเบียนบ้าน พร้อมสำเนา
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="left">
                                                <div class="text-ontop">
                                                    View : 340
                                                </div>
                                                <div class="progress-content">
                                                    <div class="percent-voter">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-color-secondary" role="progressbar" style="width: 6%;" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="total-people"><span>155</span> คน ร่วมตอบคำถาม <span>(52%)</span></div>
                                                </div>
                                                <div class="text-onbottom">
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                            <img src="{{ asset('template4/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> <span class="color-secondary">5</span>
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template4/assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span>
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template4/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item question">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="right">                                                 
                                                <div class="text-content">
                                                    <a href="questionnaire-detail-4">
                                                        ร่วมส่งแรงใจให้เยาวชนนักเตะรุ่นใหม่ชิงชัยเอกสารที่ต้องใช้ 1. สูติบัตร พร้อมสำเนา 2. ทะเบียนบ้าน พร้อมสำเนา
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="left">
                                                <div class="text-ontop">
                                                    View : 340
                                                </div>
                                                <div class="progress-content">
                                                    <div class="percent-voter">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-color-secondary" role="progressbar" style="width: 6%;" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="total-people"><span>155</span> คน ร่วมตอบคำถาม <span>(52%)</span></div>
                                                </div>
                                                <div class="text-onbottom">
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                            <img src="{{ asset('template4/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> <span class="color-secondary">5</span>
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template4/assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span>
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template4/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item question">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="right">                                                 
                                                <div class="text-content">
                                                    <a href="questionnaire-detail-4">
                                                        ร่วมส่งแรงใจให้เยาวชนนักเตะรุ่นใหม่ชิงชัยเอกสารที่ต้องใช้ 1. สูติบัตร พร้อมสำเนา 2. ทะเบียนบ้าน พร้อมสำเนา
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="left">
                                                <div class="text-ontop">
                                                    View : 340
                                                </div>
                                                <div class="progress-content">
                                                    <div class="percent-voter">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-color-secondary" role="progressbar" style="width: 6%;" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="total-people"><span>155</span> คน ร่วมตอบคำถาม <span>(52%)</span></div>
                                                </div>
                                                <div class="text-onbottom">
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                            <img src="{{ asset('template4/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> <span class="color-secondary">5</span>
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template4/assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span>
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template4/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item question">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="right">                                                 
                                                <div class="text-content">
                                                    <a href="questionnaire-detail-4">
                                                        ร่วมส่งแรงใจให้เยาวชนนักเตะรุ่นใหม่ชิงชัยเอกสารที่ต้องใช้ 1. สูติบัตร พร้อมสำเนา 2. ทะเบียนบ้าน พร้อมสำเนา
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="left">
                                                <div class="text-ontop">
                                                    View : 340
                                                </div>
                                                <div class="progress-content">
                                                    <div class="percent-voter">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-color-secondary" role="progressbar" style="width: 6%;" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="total-people"><span>155</span> คน ร่วมตอบคำถาม <span>(52%)</span></div>
                                                </div>
                                                <div class="text-onbottom">
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                            <img src="{{ asset('template4/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> <span class="color-secondary">5</span>
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template4/assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span>
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template4/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
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
    </div> 
</div>