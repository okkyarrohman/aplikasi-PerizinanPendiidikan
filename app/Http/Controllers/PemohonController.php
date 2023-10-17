<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use App\Models\Perizinan;
use Illuminate\Http\Request;


class PemohonController extends Controller
{
    public function data_pemohon()
    {

        return view('pemohon.account.edit');
    }

    // Create view for Perizinan Pendirian
    public function create_tk()
    {

        return view('pemohon.perizinanPendirian.createTk');
    }

    public function create_sd()
    {
        return view('pemohon.perizinanPendirian.createSd');
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
    public function show()
    {
        return view('pemohon.tracking.show');
    }

    public function tracking()
    {

        return view('pemohon.tracking.tracking');
    }



}
