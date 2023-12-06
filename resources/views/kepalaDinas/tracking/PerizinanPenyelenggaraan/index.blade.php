@extends('layouts.app-kepalaDinas2')

@section('content')
    <div class="container">
        <div class="card">
            <div class="title d-flex m-4 justify-content-center align-items-center">
                <h2> Tracking Perizinan Penyelenggaraan</h2>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/kepala-dinas/tracking/penyelenggaraan/ttd_kepalaDinas_penyelenggaraan">
                            <h4>Tanda Tangan Kepala Dinas</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            <h4>80</h4>
                        </div>
                        <div class="next">
                            <a href="/kepala-dinas/tracking/penyelenggaraan/ttd_kepalaDinas_penyelenggaraan"
                                class="btn btn-primary">></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/kepala-dinas/tracking/pendirian/permohonan_selesai_pendirian">
                            <h4>Permohonan Selesai</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            <h4>80</h4>
                        </div>
                        <div class="next">
                            <a href="/kepala-dinas/tracking/pendirian/permohonan_selesai_pendirian"
                                class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
