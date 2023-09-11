@extends('layouts.app-operator')

@section('content')
    <form action="{{ route('operator.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="parent d-flex w-100 bg-gray-100">
            <div class="child-1">
                <input type="hidden" name="id" value="{{ $perizinan->id }}">

                <div class="mb-2 m-5 w-75">
                    <label for="exampleInputEmail1" class="form-label">nama</label>
                    <input type="text" value="{{ old('nama', $perizinan->nama) }}" name="nama" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
                </div>

                <div class="mb-2 m-5 w-75">
                    <label for="exampleInputEmail1" class="form-label">Alamat Praktek</label>
                    <input type="text" value="{{ old('nama', $perizinan->alamat_praktek) }}" name="alamat_praktek"
                        class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
                </div>

                <div class="mb-2 m-5 w-75">
                    <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                    <input type="number" value="{{ old('nama', $perizinan->telepon) }}" name="telepon" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
                </div>

                <div class="mb-2 m-5 w-75">
                    <label for="exampleInputEmail1" class="form-label">Pas Foto</label>
                    <input type="file" name="pas_foto" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" disabled>
                </div>
            </div>

            <div class="child-2">
                <div class="mb-2 m-5 w-75">
                    <label for="exampleInputEmail1" class="form-label">Surat Pemohonan</label>
                    <br>
                    <a href="/download-surat-pemohonan/{{ $perizinan->id }}">Download Surat</a>
                </div>

                <div class="mb-2 m-5 w-50">
                    <label for="exampleInputEmail1" class="form-label">KTP</label>
                    <br>
                    <a href="/download-ktp/{{ $perizinan->id }}">download ktp</a>
                </div>

                <div class="mb-2 m-5 w-50">
                    <label for="exampleInputEmail1" class="form-label">Ijazah</label>
                    <br>
                    <a href="/download-ijazah/{{ $perizinan->id }}">Download ijazah</a>
                </div>

                <div class="mb-2 m-5 w-50">
                    <label for="exampleInputEmail1" class="form-label">Surat Tanda Registrasi</label>
                    <a href="/download-surat-tanda-regist/{{ $perizinan->id }}">Download Surat</a>
                </div>
            </div>

            <div class="child-3">
                <div class="mb-2 m-5 w-50">
                    <label for="exampleInputEmail1" class="form-label">Surat Persetujuan Kerja</label>
                    <br>
                    <a href="/download-surat-persetujuan-kerja/{{ $perizinan->id }}">Download Surat</a>
                </div>

                <div class="mb-2 m-5 w-50">
                    <label for="exampleInputEmail1" class="form-label">Surat Pernyataan Praktik</label>
                    <br>
                    <a href="/download-surat-pernyataan-praktik/{{ $perizinan->id }}">Download Surat</a>
                </div>

                <div class="mb-2 m-5 w-50">
                    <label for="exampleInputEmail1" class="form-label">Surat Rekomendasi Profesi</label>
                    <br>
                    <a href="/download-surat-rekomendasi-profesi/{{ $perizinan->id }}">Download Surat</a>
                </div>

                <div class="mb-2 m-5 w-50">
                    <label for="exampleInputEmail1" class="form-label">Surat Keterangan Praktek</label>
                    <br>
                    <a href="/download-surat-keterangan-praktek/{{ $perizinan->id }}">Download Surat</a>
                </div>
            </div>
        </div>

        <div class="parent-2 m-3 d-flex">
            <div class="mb-2 m-5 w-50">
                <label for="exampleInputEmail1" class="form-label">Nomor Berkas</label>
                <input type="number" name="nomor_berkas" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>

            <div class="mb-3 m-5 w-50">
                <label for="disabledSelect" class="form-label">Pilih status permohonan</label>
                <select id="disabledSelect" class="form-select" name="status_permohonan">
                    <option value="Operator">Operator</option>
                    <option value="Checking Berkas">Check Berkas Verifikator</option>
                </select>
            </div>
        </div>
        <div class="parent-3 m-3 d-inline-block w-100">
            <button type="submit" class="btn btn-outline-primary w-100 justify-center align-items-center">Submit</button>
        </div>
    </form>
@endsection


@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.12/pdfobject.min.js"></script>
@endsection
