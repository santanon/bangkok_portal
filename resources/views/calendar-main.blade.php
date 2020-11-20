@section('title', 'ปฎิทินกิจกรรม')
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
                                <h2 class="title-banner">ปฎิทินกิจกรรม</h2>
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
                        <li class="breadcrumb-item active" aria-current="page">ปฎิทินกิจกรรม</li>
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
                                <h3 class="title" style="margin-bottom: 5px">ปฎิทินกิจกรรม</h3>
                                <p class="desc">วันนี้ : 2 / พฤศจิกายน / 2563</p>
                            </div>
                        </div>
                        <div class="main-content">
                            <div class="clendar-warpper">
                                <div class="row">
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
                                </div>
                                <div class="head-calendar">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-8 col-xs-6">
                                            <div class="title-calendar">
                                                <div class="month-title"></div>
                                                <div class="year-title"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="calendar-wrapper-btn">
                                                <button id='prev' class="btn">
                                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                                </button>
                                                <button id='next' class="btn">
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-calendar">
                                    <div id="calendar">
                                    </div>
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

<link rel="stylesheet" href="{{ asset('template1/css/calendar/main.min.css')}}">
<script type="text/javascript" src="{{ asset('template1/js/calendar/main.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        
        //$('#exampleModal').modal('show');

    });
</script>
<script>

    // Calendar
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: false,
            locale: 'th',

        });
        calendar.render();

        document.getElementById('prev').addEventListener('click', function () {
            calendar.prev(); // call method

            var view = calendar.view;
            var v_title = view.title;
            //console.log(v_title);
            var c_month = (view.title).split(' ');
            var c_year = (view.title).split(' ');
            $('.month-title').html(c_month[0]);
            $('.year-title').html(c_year[1]);

        });

        document.getElementById('next').addEventListener('click', function () {
            calendar.next(); // call method

            var view = calendar.view;
            var v_title = view.title;
            //console.log(v_title);
            var c_month = (view.title).split(' ');
            var c_year = (view.title).split(' ');
            $('.month-title').html(c_month[0]);
            $('.year-title').html(c_year[1]);
        });

        // default
        var view = calendar.view;
        var v_title = view.title;
        var c_month = (view.title).split(' ');
        var c_year = (view.title).split(' ');
        $('.month-title').html(c_month[0]);
        $('.year-title').html(c_year[1]);

    });

</script>
@endsection

