@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card  align-items-center">
                    <div class="content-1 m-4">
                        <div class="text">
                            <h5 class="text align-items-center">Cari File Dengan QR Code!</h5>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="content-2 m-4">
                        <div class="title">
                            <h5>Pengajuan Permohonan 1</h5>
                        </div>
                        <div class="created_at">
                            <span>12-12-2012 08:00</span>
                        </div>
                        <hr>
                        <div class="isi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi recusandae, consequatur sequi
                                rem, perferendis alias fugit quam aut maiores minus a? Qui sint incidunt laborum,
                                consequuntur nisi dolore deserunt.</p>
                        </div>
                        <div class="action">
                            <a href="/pemohon/show">
                                <span class="badge text-bg-primary">Show</span>
                            </a>
                            <a href="/pemohon/edit">
                                <span class="badge text-bg-success">Edit</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
