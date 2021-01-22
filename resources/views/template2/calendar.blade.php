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
                                <a href="/calendar" class="title">ปฏิทินกิจกรรม</a>
                                <p class="desc">The Bangkok Metropolitan Council Secretariat </p>
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
                                        <div class="main-calendar">
                                            <div class="input-custom">
                                                <div class="select-wrapper width-full">
                                                    <select name="month" class="slc -month text-center">
                                                        <option value="1">มกราคม</option>
                                                        <option value="2">กุมภาพันธ์</option>
                                                        <option value="3">มีนาคม</option>
                                                        <option value="4">เมษายน</option>
                                                        <option value="5">พฤษภาคม</option>
                                                        <option value="6">มิถุนายน</option>
                                                        <option value="7">กรกฎาคม</option>
                                                        <option value="8">สิงหาคม</option>
                                                        <option value="9">กันยายน</option>
                                                        <option value="10">ตุลาคม</option>
                                                        <option value="11">พฤศจิกายน</option>
                                                        <option value="12">ธันวาคม</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="calendar" class="calendar-home"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="group-slide">
                                        <div class="list-item" id="slide_1">
                                            <div class="item -calendar">
                                                <div class="left">
                                                    <div class="text-content">2</div>
                                                    <div class="text-onbottom">พฤศจิกายน</div>
                                                </div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>