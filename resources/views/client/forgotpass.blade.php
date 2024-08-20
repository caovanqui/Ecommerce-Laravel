@extends('layout.clientlayout')
@section('content')
<link rel="stylesheet" href="{{asset('client/css/login.css')}}">
    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #faf5f0;">
                <div class="featured-image mb-3">
                    <img src="{{asset('client/img/login-bgimg.png')}}" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2 text-black-50"
                    style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Xác minh
                </p>
                <small class="text-white text-wrap text-center text-black-50"
                    style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Đăng nhập vào để có thể mua sắm
                    thoải mái</small>
            </div>

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4 text-center">
                        <h2>Xin chào</h2>
                        <p>Quên mật khẩu</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Email của bạn">
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6">Gửi</button>
                    </div>
                    <div class="row mb-2">
                        <small>Bạn chưa có tài khoản? <a href="{{route('register')}}" class="fw-medium">Đăng kí tại đây</a></small>
                    </div>
                    <div class="row">
                        <small>Bạn đã có tài khoản? <a href="{{route('login')}}" class="fw-medium">Đăng nhập tại đây</a></small>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection