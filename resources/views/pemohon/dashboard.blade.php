@extends('layouts.app-pemohon')

@push('css')
@endpush
@section('content')
    <div class="content-1">
        <div class="text">
            <h3>TECNOPOLIS</h3>
            <p>Aplikasi layanan perizinan dibidang pendidikan berbasis mobile dan website yang bertujuan untuk membantu
                para masyarakat di Kota Surabaya untuk melakukan permohonan perizinan dibidang pendidikan secara online,
                bisa di mana saja dan kapan saja.</p>
            <button class="btn btn-warning">Daftar Sekarang</button>
        </div>
        <div class="gambar">
            <img src="{{ asset('images/logo.png') }}" alt="" width="200" height="200">
        </div>
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


    <div class="frame-3">
        <div class="overlap-group">
            <div class="frame-wrapper">
                <div class="div-wrapper">
                    <p class="text-wrapper">©Technopolis 2023. Hak Cipta Dilindungi Oleh Undang-undang</p>
                </div>
            </div>
            <div class="div">
                <div class="div-2">
                    <img class="img" src="img/frame.svg" />
                    <div class="div-3">
                        <div class="div-4">
                            <div class="text-wrapper-2">Pelajari</div>
                        </div>
                        <div class="div-wrapper">
                            <div class="text-wrapper-3">Tentang</div>
                        </div>
                        <div class="div-wrapper">
                            <div class="text-wrapper-3">Berita</div>
                        </div>
                    </div>
                    <div class="div-5">
                        <div class="div-wrapper-2">
                            <div class="text-wrapper-4">Ikuti Kami</div>
                        </div>
                        <div class="div-4">
                            <img class="image" src="{{ asset('images/ig.png') }}" />
                            <div class="text-wrapper-5">technopolis</div>
                        </div>
                        <div class="div-4">
                            <img class="group-2" src="{{ asset('images/yt.png') }}" />
                            <div class="text-wrapper-5">technopolis</div>
                        </div>
                        <div class="div-4">
                            <img class="image" src="{{ asset('images/fb.png') }}" />
                            <div class="text-wrapper-5">technopolis</div>
                        </div>
                        <div class="div-4">
                            <img class="group-2" src="{{ asset('images/linkedin.png') }}" />
                            <div class="text-wrapper-5">technopolis</div>
                        </div>
                    </div>
                    <div class="div-6">
                        <div class="div-4">
                            <div class="text-wrapper-2">Hubungi Kami</div>
                        </div>
                        <div class="div-7">
                            <div class="iconly-bulk-message"></div>
                            <div class="text-wrapper-5">technopolisgmail.com</div>
                        </div>
                        <div class="div-7">
                            <div class="iconly-bulk-call"></div>
                            <div class="text-wrapper-5">082277770000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
