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
                    <h3 class="title color-primary">ภาพกิจกรรม</h3>
                    <p class="desc color-secondary">The Bangkok Metropolitan Council Secretariat </p>
                </div>
            </div>
            <div class="search-content">
                 <form action="">
                @csrf <!-- {{ csrf_field() }} -->
                    <div class="row">
                        <div class="col-lg-11 col-sm-6">
                            <div class="input-custom inp-search">
                                <input class="style-input" type="text" name="" placeholder="คำค้นหา" />
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-1">
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
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="item -album">
                                <div class="group-mange-section no-mg right-0">
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
                                <div class="cover-album" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                    <a id="dynamic1" href="javascript:void(0)" >
                                        <div class="bg-layer">
                                            <div class="icon-search-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="top-album">
                                        <div class="source bg-color-secondary">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="item -album" id="dynamic2">
                                <div class="group-mange-section no-mg right-0">
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
                                <div class="cover-album" style="background-image: url('../../template1/assets/images/img-album-demo2.jpg');">
                                    <a id="dynamic2" href="javascript:void(0)" >
                                        <div class="bg-layer">
                                            <div class="icon-search-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="top-album">
                                        <div class="source bg-color-secondary">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="item -album" id="dynamic1">
                                <div class="group-mange-section no-mg right-0">
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
                                <div class="cover-album" style="background-image: url('../../template1/assets/images/img-album-demo3.jpg');">
                                    <a id="dynamic1" href="javascript:void(0)" >
                                        <div class="bg-layer">
                                            <div class="icon-search-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="top-album">
                                        <div class="source bg-color-secondary">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="item -album" id="dynamic2">
                                <div class="group-mange-section no-mg right-0">
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
                                <div class="cover-album" style="background-image: url('../../template1/assets/images/img-album-demo4.jpg');">
                                    <a id="dynamic2" href="javascript:void(0)" >
                                        <div class="bg-layer">
                                            <div class="icon-search-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="top-album">
                                        <div class="source bg-color-secondary">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="item -album">
                                <div class="group-mange-section no-mg right-0">
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
                                <div class="cover-album" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                    <a id="dynamic1" href="javascript:void(0)" >
                                        <div class="bg-layer">
                                            <div class="icon-search-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="top-album">
                                        <div class="source bg-color-secondary">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="item -album" id="dynamic2">
                                <div class="group-mange-section no-mg right-0">
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
                                <div class="cover-album" style="background-image: url('../../template1/assets/images/img-album-demo2.jpg');">
                                    <a id="dynamic2" href="javascript:void(0)" >
                                        <div class="bg-layer">
                                            <div class="icon-search-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="top-album">
                                        <div class="source bg-color-secondary">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="item -album" id="dynamic1">
                                <div class="group-mange-section no-mg right-0">
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
                                <div class="cover-album" style="background-image: url('../../template1/assets/images/img-album-demo3.jpg');">
                                    <a id="dynamic1" href="javascript:void(0)" >
                                        <div class="bg-layer">
                                            <div class="icon-search-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="top-album">
                                        <div class="source bg-color-secondary">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="item -album" id="dynamic2">
                                <div class="group-mange-section no-mg right-0">
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
                                <div class="cover-album" style="background-image: url('../../template1/assets/images/img-album-demo4.jpg');">
                                    <a id="dynamic2" href="javascript:void(0)" >
                                        <div class="bg-layer">
                                            <div class="icon-search-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="top-album">
                                        <div class="source bg-color-secondary">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="item -album">
                                <div class="group-mange-section no-mg right-0">
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
                                <div class="cover-album" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                    <a id="dynamic1" href="javascript:void(0)" >
                                        <div class="bg-layer">
                                            <div class="icon-search-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="top-album">
                                        <div class="source bg-color-secondary">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="item -album" id="dynamic2">
                                <div class="group-mange-section no-mg right-0">
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
                                <div class="cover-album" style="background-image: url('../../template1/assets/images/img-album-demo2.jpg');">
                                    <a id="dynamic2" href="javascript:void(0)" >
                                        <div class="bg-layer">
                                            <div class="icon-search-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="top-album">
                                        <div class="source bg-color-secondary">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="item -album" id="dynamic1">
                                <div class="group-mange-section no-mg right-0">
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
                                <div class="cover-album" style="background-image: url('../../template1/assets/images/img-album-demo3.jpg');">
                                    <a id="dynamic1" href="javascript:void(0)" >
                                        <div class="bg-layer">
                                            <div class="icon-search-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="top-album">
                                        <div class="source bg-color-secondary">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
                                        <span>กทม. ร่วมเป็นเกียรติในพิธีลงนามสร้างสวนป่า</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="item -album" id="dynamic2">
                                <div class="group-mange-section no-mg right-0">
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
                                <div class="cover-album" style="background-image: url('../../template1/assets/images/img-album-demo4.jpg');">
                                    <a id="dynamic2" href="javascript:void(0)" >
                                        <div class="bg-layer">
                                            <div class="icon-search-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="top-album">
                                        <div class="source bg-color-secondary">
                                            <span>PR BKK</span>
                                        </div>
                                    </div>
                                    <div class="caption-album">
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