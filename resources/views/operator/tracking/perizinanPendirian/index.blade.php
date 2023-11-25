@extends('layouts.app-operator')

@section('content')
    <div class="container">
        <div class="card">
            <div class="title d-flex m-4 justify-content-center align-items-center">
                <h2> Tracking Perizinan</h2>
            </div>
        </div>
        <br>


        <div class="TK">
            <div class="row m-2">
                <div class="title">
                    <h3>Pendirian TK</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-lg">
                        <div class="title-card m-4">
                            <a href="/operator/tracking/pendirian/checking_berkas_pendirian">
                                <h4>Checking Berkas Operator</h4>
                            </a>
                        </div>
                        <div class="group d-flex m-4 justify-content-lg-around">
                            <div class="jumlah">
                                <h4>80</h4>
                            </div>
                            <div class="next">
                                <a href="/operator/tracking/pendirian/checking_berkas_pendirian"
                                    class="btn btn-primary">></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-lg">
                        <div class="title-card m-4">
                            <a href="/operator/tracking/pendirian/dokumen_valid_pendirian">
                                <h4>Dokumen Valid</h4>
                            </a>
                        </div>
                        <div class="group d-flex m-4 justify-content-lg-around">
                            <div class="jumlah">
                                <h4>80</h4>
                            </div>
                            <div class="next">
                                <a href="/operator/tracking/pendirian/dokumen_valid_pendirian"
                                    class="btn btn-primary">-></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-lg">
                        <div class="title-card m-4">
                            <a href="/operator/tracking/pendirian/dokumen_tidak_valid_pendirian">
                                <h4>Dokumen Tidak Valid</h4>
                            </a>
                        </div>
                        <div class="group d-flex m-4 justify-content-lg-around">
                            <div class="jumlah">
                                <h4>80</h4>
                            </div>
                            <div class="next">
                                <a href="/operator/tracking/pendirian/dokumen_tidak_valid_pendirian"
                                    class="btn btn-primary">-></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="SD/SMP/SMA">
            <div class="row m-2">
                <div class="title">
                    <h3>Pendirian SD/SMP/SMA</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-lg">
                        <div class="title-card m-4">
                            <h4>Checking Berkas Operator</h4>
                        </div>
                        <div class="group d-flex m-4 justify-content-lg-around">
                            <div class="jumlah">
                                <h4>80</h4>
                            </div>
                            <div class="next">
                                <a href="#" class="btn btn-primary">></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-lg">
                        <div class="title-card m-4">
                            <h4>Dokumen Valid</h4>
                        </div>
                        <div class="group d-flex m-4 justify-content-lg-around">
                            <div class="jumlah">
                                <h4>80</h4>
                            </div>
                            <div class="next">
                                <a href="#" class="btn btn-primary">-></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-lg">
                        <div class="title-card m-4">
                            <h4>Dokumen Tidak Valid</h4>
                        </div>
                        <div class="group d-flex m-4 justify-content-lg-around">
                            <div class="jumlah">
                                <h4>80</h4>
                            </div>
                            <div class="next">
                                <a href="#" class="btn btn-primary">-></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
