@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card align-items-center">
                    <div class="card-header align-items-center">
                        <h4 class="card-title align-items-center">Form Pengajuan Permohonan Perizinan Penyelenggaraan Lembaga
                            Pendidikan Tinggi Swasta
                        </h4>
                    </div>
                </div>
            </div>
            <form class="form form-vertical">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Nama Lengkap</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="fname" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Email</label>
                                                    <input type="email" id="email-id-vertical" class="form-control"
                                                        name="email-id" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-info-vertical">No Whatsapp</label>
                                                    <input type="number" id="contact-info-vertical" class="form-control"
                                                        name="contact" placeholder="Mobile">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Longtitude</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="fname" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Latitude</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="fname" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Lokasi Lengkap</label>
                                                    <textarea type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="First Name"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan Surat permohonan</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="fname" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan KTP penanggung Jawab</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="fname" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan Surat keterangan domisili dari
                                                        kepala desa/ lurah</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="fname" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan atas Hak Tanah
                                                        (sertifikat/segel/akta jual tanah)</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="fname" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan Akta Pendirian Badan Hukum yang
                                                        telah disahkan</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="fname" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan akta perubahan badan hukum yang
                                                        telah disahkan (S&K berlaku)</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="fname" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card align-items-center">
                        <div class="card-footer d-inline-block w-100"">
                            <button type="submit"
                                class="btn btn-primary w-100 justify-center align-items-center">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
