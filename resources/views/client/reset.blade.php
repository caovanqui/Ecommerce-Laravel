@extends('layout.clientlayout')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
            style="background: #faf5f0;">
            <div class="featured-image mb-3">
                <img src="{{ asset('client/img/login-bgimg.png') }}" class="img-fluid" style="width: 250px;">
            </div>
            <p class="text-white fs-2 text-black-50"
                style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Xác minh</p>
            <small class="text-white text-wrap text-center text-black-50"
                style="width: 17rem; font-family: 'Courier New', Courier, monospace;">Đăng nhập vào để có thể mua sắm thoải mái</small>
        </div>
        <div class="col-md-6 right-box">
            <div class="row align-items-center">
                <div class="header-text mb-4 text-center">
                    <h2>Xin chào</h2>
                    <p>Đặt lại mật khẩu</p>
                </div>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Email của bạn" value="{{ $email ?? old('email') }}" required autofocus>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Mật khẩu mới" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password_confirmation" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Xác nhận mật khẩu" required>
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Đặt lại mật khẩu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
