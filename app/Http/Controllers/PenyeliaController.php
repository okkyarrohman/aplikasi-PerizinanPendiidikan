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




}

