<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perizinan;

class DinasController extends Controller
{


    public function tracking(){
        $trackings = Perizinan::paginate(10);

        return view('dinas.tracking',compact('trackings'));
    }
}
