<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perizinan;

class PenyeliaController extends Controller
{
    public function tracking_pemohon(){

        $trackings = Perizinan::where(['status_permohonan' => 'Checking Berkas'])->get();

        return view('penyelia.status',compact('trackings'));
    }

    public function tracking_surveyor(){

        $trackings = Perizinan::all();

        return view('penyelia.surveyor',compact('trackings'));
    }




    public function edit_trackingPemohon($id){
        $perizinan = Perizinan::find($id);
        return view('penyelia.edit',compact('perizinan'));
    }

    public function update(Request $request){
        $perizinan = Perizinan::find($request->id);

        $perizinan->status_permohonan = $request->status_permohonan;

        $perizinan->save();

        return redirect()->route('penyelia')->with('success','data berhasil diupdate');
    }

    public function is_survey(Request $request){

        $perizinan = Perizinan::find($request->id);

        $perizinan->status_permohonan = $request->status_permohonan;

        $perizinan->save();

        return back();
    }

    public function after_survey($id){

         $perizinan = Perizinan::find($id);
        return view('penyelia.afterSurvey',compact('perizinan'));
    }

    public function update_survey(Request $request){
        $perizinan = Perizinan::find($request->id);
        $perizinan->status_permohonan = $request->status_permohonan;

        if($request->hasFile('surat_perizinan_permohonan')){
            $surat_perizinan_permohonan = $request->file('surat_perizinan_permohonan');
            $extension = $surat_perizinan_permohonan->getClientOriginalName();
            $fotoName = $extension;
            $surat_perizinan_permohonan->move(storage_path('app/public/berkas/surat_perizinan_permohonan',
                $request->file('surat_perizinan_permohonan')->getClientOriginalName()),$fotoName);
            $perizinan->surat_perizinan_permohonan = $request->file('surat_perizinan_permohonan')->getClientOriginalName();
        }
        $perizinan->save();

        return redirect()->route('penyelia-surveyor.index')->with('success','data berhasil diupdate');

    }


}

