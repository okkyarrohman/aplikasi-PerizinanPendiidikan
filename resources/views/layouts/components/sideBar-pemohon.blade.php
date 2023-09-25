{{-- Side Bar Start --}}
<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Account</li>
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                    <h6 class="user-dropdown-name">{{ Auth::user()->name }}</h6>
                </a>

                <ul class="submenu">
                    <li class="submenut-item"><a href="/data-pemohon" class="sidebar-link">My Account</a></li>
                    <li class="submenut-item"><a href="" class="sidebar-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>


        @endguest

        <br>
        <li class="sidebar-title">Menu</li>
        <li class="sidebar-item active ">
            <a href="/pemohon" class='sidebar-link'>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="/tracking" class='sidebar-link'>
                <span>Ajukan Permohonan</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="/pemohon/izin-pendirian" class='sidebar-link'>
                        <span>Permohonan Perizinan Pendirian</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/pemohon/izin-penyelenggaraan" class='sidebar-link'>
                        <span>Permohonan Perizinan Penyelenggaraan</span>
                    </a>
                </li>
                <li class="submenu-item ">
                    <a href="/pemohon/pinjam-fasilitas" class='sidebar-link'>
                        <span>Permohonan Peminjaman Fasilitas Pemerintah</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="/tracking" class='sidebar-link'>
                <span>Tracking Permohonan</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="/tracking" class='sidebar-link'>
                        <span>Status Perizinan</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item  ">
            <a href="/chatify" class='sidebar-link'>
                <span>Chat Admin</span>
            </a>
        </li>

    </ul>
</div>
