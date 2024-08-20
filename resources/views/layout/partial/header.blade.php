<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}"><img class="header-logo" src="{{ asset ('client/img/logo.png') }}" alt="" width=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a ng-class="{'active': isActive('/home') || isActive('/')}" class="nav-link nav-hover small-12 me-2 fw-lighter" aria-current="page" href="{{ route('home') }}">TRANG
                        CHỦ</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a ng-class="{'active': isActive('/product/all') || isActive('/product/1') || isActive('/product/2') || isActive('/product/3') || isActive('/product/4')}" class="nav-link nav-hover small-12 me-2 fw-lighter dropdown-toggle" aria-current="page" href="#!product" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SẢN PHẨM
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('product') }}">Tất cả sản
                                    phẩm</a></li>
                            <li><a class="dropdown-item" href="#">Nhẫn</a></li>
                            <li><a class="dropdown-item" href="#">Vòng tay</a></li>
                            <li><a class="dropdown-item" href="#">Dây chuyển</a></li>
                            <li><a class="dropdown-item" href="#">Bông tai</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-hover small-12 me-2 fw-lighter" href="">VỀ CHÚNG TÔI</a>
                </li>
                <li class="nav-item">
                    <a ng-class="{'active': isActive('/contact')}" class="nav-link nav-hover small-12 me-2 fw-lighter" href="{{ route('contact') }}">LIÊN HỆ</a>
                </li>
                <li class="nav-item">
                    <a ng-class="{'active': isActive('/news')}" class="nav-link nav-hover small-12 me-2 fw-lighter" href="{{ route('news') }}">TIN TỨC</a>
                </li>
                <div class="hstack gap-3 gap-lg-1">
                    <li class="nav-item">
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                        <!-- Modal -->
                        <form action="{{ route('product')}}" method="get">
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tìm kiếm</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="search" name="keyword" class="form-control" placeholder="Tìm kiếm sản phẩm">
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" data-bs-dismiss="modal" class="btn btn-secondary" value="Search">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                    @if (Auth::check())
                    <ul class="navbar-nav ms-auto">
                        <div class="dropdown">
                            <a href="" class="nav-link dropdown-toggle d-flex align-items-center gap-2" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('uprofile')}}">Thông tin hồ sơ</a></li>
                                <li><a class="dropdown-item" href="#">Trợ giúp</a></li>
                                @if (Auth::user()->role == 1)
                                <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Admin</a></li>
                                @endif
                                <li>
                                    <!-- <a class="dropdown-item" href="#">Đăng Xuất</a> -->
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Đăng Xuất</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </ul>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="fa-solid fa-user"></i>
                        </a>
                    </li>
                    @endif
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="fa-solid fa-user"></i>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link position-relative header-fa-cart" href="{{ route('viewCart') }}">
                            <!-- <i class="fa-solid fa-cart-shopping "></i> -->
                            <!-- <i class="fa-solid fa-cart-shopping fa-bounce"></i> -->
                            @if(session('cart') && count(session('cart')) > 0)
                            <i class="fa-solid fa-cart-shopping fa-bounce"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-black">
                                {{ count(session('cart')) }}
                                <span class="visually-hidden">unread messages</span>
                            </span>
                            @else
                            <i class="fa-solid fa-cart-shopping"></i>
                            @endif
                        </a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>