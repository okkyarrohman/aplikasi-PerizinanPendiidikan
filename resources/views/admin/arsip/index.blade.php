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
                        <h6 class="fw-semibold mb-0">Nomor Berkas</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Nama</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">No Telepon</h6>
                    </th>
                    <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Status Permohonan</h6>
                    </th>
                </tr>
            </thead>
            @php
                $no = 1;
            @endphp
            @foreach ($trackings as $tracking)
                <tbody>
                    <tr>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">{{ $no++ }}</h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">{{ $tracking->nama }}</h6>
                            <span class="fw-normal">Pemohon</span>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{ $tracking->telepon }}</p>
                        </td>
                        <td class="border-bottom-0">
                            <div class="d-flex align-items-center gap-2">
                                <span
                                    class="badge bg-primary rounded-3 fw-semibold">{{ $tracking->status_permohonan }}</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        {{ $trackings->links() }}
    </div>
@endsection
