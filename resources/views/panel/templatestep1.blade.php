@section('title', '')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('panel/include/start')
@section('contentpage')

<div class="main-wrapper bg-post-login">
    <header class="panel-header">
        <div class="header-top">
            @include('panel/include.head-top')
        </div>

        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <img src="{{ asset('assets/images/logo-panel.png')}}" alt="icon">
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
                            <img src="{{ asset('assets/images/template/template01.png')}}" alt="icon" title="Template01">
                            <div class="name-template">
                                Template 01
                            </div>
                        </div>
                        <div class="action-btn">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <button type="button" class="btn btn-gray">
                                            ดูตัวอย่าง
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <button type="button" class="btn btn-blue" onclick="window.location='{{ url("/templatestep2") }}'">
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
                            <img src="{{ asset('assets/images/template/template02.png')}}" alt="icon" title="Template02">
                            <div class="name-template">
                                Template 02
                            </div>
                        </div>
                        <div class="action-btn">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <button type="button" class="btn btn-gray">
                                            ดูตัวอย่าง
                                        </button>
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
                            <img src="{{ asset('assets/images/template/template03.png')}}" alt="icon" title="Template03">
                            <div class="name-template">
                                Template 03
                            </div>
                        </div>
                        <div class="action-btn">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <button type="button" class="btn btn-gray">
                                            ดูตัวอย่าง
                                        </button>
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
                            <img src="{{ asset('assets/images/template/template01.png')}}" alt="icon" title="Template04">
                            <div class="name-template">
                                Template 04
                            </div>
                        </div>
                        <div class="action-btn">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <button type="button" class="btn btn-gray">
                                            ดูตัวอย่าง
                                        </button>
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
                            <img src="{{ asset('assets/images/template/template02.png')}}" alt="icon" title="Template05">
                            <div class="name-template">
                                Template 05
                            </div>
                        </div>
                        <div class="action-btn">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <button type="button" class="btn btn-gray">
                                            ดูตัวอย่าง
                                        </button>
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
                            <img src="{{ asset('assets/images/template/template02.png')}}" alt="icon" title="Template05">
                            <div class="name-template">
                                Template 06
                            </div>
                        </div>
                        <div class="action-btn">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <button type="button" class="btn btn-gray">
                                            ดูตัวอย่าง
                                        </button>
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
                            <img src="{{ asset('assets/images/template/template01.png')}}" alt="icon" title="Template04">
                            <div class="name-template">
                                Template 07
                            </div>
                        </div>
                        <div class="action-btn">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <button type="button" class="btn btn-gray">
                                            ดูตัวอย่าง
                                        </button>
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
                            <img src="{{ asset('assets/images/template/template02.png')}}" alt="icon" title="Template05">
                            <div class="name-template">
                                Template 08
                            </div>
                        </div>
                        <div class="action-btn">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <button type="button" class="btn btn-gray">
                                            ดูตัวอย่าง
                                        </button>
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
                            <img src="{{ asset('assets/images/template/template02.png')}}" alt="icon" title="Template05">
                            <div class="name-template">
                                Template 09
                            </div>
                        </div>
                        <div class="action-btn">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="btn-manage">
                                        <button type="button" class="btn btn-gray">
                                            ดูตัวอย่าง
                                        </button>
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
            </div>
        </div>
    </div>



    <footer>
        @include('panel/include.footer')
    </footer>
</div>

@include('panel/include.css_scripts')

@endsection

