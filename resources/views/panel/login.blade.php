@section('title', 'Login')
@section('tagkeyword', '')
@section('tagdescription', '')

@extends('panel/include/start')
@section('contentpage')

<div class="main-wrapper bg-wrapper">

    <div class="container content-wrapper">
        <div class="panel-header">
            <div class="header">
                <div class="logo-login">
                    <img src="{{ asset('panel/assets/images/logo-panel.png')}}" alt="icon">
                </div>
                <div class="lang">
                    <ul>
                        <li class="active">
                            <a href="">
                                EN
                            </a>
                        </li>
                        <li>
                            <a href="">
                                TH
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="section-formlogin">
            <div class="left" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="5000">
                <div class="group-text">
                    <h5>BANGKOK 2020</h5>
                    <h1>MAKING FOR BETTER CITY</h1>
                    <h6>By Bangkok Metropolitan Administration</h6>
                </div>
                <div class="bglayer"></div>
            </div>
            <div class="right" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="5000">
                <h3>Login</h3>
                <h6>Please insert your Username & Password </h6>
                <form action="{{url('panel-admin/login_check')}}" method="post">
                    @csrf
                    <div class="input-box">
                        <input type="text" name="u" required="">
                        <label for="">Username</label>
                    </div>
                    <div class="input-box">
                        <input type="password" name="p" required="">
                        <label for="">Password</label>
                    </div>
                    <div class="forgot-password" data-toggle="modal" data-target="#exampleModal">
                        <a href="#">Forgot password</a>
                    </div>
                    <input class="btn-submit" type="submit" name="" value="Submit">
                </form>
            </div>
        </div>
    </div>


    <footer>
        @include('panel/include.footer')
    </footer>
    <!-- Modal forgotpassword -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Forgot password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body border-bottom-main">
                    <p>Enter your email below to receive your password reset instructions.</p>
                    <form action="">
                        <div class="input-box">
                            <input type="email" name="" required="">
                            <label for="">E-mail</label>
                        </div>
                        <input class="btn-submit" type="submit" name="" value="Send password">
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>







@include('panel/include.css_scripts')


<script type="text/javascript">
</script>
@endsection

