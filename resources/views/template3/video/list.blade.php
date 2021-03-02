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
            <div class="top-content border-bottom-secondary">
                <div class="group-text">
                    <h3 class="title color-primary">วิดิทัศน์</h3>
                    <p class="desc color-secondary">The Bangkok Metropolitan Council Secretariat </p>
                </div>
            </div>
            <div class="search-content">
                 <form action="">
                @csrf <!-- {{ csrf_field() }} -->
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="input-custom inp-categories">
                                <div class="select-wrapper width-full">
                                    <select name="month" class="slc">
                                        <optgroup label="ประเภทข่าว">
                                            <option value="">ประเภทข่าว 1</option>
                                            <option value="">ประเภทข่าว 2</option>
                                            <option value="">ประเภทข่าว 3</option>
                                            <option value="">ประเภทข่าว 4</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="input-custom inp-calendar">
                                <input id="start_date" class="style-input" type="text" name="datefilter" placeholder="จากวันที่" autocomplete="off" data-provide="datepicker" data-date-language="th-th" />
                                <div class="icon-calendar"><em class="far fa-calendar"></em></div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="input-custom inp-calendar">
                                <input id="end_date" class="style-input" type="text" name="datefilter" placeholder="ถึงวันที่" autocomplete="off" data-provide="datepicker" data-date-language="th-th" />
                                <div class="icon-calendar"><em class="far fa-calendar"></em></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-custom inp-search">
                                <input class="style-input" type="text" name="" placeholder="คำค้นหา" />
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <div class="btn-search btn-stick-border">
                                <button type="submit" class="icon-search bg-color-secondary">
                                    ค้นหา
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="main-content">
                <div class="gallery-template">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">                           
                            <div class="item video">
                                <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                    <a id="dynamic3" href="javascript:void(0)" >
                                        <div class="bg-layer">
                                            <div class="icon-search-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-play.png')}}" alt="banner">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="title">
                                        <div class="source bg-color-secondary">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                                <div class="group-mange-section">
                                    <div class="manage-tools">
                                        <ul>
                                            <li class="order-list">จัดการ</li>
                                            <li class="order-list">ลบ</li>
                                            <li class="order-list">ซ่อน</li>
                                            <li class="order-list order-close">ปิด</li>
                                        </ul>
                                    </div> 
                                    <div class="manage-edit">
                                        <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="item video">
                                <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo2.jpg');">
                                    <a id="dynamic4" href="javascript:void(0)" >
                                        <div class="bg-layer">
                                            <div class="icon-search-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-play.png')}}" alt="banner">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="title">
                                        <div class="source bg-color-secondary">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                                <div class="group-mange-section">
                                    <div class="manage-tools">
                                        <ul>
                                            <li class="order-list">จัดการ</li>
                                            <li class="order-list">ลบ</li>
                                            <li class="order-list">ซ่อน</li>
                                            <li class="order-list order-close">ปิด</li>
                                        </ul>
                                    </div> 
                                    <div class="manage-edit">
                                        <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="pagination-custom d-flex justify-content-end align-items-center">
                    <div class="all-page">
                        Page <span>1</span> of <span>120</span>
                    </div>
                    <div class="item-page d-flex justify-content-end align-items-center">
                        <div class="slide-prev disabled"></div>
                        <div class="input-custom">
                            <input type="text" class="style-input" value="1">
                        </div>
                        <div class="slide-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hidden video div -->
<div style="display:none;" id="video1">
    <video class="lg-video-object lg-html5" controls preload="none">
        <source src="https://sachinchoolur.github.io/lightGallery/static/videos/video1.mp4" type="video/mp4">
         Your browser does not support HTML5 video.
    </video>
</div>