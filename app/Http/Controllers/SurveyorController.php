<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerizinanPendirian;
use App\Models\PerizinanPenyelenggaraan;
use Illuminate\Support\Facades\Auth;

class SurveyorController extends Controller
{

    public function index_pendirian(){
        $user = Auth::user();

        return view('surveyor.tracking.perizinanPendirian.index', compact('user'));
    }

    public function index_penyelenggaraan(){
        $user = Auth::user();

        return view('surveyor.tracking.perizinanPenyelenggaraan.index', compact('user'));
    }

    public function sedang_disurvey_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->get();

        return view('surveyor.tracking.perizinanPendirian.sedangDisurvey.index',compact('permohonans','user'));;
    }

    public function telah_disurvey_pendirian()
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where([
            'status_dokumen' => 'Telah Disurvey'
        ])->get();

        return view('surveyor.tracking.perizinanPendirian.telahDisurvey.index',compact('permohonans','user'));;
    }

    public function sedang_disurvey_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->get();

        return view('surveyor.tracking.perizinanPenyelenggaraan.sedangDisurvey.index',compact('permohonans','user'));
    }

    public function telah_disurvey_penyelenggaraan()
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Telah Disurvey'
        ])->get();

        return view('surveyor.tracking.perizinanPenyelenggaraan.telahDisurvey.index',compact('permohonans','user'));
    }

    public function edit_sedang_disurvey_pendirian($id)
    {
        $user = Auth::user();
        $permohonans = PerizinanPendirian::where('id',$id)->first();

        return view('surveyor.tracking.perizinanPendirian.sedangDisurvey.edit',compact('permohonans','user'));
    }

    public function edit_sedang_disurvey_penyelenggaraan($id)
    {
        $user = Auth::user();
        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();

        return view('surveyor.tracking.perizinanPenyelenggaraan.sedangDisurvey.edit',compact('permohonans','user'));
    }


}
