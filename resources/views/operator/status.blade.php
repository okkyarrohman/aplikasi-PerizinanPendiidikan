@extends('layouts.app-operator')

@section('content')
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Status</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        @php
            $no = 1;
        @endphp

        <tbody>
            @foreach ($trackings as $tracking)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $tracking->status_permohonan }}</td>
                    <td>{{ $tracking->nama }}</td>
                    <td>
                        <a href="/operator/edit-tracking/{{ $tracking->id }}">edit</a>
                        <a href="#">hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>


    </table>
@endsection
