@extends('layout.clientlayout')
@section('content')

<section class="products container my-3">
    <div class="products-breadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
            </ol>
        </nav>
    </div>
    <h1>TIN TỨC</h1>
    <div class="news row my-5 g-4">
        <div class="col-12 col-lg-8">
            <div class="row g-3">
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="ratio ratio-1x1">
                            <img src="{{asset('client/img/news-img-2.jpg')}}" class="card-img-top object-fit-cover img-fluid" alt="...">
                        </div>
                        <div class="news-article-body card-body">
                            <h5 class="card-title fs-6 fw-medium text-uppercase text-truncate">Những trang sức sang
                                trọng
                                nâng tầm đẳng
                                cấp doanh nhân
                            </h5>
                            <p class="card-text">Bảo Tín Minh Châu ra mắt nhiều bộ trang sức sang trọng, đáp ứng xu
                                hướng
                                thời trang cùng ưu đãi đến 30% nhân ngày Doanh nhân Việt Nam.</p>
                        </div>
                        <div class="news-article-body card-body hstack justify-content-between bg-secondary bg-opacity-10 p-2">
                            <p class="m-0"><i class="fa-regular fa-calendar-days"></i> 21-03-2004</p>
                            <a href="">
                                <p class="m-0 fw-bold fst-italic">Xem thêm</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="ratio ratio-1x1">
                            <img src="{{asset('client/img/news-img-1.jpg')}}" class="card-img-top object-fit-cover img-fluid" alt="...">
                        </div>
                        <div class="news-article-body card-body">
                            <h5 class="card-title fs-6 fw-medium text-uppercase text-truncate">MeouShop giảm 16%
                                trang sức
                                kim cương dịp
                                20/10</h5>
                            <p class="card-text">Mừng ngày 20/10, MeouShop ưu đãi 16% khi mua trang sức kim cương
                                trên toàn
                                cửa hàng tại TP HCM, Hà Nội cùng hệ thống online.</p>
                        </div>
                        <div class="news-article-body card-body hstack justify-content-between bg-secondary bg-opacity-10 p-2">
                            <p class="m-0"><i class="fa-regular fa-calendar-days"></i> 21-03-2004</p>
                            <a href="">
                                <p class="m-0 fw-bold fst-italic">Xem thêm</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="ratio ratio-1x1">
                            <img src="{{asset('client/img/news-img-3.jpg')}}" class="card-img-top object-fit-cover img-fluid" alt="...">
                        </div>
                        <div class="news-article-body card-body">
                            <h5 class="card-title fs-6 fw-medium text-uppercase text-truncate">PNJ hoàn thành hơn
                                64% kế hoạch lợi nhuận năm</h5>
                            <p class="card-text">PNJ công bố hoàn thành 64,4% kế hoạch năm sau 8 tháng, trong đó
                                doanh thu thuần đạt 21.126 tỷ, lợi nhuận sau thuế đạt 1.247 tỷ đồng. </p>
                        </div>
                        <div class="news-article-body card-body hstack justify-content-between bg-secondary bg-opacity-10 p-2">
                            <p class="m-0"><i class="fa-regular fa-calendar-days"></i> 21-03-2004</p>
                            <a href="">
                                <p class="m-0 fw-bold fst-italic">Xem thêm</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="ratio ratio-1x1">
                            <img src="{{asset('client/img/news-img-4.jpg')}}" class="card-img-top object-fit-cover img-fluid" alt="...">
                        </div>
                        <div class="news-article-body card-body">
                            <h5 class="card-title fs-6 fw-medium text-uppercase text-truncate">Gợi ý quà trang sức
                                tặng mẹ dịp Vu Lan</h5>
                            <p class="card-text">Vòng cổ, khuyên tai, nhẫn, lắc tay... là gợi ý quà tặng mẹ dịp lễ
                                Vu Lan.</p>
                        </div>
                        <div class="news-article-body card-body hstack justify-content-between bg-secondary bg-opacity-10 p-2">
                            <p class="m-0"><i class="fa-regular fa-calendar-days"></i> 21-03-2004</p>
                            <a href="">
                                <p class="m-0 fw-bold fst-italic">Xem thêm</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" style="background-color: #faf5f0;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Tin tức hot
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-2 col-lg-4">
                                            <div class="ratio ratio-1x1">
                                                <img src="{{asset('client/img/news-img-1.jpg')}}" class="card-img-top object-fit-cover img-fluid" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-10 col-lg-8">
                                            <div class="news-article-body card-body">
                                                <h5 class="card-title fs-6 fw-medium text-uppercase text-truncate">
                                                    MeouShop giảm 16%
                                                    trang sức
                                                    kim cương dịp
                                                    20/10
                                                </h5>
                                                <p class="card-text">ừng ngày 20/10, MeouShop ưu đãi 16% khi mua
                                                    trang sức kim cương
                                                    trên toàn
                                                    cửa hàng tại TP HCM, Hà Nội cùng hệ thống online.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-2 col-lg-4">
                                            <div class="ratio ratio-1x1">
                                                <img src="{{asset('client/img/news-img-2.jpg')}}" class="card-img-top object-fit-cover img-fluid" alt="...">
                                            </div>
                                        </div>
                                        <div class="col-10 col-lg-8">
                                            <div class="news-article-body card-body">
                                                <h5 class="card-title fs-6 fw-medium text-uppercase text-truncate">
                                                    Những trang
                                                    sức sang
                                                    trọng
                                                    nâng tầm đẳng
                                                    cấp doanh nhân
                                                </h5>
                                                <p class="card-text">Bảo Tín Minh Châu ra mắt nhiều bộ trang sức
                                                    sang trọng, đáp
                                                    ứng xu
                                                    hướng
                                                    thời trang cùng ưu đãi đến 30% nhân ngày Doanh nhân Việt Nam.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection