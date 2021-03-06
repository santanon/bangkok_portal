<!-- ข่าวสาร -->
<div id="news" data-id="news" class="section-content">
                <div class="group-mange-section">
                    <!--<div class="manage-tools">
                        <ul>
                            <li class="order-list">จัดการ</li>
                            <li class="order-list">ลบ</li>
                            <li class="order-list">ซ่อน</li>
                            <li class="order-list order-close">ปิด</li>
                        </ul>
                    </div>-->
                    <div class="manage-dragdrop">
                        <img src="{{ asset('../../assets/images/icons/icon-dragdrop.svg')}}" alt="icon" title="Drag and Drop">
                    </div>
                    <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('NEWS','manage-admin/list?m=portal_website_news');">
                        <div class="manage-edit">
                            <img src="{{ asset('../../assets/images/icons/icon-edit.svg')}}" alt="icon">
                        </div>
                    </a>
                </div>
                <div class="container">
                    <div class="inner-content">
                        <div class="top-content">
                            <div class="group-text">
                                <a href="/news-2" class="title">ข่าวสาร</a>
                                <p class="desc">The Bangkok Metropolitan Council Secretariat </p>
                            </div>
                            <div class="group-gotoall">
                                <a href="/news-2" class="btn btn-outline-dark">ข่าวสารทั้งหมด</a>
                            </div>
                        </div>
                        <div class="main-content">
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
                                                        <a href="/news-detail-2">
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
                                                        <a href="/news-detail-2">
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
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="/news-detail-2">
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
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="/news-detail-2">
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
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="/news-detail-2">
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
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="/news-detail-2">
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
                        </div>
                    </div>
                </div>
            </div>