@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pendirian">
                        <div class="content-1 m-4">
                            <h5 class="text m-4">Persyaratan Perizinan Pendirian</h5>
                        </div>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#penyelenggaraan">
                        <div class="content-1 m-4">
                            <h5 class="text m-4">Persyaratan Perizinan Penyelenggaraan</h5>
                        </div>
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal Pendirian-->
        <div class="modal fade" id="pendirian" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Persyaratan Perizian Pendirian</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Penyelenggaraan-->
        <div class="modal fade" id="penyelenggaraan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Persyaratan Perizian Penyelenggaraan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
