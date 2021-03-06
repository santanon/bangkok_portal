<link rel="stylesheet" href="{{ asset('fontawesome/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('fontawesome/all.min.css')}}">

<link rel="stylesheet" href="{{ asset('template3/theme-green/css/jquery-ui.css')}}">
<script type="text/javascript" rel="preload" src="{{ asset('template3/js/jquery-1.12.3.js') }}"></script>
<script type="text/javascript" rel="preload" src="{{ asset('template3/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" rel="preload" src="{{ asset('template3/js/jquery-ui-1.11.4.custom.js') }}"></script>
<script type="text/javascript" rel="preload" src="{{ asset('template3/js/init.js') }}"></script>

<!-- AOS -->
<link rel="stylesheet" href="{{ asset('animation/aos.css')}}">
<script type="text/javascript" src="{{ asset('animation/aos.js') }}"></script>

<!-- navgoco -->
<link rel="stylesheet" href="{{ asset('template3/css/jquery.navgoco.css')}}">
<script type="text/javascript" src="{{ asset('template3/js/jquery.navgoco.min.js') }}"></script>

<!-- DragDrop -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script> 

<!-- Slick -->
<link rel="stylesheet" href="{{ asset('template3/css/slick.css')}}">
<link rel="stylesheet" href="{{ asset('template3/css/slick-theme.css')}}">
<script type="text/javascript" src="{{ asset('template3/js/slick.min.js') }}"></script>

<script>
   AOS.init();
</script>

<script>
    $(document).ready(function() {
        $("#increase-size").on("click",function(){
            $('.reduce, .normal').removeClass('active');
            $('.increase').addClass('active');
            $("html").css("font-size",'72.5' + "%");
        });
        $("#normal-size").on("click",function(){
            $('.reduce, .increase').removeClass('active');
            $('.normal').addClass('active');
            $("html").css("font-size",'62.5' + "%");
        });
        $("#reduce-size").on("click",function(){
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