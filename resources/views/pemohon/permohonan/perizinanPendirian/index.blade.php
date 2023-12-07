@extends('layouts.app-pemohon')

@section('content')
    <div class="container">
        <div class="titke">
            <h3>Permohonan Perizinan Pendirian</h3>
        </div>
        <br>

        <d class="content">
            <div class="row">
                <div class="cold-md-6 col-6">
                    <div class="card">
                        <div class="card-title m-4">
                            <a href="/pemohon/perizinanPendirian/create-tk">
                                <h6>Pendirian TK</h6>
                            </a>
                        </div>
                        <div class="card-content m-4">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, commodi?</p>
                        </div>
                    </div>
                </div>

                <div class="cold-md-6 col-6">
                    <div class="card">
                        <div class="card-title m-4">
                            <a href="/pemohon/perizinanPendirian/create-sd">
                                <h6>Pendirian SD/SMP/SMA</h6>
                            </a>
                        </div>
                        <div class="card-content m-4">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, commodi?</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
