<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemohonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Routes Admin
Route::group(['middleware' => 'role:admin'], function(){
    Route::get('/admin',[HomeController::class,'index_admin'])->name('admin');

});
// End Routes Admin



// Route dinas
Route::group(['middleware' => 'role:dinas'], function(){
    Route::get('/dinas',[HomeController::class,'index_dinas'])->name('dinas');
});
// End Route dinas


// Route walikota
Route::group(['middleware' => 'role:walikota'], function(){
    Route::get('/walikota',[HomeController::class,'index_walikota'])->name('walikota');
});
// End Route walikota

// Route kepala-dinas
Route::group(['middleware' => 'role:kepala-dinas'], function(){
    Route::get('/kepala-dinas',[HomeController::class,'index_kepalaDinas'])->name('kepala-dinas');
});
// End Route kepala-dinas

// Route penyelia
Route::group(['middleware' => 'role:penyelia'], function(){
    Route::get('/penyelia',[HomeController::class,'index_penyelia'])->name('penyelia');
});
// End Route penyelia

// Route surveyor
Route::group(['middleware' => 'role:surveyor'], function(){
    Route::get('/surveyor',[HomeController::class,'index_surveyor'])->name('surveyor');
});
// End Route surveyor

// Route auditor
Route::group(['middleware' => 'role:auditor'], function(){
    Route::get('/auditor',[HomeController::class,'index_auditor'])->name('auditor');
});
// End Route auditor

// Route operator
Route::group(['middleware' => 'role:operator'], function(){
    Route::get('/operator',[HomeController::class,'index_operator'])->name('operator');
});
// End Route operator

// Route pemohon
Route::group(['middleware' => 'role:pemohon'], function(){
    Route::get('/pemohon',[HomeController::class,'index_pemohon'])->name('pemohon');
    Route::get('/create-pemohon',[PemohonController::class,'create']);
    Route::post('/create-pemohon',[PemohonController::class,'store'])->name('pemohon.store');
});
// End Route pemohon











