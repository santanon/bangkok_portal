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
                    <h3 class="title">กิจกรรมหน่วยงาน</h3>
                    <p class="desc">The Bangkok Metropolitan Council Secretariat </p>
                    <p class="desc color-secondary" style="font-size: 2rem;">วันนี้ : 2 / พฤศจิกายน / 2563</p>
                </div>
            </div>
            <div class="main-content">
                <div class="calendar-wrapper">
                    <!-- <div class="row">
                        <div class="col-lg-8">
                            <div class="search-content">
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="input-custom inp-categories">
                                                <div class="select-wrapper width-full">
                                                    <select name="month" class="slc">
                                                        <optgroup label="เดือน">
                                                            <option value="">มกราคม</option>
                                                            <option value="">กุมภาพันธ์</option>
                                                            <option value="">มีนาคม</option>
                                                            <option value="">เมษายน</option>
                                                            <option value="">พฤษภาคม</option>
                                                            <option value="">มิถุนายน</option>
                                                            <option value="">กรกฎาคม</option>
                                                            <option value="">สิงหาคม</option>
                                                            <option value="">กันยายน</option>
                                                            <option value="">ตุลาคม</option>
                                                            <option value="">พฤศจิกายน</option>
                                                            <option value="">ธันวาคม</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="input-custom inp-categories">
                                                <div class="select-wrapper width-full">
                                                    <select name="month" class="slc">
                                                        <optgroup label="ปี">
                                                            <option value="">2562</option>
                                                            <option value="">2563</option>
                                                            <option value="">2564</option>
                                                            <option value="">2565</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
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
                        </div>
                    </div> -->
                    <div class="head-calendar">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-6">
                                <div class="title-calendar">
                                    <div class="month-title"></div>
                                    <div class="year-title"></div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <div id="calendar"></div>
                    </div>
                    <div class="remark-calendar">
                        <ul class="d-flex align-item-center">
                            <li class="activity-calendar">กิจกรรมวันนี้</li>
                            <li class="today-calendar">วันนี้</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>