<!-- ปฏิทินกิจกรรม -->
<div id="calendar-wrapper" data-id="calendar-wrapper" class="section-content">
                <div class="group-mange-section">
                    <div class="manage-tools">
                        <ul>
                            <li class="order-list">จัดการ</li>
                            <li class="order-list">ลบ</li>
                            <li class="order-list">ซ่อน</li>
                            <li class="order-list order-close">ปิด</li>
                        </ul>
                    </div> 
                    <div class="manage-dragdrop">
                        <img src="{{ asset('template1/assets/images/icons/icon-dragdrop.svg')}}" alt="icon" title="Drag and Drop">
                    </div>
                    <div class="manage-edit">
                        <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
                    </div>
                </div>
                <div class="container">
                    <div class="inner-content">
                        <div class="top-content">
                            <div class="group-text">
                                <h3 class="title color-primary">ปฏิทินกิจกรรม</h3>
                                <p class="desc color-secondary">วันนี้ : 2 / พฤศจิกายน / 2563</p>
                            </div>
                            <div class="group-gotoall">
                                <a href="/calendar" class="btn btn-outline-dark">กิจกรรมทั้งหมด</a>
                            </div>
                        </div>
                        <div class="main-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="calendar-wrapper">
                                        <div class="head-calendar">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div id='caljump'>
                                                        <label for='months'>Jump to</label>
                                                        <select id='months'></select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-8 col-6">
                                                    <div class="title-calendar">
                                                        <div class="month-title"></div>
                                                        <div class="year-title"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-6">
                                                    <div class="calendar-wrapper-btn">
                                                        <button id='prev' class="btn">
                                                        </button>
                                                        <button id='next' class="btn">
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-calendar">
                                            <div id="calendar">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="group-slide">
                                <!-- <div class="list-item" id="slide_1">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="left">
                                                    <div class="text-content bg-color-primary">2</div>
                                                    <div class="text-onbottom bg-color-secondary">พ.ย.</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                                <div class="right">
                                                    <div class="text-content">
                                                        <a href="">
                                                            บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือ
                                                        </a>
                                                    </div>
                                                    <div class="text-onbottom"><i class="fas fa-map-marker-alt"></i> ถนนเสรีไทย ฝั่งเลขคู่</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="left">
                                                    <div class="text-content bg-color-primary">3</div>
                                                    <div class="text-onbottom bg-color-secondary">พ.ย.</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                                <div class="right">
                                                    <div class="text-content">
                                                        <a href="">
                                                            ตรวจพื้นที่ถนนพระรามที่ 4 ตั้งแต่แยกกล้วยน้ำไทถึงแยกพระโขนง
                                                        </a>
                                                    </div>
                                                    <div class="text-onbottom"><i class="fas fa-map-marker-alt"></i> ถนนเสรีไทย ฝั่งเลขคู่</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="left">
                                                    <div class="text-content bg-color-primary">2</div>
                                                    <div class="text-onbottom bg-color-secondary">พ.ย.</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                                <div class="right">
                                                    <div class="text-content">
                                                        <a href="">
                                                            บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือ
                                                        </a>
                                                    </div>
                                                    <div class="text-onbottom"><i class="fas fa-map-marker-alt"></i> ถนนเสรีไทย ฝั่งเลขคู่</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="left">
                                                    <div class="text-content bg-color-primary">3</div>
                                                    <div class="text-onbottom bg-color-secondary">พ.ย.</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                                <div class="right">
                                                    <div class="text-content">
                                                        <a href="">
                                                            ตรวจพื้นที่ถนนพระรามที่ 4 ตั้งแต่แยกกล้วยน้ำไทถึงแยกพระโขนง
                                                        </a>
                                                    </div>
                                                    <div class="text-onbottom"><i class="fas fa-map-marker-alt"></i> ถนนเสรีไทย ฝั่งเลขคู่</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>