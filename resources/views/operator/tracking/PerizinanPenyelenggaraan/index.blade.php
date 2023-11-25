@extends('layouts.app-operator')

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
                        <a href="/operator/tracking/penyelenggaraan/checking_berkas_penyelenggaraan">
                            <h4>Checking Berkas Operator</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            <h4>80</h4>
                        </div>
                        <div class="next">
                            <a href="/operator/tracking/penyelenggaraan/checking_berkas_penyelenggaraan"
                                class="btn btn-primary">></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/operator/tracking/penyelenggaraan/dokumen_valid_penyelenggaraan">
                            <h4>Dokumen Valid</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            <h4>80</h4>
                        </div>
                        <div class="next">
                            <a href="/operator/tracking/penyelenggaraan/dokumen_valid_penyelenggaraan"
                                class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/operator/tracking/penyelenggaraan/dokumen_tidak_valid_penyelenggaraan">
                            <h4>Dokumen Tidak Valid</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            <h4>80</h4>
                        </div>
                        <div class="next">
                            <a href="/operator/tracking/penyelenggaraan/dokumen_tidak_valid_penyelenggaraan"
                                class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
