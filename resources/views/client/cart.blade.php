@extends('layout.clientlayout')
@section('content')

<section class="cart container my-5">
    <div class="entry-header">
        <h2>GIỎ HÀNG</h2>
    </div>
    <div class="table-responsive">
        <table class="cart-table table-bordered table table-hover align-middle text-center border-start border-end">
            <thead class="cart-table_thead">
                <tr class="">
                    <th></th>
                    <th></th>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tạm tính</th>
                </tr>
            </thead>
            <tbody class="cart-table_tbody">
                @if(session('cart'))
                @foreach(session('cart') as $id => $item)
                <tr>
                    <td class="text-center">
                        <a href=""><i class="fa-regular fa-circle-xmark"></i></a>
                        <!-- <form action="{{ route('cart.remove', ['id' => $item['id']]) }}" method="post">
                            @csrf
                            <button type="submit" class="border-0 bg-white"><i class="fa-regular fa-circle-xmark"></i></button>
                        </form> -->
                    </td>
                    <td class="cart-table-imgpro">
                        <a href="">
                            <img src="{{$item['photo']}}" class="img-fluid " alt="">
                        </a>
                    </td>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['price']}}</td>
                    <td>
                        <div class="btn-group" aria-label="Basic outlined example">
                            <a href="" type="submit" class="btn bg-secondary bg-opacity-10"><i class="fa-solid fa-minus"></i></a>
                            <a href="" type="submit" class="btn bg-secondary bg-opacity-10"><span class="p-1">{{$item['quantity']}}</span></a>
                            <a href="" type="submit" class="btn bg-secondary bg-opacity-10"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </td>
                    <td class="subtotal">{{ $item['price'] * $item['quantity'] }}</td>
                </tr>
                @endforeach
                @endif
                <tr>
                    <td colspan="3">
                        <div class="cart-discount_code d-flex container">
                            <input type="text" class="form-control w-50" placeholder="Mã giảm giá">
                            <button type="submit" class="btn bg-secondary bg-opacity-10 ms-2">Áp
                                dụng</button>
                        </div>
                    </td>
                    <td colspan="3">
                        <a type="submit" class="btn bg-secondary bg-opacity-10 ms-2 rounded-0 fw-light ps-3 pe-3" href="#!product/all">CẬP
                            NHẬT GIỎ
                            HÀNG</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row" style="padding: 12px;">
        <div class="col-lg-6"></div>
        <div class="col-12 col-lg-6 card">
            <div class="card-title border-bottom">
                <h2 class="p-2">CỘNG GIỎ HÀNG</h2>
            </div>
            <div class="card-body">
                <table class="table-responsive">
                    <tr class="border-bottom">
                        <td class="w-50 p-3">Tạm tính</td>
                        <td class="w-50 p-3"> 7000$ </td>
                    </tr>
                    <tr class="border-bottom">
                        <td class="w-50 p-3">Giao hàng</td>
                        <td class="w-50 p-2">
                            <p>Đồng giá: <span>5$</span></p>
                            <p>Tùy chọn giao hàng sẽ được cập nhật trong quá trình thanh toán.</p>
                            <p>Tính phí giao hàng</p>
                        </td>
                    </tr>
                    <tr class="border-bottom">
                        <td class="w-50 p-3">Tổng</td>
                        <td class="w-50 p-3">7000<span>$</span></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="pt-4">
                            <a href="{{ route('showPaymentForm') }}" class="btn bg-secondary bg-opacity-10 ms-2 rounded-0 fw-light p-3 w-100">
                                TIẾN HÀNH THANH TOÁN
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection