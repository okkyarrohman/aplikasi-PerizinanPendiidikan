<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerizinanPendirian;
use App\Models\PerizinanPenyelenggaraan;

class PenyeliaController extends Controller
{
    // Pendirian
    public function dokumen_valid_pendirian()
    {
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->get();

        return view('penyelia.tracking.perizinanPendirian.dokumenValid.index',compact('permohonans'));
    }

    public function sedang_disurvey_pendirian()
    {
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->get();

        return view('penyelia.tracking.perizinanPendirian.sedangDisurvey.index',compact('permohonans'));
    }

    public function checking_berkas_pendirian()
    {
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->get();

        return view('penyelia.tracking.perizinanPendirian.checkingBerkas.index',compact('permohonans'));
    }

    public function dokumen_sesuai_pendirian()
    {
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->get();

        return view('penyelia.tracking.perizinanPendirian.dokumenSesuai.index',compact('permohonans'));
    }

    public function dokumen_tidak_sesuai_pendirian()
    {
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Tidak Sesuai'
        ])->get();

        return view('penyelia.tracking.perizinanPendirian.dokumenTidakSesuai.index',compact('permohonans'));
    }

    // Penyelenggaraan
    public function dokumen_valid_penyelenggaraan()
    {
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->get();

        return view('penyelia.tracking.perizinanPenyelenggaraan.dokumenValid.index',compact('permohonans'));
    }

    public function sedang_disurvey_penyelenggaraan()
    {
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->get();

        return view('penyelia.tracking.perizinanPenyelenggaraan.sedangDisurvey.index',compact('permohonans'));
    }

    public function checking_berkas_penyelenggaraan()
    {
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->get();

        return view('penyelia.tracking.perizinanPenyelenggaraan.checkingBerkas.index',compact('permohonans'));
    }

    public function dokumen_sesuai_penyelenggaraan()
    {
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->get();

        return view('penyelia.tracking.perizinanPenyelenggaraan.dokumenSesuai.index',compact('permohonans'));
    }

    public function dokumen_tidak_sesuai_penyelenggaraan()
    {
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Tidak Sesuai'
        ])->get();

        return view('penyelia.tracking.perizinanPenyelenggaraan.dokumenTidakSesuai.index',compact('permohonans'));
    }


    public function edit_dokumen_valid($id)
    {
        $permohonans = PerizinanPendirian::where('id',$id)->first();

        return view('penyelia.tracking.perizinanPendirian.dokumenValid.edit',compact('permohonans'));
    }

    public function edit_checking_berkas_pendirian($id)
    {
        $permohonans = PerizinanPendirian::where('id',$id)->first();

        if($permohonans->tipe_dokumen == 'TK')
        {
            return view('penyelia.tracking.perizinanPendirian.checkingBerkas.editTk',compact('permohonans'));
        }
        else{
            return view('penyelia.tracking.perizinanPendirian.checkingBerkas.editSd',compact('permohonans'));
        }


    }

}

