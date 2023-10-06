@extends('layouts.app-admin')

@section('content')
    <div class="container">
        <input type="hidden" name="id" value="{{ $permohonan->id }}">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Persyaratan Perizinan Pendirian</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-content">
                    <h3 class="card-title">{{ $permohonan->tipe_dokumen }}</h3>
                    <span>Nama : {{ $permohonan->nama }}</span>
                    <span>email : {{ $permohonan->email }}</span>
                    <span>telepon : {{ $permohonan->telepon }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-content m-4">
                    <h2>Status Permohonan Anda {{ $permohonan->status_dokumen }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-content m-4">
                    <div class="visible-print text-center">
                        {!! QrCode::size(250)->generate(Request::url()) !!}
                        <p>Donwload Me</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
