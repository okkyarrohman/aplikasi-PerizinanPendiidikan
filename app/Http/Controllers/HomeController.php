<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PerizinanPenyelenggaraan;
use App\Models\PerizinanPendirian;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request){
        $verified   =  User::where($request->id)->get();

        return view('pemohon.dashboard',compact('verified'));
    }


    public function index_admin(){
        return view('admin.dashboard');
    }

    public function index_dinas(){
        return view('dinas.dashboard');
    }

    public function index_walikota(){
        return view('walikota.dashboard');
    }

    public function index_kepalaDinas(){
        return view('kepalaDinas.dashboard');
    }

    public function index_penyelia(){
        return view('penyelia.dashboard');
    }

    public function index_surveyor(){
        return view('surveyor.dashboard');
    }

    public function index_auditor(){
        return view('auditor.dashboard');
    }

    public function index_operator(){
        $checkingBerkasPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Checking Berkas Operator'
        ])->count();
        $checkingBerkasPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Checking Berkas Operator'
        ])->count();
        $totalCheckingBerkas = $checkingBerkasPendirian + $checkingBerkasPenyelenggaraan;

        $dokumenValidPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $dokumenValidPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $totalDokumenValid = $dokumenValidPendirian + $dokumenValidPenyelenggaraan;

        $dokumenTidakValidPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Tidak Valid'
        ])->count();
        $dokumenTidakValidPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Tidak Valid'
        ])->count();
        $totalDokumenTidakValid = $dokumenTidakValidPendirian + $dokumenTidakValidPenyelenggaraan;

        return view('operator.dashboard',[
            'totalCheckingBerkas' => $totalCheckingBerkas,
            'totalDokumenValid' => $totalDokumenValid,
            'totalDokumenTidakValid' => $totalDokumenTidakValid,
        ]);
    }

    public function index_pemohon(){
        return view('pemohon.dashboard');
    }

    public function my_account($id)
    {
        $account = User::find($id)->get();

        return view('my_account.dashboard');
    }


}
