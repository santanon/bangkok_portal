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
            
            <div class="row">
                <div class="col-lg-3">
                    <div class="top-content">
                        <div class="group-text">
                            <h3 class="title color-primary">วิดิทัศน์</h3>
                            <p class="desc color-secondary">The Bangkok Metropolitan Council Secretariat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="search-content">
                         <form action="">
                @csrf <!-- {{ csrf_field() }} -->
                            <div class="row">
                                <div class="col-lg-4">
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
                                <div class="col-lg-4">
                                    <div class="input-custom inp-calendar">
                                        <input id="start_date" class="style-input" type="text" name="datefilter" placeholder="จากวันที่" autocomplete="off" data-provide="datepicker" data-date-language="th-th" />
                                        <div class="icon-calendar"><i class="far fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="input-custom inp-calendar">
                                        <input id="end_date" class="style-input" type="text" name="datefilter" placeholder="ถึงวันที่" autocomplete="off" data-provide="datepicker" data-date-language="th-th" />
                                        <div class="icon-calendar"><i class="far fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="input-custom inp-search">
                                        <input class="style-input" type="text" name="" placeholder="คำค้นหา" />
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="btn-search">
                                        <button type="submit" class="icon-search bg-color-secondary">
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
            </div>





            <div class="main-content">
                <div class="gallery-template">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item video -list list-large">
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
                                <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                    <a id="dynamic3" href="javascript:void(0)" >
                                        <div class="bg-layer show-icon">
                                            <div class="icon-video-hover">
                                                <div class="icon-video">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                                                        <path class="st1" d="M25,40H15C6.7,40,0,33.3,0,25V15C0,6.7,6.7,0,15,0h10c8.3,0,15,6.7,15,15v10C40,33.3,33.3,40,25,40z"/>
                                                        <path class="st3" d="M28.4,21.9L15.9,30c-1.4,0.9-3.4-0.2-3.4-1.8V11.9c0-1.8,2-2.9,3.4-1.8l12.5,8.1C29.9,19,29.9,21.1,28.4,21.9z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="title">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="item video -list -small">
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
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                            <a id="dynamic3" href="javascript:void(0)" >
                                                <div class="bg-layer show-icon">
                                                    <div class="icon-video-hover">
                                                        <div class="icon-video">
                                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                    viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                                                                <path class="st1" d="M25,40H15C6.7,40,0,33.3,0,25V15C0,6.7,6.7,0,15,0h10c8.3,0,15,6.7,15,15v10C40,33.3,33.3,40,25,40z"/>
                                                                <path class="st3" d="M28.4,21.9L15.9,30c-1.4,0.9-3.4-0.2-3.4-1.8V11.9c0-1.8,2-2.9,3.4-1.8l12.5,8.1C29.9,19,29.9,21.1,28.4,21.9z"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="title">
                                                <div class="source">
                                                    <span>PR BKK</span>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="item video -list -small">
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
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                            <a id="dynamic3" href="javascript:void(0)" >
                                                <div class="bg-layer show-icon">
                                                    <div class="icon-video-hover">
                                                        <div class="icon-video">
                                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                    viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                                                                <path class="st1" d="M25,40H15C6.7,40,0,33.3,0,25V15C0,6.7,6.7,0,15,0h10c8.3,0,15,6.7,15,15v10C40,33.3,33.3,40,25,40z"/>
                                                                <path class="st3" d="M28.4,21.9L15.9,30c-1.4,0.9-3.4-0.2-3.4-1.8V11.9c0-1.8,2-2.9,3.4-1.8l12.5,8.1C29.9,19,29.9,21.1,28.4,21.9z"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="title">
                                                <div class="source">
                                                    <span>PR BKK</span>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="item video -list -small">
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
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                            <a id="dynamic3" href="javascript:void(0)" >
                                                <div class="bg-layer show-icon">
                                                    <div class="icon-video-hover">
                                                        <div class="icon-video">
                                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                    viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                                                                <path class="st1" d="M25,40H15C6.7,40,0,33.3,0,25V15C0,6.7,6.7,0,15,0h10c8.3,0,15,6.7,15,15v10C40,33.3,33.3,40,25,40z"/>
                                                                <path class="st3" d="M28.4,21.9L15.9,30c-1.4,0.9-3.4-0.2-3.4-1.8V11.9c0-1.8,2-2.9,3.4-1.8l12.5,8.1C29.9,19,29.9,21.1,28.4,21.9z"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="title">
                                                <div class="source">
                                                    <span>PR BKK</span>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="item video -list -small">
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
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                            <a id="dynamic3" href="javascript:void(0)" >
                                                <div class="bg-layer show-icon">
                                                    <div class="icon-video-hover">
                                                        <div class="icon-video">
                                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                    viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                                                                <path class="st1" d="M25,40H15C6.7,40,0,33.3,0,25V15C0,6.7,6.7,0,15,0h10c8.3,0,15,6.7,15,15v10C40,33.3,33.3,40,25,40z"/>
                                                                <path class="st3" d="M28.4,21.9L15.9,30c-1.4,0.9-3.4-0.2-3.4-1.8V11.9c0-1.8,2-2.9,3.4-1.8l12.5,8.1C29.9,19,29.9,21.1,28.4,21.9z"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="title">
                                                <div class="source">
                                                    <span>PR BKK</span>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="item video -list -small">
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
                                <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                    <a id="dynamic3" href="javascript:void(0)" >
                                        <div class="bg-layer show-icon">
                                            <div class="icon-video-hover">
                                                <div class="icon-video">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                                                        <path class="st1" d="M25,40H15C6.7,40,0,33.3,0,25V15C0,6.7,6.7,0,15,0h10c8.3,0,15,6.7,15,15v10C40,33.3,33.3,40,25,40z"/>
                                                        <path class="st3" d="M28.4,21.9L15.9,30c-1.4,0.9-3.4-0.2-3.4-1.8V11.9c0-1.8,2-2.9,3.4-1.8l12.5,8.1C29.9,19,29.9,21.1,28.4,21.9z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="title">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="item video -list -small">
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
                                <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                    <a id="dynamic3" href="javascript:void(0)" >
                                        <div class="bg-layer show-icon">
                                            <div class="icon-video-hover">
                                                <div class="icon-video">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                                                        <path class="st1" d="M25,40H15C6.7,40,0,33.3,0,25V15C0,6.7,6.7,0,15,0h10c8.3,0,15,6.7,15,15v10C40,33.3,33.3,40,25,40z"/>
                                                        <path class="st3" d="M28.4,21.9L15.9,30c-1.4,0.9-3.4-0.2-3.4-1.8V11.9c0-1.8,2-2.9,3.4-1.8l12.5,8.1C29.9,19,29.9,21.1,28.4,21.9z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="title">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="item video -list -small">
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
                                <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                    <a id="dynamic3" href="javascript:void(0)" >
                                        <div class="bg-layer show-icon">
                                            <div class="icon-video-hover">
                                                <div class="icon-video">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                                                        <path class="st1" d="M25,40H15C6.7,40,0,33.3,0,25V15C0,6.7,6.7,0,15,0h10c8.3,0,15,6.7,15,15v10C40,33.3,33.3,40,25,40z"/>
                                                        <path class="st3" d="M28.4,21.9L15.9,30c-1.4,0.9-3.4-0.2-3.4-1.8V11.9c0-1.8,2-2.9,3.4-1.8l12.5,8.1C29.9,19,29.9,21.1,28.4,21.9z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="title">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="item video -list -small">
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
                                <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                    <a id="dynamic3" href="javascript:void(0)" >
                                        <div class="bg-layer show-icon">
                                            <div class="icon-video-hover">
                                                <div class="icon-video">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                                                        <path class="st1" d="M25,40H15C6.7,40,0,33.3,0,25V15C0,6.7,6.7,0,15,0h10c8.3,0,15,6.7,15,15v10C40,33.3,33.3,40,25,40z"/>
                                                        <path class="st3" d="M28.4,21.9L15.9,30c-1.4,0.9-3.4-0.2-3.4-1.8V11.9c0-1.8,2-2.9,3.4-1.8l12.5,8.1C29.9,19,29.9,21.1,28.4,21.9z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="title">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="item video -list -small">
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
                                <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                    <a id="dynamic3" href="javascript:void(0)" >
                                        <div class="bg-layer show-icon">
                                            <div class="icon-video-hover">
                                                <div class="icon-video">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                                                        <path class="st1" d="M25,40H15C6.7,40,0,33.3,0,25V15C0,6.7,6.7,0,15,0h10c8.3,0,15,6.7,15,15v10C40,33.3,33.3,40,25,40z"/>
                                                        <path class="st3" d="M28.4,21.9L15.9,30c-1.4,0.9-3.4-0.2-3.4-1.8V11.9c0-1.8,2-2.9,3.4-1.8l12.5,8.1C29.9,19,29.9,21.1,28.4,21.9z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="title">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="item video -list -small">
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
                                <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                    <a id="dynamic3" href="javascript:void(0)" >
                                        <div class="bg-layer show-icon">
                                            <div class="icon-video-hover">
                                                <div class="icon-video">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                                                        <path class="st1" d="M25,40H15C6.7,40,0,33.3,0,25V15C0,6.7,6.7,0,15,0h10c8.3,0,15,6.7,15,15v10C40,33.3,33.3,40,25,40z"/>
                                                        <path class="st3" d="M28.4,21.9L15.9,30c-1.4,0.9-3.4-0.2-3.4-1.8V11.9c0-1.8,2-2.9,3.4-1.8l12.5,8.1C29.9,19,29.9,21.1,28.4,21.9z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="title">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="item video -list -small">
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
                                <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                    <a id="dynamic3" href="javascript:void(0)" >
                                        <div class="bg-layer show-icon">
                                            <div class="icon-video-hover">
                                                <div class="icon-video">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                                                        <path class="st1" d="M25,40H15C6.7,40,0,33.3,0,25V15C0,6.7,6.7,0,15,0h10c8.3,0,15,6.7,15,15v10C40,33.3,33.3,40,25,40z"/>
                                                        <path class="st3" d="M28.4,21.9L15.9,30c-1.4,0.9-3.4-0.2-3.4-1.8V11.9c0-1.8,2-2.9,3.4-1.8l12.5,8.1C29.9,19,29.9,21.1,28.4,21.9z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="title">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="item video -list -small">
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
                                <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                    <a id="dynamic3" href="javascript:void(0)" >
                                        <div class="bg-layer show-icon">
                                            <div class="icon-video-hover">
                                                <div class="icon-video">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
                                                        <path class="st1" d="M25,40H15C6.7,40,0,33.3,0,25V15C0,6.7,6.7,0,15,0h10c8.3,0,15,6.7,15,15v10C40,33.3,33.3,40,25,40z"/>
                                                        <path class="st3" d="M28.4,21.9L15.9,30c-1.4,0.9-3.4-0.2-3.4-1.8V11.9c0-1.8,2-2.9,3.4-1.8l12.5,8.1C29.9,19,29.9,21.1,28.4,21.9z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="title">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
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