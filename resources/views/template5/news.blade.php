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
                    <div class="row d-flex align-items-stretch">
                        <div class="col-lg-9">
                            <div class="inner-content d-flex-manual">
                                <div class="top-content -small">
                                    <div class="group-text pr-5">
                                        <h3 class="title color-primary">ข่าวสาร</h3>
                                        <p class="desc">The Bangkok Metropolitan Council Secretariat</p>
                                    </div>
                                    <div class="group-gotoall">
                                        <a href="/news-5">
                                            <div class="icon-more">
                                                <em class="fas fa-arrow-right"></em>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="main-content -large p-0">
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
                                        <a href="/news-detail-5">
                                            <div class="img-news" style="background-image: url('../../assets/images/img-news-demo1.png');"></div>
                                        </a>
                                        <div class="content-news-main">
                                            <div class="date">
                                                <span>ข่าววันที่ : 25 พ.ย.</span> <img src="{{ asset('../../assets/images/icons/icon-new.png')}}" alt="icon">
                                            </div>
                                            <div class="desc-news">
                                                <a href="/news-detail-5">
                                                    หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน
                                                </a>
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
                                        <div class="read-news-outer">
                                            <a href="/news-detail-5">
                                                อ่านข่าวสาร
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="inner-content">
                                <div class="main-content p-0">
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
                                                        <a href="/">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="content">
                                                    <div class="date color-secondary">
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
                        </div>
                    </div>
                </div>
            </div>