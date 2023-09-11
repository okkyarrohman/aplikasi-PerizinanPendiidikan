@extends('layouts.app-surveyor')

@section('content')
    <div class="container">
        <div class="title">
            <h4>Table Permohonan Perizinan </h4>
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
            @if ($tracking->status_permohonan == 'Sedang Disurvey')
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
                        <td class="border-bottom-0">
                            <a href="/surveyor/edit/{{ $tracking->id }}">
                                <span class="badge bg-success rounded-3 fw-semibold">Lihat</span>
                            </a>
                            <a href="#">
                                <span class="badge bg-danger rounded-3 fw-semibold">Delete</span>
                            </a>
                        </td>

                    </tr>
                </tbody>
            @endif
        @endforeach
    </table>
@endsection
