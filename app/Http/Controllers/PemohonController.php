<?php

namespace App\Http\Controllers;

use App\Models\Perizinan;
use Illuminate\Http\Request;

class PemohonController extends Controller
{
    public function create(){
        return view('pemohon.create');
    }


    public function store(Request $request, Perizinan $perizinan){


        if($request->hasFile('pas_foto')){
            $pas_foto = $request->file('pas_foto');
            $extension = $pas_foto->getClientOriginalName();
            $fotoName = $extension;
            $pas_foto->move(storage_path('app/public/berkasPemohon',$fotoName));
            $perizinan->pas_foto = $request->file('pas_foto')->getClientOriginalName();
        }

        $perizinan->create($request->all());






        return redirect()->route('pemohon')->with('succes','data berhasil ditambahkan');
    }
}
