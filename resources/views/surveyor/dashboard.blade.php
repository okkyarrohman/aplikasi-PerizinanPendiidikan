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
                        <h1>Surveyor dashboard</h1>
                        <h4>Feature surveyor</h4>
                        <p>
                            surveyor dapat mengetahui lokasi yang akan disurvey berdasarkan peta dan dapat
                            melakukan taging lokasi dan dapat mengunggah foto serta hasil wawancara* ketika
                            survey
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
