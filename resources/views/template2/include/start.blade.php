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
<?php  
$template_var_1 = substr($_SESSION['portal_website_style_' . $mod . '_template_id'],0,1);
$template_var_2 = substr($_SESSION['portal_website_style_' . $mod . '_template_id'],1,1);
$t_color = 'blue';
if($template_var_2 == '1')
{
    $t_color = 'blue';   
}
else if($template_var_2 == '2')
{
    $t_color = 'orange';
}
else if($template_var_2 == '3')
{
    $t_color = 'green';
}
else if($template_var_2 == '4')
{
    $t_color = 'pink';
}
else if($template_var_2 == '5')
{
    $t_color = 'purple';
}

if($mod != 'ballsite')
{
    ?>
    <link rel="stylesheet" href="http://127.0.0.1:8000/template1/theme-blue/css/main.css">
    <?php
    $t_color = 'blue';
}
else
{
    {
    ?>
    <link rel="stylesheet" href="http://127.0.0.1:8000/template<?php echo $template_var_1 ?>/theme-<?php echo $t_color ?>/css/main.css">
    <?php
}
}
?> 
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet"> 
</head>
<body class="color-<?php echo $t_color ?><?php if(isset($_SESSION['panel_login']) && $_SESSION['panel_login'] == '1' && trim($_SESSION['panel_web_url']) == trim($_SESSION['portal_website_'.$mod.'_web_url'])){ ?> manage<?php }?>">
    <style>
        #modal_full_span{ font-size:30px; }
        </style>
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
       /* $(document).ready(function() {
            $(window).load(function () {
                $(".se-pre-con.loading").fadeOut(1000);
            });
        });*/
    </script>

</body>
</html>
