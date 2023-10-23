<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerizinanPendirian;
use App\Models\PerizinanPenyelenggaraan;
use Barryvdh\DomPDF\Facade\Pdf;


class KepalaDinasController extends Controller
{
    public function notifikasi()
    {

    }

    public function ttd_kepalaDinas_pendirian()
    {
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Tanda Tangan Kepala Dinas'
        ])->get();

        return view('kepalaDinas.perizinanPendirian.tracking.ttdKepalaDinas.index',compact('permohonans'));
    }

    public function ttd_walikota_pendirian()
    {
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Tanda Tangan Walikota'
        ])->get();

        return view('kepalaDinas.perizinanPendirian.tracking.ttdWalikota.index',compact('permohonans'));
    }

    public function ttd_kepalaDinas_penyelenggaraan()
    {
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Tanda Tangan Kepala Dinas'
        ])->get();

        return view('kepalaDinas.perizinanPenyelenggaraan.tracking.ttdKepalaDinas.index',compact('permohonans'));
    }

    public function ttd_walikota_penyelenggaraan()
    {
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Tanda Tangan Walikota'
        ])->get();

        return view('kepalaDinas.perizinanPenyelenggaraan.tracking.ttdWalikota.index',compact('permohonans'));
    }

    public function edit_ttd_kepalaDinas_pendirian($id)
    {
        $permohonans = PerizinanPendirian::where('id',$id)->first();

        return view('kepalaDinas.perizinanPendirian.tracking.ttdKepalaDinas.edit',compact('permohonans'));
    }

    public function edit_ttd_kepalaDinas_penyelenggaraan($id)
    {
        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();

        return view('kepalaDinas.perizinanPenyelenggaraan.tracking.ttdKepalaDinas.edit',compact('permohonans'));
    }




    public function izin_terbit_pendirian_pdf($id)
    {
        $permohonans = PerizinanPendirian::where('id',$id)->get();


    }

}
