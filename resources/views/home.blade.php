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
@section('title', $CustomHelper->L($_SESSION['portal_website_'.$mod.'_web_name_th'],$_SESSION['portal_website_'.$mod.'_web_name_en']))
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
            @include('template1/main-slide')
        </div>
 
        <div align="center" class="tools">
            <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/list?m=contentbox_cat');"><img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-edit.svg" alt="icon">&nbsp; <b style="font-size:18px;">จัดการ BOX</b></a><br><br>
        
        
            <button onmouseover="this.innerHTML = 'บันทึกจัดเรียง'" id="btn_save_sort_box" type="button" class="getOrder_ele" style="font-size: 20px;">บันทึกจัดเรียง</button>  <br><br> 
         
        </div> 

        <div class="group-section-content" id="manage_dragdrop">
 
            <?php  
            $_SESSION['arr_script_slide'] = "";
            $_SESSION['arr_script_slide_d'] = "";
            $_SESSION['arr_script_slide_b'] = "";
            $_SESSION['arr_script_slide_f'] = "";
            $_SESSION['arr_script_slide_q'] = "";
            $have_gallery = false;
            $count_this = 1;
            $gallery_id = "0";
            $vdo_id = "0"; 
            foreach($box as $r)
            { 
                if(trim($r->box2) == '')
                {
                    $this_box_id = $r->box1;
                    $this_box_real_id = $r->id;
 
                    if($r->box_number == 1)
                    { 
                        ?>
                        @include('template1/news')
                        <?php
                    }
                    else if($r->box_number == 2)
                    { 
                        ?>
                        @include('template1/faq')
                        <?php
                    }
                    else if($r->box_number == 3)
                    { 
                        ?>
                        @include('template1/calendar')
                        <?php
                    }
                    else if($r->box_number == 4)
                    { 
                        $have_gallery = true; 
                        $gallery_id = $this_box_real_id;
                        ?>
                        @include('template1/album')
                        <?php
                    }
                    else if($r->box_number == 5)
                    { 
                        $have_gallery = true; 
                        $vdo_id = $this_box_real_id;
                        ?>
                        @include('template1/vdo')
                        <?php
                    }
                    else if($r->box_number == 6)
                    { 
                        ?>
                        @include('template1/download')
                        <?php
                    }
                    else if($r->box_number == 7)
                    { 
                        ?>
                        @include('template1/bannerlink')
                        <?php
                    }
                    else if($r->box_number == 8)
                    { 
                        ?>
                        @include('template1/questionnaire')
                        <?php
                    }
                    else if($r->box_number == 9)
                    {
                        ?>
                        @include('template1/vote')
                        <?php
                    } 
                } 
            }
            ?>  
        </div>
 
        
        <!--
        <button type="button" class="getOrder_ele">Get Order of Elements</button> 
        <button type="button" data-toggle="modal" data-target="#modal_Alert">Modal Alert System</button> 
        <button class="" data-toggle="modal" data-target="#modalpanel">Modal Full Screen</button>
        -->
        <!-- <video
            id="my-video"
            class="video-js"
            controls
            preload="auto"
            width="640"
            height="264"
            
            data-setup="{}"
        >
            <source src="{{ asset('Video/ocean.mp4')}}" type="video/mp4" />
            <source src="{{ asset('Video/ocean.ogv')}}" type="video/ogg" />
            <source src="{{ asset('Video/ocean.webm')}}" type="video/webm" />
        </video> -->

 
    </div>

    <footer id="footer-wrapper">
        @include('template1/include.footer')
    </footer>


    <!-- Manage Save -->
    <!-- <div class="manage-save">
        <em class="fas fa-save"></em> SAVED
    </div> -->

</div>


 
 
@include('template1/include.css_scripts')


<!-- <link href="https://vjs.zencdn.net/7.10.2/video-js.css" rel="stylesheet" />
<script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script> -->


<link rel="stylesheet" href="{{ asset('swiper/swiper-bundle.min.css')}}">
<script src="{{ asset('swiper/swiper-bundle.js') }}"></script>
<script src="{{ asset('swiper/swiper-bundle.min.js') }}"></script>


<script>
$(document).ready(function () {
    
    //$('#exampleModal').modal('show')
    
    if($('body').hasClass('manage')){
        $("div.group-section-content").attr('id', 'manage_dragdrop');
        // DragDrop
        var sortable = new Sortable(manage_dragdrop, {
            ghostClass: "sortable-ghost",
            chosenClass: "sortable-chosen",
            dragClass: "sortable-drag",
            forceFallback: true,
            swapThreshold: 1,
            animation: 150,
            dataIdAttr: "data-id"
            //handle: '.manage-dragdrop',
        });
        //var order = sortable.toArray();
        //console.log(order);
        $('.getOrder_ele').click(function() {

            document.getElementById('btn_save_sort_box').innerHTML = 'กำลังบันทึก...';

            var order = sortable.toArray(); 
            //alert(order);
            $.ajax({url: "../manage-admin/save_sort_box?o="+order, success: function(result){
                document.getElementById('btn_save_sort_box').innerHTML = 'บันทึกสำเร็จ!';
            }}); 
        });
    }else{
        $("div.group-section-content").removeAttr("id");
    }


    const swiper = new Swiper('.swiper-container', {
        speed: 1200,
        lazy: true,
        //autoHeight: true, //enable auto height
        //loop: true,
        // autoplay: {
        //     delay: 5000,
        //     disableOnInteraction: false,
        // }, 
        <?php 
        $effect = 1;
        if($effect == 1)
        {
            //Effect Fade
            ?> 
            effect: 'fade',
            fadeEffect: {
            crossFade: true
            },
            <?php
        }
        else if($effect == 2)
        {
            //Effect Flip
            ?> 
            effect: 'flip',
            grabCursor: true,
            <?php
        }
        else if($effect == 3)
        {
            //Effect Cube
            ?>  
            effect: 'cube',
            grabCursor: true,
            cubeEffect: {
                shadow: true,
                slideShadows: true,
                shadowOffset: 20,
                shadowScale: 0.94,
                },
            <?php
        }
        else if($effect == 4)
        {
            //Effect Cover Flow
            ?>  
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            <?php
        }
        ?>  
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        // pagination: {
        //     el: '.swiper-pagination',
        //     type: 'fraction',// Number
        // },

        // on: {
        //     slideChange: function (el) {
        //     console.log('1');
        //     $('.swiper-slide').each(function () {
        //         var audioPlayer = $(this).find('audio').get(0);
        //         if (audioPlayer) {
        //             audioPlayer.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
        //         }
        //     });
        //     },
        // },
    });
});
</script>

<?php 
if($have_gallery == true)
{
    ?>
    <!-- Gallery -->
    <link rel="stylesheet" href="{{ asset('gallery/lightgallery.css')}}">
    <script src="{{ asset('gallery/lightgallery.min.js') }}"></script>
    <script src="{{ asset('gallery/lg-thumbnail.min.js') }}"></script>
    <script src="{{ asset('gallery/lg-zoom.min.js') }}"></script>
    <script src="{{ asset('gallery/lg-fullscreen.min.js') }}"></script>
    <script src="{{ asset('gallery/lg-video.min.js') }}"></script>
    <style type="text/css">
        #lg-zoom-in, #lg-zoom-out{
            display: none;
        }
    </style>
    <script>
    $(document).ready(function(){
        $('#video-gallery').lightGallery({
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        let $document = $(this);

        $document.on('onCloseAfter.lg', function(event) {
            $document.data('lightGallery').destroy(true);
        });

        <?php
        $this_loop = 1;
        if(isset(${'data_box_4_'.$gallery_id}))
        {
            foreach(${'data_box_4_'.$gallery_id} as $r_sub)
            { 
                ?>
                $('#dynamic<?php echo $this_loop ?>').on('click', function(e) {
                $(document).lightGallery({
                dynamic: true,
                dynamicEl: [  
                <?php 
                if(strpos($r_sub->img1,'^') > -1)
                {
                    $arr = explode('^',$r_sub->img1);

                    if(strpos($arr[0],'|') > -1)
                    {
                        $arr_d = explode('|',$arr[1]);
                        $arr = explode('|',$arr[0]);
                            
                        $this_loop_sub = 0;
                        foreach($arr as $arr_item)
                        {
                            if($arr_item != '')
                            {
                                ?>
                                {
                                    src:    '<?php echo $arr_item ?>',
                                    thumb:  '<?php echo $arr_item ?>',
                                    subHtml:'<?php echo $arr_d[$this_loop_sub] ?>'
                                },
                                <?php
                                $this_loop_sub++;
                            } 
                        }
                    }  
                }
                else
                {
                    ?>
                    {
                        src: '<?php echo $r_sub->img1 ?>',
                        thumb: '<?php echo $r_sub->img1 ?>'
                    } 
                    <?php
                }
                ?> 
                ],
                slideEndAnimatoin: false,
                loop: false,
                hideControlOnEnd: true,
                download: false,
                    });
                });
                <?php
                $this_loop++;
            }
        }
        
 
        $this_loop = 1;
        if(isset(${'data_box_5_'.$vdo_id}))
        {
            foreach(${'data_box_5_'.$vdo_id} as $r_sub)
            { 
                ?>
                $('#dynamicvdo<?php echo $this_loop ?>').on('click', function(e) {
                $(document).lightGallery({
                dynamic: true,
                dynamicEl: [  
                <?php 
                if(strpos($r_sub->file1,'^') > -1)
                {
                    $arr = explode('^',$r_sub->file1);

                    if(strpos($arr[0],'|') > -1)
                    {
                        $arr_d = explode('|',$arr[1]);
                        $arr = explode('|',$arr[0]);
                            
                        $this_loop_sub = 0;
                        foreach($arr as $arr_item)
                        {
                            if($arr_item != '')
                            {
                                ?>
                                {
                                    src:    '<?php echo $arr_item ?>',
                                    thumb:  '<?php echo $arr_item ?>',
                                    subHtml:'<?php echo $arr_d[$this_loop_sub] ?>'
                                },
                                <?php
                                $this_loop_sub++;
                            } 
                        }
                    }  
                }
                else
                {
                    ?>
                    {
                        src: '<?php echo $r_sub->img1 ?>',
                        thumb: '<?php echo $r_sub->img1 ?>'
                    } 
                    <?php
                }
                ?> 
                ],
                slideEndAnimatoin: false,
                loop: false,
                hideControlOnEnd: true,
                download: false,
                    });
                });
                <?php
                $this_loop++;
            } 
        }
        
    ?>});
    </script>
    <?php
}
 ?>
        

 
<?php
$footer1 = explode("|",$_SESSION['arr_script_slide']);
foreach($footer1 as $script_item)
{
    ?>
    <script>
    $(document).ready(function() {
        check_list_1 = $('#<?php echo $script_item ?>').children('.item').length;
        $('#<?php echo $script_item ?>').on('init', function (event, slick, direction) {
            if (check_list_1 < 3) {
                $('#action-<?php echo $script_item ?>').parents('.action-slide .slide-wrapper').css('display','none');
            }else{
                $('#action-<?php echo $script_item ?>').parents('.action-slide .slide-wrapper').show();
            }
        });
        $('#<?php echo $script_item ?>').slick({
            autoplay: false,
            autoplaySpeed: 6000,
            infinite: false,
            dots: false,
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            prevArrow: $('#action-<?php echo $script_item ?> .slide-prev'),
            nextArrow: $('#action-<?php echo $script_item ?> .slide-next'),
            responsive: [
                {
                    breakpoint: 481,
                    settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                    }
                }
            ]
        });
    } );
    </script>
    <?php
}
$footer1 = explode("|",$_SESSION['arr_script_slide_d']);
foreach($footer1 as $script_item)
{
    ?>
    <script>
    $(document).ready(function() {

         check_list_4 = $('#<?php echo $script_item ?>').children('li').length;
    $('#<?php echo $script_item ?>').on('init', function (event, slick, direction) {
        if (check_list_4 < 5) {
            $('#action-<?php echo $script_item ?>').parents('.action-slide').css('display','none');
        }else{
            $('#action-<?php echo $script_item ?>').parents('.action-slide').show();
        }
    });
    $('#<?php echo $script_item ?>').slick({
        autoplay: false,
        autoplaySpeed: 6000,
        infinite: false,
        dots: false,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: $('#action-<?php echo $script_item ?> .slide-prev'),
        nextArrow: $('#action-<?php echo $script_item ?> .slide-next'),
        responsive: [
            {
              breakpoint: 1025,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
              }
            },
            {
              breakpoint: 993,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 481,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            ]
        });
    } );
    </script>
    <?php
}
$footer1 = explode("|",$_SESSION['arr_script_slide_b']);
foreach($footer1 as $script_item)
{
    ?>
    <script>
    $(document).ready(function() {
     check_list_5 = $('#<?php echo $script_item ?>').children('li').length;
    $('#<?php echo $script_item ?>').on('init', function (event, slick, direction) {
        if (check_list_4 < 5) {
            $('#action-<?php echo $script_item ?>').parents('.action-slide').css('display','none');
        }else{
            $('#action-<?php echo $script_item ?>').parents('.action-slide').show();
        }
    });
    $('#<?php echo $script_item ?>').slick({
        autoplay: false,
        autoplaySpeed: 6000,
        infinite: false,
        dots: false,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: $('#action-<?php echo $script_item ?> .slide-prev'),
        nextArrow: $('#action-<?php echo $script_item ?> .slide-next'),
        responsive: [
            {
              breakpoint: 1025,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
              }
            },
            {
              breakpoint: 993,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 481,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            ]
        });
    } );
    </script>
    <?php
}
$footer1 = explode("|",$_SESSION['arr_script_slide_f']);
foreach($footer1 as $script_item)
{
    ?>
    <script>
    $(document).ready(function() {

        check_list_2 = $('#<?php echo $script_item ?>').children('.item').length;
        $('#<?php echo $script_item ?>').on('init', function (event, slick, direction) {
            if (check_list_2 < 3) {
                $('#action-<?php echo $script_item ?>').parents('.action-slide').css('display','none');
            }else{
                $('#action-<?php echo $script_item ?>').parents('.action-slide').show();
            }
        });
        $('#<?php echo $script_item ?>').slick({
            autoplay: false,
            autoplaySpeed: 6000,
            infinite: false,
            dots: false,
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            prevArrow: $('#action-<?php echo $script_item ?> .slide-prev'),
            nextArrow: $('#action-<?php echo $script_item ?> .slide-next'),
            responsive: [
                {
                breakpoint: 481,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
        }); 
    } );
    </script>
    <?php
}
$footer1 = explode("|",$_SESSION['arr_script_slide_q']);
foreach($footer1 as $script_item)
{
    ?>
    <script>
    $(document).ready(function() {
          check_list_6 = $('#<?php echo $script_item ?>').children('.item').length;
    $('#<?php echo $script_item ?>').on('init', function (event, slick, direction) {
        if (check_list_6 < 3) {
            $('#action-<?php echo $script_item ?>').parents('.action-slide').css('display','none');
        }else{
            $('#action-<?php echo $script_item ?>').parents('.action-slide').show();
        }
    });
    $('#<?php echo $script_item ?>').slick({
        autoplay: false,
        autoplaySpeed: 6000,
        infinite: false,
        dots: false,
        arrows: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        prevArrow: $('#action-<?php echo $script_item ?> .slide-prev'),
        nextArrow: $('#action-<?php echo $script_item ?> .slide-next'),
        responsive: [
            {
              breakpoint: 769,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
    });
    } );
    </script>
    <?php
}
?>

@endsection

