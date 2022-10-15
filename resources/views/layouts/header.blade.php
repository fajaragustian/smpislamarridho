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
