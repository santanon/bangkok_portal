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
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="top-content">
                                    <div class="group-text">
                                        <h3 class="title color-primary">Banner Link</h3>
                                        <p class="desc color-secondary">The Bangkok Metropolitan Council Secretariat </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="search-content">
                                     <form action="">
                @csrf <!-- {{ csrf_field() }} -->
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="input-custom inp-calendar">
                                                    <input id="start_date" class="style-input" type="text" name="datefilter" placeholder="จากวันที่" autocomplete="off" data-provide="datepicker" data-date-language="th-th" />
                                                    <div class="icon-calendar"><i class="far fa-calendar"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="input-custom inp-calendar">
                                                    <input id="end_date" class="style-input" type="text" name="datefilter" placeholder="ถึงวันที่" autocomplete="off" data-provide="datepicker" data-date-language="th-th" />
                                                    <div class="icon-calendar"><i class="far fa-calendar"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div class="btn-search">
                                                    <button type="submit" class="icon-search bg-color-secondary">
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
                        
                        
                        <div class="main-content">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="sub-news inside">
                                        <div class="group-mange-section no-mg right-0">
                                            <div class="manage-tools">
                                                <ul>
                                                    <li class="order-list">จัดการ</li>
                                                    <li class="order-list">ลบ</li>
                                                    <li class="order-list">ซ่อน</li>
                                                    <li class="order-list order-close">ปิด</li>
                                                </ul>
                                            </div> 
                                            <div class="manage-edit">
                                                <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-lg-12">
                                                <div class="img-news" style="background-image: url('../../template1/assets/images/img-news-demo2.png');">
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="content -bannerlink">
                                                    <div class="date">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-new.png')}}" alt="icon">
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="#">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกันหน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกันหน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกันหน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="sub-news inside">
                                        <div class="group-mange-section no-mg right-0">
                                            <div class="manage-tools">
                                                <ul>
                                                    <li class="order-list">จัดการ</li>
                                                    <li class="order-list">ลบ</li>
                                                    <li class="order-list">ซ่อน</li>
                                                    <li class="order-list order-close">ปิด</li>
                                                </ul>
                                            </div> 
                                            <div class="manage-edit">
                                                <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-lg-12">
                                                <div class="img-news" style="background-image: url('../../template1/assets/images/img-news-demo2.png');">
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="content -bannerlink">
                                                    <div class="date">
                                                        <!--<img src="{{ asset('template1/assets/images/icons/icon-new.png')}}" alt="icon">-->
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="#">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="sub-news inside">
                                        <div class="group-mange-section no-mg right-0">
                                            <div class="manage-tools">
                                                <ul>
                                                    <li class="order-list">จัดการ</li>
                                                    <li class="order-list">ลบ</li>
                                                    <li class="order-list">ซ่อน</li>
                                                    <li class="order-list order-close">ปิด</li>
                                                </ul>
                                            </div> 
                                            <div class="manage-edit">
                                                <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-lg-12">
                                                <div class="img-news" style="background-image: url('../../template1/assets/images/img-news-demo2.png');">
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="content -bannerlink">
                                                    <div class="date">
                                                        <!--<img src="{{ asset('template1/assets/images/icons/icon-new.png')}}" alt="icon">-->
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="#">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="sub-news inside">
                                        <div class="group-mange-section no-mg right-0">
                                            <div class="manage-tools">
                                                <ul>
                                                    <li class="order-list">จัดการ</li>
                                                    <li class="order-list">ลบ</li>
                                                    <li class="order-list">ซ่อน</li>
                                                    <li class="order-list order-close">ปิด</li>
                                                </ul>
                                            </div> 
                                            <div class="manage-edit">
                                                <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-lg-12">
                                                <div class="img-news" style="background-image: url('../../template1/assets/images/img-news-demo2.png');">
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="content -bannerlink">
                                                    <div class="date">
                                                        <!--<img src="{{ asset('template1/assets/images/icons/icon-new.png')}}" alt="icon">-->
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="#">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                   <div class="sub-news inside">
                                        <div class="group-mange-section no-mg right-0">
                                            <div class="manage-tools">
                                                <ul>
                                                    <li class="order-list">จัดการ</li>
                                                    <li class="order-list">ลบ</li>
                                                    <li class="order-list">ซ่อน</li>
                                                    <li class="order-list order-close">ปิด</li>
                                                </ul>
                                            </div> 
                                            <div class="manage-edit">
                                                <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-lg-12">
                                                <div class="img-news" style="background-image: url('../../template1/assets/images/img-news-demo2.png');">
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="content -bannerlink">
                                                    <div class="date">
                                                        <!--<img src="{{ asset('template1/assets/images/icons/icon-new.png')}}" alt="icon">-->
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="#">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row no-gutters">
                                        <div class="col-lg-6">
                                            <div class="add-news">
                                                <i class="fas fa-plus"></i>
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