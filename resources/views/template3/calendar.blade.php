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
                        <div class="top-content border-bottom">
                            <div class="group-text">
                                <h3 class="title color-primary">ปฏิทินกิจกรรม</h3>
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
                        <div class="main-content">
                            <div class="action-slide d-flex justify-content-between flex-wrap m-2">
                                <div class="input-custom">
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
                                <div class="date-now text-right">
                                    วันนี้ : <span class="date">2 / พฤศจิกายน / 2563</span>
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
                                <div class="remark-calendar">
                                    <ul class="d-flex align-item-center justify-content-end">
                                        <li class="activity-calendar">กิจกรรมวันนี้</li>
                                        <li class="today-calendar">วันนี้</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>


