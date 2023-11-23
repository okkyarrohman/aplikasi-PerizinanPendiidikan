<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    public function update(Request $request, User $user){

        $request->validate([
            'name' => 'required',
            'nik' => 'required'
        ]);


        $user->update($request->all());

        return redirect()->route('index.account')->with('success','data berhasil diupdate');
    }


}
