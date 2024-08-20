@extends('layout.clientlayout')
@section('content')

<section class="products container my-3">
    <div class="products-breadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
            </ol>
        </nav>
    </div>
    <h1>SẢN PHẨM</h1>
    {{-- <div class="d-flex justify-content-between my-3" ng-show="keywordSearch != ''">
        <div class="text-uppercase">Bạn đang tìm kiếm: {{ keywordSearch }}</div>
    <button class="btn bg-secondary bg-opacity-10" ng-click="resetKeyword()">Xóa tìm kiếm</button>
    </div> --}}
    <div class="products-fillter my-5 d-flex justify-content-between">
        <p>Hiển thị tất cả sản phẩm: 32 sản phẩm
        </p>
        <select class="form-select w-25" aria-label="Default select example" ng-model="selectedOrder" ng-change="updateOrder()">
            <option value="default">Theo thứ tự mặc định</option>
            <option value="N.A-Z">Theo tên A-Z</option>
            <option value="N.Z-A">Theo tên Z-A</option>
            <option value="newest">Mới nhất</option>
            <option value="lowToHigh">Theo giá: thấp đến cao</option>
            <option value="highToLow">Theo giá: cao đến thấp</option>
        </select>
    </div>
    <div class="products-show row g-3">
        @forelse($productsAll as $product)
        <div class="col-6 col-md-3 position-relative">
            @if ($product->sale == 1)
            <span class="position-absolute fs-6 badge text-bg-light shadow top-0 left-0 m-3 rounded-pill ">Sale!</span>
            @elseif ($product->hot == 1)
            <span class="position-absolute fs-6 badge text-bg-light shadow top-0 left-0 m-3 rounded-pill ">Hot!</span>
            @endif
            <a href="{{ route('productdetail', ['id' => $product->id]) }}"><img src="{{ $product->img }}" class="card-img-top" alt="..."></a>
            <!-- <a class=" product-addtocart rounded-circle p-2 badge position-absolute top-0 end-0 m-3
                    translate-middle-x shadow text-bg-light" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Thêm vào giỏ hàng">
                <i class="fa-solid fa-cart-shopping"></i>
            </a> -->
            <form action="{{ route('addToCart') }}" method="POST" class="product-addtocart-form position-absolute top-0 end-0 m-3 translate-middle-x">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">
                <button type="submit" class="product-addtocart border-0 rounded-circle p-2 badge shadow text-bg-light" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Thêm vào giỏ hàng">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </form>

            <div class="text-center">
                <h5 class="card-title fs-6 mt-4"> {{ $product->name }} </h5>
                <p class="card-text"> {{ $product->price }} <span>$</span> </p>
            </div>
        </div>
        @empty
        Everthing will be ok, just let do it again
        @endforelse
    </div>
    <div class="products-pagination mt-4">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <!-- Previous Page Link -->
                @if($productsAll->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" style="color: black;" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link" style="color: black;" href="{{ $productsAll->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                @endif

                <!-- Pagination Elements -->
                @foreach ($productsAll->getUrlRange(1, $productsAll->lastPage()) as $page => $url)
                @if ($page == $productsAll->currentPage())
                <li class="page-item active">
                    <a class="page-link" style="color: black;" href="#">{{ $page }}</a>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link" style="color: black;" href="{{ $url }}">{{ $page }}</a>
                </li>
                @endif
                @endforeach
                <!-- Next Page Link -->
                @if($productsAll->hasMorePages())
                <li class="page-item">
                    <a class="page-link" style="color: black;" href="{{ $productsAll->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                @else
                <li class="page-item disabled">
                    <a class="page-link" style="color: black;" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
    </div>
    </div>
</section>

@endsection