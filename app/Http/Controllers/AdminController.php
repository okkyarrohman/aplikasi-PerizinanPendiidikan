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

    public function create_sd_smp()
    {

        return view('admin.perizinanPenyelenggaraan.sd-smp.create');
    }

    public function create_lpnp()
    {
        return view('admin.perizinanPenyelenggaraan.lpnp.create');
    }

    public function create_lpp()
    {
        return view('admin.perizinanPenyelenggaraan.lpp.create');
    }

    public function create_lpts()
    {
        return view('admin.perizinanPenyelenggaraan.lpts.create');
    }

    public function create_pklpk()
    {
                return view('admin.perizinanPenyelenggaraan.pklpk.create');
    }

    public function create_ppo()
    {
                return view('admin.perizinanPenyelenggaraan.ppo.create');

    }

    public function create_ptn_univ()
    {
                return view('admin.perizinanPenyelenggaraan.ptn-univ.create');

    }

}

