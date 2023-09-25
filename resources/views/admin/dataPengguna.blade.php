@extends('layouts.app-admin')

@section('content')
    <div class="container">
        <div class="head-container d-flex justify-content-lg-around">
            <div class="title">
                <h4>Table Perizinan</h4>
            </div>
            <form action="" method="">
                <div class="search">
                    <input class="form-control" type="text" name="search" id="" placeholder="Cari No surat">
                </div>
            </form>
        </div>
        <table class="table table-hover m-3">
            <thead class="text-dark fs-4">
                <tr>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Nomor</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Nama</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Email</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Action</h6>
                    </th>
                </tr>
            </thead>
            @php
                $no = 1;
            @endphp
            @foreach ($users as $user)
                <tbody>
                    <tr>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">{{ $no++ }}</h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">{{ $user->name }}</h6>
                            <span class="fw-normal">Pemohon</span>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{ $user->email }}</p>
                        </td>
                        <td class="border-bottom-0">
                            <span>lihat</span>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        {{ $users->links() }}
    </div>
@endsection
