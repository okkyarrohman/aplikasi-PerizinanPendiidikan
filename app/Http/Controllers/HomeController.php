<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PerizinanPenyelenggaraan;
use App\Models\PerizinanPendirian;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();

        return view('pemohon.persyaratan.pendirian',compact('verified','user'));
    }


    public function index_admin(){
        $user = Auth::user();

        return view('admin.dashboard',compact('user'));
    }

    public function index_dinas(){
        $user = Auth::user();

        return view('dinas.dashboard' ,compact('user'));
    }

    public function index_walikota(){
        $user = Auth::user();

        return view('walikota.dashboard' ,compact('user'));
    }

    public function index_kepalaDinas(){
        $user = Auth::user();

        return view('kepalaDinas.dashboard',compact('user'));
    }

    public function index_penyelia(){
        $user = Auth::user();

        $dokumenValidPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $dokumenValidPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Valid'
        ])->count();
        $totalDokumenValid = $dokumenValidPendirian + $dokumenValidPenyelenggaraan;

        $sedangSurveyPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->count();
        $sedangSurveyPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Sedang Disurvey'
        ])->count();
        $totalSedangSurvey = $sedangSurveyPendirian + $sedangSurveyPenyelenggaraan;

        $checkingBerkasPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->count();
        $checkingBerkasPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Checking Berkas Verifikator'
        ])->count();
        $totalCheckingBerkas = $checkingBerkasPendirian + $checkingBerkasPenyelenggaraan;

        $dokumenSesuaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->count();
        $dokumenSesuaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Sesuai'
        ])->count();
        $totalDokumenSesuai = $dokumenSesuaiPendirian + $dokumenSesuaiPenyelenggaraan;

        $dokumenTidakSesuaiPendirian = PerizinanPendirian::where([
            'status_dokumen' => 'Dokumen Tidak Sesuai'
        ])->count();
        $dokumenTidakSesuaiPenyelenggaraan = PerizinanPenyelenggaraan::where([
            'status_dokumen' => 'Dokumen Tidak Sesuai'
        ])->count();
        $totalDokumenTidakSesuai = $dokumenTidakSesuaiPendirian + $dokumenTidakSesuaiPenyelenggaraan;


        return view('penyelia.dashboard',[
            'totalDokumenValid' => $totalDokumenValid,
            'totalSedangSurvey' => $totalSedangSurvey,
            'totalCheckingBerkas' => $totalCheckingBerkas,
            'totalDokumenSesuai' => $totalDokumenSesuai,
            'totalDokumenTidakSesuai' => $totalDokumenTidakSesuai,
            'user' => $user
        ]);
    }

    public function index_surveyor(){
        $user = Auth::user();

        return view('surveyor.dashboard',compact('user'));
    }

    public function index_auditor(){
        $user = Auth::user();
        return view('auditor.dashboard',compact('user'));
    }

    public function index_operator(){
        $user = Auth::user();

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
            'user' => $user,
        ]);
    }

    public function index_pemohon(){
        $user = Auth::user();


        return view('pemohon.dashboard',compact('user'));
    }

    public function my_account($id)
    {
        $account = User::find($id)->get();

        return view('my_account.dashboard');
    }


}
