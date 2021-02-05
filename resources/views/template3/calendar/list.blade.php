<div class="section-content">
                <div class="container">
                    <div class="inner-content">
                        <div class="top-content border-bottom-secondary">
                            <div class="group-text">
                                <h3 class="title color-primary" style="margin-bottom: 5px">ปฎิทินกิจกรรม</h3>
                                <p class="desc">The Bangkok Metropolitan Council Secretariat </p>
                            </div>
                        </div>
 
 
                         @csrf <!-- {{ csrf_field() }} -->
                        <div class="date-content d-flex justify-content-between align-items-center">
                            <div class="date-now color-secondary">
                                วันนี้ : 2 / พฤศจิกายน / 2563
                            </div>
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
                        </div>
                        <div class="main-content p-0">
                            <div class="calendar-warpper">
                                <div class="main-calendar">
                                    <div class="remark-calendar">
                                        <ul class="d-flex align-item-center">
                                            <li class="activity-calendar">กิจกรรมวันนี้</li>
                                            <li class="today-calendar">วันนี้</li>
                                        </ul>
                                    </div>
                                    <div id="calendar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>