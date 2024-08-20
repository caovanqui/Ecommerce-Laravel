@extends('layout.clientlayout')
@section('content')

<section class="product-detail container my-5">
    <div class="row">
        <article class="col-12 col-lg-6">
            <div class="row">
                <img src="{{$product->img}}" class="col-12 h-75" alt="" />
            </div>
            <div class="row">
                <a href="" class="col-3">
                    <img src="{{asset('client/img/product-detail-1.1.jpg')}}" alt=""
                        class="product-detail_imgrlt me-2 mt-3 img-fluid" />
                </a>
                <a href="" class="col-3">
                    <img src="{{asset('client/img/product-detail-1.2.jpg')}}" alt=""
                        class="product-detail_imgrlt me-2 mt-3 img-fluid" />
                </a>
                <a href="" class="col-3">
                    <img src="{{asset('client/img/product-detail-1.3.jpg')}}" alt=""
                        class="product-detail_imgrlt me-2 mt-3 img-fluid" />
                </a>
                <a href="" class="col-3">
                    <img src="{{asset('client/img/product-popular-1.jpg')}}" alt=""
                        class="product-detail_imgrlt me-2 mt-3 img-fluid" />
                </a>
            </div>
        </article>

        <aside class="col-12 col-lg-6 p-4">
            <div class="products-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $product->category->name }}</li>
                    </ol>
                </nav>
            </div>
            <div class="product-detail-des">
                <h1 class="fw-medium">{{ $product->name }}
                </h1>
                <div class="hstack gap-3 btn bg-opacity-10 bg-secondary align-items-center">
                    <p class="fw-bold m-0">Giá:</p>
                    <h3 class="text-danger fw-bold m-0"> {{$product->price}}</h3>
                    <del ng-if="sp.sale">
                        <h4 class="fw-lighter m-0"> {{$product->old_price}}</h4>
                    </del>
                </div>
                <p class="mt-3">
                    {{$product->des}}
                </p>
                <div class="d-flex justify-content-between">
                    <div class="btn-group" aria-label="Basic outlined example">
                        <a href="" type="submit" class="btn bg-secondary bg-opacity-10"><i
                                class="fa-solid fa-minus"></i></a>
                        <a href="" type="submit" class="btn bg-secondary bg-opacity-10">1</a>
                        <!-- <input type="text" value="1" class="btn bg-secondary bg-opacity-10"> -->
                        <a href="" type="submit" class="btn bg-secondary bg-opacity-10"><i
                                class="fa-solid fa-plus"></i></a>
                    </div>
                    <button class="btn bg-secondary btn-outline-light fw-bold" ng-click="add(sp)">THÊM VÀO GIỎ
                        HÀNG</button>
                </div>
                <hr>
                <p class="fw-lighter">Danh mục: <span>{{$product->category->name}}</span></p>
            </div>
        </aside>
    </div>
</section>
<section class="container my-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="prodetail-tab-nav nav-link active" id="home-tab" data-bs-toggle="tab"
                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                aria-selected="true">Mô tả</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="prodetail-tab-nav nav-link" id="profile-tab" data-bs-toggle="tab"
                data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                aria-selected="false">Đánh giá
                (0)</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Distinctio impedit quas voluptatem similique praesentium cumque aliquid quasi explicabo!
            Enim itaque cum repellendus deleniti possimus, tenetur ipsa nostrum eos. Architecto, vitae.
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <p class="mt-4">Chưa có đánh giá nào</p>
            <div class="card container p-4">
                <div class="card-title">
                    <h5 class="fw-light">Hãy là người đầu tiên nhận xét về Nhẫn Bạc Pandora Moments Mặt Trái Tim
                        Đính
                        Đá</h5>
                    <p class="mb-5 fw-light">Email của bạn sẽ không được hiển thị công khai. Các trường bắt buộc
                        được đánh
                        dấu *</p>
                    <p class="fs-6 fw-normal">Đánh giá của bạn là*
                        <a href=""><i class="fa-solid fa-star"></i></a>
                        <a href=""><i class="fa-solid fa-star"></i></a>
                        <a href=""><i class="fa-solid fa-star"></i></a>
                        <a href=""><i class="fa-solid fa-star"></i></a>
                        <a href=""><i class="fa-solid fa-star"></i></a>
                    </p>
                </div>
                <form action="" method="post">
                    <div class="card-body p-0">
                        <p class="fs-6 fw-normal">Nhận xét của bạn*</p>
                        <textarea name="" id="" cols="" class="w-100 opacity-25" rows="5" required></textarea>
                    </div>
                    <div class="row">
                        <div class="name col-12 col-md-auto flex-grow-1">
                            <label for="">Tên*</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="email col-12 col-md-auto flex-grow-1">
                            <label for="">Email*</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <br>
                    <p><input type="checkbox"> Lưu tên của tôi, email, và trang web trong trình duyệt này cho lần
                        bình
                        luận
                        kế tiếp của tôi.
                    </p>
                    <input type="submit" class="btn bg-secondary btn-outline-light fw-bold">
                </form>
            </div>
        </div>
    </div>
</section>
<section class="product-relate_to container my-5">
    <h3 class="fw-light pb-4">SẢN PHẨM TƯƠNG TỰ</h3>
    <div class="product-popular row">
        <div class="col-6 col-md-3 position-relative">
            <span class="position-absolute fs-6 badge text-bg-light shadow top-0 left-0 m-3 rounded-pill ">Sale!</span>
            <img src="{{asset('client/img/product-1.jpg')}}" class="card-img-top" alt="...">
            <a class="product-addtocart rounded-circle p-2 badge position-absolute top-0 end-0 m-3 translate-middle-x shadow text-bg-light"
                data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip"
                data-bs-title="Thêm vào giỏ hàng">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
            <div class="text-center">
                <h5 class="card-title fs-6 mt-4">Nhẫn Bạc Pandora Moments Mặt Trái Tim Đính Đá</h5>
                <p class="card-text">5000 $</p>
            </div>
        </div>
        <div class="col-6 col-md-3 position-relative">
            <span class="position-absolute fs-6 badge text-bg-light shadow top-0 left-0 m-3 rounded-pill ">Sale!</span>
            <img src="{{asset('client/img/product-2.jpg')}}" class="card-img-top" alt="...">
            <a class="product-addtocart rounded-circle p-2 badge position-absolute top-0 end-0 m-3 translate-middle-x shadow text-bg-light"
                data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip"
                data-bs-title="Thêm vào giỏ hàng">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
            <div class="text-center">
                <h5 class="card-title fs-6 mt-4">Nhẫn Bạc Pandora Moments Đính Viên Đá Tròn</h5>
                <p class="card-text">5000 $</p>
            </div>
        </div>
        <div class="col-6 col-md-3 position-relative">
            <span class="position-absolute fs-6 badge text-bg-light shadow top-0 left-0 m-3 rounded-pill ">Sale!</span>
            <img src="{{asset('client/img/product-3.jpg')}}" class="card-img-top" alt="...">
            <a class="product-addtocart rounded-circle p-2 badge position-absolute top-0 end-0 m-3 translate-middle-x shadow text-bg-light"
                data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip"
                data-bs-title="Thêm vào giỏ hàng">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
            <div class="text-center">
                <h5 class="card-title fs-6 mt-4">Nhẫn Bạc Pandora Moments Hình Mũi Tên</h5>
                <p class="card-text">5000 $</p>
            </div>
        </div>
        <div class="col-6 col-md-3 position-relative">
            <span class="position-absolute fs-6 badge text-bg-light shadow top-0 left-0 m-3 rounded-pill ">Sale!</span>
            <img src="{{asset('client/img/product-4.jpg')}}" class="card-img-top" alt="...">
            <a class="product-addtocart rounded-circle p-2 badge position-absolute top-0 end-0 m-3 translate-middle-x shadow text-bg-light"
                data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip"
                data-bs-title="Thêm vào giỏ hàng">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
            <div class="text-center">
                <h5 class="card-title fs-6 mt-4">Nhẫn Bạc Disney x Pandora Hình Bạch Tuộc Màu Tím</h5>
                <p class="card-text">5000 $</p>
            </div>
        </div>
    </div>
</section>
    
@endsection