
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
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="header-text mb-4 text-center">
                    <h2>Xin chào</h2>
                    <p>Chúng tôi rất vui khi bạn quan tâm</p>
                </div>
                <div class="input-group mb-3">
                    <input name="email" type="text" class="form-control form-control-lg bg-light fs-6 @error('email') is-invalid @enderror" placeholder="Tài khoản" autocomplete="username" value="{{ old('username') }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-1">
                    <input name="password" type="password" class="form-control form-control-lg bg-light fs-6 @error('password') is-invalid @enderror" placeholder="Mật khẩu" autocomplete="current-password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-5 d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary"><small>Ghi nhớ tài khoản</small></label>
                    </div>
                    <div class="forgot">
                        <small><a href="{{ route('forgotpass') }}">Quên mật khẩu?</a></small>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Đăng nhập</button>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-light w-100 fs-6"><img src="{{ asset('client/img/google.png') }}" style="width:20px" class="me-2"><small>Đăng nhập bằng Google</small></button>
                </div>
                <div class="row">
                    <small>Bạn chưa có tài khoản? <a href="{{ route('register') }}" class="fw-medium">Đăng kí tại đây</a></small>
                </div>
            </form>
            </div>
        </div>

    </div>
</div>
@endsection