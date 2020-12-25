@section('title', 'ปฎิทินกิจกรรม')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('template2/include/start')
@section('contentpage')

<div class="main-wrapper">
    <div class="panel-header">
        <div class="header-top">
            @include('panel/include.head-top')
        </div>
    </div>

    <header id="header-wrapper">
        @include('template2/include.header')
    </header>
    
    <div id="site-content">
        <div class="banner-wrapper onlyOne">
            <div class="container">
                <div class="row">
                    <div class="col-12">
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
                                <img src="{{ asset('template2/assets/images/icons/icon-edit.svg')}}" alt="icon">
                            </div>
                        </div>
                        <ul>
                            <li>
                                <div class="bg-layer"></div>
                                <div class="banner" style="background-image: url('../../template2/assets/images/banner/img-banner-demo.png');"></div>
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
                </div>
            </div>
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
            @include('template2/calendar.list')
        </div>

    </div>

    <footer id="footer-wrapper">
        @include('template2/include.footer')
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


@include('template2/include.css_scripts')

<link rel="stylesheet" href="{{ asset('template2/theme-orange/css/calendar/main.min.css')}}">
<script type="text/javascript" src="{{ asset('template2/js/calendar/main.min.js') }}"></script>

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
            dayMaxEventRows: true,
            events: [
                {
                    "title": "All Day Event",
                    "start": "2020-11-23",
                    //"color": "#E76F0E",
                    "url": "/calendar-detail"
                },
                {
                    "title": "บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือasdalk k;lkdpa sk",
                    "start": "2020-11-23",
                    //"color": "#8CB81F",
                    "url": "/calendar-detail"
                },
                {
                    "title": "บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือ บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือ",
                    "start": "2020-11-23",
                    //"color": "#8CB81F",
                    "url": "/calendar-detail"
                },
                {
                    "title": "บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือasdalk k;lkdpa sk",
                    "start": "2020-11-23",
                    //"color": "#8CB81F",
                    "url": "/calendar-detail"
                },
                {
                    "title": "บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือasdalk k;lkdpa sk",
                    "start": "2020-11-23",
                    //"color": "#8CB81F",
                    "url": "/calendar-detail"
                },
            ],

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
