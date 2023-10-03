<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    public function data_pengguna()
    {
        $users = User::paginate(10);

        return view('admin.dataPengguna',compact('users'));
    }


    public function dokumen_ditolak(){
        $trackings = Perizinan::where(['status_permohonan' => 'Tolak Permohonan'])->get();


        return view('admin.tracking.dokumenDitolak',compact('trackings'));
    }

    public function checking_berkas(){
        $trackings = Perizinan::where(['status_permohonan' => 'Checking Berkas'])->get();


        return view('admin.tracking.checkingBerkas',compact('trackings'));
    }

    public function dokumen_valid(){
        $trackings = Perizinan::where(['status_permohonan' => 'Dokumen Valid'])->get();


        return view('admin.tracking.dokumenValid',compact('trackings'));
    }
    public function dokumenTidak_valid(){
        $trackings = Perizinan::where(['status_permohonan' => 'Dokumen Tidak Valid'])->get();


        return view('admin.tracking.dokumenTidakValid',compact('trackings'));
    }

    public function sedang_disurvey(){
        $trackings = Perizinan::where(['status_permohonan' => 'Sedang Disurvey'])->get();


        return view('admin.tracking.sedangDisurvey',compact('trackings'));
    }

    public function telah_disurvey(){
        $trackings = Perizinan::where(['status_permohonan' => 'Telah Disurvey'])->get();


        return view('admin.tracking.telahDisurvey',compact('trackings'));
    }

    public function izin_terbit(){
        $trackings = Perizinan::where(['status_permohonan' => 'Terbitkan Izin'])->get();


        return view('admin.tracking.izinTerbit',compact('trackings'));
    }


    public function arsip()
    {
        $trackings = Perizinan::paginate(10);
        return view('admin.arsip',compact('trackings'));
    }

}

