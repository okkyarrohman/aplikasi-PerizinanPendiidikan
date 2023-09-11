<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perizinan;

class SurveyorController extends Controller
{



    public function status(){
        $trackings = Perizinan::all();

        return view('surveyor.status',compact('trackings'));
    }

    public function create($id){
        $perizinan = Perizinan::find($id);

        return view('surveyor.edit',compact('perizinan'));
    }


    public function update(Request $request){
        $perizinan = Perizinan::find($request->id);
        $perizinan->status_permohonan = $request->status_permohonan;

        if($request->hasFile('dokumen_survey')){
            $dokumen_survey = $request->file('dokumen_survey');
            $extension = $dokumen_survey->getClientOriginalName();
            $fotoName = $extension;
            $dokumen_survey->move(storage_path('app/public/berkas/dokumen_survey',
                $request->file('dokumen_survey')->getClientOriginalName()),$fotoName);
            $perizinan->dokumen_survey = $request->file('dokumen_survey')->getClientOriginalName();
        }

        $perizinan->save();
        return redirect()->route('surveyor.index')->with('success','data berhasil diupdate');
    }
}
