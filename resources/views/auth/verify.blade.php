@extends('layouts.app-without-nav')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifikasi Email Untuk lanjut') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Email Verifikasi Berhasil Dikirim, Silahkan check Inbox Mail') }}
                        </div>
                    @endif

                    <div class="section m-4">
                        <span>
                            {{ __('Sebelum Melanjutkan ke halaman selanjutnya, silahkan verifikasi email terlebih dahulu') }}
                        </span>
                    </div>


                    <div class="section m-2">
                        <h6>{{ __('Tidak Mendapatkan Link Verifikasi?') }}</h6>
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">{{ __('Resend Verifikasi') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
