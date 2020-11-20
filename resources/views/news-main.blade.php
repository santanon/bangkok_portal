@section('title', 'รายการข่าว')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('template1/include/start')
@section('contentpage')

<div class="main-wrapper">
    <div class="panel-header">
        <div class="header-top">
            @include('panel/include.head-top')
        </div>
    </div>

    <header id="header-wrapper">
        @include('template1/include.header')
    </header>
    
    <div id="site-content">

        <div class="group-link-mainbkk">
            <a href="">
                <div class="icon-bkk">
                    <img src="{{ asset('template1/assets/images/icons/icon-bkk.png')}}" alt="icon">
                </div>
                <div class="text-bkk">
                    <label>กรุงเทพมหานคร</label>
                    Bangkok.go.th
                </div>
            </a>
        </div>

        <div class="banner-wrapper onlyOne">
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
            <ul>
                <li>
                    <div class="bg-layer"></div>
                    <div class="banner" style="background-image: url('../../template1/assets/images/banner/img-banner-demo.png');"></div>
                    <div class="item-Onbanner-outer">
                        <div class="item-Onbanner-inner">
                            <div class="list">
                                <h2 class="title-banner">ข่าวสาร</h2>
                                <p class="desc-banner">มุ่งมั่นการทำงาน แหล่งค้นคว้าการประชุม เครือข่ายมหานครอาเซียน</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="group-section-breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ข่าวสาร</li>
                    </ol>
                </nav>
            </div>
            
        </div> 

        <div class="group-section-content">
            <div class="section-content">
                <div class="container">
                    <div class="inner-content">
                        <div class="top-content">
                            <div class="group-text">
                                <h3 class="title">ข่าวประชาสัมพันธ์</h3>
                                <p class="desc">The Bangkok Metropolitan Council Secretariat </p>
                            </div>
                        </div>
                        <div class="search-content">
                            <form action="">
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
                                    <div class="col-lg-3">
                                        <div class="input-custom inp-calendar">
                                            <input class="style-input" type="text" name="datefilter" placeholder="จากวันที่ - ถึงวันที่" />
                                            <div class="icon-calendar"><i class="far fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-custom inp-search">
                                            <input class="style-input" type="text" name="" placeholder="คำค้นหา" />
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
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
                        <div class="main-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="sub-news">
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
                                        <div class="row no-gutters">
                                            <div class="col-lg-6">
                                                <div class="img-news" style="background-image: url('../../template1/assets/images/img-news-demo2.png');">
                                                    <div class="pin"><i class="fas fa-thumbtack"></i></div>
                                                    <div class="read-news-outer">
                                                        <a href="/news-detail">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span> <img src="{{ asset('template1/assets/images/icons/icon-new.png')}}" alt="icon">
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="/news-detail">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> 5
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-twitter.svg')}}" alt="icon">  5
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon">   5
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sub-news">
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
                                        <div class="row no-gutters">
                                            <div class="col-lg-6">
                                                <div class="img-news" style="background-image: url('../../template1/assets/images/img-news-demo2.png');">
                                                    <div class="read-news-outer">
                                                        <a href="/news-detail">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="/news-detail">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> 5
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-twitter.svg')}}" alt="icon">  5
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon">   5
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sub-news">
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
                                        <div class="row no-gutters">
                                            <div class="col-lg-6">
                                                <div class="img-news" style="background-image: url('../../template1/assets/images/img-news-demo2.png');">
                                                    <div class="read-news-outer">
                                                        <a href="/news-detail">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="/news-detail">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> 5
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-twitter.svg')}}" alt="icon">  5
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon">   5
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sub-news">
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
                                        <div class="row no-gutters">
                                            <div class="col-lg-6">
                                                <div class="img-news" style="background-image: url('../../template1/assets/images/img-news-demo2.png');">
                                                    <div class="read-news-outer">
                                                        <a href="/news-detail">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="/news-detail">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> 5
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-twitter.svg')}}" alt="icon">  5
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon">   5
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sub-news">
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
                                        <div class="row no-gutters">
                                            <div class="col-lg-6">
                                                <div class="img-news" style="background-image: url('../../template1/assets/images/img-news-demo2.png');">
                                                    <div class="read-news-outer">
                                                        <a href="/news-detail">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="/news-detail">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> 5
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-twitter.svg')}}" alt="icon">  5
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon">   5
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sub-news">
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
                                        <div class="row no-gutters">
                                            <div class="col-lg-6">
                                                <div class="img-news" style="background-image: url('../../template1/assets/images/img-news-demo2.png');">
                                                    <div class="read-news-outer">
                                                        <a href="/news-detail">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="/news-detail">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> 5
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-twitter.svg')}}" alt="icon">  5
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon">   5
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sub-news">
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
                                        <div class="row no-gutters">
                                            <div class="col-lg-6">
                                                <div class="img-news" style="background-image: url('../../template1/assets/images/img-news-demo2.png');">
                                                    <div class="read-news-outer">
                                                        <a href="/news-detail">
                                                            อ่านข่าวสาร
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="content">
                                                    <div class="date">
                                                        <span>ข่าววันที่ : 5 พ.ย.</span>
                                                    </div>
                                                    <div class="desc-news">
                                                        <a href="/news-detail">
                                                            หน่วยงานภาครัฐและภาคเอกชนประชุมกรรมการดำเนินงานด้านการป้องกัน...
                                                        </a>
                                                    </div>
                                                    <div class="social-wrapper">
                                                        <ul class="d-flex align-items-center">
                                                            <li class="facebook d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"> 5
                                                            </li>
                                                            <li class="twitter d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-twitter.svg')}}" alt="icon">  5
                                                            </li>
                                                            <li class="line d-flex align-items-center not-hover">
                                                                <img src="{{ asset('template1/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon">   5
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row no-gutters">
                                        <div class="col-lg-6">
                                            <div class="add-news">
                                                <i class="fas fa-plus"></i>
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

    <footer id="footer-wrapper">
        @include('template1/include.footer')
    </footer>


    <!-- Manage Save -->
    <!-- <div class="manage-save">
        <i class="fas fa-save"></i> SAVED
    </div> -->

</div>


<!-- Modal alert -->
<div class="modal fade" id="modal_Alert" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content no-border">
      <div class="modal-header">
        <h5 class="modal-title" id="alertModalLabel">แจ้งเตือน</h5>
      </div>
      <div class="modal-body">
        <div class="group-modal">
            <div class="text-modal text-alert-system d-flex align-items-center">
                <i class="fas fa-exclamation-circle"></i> ข้อความระบบ
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Full screen -->
<div class="modal fade" id="modalpanel" tabindex="-1" role="dialog" aria-labelledby="modalpanelLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content no-border">
        <div class="modal-close" data-dismiss="modal" aria-label="Close">
            <div class="icon-close"></div>
        </div>
        <div class="modal-header">
            <h5 class="modal-title" id="alertModalLabel">ระบบหลังบ้าน</h5>
        </div>
        <div class="modal-body">
            <iframe src="/user/dashboard" height="600px" frameborder="0" allowtransparency="true"></iframe>  
        </div>
    </div>
  </div>
</div>


@include('template1/include.css_scripts')
<!-- navgoco -->
<link rel="stylesheet" href="{{ asset('template1/css/daterangepicker.css')}}">
<script type="text/javascript" src="{{ asset('template1/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template1/js/daterangepicker.js') }}"></script>


<script type="text/javascript">
    $(document).ready(function () {
        
        //$('#exampleModal').modal('show')

        $('input[name="datefilter"]').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });

        $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
        });

        $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    });
</script>
@endsection

