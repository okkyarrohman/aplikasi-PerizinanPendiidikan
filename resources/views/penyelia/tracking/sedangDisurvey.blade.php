@extends('layouts.app-verifikator')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon purple mb-2">

                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Dokumen Valid</h6>
                                <h6 class="font-extrabold mb-0">112.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon blue mb-2">

                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Sedang Disurvey</h6>
                                <h6 class="font-extrabold mb-0">112.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon green mb-2">

                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Telah Disurvey</h6>
                                <h6 class="font-extrabold mb-0">112.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon red mb-2">

                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Pemohonan Ditolak</h6>
                                <h6 class="font-extrabold mb-0">112.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="title">
            <h4>Table Tracking Surveyor </h4>
        </div>
    </div>
    <table class="table text-nowrap mb-0 align-middle table-hover">
        <thead class="text-dark fs-4">
            <tr>
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Nomor</h6>
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
                <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Action</h6>
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
                            <span class="badge bg-primary rounded-3 fw-semibold">{{ $tracking->status_permohonan }}</span>
                        </div>
                    </td>
                    <td class="border-bottom-0">
                        <span class="badge bg-warning">Sedang Disurvey</span>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
@endsection
