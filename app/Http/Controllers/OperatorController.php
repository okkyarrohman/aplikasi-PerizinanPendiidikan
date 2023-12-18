<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerizinanPendirian;
use App\Models\PerizinanPenyelenggaraan;
use Illuminate\Support\Facades\Auth;

class OperatorController extends Controller
{
    public function index_pendirian(){
        $user = Auth::user();

        return view('operator.tracking.perizinanPendirian.index', compact('user'));
    }

    public function index_penyelenggaraan(){
        $user = Auth::user();

        return view('operator.tracking.perizinanPenyelenggaraan.index', compact('user'));
    }


    // Perizinan Pendirian
     public function pendirian_tk()
    {
        $user = Auth::user();

        $permohonans = PerizinanPendirian::where([
            'tipe_dokumen' => 'TK',
            'status_dokumen' => 'Checking Berkas Operator'
        ])->get();

        return view('operator.tracking.perizinanPendirian.tk.index',compact('permohonans','user'));
    }

    public function pendirian_sd()
    {
        $user = Auth::user();

        $permohonans = PerizinanPendirian::where([
            'tipe_dokumen' => 'SD',
            'status_dokumen' => 'Checking Berkas Operator'
        ])->get();

        return view('operator.tracking.perizinanPendirian.sd.index',compact('permohonans','user'));
    }

    public function penyelenggaraan_sd()
    {
        $user = Auth::user();

        $permohonans = PerizinanPenyelenggaraan::where([
            'tipe_dokumen' => 'SD/SMP/SMA',
            'status_dokumen' => 'Checking Berkas Operator'
        ])->get();

        return view('operator.tracking.perizinanPenyelenggaraan.1_sd.index',compact('permohonans','user'));
    }

    public function penyelenggaraan_ptn()
    {
        $user = Auth::user();

        $permohonans = PerizinanPenyelenggaraan::where([
            'tipe_dokumen' => 'Universitas/PT',
            'status_dokumen' => 'Checking Berkas Operator'
        ])->get();

        return view('operator.tracking.perizinanPenyelenggaraan.2_ptn.index',compact('permohonans','user'));
    }

    public function penyelenggaraan_lpp()
    {
        $user = Auth::user();

        $permohonans = PerizinanPenyelenggaraan::where([
            'tipe_dokumen' => 'Lembaga Pelatihan Profesional',
            'status_dokumen' => 'Checking Berkas Operator'
        ])->get();

        return view('operator.tracking.perizinanPenyelenggaraan.3_lpp.index',compact('permohonans','user'));
    }

    public function penyelenggaraan_lpnp()
    {
        $user = Auth::user();

        $permohonans = PerizinanPenyelenggaraan::where([
            'tipe_dokumen' => 'Lembaga Pendidikan Non Pemerintah',
            'status_dokumen' => 'Checking Berkas Operator'
        ])->get();

        return view('operator.tracking.perizinanPenyelenggaraan.4_lpnp.index',compact('permohonans','user'));
    }

    public function penyelenggaraan_ppo()
    {
        $user = Auth::user();

        $permohonans = PerizinanPenyelenggaraan::where([
            'tipe_dokumen' => 'Pusat Pembelajaran Online',
            'status_dokumen' => 'Checking Berkas Operator'
        ])->get();

        return view('operator.tracking.perizinanPenyelenggaraan.5_ppo.index',compact('permohonans','user'));
    }

    public function penyelenggaraan_lpts()
    {
        $user = Auth::user();

        $permohonans = PerizinanPenyelenggaraan::where([
            'tipe_dokumen' => 'Lembaga Pendidikan Tinggi Swasta',
            'status_dokumen' => 'Checking Berkas Operator'
        ])->get();

        return view('operator.tracking.perizinanPenyelenggaraan.6_lpts.index',compact('permohonans','user'));
    }

    public function penyelenggaraan_pklpk()
    {
        $user = Auth::user();

        $permohonans = PerizinanPenyelenggaraan::where([
            'tipe_dokumen' => 'Pendidikan Khusus dan Lembaga Pelatihan Keterampilan',
            'status_dokumen' => 'Checking Berkas Operator'
        ])->get();

        return view('operator.tracking.perizinanPenyelenggaraan.7_pklpk.index',compact('permohonans','user'));
    }






public function edit_pendirian($id)
    {
        $user = Auth::user();

        $permohonans = PerizinanPendirian::where('id',$id)->first();

        return view('operator.tracking.perizinanPendirian.edit',compact('permohonans','user'));
    }

    public function edit_penyelenggaraan($id)
    {
        $user = Auth::user();

        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();

        return view('operator.tracking.perizinanPenyelenggaraan.edit',compact('permohonans','user'));
    }



    public function persyaratan_pendirian(){
        $user = Auth::user();

        return view('operator.persyaratan.pendirian',compact('user'));
    }
    public function persyaratan_penyelenggaraan(){
        $user = Auth::user();

        return view('operator.persyaratan.penyelenggaraan',compact('user'));
    }














}
