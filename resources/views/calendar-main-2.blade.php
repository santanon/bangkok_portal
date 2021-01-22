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


<link rel="stylesheet" href="{{ asset('template2/js/calendar3_9/fullcalendar.min.css')}}">
<script type="text/javascript" src="{{ asset('template2/js/calendar3_9/lib/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template2/js/calendar3_9/fullcalendar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template2/js/calendar3_9/locale-all.js') }}"></script>

<script>

  $(document).ready(function() {

    var d = new Date();
    var y = d.getFullYear();

    $('#calendar').fullCalendar({
      // header: {
      //   left: '',
      //   center: 'title',
      //   right: ''
      // },
      header:false,
      locale: 'th',
      defaultDate: moment().format("YYYY-MM-DD"),
      navLinks: false, // can click day/week names to navigate views
      editable: false,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'Lunch',
          start: '2021-01-12'
        },
        {
          title: 'Meeting',
          start: '2021-01-12'
        },
        {
          title: 'Happy Hour',
          start: '2021-01-12'
        },
        {
          title: 'Dinner',
          start: '2021-01-12'
        },
        {
          title: 'Birthday Party',
          start: '2021-01-13'
        },
        {
          title: 'Click for Google',
          url: '/calendar-detail-2',
          start: '2021-01-28'
        }
      ]
    });
  
  //$(".fc-right").append('<select class="select_month form-control"><option value="">Select Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mrch</option><option value="4">Aprl</option><option value="5">May</option><option value="6">June</option><option value="7">July</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>');
  //$(".fc-left").append('<select class="select_year form-control"><option value="2021">2021</option><option value="2022">2022</option></select>');
  
   $(".-month").on("change", function(event) {
      $('#calendar').fullCalendar('changeView', 'month', this.value);
      $('#calendar').fullCalendar('gotoDate', y +"-"+ this.value);
      //$('#calendar').fullCalendar('gotoDate', $(".select_year").val()+"-"+this.value);
      //console.log(this.value);
   });

  //  $(".select_year").on("change", function(event) {
  //     $('#calendar').fullCalendar('changeView', 'month', this.value);
  //     $('#calendar').fullCalendar('gotoDate', this.value+"-"+$(".select_month").val());
  //  });

  });

</script>
@endsection

