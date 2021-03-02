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
                        <div class="top-content">
                            <div class="group-text__no-styled txt-center">
                                <h3 class="title">ข่าวประชาสัมพันธ์</h3>
                                <p class="desc">The Bangkok Metropolitan Council Secretariat </p>
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
                                            <div class="icon-calendar"><em class="far fa-calendar"></em></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="input-custom inp-calendar">
                                            <input id="end_date" class="style-input" type="text" name="datefilter" placeholder="ถึงวันที่" autocomplete="off" data-provide="datepicker" data-date-language="th-th" />
                                            <div class="icon-calendar"><em class="far fa-calendar"></em></div>
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
                        <div class="main-content">
                            <div class="row">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="main-news">
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
                                            <div class="col-sm-8">
                                                <div class="img-news" style="background-image: url('../../assets/images/img-news-demo1.png');">
                                                    <div class="pin"><em class="fas fa-thumbtack"></em></div>
                                                    <div class="read-news-outer">
                                                        <a href="/news-detail-2">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="content-news-main">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 25 พ.ย.</span> <img src="{{ asset('../../assets/images/icons/icon-new.png')}}" alt="icon">
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน
                                                        </a>
                                                    </div>
                                                    <div class="desc-news-detail">
                                                        <p>
                                                            (27 ต.ค.63) เวลา 08.30 น.
                                                            พล.ต.อ.อัศวิน ขวัญเมือง 
                                                            ผู้ว่าราชการกรุงเทพมหานคร 
                                                            เป็นประธานเปิดกิจกรรมฟื้นวิถีคลอง
                                                            ส่องประวัติศาสตร์ “จากกรุงธนบุรีศรี
                                                            มหาสมุทรสู่สุดทะเล บางขุนเทียน”
                                                        </p>
                                                    </div>
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-facebook.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-twitter.svg')}}" alt="icon"> <span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"> <span class="color-secondary">5</span> 
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                                                    <div class="read-news-outer">
                                                        <a href="/news-detail-2">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-facebook.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                                                    <div class="read-news-outer">
                                                        <a href="/news-detail-2">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-facebook.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                                                    <div class="read-news-outer">
                                                        <a href="/news-detail-2">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-facebook.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                                                    <div class="read-news-outer">
                                                        <a href="/news-detail-2">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-facebook.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                                                    <div class="read-news-outer">
                                                        <a href="/news-detail-2">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-facebook.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                                                    <div class="read-news-outer">
                                                        <a href="/news-detail-2">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-facebook.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                                                    <div class="read-news-outer">
                                                        <a href="/news-detail-2">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-facebook.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                                                    <div class="read-news-outer">
                                                        <a href="/news-detail-2">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-facebook.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                                                    <div class="read-news-outer">
                                                        <a href="/news-detail-2">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-facebook.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-twitter.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('../../assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                                            </li>
                                                        </ul>
                                                    </div>
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
                                                <em class="fas fa-plus"></em>
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