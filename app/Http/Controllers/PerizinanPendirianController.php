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
    public function validator(array $data)
    {
        return Validator::make($data,[
            'nama' => ['required','string'],
            'email' => ['required','string','accepted=@gmail.com'],
            'contact' => ['required'],
            'tipe_dokumen' => ['required'],
            'status_dokumen' => ['required'],
            'longtitude' => ['required'],
            'latitude' => ['required'],
            'lokasi' => ['required'],

            // Validate File Untuk Pendirian TK
            'surat_permohonan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'ktp' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'suket_domisili' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'pengurus' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'suket_mendirikan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'suket_tanah' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'suket_pbh' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'suket_perubahanPBH' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'suket_rip' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'suket_psp' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'sukas_perizinan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'sk_izinOperasional' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'sertif_bpjs_sehat' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            'sertif_bpjs_kerja' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
             //End Validate File Untuk Pendirian TK

            // Validate File Untuk Pendirian SD/SMP/SMA
                'surat_permohonan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
                'surat_permohonan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
                'surat_permohonan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
                'surat_permohonan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
                'surat_permohonan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
                'surat_permohonan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
                'surat_permohonan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
                'surat_permohonan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
                'surat_permohonan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
                'surat_permohonan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
                'surat_permohonan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
                'surat_permohonan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
                'surat_permohonan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
                'surat_permohonan' => ['required','max:300','mimes:pdf'], //Maks = 300Kb
            // End Validate File Untuk Pendirian SD/SMP/SMA
        ]);

    }


    public function store_tk(Request $req)
    {
        $validate = $req->validate([
            'nama' => ['required','string'],
            'email' => ['required','string'],
            'contact' => ['required'],
            'tipe_dokumen' => ['required'],
            'status_dokumen' => ['required'],
            'longtitude' => ['required'],
            'latitude' => ['required'],
            'lokasi' => ['required'],

            // Validate File Untuk Pendirian TK
            'surat_permohonan' => ['max:300','mimes:pdf'], //Maks = 300Kb
            'ktp' => ['max:300','mimes:pdf'], //Maks = 300Kb
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
        $permohonan->contact = $req->contact;
        $permohonan->tipe_dokumen = $req->tipe_dokumen;
        $permohonan->status_dokumen = $req->status_dokumen;
        $permohonan->longtitude = $req->longtitude;
        $permohonan->latitude = $req->latitude;
        $permohonan->lokasi = $req->lokasi;

        // File
        // $permohonan->surat_permohonan = $surat_permohonan;


        dd($permohonan);
        $permohonan->save();

        // if($req->tipe_dokumen == 'Perizinan Pendirian TK')
        // {
        //     if($req->hasFile('surat_permohonan'))
        //     {
        //         $surat_permohonan = $req->file('surat_permohonan');
        //         $extension = time().'_'.$surat_permohonan->getClientOriginalName();
        //         $fotoName = $extension;
        //         $surat_permohonan->move(storage_path('app/public/perizinanPendirian/tk/surat_permohonan',time().'_'.$req->file('surat_permohonan')->getClientOriginalName()),$fotoName);
        //         $permohonan->surat_permohonan = $req->file('surat_permohonan')->getClientOriginalName();
        //     }
        //     dd($permohonan);
        //     $permohonan->save();
        //     return redirect()->route('admin')->with('success','Permohonan Berhasil');

        // }
        // if($req->tipe_dokumen == 'Perizinan Pendirian SD')
        // {

        // }





        }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
