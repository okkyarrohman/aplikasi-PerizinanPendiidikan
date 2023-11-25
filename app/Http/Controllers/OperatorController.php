<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerizinanPendirian;
use App\Models\PerizinanPenyelenggaraan;
use Illuminate\Support\Facades\Auth;

class OperatorController extends Controller
{
    public function index_pendirian(){
        $user = Auth::user();

        return view('operator.tracking.perizinanPendirian.index', compact('user'));
    }


    // Perizinan Pendirian
    public function checking_berkas_pendirian()
    {
        $user = Auth::user();

        $permohonans = PerizinanPendirian::where([

            'status_dokumen' => 'Checking Berkas Operator'
        ])->get();

        return view('operator.tracking.perizinanPendirian.checkingBerkas.index',compact('permohonans','user'));
    }

    public function dokumen_valid_pendirian()
    {
        $user = Auth::user();

        $permohonans = PerizinanPendirian::where([

            'status_dokumen' => 'Dokumen Valid'
        ])->get();

        return view('operator.tracking.perizinanPendirian.dokumenValid.index',compact('permohonans','user'));
    }

    public function dokumen_tidak_valid_pendirian()
    {
        $user = Auth::user();

        $permohonans = PerizinanPendirian::where([

            'status_dokumen' => 'Dokumen Tidak Valid'
        ])->get();

        return view('operator.tracking.perizinanPendirian.dokumenTidakValid.index',compact('permohonans','user'));

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
        $user = Auth::user();

        $permohonans = PerizinanPendirian::where('id',$id)->first();

        return view('operator.tracking.perizinanPendirian.edit',compact('permohonans','user'));
    }

    public function edit_penyelenggaraan($id)
    {
        $user = Auth::user();

        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();

        return view('operator.tracking.perizinanPenyelenggaraan.edit',compact('permohonans','user'));
    }

}
