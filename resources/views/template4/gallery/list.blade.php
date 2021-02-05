<div class="section-content">
    <div class="inner-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="top-content flex-row bg-color-secondary">
                        <div class="group-text">
                            <h3 class="title">ภาพกิจกรรม</h3>
                            <p class="desc">The Bangkok Metropolitan Council Secretariat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                         <form action="">
                @csrf <!-- {{ csrf_field() }} -->
                            <div class="row">
                                <div class="col-lg-6 col-md-4 col-sm-6">
                                    <div class="input-custom inp-search">
                                        <input class="style-input" type="text" name="" placeholder="คำค้นหา" />
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="btn-custom width-full btn-custom-skew skew-color-gray">
                                        <button class="btn btn-default icn-right">
                                            ค้นหา
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

            <div class="row">
                <div class="col-12">
                    <div class="main-content">
                        <div class="gallery-template">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <div class="item album">
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                            <a id="dynamic1" href="javascript:void(0)" >
                                                <div class="bg-layer">
                                                    <div class="icon-search-hover">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <div class="item album" id="dynamic2">
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo2.jpg');">
                                            <a id="dynamic2" href="javascript:void(0)" >
                                                <div class="bg-layer">
                                                    <div class="icon-search-hover">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <div class="item album" id="dynamic1">
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo3.jpg');">
                                            <a id="dynamic1" href="javascript:void(0)" >
                                                <div class="bg-layer">
                                                    <div class="icon-search-hover">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <div class="item album" id="dynamic2">
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo4.jpg');">
                                            <a id="dynamic2" href="javascript:void(0)" >
                                                <div class="bg-layer">
                                                    <div class="icon-search-hover">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
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

                                <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <div class="item album">
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                            <a id="dynamic1" href="javascript:void(0)" >
                                                <div class="bg-layer">
                                                    <div class="icon-search-hover">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <div class="item album" id="dynamic2">
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo2.jpg');">
                                            <a id="dynamic2" href="javascript:void(0)" >
                                                <div class="bg-layer">
                                                    <div class="icon-search-hover">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <div class="item album" id="dynamic1">
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo3.jpg');">
                                            <a id="dynamic1" href="javascript:void(0)" >
                                                <div class="bg-layer">
                                                    <div class="icon-search-hover">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <div class="item album" id="dynamic2">
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo4.jpg');">
                                            <a id="dynamic2" href="javascript:void(0)" >
                                                <div class="bg-layer">
                                                    <div class="icon-search-hover">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
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

                                <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <div class="item album">
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                            <a id="dynamic1" href="javascript:void(0)" >
                                                <div class="bg-layer">
                                                    <div class="icon-search-hover">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <div class="item album" id="dynamic2">
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo2.jpg');">
                                            <a id="dynamic2" href="javascript:void(0)" >
                                                <div class="bg-layer">
                                                    <div class="icon-search-hover">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <div class="item album" id="dynamic1">
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo3.jpg');">
                                            <a id="dynamic1" href="javascript:void(0)" >
                                                <div class="bg-layer">
                                                    <div class="icon-search-hover">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <div class="item album" id="dynamic2">
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo4.jpg');">
                                            <a id="dynamic2" href="javascript:void(0)" >
                                                <div class="bg-layer">
                                                    <div class="icon-search-hover">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
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

                                <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <div class="item album">
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo1.png');">
                                            <a id="dynamic1" href="javascript:void(0)" >
                                                <div class="bg-layer">
                                                    <div class="icon-search-hover">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <div class="item album" id="dynamic2">
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo2.jpg');">
                                            <a id="dynamic2" href="javascript:void(0)" >
                                                <div class="bg-layer">
                                                    <div class="icon-search-hover">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <div class="item album" id="dynamic1">
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo3.jpg');">
                                            <a id="dynamic1" href="javascript:void(0)" >
                                                <div class="bg-layer">
                                                    <div class="icon-search-hover">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <div class="item album" id="dynamic2">
                                        <div class="cover" style="background-image: url('../../template1/assets/images/img-album-demo4.jpg');">
                                            <a id="dynamic2" href="javascript:void(0)" >
                                                <div class="bg-layer">
                                                    <div class="icon-search-hover">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-search-large.png')}}" alt="banner">
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
    </div>
</div>