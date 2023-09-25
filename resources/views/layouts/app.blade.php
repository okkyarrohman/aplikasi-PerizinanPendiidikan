<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template-assets/css/main/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('template-assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('tempalte-assets/images/logo/favicon.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('template-assets/css/shared/iconly.css') }}">

    <!-- Scripts -->
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    @stack('css')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <nav class="main-navbar d-flex">
                        <div class="container d-flex">
                            @include('layouts.components.sideBar-pemohon')
                        </div>
                    </nav>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
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
                            <div class="header-top-right">
                                <div class="dropdown">
                                    <a href="#" id="topbarUserDropdown"
                                        class="user-dropdown d-flex align-items-center dropend dropdown-toggle "
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="text">
                                            <h6 class="user-dropdown-name">{{ Auth::user()->name }}</h6>
                                            <p class="user-dropdown-status text-sm text-muted">
                                                {{ Auth::user()->role }}
                                            </p>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end shadow-lg"
                                        aria-labelledby="topbarUserDropdown">
                                        <li><a class="dropdown-item" href="#">My Account</a></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Burger button responsive -->
                                <a href="#" class="burger-btn d-block d-xl-none">
                                    <i class="bi bi-justify fs-3"></i>
                                </a>
                            </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('script')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('template-assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('template-assets/js/app.js') }}"></script>
    <script src="{{ asset('template-assets/js/pages/horizontal-layout.js') }}"></script>
    <script src="{{ asset('template-assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('template-assets/js/pages/dashboard.js') }}"></script>
</body>

</html>
