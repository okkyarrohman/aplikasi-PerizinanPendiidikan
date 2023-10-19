<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerizinanPendirian;
use App\Models\PerizinanPenyelenggaraan;

class SurveyorController extends Controller
{
    public function sedang_disurvey_pendirian()
    {
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->get();

        return view('surveyor.perizinanPendirian.tracking.sedangDisurvey.index',compact('permohonans'));;
    }

    public function telah_disurvey_pendirian()
    {
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Telah Disurvey'
        ])->get();

        return view('surveyor.perizinanPendirian.tracking.telahDisurvey.index',compact('permohonans'));;
    }

    public function sedang_disurvey_penyelenggaraan()
    {
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->get();

        return view('surveyor.perizinanPenyelenggaraan.tracking.sedangDisurvey.index',compact('permohonans'));;
    }

    public function telah_disurvey_penyelenggaraan()
    {
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Telah Disurvey'
        ])->get();

        return view('surveyor.perizinanPenyelenggaraan.tracking.telahDisurvey.index',compact('permohonans'));;
    }

    public function edit_sedang_disurvey_pendirian($id)
    {
        $permohonans = PerizinanPendirian::where('id',$id)->first();

        return view('surveyor.perizinanPendirian.tracking.sedangDisurvey.edit',compact('permohonans'));
    }

    public function edit_sedang_disurvey_penyelenggaraan($id)
    {
        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();

        return view('surveyor.perizinanPenyelenggaraan.tracking.sedangDisurvey.edit',compact('permohonans'));
    }


}
