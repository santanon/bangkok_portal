<!-- ปฏิทินกิจกรรม -->
<div id="calendar" data-id="calendar" class="section-content bg-color-white">
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
                        <div class="row d-flex align-items-stretch">
                            <div class="col-lg-3">
                                <div class="d-flex-manual">
                                    <div class="top-content">
                                        <div class="group-text pr-5">
                                            <h3 class="title color-primary">ปฏิทิน<br/>กิจกรรม</h3>
                                            <p class="desc">The Bangkok Metropolitan Council Secretariat</p>
                                        </div>
                                        <div class="group-gotoall">
                                            <a href="/calendar-5">
                                                <div class="icon-more">
                                                    <em class="fas fa-arrow-right"></em>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="d-flex-manual">
                                    <div class="main-content p-0">
                                        <div class="action-slide d-flex align-items-center justify-between">
                                            <div class="input-custom -month-calendar">
                                                <div class="select-wrapper fixed-width m-0">
                                                    <select id="slc-month" name="month" class="slc text-center">
                                                        <optgroup label="เดือน">
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
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="remark-calendar">
                                                <ul class="d-flex align-item-center">
                                                    <li class="activity-calendar">กิจกรรมวันนี้</li>
                                                    <li class="today-calendar">วันนี้</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="date-now text-right">
                                            วันนี้ : <span class="date">2 / พฤศจิกายน / 2563</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-content">
                            <div class="day-group">
                                <ul>
                                    <li><span>อา.</span></li>
                                    <li><span>จ.</span></li>
                                    <li><span>อ.</span></li>
                                    <li><span>พ.</span></li>
                                    <li><span>พฤ.</span></li>
                                    <li><span>ศ.</span></li>
                                    <li><span>ส.</span></li>
                                </ul>
                            </div>
                            <div id="calendar_home"></div>
                        </div>
                    </div>
                </div>
            </div>