<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        return view('operator.dashboard');
    }

    public function index_pemohon(){
        return view('pemohon.dashboard');
    }


}
