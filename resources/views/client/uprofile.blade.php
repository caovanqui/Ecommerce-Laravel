@extends('layout.clientlayout')
@section('content')
<div class="container mb-2">
    <div class="row">
        <article class="col-sm-3 mt-3">
            <div class="mb-4 text-start">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item mb-3 border rounded overflow-hidden accordion">
                        <h2 class="accordion-header">
                            <button class="accordion-button hstack gap-2 fw-bolder" style="background-color: #faf5f0;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Thông tin cá nhân
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body p-0 card m-3">
                                <ul class="list-group list-group-flush">
                                    <a href="">
                                        <li class="list-group-item hstack justify-content-between">
                                            Thông tin cá nhân
                                        </li>
                                    </a>
                                    <a href="{{route('showOrderTrackingForm')}}">
                                        <li class="list-group-item hstack justify-content-between">
                                            Đơn hàng của bạn
                                        </li>
                                    </a>
                                    <a href="">
                                        <li class="list-group-item hstack justify-content-between">
                                            Đổi mật khẩu
                                        </li>
                                    </a>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <a href="">
                                            <li type="submit" class="list-group-item hstack justify-content-between">
                                                Đăng xuất
                                            </li>
                                        </a>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <aside class="col-sm-9 mt-3">
            @foreach ($user as $item)
            <div class="card">
                <div class="m-3">
                    <p><strong>Ảnh của bạn:</strong></p>
                    <img src="{{asset('client/img/u-img.jpg')}}" alt="" class="w-25 rounded-circle overflow-hidden">
                    <p><strong>Thay đổi ảnh đại diện</strong></p>
                    <input type="file" class="form-control">
                </div>
                <div class="ms-3 me-3">
                    <div class="col-lg-12 ps-0">
                        <label for=""><strong>Họ và tên:</strong></label>
                        <input type="text" class="form-control m-0" value="{{$item->name}}">
                    </div>
                    
                </div>
                <div class="ms-3 me-3">
                    <form action="/action_page.php" class="d-flex align-items-center">
                        <p class="m-3 pe-2"><strong>Giới tính:</strong></p>
                        <div class="form-group d-flex flex-wrap">
                            <div class="form-check pe-2">
                                <input type="radio" class="form-check-input" id="male" name="gender" value="male" checked>
                                <label class="form-check-label" for="male">Nam</label>
                            </div>
                            <div class="form-check pe-2">
                                <input type="radio" class="form-check-input" id="female" name="gender" value="female">
                                <label class="form-check-label" for="female">Nữ</label>
                            </div>
                            <div class="form-check pe-2">
                                <input type="radio" class="form-check-input" id="Other" name="gender" value="Other">
                                <label class="form-check-label" for="female">Khác</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="ms-3 me-3">
                    <label for=""><strong>Ngày tạo:</strong></label>
                    <input type="text" class="form-control mb-3" placeholder="Ngày taọ tài khoản" value="{{$item->created_at}}">
                    <label for=""><strong>Email:</strong></label>
                    <input type="text" class="form-control" value="{{$item->email}}" disabled>
                    <p class="mb-3 ms-2">*Dữ liệu không thể thay đổi</p>
                    <label for=""><strong>Số điện thoại:</strong></label>
                    <input type="text" class="form-control mb-3" placeholder="Số điện thoại" value="0358574009">
                </div>
                <div class="row ms-3 me-3">
                    <p class="mb-3"><strong>Địa chỉ hiện tại: </strong>{{$item->address}}</p>
                    <div class="col-lg-12">
                        <input type="text" class="form-control mb-3">
                    </div>
                    <!-- <div class="row mb-3 col-12">
                        <div class="col-lg-6">
                            <select ng-model="tinh" class="form-select" ng-options="tinh.Name for tinh in dsTinh" name="" id=""></select>
                        </div>
                        <div class="col-lg-6">
                            <select ng-model="huyen" class="form-select" ng-options="huyen.Name for huyen in tinh.Districts" name="" id=""></select>
                        </div>
                    </div> -->
                </div>
                <div class="me-3 ms-3 mb-3">
                    <!-- <input type="submit" value="Lưu thông tin thay đổi" class="form-control rounded-2"> -->
                    <div style="background-color: #faf5f0;" class=" form-control rounded-3 d-flex justify-content-center " type="submit">
                        <strong>Lưu thông tin</strong>
                    </div>
                </div>
            </div>
            @endforeach
        </aside>
    </div>
</div>
@endsection