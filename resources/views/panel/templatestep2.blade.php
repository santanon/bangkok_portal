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
                                            <div class="circle">10%</div>
                                        </div>
                                        <div class="text-step">
                                            <span>step 1</span>
                                            เลือกแบบ Web Template
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="step -2">
                                        <div class="line active">
                                            <div class="circle active">50%</div>
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

    <div class="content-wrapper container" >
        <div class="group" id="example1" style="margin: 45px 0;">
            <div class="section-template" style="height: 50px; background-color: #fff; border-bottom: 1px solid #000;">1</div>
            <div class="section-template" style="height: 50px; background-color: #fff; border-bottom: 1px solid #000;">2</div>
            <div class="section-template" style="height: 50px; background-color: #fff; border-bottom: 1px solid #000;">3</div>
            <div class="section-template" style="height: 50px; background-color: #fff; border-bottom: 1px solid #000;">4</div>
            <div class="section-template" style="height: 50px; background-color: #fff; border-bottom: 1px solid #000;">5</div>
            <div class="section-template" style="height: 50px; background-color: #fff; border-bottom: 1px solid #000;">6</div>
        </div>


        <div class="group" id="example2" style="margin: 45px 0;">
            <div class="section-template" style="height: 50px; background-color: #fff; border-bottom: 1px solid #000;">1</div>
            <div class="section-template" style="height: 50px; background-color: #fff; border-bottom: 1px solid #000;">2</div>
            <div class="section-template" style="height: 50px; background-color: #fff; border-bottom: 1px solid #000;">3</div>
            <div class="section-template" style="height: 50px; background-color: #fff; border-bottom: 1px solid #000;">4</div>
            <div class="section-template" style="height: 50px; background-color: #fff; border-bottom: 1px solid #000;">5</div>
            <div class="section-template" style="height: 50px; background-color: #fff; border-bottom: 1px solid #000;">6</div>
        </div>
    </div>


    <footer>
        @include('panel/include.footer')
    </footer>
</div>

@include('panel/include.css_scripts')
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script> 

<script type="text/javascript">

    $(document).ready(function() {
        $('#example1, #example2').sortable({
            placeholder: 'drop-placeholder'
        })
    });

</script>
@endsection

