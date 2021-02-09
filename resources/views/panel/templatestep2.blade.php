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
                            <img src="{{ asset('assets/images/logo-panel.png')}}" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="content-wrapper container" >
        <div class="row">
            <div class="col-md-4">
                <div class="title-page">Web Portal</div>
                <div class="desc-page">
                    Create & Manage Web Site Portal by Bangkok PMS
                </div>
            </div>
            <div class="col-md-8">
                <div class="group-list-menu">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="list-menu" data-toggle="modal" data-target="#modalpanel">
                                <div class="icon-menu">
                                    <img src="{{ asset('assets/panel/icon-1.png')}}" alt="icon">
                                </div>
                                <div class="text-menu">Web Site</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="list-menu" data-toggle="modal" data-target="#modalpanel">
                                <div class="icon-menu">
                                    <img src="{{ asset('assets/panel/icon-2.png')}}" alt="icon">
                                </div>
                                <div class="text-menu">Web User</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="list-menu" data-toggle="modal" data-target="#modalpanel">
                                <div class="icon-menu">
                                    <img src="{{ asset('assets/panel/icon-3.png')}}" alt="icon">
                                </div>
                                <div class="text-menu">Group Management Asset</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="list-menu" data-toggle="modal" data-target="#modalpanel">
                                <div class="icon-menu">
                                    <img src="{{ asset('assets/panel/icon-4.png')}}" alt="icon">
                                </div>
                                <div class="text-menu">Web Template</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="list-menu" data-toggle="modal" data-target="#modalpanel">
                                <div class="icon-menu">
                                    <img src="{{ asset('assets/panel/icon-4.png')}}" alt="icon">
                                </div>
                                <div class="text-menu">Web Template</div>
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


<!-- Modal Full screen -->
<div class="modal fade modal-custom full" id="modalpanel" tabindex="-1" role="dialog" aria-labelledby="modalpanelLabel" aria-hidden="true">
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

@include('panel/include.css_scripts')


<script type="text/javascript">



</script>
@endsection

