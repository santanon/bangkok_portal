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
                    <h3 class="title">ภาพกิจกรรม</h3>
                    <p class="desc">The Bangkok Metropolitan Council Secretariat </p>
                </div>
            </div>
            <div class="search-content">
                 <form action="">
                @csrf <!-- {{ csrf_field() }} -->
                    <div class="row">
                        <div class="col-10 col-sm-6">
                            <div class="input-custom inp-search">
                                <input class="style-input" type="text" name="" placeholder="คำค้นหา" />
                            </div>
                        </div>
                        <div class="col-2 col-sm-1">
                            <div class="btn-search ">
                                <button type="submit" class="icon-search bg-color-primary">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                    <path class="st0" d="M21.7,20.3L18,16.6c3.1-3.9,2.5-9.5-1.4-12.7S7.1,1.5,4,5.3S1.5,14.9,5.3,18c3.3,2.6,8,2.6,11.3,0l3.7,3.7
                                        c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0C22.1,21.3,22.1,20.7,21.7,20.3z M11,18c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S14.9,18,11,18z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="main-content">
                <div class="gallery-template">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <div class="item album hilight">
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
                                        <img src="{{ asset('template2/theme-orange/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-lg-6 col-md-6">
                                        <div id="dynamic1" href="javascript:void(0)" class="cover-album" style="background-image: url('../../template2/theme-orange/assets/images/img-album-demo1.png');">
                                            <div class="top-album">
                                                <div class="source">
                                                    <span>PR BKK</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="caption-album">
                                            <div class="icon-search-hover">
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                <path class="st0" d="M21.7,20.3L18,16.6c3.1-3.9,2.5-9.5-1.4-12.7S7.1,1.5,4,5.3S1.5,14.9,5.3,18c3.3,2.6,8,2.6,11.3,0l3.7,3.7
                                                    c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0C22.1,21.3,22.1,20.7,21.7,20.3z M11,18c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S14.9,18,11,18z"/>
                                                </svg>
                                            </div>
                                            <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="item album" >
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
                                        <img src="{{ asset('template2/theme-orange/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                    </div>
                                </div>
                                <div id="dynamic2" href="javascript:void(0)" class="cover-album" style="background-image: url('../../template2/theme-orange/assets/images/img-album-demo2.jpg');">
                                    <div class="top-album">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <div class="icon-search-hover">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                            <path class="st0" d="M21.7,20.3L18,16.6c3.1-3.9,2.5-9.5-1.4-12.7S7.1,1.5,4,5.3S1.5,14.9,5.3,18c3.3,2.6,8,2.6,11.3,0l3.7,3.7
                                                c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0C22.1,21.3,22.1,20.7,21.7,20.3z M11,18c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S14.9,18,11,18z"/>
                                            </svg>
                                        </div>
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="item album" >
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
                                        <img src="{{ asset('template2/theme-orange/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                    </div>
                                </div>
                                <div id="dynamic2" href="javascript:void(0)" class="cover-album" style="background-image: url('../../template2/theme-orange/assets/images/img-album-demo3.jpg');">
                                    <div class="top-album">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <div class="icon-search-hover">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                            <path class="st0" d="M21.7,20.3L18,16.6c3.1-3.9,2.5-9.5-1.4-12.7S7.1,1.5,4,5.3S1.5,14.9,5.3,18c3.3,2.6,8,2.6,11.3,0l3.7,3.7
                                                c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0C22.1,21.3,22.1,20.7,21.7,20.3z M11,18c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S14.9,18,11,18z"/>
                                            </svg>
                                        </div>
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="item album" >
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
                                        <img src="{{ asset('template2/theme-orange/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                    </div>
                                </div>
                                <div id="dynamic2" href="javascript:void(0)" class="cover-album" style="background-image: url('../../template2/theme-orange/assets/images/img-album-demo2.jpg');">
                                    <div class="top-album">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <div class="icon-search-hover">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                            <path class="st0" d="M21.7,20.3L18,16.6c3.1-3.9,2.5-9.5-1.4-12.7S7.1,1.5,4,5.3S1.5,14.9,5.3,18c3.3,2.6,8,2.6,11.3,0l3.7,3.7
                                                c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0C22.1,21.3,22.1,20.7,21.7,20.3z M11,18c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S14.9,18,11,18z"/>
                                            </svg>
                                        </div>
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="item album" >
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
                                        <img src="{{ asset('template2/theme-orange/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                    </div>
                                </div>
                                <div id="dynamic2" href="javascript:void(0)" class="cover-album" style="background-image: url('../../template2/theme-orange/assets/images/img-album-demo3.jpg');">
                                    <div class="top-album">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <div class="icon-search-hover">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                            <path class="st0" d="M21.7,20.3L18,16.6c3.1-3.9,2.5-9.5-1.4-12.7S7.1,1.5,4,5.3S1.5,14.9,5.3,18c3.3,2.6,8,2.6,11.3,0l3.7,3.7
                                                c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0C22.1,21.3,22.1,20.7,21.7,20.3z M11,18c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S14.9,18,11,18z"/>
                                            </svg>
                                        </div>
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="item album" >
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
                                        <img src="{{ asset('template2/theme-orange/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                    </div>
                                </div>
                                <div id="dynamic2" href="javascript:void(0)" class="cover-album" style="background-image: url('../../template2/theme-orange/assets/images/img-album-demo2.jpg');">
                                    <div class="top-album">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <div class="icon-search-hover">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                            <path class="st0" d="M21.7,20.3L18,16.6c3.1-3.9,2.5-9.5-1.4-12.7S7.1,1.5,4,5.3S1.5,14.9,5.3,18c3.3,2.6,8,2.6,11.3,0l3.7,3.7
                                                c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0C22.1,21.3,22.1,20.7,21.7,20.3z M11,18c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S14.9,18,11,18z"/>
                                            </svg>
                                        </div>
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="item album" >
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
                                        <img src="{{ asset('template2/theme-orange/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                    </div>
                                </div>
                                <div id="dynamic2" href="javascript:void(0)" class="cover-album" style="background-image: url('../../template2/theme-orange/assets/images/img-album-demo3.jpg');">
                                    <div class="top-album">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <div class="icon-search-hover">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                            <path class="st0" d="M21.7,20.3L18,16.6c3.1-3.9,2.5-9.5-1.4-12.7S7.1,1.5,4,5.3S1.5,14.9,5.3,18c3.3,2.6,8,2.6,11.3,0l3.7,3.7
                                                c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0C22.1,21.3,22.1,20.7,21.7,20.3z M11,18c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S14.9,18,11,18z"/>
                                            </svg>
                                        </div>
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="item album" >
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
                                        <img src="{{ asset('template2/theme-orange/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                    </div>
                                </div>
                                <div id="dynamic2" href="javascript:void(0)" class="cover-album" style="background-image: url('../../template2/theme-orange/assets/images/img-album-demo2.jpg');">
                                    <div class="top-album">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <div class="icon-search-hover">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                            <path class="st0" d="M21.7,20.3L18,16.6c3.1-3.9,2.5-9.5-1.4-12.7S7.1,1.5,4,5.3S1.5,14.9,5.3,18c3.3,2.6,8,2.6,11.3,0l3.7,3.7
                                                c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0C22.1,21.3,22.1,20.7,21.7,20.3z M11,18c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S14.9,18,11,18z"/>
                                            </svg>
                                        </div>
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="item album" >
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
                                        <img src="{{ asset('template2/theme-orange/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                    </div>
                                </div>
                                <div id="dynamic2" href="javascript:void(0)" class="cover-album" style="background-image: url('../../template2/theme-orange/assets/images/img-album-demo3.jpg');">
                                    <div class="top-album">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <div class="icon-search-hover">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                            <path class="st0" d="M21.7,20.3L18,16.6c3.1-3.9,2.5-9.5-1.4-12.7S7.1,1.5,4,5.3S1.5,14.9,5.3,18c3.3,2.6,8,2.6,11.3,0l3.7,3.7
                                                c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0C22.1,21.3,22.1,20.7,21.7,20.3z M11,18c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S14.9,18,11,18z"/>
                                            </svg>
                                        </div>
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="item album" >
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
                                        <img src="{{ asset('template2/theme-orange/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                    </div>
                                </div>
                                <div id="dynamic2" href="javascript:void(0)" class="cover-album" style="background-image: url('../../template2/theme-orange/assets/images/img-album-demo2.jpg');">
                                    <div class="top-album">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <div class="icon-search-hover">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                            <path class="st0" d="M21.7,20.3L18,16.6c3.1-3.9,2.5-9.5-1.4-12.7S7.1,1.5,4,5.3S1.5,14.9,5.3,18c3.3,2.6,8,2.6,11.3,0l3.7,3.7
                                                c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0C22.1,21.3,22.1,20.7,21.7,20.3z M11,18c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S14.9,18,11,18z"/>
                                            </svg>
                                        </div>
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="item album" >
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
                                        <img src="{{ asset('template2/theme-orange/assets/images/icons/icon-edit.svg')}}" alt="icon">
                                    </div>
                                </div>
                                <div id="dynamic2" href="javascript:void(0)" class="cover-album" style="background-image: url('../../template2/theme-orange/assets/images/img-album-demo3.jpg');">
                                    <div class="top-album">
                                        <div class="source">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <div class="icon-search-hover">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                            <path class="st0" d="M21.7,20.3L18,16.6c3.1-3.9,2.5-9.5-1.4-12.7S7.1,1.5,4,5.3S1.5,14.9,5.3,18c3.3,2.6,8,2.6,11.3,0l3.7,3.7
                                                c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0C22.1,21.3,22.1,20.7,21.7,20.3z M11,18c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S14.9,18,11,18z"/>
                                            </svg>
                                        </div>
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