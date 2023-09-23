<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perizinan;

class DinasController extends Controller
{


    public function tracking(){
        $trackings = Perizinan::all();

        return view('dinas.tracking',compact('trackings'));
    }
}
