@extends('layouts.app-verifikator')

@section('content')
    <div class="container">
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
            @if ($tracking->status_permohonan == 'Dokumen Valid')
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
                            <form action="{{ route('tugaskan.update') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $tracking->id }}" hidden>
                                <select name="status_permohonan" id="status_permohonan" hidden>
                                    <option value="Sedang Disurvey" selected hidden></option>
                                </select>
                                <button type="submit" class="btn bg-primary rounded-3 fw-semibold">
                                    Tugaskan Surveyor
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @elseif ($tracking->status_permohonan == 'Sedang Disurvey')
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
                            <span class="badge bg-warning">Sedang Disurvey</span>
                        </td>
                    </tr>
                </tbody>
            @elseif ($tracking->status_permohonan == 'Telah Disurvey')
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
                                    class="badge bg-success rounded-3 fw-semibold">{{ $tracking->status_permohonan }}</span>
                            </div>
                        </td>
                        <td class="border-bottom-0">
                            <a href="/lihat-hasil/survey/{{ $tracking->id }}">
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
