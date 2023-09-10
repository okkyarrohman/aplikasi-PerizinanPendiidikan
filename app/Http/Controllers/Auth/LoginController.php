<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


     protected function authenticated(Request $request, $user)
    {
        if($user->hasRole('admin')){
            return redirect()->route('admin');
        }
        if($user->hasRole('dinas')){
            return redirect()->route('dinas');
        }
        if($user->hasRole('walikota')){
            return redirect()->route('walikota');
        }
        if($user->hasRole('kepala-dinas')){
            return redirect()->route('kepala-dinas');
        }
        if($user->hasRole('penyelia')){
            return redirect()->route('penyelia');
        }
        if($user->hasRole('surveyor')){
            return redirect()->route('surveyor');
        }
        if($user->hasRole('auditor')){
            return redirect()->route('auditor');
        }
        if($user->hasRole('operator')){
            return redirect()->route('operator');
        }
        return redirect()->route('pemohon')->with('success','sukses login');



    }
}
