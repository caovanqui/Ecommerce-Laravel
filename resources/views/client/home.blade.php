@extends('layout.clientlayout')
@section('content')

<div class="banner container-fluid p-0">
    <div class="banner">
        <div class="position-relative p-0">
            <img class="w-100 banner-img object-fit-cover" src="{{asset('client/img/banner.jpg')}}" alt="" height="600">
            <div class="banner-text col-6 position-absolute top-50 translate-middle-x translate-middle-y mx-5">
                <h6 class="text-uppercase">bộ sưu tập mới</h6>
                <div class="">
                    <h1 class="banner-h1 fw-medium fs-1 fs-lg-1">TRẢI NGHIỆM TRÊN <br> CHIẾC NHẪN MỚI</h1>
                    <p>Shop của chúng tôi có nhiều loại nhẫn đẹp và chất lượng. Bạn có thể chọn nhẫn theo <br> phong
                        cách, màu
                        sắc và
                        kích thước của mình. Nhẫn của chúng tôi sẽ làm bạn hài lòng và tự tin.</p>
                    <a href="" class="btn text-uppercase btn-outline-dark rounded-0 fs-6 btn-lg mt-3">Mua ngay</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brand-slide container my-4">
    <div class="owl-carousel owl-theme owl-loaded brand-slide-carousel">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <div class="owl-item"><img src="{{asset('client/img/brand-1.png')}}" alt="" class="img-fluid img-thumbnail"></div>
                <div class="owl-item"><img src="{{asset('client/img/brand-2.png')}}" alt="" class="img-fluid img-thumbnail"></div>
                <div class="owl-item"><img src="{{asset('client/img/brand-3.png')}}" alt="" class="img-fluid img-thumbnail"></div>
                <div class="owl-item"><img src="{{asset('client/img/brand-4.png')}}" alt="" class="img-fluid img-thumbnail"></div>
                <div class="owl-item"><img src="{{asset('client/img/brand-5.png')}}" alt="" class="img-fluid img-thumbnail"></div>
            </div>
        </div>
    </div>
</div>
<div class="product-container container">
    <!-- Product popular -->
    <div class="product-popular-text text-center mt-5">
        <p class="text-uppercase fs-6 m-0">sản phẩm phổ biến</p>
        <h4 class="text-uppercase fs-1 mb-3 pb-2">thịnh hành</h4>
    </div>
    <div class="product-popular row">
        <div class="col-6 col-md-3 position-relative">
            <span ng-if="product.sale"
                class="position-absolute fs-6 badge text-bg-light shadow top-0 left-0 m-3 rounded-pill ">Sale!</span>
            <a href="#"><img src="{{ asset ('client/img/ring-5.jpg') }}" class="card-img-top"
                    alt="..."></a>
            <a ng-click="add(product)" class=" product-addtocart rounded-circle p-2 badge position-absolute top-0 end-0 m-3
                translate-middle-x shadow text-bg-light" data-bs-toggle="tooltip" data-bs-placement="left"
                data-bs-custom-class="custom-tooltip" data-bs-title="Thêm vào giỏ hàng">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
            <div class="text-center">
                <h5 class="card-title fs-6 mt-4"> Nhẫn Bạc Pandora Moments Mặt Trái Tim Đính Đá </h5>
                <p class="card-text"> 2499 <span>$</span> </p>
            </div>
        </div>
        <div class="col-6 col-md-3 position-relative">
            <span class="position-absolute fs-6 badge text-bg-light shadow top-0 left-0 m-3 rounded-pill ">Sale!</span>
            <img src="{{asset ('client/img/product-popular-2.jpg')}}" class="card-img-top" alt="...">
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
            <img src="{{asset ('client/img/product-popular-3.jpg')}}" class="card-img-top" alt="...">
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
            <img src="{{asset ('client/img/product-popular-4.png')}}" class="card-img-top" alt="...">
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

    <!-- Product best seller -->
    <div class="product-popular-text text-center mt-5">
        <p class="text-uppercase fs-6 m-0">cửa hàng</p>
        <h4 class="text-uppercase fs-1 mb-3 pb-2">bán chạy</h4>
    </div>
    <div class="product-popular row">
        <div class="col-6 col-md-3 position-relative">
            <span class="position-absolute fs-6 badge text-bg-light shadow top-0 left-0 m-3 rounded-pill ">Sale!</span>
            <img src="{{asset ('client/img/product-popular-1.jpg')}}" class="card-img-top" alt="...">
            <a class="product-addtocart rounded-circle p-2 badge position-absolute top-0 end-0 m-3 translate-middle-x shadow text-bg-light"
                data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip"
                data-bs-title="Thêm vào giỏ hàng">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
            <div class="text-center">
                <h5 class="card-title fs-6 mt-4">Lắc tay bạc nữ đính đá CZ thỏ ngắm trăng LILI_722163</h5>
                <p class="card-text">3400 $</p>
            </div>
        </div>
        <div class="col-6 col-md-3 position-relative">
            <span class="position-absolute fs-6 badge text-bg-light shadow top-0 left-0 m-3 rounded-pill ">Sale!</span>
            <img src="{{asset ('client/img/product-popular-2.jpg')}}" class="card-img-top" alt="...">
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
            <img src="{{asset ('client/img/product-popular-3.jpg')}}" class="card-img-top" alt="...">
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
            <img src="{{asset ('client/img/product-popular-4.png')}}" class="card-img-top" alt="...">
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
</div>
<section class="section-boxed container my-5">
    <div class="row section-boxed-container">
        <div class="section-boxed-text col-7 col-lg-5 vstack justify-content-center">
            <h6 class="section-boxed-h6 text-uppercase fw-medium">những sản phẩm độc đáo</h6>
            <div class="">
                <h1 class="section-boxed-h1 fw-medium fs-1 fs-lg-1 text-uppercase">luôn <br> bắt <br> kịp <br> xu
                    hướng</h1>
            </div>
            <div class="w-100 w-lg-50">
                <p class="section-boxed-p">Luôn bắt kịp xu hướng, luôn cập nhật những điều mới mẻ và thú vị. Luôn
                    tỏa sáng với
                    phong cách riêng của
                    mình.</p>
            </div>
            <div>
                <a href="" class="btn text-uppercase btn-outline-dark rounded-0 fs-6 btn-lg mt-3">Mua ngay</a>
            </div>
        </div>
        <div class="section-boxed-center-img col-5 col-lg-2 position-relative">
            <img src="{{asset ('client/img/boxed-img-col-2.jpg')}}" class="position-absolute top-50 translate-middle-y" alt="">
        </div>
        <div class="section-boxed-next-img col-12 col-lg-5">
            <img src="{{asset ('client/img/boxed-img-col-3.jpg')}}" class="img-fluid object-fit-cover" alt="">
        </div>
    </div>
</section>
<section class="section-service container my-5">
    <div class="section-service-text d-flex justify-content-center text-center mt-5">
        <div style="max-width: 650px;">
            <p class="text-uppercase fs-6 m-0">tốt nhất trong kinh doanh</p>
            <h4 class="text-uppercase fs-1">lý do chọn chúng tôi</h4>
            <h4 class="text-uppercase fs-4 fw-light pb-3">CỬA HÀNG CHÚNG TÔI CÓ NHIỀU NĂM KINH
                NGHIỆM,
                ĐẢM BẢO CHẤT LƯỢNG SẢN
                PHẨM,
                DỊCH VỤ VÀ GIÁ CẢ PHẢI CHĂNG.</h4>
        </div>
    </div>
    <div class="section-elementor-boxed row my-5">
        <div class="col-12 col-lg-3">
            <div class="card border-0">
                <img src="{{asset ('client/img/img-service-1.png')}}" class="card-img-top section-elementor-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">GIẢM GIÁ LỚN</h5>
                    <p class="card-text fw-light">Giảm giá cực khủng, nhanh tay đặt hàng trước khi hết hàng.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card border-0">
                <img src="{{asset ('client/img/img-service-2.png')}}" class="card-img-top section-elementor-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">MIỄN PHÍ VẬN CHUYỂN</h5>
                    <p class="card-text fw-light">Free ship toàn quốc, không lo phí vận chuyển, mua hàng thoải mái
                        và tiết kiệm.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card border-0">
                <img src="{{asset ('client/img/img-service-3.png')}}" class="card-img-top section-elementor-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">GIAO DỊCH AN TOÀN</h5>
                    <p class="card-text fw-light">Thanh toán an toàn, bảo mật thông tin cá nhân. Chúng tôi cam kết
                        hoàn tiền nếu
                        có sự
                        cố.</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card border-0">
                <img src="{{asset ('client/img/img-service-4.png')}}" class="card-img-top section-elementor-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">THEO DÕI ĐƠN HÀNG</h5>
                    <p class="card-text fw-light">Theo dõi đơn hàng dễ dàng, nhanh chóng. Kiểm tra trạng thái đơn
                        hàng mọi lúc,
                        mọi nơi.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


