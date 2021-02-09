<div class="section-content">
    <div class="group-mange-section">
        <div class="manage-edit">
            <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="แก้ไข">
        </div>
        <div class="manage-add">
            <img src="{{ asset('template1/assets/images/icons/icon-add.svg')}}" alt="เพิ่ม">
        </div>
    </div>
    <div class="inner-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="top-content flex-row bg-color-secondary">
                        <div class="group-text">
                            <h3 class="title">ดาวน์โหลดคู่มือ</h3>
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
                                    <div class="btn-search ">
                                        <button type="submit" class="icon-search bg-color-primary">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
                    <div class="main-content border-bottom">
                        <div class="page-list-item-wrapper">
                            <div class="topic-category bg-color-primary">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="42.2px" height="42.2px" viewBox="0 0 42.2 42.2" style="enable-background:new 0 0 42.2 42.2;" xml:space="preserve">                                                 
                                    <g>
                                        <path class="st0" d="M34.6,15.7L22.9,4.1H11.8C9.5,4.1,7.6,6,7.6,8.3v25.6c0,2.3,1.9,4.2,4.2,4.2h4.5h14c2.3,0,4.2-1.9,4.2-4.2
                                            V15.7z"/>
                                        <path class="st1" d="M34.6,15.7h-7.6c-2.2,0-4-1.8-4-4V4.1"/>
                                    </g>
                                </svg>
                                <span>แบบฟอร์มสำหรับติดต่อ</span>
                            </div>
                            <div class="group-slide group-list">
                                <div class="list-item">
                                    <div class="item download">
                                        <div class="group-mange-section">
                                            <div class="manage-edit">
                                                <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="แก้ไข">
                                            </div>
                                        </div>
                                        <div class="box-full">
                                            <div class="download-wrap">
                                                <div class="content-link">
                                                    <div class="icon-content">
                                                        <svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            width="42.2px" height="42.2px" viewBox="0 0 42.2 42.2" style="enable-background:new 0 0 42.2 42.2;" xml:space="preserve">                                                 
                                                            <g>
                                                                <path class="st0" d="M34.6,15.7L22.9,4.1H11.8C9.5,4.1,7.6,6,7.6,8.3v25.6c0,2.3,1.9,4.2,4.2,4.2h4.5h14c2.3,0,4.2-1.9,4.2-4.2
                                                                    V15.7z"/>
                                                                <path class="st1" d="M34.6,15.7h-7.6c-2.2,0-4-1.8-4-4V4.1"/>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="text-content">
                                                        แบบฟอร์มสำหรับติดต่อ
                                                    </div>
                                                </div>
                                                <div class="btn-custom btn-custom-skew">
                                                    <a href="/" title="Download" class="btn btn-primary btn-skew">
                                                        Download
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item download">
                                        <div class="group-mange-section">
                                            <div class="manage-edit">
                                                <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="แก้ไข">
                                            </div>
                                        </div>
                                        <div class="box-full">
                                            <div class="download-wrap">
                                                <div class="content-link">
                                                    <div class="icon-content">
                                                        <svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            width="42.2px" height="42.2px" viewBox="0 0 42.2 42.2" style="enable-background:new 0 0 42.2 42.2;" xml:space="preserve">                                                 
                                                            <g>
                                                                <path class="st0" d="M34.6,15.7L22.9,4.1H11.8C9.5,4.1,7.6,6,7.6,8.3v25.6c0,2.3,1.9,4.2,4.2,4.2h4.5h14c2.3,0,4.2-1.9,4.2-4.2
                                                                    V15.7z"/>
                                                                <path class="st1" d="M34.6,15.7h-7.6c-2.2,0-4-1.8-4-4V4.1"/>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="text-content">
                                                        แบบฟอร์มสำหรับติดต่อ
                                                    </div>
                                                </div>
                                                <div class="btn-custom btn-custom-skew">
                                                    <a href="/" title="Download" class="btn btn-primary btn-skew">
                                                        Download
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item download">
                                        <div class="group-mange-section">
                                            <div class="manage-edit">
                                                <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="แก้ไข">
                                            </div>
                                        </div>
                                        <div class="box-full">
                                            <div class="download-wrap">
                                                <div class="content-link">
                                                    <div class="icon-content">
                                                        <svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            width="42.2px" height="42.2px" viewBox="0 0 42.2 42.2" style="enable-background:new 0 0 42.2 42.2;" xml:space="preserve">                                                 
                                                            <g>
                                                                <path class="st0" d="M34.6,15.7L22.9,4.1H11.8C9.5,4.1,7.6,6,7.6,8.3v25.6c0,2.3,1.9,4.2,4.2,4.2h4.5h14c2.3,0,4.2-1.9,4.2-4.2
                                                                    V15.7z"/>
                                                                <path class="st1" d="M34.6,15.7h-7.6c-2.2,0-4-1.8-4-4V4.1"/>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="text-content">
                                                        แบบฟอร์มสำหรับติดต่อ
                                                    </div>
                                                </div>
                                                <div class="btn-custom btn-custom-skew">
                                                    <a href="/" title="Download" class="btn btn-primary btn-skew">
                                                        Download
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item download">
                                        <div class="group-mange-section">
                                            <div class="manage-edit">
                                                <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="แก้ไข">
                                            </div>
                                        </div>
                                        <div class="box-full">
                                            <div class="download-wrap">
                                                <div class="content-link">
                                                    <div class="icon-content">
                                                        <svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            width="42.2px" height="42.2px" viewBox="0 0 42.2 42.2" style="enable-background:new 0 0 42.2 42.2;" xml:space="preserve">                                                 
                                                            <g>
                                                                <path class="st0" d="M34.6,15.7L22.9,4.1H11.8C9.5,4.1,7.6,6,7.6,8.3v25.6c0,2.3,1.9,4.2,4.2,4.2h4.5h14c2.3,0,4.2-1.9,4.2-4.2
                                                                    V15.7z"/>
                                                                <path class="st1" d="M34.6,15.7h-7.6c-2.2,0-4-1.8-4-4V4.1"/>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="text-content">
                                                        แบบฟอร์มสำหรับติดต่อ
                                                    </div>
                                                </div>
                                                <div class="btn-custom btn-custom-skew">
                                                    <a href="/" title="Download" class="btn btn-primary btn-skew">
                                                        Download
                                                    </a>
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

                        <div class="group-social-share d-flex align-items-center justify-content-between">
                            <div class="shared-email d-flex align-items-center">
                                <div class="social-wrapper d-flex align-items-center">
                                    <div class="text-social">
                                        <div class="txt">
                                            Share
                                        </div>
                                    </div>
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
    </div>
</div>