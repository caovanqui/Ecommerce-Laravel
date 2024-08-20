<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"
        integrity="sha512-X/RSQYxFb/tvuz6aNRTfKXDnQzmnzoawgEQ4X8nZNftzs8KFFH23p/BA6D2k0QCM4R0sY1DEy9MIY9b3fwi+bg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"
        integrity="sha512-f28cvdA4Bq3dC9X9wNmSx21rjWI+5piIW/uoc2LuQ67asKxfQjUow2MkcCNcfJiaLrHcGbed1wzYe3dlY4w9gA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('admin/css/app.css')}}" />
</head>

<body>
    <div id="page-container" class="d-flex flex-column ms-auto w-100 sidebar-o side-trans-enable main-content-narrow">
        <!-- SIDEBAR  -->
        <div id="sidebar" class="position-fixed z-4 top-0 bottom-0 start-0 h-100 bg-white w-100 shadow-sm">
            <div class="sidebar-header bg-primary">
                <div class="side-header-content px-3 w-250 d-flex justify-content-between align-items-center">
                    <a href="" class="sidebar-header-logo">
                        <img src="{{asset('admin/img/logo.png')}}" alt="" width="100px" />
                    </a>
                    <div class="sidebar-header-btn d-flex align-items-center gap-2">
                        <button type="button"
                            class="d-lg-none p-1 bg-secondary border-third d-flex align-items-center justify-content-center border border-2 rounded-2">
                            <ion-icon class="text-primary fs-6" name="close"></ion-icon>
                        </button>
                        <button type="button"
                            class="p-1 bg-secondary border-third d-flex align-items-center justify-content-center border border-2 rounded-2">
                            <ion-icon class="text-primary fs-6" name="moon-outline"></ion-icon>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="side-nav p-3 d-flex flex-column gap-2 overflow-y">
                <li class="side-nav-item list-group-item">
                    <div
                        class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center cursor hover-item active-navbar">
                        <ion-icon class="text-primary fs-5" name="rocket"></ion-icon>
                        <span class="fs-6 fw-medium">Dashboard</span>
                    </div>
                </li>
                <div class="accordion" id="accordionExample">
                    <li class="side-nav-item list-group-item" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne-category" aria-expanded="false"
                        aria-controls="collapseOne-category">
                        <div
                            class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center jus cursor hover-item">
                            <ion-icon class="text-primary fs-5" name="list"></ion-icon>
                            <span class="fs-6 fw-medium">Category</span>
                        </div>
                        <div id="collapseOne-category" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="gap-3 d-flex flex-column">
                                    <li>
                                        <a class="text-decoration-none hover-list text-dark fw-medium" href="{{route('admin.categories')}}">
                                            Category List</a>
                                    </li>
                                    <li>
                                        <a class="text-decoration-none hover-list text-dark fw-medium" href="{{route('admin.showAddCategoryForm')}}">
                                            Category Add</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="side-nav-item list-group-item" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne-product" aria-expanded="false" aria-controls="collapseOne-product">
                        <div
                            class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center jus cursor hover-item">
                            <ion-icon class="text-primary fs-5" name="layers"></ion-icon>
                            <span class="fs-6 fw-medium">Products</span>
                        </div>
                        <!-- Menu cấp 2 -->
                        <div id="collapseOne-product" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="gap-3 d-flex flex-column">
                                    <li>
                                        <a class="text-decoration-none hover-list text-dark fw-medium" href="{{route('admin.productlist')}}">
                                            Product List</a>
                                    </li>
                                    <li>
                                        <a class="text-decoration-none hover-list text-dark fw-medium" href="{{route('admin.showAddProductForm')}}">
                                            Product Add</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="side-nav-item list-group-item" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne-blog" aria-expanded="false" aria-controls="collapseOne-blog">
                        <div
                            class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center jus cursor hover-item">
                            <ion-icon class="text-primary fs-5" name="albums"></ion-icon>
                            <span class="fs-6 fw-medium">Blog</span>
                        </div>
                        <!-- Menu cấp 2 -->
                        <div id="collapseOne-blog" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="gap-3 d-flex flex-column">
                                    <li>
                                        <a class="text-decoration-none hover-list text-dark fw-medium" href="">
                                            Blog List</a>
                                    </li>
                                    <li>
                                        <a class="text-decoration-none hover-list text-dark fw-medium" href="">
                                            Blog Add</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="side-nav-item list-group-item" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne-user" aria-expanded="false" aria-controls="collapseOne-user">
                        <div
                            class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center jus cursor hover-item">
                            <ion-icon class="text-primary fs-5" name="people"></ion-icon>
                            <span class="fs-6 fw-medium">User</span>
                        </div>
                        <!-- Menu cấp 2 -->
                        <div id="collapseOne-user" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="gap-3 d-flex flex-column">
                                    <li>
                                        <a class="text-decoration-none hover-list text-dark fw-medium" href="">
                                            User List</a>
                                    </li>
                                    <li>
                                        <a class="text-decoration-none hover-list text-dark fw-medium" href="">
                                            User Add</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="side-nav-item list-group-item" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne-role" aria-expanded="false" aria-controls="collapseOne-role">
                        <div
                            class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center jus cursor hover-item">
                            <ion-icon class="text-primary fs-5" name="person"></ion-icon>
                            <span class="fs-6 fw-medium">Role</span>
                        </div>
                        <!-- Menu cấp 2 -->
                        <div id="collapseOne-role" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="gap-3 d-flex flex-column">
                                    <li>
                                        <a class="text-decoration-none hover-list text-dark fw-medium" href="">
                                            Role List</a>
                                    </li>
                                    <li>
                                        <a class="text-decoration-none hover-list text-dark fw-medium" href="">
                                            Role Add</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </div>

                <li class="side-nav-item list-group-item">
                    <div
                        class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center jus cursor hover-item">
                        <ion-icon class="text-primary fs-5" name="bag-handle"></ion-icon>
                        <span class="fs-6 fw-medium">Order</span>
                    </div>
                </li>
                <li class="side-nav-item list-group-item">
                    <div
                        class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center jus cursor hover-item">
                        <ion-icon class="text-primary fs-5" name="chatbox-ellipses"></ion-icon>
                        <span class="fs-6 fw-medium">Comment</span>
                    </div>
                </li>

                <li class="side-nav-item list-group-item">
                    <div
                        class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center jus cursor hover-item">
                        <ion-icon class="text-primary fs-5" name="settings"></ion-icon>
                        <span class="fs-6 fw-medium">Setting</span>
                    </div>
                </li>
                <li class="side-nav-item list-group-item">
                    <div
                        class="side-nav-item-content p-2 rounded-2 d-flex gap-3 align-items-center jus cursor hover-item">
                        <ion-icon class="text-primary fs-5" name="log-out"></ion-icon>
                        <span class="fs-6 fw-medium">Logout</span>
                    </div>
                </li>
            </ul>
        </div>
        <!-- HEADER  -->
        
        <!-- HEADER  -->
        <header id="page-header" class="w-auto position-fixed top-0 start-0 end-0 z-3">
            <div
                class="page-header-content bg-white shadow-sm d-flex justify-content-between align-items-center mx-auto px-3">
                <div class="d-flex gap-2">
                    <button type="button" class="d-lg-none d-flex align-items-center justify-content-center">
                        <ion-icon
                            class="text-primary bg-secondary border-third fs-5 border p-2 border-2 rounded-2 hydrated"
                            name="grid" role="img"></ion-icon>
                    </button>
                    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0" placeholder="Search for"
                                aria-label="Search" aria-describedby="basic-addon2" />
                            <div class="input-group-text border-0">
                                <button class="btn btn-primary d-flex align-items-center justify-content-center"
                                    type="button">
                                    <ion-icon class="text-white" name="search"></ion-icon>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav ms-auto">
                    <div class="dropdown">
                        <a href="" class="nav-link dropdown-toggle d-flex align-items-center gap-2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span>Văn Quí</span>
                            <img src="{{asset('admin/img/about-profile.png')}}" class="rounded-circle" width="30" /></a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </div>
                </ul>
            </div>
        </header>

        
        @yield('content')



        <!-- FOOTER  -->
        <footer id="admin-footer" class="ms-auto align-items-center bg-secondary">
            <div class="admin-footer-content p-3 d-flex justify-content-between align-items-center">
                <span class="fs-6">
                    <span class="fw-medium text-primary">MeouShop</span>
                    © 2024</span>
                <span class="fs-6">By WenWi</span>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="
    https://cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js
    "></script>
    <link href="
    https://cdn.jsdelivr.net/npm/wowjs@1.1.3/css/libs/animate.min.css
    " rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
        integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/js/owl.js')}}"></script>
    <script src="{{asset('admin/js/wow.js')}}"></script>
    <script src="{{asset('admin/js/admin.js')}}"></script>
</body>

</html>