@extends('layouts.app-pemohon')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card  align-items-center">
                    <div class="content-1 m-4">
                        <div class="text">
                            <h5 class="text align-items-center">Cari File Dengan QR Code!</h5>
                            <div id="reader" height="1200"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @php
                $no = 1;
            @endphp
            @foreach ($permohonans as $permohonan)
                <div class="col-md-4">
                    <div class="card">
                        <div class="content-2 m-4">
                            <div class="title">
                                <h5>Pengajuan Perizinan Pendirian {{ $no++ }}</h5>
                            </div>
                            <div class="created_at">
                                <span>{{ $permohonan->created_at }}</span>
                            </div>
                            <hr>
                            <div class="isi">
                                <p>Surat pengajuan Permohonan Akan diterima setelah 14 hari kerja</p>
                                <p>Tipe Dokumen : {{ $permohonan->tipe_dokumen }}</p>
                            </div>
                            <div class="action">
                                <a href="/pemohon/show_pendirian/{{ $permohonan->id }}">
                                    <span class="badge text-bg-primary">Show</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


@push('js')
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // handle the scanned code as you like, for example:

            location.href = decodedText;
            console.log(`Code matched = ${decodedText}`, decodedResult);
        }

        function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
            // for example:
            console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: {
                    width: 250,
                    height: 250
                }
            },
            /* verbose= */
            false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
@endpush
