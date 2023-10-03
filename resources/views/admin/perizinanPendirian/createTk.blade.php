@extends('layouts.app-admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card align-items-center">
                    <div class="card-header align-items-center">
                        <h4 class="card-title align-items-center">Form Pengajuan Permohonan Perizinan Pendirian TK</h4>
                    </div>
                </div>
            </div>
            <form class="form" method="POST" action="{{ route('store.tk') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <input type="hidden" name="tipe_dokumen" value="Perizinan Pendirian TK" hidden>
                                            <input type="hidden" name="status_dokumen" value="Checking Berkas" hidden>
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
                                                    <textarea type="lokasi" id="first-name-vertical" class="form-control" name="lokasi" placeholder="First Name"></textarea>
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
                    <div class="col-md-4 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan Surat permohonan</label>
                                                    <input type="file" id="first-name-vertical"
                                                        class="form-control @error('surat_permohonan') is-invalid @enderror"
                                                        name="surat_permohonan" placeholder="First Name" accept="pdf*/">
                                                    @error('surat_permohonan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan KTP penanggung Jawab</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="ktp" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan Surat keterangan domisili dari
                                                        kepala desa/ lurah</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="suket_domisili" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Susunan pengurus dan rincian
                                                        tugas</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="pengurus" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan Izin Mendirikan Bangunan</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="suket_mendirikan" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
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
                                                        name="suket_tanah" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan Akta Pendirian Badan Hukum yang
                                                        telah disahkan</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="suket_pbh" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan akta perubahan badan hukum yang
                                                        telah disahkan (S&K berlaku)</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="suket_perubahanPBH" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Rencana Induk Pengembangan TK(S&K
                                                        berlaku)</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="suket_rip" placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Rencana pencapaian standar
                                                        penyelenggaraan</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="suket_psp" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Surat kuasa perizinan (S&K
                                                        berlaku)</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="sukas_perizinan" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan SK dan izin Operasional
                                                        sebelumnya (S&K berlaku)</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="sk_izinOperasional" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan sertifikat keikutsertaan BPJS
                                                        kesehatan</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="sertif_bpjs_sehat" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Scan sertifikat keikutsertaan BPJS
                                                        ketenagakerjaan</label>
                                                    <input type="file" id="first-name-vertical" class="form-control"
                                                        name="sertif_bpjs_kerja" placeholder="First Name">
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
@endsection
