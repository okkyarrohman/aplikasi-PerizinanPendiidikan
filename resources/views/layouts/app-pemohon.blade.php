<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemohon - Tecnopolis</title>

    <link rel="shortcut icon" href="{{ asset('dashboard/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('dashboard/images/logo/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('dashboard/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/main/app-dark.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard/css/shared/iconly.css') }}">
    @stack('css')

</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="/home"><img src="{{ asset('images/logo.png') }}" width="25" height="25"
                                    alt="Logo"></a>
                        </div>
                        <div class="header-top-right">
                            <div class="permohonan dropdown">
                                <a href="#" id="topbarUserDropdown"
                                    class="user-dropdown d-flex align-items-center dropend dropdown-toggle "
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2">
                                        <img src="{{ asset('images/orang.png') }}" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">Persyaratan</h6>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg"
                                    aria-labelledby="topbarUserDropdown">
                                    <li><a class="dropdown-item" href="/pemohon/persyaratan/pendirian">Perizinan
                                            Pendirian</a></li>
                                    <li><a class="dropdown-item" href="/pemohon/persyaratan/penyelenggaraan">Perizinan
                                            Penyelenggaraan</a></li>

                                </ul>
                            </div>

                            <div class="permohonan dropdown">
                                <a href="#" id="topbarUserDropdown"
                                    class="user-dropdown d-flex align-items-center dropend dropdown-toggle "
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2">
                                        <img src="{{ asset('images/orang.png') }}" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">Permohonan</h6>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg"
                                    aria-labelledby="topbarUserDropdown">
                                    <li><a class="dropdown-item" href="/pemohon/permohonan/pendirian">Perizinan
                                            Pendirian</a></li>
                                    <li><a class="dropdown-item" href="/pemohon/permohonan/penyelenggaraan">Perizinan
                                            Penyelenggaraan</a></li>
                                </ul>
                            </div>

                            <div class="permohonan dropdown">
                                <a href="#" id="topbarUserDropdown"
                                    class="user-dropdown d-flex align-items-center dropend dropdown-toggle "
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2">
                                        <img src="{{ asset('images/orang.png') }}" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">History</h6>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg"
                                    aria-labelledby="topbarUserDropdown">
                                    <li><a class="dropdown-item" href="#">Perizinan Pendirian</a></li>
                                    <li><a class="dropdown-item" href="#">Perizinan Penyelenggaraan</a></li>
                                </ul>
                            </div>

                            <div class="chat mt-2">
                                <a href="/chatify">
                                    <h6>Chat</h6>
                                </a>
                            </div>

                            <div class="tracking mt-2">
                                <a href="/pemohon/tracking">
                                    <h6>Tracking</h6>
                                </a>
                            </div>







                            <div class="dropdown">
                                <a href="#" id="topbarUserDropdown"
                                    class="user-dropdown d-flex align-items-center dropend dropdown-toggle "
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2">
                                        <img src="{{ asset('images/orang.png') }}" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">{{ $user->name }}</h6>
                                        <p class="user-dropdown-status text-sm text-muted">Pemohon</p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg"
                                    aria-labelledby="topbarUserDropdown">
                                    <li><a class="dropdown-item" href="/data-pemohon">My Account</a></li>
                                    <li class="dropdown-item">
                                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" class="iconify iconify--system-uicons" width="20"
                                                height="20" preserveAspectRatio="xMidYMid meet"
                                                viewBox="0 0 21 21">
                                                <g fill="none" fill-rule="evenodd" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                                        opacity=".3"></path>
                                                    <g transform="translate(-210 -1)">
                                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                                        <path
                                                            d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                            <div class="form-check form-switch fs-6">
                                                <input class="form-check-input  me-0" type="checkbox"
                                                    id="toggle-dark">
                                                <label class="form-check-label"></label>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                role="img" class="iconify iconify--mdi" width="20"
                                                height="20" preserveAspectRatio="xMidYMid meet"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                                </path>
                                            </svg>
                                        </div>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li class="dropdown-item"><a href="" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
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
                    </div>
                </div>
            </header>

            <div class="content">
                @yield('content')
            </div>

        </div>
    </div>


    @stack('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('dashboard/js/bootstrap.js') }}"></script>
    <script src="{{ asset('dashboard/js/app.js') }}"></script>


    <script src="{{ asset('dashboard/js/pages/horizontal-layout.js') }}"></script>
    <script src="assets/js/pages/horizontal-layout.js"></script>

    <script src="{{ asset('dashboard/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/pages/dashboard.js') }}"></script>

    <footer class="footer absolute">
        @stack('footer')
    </footer>

    @if (Session::has('sukses_dikirim'))
        <script>
            swal({
                title: "Berhasil dikirim",
                text: "{!! Session::get('sukses_dikirim') !!}",
                icon: "{!! asset('pemohon/img/sukses.png') !!}",
                button: "Okay",
            })
        </script>
    @endif
</body>

</html>
