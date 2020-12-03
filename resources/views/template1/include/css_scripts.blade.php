<link rel="stylesheet" href="{{ asset('fontawesome/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('fontawesome/all.min.css')}}">

<script type="text/javascript" rel="preload" src="{{ asset('template1/theme-green/js/jquery-1.12.3.js') }}"></script>
<script type="text/javascript" rel="preload" src="{{ asset('template1/theme-green/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" rel="preload" src="{{ asset('template1/theme-green/js/jquery-ui-1.11.4.custom.js') }}"></script>
<script type="text/javascript" rel="preload" src="{{ asset('template1/theme-green/js/init.js') }}"></script>

<!-- AOS -->
<link rel="stylesheet" href="{{ asset('animation/aos.css')}}">
<script type="text/javascript" src="{{ asset('animation/aos.js') }}"></script>

<!-- navgoco -->
<link rel="stylesheet" href="{{ asset('template1/theme-green/css/jquery.navgoco.css')}}">
<script type="text/javascript" src="{{ asset('template1/theme-green/js/jquery.navgoco.min.js') }}"></script>

<!-- DragDrop -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script> 

<!-- Slick -->
<link rel="stylesheet" href="{{ asset('template1/theme-green/css/slick.css')}}">
<link rel="stylesheet" href="{{ asset('template1/theme-green/css/slick-theme.css')}}">
<script type="text/javascript" src="{{ asset('template1/theme-green/js/slick.min.js') }}"></script>

<script>
   AOS.init();
</script>

<script>
$(document).ready(function() {
    $("#increase-size").on("click",function(){
        $("html").css("font-size",'72.5' + "%");
    });
    $("#normal-size").on("click",function(){
        $("html").css("font-size",'62.5' + "%");
    });
    $("#reduce-size").on("click",function(){
        $("html").css("font-size",'52.5'+ "%");
    });
});
</script>