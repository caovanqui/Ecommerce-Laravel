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
                                    <a href="">
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
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="fw-semibold">Mã đơn hàng</th>
                            <th class="fw-semibold">Ngày đặt</th>
                            <th class="fw-semibold">Số điện thoại</th>
                            <th class="fw-semibold">Địa chỉ</th>
                            <th class="fw-semibold">Thành tiền</th>
                            <th class="fw-semibold">Trạng Thái</th>
                            <th class="fw-semibold">Xem chi tiết</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-middle">
                            <th>1</th>
                            <td>25-01-2004</td>
                            <td>0358574009</td>
                            <td>Công Viên phần mềm Quang Trung</td>
                            <td>200$</td>
                            <td>Chờ Vận Chuyển</td>
                            <td class="">
                                <div class="handle-option gap-2 w-25">
                                    <i class="fa-solid fa-circle-info"></i>
                                </div>
                            </td>
                        </tr>
                        @foreach ($orders as $order)
                            <tr class="align-middle">
                                <th>{{ $order->order_code }}</th>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->phone_number }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->total_amount }}</td>
                                <td>{{ $order->status }}</td>
                                <td>
                                <div class="handle-option gap-2 w-25">
                                    <i class="fa-solid fa-circle-info"></i>
                                </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </aside>
    </div>
</div>
@endsection