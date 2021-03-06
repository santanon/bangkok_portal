<div class="section-content">
        <div class="group-mange-section">
            <div class="manage-tools">
                <ul>
                    <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/add?m=activities');">เพิ่มข้อมูล</a></li>
                    <li class="order-list"><a style="color:#000000" href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/set_cat?m=activities');">จัดการข้อมูล</a></li>
                    <li class="order-list order-close">ปิด</li>
                </ul>
            </div> 
            <div class="manage-edit">
                <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="แก้ไข">
            </div>
            <!--<div class="manage-add">
                <img src="{{ asset('template1/assets/images/icons/icon-add.svg')}}" alt="เพิ่ม">
            </div>-->
        </div>
                <div class="container">
                    <div class="inner-content">
                        <div class="top-content">
                            <div class="group-text">
                                <h3 class="title color-primary" style="margin-bottom: 5px">ปฎิทินกิจกรรม</h3>
                                <p class="desc color-secondary">วันนี้ : 2 / พฤศจิกายน / 2563</p>
                            </div>
                        </div>
                        <div class="main-content">
 
 
                            <div class="calendar-wrapper">
                                <div class="filter-date d-flex justify-content-between align-items-baseline flex-wrap">
                                    <div class="search-content">
                                        <form action="">
                                         @csrf <!-- {{ csrf_field() }} -->
                                            <div class="input-custom inp-categories m-0">
                                                <div class="select-wrapper width-full">
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
                                        </form>
                                    </div>
                                    <div class="remark-calendar">
                                        <ul class="d-flex align-item-center">
                                            <li class="activity-calendar">กิจกรรมวันนี้</li>
                                            <li class="today-calendar">วันนี้</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="main-calendar">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>