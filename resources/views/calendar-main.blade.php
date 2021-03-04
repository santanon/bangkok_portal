<?php
$CustomHelper = new \App\CustomHelper;
$TextLanguage = new \App\TextLanguage;
if(!function_exists('base_url')) 
{
    function base_url()
    {
        return 'http://127.0.0.1:8000/';
    }
} 
?> 
@section('title', $title)
@section('tagkeyword', $CustomHelper->L($_SESSION['portal_website_style_'.$mod.'_info_keyword'],$_SESSION['portal_website_style_'.$mod.'_info_keyword']))
@section('tagdescription', $CustomHelper->L($_SESSION['portal_website_style_'.$mod.'_info_description'],$_SESSION['portal_website_style_'.$mod.'_info_description']))

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

      <div class="banner-wrapper"> 
        @include('template1/main-slide-app')
    </div>

    <div class="group-section-breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/<?php echo $mod ?>"><?php echo $CustomHelper->L('หน้าแรก','Home') ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $CustomHelper->L($r_title,$r_en_title) ?></li>
                </ol>
            </nav>
        </div> 
    </div>

        <div class="group-section-content">
            @include('template1/calendar.list')
        </div>

    </div>

    <footer id="footer-wrapper">
        @include('template1/include.footer')
    </footer>


    <!-- Manage Save -->
    <!-- <div class="manage-save">
        <em class="fas fa-save"></em> SAVED
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
                <em class="fas fa-exclamation-circle"></em> ข้อความระบบ
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

<link rel="stylesheet" href="{{ asset('template1/js/calendar3_9/fullcalendar.min.css')}}">
<script type="text/javascript" src="{{ asset('template1/js/calendar3_9/lib/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template1/js/calendar3_9/fullcalendar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('template1/js/calendar3_9/locale-all.js') }}"></script>

<script>

  $(document).ready(function() {

    var d = new Date();
    var y = d.getFullYear();

    $('#calendar').fullCalendar({
      header:false,
      locale: 'th',
      defaultDate: moment().format("YYYY-MM-DD"),
      navLinks: false, // can click day/week names to navigate views
      editable: false,
      eventLimit: true, // allow "more" link when too many events
      events: [ 
        <?php 
        foreach($data_id as $r)
        {
            ?>
            {
              title:  '<?php echo str_replace('“','',str_replace('"','',$CustomHelper->L($r->title,$r->en_title))) ?>',
              url:    '<?php echo base_url().$mod ?>/page/<?php echo $r_page_type ?>/<?php echo $r_page_id ?>/Activities/0/info/<?php echo $r->id ?>/',
              start:  '<?php echo date('Y-m-d',$r->date_news) ?>',
              end:  '<?php echo date('Y-m-d',$r->date_news_end) ?>',
            }, 
            <?php	 
        }
        ?> 
      ]
    });

   $(".-month").on("change", function(event) {
      $('#calendar').fullCalendar('changeView', 'month', this.value);
      $('#calendar').fullCalendar('gotoDate', y +"-"+ this.value);

   });

  });

</script>
@endsection

