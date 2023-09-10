@extends('layouts.app')

@section('content')
    {{-- Content --}}
    <form action="{{ route('pemohon.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Nama</label>
        <input type="text" name="nama">
        <br>

        <label for="">Alamat Praktek</label>
        <input type="text" name="alamat_praktek">
        <br>

        <label for="">telepon</label>
        <input type="number" name="telepon" placeholder="masukkan nama">
        <br>

        <label for="" hidden>Nomor Berkas</label>
        <input type="hidden" name="nomor_berkas" placeholder="masukkan nama">

        <label for="">Surat Pemohonan</label>
        <input type="file" name="surat_pemohonan">
        <br>

        <label for="">Pas foto</label>
        <input type="file" name="pas_foto">
        <br>

        <label for="">KTP</label>
        <input type="file" name="ktp">
        <br>

        <label for="">Ijazah</label>
        <input type="file" name="ijazah">
        <br>

        <label for="">Surat Tanda Registrasi</label>
        <input type="file" name="surat_tanda_regist">
        <br>

        <label for="">Surat Persetujuan Kerja</label>
        <input type="file" name="surat_persetujuan_kerja">
        <br>

        <label for="">Surat Pernyataan Praktik</label>
        <input type="file" name="surat_pernyataan_praktik">
        <br>

        <label for="">Surat Pemohonan</label>
        <input type="file" name="surat_sehat">
        <br>

        <label for="">Surat Rekomendasi Profesi</label>
        <input type="file" name="surat_rekomendasi_profesi">
        <br>

        <label for="">Surat Keterangan Praktek</label>
        <input type="file" name="surat_keterangan_praktek">
        <br>

        <select name="status_permohonan" id="status_permohonan" hidden>
            <option value="Operator" selected></option>
        </select>



        <button type="submit">Submit</button>
    </form>
    {{-- End Content --}}
@endsection
