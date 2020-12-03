@section('title', '')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('panel/include/start')
@section('contentpage')

<div class="main-wrapper bg-post-login">
    <header class="panel-header -admin">
        <div class="header-top">
            @include('panel/include.head-top')
        </div>

        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <img src="{{ asset('panel/assets/images/logo-panel.png')}}" alt="icon">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="step-template">
                            <ul>
                                <li>
                                    <div class="step -1">
                                        <div class="line active">
                                            <div class="circle active">10%</div>
                                        </div>
                                        <div class="text-step">
                                            <span>step 1</span>
                                            เลือกแบบ Web Template
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="step -2">
                                        <div class="line">
                                            <div class="circle">50%</div>
                                        </div>
                                        <div class="text-step">
                                            <span>step 2</span>
                                            Create Content
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="step -3">
                                        <div class="line">
                                            <div class="circle">100%</div>
                                        </div>
                                        <div class="text-step">
                                            <span>step 3</span>
                                            Completed
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="content-wrapper list-template-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="item-template" data-aos="zoom-in">
                        <div class="img-template">
                            <img src="{{ asset('panel/assets/images/template/template01.png')}}" alt="icon" title="Template01">
                            <div class="name-template">
                                Template 01
                            </div>
                        </div>
                        <div class="action-btn">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <a href="#" data-toggle="modal" data-target="#modal_1">
                                            <button type="button" class="btn btn-gray">
                                                ดูตัวอย่าง
                                            </button>
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <button type="button" class="btn btn-blue" onclick="window.location='{{ url("/") }}'">
                                            เลือกแบบนี้
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-template" data-aos="zoom-in">
                        <div class="img-template">
                            <img src="{{ asset('panel/assets/images/template/template02.png')}}" alt="icon" title="Template02">
                            <div class="name-template">
                                Template 02
                            </div>
                        </div>
                        <div class="action-btn">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <a href="#" data-toggle="modal" data-target="#modal_2">
                                            <button type="button" class="btn btn-gray">
                                                ดูตัวอย่าง
                                            </button>
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <button type="button" class="btn btn-blue">
                                            เลือกแบบนี้
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-template" data-aos="zoom-in">
                        <div class="img-template">
                            <img src="{{ asset('panel/assets/images/template/template03.png')}}" alt="icon" title="Template03">
                            <div class="name-template">
                                Template 03
                            </div>
                        </div>
                        <div class="action-btn">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <a href="#" data-toggle="modal" data-target="#modal_3">
                                            <button type="button" class="btn btn-gray">
                                                ดูตัวอย่าง
                                            </button>
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <button type="button" class="btn btn-blue">
                                            เลือกแบบนี้
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="item-template" data-aos="zoom-in">
                        <div class="img-template">
                            <img src="{{ asset('panel/assets/images/template/template04.png')}}" alt="icon" title="Template04">
                            <div class="name-template">
                                Template 04
                            </div>
                        </div>
                        <div class="action-btn">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <a href="#" data-toggle="modal" data-target="#modal_4">
                                            <button type="button" class="btn btn-gray">
                                                ดูตัวอย่าง
                                            </button>
                                            </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <button type="button" class="btn btn-blue">
                                            เลือกแบบนี้
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item-template" data-aos="zoom-in">
                        <div class="img-template">
                            <img src="{{ asset('panel/assets/images/template/template05.png')}}" alt="icon" title="Template05">
                            <div class="name-template">
                                Template 05
                            </div>
                        </div>
                        <div class="action-btn">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <a href="#" data-toggle="modal" data-target="#modal_5">
                                        <button type="button" class="btn btn-gray">
                                            ดูตัวอย่าง
                                        </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <button type="button" class="btn btn-blue">
                                            เลือกแบบนี้
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                     
                </div>
 
            </div>
        </div>
    </div>

    <div class="modal fade modal-custom" id="modal_1" tabindex="-1" role="dialog" aria-labelledby="modalpanelLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content no-border">
                <div class="modal-header">
                    <h3 class="modal-title" id="alertModalLabel"><span id="modal_full_span">Template 1</span></h3>
                    <div class="modal-close" data-dismiss="modal" aria-label="Close">
                        <div class="icon-close"></div>
                    </div>
                </div>
                <div class="modal-body">
                    <div align="center"><img src="{{ asset('panel/assets/images/template/template01.png')}}"> </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-custom" id="modal_2" tabindex="-1" role="dialog" aria-labelledby="modalpanelLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content no-border">
                <div class="modal-header">
                    <h3 class="modal-title" id="alertModalLabel"><span id="modal_full_span">Template 2</span></h3>
                    <div class="modal-close" data-dismiss="modal" aria-label="Close">
                        <div class="icon-close"></div>
                    </div>
                </div>
                <div class="modal-body">
                    <div align="center"><img src="{{ asset('panel/assets/images/template/2.jpg')}}"> </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-custom" id="modal_3" tabindex="-1" role="dialog" aria-labelledby="modalpanelLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content no-border">
                <div class="modal-header">
                    <h3 class="modal-title" id="alertModalLabel"><span id="modal_full_span">Template 3</span></h3>
                    <div class="modal-close" data-dismiss="modal" aria-label="Close">
                        <div class="icon-close"></div>
                    </div>
                </div>
                <div class="modal-body">
                    <div align="center"><img src="{{ asset('panel/assets/images/template/3.jpg')}}"> </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-custom" id="modal_4" tabindex="-1" role="dialog" aria-labelledby="modalpanelLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content no-border">
                <div class="modal-header">
                    <h3 class="modal-title" id="alertModalLabel"><span id="modal_full_span">Template 4</span></h3>
                    <div class="modal-close" data-dismiss="modal" aria-label="Close">
                        <div class="icon-close"></div>
                    </div>
                </div>
                <div class="modal-body">
                    <div align="center"><img src="{{ asset('panel/assets/images/template/4.jpg')}}"> </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-custom" id="modal_5" tabindex="-1" role="dialog" aria-labelledby="modalpanelLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content no-border">
                <div class="modal-header">
                    <h3 class="modal-title" id="alertModalLabel"><span id="modal_full_span">Template 5</span></h3>
                    <div class="modal-close" data-dismiss="modal" aria-label="Close">
                        <div class="icon-close"></div>
                    </div>
                </div>
                <div class="modal-body">
                    <div align="center"><img src="{{ asset('panel/assets/images/template/5.jpg')}}"> </div> 
                </div>
            </div>
        </div>
    </div>
    <footer>
        @include('panel/include.footer')
    </footer>
</div>

@include('panel/include.css_scripts')

@endsection

