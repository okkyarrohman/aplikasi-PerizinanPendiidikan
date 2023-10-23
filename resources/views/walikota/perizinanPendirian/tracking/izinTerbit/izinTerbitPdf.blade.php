<!DOCTYPE html>
<html>

<head>
    <title>Surat Izin Terbit</title>



</head>

<style>
    table tr td {
        font-size: 13px;
    }

    tr .text {
        text-align: justify;
    }

    tr .yth {
        text-align: left;

    }

    tr .dikeluarkan {
        text-align: left;
    }

    .data-diri {
        width: 900px;
    }

    .ttd-kepalaDinas {
        text-align: center;
    }

    .ttd-walikota {
        text-align: center;
    }

    .center font {
        text-align: center;
    }
</style>

<body>
    <center border="1">
        <table border="1">
            <tr>
                <td>
                    <center class="center">
                        <font size="2"><b>LAMPIRAN</b></font><br>
                        <font size="2"><b>PENGUMUMAN BERSAMA</b></font><br>
                        <font size="2"><b>DINAS PERIZINAN KOTA SURABAYA</b></font>
                    </center>
                </td>
            </tr>
        </table>
        <table border="1">
            <tr>
                <td>
                    <center class="center">
                        <img src="{{ asset('ttd QRCode/garuda.png') }}" width="90" height="90"><br>
                        <font size="3"><b>PEMERINTAH REPUBLIK INDONESIA</b></font><br><br>
                        <font size="5"><b>IZIN PENDIRIAN</b></font><br>
                    </center>
                </td>
            </tr>
        </table>

        <br>
        <table border="1">
            <tr>
                <td class="text" width="625">Lembaga Pemerintahan Peraturan Pemerintah (PP) No.66/2010 tentang
                    Perubahan atas PP
                    No.17/2010 tentang Pengelolaan dan Penyelenggaraan Pendidikan. Pasal 182 ayat 1 dijelaskan bahwa
                    pembangunan sekolah swasta wajib mendapatkan izin pemerintah, maka dari itu surat ini dibuat untuk
                    memberikan <b>Izin Pendirian Pendidikan Swasta</b>, yang tertera pemohon dibawah ini : </td>
            </tr>
        </table>
        <br>
        @foreach ($permohonans as $pemohonan)
            <div class="data-diri">
                <table border="1">
                    <tr>
                        <td>Nama Pemohon</td>
                        <td width="500">: {{ $pemohonan->nama }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td width="500">: {{ $pemohonan->email }}</td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td width="500">: {{ $pemohonan->telepon }}</td>
                    </tr>
                    <tr>
                        <td>Lokasi</td>
                        <td width="500">: {{ $pemohonan->lokasi }}</td>
                    </tr>
                    <tr>
                        <td>Perizinan </td>
                        <td width="500">: Pendirian Pendidikan</td>
                    </tr>
                </table>
            </div>
            <br>
        @endforeach
        <table border="1">
            <tr>
                <td class="text" width="625">Surat Izin ini berlaku selama pemohon melakukan kegiatan operasional
                    sesuai ketentuan
                    perundangan-undangan yang telah berlaku</td>
            </tr>
        </table>
        <br>

        <table border="1">
            <tr>
                <td class="dikeluarkan" width="625">Dikeluarkan Tanggal : Sabtu, 20 Oktober 2023</td>
            </tr>
        </table>
        <br>

        <table border="1">
            <tr>
                <td class="ttd-kepalaDinas" width="300">Kepala Dinas Perizinan kota Surabaya
                    <br>
                    {{-- <img src="{{ asset('ttd QRCode/kepala-dinas.svg') }}" width="90" height="90" alt=""> --}}
                    <br>
                    <b>Prof Dr Samsul Huda,. SPD,MP,D</b>
                </td>
                <td class="ttd-walikota" width="300">Walikota Surabaya
                    <br>
                    {{-- <img src="{{ asset('ttd QRCode/Walikota.png') }}" width="90" height="90" alt=""> --}}
                    <br>
                    <b>Prof,Dr Eri Cahyadi S.T,. M.Kom</b>
                </td>
            </tr>

        </table>

    </center>

</body>

</html>
