<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>@yield('title')</title>
<meta name="keywords" content="@yield('tagkeyword')" />
<meta name="description" content="@yield('tagdescription')" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@<?php echo $_SESSION['portal_website_'.$mod.'_web_url'] ?>" />
<meta name="twitter:creator" content="@<?php echo $_SESSION['portal_website_'.$mod.'_web_url'] ?>" />

<link rel="canonical" href=""/>
<link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('template1/theme-blue/css/main.css')}}">

<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">

    
</head>
<body class="color-green<?php if(isset($_SESSION['panel_login']) && $_SESSION['panel_login'] == '1'){ ?> manage<?php }?>">

    <script>
        var main_iframe_url = '';
        function sfi(title,url)
        {
            document.getElementById('iframe_full').src = '';
            document.getElementById('modal_full_span').innerHTML = title;
            main_iframe_url = url;
        }
        </script>

    <!-- Script Loading -->
    <!--<div class="se-pre-con loading">
        <div class="group-loading">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>-->
    <!-- /Script Loading -->
    
    
    @yield('contentpage')
    


    <script type="text/javascript">
        $(document).ready(function() {
            $(window).load(function () {
                $(".se-pre-con.loading").fadeOut(1000);
            });
        });
    </script>



</body>
</html>
