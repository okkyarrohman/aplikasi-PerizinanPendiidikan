<?php

namespace App\Http\Controllers;


use App\Models\PerizinanPendirian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PerizinanPendirianController extends Controller
{
    public function store(Request $req)
    {
        $req->validate([
            'nama' => ['string'],
            'email' => ['string'],
            'telepon' => ['required'],
            'tipe_dokumen' => ['required'],
            'status_dokumen' => ['required'],
            'longtitude' => ['required'],
            'latitude' => ['required'],

            // Validate File Untuk Pendirian TK
            'surat_permohonan' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'ktp' => ['max:300','mimes:pdf,jpg,jpeg,png'], //Maks = 300Kb
            'suket_domisili' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'pengurus' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'suket_mendirikan' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'suket_tanah' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'suket_pbh' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'suket_perubahanPBH' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'suket_rip' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'suket_psp' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'sukas_perizinan' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'sk_izinOperasional' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'sertif_bpjs_sehat' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'sertif_bpjs_kerja' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'denah' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'gedung' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'akta_pendirian' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'surper_kades' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'surper_camat' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'surat_tanah' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'patuh_aturan' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'daftar_siswa' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'daftar_TKK' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'daftar_TKnK' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'kurikulum' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'sarpras' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'sk_yayasan' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'studi_layak' => ['max:300','mimes:pdf'], //Maks = 300Kb
             //End Validate File Untuk Pendirian TK

        ]);

        $permohonan = New PerizinanPendirian;
        $permohonan->nama = $req->nama;
        $permohonan->email = $req->email;
        $permohonan->telepon = $req->telepon;
        $permohonan->status_dokumen = $req->status_dokumen;
        $permohonan->tipe_dokumen = $req->tipe_dokumen;
        $permohonan->longtitude = $req->longtitude;
        $permohonan->latitude = $req->latitude;
        $permohonan->lokasi = $req->lokasi;


        // Upload File Pendirian
        if($req->file())
        {

        if($req->hasFile('surat_permohonan')){
            $surat_permohonan = $req->file('surat_permohonan');
            $extension = $surat_permohonan->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $surat_permohonan->move(storage_path('app/public/perizinanPendirian/surat_permohonan',date('YmdHis').".".$req->file('surat_permohonan')->getClientOriginalName()),$fotoName);
            $permohonan->surat_permohonan = date('YmdHis').".".$req->file('surat_permohonan')->getClientOriginalName();
        }

        if($req->hasFile('ktp')){
            $ktp = $req->file('ktp');
            $extension = $ktp->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $ktp->move(storage_path('app/public/perizinanPendirian/ktp',date('YmdHis').".".$req->file('ktp')->getClientOriginalName()),$fotoName);
            $permohonan->ktp = date('YmdHis').".".$req->file('ktp')->getClientOriginalName();
        }

        if($req->hasFile('suket_domisili')){
            $suket_domisili = $req->file('suket_domisili');
            $extension = $suket_domisili->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_domisili->move(storage_path('app/public/perizinanPendirian/suket_domisili',date('YmdHis').".".$req->file('suket_domisili')->getClientOriginalName()),$fotoName);
            $permohonan->suket_domisili = date('YmdHis').".".$req->file('suket_domisili')->getClientOriginalName();
        }

        if($req->hasFile('pengurus')){
            $pengurus = $req->file('pengurus');
            $extension = $pengurus->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $pengurus->move(storage_path('app/public/perizinanPendirian/pengurus',date('YmdHis').".".$req->file('pengurus')->getClientOriginalName()),$fotoName);
            $permohonan->pengurus = date('YmdHis').".".$req->file('pengurus')->getClientOriginalName();
        }

        if($req->hasFile('suket_mendirikan')){
            $suket_mendirikan = $req->file('suket_mendirikan');
            $extension = $suket_mendirikan->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_mendirikan->move(storage_path('app/public/perizinanPendirian/suket_mendirikan',date('YmdHis').".".$req->file('suket_mendirikan')->getClientOriginalName()),$fotoName);
            $permohonan->suket_mendirikan = date('YmdHis').".".$req->file('suket_mendirikan')->getClientOriginalName();
        }

        if($req->hasFile('suket_tanah')){
            $suket_tanah = $req->file('suket_tanah');
            $extension = $suket_tanah->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_tanah->move(storage_path('app/public/perizinanPendirian/suket_tanah',date('YmdHis').".".$req->file('suket_tanah')->getClientOriginalName()),$fotoName);
            $permohonan->suket_tanah = date('YmdHis').".".$req->file('suket_tanah')->getClientOriginalName();
        }

        if($req->hasFile('suket_pbh')){
            $suket_pbh = $req->file('suket_pbh');
            $extension = $suket_pbh->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_pbh->move(storage_path('app/public/perizinanPendirian/suket_pbh',date('YmdHis').".".$req->file('suket_pbh')->getClientOriginalName()),$fotoName);
            $permohonan->suket_pbh = date('YmdHis').".".$req->file('suket_pbh')->getClientOriginalName();
        }

        if($req->hasFile('suket_perubahanPBH')){
            $suket_perubahanPBH = $req->file('suket_perubahanPBH');
            $extension = $suket_perubahanPBH->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_perubahanPBH->move(storage_path('app/public/perizinanPendirian/suket_perubahanPBH',date('YmdHis').".".$req->file('suket_perubahanPBH')->getClientOriginalName()),$fotoName);
            $permohonan->suket_perubahanPBH = date('YmdHis').".".$req->file('suket_perubahanPBH')->getClientOriginalName();
        }

        if($req->hasFile('suket_rip')){
            $suket_rip = $req->file('suket_rip');
            $extension = $suket_rip->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_rip->move(storage_path('app/public/perizinanPendirian/suket_rip',date('YmdHis').".".$req->file('suket_rip')->getClientOriginalName()),$fotoName);
            $permohonan->suket_rip = date('YmdHis').".".$req->file('suket_rip')->getClientOriginalName();
        }

        if($req->hasFile('suket_psp')){
            $suket_psp = $req->file('suket_psp');
            $extension = $suket_psp->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_psp->move(storage_path('app/public/perizinanPendirian/suket_psp',date('YmdHis').".".$req->file('suket_psp')->getClientOriginalName()),$fotoName);
            $permohonan->suket_psp = date('YmdHis').".".$req->file('suket_psp')->getClientOriginalName();
        }

        if($req->hasFile('sukas_perizinan')){
            $sukas_perizinan = $req->file('sukas_perizinan');
            $extension = $sukas_perizinan->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sukas_perizinan->move(storage_path('app/public/perizinanPendirian/sukas_perizinan',date('YmdHis').".".$req->file('sukas_perizinan')->getClientOriginalName()),$fotoName);
            $permohonan->sukas_perizinan = date('YmdHis').".".$req->file('sukas_perizinan')->getClientOriginalName();
        }

        if($req->hasFile('sk_izinOperasional')){
            $sk_izinOperasional = $req->file('sk_izinOperasional');
            $extension = $sk_izinOperasional->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sk_izinOperasional->move(storage_path('app/public/perizinanPendirian/sk_izinOperasional',date('YmdHis').".".$req->file('sk_izinOperasional')->getClientOriginalName()),$fotoName);
            $permohonan->sk_izinOperasional = date('YmdHis').".".$req->file('sk_izinOperasional')->getClientOriginalName();
        }

        if($req->hasFile('sertif_bpjs_sehat')){
            $sertif_bpjs_sehat = $req->file('sertif_bpjs_sehat');
            $extension = $sertif_bpjs_sehat->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sertif_bpjs_sehat->move(storage_path('app/public/perizinanPendirian/sertif_bpjs_sehat',date('YmdHis').".".$req->file('sertif_bpjs_sehat')->getClientOriginalName()),$fotoName);
            $permohonan->sertif_bpjs_sehat = date('YmdHis').".".$req->file('sertif_bpjs_sehat')->getClientOriginalName();
        }

        if($req->hasFile('sertif_bpjs_kerja')){
            $sertif_bpjs_kerja = $req->file('sertif_bpjs_kerja');
            $extension = $sertif_bpjs_kerja->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sertif_bpjs_kerja->move(storage_path('app/public/perizinanPendirian/sertif_bpjs_kerja',date('YmdHis').".".$req->file('sertif_bpjs_kerja')->getClientOriginalName()),$fotoName);
            $permohonan->sertif_bpjs_kerja = date('YmdHis').".".$req->file('sertif_bpjs_kerja')->getClientOriginalName();
        }

        if($req->hasFile('denah')){
            $denah = $req->file('denah');
            $extension = $denah->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $denah->move(storage_path('app/public/perizinanPendirian/denah',date('YmdHis').".".$req->file('denah')->getClientOriginalName()),$fotoName);
            $permohonan->denah = date('YmdHis').".".$req->file('denah')->getClientOriginalName();
        }

        if($req->hasFile('gedung')){
            $gedung = $req->file('gedung');
            $extension = $gedung->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $gedung->move(storage_path('app/public/perizinanPendirian/gedung',date('YmdHis').".".$req->file('gedung')->getClientOriginalName()),$fotoName);
            $permohonan->gedung = date('YmdHis').".".$req->file('gedung')->getClientOriginalName();
        }

        if($req->hasFile('akta_pendirian')){
            $akta_pendirian = $req->file('akta_pendirian');
            $extension = $akta_pendirian->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $akta_pendirian->move(storage_path('app/public/perizinanPendirian/akta_pendirian',date('YmdHis').".".$req->file('akta_pendirian')->getClientOriginalName()),$fotoName);
            $permohonan->akta_pendirian = date('YmdHis').".".$req->file('akta_pendirian')->getClientOriginalName();
        }

        if($req->hasFile('surper_kades')){
            $surper_kades = $req->file('surper_kades');
            $extension = $surper_kades->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $surper_kades->move(storage_path('app/public/perizinanPendirian/surper_kades',date('YmdHis').".".$req->file('surper_kades')->getClientOriginalName()),$fotoName);
            $permohonan->surper_kades = date('YmdHis').".".$req->file('surper_kades')->getClientOriginalName();
        }

        if($req->hasFile('surper_camat')){
            $surper_camat = $req->file('surper_camat');
            $extension = $surper_camat->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $surper_camat->move(storage_path('app/public/perizinanPendirian/surper_camat',date('YmdHis').".".$req->file('surper_camat')->getClientOriginalName()),$fotoName);
            $permohonan->surper_camat = date('YmdHis').".".$req->file('surper_camat')->getClientOriginalName();
        }

        if($req->hasFile('surat_tanah')){
            $surat_tanah = $req->file('surat_tanah');
            $extension = $surat_tanah->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $surat_tanah->move(storage_path('app/public/perizinanPendirian/surat_tanah',date('YmdHis').".".$req->file('surat_tanah')->getClientOriginalName()),$fotoName);
            $permohonan->surat_tanah = date('YmdHis').".".$req->file('surat_tanah')->getClientOriginalName();
        }

        if($req->hasFile('patuh_aturan')){
            $patuh_aturan = $req->file('patuh_aturan');
            $extension = $patuh_aturan->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $patuh_aturan->move(storage_path('app/public/perizinanPendirian/patuh_aturan',date('YmdHis').".".$req->file('patuh_aturan')->getClientOriginalName()),$fotoName);
            $permohonan->patuh_aturan = date('YmdHis').".".$req->file('patuh_aturan')->getClientOriginalName();
        }

        if($req->hasFile('daftar_siswa')){
            $daftar_siswa = $req->file('daftar_siswa');
            $extension = $daftar_siswa->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $daftar_siswa->move(storage_path('app/public/perizinanPendirian/daftar_siswa',date('YmdHis').".".$req->file('daftar_siswa')->getClientOriginalName()),$fotoName);
            $permohonan->daftar_siswa = date('YmdHis').".".$req->file('daftar_siswa')->getClientOriginalName();
        }

        if($req->hasFile('daftar_TKK')){
            $daftar_TKK = $req->file('daftar_TKK');
            $extension = $daftar_TKK->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $daftar_TKK->move(storage_path('app/public/perizinanPendirian/daftar_TKK',date('YmdHis').".".$req->file('daftar_TKK')->getClientOriginalName()),$fotoName);
            $permohonan->daftar_TKK = date('YmdHis').".".$req->file('daftar_TKK')->getClientOriginalName();
        }

        if($req->hasFile('daftar_TKnK')){
            $daftar_TKnK = $req->file('daftar_TKnK');
            $extension = $daftar_TKnK->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $daftar_TKnK->move(storage_path('app/public/perizinanPendirian/daftar_TKnK',date('YmdHis').".".$req->file('daftar_TKnK')->getClientOriginalName()),$fotoName);
            $permohonan->daftar_TKnK = date('YmdHis').".".$req->file('daftar_TKnK')->getClientOriginalName();
        }

        if($req->hasFile('kurikulum')){
            $kurikulum = $req->file('kurikulum');
            $extension = $kurikulum->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $kurikulum->move(storage_path('app/public/perizinanPendirian/kurikulum',date('YmdHis').".".$req->file('kurikulum')->getClientOriginalName()),$fotoName);
            $permohonan->kurikulum = date('YmdHis').".".$req->file('kurikulum')->getClientOriginalName();
        }

        if($req->hasFile('sarpras')){
            $sarpras = $req->file('sarpras');
            $extension = $sarpras->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sarpras->move(storage_path('app/public/perizinanPendirian/sarpras',date('YmdHis').".".$req->file('sarpras')->getClientOriginalName()),$fotoName);
            $permohonan->sarpras = date('YmdHis').".".$req->file('sarpras')->getClientOriginalName();
        }

        if($req->hasFile('sk_yayasan')){
            $sk_yayasan = $req->file('sk_yayasan');
            $extension = $sk_yayasan->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sk_yayasan->move(storage_path('app/public/perizinanPendirian/sk_yayasan',date('YmdHis').".".$req->file('sk_yayasan')->getClientOriginalName()),$fotoName);
            $permohonan->sk_yayasan = date('YmdHis').".".$req->file('sk_yayasan')->getClientOriginalName();
        }

        if($req->hasFile('studi_layak')){
            $studi_layak = $req->file('studi_layak');
            $extension = $studi_layak->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $studi_layak->move(storage_path('app/public/perizinanPendirian/studi_layak',date('YmdHis').".".$req->file('studi_layak')->getClientOriginalName()),$fotoName);
            $permohonan->studi_layak = date('YmdHis').".".$req->file('studi_layak')->getClientOriginalName();
        }

        }
        // End Upload File Pendirian

        $permohonan->save();


        return back()->with('success','Permohonan Berhasil');

    }

    public function update(Request $req)
    {


        $permohonan = PerizinanPendirian::find($req->id);
        $permohonan->nama = $req->nama;
        $permohonan->email = $req->email;
        $permohonan->telepon = $req->telepon;
        $permohonan->status_dokumen = $req->status_dokumen;
        $permohonan->tipe_dokumen = $req->tipe_dokumen;
        $permohonan->longtitude = $req->longtitude;
        $permohonan->latitude = $req->latitude;
        $permohonan->lokasi = $req->lokasi;


        // Upload File Pendirian
        if($req->file())
        {

        if($req->hasFile('surat_permohonan')){
            $surat_permohonan = $req->file('surat_permohonan');
            $extension = $surat_permohonan->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $surat_permohonan->move(storage_path('app/public/perizinanPendirian/surat_permohonan',date('YmdHis').".".$req->file('surat_permohonan')->getClientOriginalName()),$fotoName);
            $permohonan->surat_permohonan = date('YmdHis').".".$req->file('surat_permohonan')->getClientOriginalName();
        }

        if($req->hasFile('ktp')){
            $ktp = $req->file('ktp');
            $extension = $ktp->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $ktp->move(storage_path('app/public/perizinanPendirian/ktp',date('YmdHis').".".$req->file('ktp')->getClientOriginalName()),$fotoName);
            $permohonan->ktp = date('YmdHis').".".$req->file('ktp')->getClientOriginalName();
        }

        if($req->hasFile('suket_domisili')){
            $suket_domisili = $req->file('suket_domisili');
            $extension = $suket_domisili->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_domisili->move(storage_path('app/public/perizinanPendirian/suket_domisili',date('YmdHis').".".$req->file('suket_domisili')->getClientOriginalName()),$fotoName);
            $permohonan->suket_domisili = date('YmdHis').".".$req->file('suket_domisili')->getClientOriginalName();
        }

        if($req->hasFile('pengurus')){
            $pengurus = $req->file('pengurus');
            $extension = $pengurus->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $pengurus->move(storage_path('app/public/perizinanPendirian/pengurus',date('YmdHis').".".$req->file('pengurus')->getClientOriginalName()),$fotoName);
            $permohonan->pengurus = date('YmdHis').".".$req->file('pengurus')->getClientOriginalName();
        }

        if($req->hasFile('suket_mendirikan')){
            $suket_mendirikan = $req->file('suket_mendirikan');
            $extension = $suket_mendirikan->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_mendirikan->move(storage_path('app/public/perizinanPendirian/suket_mendirikan',date('YmdHis').".".$req->file('suket_mendirikan')->getClientOriginalName()),$fotoName);
            $permohonan->suket_mendirikan = date('YmdHis').".".$req->file('suket_mendirikan')->getClientOriginalName();
        }

        if($req->hasFile('suket_tanah')){
            $suket_tanah = $req->file('suket_tanah');
            $extension = $suket_tanah->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_tanah->move(storage_path('app/public/perizinanPendirian/suket_tanah',date('YmdHis').".".$req->file('suket_tanah')->getClientOriginalName()),$fotoName);
            $permohonan->suket_tanah = date('YmdHis').".".$req->file('suket_tanah')->getClientOriginalName();
        }

        if($req->hasFile('suket_pbh')){
            $suket_pbh = $req->file('suket_pbh');
            $extension = $suket_pbh->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_pbh->move(storage_path('app/public/perizinanPendirian/suket_pbh',date('YmdHis').".".$req->file('suket_pbh')->getClientOriginalName()),$fotoName);
            $permohonan->suket_pbh = date('YmdHis').".".$req->file('suket_pbh')->getClientOriginalName();
        }

        if($req->hasFile('suket_perubahanPBH')){
            $suket_perubahanPBH = $req->file('suket_perubahanPBH');
            $extension = $suket_perubahanPBH->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_perubahanPBH->move(storage_path('app/public/perizinanPendirian/suket_perubahanPBH',date('YmdHis').".".$req->file('suket_perubahanPBH')->getClientOriginalName()),$fotoName);
            $permohonan->suket_perubahanPBH = date('YmdHis').".".$req->file('suket_perubahanPBH')->getClientOriginalName();
        }

        if($req->hasFile('suket_rip')){
            $suket_rip = $req->file('suket_rip');
            $extension = $suket_rip->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_rip->move(storage_path('app/public/perizinanPendirian/suket_rip',date('YmdHis').".".$req->file('suket_rip')->getClientOriginalName()),$fotoName);
            $permohonan->suket_rip = date('YmdHis').".".$req->file('suket_rip')->getClientOriginalName();
        }

        if($req->hasFile('suket_psp')){
            $suket_psp = $req->file('suket_psp');
            $extension = $suket_psp->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_psp->move(storage_path('app/public/perizinanPendirian/suket_psp',date('YmdHis').".".$req->file('suket_psp')->getClientOriginalName()),$fotoName);
            $permohonan->suket_psp = date('YmdHis').".".$req->file('suket_psp')->getClientOriginalName();
        }

        if($req->hasFile('sukas_perizinan')){
            $sukas_perizinan = $req->file('sukas_perizinan');
            $extension = $sukas_perizinan->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sukas_perizinan->move(storage_path('app/public/perizinanPendirian/sukas_perizinan',date('YmdHis').".".$req->file('sukas_perizinan')->getClientOriginalName()),$fotoName);
            $permohonan->sukas_perizinan = date('YmdHis').".".$req->file('sukas_perizinan')->getClientOriginalName();
        }

        if($req->hasFile('sk_izinOperasional')){
            $sk_izinOperasional = $req->file('sk_izinOperasional');
            $extension = $sk_izinOperasional->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sk_izinOperasional->move(storage_path('app/public/perizinanPendirian/sk_izinOperasional',date('YmdHis').".".$req->file('sk_izinOperasional')->getClientOriginalName()),$fotoName);
            $permohonan->sk_izinOperasional = date('YmdHis').".".$req->file('sk_izinOperasional')->getClientOriginalName();
        }

        if($req->hasFile('sertif_bpjs_sehat')){
            $sertif_bpjs_sehat = $req->file('sertif_bpjs_sehat');
            $extension = $sertif_bpjs_sehat->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sertif_bpjs_sehat->move(storage_path('app/public/perizinanPendirian/sertif_bpjs_sehat',date('YmdHis').".".$req->file('sertif_bpjs_sehat')->getClientOriginalName()),$fotoName);
            $permohonan->sertif_bpjs_sehat = date('YmdHis').".".$req->file('sertif_bpjs_sehat')->getClientOriginalName();
        }

        if($req->hasFile('sertif_bpjs_kerja')){
            $sertif_bpjs_kerja = $req->file('sertif_bpjs_kerja');
            $extension = $sertif_bpjs_kerja->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sertif_bpjs_kerja->move(storage_path('app/public/perizinanPendirian/sertif_bpjs_kerja',date('YmdHis').".".$req->file('sertif_bpjs_kerja')->getClientOriginalName()),$fotoName);
            $permohonan->sertif_bpjs_kerja = date('YmdHis').".".$req->file('sertif_bpjs_kerja')->getClientOriginalName();
        }

        if($req->hasFile('denah')){
            $denah = $req->file('denah');
            $extension = $denah->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $denah->move(storage_path('app/public/perizinanPendirian/denah',date('YmdHis').".".$req->file('denah')->getClientOriginalName()),$fotoName);
            $permohonan->denah = date('YmdHis').".".$req->file('denah')->getClientOriginalName();
        }

        if($req->hasFile('gedung')){
            $gedung = $req->file('gedung');
            $extension = $gedung->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $gedung->move(storage_path('app/public/perizinanPendirian/gedung',date('YmdHis').".".$req->file('gedung')->getClientOriginalName()),$fotoName);
            $permohonan->gedung = date('YmdHis').".".$req->file('gedung')->getClientOriginalName();
        }

        if($req->hasFile('akta_pendirian')){
            $akta_pendirian = $req->file('akta_pendirian');
            $extension = $akta_pendirian->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $akta_pendirian->move(storage_path('app/public/perizinanPendirian/akta_pendirian',date('YmdHis').".".$req->file('akta_pendirian')->getClientOriginalName()),$fotoName);
            $permohonan->akta_pendirian = date('YmdHis').".".$req->file('akta_pendirian')->getClientOriginalName();
        }

        if($req->hasFile('surper_kades')){
            $surper_kades = $req->file('surper_kades');
            $extension = $surper_kades->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $surper_kades->move(storage_path('app/public/perizinanPendirian/surper_kades',date('YmdHis').".".$req->file('surper_kades')->getClientOriginalName()),$fotoName);
            $permohonan->surper_kades = date('YmdHis').".".$req->file('surper_kades')->getClientOriginalName();
        }

        if($req->hasFile('surper_camat')){
            $surper_camat = $req->file('surper_camat');
            $extension = $surper_camat->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $surper_camat->move(storage_path('app/public/perizinanPendirian/surper_camat',date('YmdHis').".".$req->file('surper_camat')->getClientOriginalName()),$fotoName);
            $permohonan->surper_camat = date('YmdHis').".".$req->file('surper_camat')->getClientOriginalName();
        }

        if($req->hasFile('surat_tanah')){
            $surat_tanah = $req->file('surat_tanah');
            $extension = $surat_tanah->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $surat_tanah->move(storage_path('app/public/perizinanPendirian/surat_tanah',date('YmdHis').".".$req->file('surat_tanah')->getClientOriginalName()),$fotoName);
            $permohonan->surat_tanah = date('YmdHis').".".$req->file('surat_tanah')->getClientOriginalName();
        }

        if($req->hasFile('patuh_aturan')){
            $patuh_aturan = $req->file('patuh_aturan');
            $extension = $patuh_aturan->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $patuh_aturan->move(storage_path('app/public/perizinanPendirian/patuh_aturan',date('YmdHis').".".$req->file('patuh_aturan')->getClientOriginalName()),$fotoName);
            $permohonan->patuh_aturan = date('YmdHis').".".$req->file('patuh_aturan')->getClientOriginalName();
        }

        if($req->hasFile('daftar_siswa')){
            $daftar_siswa = $req->file('daftar_siswa');
            $extension = $daftar_siswa->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $daftar_siswa->move(storage_path('app/public/perizinanPendirian/daftar_siswa',date('YmdHis').".".$req->file('daftar_siswa')->getClientOriginalName()),$fotoName);
            $permohonan->daftar_siswa = date('YmdHis').".".$req->file('daftar_siswa')->getClientOriginalName();
        }

        if($req->hasFile('daftar_TKK')){
            $daftar_TKK = $req->file('daftar_TKK');
            $extension = $daftar_TKK->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $daftar_TKK->move(storage_path('app/public/perizinanPendirian/daftar_TKK',date('YmdHis').".".$req->file('daftar_TKK')->getClientOriginalName()),$fotoName);
            $permohonan->daftar_TKK = date('YmdHis').".".$req->file('daftar_TKK')->getClientOriginalName();
        }

        if($req->hasFile('daftar_TKnK')){
            $daftar_TKnK = $req->file('daftar_TKnK');
            $extension = $daftar_TKnK->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $daftar_TKnK->move(storage_path('app/public/perizinanPendirian/daftar_TKnK',date('YmdHis').".".$req->file('daftar_TKnK')->getClientOriginalName()),$fotoName);
            $permohonan->daftar_TKnK = date('YmdHis').".".$req->file('daftar_TKnK')->getClientOriginalName();
        }

        if($req->hasFile('kurikulum')){
            $kurikulum = $req->file('kurikulum');
            $extension = $kurikulum->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $kurikulum->move(storage_path('app/public/perizinanPendirian/kurikulum',date('YmdHis').".".$req->file('kurikulum')->getClientOriginalName()),$fotoName);
            $permohonan->kurikulum = date('YmdHis').".".$req->file('kurikulum')->getClientOriginalName();
        }

        if($req->hasFile('sarpras')){
            $sarpras = $req->file('sarpras');
            $extension = $sarpras->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sarpras->move(storage_path('app/public/perizinanPendirian/sarpras',date('YmdHis').".".$req->file('sarpras')->getClientOriginalName()),$fotoName);
            $permohonan->sarpras = date('YmdHis').".".$req->file('sarpras')->getClientOriginalName();
        }

        if($req->hasFile('sk_yayasan')){
            $sk_yayasan = $req->file('sk_yayasan');
            $extension = $sk_yayasan->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sk_yayasan->move(storage_path('app/public/perizinanPendirian/sk_yayasan',date('YmdHis').".".$req->file('sk_yayasan')->getClientOriginalName()),$fotoName);
            $permohonan->sk_yayasan = date('YmdHis').".".$req->file('sk_yayasan')->getClientOriginalName();
        }

        if($req->hasFile('studi_layak')){
            $studi_layak = $req->file('studi_layak');
            $extension = $studi_layak->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $studi_layak->move(storage_path('app/public/perizinanPendirian/studi_layak',date('YmdHis').".".$req->file('studi_layak')->getClientOriginalName()),$fotoName);
            $permohonan->studi_layak = date('YmdHis').".".$req->file('studi_layak')->getClientOriginalName();
        }

        }
        // End Upload File Pendirian

        $permohonan->save();


        return back()->with('success','Permohonan Berhasil');
    }

    public function status_dokumenUpdate(Request $req,$id)
    {
        $permohonan = PerizinanPendirian::find($id);

        $permohonan->status_dokumen = $req->status_dokumen;
        $permohonan->save();
        return back()->with('success','Permohonan Berhasil');
    }

}

