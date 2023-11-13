<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TecnoPolis</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/landingpages.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ asset('dashboard/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('dashboard/images/logo/favicon.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('dashboard/extensions/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/extensions/quill/quill.bubble.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard/css/shared/iconly.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard/extensions/filepond/filepond.css') }}">
    <link rel="stylesheet"
        href="{{ asset('dashboard/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/extensions/toastify-js/src/toastify.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/pages/filepond.css') }}">
</head>

<body>
    <div class="frame-0 shadow-lg">
        <div class="div">
            <img class="img" src="{{ asset('images/logo.png') }}" />
            <div class="div-2">
                <div class="text-wrapper">Beranda</div>
                <div class="text-wrapper">Tentang</div>
                <div class="text-wrapper">Persyaratan</div>
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/home') }}" class="btn btn-primary">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-warning">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="frame-1">
        <div class="div">
            <div class="text-wrapper">TECHNOPOLIS</div>
            <p class="p">
                Aplikasi layanan perizinan dibidang pendidikan berbasis mobile dan website yang bertujuan untuk membantu
                para
                masyarakat di Kota Surabaya untuk melakukan permohonan perizinan dibidang pendidikan secara online, bisa
                di
                mana saja dan kapan saja.
            </p>
        </div>
        <button class="button">
            <div class="btn btn-warning">Daftar Sekarang</div>
        </button>
    </div>

    <br>

    <div class="frame">
        <img class="img" src="{{ asset('images/frame-1.png') }}" />
        <div class="div">
            <div class="div-2">
                <div class="text-wrapper">
                    <h5>VISI</h5>
                </div>
                <p class="p">
                    Menjadi perusahaan yang terdepan dan terpercaya dalam pengembangan website dan aplikasi mobile
                    yang
                    inovatif, berkualitas, dan memberikan solusi terbaik bagi klien.
                </p>
            </div>
            <div class="div-3">
                <div class="text-wrapper-2">
                    <h5>MISI</h5>
                </div>
                <p class="memberikan-layanan">
                    Memberikan layanan pengembangan website dan aplikasi mobile yang berkualitas daninovatif untuk
                    memenuhi
                    kebutuhan klien. <br />Menjalin kerja sama yang kuat dengan klien dan pihak terkait untuk
                    memastikan
                    kepuasan klien dan keberhasilan proyek. <br />Meningkatkan profitabilitas perusahaan dengan
                    pertumbuhan yang
                    berkelanjutan dan memberikan manfaat bagi seluruh stakeholder.
                </p>
            </div>
        </div>
    </div>



    <script src="{{ asset('dashboard/js/bootstrap.js') }}"></script>
    <script src="{{ asset('dashboard/js/app.js') }}"></script>

    <!-- Need: Apexcharts -->
    <script src="{{ asset('dashboard/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('dashboard/extensions/quill/quill.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/pages/quill.js') }}"></script>

    <script src="{{ asset('dashboard/extensions/filepond/filepond.js') }}"></script>
    <script src="{{ asset('dashboard/extensions/toastify-js/src/toastify.js') }}"></script>
    <script src="{{ asset('dashboard/js/pages/filepond.js') }}"></script>
</body>

</html>
