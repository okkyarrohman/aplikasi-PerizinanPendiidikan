@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-title m-4">
                        <h4>Peryaratan Dokumen :</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-title m-4">
                        <h4>Form Pengajuan Peminjaman Fasilistas Pemerintah</h4>
                        <hr>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pemohon.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="parent d-flex w-100 bg-gray-100">
                                <div class="child-1">
                                    <div class="mb-2 m-5 w-75">
                                        <label for="exampleInputEmail1" class="form-label">Nama Pemohon</label>
                                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-2 m-5 w-75">
                                        <label for="exampleInputEmail1" class="form-label">Alamat Praktek</label>
                                        <input type="text" name="alamat_praktek" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-2 m-5 w-75">
                                        <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                                        <input type="number" name="telepon" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-2 m-5 w-75">
                                        <label for="exampleInputEmail1" class="form-label">Pas Foto</label>
                                        <input type="file" name="pas_foto" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="child-2">
                                    <div class="mb-2 m-5 w-75">
                                        <label for="exampleInputEmail1" class="form-label">Surat Pemohonan</label>
                                        <input type="file" name="surat_pemohonan" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>

                                    <div class="mb-2 m-5 w-75">
                                        <label for="exampleInputEmail1" class="form-label">KTP</label>
                                        <input type="file" name="ktp" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">

                                    </div>

                                    <div class="mb-2 m-5 w-75">
                                        <label for="exampleInputEmail1" class="form-label">Ijazah</label>
                                        <input type="file" name="ijazah" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">

                                    </div>

                                    <div class="mb-2 m-5 w-75">
                                        <label for="exampleInputEmail1" class="form-label">Surat Tanda Registrasi</label>
                                        <input type="file" name="surat_tanda_regist" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>

                                <div class="child-3">
                                    <div class="mb-2 m-5 w-75">
                                        <label for="exampleInputEmail1" class="form-label">Surat Persetujuan Kerja</label>
                                        <input type="file" name="surat_persetujuan_kerja" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">

                                    </div>

                                    <div class="mb-2 m-5 w-75">
                                        <label for="exampleInputEmail1" class="form-label">Surat Pernyataan Praktik</label>
                                        <input type="file" name="surat_pernyataan_praktik" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">

                                    </div>

                                    <div class="mb-2 m-5 w-75">
                                        <label for="exampleInputEmail1" class="form-label">Surat Rekomendasi Profesi</label>
                                        <input type="file" name="surat_rekomendasi_profesi" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">

                                    </div>

                                    <div class="mb-2 m-5 w-75">
                                        <label for="exampleInputEmail1" class="form-label">Surat Keterangan
                                            Praktek</label>
                                        <input type="file" name="surat_keterangan_praktek" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">

                                    </div>
                                </div>
                            </div>

                            <div class="parent-2 m-3 d-flex">
                                <div class="mb-3 m-5 w-50">
                                    <select id="disabledSelect" class="form-select" name="status_permohonan" hidden>
                                        <option value="Operator" selected>Operator</option>
                                        <option value="Checking Berkas">Check Berkas Verifikator</option>
                                    </select>
                                </div>
                            </div>
                            <div class="parent-3 m-3 d-inline-block w-100">
                                <button type="submit"
                                    class="btn btn-outline-primary w-100 justify-center align-items-center">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
