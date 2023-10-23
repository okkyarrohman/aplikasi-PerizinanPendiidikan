<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerizinanPendirian;
use App\Models\PerizinanPenyelenggaraan;
use Dompdf\Dompdf;

class WalikotaController extends Controller
{
    public function notifikasi()
    {
        return "notifikasi";
    }

    public function ttd_walikota_pendirian()
    {
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Tanda Tangan Walikota'
        ])->get();

        return view('walikota.perizinanPendirian.tracking.ttdWalikota.index',compact('permohonans'));
    }

    public function tolak_pendirian()
    {
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Tolak Perizinan'
        ])->get();

        return view('walikota.perizinanPendirian.tracking.tolakDokumen.index',compact('permohonans'));
    }

    public function izin_terbit_pendirian()
    {
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Izin Diterbitkan'
        ])->get();

        return view('walikota.perizinanPendirian.tracking.izinTerbit.index',compact('permohonans'));
    }

    public function ttd_walikota_penyelenggaraan()
    {
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Tanda Tangan Walikota'
        ])->get();

        return view('walikota.perizinanPenyelenggaraan.tracking.ttdWalikota.index',compact('permohonans'));
    }

    public function tolak_penyelenggaraan()
    {
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Tolak Perizinan'
        ])->get();

        return view('walikota.perizinanPenyelenggaraan.tracking.tolakDokumen.index',compact('permohonans'));
    }

    public function izin_terbit_penyelenggaraan()
    {
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Izin Diterbitkan'
        ])->get();

        return view('walikota.perizinanPenyelenggaraan.tracking.izinTerbit.index',compact('permohonans'));
    }




    public function edit_ttd_walikota_pendirian($id)
    {
        $permohonans = PerizinanPendirian::where('id',$id)->first();

        return view('walikota.perizinanPendirian.tracking.ttdWalikota.edit',compact('permohonans'));
    }

    public function edit_ttd_walikota_penyelenggaraan($id)
    {
        $permohonans = PerizinanPendirian::where('id',$id)->first();

        return view('walikota.perizinanPenyelenggaraan.tracking.ttdWalikota.edit',compact('permohonans'));
    }


    public function download_izin_terbit_pendirian($id)
    {
        $permohonans = PerizinanPendirian::where([
            'id' =>$id
        ])->get();


        $dompdf = new Dompdf();

        $view = view('walikota.perizinanPendirian.tracking.izinTerbit.izinTerbitPdf',compact('permohonans'));

        $dompdf->loadHTML($view);

        $dompdf->render();

        return $dompdf->stream('surat_izin_terbit'.time().'.pdf');


    }

}
