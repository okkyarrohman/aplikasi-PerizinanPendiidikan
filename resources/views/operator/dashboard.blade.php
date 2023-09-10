@extends('layouts.app-operator')

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
                        <h1>Operator dashboard</h1>
                        <h4>Feature Operator : </h4>
                        <p>
                            operator dapat melihat permohonan yang diajukan dan dapat menilai kesesuaian
                            dokumen. bila tidak sesuai dapat dilakukan penolakan melalui sistem dan kembali
                            ke pemohon
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
