@extends('layouts.app')

@section('content')
    @foreach ($trackings as $tracking)
        <h4>Proses permohonan anda sendang samapai tahap
            <b>{{ $tracking->status_permohonan }}</b>
        </h4>
    @endforeach
@endsection
