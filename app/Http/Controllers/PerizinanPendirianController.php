<?php

namespace App\Http\Controllers;

use App\Http\Requests\PerizinanPendirianRequest;
use App\Models\PerizinanPendirian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PerizinanPendirianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.perizinanPendirian.index');
    }

    public function trackings($id)
    {
        $permohonan = PerizinanPendirian::find($id);

        return view('admin.perizinanPendirian.tracking',compact('permohonan'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_tk()
    {

        return view('admin.perizinanPendirian.createTk');
    }

    public function create_sd()
    {

        return view('admin.perizinanPendirian.createSd');
    }

    /**
     * Store a newly created resource in storage.
     */



    public function store_tk(Request $req)
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


        // Upload File Pendirian TK
        if($req->file())
        {

        if($req->hasFile('surat_permohonan')){
            $surat_permohonan = $req->file('surat_permohonan');
            $extension = $surat_permohonan->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $surat_permohonan->move(storage_path('app/public/perizinanPendirian/tk/surat_permohonan',date('YmdHis').".".$req->file('surat_permohonan')->getClientOriginalName()),$fotoName);
            $permohonan->surat_permohonan = date('YmdHis').".".$req->file('surat_permohonan')->getClientOriginalName();
        }

        if($req->hasFile('ktp')){
            $ktp = $req->file('ktp');
            $extension = $ktp->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $ktp->move(storage_path('app/public/perizinanPendirian/tk/ktp',date('YmdHis').".".$req->file('ktp')->getClientOriginalName()),$fotoName);
            $permohonan->ktp = date('YmdHis').".".$req->file('ktp')->getClientOriginalName();
        }

        if($req->hasFile('suket_domisili')){
            $suket_domisili = $req->file('suket_domisili');
            $extension = $suket_domisili->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_domisili->move(storage_path('app/public/perizinanPendirian/tk/suket_domisili',date('YmdHis').".".$req->file('suket_domisili')->getClientOriginalName()),$fotoName);
            $permohonan->suket_domisili = date('YmdHis').".".$req->file('suket_domisili')->getClientOriginalName();
        }

        if($req->hasFile('pengurus')){
            $pengurus = $req->file('pengurus');
            $extension = $pengurus->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $pengurus->move(storage_path('app/public/perizinanPendirian/tk/pengurus',date('YmdHis').".".$req->file('pengurus')->getClientOriginalName()),$fotoName);
            $permohonan->pengurus = date('YmdHis').".".$req->file('pengurus')->getClientOriginalName();
        }

        if($req->hasFile('suket_mendirikan')){
            $suket_mendirikan = $req->file('suket_mendirikan');
            $extension = $suket_mendirikan->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_mendirikan->move(storage_path('app/public/perizinanPendirian/tk/suket_mendirikan',date('YmdHis').".".$req->file('suket_mendirikan')->getClientOriginalName()),$fotoName);
            $permohonan->suket_mendirikan = date('YmdHis').".".$req->file('suket_mendirikan')->getClientOriginalName();
        }

        if($req->hasFile('suket_tanah')){
            $suket_tanah = $req->file('suket_tanah');
            $extension = $suket_tanah->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_tanah->move(storage_path('app/public/perizinanPendirian/tk/suket_tanah',date('YmdHis').".".$req->file('suket_tanah')->getClientOriginalName()),$fotoName);
            $permohonan->suket_tanah = date('YmdHis').".".$req->file('suket_tanah')->getClientOriginalName();
        }

        if($req->hasFile('suket_pbh')){
            $suket_pbh = $req->file('suket_pbh');
            $extension = $suket_pbh->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_pbh->move(storage_path('app/public/perizinanPendirian/tk/suket_pbh',date('YmdHis').".".$req->file('suket_pbh')->getClientOriginalName()),$fotoName);
            $permohonan->suket_pbh = date('YmdHis').".".$req->file('suket_pbh')->getClientOriginalName();
        }

        if($req->hasFile('suket_perubahanPBH')){
            $suket_perubahanPBH = $req->file('suket_perubahanPBH');
            $extension = $suket_perubahanPBH->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_perubahanPBH->move(storage_path('app/public/perizinanPendirian/tk/suket_perubahanPBH',date('YmdHis').".".$req->file('suket_perubahanPBH')->getClientOriginalName()),$fotoName);
            $permohonan->suket_perubahanPBH = date('YmdHis').".".$req->file('suket_perubahanPBH')->getClientOriginalName();
        }

        if($req->hasFile('suket_rip')){
            $suket_rip = $req->file('suket_rip');
            $extension = $suket_rip->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_rip->move(storage_path('app/public/perizinanPendirian/tk/suket_rip',date('YmdHis').".".$req->file('suket_rip')->getClientOriginalName()),$fotoName);
            $permohonan->suket_rip = date('YmdHis').".".$req->file('suket_rip')->getClientOriginalName();
        }

        if($req->hasFile('suket_psp')){
            $suket_psp = $req->file('suket_psp');
            $extension = $suket_psp->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $suket_psp->move(storage_path('app/public/perizinanPendirian/tk/suket_psp',date('YmdHis').".".$req->file('suket_psp')->getClientOriginalName()),$fotoName);
            $permohonan->suket_psp = date('YmdHis').".".$req->file('suket_psp')->getClientOriginalName();
        }

        if($req->hasFile('sukas_perizinan')){
            $sukas_perizinan = $req->file('sukas_perizinan');
            $extension = $sukas_perizinan->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sukas_perizinan->move(storage_path('app/public/perizinanPendirian/tk/sukas_perizinan',date('YmdHis').".".$req->file('sukas_perizinan')->getClientOriginalName()),$fotoName);
            $permohonan->sukas_perizinan = date('YmdHis').".".$req->file('sukas_perizinan')->getClientOriginalName();
        }

        if($req->hasFile('sk_izinOperasional')){
            $sk_izinOperasional = $req->file('sk_izinOperasional');
            $extension = $sk_izinOperasional->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sk_izinOperasional->move(storage_path('app/public/perizinanPendirian/tk/sk_izinOperasional',date('YmdHis').".".$req->file('sk_izinOperasional')->getClientOriginalName()),$fotoName);
            $permohonan->sk_izinOperasional = date('YmdHis').".".$req->file('sk_izinOperasional')->getClientOriginalName();
        }

        if($req->hasFile('sertif_bpjs_sehat')){
            $sertif_bpjs_sehat = $req->file('sertif_bpjs_sehat');
            $extension = $sertif_bpjs_sehat->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sertif_bpjs_sehat->move(storage_path('app/public/perizinanPendirian/tk/sertif_bpjs_sehat',date('YmdHis').".".$req->file('sertif_bpjs_sehat')->getClientOriginalName()),$fotoName);
            $permohonan->sertif_bpjs_sehat = date('YmdHis').".".$req->file('sertif_bpjs_sehat')->getClientOriginalName();
        }

        if($req->hasFile('sertif_bpjs_kerja')){
            $sertif_bpjs_kerja = $req->file('sertif_bpjs_kerja');
            $extension = $sertif_bpjs_kerja->getClientOriginalName();
            $fotoName = date('YmdHis').".".$extension;
            $sertif_bpjs_kerja->move(storage_path('app/public/perizinanPendirian/tk/sertif_bpjs_kerja',date('YmdHis').".".$req->file('sertif_bpjs_kerja')->getClientOriginalName()),$fotoName);
            $permohonan->sertif_bpjs_kerja = date('YmdHis').".".$req->file('sertif_bpjs_kerja')->getClientOriginalName();
        }
        }


        $permohonan->save();


        return redirect()
            ->route('admin')
            ->with('success','Permohonan Berhasil');

    }





    /**
     * Display the specified resource.
     */
    public function show_tk_cb(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
