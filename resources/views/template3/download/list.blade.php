<div class="section-content">
                <div class="container">
                    <div class="inner-content">
                        <div class="top-content border-bottom-secondary">
                            <div class="group-text">
                                <h3 class="title color-primary">ดาวน์โหลดคู่มือ</h3>
                                <p class="desc color-secondary">The Bangkok Metropolitan Council Secretariat </p>
                            </div>
                        </div>
                        <div class="search-content">
                             <form action="">
                @csrf <!-- {{ csrf_field() }} -->
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="input-custom inp-categories">
                                            <div class="select-wrapper width-full">
                                                <select name="month" class="slc">
                                                    <optgroup label="ประเภทข่าว">
                                                        <option value="">ประเภทข่าว 1</option>
                                                        <option value="">ประเภทข่าว 2</option>
                                                        <option value="">ประเภทข่าว 3</option>
                                                        <option value="">ประเภทข่าว 4</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
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
                                    <div class="col-lg-4">
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
                            <div class="page-list-item-wrapper">
                                <div class="topic-category">
                                    <div class="bg-img">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 1200 80" style="enable-background:new 0 0 1200 80;" xml:space="preserve">
                                        <path class="st0" d="M1200,19v61H0V0h146.7c3.8,0,7.4,1.4,10.2,4l11.6,11c2.7,2.5,6.4,4,10.2,4H1200z"/>
                                        <g>
                                            <polygon class="st1" points="1182.7,43.1 1147.1,79.9 1137,70.2 1156.4,50.1 1101.2,50.1 1101.2,36.1 1156.4,36.1 1139.8,19 
                                                1159.3,19 	"/>
                                            <path class="st1" d="M1085,66v14h-24.9c-16.7,0-29.9-13.1-29.9-29.9V19h14v31.1c0,9.1,6.8,15.9,15.9,15.9H1085z"/>
                                        </g>
                                        </svg>
                                        <div class="content">
                                            <div class="icon-content">
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="42.2px" height="42.2px" viewBox="0 0 42.2 42.2" style="enable-background:new 0 0 42.2 42.2;" xml:space="preserve">                                                 
                                                    <g>
                                                        <path class="st0" d="M34.6,15.7L22.9,4.1H11.8C9.5,4.1,7.6,6,7.6,8.3v25.6c0,2.3,1.9,4.2,4.2,4.2h4.5h14c2.3,0,4.2-1.9,4.2-4.2
                                                            V15.7z"></path>
                                                        <path class="st1" d="M34.6,15.7h-7.6c-2.2,0-4-1.8-4-4V4.1"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="text-content">
                                                แบบฟอร์มสำหรับติดต่อ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- list file download -->
                                <div class="group-list-downloadfile list">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="item">
                                                <div class="date-post color-secondary">
                                                    25 พ.ย. 2563
                                                </div>
                                                <div class="icon-content">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        width="42.2px" height="42.2px" viewBox="0 0 42.2 42.2" style="enable-background:new 0 0 42.2 42.2;" xml:space="preserve">                                                 
                                                        <g>
                                                            <path class="st0" d="M34.6,15.7L22.9,4.1H11.8C9.5,4.1,7.6,6,7.6,8.3v25.6c0,2.3,1.9,4.2,4.2,4.2h4.5h14c2.3,0,4.2-1.9,4.2-4.2
                                                                V15.7z"/>
                                                            <path class="st1" d="M34.6,15.7h-7.6c-2.2,0-4-1.8-4-4V4.1"/>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="text-content">
                                                        เด็กอายุกี่ขวบต้องแจ้งการเข้าเรียนตามกฎหมาย และใช้เอกสารอะไรบ้าง? (.docx)
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
                                                <div class="date-post color-secondary">
                                                    25 พ.ย. 2563
                                                </div>
                                                <div class="icon-content">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        width="42.2px" height="42.2px" viewBox="0 0 42.2 42.2" style="enable-background:new 0 0 42.2 42.2;" xml:space="preserve">                                                 
                                                        <g>
                                                            <path class="st0" d="M34.6,15.7L22.9,4.1H11.8C9.5,4.1,7.6,6,7.6,8.3v25.6c0,2.3,1.9,4.2,4.2,4.2h4.5h14c2.3,0,4.2-1.9,4.2-4.2
                                                                V15.7z"/>
                                                            <path class="st1" d="M34.6,15.7h-7.6c-2.2,0-4-1.8-4-4V4.1"/>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="text-content">
                                                        เด็กอายุกี่ขวบต้องแจ้งการเข้าเรียนตามกฎหมาย และใช้เอกสารอะไรบ้าง? (.pdf)
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
                                                        width="35px" height="35px" viewBox="0 0 35 35" style="enable-background:new 0 0 35 35;" xml:space="preserve">
                                                    
                                                    <circle class="st0" cx="17.5" cy="17.5" r="16.5"/>
                                                    <g>
                                                        <path class="st0" d="M18.4,12.5c1.2-0.3,2.5-0.1,3.5,0.9c0.9,0.9,1.2,2.3,0.9,3.5"/>
                                                        <g>
                                                            <path class="st0" d="M26.5,18c0.8-2.5,0.2-5.4-1.9-7.4c-2-2-4.9-2.6-7.4-1.9"/>
                                                        </g>
                                                        <path class="st0" d="M26.5,21.5v1.8c0,1.8-1.5,3.3-3.3,3.3H11.4c-1.8,0-3.3-1.5-3.3-3.3v-8.6c0-1.3,1-2.3,2.3-2.3h4.4"/>
                                                        <path class="st0" d="M20.2,19L19,20.2c-1,1-2.6,1-3.6,0l-6.4-6.4"/>
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
                                                        width="35px" height="35px" viewBox="0 0 35 35" style="enable-background:new 0 0 35 35;" xml:space="preserve">
                                                    <circle class="st0" cx="17.5" cy="17.5" r="16.5"/>
                                                    <g>
                                                        <path class="st0" d="M13.9,17.5h7.3"/>
                                                        <path class="st0" d="M15.1,21.1h-3.6c-2,0-3.6-1.6-3.6-3.6s1.6-3.6,3.6-3.6h3.6"/>
                                                        <path class="st0" d="M19.9,13.9h3.6c2,0,3.6,1.6,3.6,3.6s-1.6,3.6-3.6,3.6h-3.6"/>
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
                                            <path class="st0" d="M27.6,19.5c0-1-0.3-1.3-0.7-1.6c0.2-0.3,0.7-1,0.7-1.6c0-1.5-1.4-2-3.7-2c-2.1,0-3.9,0.5-3.9,0.5
                                                c0.1-0.7,1-2.6,1-3.2c0-1.3-0.3-3-1.5-3.6c-0.4-0.2-0.7-0.3-1.1-0.3c-0.7,0-1.2,0.3-1.3,0.5c-0.1,0.1-0.1,0.5-0.1,0.6l0.2,2.5
                                                c0,2-3.1,4.5-3.1,7.4v6c0,1.1,1.4,1.8,3.5,1.8h5.7c1.5,0,1.8-0.3,2.2-1c0.3-0.5,0.2-1,0-1.5c0.6-0.2,1.2-0.8,1.4-1.6
                                                c0.1-0.5,0-1-0.2-1.3C27.1,20.9,27.6,20.5,27.6,19.5 M8.9,16h1.8c0.8,0,1.5,0.7,1.5,1.5v8.3c0,0.8-0.7,1.5-1.5,1.5H8.9
                                                c-0.8,0-1.5-0.7-1.5-1.5v-8.3C7.4,16.7,8.1,16,8.9,16"/>
                                            <circle class="st1" cx="17.5" cy="17.5" r="16.5"/>
                                            </svg>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>