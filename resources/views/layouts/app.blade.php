<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/nice-select/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-selector/css/bootstrap-select.min.css')}}">
    <!--icon font css-->
    <link rel="stylesheet" href="{{asset('assets/vendors/themify-icon/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/animation/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/magnify-pop/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/elagent/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/scroll/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    @stack('css')
</head>
<body>
    <div class="body_wrapper">
        @include('layouts.header')
        @yield('content')
    </div>
    @include('layouts.footer')
  {{-- <form class="search_boxs" role="search">
        <div class="search_box_inner">
            <div class="close_icon">
                <i class="icon_close"></i>
            </div>
            <div class="input-group">
                <input type="text" name="search" class="form_control search-input" placeholder="Recipient's username"
                    autofocus>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button"><i class="icon_search"></i></button>
                </div>
            </div>
        </div>
    </form> --}}
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/propper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-selector/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/sckroller/jquery.parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{ asset('assets/vendors/magnify-pop/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/scroll/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
    @stack('scripts')
</body>

</html>

