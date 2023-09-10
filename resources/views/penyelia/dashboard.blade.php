@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}

                        <h1>Penyelia dashboard</h1>
                        <h4>Feature penyelia : </h4>
                        <p>verifikator dapat melihat dokumen yang diajukan oleh pemohon dan dapat melihat
                            hasil pekerjaan dari surveyor. verifikator dapat melakukan verifikasi dan pengecekan
                            ketidak sesuaian dan dapat melakukan pengembalian proses ke operator, maupun
                            penolakan kepada pemohon. verifikator dapat mengambil keputusan ketika surveyor
                            telah melakukan tugas dan laporan sudah masuk ke tahapan verifikasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
