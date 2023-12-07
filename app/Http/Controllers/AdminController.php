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







    // Create PerizinanPendirian
    public function create_tk()
    {

        return view('admin.perizinanPendirian.createTk');
    }

    public function create_sd()
    {

        return view('admin.perizinanPendirian.createSd');
    }

    // Perizinan Penyelenggaraan
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

