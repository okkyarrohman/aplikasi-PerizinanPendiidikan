<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perizinan;

class OperatorController extends Controller
{
    public function index(){
        $trackings = Perizinan::all();

        return view('operator.status',compact('trackings'));
    }


    public function edit($id, Perizinan $perizinan){
        $perizinan = Perizinan::find($id);
        return view('operator.edit',compact('perizinan'));
    }

    public function update(Request $request){

        $perizinan = Perizinan::find($request->id);
        $perizinan->nomor_berkas = $request->nomor_berkas;

        $perizinan->status_permohonan = $request->status_permohonan;

        $perizinan->save();

        return redirect()->route('operator')->with('success','data berhasil diupdate');
    }

    public function download_ktp($id){
        $perizinan = Perizinan::where('id',$id)->first();
        $lokasiFile = storage_path("app/public/berkas/ktp/". $perizinan->ktp);

        return response()->download($lokasiFile);
    }
}
