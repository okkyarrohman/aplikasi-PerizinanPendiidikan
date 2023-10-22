<?php

namespace App\Http\Controllers;

use App\Models\PerizinanPenyelenggaraan;
use Illuminate\Http\Request;

class PerizinanPenyelenggaraanController extends Controller
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
            'doc_pendirian' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'identitas_pemilik' => ['max:300','mimes:pdf,jpg,jpeg,png'], //Maks = 300Kb
            'identitas_pengajar' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'kualifikasi_pengajar' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'kurikulum' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'doc_keuangan' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'surat_otorisasi' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'program_akademik' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'sarpras' => ['max:300','mimes:pdf'], //Maks = 300Kb
             //End Validate File Untuk Pendirian TK

        ]);

        // POST Form Umum
        $permohonan = New PerizinanPenyelenggaraan;
        $permohonan->nama = $req->nama;
        $permohonan->email = $req->email;
        $permohonan->telepon = $req->telepon;
        $permohonan->status_dokumen = $req->status_dokumen;
        $permohonan->tipe_dokumen = $req->tipe_dokumen;
        $permohonan->longtitude = $req->longtitude;
        $permohonan->latitude = $req->latitude;
        $permohonan->lokasi = $req->lokasi;
        // END POST Form Umum


        // REQUEST FILE Perizinan Penyelenggaraan
        if($req->file())
        {


        if($req->hasFile('doc_pendirian')){
            $doc_pendirian = $req->file('doc_pendirian');
            $extension = $doc_pendirian->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $doc_pendirian->move(storage_path('app/public/perizinanPenyelenggaraan/doc_pendirian',date('YmdHis').".".$req->file('doc_pendirian')->getClientOriginalName()),$fotoName);
            $permohonan->doc_pendirian = date('YmdHis').".".$req->file('doc_pendirian')->getClientOriginalName();
        }

        if($req->hasFile('identitas_pemilik')){
            $identitas_pemilik = $req->file('identitas_pemilik');
            $extension = $identitas_pemilik->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $identitas_pemilik->move(storage_path('app/public/perizinanPenyelenggaraan/identitas_pemilik',date('YmdHis').".".$req->file('identitas_pemilik')->getClientOriginalName()),$fotoName);
            $permohonan->identitas_pemilik = date('YmdHis').".".$req->file('identitas_pemilik')->getClientOriginalName();
        }

        if($req->hasFile('identitas_pengajar')){
            $identitas_pengajar = $req->file('identitas_pengajar');
            $extension = $identitas_pengajar->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $identitas_pengajar->move(storage_path('app/public/perizinanPenyelenggaraan/identitas_pengajar',date('YmdHis').".".$req->file('identitas_pengajar')->getClientOriginalName()),$fotoName);
            $permohonan->identitas_pengajar = date('YmdHis').".".$req->file('identitas_pengajar')->getClientOriginalName();
        }

        if($req->hasFile('kualifikasi_pengajar')){
            $kualifikasi_pengajar = $req->file('kualifikasi_pengajar');
            $extension = $kualifikasi_pengajar->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $kualifikasi_pengajar->move(storage_path('app/public/perizinanPenyelenggaraan/kualifikasi_pengajar',date('YmdHis').".".$req->file('kualifikasi_pengajar')->getClientOriginalName()),$fotoName);
            $permohonan->kualifikasi_pengajar = date('YmdHis').".".$req->file('kualifikasi_pengajar')->getClientOriginalName();
        }

        if($req->hasFile('kurikulum')){
            $kurikulum = $req->file('kurikulum');
            $extension = $kurikulum->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $kurikulum->move(storage_path('app/public/perizinanPenyelenggaraan/kurikulum',date('YmdHis').".".$req->file('kurikulum')->getClientOriginalName()),$fotoName);
            $permohonan->kurikulum = date('YmdHis').".".$req->file('kurikulum')->getClientOriginalName();
        }

        if($req->hasFile('doc_keuangan')){
            $doc_keuangan = $req->file('doc_keuangan');
            $extension = $doc_keuangan->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $doc_keuangan->move(storage_path('app/public/perizinanPenyelenggaraan/doc_keuangan',date('YmdHis').".".$req->file('doc_keuangan')->getClientOriginalName()),$fotoName);
            $permohonan->doc_keuangan = date('YmdHis').".".$req->file('doc_keuangan')->getClientOriginalName();
        }

        if($req->hasFile('surat_otorisasi')){
            $surat_otorisasi = $req->file('surat_otorisasi');
            $extension = $surat_otorisasi->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $surat_otorisasi->move(storage_path('app/public/perizinanPenyelenggaraan/surat_otorisasi',date('YmdHis').".".$req->file('surat_otorisasi')->getClientOriginalName()),$fotoName);
            $permohonan->surat_otorisasi = date('YmdHis').".".$req->file('surat_otorisasi')->getClientOriginalName();
        }

        if($req->hasFile('program_akademik')){
            $program_akademik = $req->file('program_akademik');
            $extension = $program_akademik->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $program_akademik->move(storage_path('app/public/perizinanPenyelenggaraan/program_akademik',date('YmdHis').".".$req->file('program_akademik')->getClientOriginalName()),$fotoName);
            $permohonan->program_akademik = date('YmdHis').".".$req->file('program_akademik')->getClientOriginalName();
        }

        if($req->hasFile('sarpras')){
            $sarpras = $req->file('sarpras');
            $extension = $sarpras->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sarpras->move(storage_path('app/public/perizinanPenyelenggaraan/sarpras',date('YmdHis').".".$req->file('sarpras')->getClientOriginalName()),$fotoName);
            $permohonan->sarpras = date('YmdHis').".".$req->file('sarpras')->getClientOriginalName();
        }
        }
        //  END REQUEST FILE PerizinanPenyelenggaraan


        $permohonan->save();

        return back()->with('success', 'data berhasil dikirim');
    }
    public function update(Request $req)
    {

        // POST Form Umum
        $permohonan = PerizinanPenyelenggaraan::find($req->id);
        $permohonan->nama = $req->nama;
        $permohonan->email = $req->email;
        $permohonan->telepon = $req->telepon;
        $permohonan->status_dokumen = $req->status_dokumen;
        $permohonan->tipe_dokumen = $req->tipe_dokumen;
        $permohonan->longtitude = $req->longtitude;
        $permohonan->latitude = $req->latitude;
        $permohonan->lokasi = $req->lokasi;
        // END POST Form Umum


        // REQUEST FILE Perizinan Penyelenggaraan
        if($req->file())
        {

        if($req->hasFile('dokumen_survey')){
            $dokumen_survey = $req->file('dokumen_survey');
            $extension = $dokumen_survey->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $dokumen_survey->move(storage_path('app/public/perizinanPenyelenggaraan/dokumen_survey',date('YmdHis').".".$req->file('dokumen_survey')->getClientOriginalName()),$fotoName);
            $permohonan->dokumen_survey = date('YmdHis').".".$req->file('dokumen_survey')->getClientOriginalName();
        }

        if($req->hasFile('doc_pendirian')){
            $doc_pendirian = $req->file('doc_pendirian');
            $extension = $doc_pendirian->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $doc_pendirian->move(storage_path('app/public/perizinanPenyelenggaraan/doc_pendirian',date('YmdHis').".".$req->file('doc_pendirian')->getClientOriginalName()),$fotoName);
            $permohonan->doc_pendirian = date('YmdHis').".".$req->file('doc_pendirian')->getClientOriginalName();
        }

        if($req->hasFile('identitas_pemilik')){
            $identitas_pemilik = $req->file('identitas_pemilik');
            $extension = $identitas_pemilik->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $identitas_pemilik->move(storage_path('app/public/perizinanPenyelenggaraan/identitas_pemilik',date('YmdHis').".".$req->file('identitas_pemilik')->getClientOriginalName()),$fotoName);
            $permohonan->identitas_pemilik = date('YmdHis').".".$req->file('identitas_pemilik')->getClientOriginalName();
        }

        if($req->hasFile('identitas_pengajar')){
            $identitas_pengajar = $req->file('identitas_pengajar');
            $extension = $identitas_pengajar->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $identitas_pengajar->move(storage_path('app/public/perizinanPenyelenggaraan/identitas_pengajar',date('YmdHis').".".$req->file('identitas_pengajar')->getClientOriginalName()),$fotoName);
            $permohonan->identitas_pengajar = date('YmdHis').".".$req->file('identitas_pengajar')->getClientOriginalName();
        }

        if($req->hasFile('kualifikasi_pengajar')){
            $kualifikasi_pengajar = $req->file('kualifikasi_pengajar');
            $extension = $kualifikasi_pengajar->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $kualifikasi_pengajar->move(storage_path('app/public/perizinanPenyelenggaraan/kualifikasi_pengajar',date('YmdHis').".".$req->file('kualifikasi_pengajar')->getClientOriginalName()),$fotoName);
            $permohonan->kualifikasi_pengajar = date('YmdHis').".".$req->file('kualifikasi_pengajar')->getClientOriginalName();
        }

        if($req->hasFile('kurikulum')){
            $kurikulum = $req->file('kurikulum');
            $extension = $kurikulum->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $kurikulum->move(storage_path('app/public/perizinanPenyelenggaraan/kurikulum',date('YmdHis').".".$req->file('kurikulum')->getClientOriginalName()),$fotoName);
            $permohonan->kurikulum = date('YmdHis').".".$req->file('kurikulum')->getClientOriginalName();
        }

        if($req->hasFile('doc_keuangan')){
            $doc_keuangan = $req->file('doc_keuangan');
            $extension = $doc_keuangan->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $doc_keuangan->move(storage_path('app/public/perizinanPenyelenggaraan/doc_keuangan',date('YmdHis').".".$req->file('doc_keuangan')->getClientOriginalName()),$fotoName);
            $permohonan->doc_keuangan = date('YmdHis').".".$req->file('doc_keuangan')->getClientOriginalName();
        }

        if($req->hasFile('surat_otorisasi')){
            $surat_otorisasi = $req->file('surat_otorisasi');
            $extension = $surat_otorisasi->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $surat_otorisasi->move(storage_path('app/public/perizinanPenyelenggaraan/surat_otorisasi',date('YmdHis').".".$req->file('surat_otorisasi')->getClientOriginalName()),$fotoName);
            $permohonan->surat_otorisasi = date('YmdHis').".".$req->file('surat_otorisasi')->getClientOriginalName();
        }

        if($req->hasFile('program_akademik')){
            $program_akademik = $req->file('program_akademik');
            $extension = $program_akademik->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $program_akademik->move(storage_path('app/public/perizinanPenyelenggaraan/program_akademik',date('YmdHis').".".$req->file('program_akademik')->getClientOriginalName()),$fotoName);
            $permohonan->program_akademik = date('YmdHis').".".$req->file('program_akademik')->getClientOriginalName();
        }

        if($req->hasFile('sarpras')){
            $sarpras = $req->file('sarpras');
            $extension = $sarpras->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sarpras->move(storage_path('app/public/perizinanPenyelenggaraan/sarpras',date('YmdHis').".".$req->file('sarpras')->getClientOriginalName()),$fotoName);
            $permohonan->sarpras = date('YmdHis').".".$req->file('sarpras')->getClientOriginalName();
        }
        }
        //  END REQUEST FILE PerizinanPenyelenggaraan


        $permohonan->save();

        return back()->with('success', 'data berhasil dikirim');
    }

    public function update_status_dokumen(Request $req)
    {
        $permohonan = PerizinanPenyelenggaraan::find($req->id);

        $permohonan->status_dokumen = $req->status_dokumen;
        $permohonan->save();
        return back()->with('success','Permohonan Berhasil');
    }
}
