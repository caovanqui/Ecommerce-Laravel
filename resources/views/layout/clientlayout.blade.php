<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('client/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('client/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('client/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}" />
    <!-- <link rel="stylesheet" href="css/login.css"> -->
</head>

<body>
    <!-- @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif -->
    <div class="container-fluid ">
        <header class="header container">
            @include('layout.partial.header')
        </header>
    </div>
    @yield('content')
    <footer class="footer container-fluid">
        @include('layout.partial.footer')
    </footer>

    <!-- <script src="js/script.js"></script> -->
    <script src="{{ asset('client/js/jquery.min.js') }}"></script>
    <script src="{{ asset('client/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('client/js/angular.min.js') }}"></script>
    <script src="{{ asset('client/js/angular-route.min.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap.bundle.min.js') }}"></script>
    <!-- <script src="js/homeCtrl.js"></script> -->
    <script src="{{ asset('client/js/angular.js') }}"></script>
</body>
<script>
    $('.brand-slide-carousel').owlCarousel({
        loop: true,
        margin: 24,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 2,
            },
            576: {
                items: 3,
            },
            992: {
                items: 4,
            },
        }
    });
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>

</html>