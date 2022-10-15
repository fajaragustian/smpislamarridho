<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('images/logo.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h6 style="font-size: 12px;" class="logo-text">SMP ISLAM AR RIDHO</h6>
        </div>
        <div class="toggle-icon ms-auto"><i class="bx bx-caret-left"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">Content</li>
        <li>
            <a href="{{ route('admin.categories.index') }}">
                <div class="parent-icon"><i class="bx bx-unite"></i>
                </div>
                <div class="menu-title">Manajement Category</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.organitation.index') }}">
                <div class="parent-icon"><i class="bx bx-shape-polygon"></i>
                </div>
                <div class="menu-title">Manajement Organitation</div>
            </a>
        </li>
        <li>
            <a class="has-arrow">
                <div class="parent-icon"><i class="bx bx-calendar-week"></i>
                </div>
                <div class="menu-title">Blog</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.post.index') }}"><i class="bx bx-message-square-detail"></i>Manajement
                        Post</a>
                <li> <a href="{{ route('admin.post.trash') }}"><i class="bx bx-message-square-detail"></i>Manajement
                        Post Trash</a>
                <li> <a href="{{ route('admin.tag.index') }}"><i class="bx bx-message-square-detail"></i>Manajement
                        Tag</a>
            </ul>
        </li>
        <li>
            <a class="has-arrow">
                <div class="parent-icon"><i class="bx bx-layer-plus"></i>
                </div>
                <div class="menu-title">Ekstrakulikuller</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.galeri.index') }}"><i class="bx bx-message-square-detail"></i>Manajement
                        Galeri</a>
                <li> <a href="{{ route('admin.ekskul.index') }}"><i class="bx bx-message-square-detail"></i>Manajement
                        Ekstrakulikuler</a>
                <li> <a href="{{ route('admin.user.index') }}"><i class="bx bx-message-square-detail"></i>Manajement
                        User Ekstrakulikuler</a>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-bar-chart-alt-2"></i>
                </div>
                <div class="menu-title">Laporan</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.cetak.user') }}"><i class="bx bx-message-square-detail"></i>Laporan User
                        Ekskul</a>
            </ul>
        </li>


        <li class="menu-label">Auth</li>
        <li>
            <a href="{{ route('admin.profile') }}">
                <div class="parent-icon"><i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">User Profile</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
