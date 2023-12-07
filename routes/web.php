<?php


use App\Http\Controllers\AccountController;
use App\Http\Controllers\KepalaDinasController;
use App\Http\Controllers\WalikotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\PemohonController;
use App\Http\Controllers\PenyeliaController;
use App\Http\Controllers\SurveyorController;
use App\Http\Controllers\DinasController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuditorController;
use App\Http\Controllers\PerizinanPendirianController;
use App\Http\Controllers\PerizinanPenyelenggaraanController;
use App\Http\Controllers\MailController;

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
    return view('welcome2');
});

Auth::routes(['verify' => true]);
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route pemohon
Route::group(['middleware' => 'role:pemohon','verify'], function(){

    Route::get('/data-pemohon',[AccountController::class,'data_pemohon'])->name('index.account');
    Route::get('/edit/data-pemohon/{id}',[AccountController::class,'edit_data_pemohon']);
    Route::post('/update/data-pemohon',[AccountController::class,'update'])->name('update.account');

    // Menu
    Route::get('/pemohon',[HomeController::class,'index_pemohon'])->name('pemohon');
    Route::get('/pemohon/persyaratan/pendirian', [PemohonController::class,'persyaratan_pendirian']);
    Route::get('/pemohon/persyaratan/penyelenggaraan', [PemohonController::class,'persyaratan_penyelenggaraan']);

    // Menu

    Route::get('/pemohon/permohonan/pendirian', [PemohonController::class,'permohonan_pendirian']);
    Route::get('/pemohon/permohonan/penyelenggaraan', [PemohonController::class,'permohonan_penyelenggaraan']);


    // Perizinan Pendirian create
    Route::get('/pemohon/perizinanPendirian/create-tk',[PemohonController::class,'create_tk']);
    Route::get('/pemohon/perizinanPendirian/create-sd',[PemohonController::class,'create_sd']);
    // End Perizinan Pendirian create

    // Perizinan Penyelenggaraan create
    Route::get('/pemohon/perizinanPenyelenggaraan/create_sd_smp',[PemohonController::class,'create_sd_smp']);
    Route::get('/pemohon/perizinanPenyelenggaraan/create_ptn_univ',[PemohonController::class,'create_ptn_univ']);
    Route::get('/pemohon/perizinanPenyelenggaraan/create_lpp',[PemohonController::class,'create_lpp']);
    Route::get('/pemohon/perizinanPenyelenggaraan/create_lpnp',[PemohonController::class,'create_lpnp']);
    Route::get('/pemohon/perizinanPenyelenggaraan/create_ppo',[PemohonController::class,'create_ppo']);
    Route::get('/pemohon/perizinanPenyelenggaraan/create_lpts',[PemohonController::class,'create_lpts']);
    Route::get('/pemohon/perizinanPenyelenggaraan/create_pklpk',[PemohonController::class,'create_pklpk']);
    // End Perizinan Penyelenggaraan create

    // Pemohon tracking_pendirian
    Route::get('/pemohon/tracking',[PemohonController::class,'tracking']);

    Route::get('/pemohon/tracking/show/{id}',[PemohonController::class,'show']);
    // End Pemohon Tracking
});
// End Route pemohon

// Route operator
Route::group(['middleware' => 'role:operator'], function(){
    Route::get('/operator',[HomeController::class,'index_operator'])->name('operator');


    // Index Tracking Operator
    Route::get('/operator/tracking/pendirian',[OperatorController::class,'index_pendirian']);
    Route::get('/operator/tracking/penyelenggaraan',[OperatorController::class,'index_penyelenggaraan']);

    // Tracking Operator
    Route::get('/operator/tracking/pendirian/checking_berkas_pendirian',[OperatorController::class,'checking_berkas_pendirian']);
    Route::get('/operator/tracking/pendirian/dokumen_valid_pendirian',[OperatorController::class,'dokumen_valid_pendirian']);
    Route::get('/operator/tracking/pendirian/dokumen_tidak_valid_pendirian',[OperatorController::class,'dokumen_tidak_valid_pendirian']);

    Route::get('/operator/tracking/penyelenggaraan/checking_berkas_penyelenggaraan',[OperatorController::class,'checking_berkas_penyelenggaraan']);
    Route::get('/operator/tracking/penyelenggaraan/dokumen_valid_penyelenggaraan',[OperatorController::class,'dokumen_valid_penyelenggaraan']);
    Route::get('/operator/tracking/penyelenggaraan/dokumen_tidak_valid_penyelenggaraan',[OperatorController::class,'dokumen_tidak_valid_penyelenggaraan']);

    Route::get('/operator/tracking/pendirian/edit/{id}',[OperatorController::class,'edit_pendirian']);
    Route::get('/operator/tracking/penyelenggaraan/edit/{id}',[OperatorController::class,'edit_penyelenggaraan']);
    // End Tracking Operator

});
// End Route operator


// Route penyelia / Verifikator
Route::group(['middleware' => 'role:penyelia'], function(){

    Route::get('/penyelia',[HomeController::class,'index_penyelia'])->name('penyelia');
    Route::get('/penyelia/tracking/pendirian',[PenyeliaController::class,'index_pendirian']);
    Route::get('/penyelia/tracking/penyelenggaraan',[PenyeliaController::class,'index_penyelenggaraan']);
    // Tracking Perizinan
    Route::get('/penyelia/tracking/pendirian/dokumen_valid_pendirian',[PenyeliaController::class,'dokumen_valid_pendirian']);
    Route::get('/penyelia/tracking/pendirian/sedang_disurvey_pendirian',[PenyeliaController::class,'sedang_disurvey_pendirian']);
    Route::get('/penyelia/tracking/pendirian/checking_berkas_pendirian',[PenyeliaController::class,'checking_berkas_pendirian']);
    Route::get('/penyelia/tracking/pendirian/dokumen_sesuai_pendirian',[PenyeliaController::class,'dokumen_sesuai_pendirian']);
    Route::get('/penyelia/tracking/pendirian/dokumen_tidak_sesuai_pendirian',[PenyeliaController::class,'dokumen_tidak_sesuai_pendirian']);

    Route::get('/penyelia/tracking/penyelenggaraan/dokumen_valid_penyelenggaraan',[PenyeliaController::class,'dokumen_valid_penyelenggaraan']);
    Route::get('/penyelia/tracking/penyelenggaraan/sedang_disurvey_penyelenggaraan',[PenyeliaController::class,'sedang_disurvey_penyelenggaraan']);
    Route::get('/penyelia/tracking/penyelenggaraan/checking_berkas_penyelenggaraan',[PenyeliaController::class,'checking_berkas_penyelenggaraan']);
    Route::get('/penyelia/tracking/penyelenggaraan/dokumen_sesuai_penyelenggaraan',[PenyeliaController::class,'dokumen_sesuai_penyelenggaraan']);
    Route::get('/penyelia/tracking/penyelenggaraan/dokumen_tidak_sesuai_penyelenggaraan',[PenyeliaController::class,'dokumen_tidak_sesuai_penyelenggaraan']);
    // End Tracking Perizinan

    // Edit Tracking Perizinan
    Route::get('/penyelia/tracking/pendirian/edit/dokumen_valid/{id}',[PenyeliaController::class,'edit_dokumen_valid_pendirian']);
    Route::get('/penyelia/tracking/pendirian/edit/checking_berkas/{id}',[PenyeliaController::class,'edit_checking_berkas_pendirian']);

    Route::get('/penyelia/tracking/penyelenggaraan/edit/dokumen_valid/{id}',[PenyeliaController::class,'edit_dokumen_valid_penyelenggaraan']);
    Route::get('/penyelia/tracking/penyelenggaraan/edit/checking_berkas/{id}',[PenyeliaController::class,'edit_checking_berkas_penyelenggaraan']);
    // End Edit Tracking Perizinan
});
// End Route penyelia


// Route surveyor
Route::group(['middleware' => 'role:surveyor'], function(){
    Route::get('/surveyor',[HomeController::class,'index_surveyor'])->name('surveyor');

    Route::get('/surveyor/tracking/pendirian',[SurveyorController::class,'index_pendirian']);
    Route::get('/surveyor/tracking/penyelenggaraan',[SurveyorController::class,'index_penyelenggaraan']);
    // Tracking Perizinan
    Route::get('/surveyor/tracking/pendirian/sedang_disurvey_pendirian',[SurveyorController::class,'sedang_disurvey_pendirian']);
    Route::get('/surveyor/tracking/pendirian/telah_disurvey_pendirian',[SurveyorController::class,'telah_disurvey_pendirian']);

    Route::get('/surveyor/tracking/penyelenggaraan/sedang_disurvey_penyelenggaraan',[SurveyorController::class,'sedang_disurvey_penyelenggaraan']);
    Route::get('/surveyor/tracking/penyelenggaraan/telah_disurvey_penyelenggaraan',[SurveyorController::class,'telah_disurvey_penyelenggaraan']);
    //  End Tracking Perizinan

    // Edit Tracking Perizinan
    Route::get('/surveyor/tracking/pendirian/edit/sedang_disurvey/{id}',[SurveyorController::class,'edit_sedang_disurvey_pendirian']);
    Route::get('/surveyor/tracking/penyelenggaraan/edit/sedang_disurvey/{id}',[SurveyorController::class,'edit_sedang_disurvey_penyelenggaraan']);

    // End Tracking Perizinan
});
// End Route surveyor


// Route kepala-dinas
Route::group(['middleware' => 'role:kepala-dinas'], function(){
    Route::get('/kepala-dinas',[HomeController::class,'index_kepalaDinas'])->name('kepala-dinas');
    Route::get('/kepala-dinas/notifikasi',[KepalaDinasController::class,'notifikasi']);

    Route::get('/kepala-dinas/tracking/pendirian',[KepalaDinasController::class,'index_pendirian']);
    Route::get('/kepala-dinas/tracking/penyelenggaraan',[KepalaDinasController::class,'index_penyelenggaraan']);

    // Tracking Dokumen
    Route::get('/kepala-dinas/tracking/pendirian/ttd_kepalaDinas_pendirian',[KepalaDinasController::class,'ttd_kepalaDinas_pendirian']);
    Route::get('/kepala-dinas/tracking/pendirian/permohonan_selesai_pendirian',[KepalaDinasController::class,'permohonan_selesai_pendirian']);

    Route::get('/kepala-dinas/tracking/penyelenggaraan/ttd_kepalaDinas_penyelenggaraan',[KepalaDinasController::class,'ttd_kepalaDinas_penyelenggaraan']);
    Route::get('/kepala-dinas/tracking/penyelenggaraan/permohonan_selesai_penyelenggaraan',[KepalaDinasController::class,'permohonan_selesai_penyelenggaraan']);

    // End Tracking Dokumen

    // Edit Tracking Perizinan
    Route::get('/kepala-dinas/tracking/pendirian/edit/ttd_kepalaDinas/{id}',[KepalaDinasController::class,'edit_ttd_kepalaDinas_pendirian']);
    Route::get('/kepala-dinas/tracking/penyelenggaraan/edit/ttd_kepalaDinas/{id}',[KepalaDinasController::class,'edit_ttd_kepalaDinas_penyelenggaraan']);
    // End Edit Tracking Perizinan

    // Izin Terbit PDF
    Route::get('/kepla-dinas/pendirian/tracking/izin_terbit_pendirian_pdf/{id}',[KepalaDinasController::class,'izin_terbit_pendirian_pdf']);


});
// End Route kepala-dinas

// Route walikota
Route::group(['middleware' => 'role:walikota'], function(){
    Route::get('/walikota',[HomeController::class,'index_walikota'])->name('walikota');
    Route::get('/walikota/notifikasi',[WalikotaController::class,'notifikasi']);

    Route::get('/walikota/tracking/pendirian',[WalikotaController::class,'index_pendirian']);
    Route::get('/walikota/tracking/penyelenggaraan',[WalikotaController::class,'index_penyelenggaraan']);

    // Tracking Dokumen
    Route::get('/walikota/tracking/pendirian/checking_berkas_operator_pendirian',[WalikotaController::class,'checking_berkas_operator_pendirian']);
    Route::get('/walikota/tracking/pendirian/dokumen_valid_pendirian',[WalikotaController::class,'dokumen_valid_pendirian']);
    Route::get('/walikota/tracking/pendirian/dokumen_tidak_valid_pendirian',[WalikotaController::class,'dokumen_tidak_valid_pendirian']);
    Route::get('/walikota/tracking/pendirian/sedang_disurvey_pendirian',[WalikotaController::class,'sedang_disurvey_pendirian']);
    Route::get('/walikota/tracking/pendirian/telah_disurvey_pendirian',[WalikotaController::class,'telah_disurvey_pendirian']);
    Route::get('/walikota/tracking/pendirian/checking_berkas_verifikator_pendirian',[WalikotaController::class,'checking_berkas_verifikator_pendirian']);
    Route::get('/walikota/tracking/pendirian/dokumen_sesuai_pendirian',[WalikotaController::class,'dokumen_sesuai_pendirian']);
    Route::get('/walikota/tracking/pendirian/tolak_dokumen_pendirian',[WalikotaController::class,'tolak_dokumen_pendirian']);
    Route::get('/walikota/tracking/pendirian/ttd_kepala_dinas_pendirian',[WalikotaController::class,'ttd_kepala_dinas_pendirian']);
    Route::get('/walikota/tracking/pendirian/permohonan_selesai_pendirian',[WalikotaController::class,'permohonan_selesai_pendirian']);

    Route::get('/walikota/tracking/penyelenggaraan/checking_berkas_operator_penyelenggaraan',[WalikotaController::class,'checking_berkas_operator_penyelenggaraan']);
    Route::get('/walikota/tracking/penyelenggaraan/dokumen_valid_penyelenggaraan',[WalikotaController::class,'dokumen_valid_penyelenggaraan']);
    Route::get('/walikota/tracking/penyelenggaraan/dokumen_tidak_valid_penyelenggaraan',[WalikotaController::class,'dokumen_tidak_valid_penyelenggaraan']);
    Route::get('/walikota/tracking/penyelenggaraan/sedang_disurvey_penyelenggaraan',[WalikotaController::class,'sedang_disurvey_penyelenggaraan']);
    Route::get('/walikota/tracking/penyelenggaraan/telah_disurvey_penyelenggaraan',[WalikotaController::class,'telah_disurvey_penyelenggaraan']);
    Route::get('/walikota/tracking/penyelenggaraan/checking_berkas_verifikator_penyelenggaraan',[WalikotaController::class,'checking_berkas_verifikator_penyelenggaraan']);
    Route::get('/walikota/tracking/penyelenggaraan/dokumen_sesuai_penyelenggaraan',[WalikotaController::class,'dokumen_sesuai_penyelenggaraan']);
    Route::get('/walikota/tracking/penyelenggaraan/tolak_dokumen_penyelenggaraan',[WalikotaController::class,'tolak_dokumen_penyelenggaraan']);
    Route::get('/walikota/tracking/penyelenggaraan/ttd_kepala_dinas_penyelenggaraan',[WalikotaController::class,'ttd_kepala_dinas_penyelenggaraan']);
    Route::get('/walikota/tracking/penyelenggaraan/permohonan_selesai_penyelenggaraan',[WalikotaController::class,'permohonan_selesai_penyelenggaraan']);
    // End Tracking Dokumen


});
// End Route walikota

// Route auditor
Route::group(['middleware' => 'role:auditor'], function(){
    Route::get('/auditor',[HomeController::class,'index_auditor'])->name('auditor');

    Route::get('/auditor/tracking/pendirian',[AuditorController::class,'index_pendirian']);
    Route::get('/auditor/tracking/penyelenggaraan',[AuditorController::class,'index_penyelenggaraan']);

    // Route Monitoring
    Route::get('/auditor/tracking/pendirian/checking_berkas_operator_pendirian',[AuditorController::class,'checking_berkas_operator_pendirian']);
    Route::get('/auditor/tracking/pendirian/dokumen_valid_pendirian',[AuditorController::class,'dokumen_valid_pendirian']);
    Route::get('/auditor/tracking/pendirian/dokumen_tidak_valid_pendirian',[AuditorController::class,'dokumen_tidak_valid_pendirian']);
    Route::get('/auditor/tracking/pendirian/sedang_disurvey_pendirian',[AuditorController::class,'sedang_disurvey_pendirian']);
    Route::get('/auditor/tracking/pendirian/telah_disurvey_pendirian',[AuditorController::class,'telah_disurvey_pendirian']);
    Route::get('/auditor/tracking/pendirian/checking_berkas_verifikator_pendirian',[AuditorController::class,'checking_berkas_verifikator_pendirian']);
    Route::get('/auditor/tracking/pendirian/dokumen_sesuai_pendirian',[AuditorController::class,'dokumen_sesuai_pendirian']);
    Route::get('/auditor/tracking/pendirian/tolak_dokumen_pendirian',[AuditorController::class,'tolak_dokumen_pendirian']);
    Route::get('/auditor/tracking/pendirian/ttd_kepala_dinas_pendirian',[AuditorController::class,'ttd_kepala_dinas_pendirian']);
    Route::get('/auditor/tracking/pendirian/permohonan_selesai_pendirian',[AuditorController::class,'permohonan_selesai_pendirian']);

    Route::get('/auditor/tracking/penyelenggaraan/checking_berkas_operator_penyelenggaraan',[AuditorController::class,'checking_berkas_operator_penyelenggaraan']);
    Route::get('/auditor/tracking/penyelenggaraan/dokumen_valid_penyelenggaraan',[AuditorController::class,'dokumen_valid_penyelenggaraan']);
    Route::get('/auditor/tracking/penyelenggaraan/dokumen_tidak_valid_penyelenggaraan',[AuditorController::class,'dokumen_tidak_valid_penyelenggaraan']);
    Route::get('/auditor/tracking/penyelenggaraan/sedang_disurvey_penyelenggaraan',[AuditorController::class,'sedang_disurvey_penyelenggaraan']);
    Route::get('/auditor/tracking/penyelenggaraan/telah_disurvey_penyelenggaraan',[AuditorController::class,'telah_disurvey_penyelenggaraan']);
    Route::get('/auditor/tracking/penyelenggaraan/checking_berkas_verifikator_penyelenggaraan',[AuditorController::class,'checking_berkas_verifikator_penyelenggaraan']);
    Route::get('/auditor/tracking/penyelenggaraan/dokumen_sesuai_penyelenggaraan',[AuditorController::class,'dokumen_sesuai_penyelenggaraan']);
    Route::get('/auditor/tracking/penyelenggaraan/tolak_dokumen_penyelenggaraan',[AuditorController::class,'tolak_dokumen_penyelenggaraan']);
    Route::get('/auditor/tracking/penyelenggaraan/ttd_kepala_dinas_penyelenggaraan',[AuditorController::class,'ttd_kepala_dinas_penyelenggaraan']);
    Route::get('/auditor/tracking/penyelenggaraan/permohonan_selesai_penyelenggaraan',[AuditorController::class,'permohonan_selesai_penyelenggaraan']);
    // End Route monitoring
});
// End Route auditor

// Route dinas
Route::group(['middleware' => 'role:dinas'], function(){
    Route::get('/dinas',[HomeController::class,'index_dinas'])->name('dinas');

    Route::get('/dinas/tracking/pendirian',[DinasController::class,'index_pendirian']);
    Route::get('/dinas/tracking/penyelenggaraan',[DinasController::class,'index_penyelenggaraan']);

    // Route Monitoring
    Route::get('/dinas/tracking/pendirian/checking_berkas_operator_pendirian',[DinasController::class,'checking_berkas_operator_pendirian']);
    Route::get('/dinas/tracking/pendirian/dokumen_valid_pendirian',[DinasController::class,'dokumen_valid_pendirian']);
    Route::get('/dinas/tracking/pendirian/dokumen_tidak_valid_pendirian',[DinasController::class,'dokumen_tidak_valid_pendirian']);
    Route::get('/dinas/tracking/pendirian/sedang_disurvey_pendirian',[DinasController::class,'sedang_disurvey_pendirian']);
    Route::get('/dinas/tracking/pendirian/telah_disurvey_pendirian',[DinasController::class,'telah_disurvey_pendirian']);
    Route::get('/dinas/tracking/pendirian/checking_berkas_verifikator_pendirian',[DinasController::class,'checking_berkas_verifikator_pendirian']);
    Route::get('/dinas/tracking/pendirian/dokumen_sesuai_pendirian',[DinasController::class,'dokumen_sesuai_pendirian']);
    Route::get('/dinas/tracking/pendirian/tolak_dokumen_pendirian',[DinasController::class,'tolak_dokumen_pendirian']);
    Route::get('/dinas/tracking/pendirian/ttd_kepala_dinas_pendirian',[DinasController::class,'ttd_kepala_dinas_pendirian']);
    Route::get('/dinas/tracking/pendirian/permohonan_selesai_pendirian',[DinasController::class,'permohonan_selesai_pendirian']);

    Route::get('/dinas/tracking/penyelenggaraan/checking_berkas_operator_penyelenggaraan',[DinasController::class,'checking_berkas_operator_penyelenggaraan']);
    Route::get('/dinas/tracking/penyelenggaraan/dokumen_valid_penyelenggaraan',[DinasController::class,'dokumen_valid_penyelenggaraan']);
    Route::get('/dinas/tracking/penyelenggaraan/dokumen_tidak_valid_penyelenggaraan',[DinasController::class,'dokumen_tidak_valid_penyelenggaraan']);
    Route::get('/dinas/tracking/penyelenggaraan/sedang_disurvey_penyelenggaraan',[DinasController::class,'sedang_disurvey_penyelenggaraan']);
    Route::get('/dinas/tracking/penyelenggaraan/telah_disurvey_penyelenggaraan',[DinasController::class,'telah_disurvey_penyelenggaraan']);
    Route::get('/dinas/tracking/penyelenggaraan/checking_berkas_verifikator_penyelenggaraan',[DinasController::class,'checking_berkas_verifikator_penyelenggaraan']);
    Route::get('/dinas/tracking/penyelenggaraan/dokumen_sesuai_penyelenggaraan',[DinasController::class,'dokumen_sesuai_penyelenggaraan']);
    Route::get('/dinas/tracking/penyelenggaraan/tolak_dokumen_penyelenggaraan',[DinasController::class,'tolak_dokumen_penyelenggaraan']);
    Route::get('/dinas/tracking/penyelenggaraan/ttd_kepala_dinas_penyelenggaraan',[DinasController::class,'ttd_kepala_dinas_penyelenggaraan']);
    Route::get('/dinas/tracking/penyelenggaraan/permohonan_selesai_penyelenggaraan',[DinasController::class,'permohonan_selesai_penyelenggaraan']);
    // End Route monitoring
});
// End Route dinas

// Routes Admin
Route::group(['middleware' => 'role:admin'], function(){
    Route::get('/admin',[HomeController::class,'index_admin'])->name('admin');
    Route::get('/admin/tracking',[PerizinanPendirianController::class,'trackings'])->name('trackings');


    Route::get('/admin/tracking/pendirian',[AdminController::class,'index_pendirian']);
    Route::get('/admin/tracking/penyelenggaraan',[AdminController::class,'index_penyelenggaraan']);

    // Route Monitoring
    Route::get('/admin/tracking/pendirian/checking_berkas_operator_pendirian',[AdminController::class,'checking_berkas_operator_pendirian']);
    Route::get('/admin/tracking/pendirian/dokumen_valid_pendirian',[AdminController::class,'dokumen_valid_pendirian']);
    Route::get('/admin/tracking/pendirian/dokumen_tidak_valid_pendirian',[AdminController::class,'dokumen_tidak_valid_pendirian']);
    Route::get('/admin/tracking/pendirian/sedang_disurvey_pendirian',[AdminController::class,'sedang_disurvey_pendirian']);
    Route::get('/admin/tracking/pendirian/telah_disurvey_pendirian',[AdminController::class,'telah_disurvey_pendirian']);
    Route::get('/admin/tracking/pendirian/checking_berkas_verifikator_pendirian',[AdminController::class,'checking_berkas_verifikator_pendirian']);
    Route::get('/admin/tracking/pendirian/dokumen_sesuai_pendirian',[AdminController::class,'dokumen_sesuai_pendirian']);
    Route::get('/admin/tracking/pendirian/tolak_dokumen_pendirian',[AdminController::class,'tolak_dokumen_pendirian']);
    Route::get('/admin/tracking/pendirian/ttd_kepala_dinas_pendirian',[AdminController::class,'ttd_kepala_dinas_pendirian']);
    Route::get('/admin/tracking/pendirian/permohonan_selesai_pendirian',[AdminController::class,'permohonan_selesai_pendirian']);

    Route::get('/admin/tracking/penyelenggaraan/checking_berkas_operator_penyelenggaraan',[AdminController::class,'checking_berkas_operator_penyelenggaraan']);
    Route::get('/admin/tracking/penyelenggaraan/dokumen_valid_penyelenggaraan',[AdminController::class,'dokumen_valid_penyelenggaraan']);
    Route::get('/admin/tracking/penyelenggaraan/dokumen_tidak_valid_penyelenggaraan',[AdminController::class,'dokumen_tidak_valid_penyelenggaraan']);
    Route::get('/admin/tracking/penyelenggaraan/sedang_disurvey_penyelenggaraan',[AdminController::class,'sedang_disurvey_penyelenggaraan']);
    Route::get('/admin/tracking/penyelenggaraan/telah_disurvey_penyelenggaraan',[AdminController::class,'telah_disurvey_penyelenggaraan']);
    Route::get('/admin/tracking/penyelenggaraan/checking_berkas_verifikator_penyelenggaraan',[AdminController::class,'checking_berkas_verifikator_penyelenggaraan']);
    Route::get('/admin/tracking/penyelenggaraan/dokumen_sesuai_penyelenggaraan',[AdminController::class,'dokumen_sesuai_penyelenggaraan']);
    Route::get('/admin/tracking/penyelenggaraan/tolak_dokumen_penyelenggaraan',[AdminController::class,'tolak_dokumen_penyelenggaraan']);
    Route::get('/admin/tracking/penyelenggaraan/ttd_kepala_dinas_penyelenggaraan',[AdminController::class,'ttd_kepala_dinas_penyelenggaraan']);
    Route::get('/admin/tracking/penyelenggaraan/permohonan_selesai_penyelenggaraan',[AdminController::class,'permohonan_selesai_penyelenggaraan']);
    // End Create Route monitoring

    //Route Create Perizinan Pendirian
    Route::get('/admin/perizinanPendirian/create-tk',[AdminController::class,'create_tk']);
    Route::get('/admin/perizinanPendirian/create-sd',[AdminController::class,'create_sd']);

    //End Route Perizinan Pendirian

    // Route Create Perizinan Penyelenggaraan
    Route::get('admin/perizinanPenyelenggaraan/create-sd-smp',[AdminController::class,'create_sd_smp']);
    Route::get('admin/perizinanPenyelenggaraan/create-lpnp',[AdminController::class,'create_lpnp']);
    Route::get('admin/perizinanPenyelenggaraan/create-lpp',[AdminController::class,'create_lpp']);
    Route::get('admin/perizinanPenyelenggaraan/create-lpts',[AdminController::class,'create_lpts']);
    Route::get('admin/perizinanPenyelenggaraan/create-pklpk',[AdminController::class,'create_pklpk']);
    Route::get('admin/perizinanPenyelenggaraan/create-ppo',[AdminController::class,'create_ppo']);
    Route::get('admin/perizinanPenyelenggaraan/create-ptn-univ',[AdminController::class,'create_ptn_univ']);
    // End Route Create Perizinan Penyelenggaraan

    //Arsip
    Route::get('/admin/arsip',[AdminController::class,'arsip']);



});
// End Routes Admin



    // POST Perizinan
    Route::post('/store/perizinanPendirian',[PerizinanPendirianController::class,'store'])->name('pendirian.store');
    Route::post('/store/perizinanPenyelenggaraan',[PerizinanPenyelenggaraanController::class,'store'])->name('penyelenggaraan.store');

    Route::post('/update/perizinanPendirian',[PerizinanPendirianController::class,'update'])->name('pendirian.update');
    Route::post('/update/perizinanPenyelenggaraan',[PerizinanPenyelenggaraanController::class,'update'])->name('penyelenggaraan.update');

    Route::post('/update/pendirian/statusDokumen',[PerizinanPendirianController::class,'update_status_dokumen'])->name('statusPendirian.update');
    Route::post('/update/penyelenggaraan/statusDokumen',[PerizinanPenyelenggaraanController::class,'update_status_dokumen'])->name('statusPenyelenggaraan.update');

    Route::post('/update/pendirian/hasilSurvey',[PerizinanPendirianController::class,'update_hasil_survey'])->name('hasilSurveyPendirian.update');
    Route::post('/update/penyelenggaraan/hasilSurvey',[PerizinanPenyelenggaraanController::class,'update_hasil_survey'])->name('hasilSurveyPenyelenggaraan.update');

    Route::post('/update/pendirian/permohonanSelesai',[PerizinanPendirianController::class,'permohonan_selesai'])->name('permohonanSelesaiPendirian.update');
    Route::post('/update/penyelenggaraan/permohonanSelesai',[PerizinanPenyelenggaraanController::class,'permohonan_selesai'])->name('permohonanSelesaiPenyelenggaraan.update');

    // END POST Perizinan



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

//My  Account
Route::get('/my_account/{id}',[HomeController::class,'my_account']);



// Send Email
Route::get('/send-email/{id}',[MailController::class,'send_attach_gmail']);



route::get('/contoh-doc', function(){
    return view('docIzinTerbit');
});
