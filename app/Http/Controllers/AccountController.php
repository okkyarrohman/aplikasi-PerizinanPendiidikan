<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{
    public function data_pemohon()
    {
        $user = Auth::user();
        return view('pemohon.account.index',compact('user'));

    }

    public function edit_data_pemohon($id)
    {
        $user = Auth::user();

        return view('pemohon.account.edit', compact('user'));
    }


    public function update(Request $request, User $user){

        $request->validate([
            'name' => 'required',
            'nik' => 'required'
        ]);


        $user->update($request->all());

        return redirect()->route('index.account')->with('success','data berhasil diupdate');
    }


}
