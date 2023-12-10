@extends('layouts.app-admin2')

@section('content')
    <div class="container">
        <div class="card">
            <div class="title d-flex m-4 justify-content-center align-items-center">
                <h2>Jumlah Account Seluruh Pengguna</h2>
            </div>
        </div>
        <br>

        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="card">
                    <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#operator">Tambah Akun
                        Operator</a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <a href="#" class="btn btn-success">Tambah Akun Verifikator</a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <a href="#" class="btn btn-success">Tambah Akun Surveyor</a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <a href="#" class="btn btn-success">Tambah Akun Kepala Dinas</a>
                </div>
            </div>

        </div>

        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="card">
                    <a href="#" class="btn btn-success">Tambah Akun Walikota</a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <a href="#" class="btn btn-success">Tambah Akun Auditor</a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <a href="#" class="btn btn-success">Tambah Akun Admin Dinas</a>
                </div>
            </div>
        </div>

        <div class="card">
            <table class="table table-hover m-4">
                <thead class="text-dark fs-4">
                    <tr>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Nama</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">No Telepon</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Email</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Password</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Actions</h6>
                        </th>
                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                @foreach ($allAccount as $akun)
                    <tbody class="tbody">
                        <tr>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">{{ $no++ }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">{{ $akun->nama }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">{{ $akun->telepon }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $akun->email }}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $akun->password }}</p>
                            </td>
                            <td class="border-bottom-0">
                                -
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>

        {{-- Modal Operator --}}
        <div class="modal fade" id="operator" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Akun Operator</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('create.Operator') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <label for="">Nama</label>
                                    <input type="text" name="name" class="form-control" placeholder="Masukkan Nama">
                                    <br>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Masukkan Nama">
                                    <br>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <label for="">Password</label>
                                    <input type="text" name="password" class="form-control" placeholder="Masukkan Nama">
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
