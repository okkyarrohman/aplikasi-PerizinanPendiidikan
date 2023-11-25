<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use App\Models\Perizinan;
use App\Models\PerizinanPendirian;
use App\Models\PerizinanPenyelenggaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PemohonController extends Controller
{
    public function data_pemohon()
    {
        $user = Auth::user();

        return view('pemohon.account.index',compact('user'));
    }

    public function edit_data_pemohon($id)
    {
        $user = Auth::user();

        return view('pemohon.account.edit', compact('user'));
    }

    public function persyaratan_pendirian(){
        $user = Auth::user();

        return view('pemohon.persyaratan.pendirian',compact('user'));
    }
    public function persyaratan_penyelenggaraan(){
        $user = Auth::user();

        return view('pemohon.persyaratan.penyelenggaraan',compact('user'));
    }


    // Index
    public function permohonan_pendirian(){
        $user = Auth::user();

        return view('pemohon.permohonan.perizinanPendirian.index', compact('user'));
    }

    public function permohonan_penyelenggaraan(){
        $user = Auth::user();

        return view('pemohon.permohonan.perizinanPenyelenggaraan.index', compact('user'));
    }





    // Create view for Perizinan Pendirian
    public function create_tk()
    {
        $user = Auth::user();

        return view('pemohon.permohonan.perizinanPendirian.tk.createTk', compact('user'));
    }

    public function create_sd()
    {
        $user = Auth::user();

        return view('pemohon.permohonan.perizinanPendirian.sd.createSd',compact('user'));
    }

    // End Create view for Perizinan Pendirian


    // Create View for Perizinan Penyelenggaraan
    public function create_sd_smp()
    {
        return view('pemohon.perizinanPenyelenggaraan.sd-smp.create');
    }

    public function create_ptn_univ()
    {
        return view('pemohon.perizinanPenyelenggaraan.ptn-univ.create');
    }

    public function create_lpp()
    {
        return view('pemohon.perizinanPenyelenggaraan.lpp.create');
    }

    public function create_lpnp()
    {
        return view('pemohon.perizinanPenyelenggaraan.lpnp.create');
    }

    public function create_ppo()
    {
        return view('pemohon.perizinanPenyelenggaraan.ppo.create');
    }

    public function create_lpts()
    {
        return view('pemohon.perizinanPenyelenggaraan.lpts.create');
    }

    public function create_pklpk()
    {
        return view('pemohon.perizinanPenyelenggaraan.pklpk.create');
    }
    //  End Create view for Perizinan Penyelenggaraan



    // Show Tracking


    public function tracking()
    {
        $user = Auth::user();

        $permohonans = PerizinanPendirian::find(Auth::user());

        return view('pemohon.tracking.tracking',compact('permohonans','user'));
    }



    public function show($id)
    {
        $permohonans = PerizinanPendirian::where('id',$id)->first();

        return view('pemohon.perizinanPendirian.tracking.show',[
            'permohonans' => $permohonans,
        ]);
    }

    public function show_penyelenggaraan($id)
    {
        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();

        return view('pemohon.perizinanPenyelenggaraan.tracking.show',[
            'permohonans' => $permohonans,
        ]);
    }



}
