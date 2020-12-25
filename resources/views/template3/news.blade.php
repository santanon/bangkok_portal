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
                        <div class="col-lg-6">
                            <div class="inner-content">
                                <div class="top-content border-bottom">
                                    <div class="group-text">
                                        <h3 class="title color-primary">ข่าวสาร</h3>
                                        <p class="desc color-secondary">The Bangkok Metropolitan Council Secretariat</p>
                                    </div>
                                    <div class="group-gotoall">
                                        <a href="/news">
                                            MORE 
                                            <div class="icon-more">
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                    <g>
                                                        <path class="st0" d="M3.9,4.5C3.4,5,3.4,5.8,3.9,6.3L9.6,12l-5.7,5.7l0,0c-0.5,0.5-0.5,1.4,0,1.9l0,0c0.5,0.5,1.4,0.5,1.9,0
                                                            l6.6-6.6l0,0c0.5-0.5,0.5-1.4,0-1.9L5.7,4.5l0,0C5.2,4,4.4,4,3.9,4.5L3.9,4.5z"/>
                                                        <path class="st0" d="M11.6,4.5c-0.5,0.5-0.5,1.3,0,1.8l5.7,5.7l-5.7,5.7l0,0c-0.5,0.5-0.5,1.4,0,1.9l0,0c0.5,0.5,1.4,0.5,1.9,0
                                                            l6.6-6.6l0,0c0.5-0.5,0.5-1.4,0-1.9l-6.7-6.6l0,0C12.9,4,12.1,4,11.6,4.5L11.6,4.5z"/>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6 order-lg-2">
                                    <div class="inner-content">
                                        <div class="main-content">
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
                                                <a href="/">
                                                    <div class="img-news" style="background-image: url('../../assets/images/img-news-demo1.png');"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="inner-content">
                                        <div class="main-content">
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
                                                <div class="content-news-main">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 25 พ.ย.</span> <img src="{{ asset('../../assets/images/icons/icon-new.png')}}" alt="icon">
                                                    </div>
                                                    <div class="title-news">
                                                        ผู้ว่าฯ กทม. เปิดกิจกรรมฟื้นวิถีคลอง ส่องประวัติศาสตร์ 
                                                        “จากกรุงธนบุรีศรีมหาสมุทร สู่สุดทะเลบางขุนเทียน” 
                                                        เพื่อพัฒนาทำความสะอาดจัดเก็บขยะและวัชพืช
                                                    </div>
                                                    <div class="desc-news">
                                                        วันนี้ (27 ต.ค.) เมื่อเวลา 08.30 น. พล.ต.อ.อัศวิน ขวัญเมือง 
                                                        ผู้ว่าราชการกรุงเทพมหานคร เป็นประธานเปิดกิจกรรมฟื้นวิถีคลอง
                                                        ส่องประวัติศาสตร์ “จากกรุงธนบุรีศรีมหาสมุทร
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action-link d-flex justify-content-between">
                                            <div class="read-more bg-color-primary">
                                                <a href="/news-detail">อ่านข่าวสาร</a>
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
                        
                    </div>
                    
                </div>
            </div>