<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contoh Surat Pernyataan</title>

    <style>
        #judul {
            text-align: center;
        }

        #halaman {
            width: auto;
            height: auto;
            position: absolute;
            border: 1px solid;
            padding-top: 30px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 80px;
        }
    </style>

</head>

<body>
    <div id=halaman>
        <h3 id=judul>SURAT Izin Terbit</h3>

        <p>Saya yang bertanda tangan di bawah ini :</p>

        <table>
            @foreach ($permohonans as $permohonan)
                <tr>
                    <td style="width: 30%;">Nama:</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;">{{ $permohonan->nama }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Tempat, tanggal lahir</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;">Grobogan, 3 Maret 1993</td>
                </tr>
                <tr>
                    <td style="width: 30%; vertical-align: top;">Alamat</td>
                    <td style="width: 5%; vertical-align: top;">:</td>
                    <td style="width: 65%;">{{ $permohonan->lokasi }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Pengajuan Perizinan Pendirian</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;">{{ $permohonan->tipe_dokumen }}</td>
                </tr>

        </table>

        <p>menyatakan dengan sebenar-benarnya akan bersungguh-sungguh belajar dan bekerja.</p>

        <div style="width: 50%; text-align: left; float: right;">Purwodadi, 20 Januari 2020</div><br>
        <div style="width: 50%; text-align: left; float: right;">Yang bertanda tangan,</div>
        {!! QrCode::format('png')->size(200)->generate('Make me into a QrCode!') !!}
        <div style="width: 50%; text-align: left; float: right;">Kepala Dinas</div>
        @endforeach
    </div>
</body>

</html>
