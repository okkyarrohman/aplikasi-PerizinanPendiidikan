<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use App\Models\Perizinan;
use Illuminate\Http\Request;


class PemohonController extends Controller
{

    public function tracking(){
        $trackings = Perizinan::all();

        return view('pemohon.tracking',compact('trackings'));
    }

    public function create(){


        return view('pemohon.create');
    }


    public function store(Request $request){

        $perizinan = New Perizinan;
        $perizinan->nama = $request->nama;
        $perizinan->alamat_praktek = $request->alamat_praktek;
        $perizinan->telepon = $request->telepon;

         // Surat Pemohonan
        if($request->hasFile('surat_pemohonan')){
            $surat_pemohonan = $request->file('surat_pemohonan');
            $extension = $surat_pemohonan->getClientOriginalName();
            $fotoName = $extension;
            $surat_pemohonan->move(storage_path('app/public/berkas/surat_pemohonan',
                $request->file('surat_pemohonan')->getClientOriginalName()),$fotoName);
            $perizinan->surat_pemohonan = $request->file('surat_pemohonan')->getClientOriginalName();
        }

        // Pas Foto
        if($request->hasFile('pas_foto')){
            $pas_foto = $request->file('pas_foto');
            $extension = $pas_foto->getClientOriginalName();
            $fotoName = $extension;
            $pas_foto->move(storage_path('app/public/berkas/pas_foto',
                $request->file('pas_foto')->getClientOriginalName()),$fotoName);
            $perizinan->pas_foto = $request->file('pas_foto')->getClientOriginalName();
        }

          // ktp
        if($request->hasFile('ktp')){
            $ktp = $request->file('ktp');
            $extension = $ktp->getClientOriginalName();
            $fotoName = $extension;
            $ktp->move(storage_path('app/public/berkas/ktp',
                $request->file('ktp')->getClientOriginalName()),$fotoName);
            $perizinan->ktp = $request->file('ktp')->getClientOriginalName();
        }

          // ijazah
        if($request->hasFile('ijazah')){
            $ijazah = $request->file('ijazah');
            $extension = $ijazah->getClientOriginalName();
            $fotoName = $extension;
            $ijazah->move(storage_path('app/public/berkas/ijazah',
                $request->file('ijazah')->getClientOriginalName()),$fotoName);
            $perizinan->ijazah = $request->file('ijazah')->getClientOriginalName();
        }

        // surat_tanda_regist
        if($request->hasFile('surat_tanda_regist')){
            $surat_tanda_regist = $request->file('surat_tanda_regist');
            $extension = $surat_tanda_regist->getClientOriginalName();
            $fotoName = $extension;
            $surat_tanda_regist->move(storage_path('app/public/berkas/surat_tanda_regist',
                $request->file('surat_tanda_regist')->getClientOriginalName()),$fotoName);
            $perizinan->surat_tanda_regist = $request->file('surat_tanda_regist')->getClientOriginalName();
        }

        // surat_persetujuan_kerja
        if($request->hasFile('surat_persetujuan_kerja')){
            $surat_persetujuan_kerja = $request->file('surat_persetujuan_kerja');
            $extension = $surat_persetujuan_kerja->getClientOriginalName();
            $fotoName = $extension;
            $surat_persetujuan_kerja->move(storage_path('app/public/berkas/surat_persetujuan_kerja',
                $request->file('surat_persetujuan_kerja')->getClientOriginalName()),$fotoName);
            $perizinan->surat_persetujuan_kerja = $request->file('surat_persetujuan_kerja')->getClientOriginalName();
        }

        // surat_pernyataan_praktik
        if($request->hasFile('surat_pernyataan_praktik')){
            $surat_pernyataan_praktik = $request->file('surat_pernyataan_praktik');
            $extension = $surat_pernyataan_praktik->getClientOriginalName();
            $fotoName = $extension;
            $surat_pernyataan_praktik->move(storage_path('app/public/berkas/surat_pernyataan_praktik',
                $request->file('surat_pernyataan_praktik')->getClientOriginalName()),$fotoName);
            $perizinan->surat_pernyataan_praktik = $request->file('surat_pernyataan_praktik')->getClientOriginalName();
        }

        // Surat SEHAT
        if($request->hasFile('surat_sehat')){
            $surat_sehat = $request->file('surat_sehat');
            $extension = $surat_sehat->getClientOriginalName();
            $fotoName = $extension;
            $surat_sehat->move(storage_path('app/public/berkas/surat_sehat',
                $request->file('surat_sehat')->getClientOriginalName()),$fotoName);
            $perizinan->surat_sehat = $request->file('surat_sehat')->getClientOriginalName();
        }

         // surat_rekomendasi_profesi
        if($request->hasFile('surat_rekomendasi_profesi')){
            $surat_rekomendasi_profesi = $request->file('surat_rekomendasi_profesi');
            $extension = $surat_rekomendasi_profesi->getClientOriginalName();
            $fotoName = $extension;
            $surat_rekomendasi_profesi->move(storage_path('app/public/berkas/surat_rekomendasi_profesi',
                $request->file('surat_rekomendasi_profesi')->getClientOriginalName()),$fotoName);
            $perizinan->surat_rekomendasi_profesi = $request->file('surat_rekomendasi_profesi')->getClientOriginalName();
        }

        // surat_keterangan_praktek
        if($request->hasFile('surat_keterangan_praktek')){
            $surat_keterangan_praktek = $request->file('surat_keterangan_praktek');
            $extension = $surat_keterangan_praktek->getClientOriginalName();
            $fotoName = $extension;
            $surat_keterangan_praktek->move(storage_path('app/public/berkas/surat_keterangan_praktek',
                $request->file('surat_keterangan_praktek')->getClientOriginalName()),$fotoName);
            $perizinan->surat_keterangan_praktek = $request->file('surat_keterangan_praktek')->getClientOriginalName();
        }
        $perizinan->status_permohonan = $request->status_permohonan;

        $perizinan->save();
        return redirect()->route('pemohon')->with('succes','data berhasil ditambahkan');

    }





}
