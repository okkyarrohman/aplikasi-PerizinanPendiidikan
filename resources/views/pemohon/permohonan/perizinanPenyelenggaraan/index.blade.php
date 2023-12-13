@extends('layouts.app-pemohon')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="group d-flex">
                    <div class="button-back mx-4">
                        <a href="{{ route('back') }}" class="btn btn-outline-secondary">Back</a>
                    </div>
                    <div class="text">
                        <h4>Permohonan Perizinan Pendirian</h4>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

        <div class="content">
            <div class="row">
                <div class="col-md-4 col-4 ">
                    <div class="card">
                        <div class="card-title m-4">
                            <a href="/pemohon/perizinanPenyelenggaraan/create_sd_smp">
                                <h6>Sekolah Dasar dan Menegah</h6>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-4">
                    <div class="card">
                        <div class="card-title m-4">
                            <a href="/pemohon/perizinanPenyelenggaraan/create_ptn_univ">
                                <h6>Perguruan Tinggi dan Universitas</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-4">
                    <div class="card">
                        <div class="card-title m-4">
                            <a href="/pemohon/perizinanPenyelenggaraan/create_lpp">
                                <h6>Lembaga Pelatihan Profesional</h6>
                            </a>
                        </div>
                    </div>
                </div>



                <div class="col-md-4 col-4">
                    <div class="card">
                        <div class="card-title m-4">
                            <a href="/pemohon/perizinanPenyelenggaraan/create_lpnp">
                                <h6>Lembaga Pendidikan Non-Pemerintah</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-4">
                    <div class="card">
                        <div class="card-title m-4">
                            <a href="/pemohon/perizinanPenyelenggaraan/create_ppo">
                                <h6>Pusah Pembelajaran Online</h6>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-4">
                    <div class="card">
                        <div class="card-title m-4">
                            <a href="/pemohon/perizinanPenyelenggaraan/create_lpts">
                                <h6>Lembaga Pendidikan Tinggi Swasta</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row d-flex">
                <div class="col-md-4 col-4">
                    <div class="card">
                        <div class="card-title m-4">
                            <a href="/pemohon/perizinanPenyelenggaraan/create_pklpk">
                                <h6>Pendidikan Khusus dan Lembaga Pelatihan Keterampilan</h6>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
