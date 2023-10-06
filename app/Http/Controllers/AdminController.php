<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PerizinanPendirian;


class AdminController extends Controller
{
    public function data_pengguna()
    {
        $users = User::paginate(10);

        return view('admin.dataPengguna',compact('users'));
    }



    public function dokumen_ditolak(){
        $trackings = PerizinanPendirian::where([
            'tipe_dokumen' => 'Perizinan Pendirian TK',
            'status_dokumen' => 'Dokumen Ditolak',
        ])->get();
        return view('admin.trackingPendirian.dokumenDitolak',compact('trackings'));
    }

    public function checking_berkas(){
        $trackings = PerizinanPendirian::where([
            'tipe_dokumen' => 'Perizinan Pendirian TK',
            'status_dokumen' => 'Checking Berkas',
        ])->get();


        return view('admin.trackingPendirian.checkingBerkas',compact('trackings'));
    }

    public function dokumen_valid(){
        $trackings = PerizinanPendirian::where([
            'tipe_dokumen' => 'Perizinan Pendirian TK',
            'status_dokumen' => 'Dokumen Valid',
        ])->get();


        return view('admin.trackingPendirian.dokumenValid',compact('trackings'));
    }
    public function dokumenTidak_valid(){
        $trackings = PerizinanPendirian::where([
            'tipe_dokumen' => 'Perizinan Pendirian TK',
            'status_dokumen' => 'Dokumen Tidak Valid',
        ])->get();

        return view('admin.trackingPendirian.dokumenTidakValid',compact('trackings'));
    }

    public function sedang_disurvey(){
        $trackings = PerizinanPendirian::where([
            'tipe_dokumen' => 'Perizinan Pendirian TK',
            'status_dokumen' => 'Sedang Disurvey',
        ])->get();

        return view('admin.trackingPendirian.sedangDisurvey',compact('trackings'));
    }

    public function telah_disurvey(){
        $trackings = PerizinanPendirian::where([
            'tipe_dokumen' => 'Perizinan Pendirian TK',
            'status_dokumen' => 'Telah Disurvey',
        ])->get();


        return view('admin.trackingPendirian.telahDisurvey',compact('trackings'));
    }

    public function izin_terbit(){
        $trackings = PerizinanPendirian::where([
            'tipe_dokumen' => 'Perizinan Pendirian TK',
            'status_dokumen' => 'Izin Terbit',
        ])->get();


        return view('admin.trackingPendirian.izinTerbit',compact('trackings'));
    }


    public function arsip()
    {
        $trackings = PerizinanPendirian::paginate(10);
        return view('admin.arsip',compact('trackings'));
    }

}

