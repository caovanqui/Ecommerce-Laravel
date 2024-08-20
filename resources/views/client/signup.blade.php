@extends('layout.clientlayout')
@section('content')

<link rel="stylesheet" href="{{asset('client/css/login.css')}}">
<!----------------------- Main Container -------------------------->

<div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

    <div class="row border rounded-5 p-3 bg-white shadow box-area">

        <!--------------------------- Left Box ----------------------------->

        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #faf5f0;">
            <div class="featured-image mb-3">
                <img src="{{asset('client/img/login-bgimg.png')}}" class="img-fluid" style="width: 250px;">
            </div>
            <p class="text-white fs-2 text-black-50" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Xác minh
            </p>
            <small class="text-white text-wrap text-center text-black-50" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Đăng nhập vào để có thể mua sắm
                thoải mái</small>
        </div>

        <!-------------------- ------ Right Box ---------------------------->
        <div class="col-md-6 right-box">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="row align-items-center">
                    <div class="header-text mb-4 text-center">
                        <h2>Xin chào</h2>
                        <p>Đăng kí tài khoản</p>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 row p-0">
                            <div class="col-12 col-lg-6">
                                <input type="text" name="name" class="form-control form-control-lg bg-light fs-6 @error('name') is-invalid {{$message}} @enderror" placeholder="Nhập họ và tên">
                            </div>
                            <div class="col-12 col-lg-6">
                                <input type="text" name="phone_number" class="form-control form-control-lg bg-light fs-6 @error('phone_number') is-invalid {{$message}} @enderror" placeholder="Nhập số điện thoại">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="email" class="form-control form-control-lg bg-light fs-6 @error('email') is-invalid {{$message}} @enderror" placeholder="Nhập email" autocomplete="username">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control form-control-lg bg-light fs-6 @error('password') is-invalid {{$message}} @enderror" placeholder="Mật khẩu" autocomplete="new-password">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" name="password_confirmation" class="form-control form-control-lg bg-light fs-6 @error('password_comfirmation') is-invalid {{$message}} @enderror" placeholder="Xác nhận mật khẩu" autocomplete="new-password">
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Ghi nhớ tài khoản
                                </small></label>
                        </div>
                        <div class="forgot">
                            <small><a href="{{route('forgotpass')}}">Quên mật khẩu?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Đăng ký</button>
                    </div>
                    <div class="row">
                        <small>Bạn đã có tài khoản? <a href="{{route('login')}}" class="fw-medium">Đăng nhập tại đây</a></small>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection