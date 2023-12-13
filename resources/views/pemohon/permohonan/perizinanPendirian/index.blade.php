@extends('layouts.app-pemohon')

@push('css')
    <style>
        .sikil {
            position: relative;
            right: 20px;
            bottom: 1px;

        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="group d-flex">
                    <div class="button-back mx-4">
                        <a href="{{ route('back') }}" class="btn btn-outline-secondary">Back</a>
                    </div>
                    <div class="text">
                        <h4>Permohonan Perizinan Pendirian</h4>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-title m-3">
                            <a href="/pemohon/perizinanPendirian/create-tk">
                                <h6>Pendirian TK</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-title m-3">
                            <a href="/pemohon/perizinanPendirian/create-sd">
                                <h6>Pendirian SD/SMP/SMA</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('footer')
        <div class="sikil">
            <img src="{{ asset('pemohon/img/footer.png') }}" alt="" width="360" height="203">
        </div>
    @endpush
