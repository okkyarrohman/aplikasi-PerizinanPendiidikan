@extends('layouts.app-operator')

@section('content')
    <form action="{{ route('operator.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $perizinan->id }}">

        <label for="">Nama</label>
        <input type="text" name="nama" value="{{ old('nama', $perizinan->nama) }}" disabled>
        <br>

        <label for="">Alamat Praktek</label>
        <input type="text" name="alamat_praktek" value="{{ $perizinan->alamat_praktek }}" disabled>
        <br>

        <label for="">telepon</label>
        <input type="number" name="telepon" value="{{ $perizinan->telepon }}" disabled>
        <br>

        <label for="">Surat Pemohonan</label>
        <img id="fotoPreview" src="{{ asset('storage/berkas/surat_pemohonan/' . $perizinan->surat_pemohonan) }}"
            alt="" class="w-96 mx-auto mb-5 rounded-lg" width="100px" height="100px">
        <input type="file" name="surat_pemohonan" hidden>
        <br>

        <label for="">Pas foto</label>
        <input type="file" name="pas_foto" hidden>
        <br>

        <label for="">KTP {{ $perizinan->ktp }}
            <a href="/download-ktp/{{ $perizinan->id }}">download ktp</a>
        </label>
        <input type="file" name="ktp" hidden>
        <br>

        <label for="">Ijazah</label>
        <input type="file" name="ijazah" hidden>
        <br>

        <label for="">Surat Tanda Registrasi</label>
        <input type="file" name="surat_tanda_regist" hidden>
        <br>

        <label for="">Surat Persetujuan Kerja</label>
        <input type="file" name="surat_persetujuan_kerja" hidden>
        <br>

        <label for="">Surat Pernyataan Praktik</label>
        <input type="file" name="surat_pernyataan_praktik" hidden>
        <br>

        <label for="">Surat Pemohonan</label>
        <input type="file" name="surat_sehat" hidden>
        <br>

        <label for="">Surat Rekomendasi Profesi</label>
        <input type="file" name="surat_rekomendasi_profesi" hidden>
        <br>

        <label for="">Surat Keterangan Praktek</label>
        <input type="file" name="surat_keterangan_praktek" hidden>
        <br>
        <br>

        <label for="">Nomor Berkas</label>
        <input type="text" name="nomor_berkas" placeholder="Masukkan No berkas">
        <br>
        <br>

        <select name="status_permohonan" id="status_permohonan">
            <option selected>Pilih status permohonan</option>
            <option value="Operator">Operator</option>
            <option value="Checking Berkas">Check Berkas Verifikator</option>
        </select>
        <br>

        <button type="submit">submit</button>
    @endsection


    @section('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.12/pdfobject.min.js"></script>
    @endsection
