@extends('layouts.app-pemohon')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card align-items-center">
                    <div class="card-header align-items-center">
                        <h4 class="card-title align-items-center">Form Pengajuan Permohonan Perizinan Penyelenggaraan
                            Lembaga Pelatihan Profesional
                        </h4>
                    </div>
                </div>
            </div>
            <form class="form form-vertical" method="POST" action="{{ route('penyelenggaraan.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <input type="hidden" name="tipe_dokumen" value="Pusat Pembelajaran Online"
                                                hidden>
                                            <input type="hidden" name="status_dokumen" value="Checking Berkas Operator"
                                                hidden>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Nama Lengkap</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="nama" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Email</label>
                                                    <input type="email" id="email-id-vertical" class="form-control"
                                                        name="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="contact-info-vertical">No Whatsapp</label>
                                                    <input type="number" id="contact-info-vertical" class="form-control"
                                                        name="telepon" placeholder="Mobile">
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
                                                        name="longtitude" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Latitude</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="latitude" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Lokasi Lengkap</label>
                                                    <textarea type="text" id="first-name-vertical" class="form-control" name="lokasi" placeholder="First Name"></textarea>
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
                                                    <label for="first-name-vertical">Dokumen Pendirian atau izin Operasi
                                                        Lembaga Pembelajaran Online</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="doc_pendirian" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Identitas Pemilik atau
                                                        Direktur Lembaga</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="identitas_pemilik" placeholder="First Name">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Kurikulum dan Deskripsi
                                                        Materi Pembelajaran</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="kurikulum" placeholder="First Name">
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
                                                    <label for="first-name-vertical">Dokumen Keuangan Lembaga</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="doc_keuangan" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Surat Izin dari Otorisasi Pendidikan
                                                        setempat atau badan terkait</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="surat_otorisasi" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Program Pembelajaran Online yang akan
                                                        Disediakan</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="program_akademik" placeholder="First Name">
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
