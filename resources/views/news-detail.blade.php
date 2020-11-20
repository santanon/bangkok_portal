@section('title', 'รายละเอียดข่าว')
@section('tagkeyword', '')
@section('tagdescription', '')

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

        <div class="group-link-mainbkk">
            <a href="">
                <div class="icon-bkk">
                    <img src="{{ asset('template1/assets/images/icons/icon-bkk.png')}}" alt="icon">
                </div>
                <div class="text-bkk">
                    <label>กรุงเทพมหานคร</label>
                    Bangkok.go.th
                </div>
            </a>
        </div>

        <div class="banner-wrapper onlyOne">
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
                    <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
                </div>
            </div>
            <ul>
                <li>
                    <div class="bg-layer"></div>
                    <div class="banner" style="background-image: url('../../template1/assets/images/banner/img-banner-demo2.png');"></div>
                    <div class="item-Onbanner-outer">
                        <div class="item-Onbanner-inner">
                            <div class="list">
                                <h2 class="title-banner">ข่าวสาร</h2>
                                <p class="desc-banner">มุ่งมั่นการทำงาน แหล่งค้นคว้าการประชุม เครือข่ายมหานครอาเซียน</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="group-section-breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="/news">ข่าวสาร</a></li>
                        <li class="breadcrumb-item active" aria-current="page">รายละเอียด</li>
                    </ol>
                </nav>
            </div>
            
        </div> 

        <div class="group-section-content">
            <div class="section-content">
                <div class="container">
                    <div class="inner-content">
                        <div class="top-content">
                            <div class="group-text">
                                <h3 class="title">การดำเนินงานด้านความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการทำงานของสำนักงานเลขานุการสภากรุงเทพมหานคร </h3>
                            </div>
                        </div>
                        <div class="post-content d-flex justify-content-between align-items-center">
                            <div class="public-post">
                                <i class="far fa-calendar"></i> 2 กรกฎาคม 2556
                            </div>
                            <div class="source-post">
                                แหล่งที่มา <span>PR BKK</span>
                            </div>
                        </div>
                        <div class="main-content border-bottom">
                            <!-- One image -->
                            <div class="group-oneimage">
                                <img src="{{ asset('template1/assets/images/img-album-demo3_2.jpg')}}" alt="image">

                                <!-- upload -->
                                <div class="group-mange-upload">
                                    <div class="row manage-upload">
                                        <div class="col box_upload">
                                            <h3 class="text-center">Upload</h3>
                                            <div id="uploaderOnly">
                                                <div class="row uploadDocOnly">
                                                    <div class="col">
                                                        <div class="docErr">Please upload valid file</div><!--error-->
                                                        <div class="fileUpload btn btn-orange">
                                                            <img src="https://image.flaticon.com/icons/svg/136/136549.svg" class="icon">
                                                            <span class="upl" id="upload">Upload document</span>
                                                            <input type="file" class="upload up" id="upOnly" onchange="readURL(this);" />
                                                        </div><!-- btn-orange -->
                                                    </div><!-- col-3 -->
                                                    <div class="col-sm-1"><a class="btn-check-only"><i class="fa fa-times"></i></a></div><!-- col-1 -->
                                                </div><!--row-->
                                            </div><!--uploader-->
                                            <div class="text-center">
                                                <a class="btn btn-save"><i class="fa fa-save"></i> Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Gallery -->
                            <div class="group-gallery">
                                <div id="slider" class="flexslider main-slider">
                                    <ul class="slides">
                                        <li>
                                            <img src="{{ asset('template1/assets/images/img-album-demo2.jpg')}}" alt="images">
                                        </li>
                                        <li>
                                            <img src="{{ asset('template1/assets/images/img-album-demo3.jpg')}}" alt="images">
                                        </li>
                                        <li>
                                            <img src="{{ asset('template1/assets/images/img-album-demo4.jpg')}}" alt="images">
                                        </li>
                                        <li>
                                            <img src="{{ asset('template1/assets/images/img-album-demo1.png')}}" alt="images">
                                        </li>
                                        <li>
                                            <img src="{{ asset('template1/assets/images/img-album-demo3.jpg')}}" alt="images">
                                        </li>
                                    </ul>
                                </div>
                                <div id="carousel" class="flexslider thumbnail-slider">
                                    <ul class="slides">
                                        <li>
                                            <div class="bg-layer"></div>
                                            <img src="{{ asset('template1/assets/images/img-album-demo2.jpg')}}" alt="images">
                                        </li>
                                        <li>
                                            <div class="bg-layer"></div>
                                            <img src="{{ asset('template1/assets/images/img-album-demo3.jpg')}}" alt="images">
                                        </li>
                                        <li>
                                            <div class="bg-layer"></div>
                                            <img src="{{ asset('template1/assets/images/img-album-demo4.jpg')}}" alt="images">
                                        </li>
                                        <li>
                                            <div class="bg-layer"></div>
                                            <img src="{{ asset('template1/assets/images/img-album-demo1.png')}}" alt="images">
                                        </li>
                                        <li>
                                            <div class="bg-layer"></div>
                                            <img src="{{ asset('template1/assets/images/img-album-demo3.jpg')}}" alt="images">
                                        </li>
                                    </ul>
                                </div>

                                <!-- upload -->
                                <div class="group-mange-upload">
                                    <div class="row manage-upload">
                                        <div class="col box_upload">
                                            <h3 class="text-center">Upload</h3>
                                            <div id="uploader">
                                                <div class="row uploadDoc">
                                                    <div class="col">
                                                        <div class="docErr">Please upload valid file</div><!--error-->
                                                        <div class="fileUpload btn btn-orange">
                                                            <img src="https://image.flaticon.com/icons/svg/136/136549.svg" class="icon">
                                                            <span class="upl" id="upload">Upload document</span>
                                                            <input type="file" class="upload up" id="up" onchange="readURL(this);" />
                                                        </div><!-- btn-orange -->
                                                    </div><!-- col-3 -->
                                                    <div class="col-sm-1"><a class="btn-check"><i class="fa fa-times"></i></a></div><!-- col-1 -->
                                                </div><!--row-->
                                            </div><!--uploader-->
                                            <div class="text-center">
                                                <a class="btn btn-new"><i class="fa fa-plus"></i> Add new</a>
                                                <a class="btn btn-save"><i class="fa fa-save"></i> Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- youtube -->
                            <div class="group-vdo">
                                <div class="content-vdo">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/obIjRgyszjE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>

                                <!-- upload Embed -->
                                <div class="group-mange-upload">
                                    <div class="row manage-upload">
                                        <div class="col box_upload">
                                            <h3 class="text-center">Upload Embed</h3>
                                            <div class="row uploadMedia">
                                                <div class="col">
                                                    <div class="input-custom">
                                                        <input class="style-input" type="text" name="" placeholder="Embed Video">
                                                    </div>
                                                </div>
                                            </div><!--row-->
                                            <div class="text-center">
                                                <a class="btn btn-save"><i class="fa fa-save"></i> Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- vdo -->
                            <div class="group-vdo">
                                <div class="content-vdo">
                                    <video width="320" height="240" controls>
                                        <source src="{{ asset('template1/assets/vdo/sample-mp4-file.mp4')}}" type="video/mp4">
                                    </video>
                                </div>
                                <!-- upload File VDO -->
                                <div class="group-mange-upload">
                                    <div class="row manage-upload">
                                        <div class="col box_upload">
                                            <h3 class="text-center">Upload File VDO</h3>
                                            <div id="uploaderFilemedia">
                                                <div class="row uploaderFilemedia">
                                                    <div class="col">
                                                        <div class="docErr">Please upload valid file</div><!--error-->
                                                        <div class="fileUpload btn btn-orange">
                                                            <img src="https://image.flaticon.com/icons/svg/136/136549.svg" class="icon">
                                                            <span class="upl" id="upload">Upload File VDO</span>
                                                            <input type="file" class="upload up" id="upOnly" onchange="readURL(this);" />
                                                        </div><!-- btn-orange -->
                                                    </div><!-- col-3 -->
                                                    <div class="col-sm-1"><a class="btn-check-only-media"><i class="fa fa-times"></i></a></div><!-- col-1 -->
                                                </div><!--row-->
                                            </div><!--uploader-->
                                            <div class="text-center">
                                                <a class="btn btn-save"><i class="fa fa-save"></i> Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- text editor -->
                            <div class="group-editor" id="editor">
                                ได้จัดทำสื่อประชาสัมพันธ์สื่อองค์ความรู้ที่เกี่ยวข้องกับการป้องกันโรคติดเชื้อไวรัสโคโรนา 2109 (covid) 
                                เพื่อสร้างความตระหนักรู้แก่กลุ่มแรงงาน ผู้ประกอบกิจการและประชาชนทั่วไปในการป้องกันตนเอง 
                                และลดการเผยแพร่ของเชื้อดรคดังกล่าว
                                ผ่านทางเว็บไซต์ <a href="http://www.tosh.or.th/">http://www.tosh.or.th/</a> แอพลิเคชั่น T-OSH Guide และผ่านทางช่องทาง QR Code ท้ายหนังสือนี้
                            </div>

                            <!-- list file download -->
                            <div class="group-list-downloadfile">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="item">
                                            <div class="left">
                                                <div class="icon-content">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        width="42.2px" height="42.2px" viewBox="0 0 42.2 42.2" style="enable-background:new 0 0 42.2 42.2;" xml:space="preserve">                                                 
                                                        <g>
                                                            <path class="st0" d="M34.6,15.7L22.9,4.1H11.8C9.5,4.1,7.6,6,7.6,8.3v25.6c0,2.3,1.9,4.2,4.2,4.2h4.5h14c2.3,0,4.2-1.9,4.2-4.2
                                                                V15.7z"/>
                                                            <path class="st1" d="M34.6,15.7h-7.6c-2.2,0-4-1.8-4-4V4.1"/>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="text-onbottom">Download</div>
                                            </div>
                                            <div class="right">
                                                <div class="text-content">
                                                    <a href="">
                                                        เด็กอายุกี่ขวบต้องแจ้งการเข้าเรียนตามกฎหมาย และใช้เอกสารอะไรบ้าง?
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item">
                                            <div class="left">
                                                <div class="icon-content">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        width="42.2px" height="42.2px" viewBox="0 0 42.2 42.2" style="enable-background:new 0 0 42.2 42.2;" xml:space="preserve">                                                 
                                                        <g>
                                                            <path class="st0" d="M34.6,15.7L22.9,4.1H11.8C9.5,4.1,7.6,6,7.6,8.3v25.6c0,2.3,1.9,4.2,4.2,4.2h4.5h14c2.3,0,4.2-1.9,4.2-4.2
                                                                V15.7z"/>
                                                            <path class="st1" d="M34.6,15.7h-7.6c-2.2,0-4-1.8-4-4V4.1"/>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="text-onbottom">Download</div>
                                            </div>
                                            <div class="right">
                                                <div class="text-content">
                                                    <a href="">
                                                        เด็กอายุกี่ขวบต้องแจ้งการเข้าเรียนตามกฎหมาย และใช้เอกสารอะไรบ้าง?
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- location -->
                            <div class="group-activity-location">
                                <div class="top-content">
                                    <div class="group-text">
                                        <h3 class="title">สถานที่กิจกรรม</h3>
                                    </div>
                                </div>
                                <div class="location">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3878.0338107750213!2d100.4296997148538!3d13.594746604576166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2bb0940b60c95%3A0x7916bd3efb77017b!2z4LiY4Liy4Lij4LiX4Liw4LmA4Lil4LiL4Li14Lif4Li54LmJ4LiU!5e0!3m2!1sen!2sth!4v1605687616968!5m2!1sen!2sth" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                            
                            <div class="group-back">
                                <a href="/news">ย้อนกลับ</a>
                            </div>

                            <div class="group-social-share d-flex align-items-center justify-content-between">
                                <div class="shared-email d-flex align-items-center">
                                    <div class="social-wrapper d-flex align-items-center">
                                        <div class="text-social">Share</div>
                                        <ul class="d-flex align-items-center">
                                            <li class="facebook d-flex align-items-center not-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"><span>5</span> 
                                            </li>
                                            <li class="twitter d-flex align-items-center not-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-social-twitter.svg')}}" alt="icon">  5
                                            </li>
                                            <li class="line d-flex align-items-center not-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon">   5
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="email-link d-flex align-items-center">
                                        <div class="item">
                                            <a href="">
                                                <div class="icon -email">
                                                    <img src="{{ asset('template1/assets/images/icons/icon-email.png')}}" alt="icon">
                                                </div>
                                                <div class="text-email-link">อีเมล</div>
                                                <div class="clearboth"></div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="">
                                                <div class="icon -link">
                                                    <img src="{{ asset('template1/assets/images/icons/icon-link.png')}}" alt="icon">
                                                </div>
                                                <div class="text-email-link">Copy Link</div>
                                                <div class="clearboth"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="views-like d-flex align-items-center">
                                    <div class="view-count">
                                        View : <span>1.5K</span>
                                    </div>
                                    <div class="like-count d-flex align-items-center">
                                        <div class="icon-like">
                                            <img src="{{ asset('template1/assets/images/icons/icon-like.png')}}" alt="icon">
                                        </div>
                                        <span>1.2K</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vote-comment-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="content -vote">
                                        <div class="box-title">
                                            <div class="title-head">คุณเห็นด้วยกับข่าวนี้หรือไม่</div>
                                        </div>
                                        <form action="">
                                            <div class="list-choice-vote">
                                                <ul>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="input-custom">
                                                            <div class="custom-control custom-switch">
                                                                <input type="radio" class="custom-control-input" id="customSwitch1" name="Ans_Vote">
                                                                <label class="custom-control-label" for="customSwitch1">เห็นด้วยมาก</label>
                                                            </div>
                                                        </div>
                                                        <div class="total-vote">(26%)</div>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="input-custom">
                                                            <div class="custom-control custom-switch">
                                                                <input type="radio" class="custom-control-input" id="customSwitch2" name="Ans_Vote">
                                                                <label class="custom-control-label" for="customSwitch2">ปานกลาง</label>
                                                            </div>
                                                        </div>
                                                        <div class="total-vote">(24%)</div>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="input-custom">
                                                            <div class="custom-control custom-switch">
                                                                <input type="radio" class="custom-control-input" id="customSwitch3" name="Ans_Vote">
                                                                <label class="custom-control-label" for="customSwitch3">ไม่เห็นด้วย</label>
                                                            </div>
                                                        </div>
                                                        <div class="total-vote">(0%)</div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="btn-choice-vote -login">
                                                <div class="show-login">
                                                    <button class="btn bg-color-primary icon" type="button"><i class="fas fa-lock"></i> Sign in</button>
                                                    <a href="">Register</a>
                                                </div>
                                                <button class="btn bg-color-primary" type="button">VOTE</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="content -comment">
                                        <div class="box-title d-flex justify-content-between align-items-center">
                                            <div class="title-head">ความคิดเห็น</div>
                                            <div class="order-all">5 รายการ</div>
                                        </div>
                                        <div class="sort-order d-flex justify-content-end align-items-center">
                                            <div class="text-order">เรียงลำดับตาม</div>
                                            <div class="input-custom">
                                                <div class="select-wrapper width-full">
                                                    <select name="" class="slc">
                                                        <optgroup label="เรียงลำดับ">
                                                            <option value="">เก่าที่สุด</option>
                                                            <option value="">ใหม่ที่สุด</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-custom">
                                            <textarea class="text-area" name="" id="" rows="3"></textarea>
                                        </div>
                                        <div class="btn-custom width-full d-flex justify-content-end">
                                            <button class="btn bg-color-primary" type="button">SEND</button>
                                        </div>
                                    </div>
                                    <div class="user-comment-wrapper">
                                        <ul>
                                            <li>
                                                <div class="list-comment d-flex align-items-center">
                                                    <div class="image-user">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-user-post.png')}}" alt="icon">
                                                    </div>
                                                    <div class="post-user">
                                                        <span class="name">Attapon :</span> Excellent, I like this 
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-comment d-flex align-items-center">
                                                    <div class="image-user">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-user-post.png')}}" alt="icon">
                                                    </div>
                                                    <div class="post-user">
                                                        <span class="name">Santanon :</span> เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ 
                                                        มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16 
                                                        เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-comment d-flex align-items-center">
                                                    <div class="image-user">
                                                        <img src="{{ asset('template1/assets/images/icons/icon-user-post.png')}}" alt="icon">
                                                    </div>
                                                    <div class="post-user">
                                                        <span class="name">Sittichok :</span> Excellent, I like this 
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="load-more">
                                            <a href="">โหลดเพิ่มเติม</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer-wrapper">
        @include('template1/include.footer')
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


@include('template1/include.css_scripts')
<!-- FlexSlider -->
<link rel="stylesheet" href="{{ asset('template1/css/flexslider.css')}}">
<script type="text/javascript" src="{{ asset('template1/js/jquery.flexslider.js') }}"></script>

<!-- CKeditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/inline/ckeditor.js"></script>


<script type="text/javascript">
    $(window).load(function(){
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 260,
            itemMargin: 30,
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
    $(document).ready(function () {
        
    });
</script>
<script>
    InlineEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection

