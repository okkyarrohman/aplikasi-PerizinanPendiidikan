@extends('layouts.app-admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Persyaratan Perizinan Pendirian</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Pendirian TK</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Pendirian SD/SMP/SMA</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <ul class="list-item m-4">
                                    <li>Scan Surat permohonan</li>
                                    <li>Scan KTP penanggung Jawab</li>
                                    <li>Scan Surat keterangan domisili dari kepala desa/ lurah</li>
                                    <li>Susunan pengurus dan rincian tugas</li>
                                    <li>Scan Izin Mendirikan Bangunan</li>
                                    <li>Scan atas Hak Tanah (sertifikat/segel/akta jual tanah)</li>
                                    <li>Scan Akta Pendirian Badan Hukum yang telah disahkan</li>
                                    <li>Scan akta perubahan badan hukum yang telah disahkan (S&K berlaku)</li>
                                    <li>Rencana Induk Pengembangan TK(S&K berlaku)</li>
                                    <li>Rencana pencapaian standar penyelenggaraan</li>
                                    <li>Surat kuasa perizinan (S&K berlaku)</li>
                                    <li>Scan SK dan izin Operasional sebelumnya (S&K berlaku)</li>
                                    <li>Scan sertifikat keikutsertaan BPJS kesehatan</li>
                                    <li>Scan sertifikat keikutsertaan BPJS ketenagakerjaan</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <ul>
                                    <li>Surat permohonan</li>
                                    <li>Scan KTP penanggung Jawab</li>
                                    <li>Surat keterangan domisili penanggung jawab</li>
                                    <li>Scan sertifikat keikutsertaan BPJS kesehatan</li>
                                    <li>Scan sertifikat keikutsertaan BPJS ketenagakerjaan</li>
                                    <li>Gambar/denah tanah</li>
                                    <li>Foto gedung/bangunan (depan, kanan, kiri)</li>
                                    <li>Scan Akta Pendirian & Perubahan Badan Hukum yang telah disahkan/telah
                                        memiliki SK MENKUMHAM</li>
                                    <li>Scan Akta pendirian Cabang</li>
                                    <li>Scan Izin Mendirikan Bangunan tempat mendirikan usaha (Peruntukan
                                        Pendidikan)</li>
                                    <li>Scan atas Hak Tanah (sertifikat/segel/akta jual tanah)</li>
                                    <li>Surat persetujuan Kepala Desa/Lurah</li>
                                    <li>Surat persetujuan Camat untuk menguatkan</li>
                                    <li>Surat Kepemilikan tanah (jika bukan milik perorangan)/surat sewa selama 5
                                        tahun</li>
                                    <li>Pernyataan tunduk dan patuh pada peraturan yang berlaku</li>
                                    <li>Daftar peserta didik</li>
                                    <li>Daftar tenaga kerja kependidikan</li>
                                    <li>Daftar tenaga kerja non kependidikan</li>
                                    <li>Kurikulum / program kegiatan belajar</li>
                                    <li>Daftar sarana dan prasarana</li>
                                    <li>SK Daftar Penyelenggaraan Sekolah dari Yayasan</li>
                                    <li>Hasil Studi kelayakan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
