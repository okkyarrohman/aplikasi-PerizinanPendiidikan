<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perizinan;

class DinasController extends Controller
{


    public function tracking(){
        $trackings = Perizinan::paginate(10);

        return view('dinas.tracking',compact('trackings'));
    }


    public function dokumen_ditolak(){
        $trackings = Perizinan::where(['status_permohonan' => 'Tolak Permohonan'])->get();


        return view('dinas.tracking.dokumenDitolak',compact('trackings'));
    }

    public function checking_berkas(){
        $trackings = Perizinan::where(['status_permohonan' => 'Checking Berkas'])->get();


        return view('dinas.tracking.checkingBerkas',compact('trackings'));
    }

    public function dokumen_valid(){
        $trackings = Perizinan::where(['status_permohonan' => 'Dokumen Valid'])->get();


        return view('dinas.tracking.dokumenValid',compact('trackings'));
    }
    public function dokumenTidak_valid(){
        $trackings = Perizinan::where(['status_permohonan' => 'Dokumen Tidak Valid'])->get();


        return view('dinas.tracking.dokumenTidakValid',compact('trackings'));
    }

    public function sedang_disurvey(){
        $trackings = Perizinan::where(['status_permohonan' => 'Sedang Disurvey'])->get();


        return view('dinas.tracking.sedangDisurvey',compact('trackings'));
    }

    public function telah_disurvey(){
        $trackings = Perizinan::where(['status_permohonan' => 'Telah Disurvey'])->get();


        return view('dinas.tracking.telahDisurvey',compact('trackings'));
    }

    public function izin_terbit(){
        $trackings = Perizinan::where(['status_permohonan' => 'Terbitkan Izin'])->get();


        return view('dinas.tracking.izinTerbit',compact('trackings'));
    }
}
