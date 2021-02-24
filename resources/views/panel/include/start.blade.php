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
<meta name="twitter:site" content="@thailife" />
<meta name="twitter:creator" content="@thailife" />

<link rel="canonical" href=""/>
<link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('panel/css/main.css')}}">

<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">


<style>
html, body {
height: 100%;
}
.full-height {
height: 100%;
background-color: black; 
text-align: center; 
color:#FFFFFF;
font-size:30px;
}


</style>
</head>

<body>
    <div id="div_full_screen" class="full-height" style="display: none;"><br><br><br><br><br><br><br><br><br>กำลังโหลด...</div>
    <?php
    if(isset($_GET['noload']))
    {

    }
    else 
    {
        ?>
        <!-- Script Loading -->
        <div class="se-pre-con loading">
            <div class="group-loading">
                <div class="lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- /Script Loading -->
        <?php
    }
    ?>
    
    
    
    
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
