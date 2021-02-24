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
                        <div class="group-text flex-wrap">
                            <h3 class="title">Banner Link</h3>
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
                    <div class="main-content">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="sub-news">
                                    <div class="group-mange-section">
                                        <div class="manage-tools">
                                            <ul>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('NEWS','manage-admin/edit?m=portal_website_news');">แก้ไข</a></li> 
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_hide">ซ่อน</a></li>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_delete">ลบ</a></li>
                                                <li class="order-list order-close">ปิด</li>
                                            </ul>
                                        </div>
                                        <div class="manage-edit">
                                            <img src="{{ asset('../../assets/images/icons/icon-edit.svg')}}" alt="icon">
                                        </div> 
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-lg-12">
                                            <div class="img-news" style="background-image: url('../../assets/images/img-news-demo2.png');">
                                                <div class="icon-status"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="content -bannerlink">
                                                <div class="desc-news">
                                                    <a href="/news-detail-4">
                                                        หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="sub-news">
                                    <div class="group-mange-section">
                                        <div class="manage-tools">
                                            <ul>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('NEWS','manage-admin/edit?m=portal_website_news');">แก้ไข</a></li> 
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_hide">ซ่อน</a></li>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_delete">ลบ</a></li>
                                                <li class="order-list order-close">ปิด</li>
                                            </ul>
                                        </div>
                                        <div class="manage-edit">
                                            <img src="{{ asset('../../assets/images/icons/icon-edit.svg')}}" alt="icon">
                                        </div> 
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-lg-12">
                                            <div class="img-news" style="background-image: url('../../assets/images/img-news-demo2.png');">
                                                <!-- <div class="pin"><i class="fas fa-thumbtack"></i></div> -->
                                                <div class="icon-status"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="content -bannerlink">
                                                <div class="desc-news">
                                                    <a href="/news-detail-4">
                                                        หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="sub-news">
                                    <div class="group-mange-section">
                                        <div class="manage-tools">
                                            <ul>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('NEWS','manage-admin/edit?m=portal_website_news');">แก้ไข</a></li> 
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_hide">ซ่อน</a></li>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_delete">ลบ</a></li>
                                                <li class="order-list order-close">ปิด</li>
                                            </ul>
                                        </div>
                                        <div class="manage-edit">
                                            <img src="{{ asset('../../assets/images/icons/icon-edit.svg')}}" alt="icon">
                                        </div> 
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-lg-12">
                                            <div class="img-news" style="background-image: url('../../assets/images/img-news-demo2.png');">
                                                <!-- <div class="pin"><i class="fas fa-thumbtack"></i></div> -->
                                                <!-- <div class="icon-status"></div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="content -bannerlink">
                                                <div class="desc-news">
                                                    <a href="/news-detail-4">
                                                        หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="sub-news">
                                    <div class="group-mange-section">
                                        <div class="manage-tools">
                                            <ul>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('NEWS','manage-admin/edit?m=portal_website_news');">แก้ไข</a></li> 
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_hide">ซ่อน</a></li>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_delete">ลบ</a></li>
                                                <li class="order-list order-close">ปิด</li>
                                            </ul>
                                        </div>
                                        <div class="manage-edit">
                                            <img src="{{ asset('../../assets/images/icons/icon-edit.svg')}}" alt="icon">
                                        </div> 
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-lg-12">
                                            <div class="img-news" style="background-image: url('../../assets/images/img-news-demo2.png');">
                                                <!-- <div class="pin"><i class="fas fa-thumbtack"></i></div> -->
                                                <!-- <div class="icon-status"></div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="content -bannerlink">
                                                <div class="desc-news">
                                                    <a href="/news-detail-4">
                                                        หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="sub-news">
                                    <div class="group-mange-section">
                                        <div class="manage-tools">
                                            <ul>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('NEWS','manage-admin/edit?m=portal_website_news');">แก้ไข</a></li> 
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_hide">ซ่อน</a></li>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_delete">ลบ</a></li>
                                                <li class="order-list order-close">ปิด</li>
                                            </ul>
                                        </div>
                                        <div class="manage-edit">
                                            <img src="{{ asset('../../assets/images/icons/icon-edit.svg')}}" alt="icon">
                                        </div> 
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-lg-12">
                                            <div class="img-news" style="background-image: url('../../assets/images/img-news-demo2.png');">
                                                <!-- <div class="pin"><i class="fas fa-thumbtack"></i></div> -->
                                                <!-- <div class="icon-status"></div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="content -bannerlink">
                                                <div class="desc-news">
                                                    <a href="/news-detail-4">
                                                        หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="sub-news">
                                    <div class="group-mange-section">
                                        <div class="manage-tools">
                                            <ul>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('NEWS','manage-admin/edit?m=portal_website_news');">แก้ไข</a></li> 
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_hide">ซ่อน</a></li>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_delete">ลบ</a></li>
                                                <li class="order-list order-close">ปิด</li>
                                            </ul>
                                        </div>
                                        <div class="manage-edit">
                                            <img src="{{ asset('../../assets/images/icons/icon-edit.svg')}}" alt="icon">
                                        </div> 
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-lg-12">
                                            <div class="img-news" style="background-image: url('../../assets/images/img-news-demo2.png');">
                                                <!-- <div class="pin"><i class="fas fa-thumbtack"></i></div> -->
                                                <!-- <div class="icon-status"></div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="content -bannerlink">
                                                <div class="desc-news">
                                                    <a href="/news-detail-4">
                                                        หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="sub-news">
                                    <div class="group-mange-section">
                                        <div class="manage-tools">
                                            <ul>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('NEWS','manage-admin/edit?m=portal_website_news');">แก้ไข</a></li> 
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_hide">ซ่อน</a></li>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_delete">ลบ</a></li>
                                                <li class="order-list order-close">ปิด</li>
                                            </ul>
                                        </div>
                                        <div class="manage-edit">
                                            <img src="{{ asset('../../assets/images/icons/icon-edit.svg')}}" alt="icon">
                                        </div> 
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-lg-12">
                                            <div class="img-news" style="background-image: url('../../assets/images/img-news-demo2.png');">
                                                <!-- <div class="pin"><i class="fas fa-thumbtack"></i></div> -->
                                                <!-- <div class="icon-status"></div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="content -bannerlink">
                                                <div class="desc-news">
                                                    <a href="/news-detail-4">
                                                        หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="sub-news">
                                    <div class="group-mange-section">
                                        <div class="manage-tools">
                                            <ul>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('NEWS','manage-admin/edit?m=portal_website_news');">แก้ไข</a></li> 
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_hide">ซ่อน</a></li>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_delete">ลบ</a></li>
                                                <li class="order-list order-close">ปิด</li>
                                            </ul>
                                        </div>
                                        <div class="manage-edit">
                                            <img src="{{ asset('../../assets/images/icons/icon-edit.svg')}}" alt="icon">
                                        </div> 
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-lg-12">
                                            <div class="img-news" style="background-image: url('../../assets/images/img-news-demo2.png');">
                                                <!-- <div class="pin"><i class="fas fa-thumbtack"></i></div> -->
                                                <!-- <div class="icon-status"></div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="content -bannerlink">
                                                <div class="desc-news">
                                                    <a href="/news-detail-4">
                                                        หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="sub-news">
                                    <div class="group-mange-section">
                                        <div class="manage-tools">
                                            <ul>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('NEWS','manage-admin/edit?m=portal_website_news');">แก้ไข</a></li> 
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_hide">ซ่อน</a></li>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_delete">ลบ</a></li>
                                                <li class="order-list order-close">ปิด</li>
                                            </ul>
                                        </div>
                                        <div class="manage-edit">
                                            <img src="{{ asset('../../assets/images/icons/icon-edit.svg')}}" alt="icon">
                                        </div> 
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-lg-12">
                                            <div class="img-news" style="background-image: url('../../assets/images/img-news-demo2.png');">
                                                <!-- <div class="pin"><i class="fas fa-thumbtack"></i></div> -->
                                                <!-- <div class="icon-status"></div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="content -bannerlink">
                                                <div class="desc-news">
                                                    <a href="/news-detail-4">
                                                        หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="sub-news">
                                    <div class="group-mange-section">
                                        <div class="manage-tools">
                                            <ul>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('NEWS','manage-admin/edit?m=portal_website_news');">แก้ไข</a></li> 
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_hide">ซ่อน</a></li>
                                                <li class="order-list"><a style="color: #000;" href="#" data-toggle="modal" data-target="#modal_Alert_delete">ลบ</a></li>
                                                <li class="order-list order-close">ปิด</li>
                                            </ul>
                                        </div>
                                        <div class="manage-edit">
                                            <img src="{{ asset('../../assets/images/icons/icon-edit.svg')}}" alt="icon">
                                        </div> 
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-lg-12">
                                            <div class="img-news" style="background-image: url('../../assets/images/img-news-demo2.png');">
                                                <!-- <div class="pin"><i class="fas fa-thumbtack"></i></div> -->
                                                <!-- <div class="icon-status"></div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="content -bannerlink">
                                                <div class="desc-news">
                                                    <a href="/news-detail-4">
                                                        หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>