<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerizinanPendirian;
use App\Models\PerizinanPenyelenggaraan;

class OperatorController extends Controller
{
    // Perizinan Pendirian
    public function checking_berkas_pendirian()
    {
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Checking Berkas Operator'
        ])->get();

        return view('operator.perizinanPendirian.tracking.checkingBerkas.index',compact('permohonans'));
    }

    public function dokumen_valid_pendirian()
    {
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->get();

        return view('operator.perizinanPendirian.tracking.dokumenValid.index',compact('permohonans'));
    }

    public function dokumen_tidak_valid_pendirian()
    {
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Tidak Valid'
        ])->get();

        return view('operator.perizinanPendirian.tracking.dokumenTidakValid.index',compact('permohonans'));

    }
    // End Perizinan Pendirian


    // Perizinan Penyelenggaraan
    public function checking_berkas_penyelenggaraan()
    {
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Checking Berkas Operator'
        ])->get();

        return view('operator.perizinanPenyelenggaraan.tracking.checkingBerkas.index',compact('permohonans'));
    }

        public function dokumen_valid_penyelenggaraan()
    {
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->get();

        return view('operator.perizinanPenyelenggaraan.tracking.dokumenValid.index',compact('permohonans'));
    }

        public function dokumen_tidak_valid_penyelenggaraan()
    {
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Tidak Valid'
        ])->get();

        return view('operator.perizinanPenyelenggaraan.tracking.dokumenTidakValid.index',compact('permohonans'));
    }
    // End Perizinan Penyelenggaraan


    public function edit_pendirian($id)
    {
        $permohonans = PerizinanPendirian::where('id',$id)->first();

        return view('operator.perizinanPendirian.edit',compact('permohonans'));
    }

    public function edit_penyelenggaraan($id)
    {
        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();

        return view('operator.perizinanPenyelenggaraan.edit',compact('permohonans'));
    }

}
