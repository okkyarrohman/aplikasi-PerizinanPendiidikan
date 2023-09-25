<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\PemohonController;
use App\Http\Controllers\PenyeliaController;
use App\Http\Controllers\SurveyorController;
use App\Http\Controllers\DinasController;
use App\Http\Controllers\AdminController;

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
Route::get('/home', [HomeController::class, 'index'])->name('home');



// Routes Admin
Route::group(['middleware' => 'role:admin'], function(){
    Route::get('/admin',[HomeController::class,'index_admin'])->name('admin');
    Route::get('/admin/data-pengguna',[AdminController::class,'data_pengguna']);
    Route::get('/admin/dokumen-ditolak',[AdminController::class,'dokumen_ditolak']);
    Route::get('/admin/checking-berkas',[AdminController::class,'checking_berkas']);
    Route::get('/admin/dokumen-valid',[AdminController::class,'dokumen_valid']);
    Route::get('/admin/dokumen-tidak-valid',[AdminController::class,'dokumenTidak_valid']);
    Route::get('/admin/sedang-disurvey',[AdminController::class,'sedang_disurvey']);
    Route::get('/admin/telah-disurvey',[AdminController::class,'telah_disurvey']);
    Route::get('/admin/izin-terbit',[AdminController::class,'izin_terbit']);

});
// End Routes Admin



// Route dinas
Route::group(['middleware' => 'role:dinas'], function(){
    Route::get('/dinas',[HomeController::class,'index_dinas'])->name('dinas');
    Route::get('/dinas/tracking',[DinasController::class,'tracking']);
    Route::get('/dinas/dokumen-ditolak',[DinasController::class,'dokumen_ditolak']);
    Route::get('/dinas/checking-berkas',[DinasController::class,'checking_berkas']);
    Route::get('/dinas/dokumen-valid',[DinasController::class,'dokumen_valid']);
    Route::get('/dinas/dokumen-tidak-valid',[DinasController::class,'dokumenTidak_valid']);
    Route::get('/dinas/sedang-disurvey',[DinasController::class,'sedang_disurvey']);
    Route::get('/dinas/telah-disurvey',[DinasController::class,'telah_disurvey']);
    Route::get('/dinas/izin-terbit',[DinasController::class,'izin_terbit']);



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
    Route::get('/verifikator/check-berkas',[PenyeliaController::class,'tracking_pemohon']);
    Route::get('/verifikator/dokumen-valid',[PenyeliaController::class,'dokumen_valid']);
    Route::get('/verifikator/sedang-disurvey',[PenyeliaController::class,'sedang_disurvey']);
    Route::get('/verifikator/telah-disurvey',[PenyeliaController::class,'telah_disurvey']);
    Route::get('/tracking/surveyor',[PenyeliaController::class,'tracking_surveyor'])->name('penyelia-surveyor.index');
    Route::get('/penyelia/edit-tracking-pemohon/{id}',[PenyeliaController::class,'edit_trackingPemohon']);
    Route::post('/penyelia/update-status',[PenyeliaController::class,'update'])->name('penyelia.update');
    Route::post('/tugaskan/surveyor',[PenyeliaController::class,'is_survey'])->name('tugaskan.update');
    Route::get('/lihat-hasil/survey/{id}',[PenyeliaController::class,'after_survey']);

    Route::post('/penyelia/after-survey',[PenyeliaController::class,'update_survey'])->name('hasil-survey.update');

});
// End Route penyelia

// Route surveyor
Route::group(['middleware' => 'role:surveyor'], function(){
    Route::get('/surveyor',[HomeController::class,'index_surveyor'])->name('surveyor');
    Route::get('/surveyor/tracking',[SurveyorController::class,'tracking']);
    Route::get('/surveyor/sedang-disurvey',[SurveyorController::class,'sedang_disurvey'])->name('surveyor.index');
    Route::get('/surveyor/telah-disurvey',[SurveyorController::class,'telah_disurvey'])->name('surveyor.index');
    Route::get('/surveyor/edit/{id}',[SurveyorController::class,'create']);

    Route::post('/surveyor/store',[SurveyorController::class,'update'])->name('surveyor.update');

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
    Route::get('/operator/tracking',[OperatorController::class,'index']);
    Route::get('/operator/edit-tracking/{id}',[OperatorController::class,'edit']);
    Route::post('/operator/update-status',[OperatorController::class,'update'])->name('operator.update');


});
// End Route operator

// Route pemohon
Route::group(['middleware' => 'role:pemohon'], function(){

    Route::get('/pemohon',[HomeController::class,'index_pemohon'])->name('pemohon');
    Route::get('/data-pemohon',[PemohonController::class,'data_pemohon']);
    Route::get('/create-pemohon',[PemohonController::class,'create']);
    Route::post('/create-pemohon',[PemohonController::class,'store'])->name('pemohon.store');
    Route::get('/tracking',[PemohonController::class,'tracking']);
    Route::get('/pemohon/izin-pendirian',[PemohonController::class,'izin_pendirian']);
    Route::get('/pemohon/izin-penyelenggaraan',[PemohonController::class,'izin_penyelenggaraan']);
    Route::get('/pemohon/pinjam-fasilitas',[PemohonController::class,'pinjam_fasilitas']);


});
// End Route pemohon



// Download Berkas
    Route::get('/download/surat-pemohonan/{id}',[OperatorController::class,'download_suratPemohon']);
    Route::get('/download/ktp/{id}',[OperatorController::class,'download_ktp']);
    Route::get('/download/ijazah/{id}',[OperatorController::class,'download_ijazah']);
    Route::get('/download/surat-tanda-regist/{id}',[OperatorController::class,'download_suratTandaRegist']);
    Route::get('/download/surat-persetujuan-kerja/{id}',[OperatorController::class,'download_suratPersetujuanKerja']);
    Route::get('/download/surat-pernyataan-praktik/{id}',[OperatorController::class,'download_suratPernyataanPraktik']);
    Route::get('/download/surat-rekomendasi-profesi/{id}',[OperatorController::class,'download_suratRekomendasiProfesi']);
    Route::get('/download/surat-keterangan-praktek/{id}',[OperatorController::class,'download_suratKeteranganPraktek']);
    Route::get('/download/dokumen-hasil-survey/{id}',[OperatorController::class,'download_dokumenSurvey']);
// End Download Berkas







