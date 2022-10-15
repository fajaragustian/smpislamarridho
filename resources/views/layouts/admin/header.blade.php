	<!--start header -->
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand">
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                </div>
                <div class="search-bar flex-grow-1">
                </div>
                <div class="user-box dropdown">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @if ($admin->image === null )
                        <img src="https://avatar.oxro.io/avatar.svg?name={{ $admin->name }}&caps=3&bold=true" class="user-img">
                         @else
                         <img src="{{ Storage::url($admin->image) }}" alt="" class="user-img" width="110" height="110">
                         @endif
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">{{ $admin->name }}</p>
                            <p class="designattion mb-0">{{ $admin->position }}</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="bx bx-user"></i><span>Profile</span></a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"><i class='bx bx-log-out-circle'></i>
                             {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--end header -->
