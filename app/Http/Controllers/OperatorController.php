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

    public function download_suratPemohon($id){
        $perizinan = Perizinan::where('id',$id)->first();
        $lokasiFile = storage_path("app/public/berkas/surat_pemohonan/". $perizinan->surat_pemohonan);

        return response()->download($lokasiFile);
    }

    public function download_ijazah($id){
        $perizinan = Perizinan::where('id',$id)->first();
        $lokasiFile = storage_path("app/public/berkas/ijazah/". $perizinan->ijazah);

        return response()->download($lokasiFile);
    }

    public function download_suratTandaRegist($id){
        $perizinan = Perizinan::where('id',$id)->first();
        $lokasiFile = storage_path("app/public/berkas/surat_tanda_regist/". $perizinan->surat_tanda_regist);

        return response()->download($lokasiFile);
    }

    public function download_suratPersetujuanKerja($id){
        $perizinan = Perizinan::where('id',$id)->first();
        $lokasiFile = storage_path("app/public/berkas/surat_persetujuan_kerja/". $perizinan->surat_persetujuan_kerja);

        return response()->download($lokasiFile);
    }

    public function download_suratPernyataanPraktik($id){
        $perizinan = Perizinan::where('id',$id)->first();
        $lokasiFile = storage_path("app/public/berkas/surat_pernyataan_praktik/". $perizinan->surat_pernyataan_praktik);

        return response()->download($lokasiFile);
    }

    public function download_suratRekomendasiProfesi($id){
        $perizinan = Perizinan::where('id',$id)->first();
        $lokasiFile = storage_path("app/public/berkas/surat_rekomendasi_profesi/". $perizinan->surat_rekomendasi_profesi);

        return response()->download($lokasiFile);
    }

    public function download_suratKeteranganPraktek($id){
        $perizinan = Perizinan::where('id',$id)->first();
        $lokasiFile = storage_path("app/public/berkas/surat_keterangan_praktek/". $perizinan->surat_keterangan_praktek);

        return response()->download($lokasiFile);
    }
}
