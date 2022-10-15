<!doctype html>
<html lang="en">

<head>

     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    @isset($category)
    <title>{{ $category->name }}</title>
    <meta name="title" content="{{ $category->name }}">
    <meta name="description" content="{{ $category->meta_desc }}">
    <meta name="keywords" content="{{ $category->keywords }}">
    @endisset
    @isset($tag)
    <title>{{ $tag->name }}</title>
    <meta name="title" content="{{ $tag->name }}">
    <meta name="description" content="{{ $tag->meta_desc }}">
    <meta name="keywords" content="{{ $tag->keywords }}">
    @endisset
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
        <header class="header_area">
            <nav class="navbar navbar-expand-lg menu_one menu_four menu_poss">
                <div class="container">
                    <a class="navbar-brand sticky_logo" href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo.png') }}" width="50px" height="40px"
                            alt="logo">
                            <img src="{{ asset('images/logo.png') }}" width="50px" height="40px" srcset="{{ asset('images/logo.png') }}" alt=""> </a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav menu w_menu ml-auto">
                            <li class="nav-item Active">
                                <a class="nav-link active" title="Pages"  aria-current="page" href="{{ route('home') }}">Home</a>
                              </li>
                              <li class="nav-item Active">
                                <a class="nav-link active" title="Pages"  aria-current="page" href="{{ route('profile') }}">Profile</a>
                              </li>
                              <li class="nav-item Active">
                                <a class="nav-link active" title="Pages"  aria-current="page" href="{{ route('galeri') }}">Galeri</a>
                              </li>
                              <li class="nav-item Active">
                                <a class="nav-link active" title="Pages"  aria-current="page" href="{{ route('post') }}">Blog</a>
                              </li>
                              <li class="nav-item Active">
                                <a class="nav-link active" title="Pages"  aria-current="page" href="{{ route('ekskul.index') }}">Ekskul</a>
                              </li>
                        </ul>
                        <div class="alter_nav">
                            <ul class="navbar-nav search_cart menu w_menu">

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <section class="breadcrumb_area">
            <img class="breadcrumb_shap" src="{{ asset('assets/img/breadcrumb/banner_bg.png') }}" alt="">
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">
                        @isset($category)
                        <h1 class="text-center my-3">Blog Category: {{ $category->name }}</h1>
                        @endisset
                        @isset($tag)
                        <h1 class="text-center text-white my-3">Blog Tag: {{ $tag->name }}</h1>
                        @endisset
                        @if (!isset($tag) && !isset($category))
                        <h1 class="text-center my-3">Blog</h1>
                        @endif
                    </h1>
                    {{-- <p class="f_400 w_color f_size_16 l_height26">Why I say old chap that is spiffing off his nut arse
                        pear shaped plastered<br> Jeffrey bodge barney some dodgy.!!</p> --}}
                </div>
            </div>
        </section>
        <section class="blog_area_two sec_pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 blog_grid_info">
                        <div class="row">
                            @foreach ($posts as $post)
                            <div class="col-lg-4">
                                <div class="blog_list_item blog_list_item_two">
                                    <a href="{{ asset('storage/'.$post->image) }}" class="post_date">
                                        <h2>14 <span>Jan</span></h2>
                                    </a>
                                    <img class="img-fluid" src="{{ asset('storage/'.$post->image) }}"   style="width: 340px;height:240px" alt="{{ asset('storage/images/blog/sekolah.jpg') }}"
                                            alt="">
                                    <div class="blog_content">
                                        <div class="text-secondary">
                                            <a href="#" class="post_time text-capitalize text-secondary">
                                                <i class="icon_clock_alt"></i>
                                                {{ Carbon\Carbon::parse($post->created_at)->isoformat('dddd, D MMMM Y') }}
                                        </div>
                                        <a href="{{ route('show', $post->slug) }}">
                                            <h5 class="blog_title">{{ $post->title }}</h5>
                                        </a>
                                        <div class="post-info-bottom">
                                            <a href="{{ route('show', $post->slug) }}" class="learn_btn_two">Read More <i
                                                    class="arrow_right"></i></a>
                                                    @foreach ($post->tags as $tags)
                                                    <a class="post-info-comments" href="{{ route('tag', $tags->slug) }}">
                                                        <span class="badge badge-secondary" style="font-size:14px;">{{ $tags->name }}</span>
                                                    </a>
                                                    @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <ul class="list-unstyled page-numbers shop_page_number text-left mt_30">
                            <br>
                            {{-- {{ $posts->links('vendor.pagination.custom') }} --}}
                        </ul>
                    </div>
                    {{-- <div class="col-lg-4">
                        <div class="blog-sidebar">
                            <div class="widget sidebar_widget search_widget_two">
                                <form action="#" class="search-form input-group">
                                    <input type="search" class="form-control widget_input" placeholder="Search">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>


                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
    </div>
    <footer class="footer_area_two" >
        <div class="footer_top_two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget company_widget pr_20 ">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.59087666387!2d106.82826081434277!3d-6.446541664829506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ea17500ae5cd%3A0xca3b71eeb2da951e!2sSekolah%20Menengah%20Pertama%20Islam%20Ar%20-%20Ridho!5e0!3m2!1sid!2sid!4v1655216217083!5m2!1sid!2sid" width="280" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <div class="f_widget about-widget">
                            <h3 class="f-title f_600 t_color2 f_size_18 mb_40">SMP ISLAM AR RIDHO</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('profile') }}">About</a></li>
                                <li><a href="{{ route('galeri') }}">Galeri</a></li>
                                <li><a href="{{ route('post') }}">Blog</a></li>
                                <li><a href="{{ route('ekskul.index') }}">Ekskul</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget">
                            <h3 class="f-title f_500 t_color2 f_size_18 mb_40">Tentang Sekolah</h3>
                            <p class="text-justify">
                                Situs web ini merupakan situs web resmi dari Sekolah SMP ISLAM AR RIDHO Depok. Hubungi sekolah kami di
                                Jl. Arido No.45, Jatimulya, Kec. Cilodong, Kota Depok, Jawa Barat 16413. Atau
                                bisa juga hubungi kami melalui menu Kontak yang tersedia dan media sosial terlampir.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget social_widget">
                            <h3 class="f-title f_600 t_color2 f_size_18 mb_40">Follow Us</h3>
                            <div class="f_social_icon">
                                <a href="#" class="ti-facebook"></a>
                                <a href="#" class="ti-twitter-alt"></a>
                                <a href="#" class="ti-vimeo-alt"></a>
                                <a href="#" class="ti-pinterest"></a>
                            </div>
                            <div class="widget-wrap">
                                <p class="f_400 f_p f_size_15 mb-0 l_height34"><span>Email:</span> <a
                                        href="mailto:yayangalvian@gmail.com" class="f_400">yayangalvian@gmail.com</a></p>
                                <p class="f_400 f_p f_size_15 mb-0 l_height34"><span>Phone:</span> <a
                                        href="tel:0218751912" class="f_400">+0218751912</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="mb-0 f_400"> <a href="#"  class="text-secondary"> Copyright © 2022 Desing by Pengabdian Masyarakat D'ants</a></p>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-unstyled f_menu text-right">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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

