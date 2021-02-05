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
            <img src="{{ asset('template4/assets/images/icons/icon-dragdrop.svg')}}" alt="icon" title="Drag and Drop">
        </div>
        <div class="manage-edit">
            <img src="{{ asset('template4/assets/images/icons/icon-edit.svg')}}" alt="icon">
        </div>
    </div>
    <div class="container">
        <div class="inner-content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="top-content flex-wrap bg-color-secondary matchHeight">
                        <div class="group-text">
                            <h3 class="title">ปฏิทินกิจกรรม</h3>
                            <p class="desc">The Bangkok Metropolitan Council Secretariat </p>
                            <a href="/calendar-4" class="btn btn-outline-white">ปฏิทิน</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="main-content matchHeight">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="head-calendar d-flex align-items-center flex-wrap">
                                    <div class="ddl">
                                        <div class="input-custom">
                                            <div class="select-wrapper width-full m-0">
                                                <select name="month" class="slc -month">
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
                                    </div>
                                    <div class="date-now">
                                        วันนี้ : <span class="date">2 / พฤศจิกายน / 2563</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="calendar-wrapper">
                                    <div class="main-calendar">
                                        <div id="calendar" class="calendar-home">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="group-slide bg-white matchHeight">
                                    <div class="list-item" id="slide_1">
                                        <div class="item -calendar">
                                            <div class="left">
                                                <div class="text-content">กิจกรรมวันที่ : <br>2 พฤศจิกายน</div>
                                            </div>
                                            <div class="right">
                                                <div class="text-content">
                                                    <a href="/calendar-detail-4">
                                                        บึงกุ่มชวนร่วมกิจกรรม
                                                        บ้านหนังสือ ถนนสุขุมวิท,
                                                        สะพานหน้าสำนักงาน
                                                        เขตพระโขนง, สะพาน
                                                        ลอยปากซอยสุขุมวิท
                                                        ๘๗-๘๙
                                                    </a>
                                                </div>
                                                <div class="text-onbottom"><i class="fas fa-map-marker-alt"></i> ถนนเสรีไทย ฝั่งเลขคู่ <i class="fas fa-angle-double-right"></i></div>
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
</div>