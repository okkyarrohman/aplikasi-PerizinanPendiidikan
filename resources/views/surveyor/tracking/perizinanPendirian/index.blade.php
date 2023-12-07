@extends('layouts.app-surveyor2')

@section('content')
    <div class="container">
        <div class="card">
            <div class="title d-flex m-4 justify-content-center align-items-center">
                <h2> Tracking Perizinan Pendirian</h2>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/surveyor/tracking/pendirian/sedang_disurvey_pendirian">
                            <h4>Sedang Disurvey</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            <h4>80</h4>
                        </div>
                        <div class="next">
                            <a href="/surveyor/tracking/pendirian/sedang_disurvey_pendirian" class="btn btn-primary">></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="title-card m-4">
                        <a href="/surveyor/tracking/pendirian/telah_disurvey_pendirian">
                            <h4>Telah Disurvey</h4>
                        </a>
                    </div>
                    <div class="group d-flex m-4 justify-content-lg-around">
                        <div class="jumlah">
                            <h4>80</h4>
                        </div>
                        <div class="next">
                            <a href="/surveyor/tracking/pendirian/telah_disurvey_pendirian" class="btn btn-primary">-></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
