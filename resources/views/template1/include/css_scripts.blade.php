<!-- Modal -->
<div class="modal fade" id="Modal_" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content no-border bg-color-inherit">
            <div class="modal-close" data-dismiss="modal" aria-label="Close">
                <div class="icon-close"></div>
            </div>
            <div class="modal-body p-0">
                <div class="row no-gutters">
                    <!-- กรณีไม่มีข้อความ -->
                    <!-- <div class="col-md-12">
                        <div class="group-modal">
                            <div class="img-modal">
                                <img src="{{ asset('template1/assets/images/img-modal-demo.png')}}" alt="icon">
                            </div>
                            <div class="section-btn">
                                <ul>
                                    <li class="bg-color-gray">
                                        <a href="/">อ่านข่าวสาร</a>
                                    </li>
                                    <li class="bg-color-primary">
                                        <a href="/">เข้าสู่เว็บไซต์</a>
                                    </li>
                                    <li class="bg-color-secondary">
                                        <a href="/">Enter Site</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <!-- กรณีมีข้อความ -->
                    <div class="col-md-12">
                        <div class="group-modal">
                            <div class="img-modal">
                                <img src="{{ asset('template1/assets/images/img-modal-demo.png')}}" alt="icon">
                            </div>
                            <div class="section-btn">
                                <ul>
                                    <li class="bg-color-gray">
                                        <a href="/">อ่านข่าวสาร</a>
                                    </li>
                                    <li class="bg-color-primary">
                                        <a href="/">เข้าสู่เว็บไซต์</a>
                                    </li>
                                    <li class="bg-color-secondary">
                                        <a href="/">Enter Site</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="group-modal">
                            <div class="text-modal">
                                Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ 
                                มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<div class="modal fade modal-custom" id="modalpanel" tabindex="-1" role="dialog" aria-labelledby="modalpanelLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content no-border">
        <div class="modal-header">
            <h3 class="modal-title" id="alertModalLabel">ระบบหลังบ้าน</h3>
            <div class="modal-close" data-dismiss="modal" aria-label="Close">
                <div class="icon-close"></div>
            </div>
        </div>
        <div class="modal-body">
            <iframe src="/user/dashboard" height="600px" frameborder="0" allowtransparency="true"></iframe>  
        </div>
    </div>
  </div>
</div>

<div class="modal fade modal-custom" id="modal_full" tabindex="-1" role="dialog" aria-labelledby="modalpanelLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content no-border">
            <div class="modal-header">
                <h3 class="modal-title" id="alertModalLabel"><span id="modal_full_span">INFORMATION</span></h3>
                <div class="modal-close" data-dismiss="modal" aria-label="Close">
                    <div class="icon-close"></div>
                </div>
            </div>
            <div class="modal-body">
                <iframe id="iframe_full" height="600px" frameborder="0" allowtransparency="true"></iframe>  
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_Alert_delete" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content no-border">
      <div class="modal-header">
        <h5 class="modal-title" id="alertModalLabel">แจ้งเตือน</h5>
      </div>
      <div class="modal-body">
        <div class="group-modal">
            <div class="text-modal text-alert-system d-flex align-items-center">
                <i class="fas fa-exclamation-circle" style="color: red;"></i> ยืนยันการลบ?
            </div>
        </div>
      </div>
      <div class="modal-footer"> 
        <button type="button" class="btn btn-primary" style="background-color:red;">ลบข้อมูล</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_Alert_hide" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content no-border">
        <div class="modal-header">
          <h5 class="modal-title" id="alertModalLabel">แจ้งเตือน</h5>
        </div>
        <div class="modal-body">
          <div class="group-modal">
              <div class="text-modal text-alert-system d-flex align-items-center">
                  <i class="fas fa-exclamation-circle"></i> ต้องการซ่อนหรือไม่?
              </div>
          </div>
        </div>
        <div class="modal-footer"> 
          <button type="button" class="btn btn-primary">ซ่อนข้อมูล</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        </div>
      </div>
    </div>
  </div>

<link rel="stylesheet" href="{{ asset('fontawesome/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('fontawesome/all.min.css')}}">

<link rel="stylesheet" href="{{ asset('template1/theme-blue/css/jquery-ui.css')}}">
<script type="text/javascript" rel="preload" src="{{ asset('template1/js/jquery-1.12.3.js') }}"></script>
<script type="text/javascript" rel="preload" src="{{ asset('template1/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" rel="preload" src="{{ asset('template1/js/jquery-ui-1.11.4.custom.js') }}"></script>
<script type="text/javascript" rel="preload" src="{{ asset('template1/js/init.js') }}"></script>

<!-- AOS -->
<link rel="stylesheet" href="{{ asset('animation/aos.css')}}">
<script type="text/javascript" src="{{ asset('animation/aos.js') }}"></script>

<!-- navgoco -->
<link rel="stylesheet" href="{{ asset('template1/css/jquery.navgoco.css')}}">
<script type="text/javascript" src="{{ asset('template1/js/jquery.navgoco.min.js') }}"></script>

<!-- DragDrop -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script> 

<!-- Slick -->
<link rel="stylesheet" href="{{ asset('template1/css/slick.css')}}">
<link rel="stylesheet" href="{{ asset('template1/css/slick-theme.css')}}">
<script type="text/javascript" src="{{ asset('template1/js/slick.min.js') }}"></script>

<script>
   AOS.init();
</script>

<script>
    $(document).ready(function() {
        $("#increase-size, #increase-size-mb").on("click",function(){
            $('.reduce, .normal').removeClass('active');
            $('.increase').addClass('active');
            $("html").css("font-size",'72.5' + "%");
        });
        $("#normal-size, #normal-size-mb").on("click",function(){
            $('.reduce, .increase').removeClass('active');
            $('.normal').addClass('active');
            $("html").css("font-size",'62.5' + "%");
        });
        $("#reduce-size, #reduce-size-md").on("click",function(){
            $('.normal, .increase').removeClass('active');
            $('.reduce').addClass('active');
            $("html").css("font-size",'52.5'+ "%");
        });
    });
</script>


<script type="text/javascript">
    $('.icon-like').on('click', function(event, count) {
        event.preventDefault();
        
        var $this = $(this),
            count = $this.attr('data-count'),
            active = $this.hasClass('active'),
            multiple = $this.hasClass('multiple-count');
        
        // First method, allows to add custom function
        // Use when you want to do an ajax request
        /* if (multiple) {
        $this.attr('data-count', ++count);
        // Your code here
        } else {
        $this.attr('data-count', active ? --count : ++count).toggleClass('active');
        // Your code here
        } */
        
        // Second method, use when ... I dunno when but it looks cool and that's why it is here
        $.fn.noop = $.noop;
        $this.attr('data-count', ! active || multiple ? ++count : --count  )[multiple ? 'noop' : 'toggleClass']('active');
        
    });
</script>


<script> 
    $('#modal_full').on('shown.bs.modal',function(){
    $(this).find('iframe').attr('src',main_iframe_url); 
    });
    </script>