<?php


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
    return view('welcome');
});

Auth::routes(['verify' => true]);
Route::get('/home', [HomeController::class, 'index'])->name('home');



// Routes Admin
Route::group(['middleware' => 'role:admin'], function(){
    Route::get('/admin',[HomeController::class,'index_admin'])->name('admin');
    Route::get('/admin/tracking',[PerizinanPendirianController::class,'trackings'])->name('trackings');

    // Tracking
    Route::get('/admin/data-pengguna',[AdminController::class,'data_pengguna']);
    Route::get('/admin/dokumen-ditolak',[AdminController::class,'dokumen_ditolak']);
    Route::get('/admin/checking-berkas',[AdminController::class,'checking_berkas']);
    Route::get('/admin/dokumen-valid',[AdminController::class,'dokumen_valid']);
    Route::get('/admin/dokumen-tidak-valid',[AdminController::class,'dokumenTidak_valid']);
    Route::get('/admin/sedang-disurvey',[AdminController::class,'sedang_disurvey']);
    Route::get('/admin/telah-disurvey',[AdminController::class,'telah_disurvey']);
    Route::get('/admin/izin-terbit',[AdminController::class,'izin_terbit']);
    // Tracking

    //Route Perizinan Pendirian
    Route::get('/admin/perizinanPendirian/create-tk',[AdminController::class,'create_tk']);
    Route::get('/admin/perizinanPendirian/create-sd',[AdminController::class,'create_sd']);




    route::resource('admin/perizinanPendirian',PerizinanPendirianController::class,);
    //End Route Perizinan Pendirian

    // Route Perizinan Penyelenggaraan
    Route::get('admin/perizinanPenyelenggaraan/create-sd-smp',[AdminController::class,'create_sd_smp']);
    Route::get('admin/perizinanPenyelenggaraan/create-lpnp',[AdminController::class,'create_lpnp']);
    Route::get('admin/perizinanPenyelenggaraan/create-lpp',[AdminController::class,'create_lpp']);
    Route::get('admin/perizinanPenyelenggaraan/create-lpts',[AdminController::class,'create_lpts']);
    Route::get('admin/perizinanPenyelenggaraan/create-pklpk',[AdminController::class,'create_pklpk']);
    Route::get('admin/perizinanPenyelenggaraan/create-ppo',[AdminController::class,'create_ppo']);
    Route::get('admin/perizinanPenyelenggaraan/create-ptn-univ',[AdminController::class,'create_ptn_univ']);


    route::resource('admin/perizinanPenyelenggaraan',PerizinanPenyelenggaraanController::class,);
    // End Route Perizinan Penyelenggaraan


    //Arsip
    Route::get('/admin/arsip',[AdminController::class,'arsip']);

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
    Route::get('/walikota/notifikasi',[WalikotaController::class,'notifikasi']);

    // Tracking Dokumen
    Route::get('/walikota/tracking/pendirian/ttd_walikota_pendirian',[WalikotaController::class,'ttd_walikota_pendirian']);
    Route::get('/walikota/tracking/pendirian/tolak_pendirian',[WalikotaController::class,'tolak_pendirian']);
    Route::get('/walikota/tracking/pendirian/izin_terbit_pendirian',[WalikotaController::class,'izin_terbit_pendirian']);


    Route::get('/walikota/tracking/penyelenggaraan/ttd_walikota_penyelenggaraan',[WalikotaController::class,'ttd_walikota_penyelenggaraan']);
    Route::get('/walikota/tracking/penyelenggaraan/tolak_pendirian',[WalikotaController::class,'tolak_penyelenggaraan']);
    Route::get('/walikota/tracking/penyelenggaraan/izin_terbit_penyelenggaraan',[WalikotaController::class,'izin_terbit_penyelenggaraan']);

    // End Tracking Dokumen

    // Edit Tracking Perizinan
    Route::get('/walikota/tracking/pendirian/edit/ttd_walikota_pendirian/{id}',[WalikotaController::class,'edit_ttd_walikota_pendirian']);
    Route::get('/walikota/tracking/penyelenggaraan/edit/ttd_walikota_penyelenggaraan/{id}',[WalikotaController::class,'edit_ttd_walikota_penyelenggaraan']);
    // End Edit Tracking Perizinan

    // Izin Terbit
    Route::get('/walikota/tracking/pendirian/izin_terbit_pendirian/{id}',[WalikotaController::class,'izin_terbit_pendirian']);
    Route::get('/walikota/tracking/penyelenggaraan/izin_terbit_penyelenggaraan/{id}',[WalikotaController::class,'izin_terbit_penyelenggaraan']);
    // End Izin Terbit

    // Download Izin Terbit
    Route::get('/walikota/tracking/pendirian/download/izin_terbit_pendirian/{id}',[WalikotaController::class,'download_izin_terbit_pendirian']);
    Route::get('/walikota/tracking/penyelenggaraan/download/izin_terbit_penyelenggaraan/{id}',[WalikotaController::class,'download_izin_terbit_penyelenggaraan']);


});
// End Route walikota

// Route kepala-dinas
Route::group(['middleware' => 'role:kepala-dinas'], function(){
    Route::get('/kepala-dinas',[HomeController::class,'index_kepalaDinas'])->name('kepala-dinas');
    Route::get('/kepala-dinas/notifikasi',[KepalaDinasController::class,'notifikasi']);


    // Tracking Dokumen
    Route::get('/kepala-dinas/tracking/pendirian/ttd_kepalaDinas_pendirian',[KepalaDinasController::class,'ttd_kepalaDinas_pendirian']);
    Route::get('/kepala-dinas/tracking/pendirian/ttd_walikota_pendirian',[KepalaDinasController::class,'ttd_walikota_pendirian']);

    Route::get('/kepala-dinas/tracking/penyelenggaraan/ttd_kepalaDinas_penyelenggaraan',[KepalaDinasController::class,'ttd_kepalaDinas_penyelenggaraan']);
    Route::get('/kepala-dinas/tracking/penyelenggaraan/ttd_walikota_penyelenggaraan',[KepalaDinasController::class,'ttd_walikota_penyelenggaraan']);
    // End Tracking Dokumen

    // Edit Tracking Perizinan
    Route::get('/kepala-dinas/tracking/pendirian/edit/ttd_kepalaDinas/{id}',[KepalaDinasController::class,'edit_ttd_kepalaDinas_pendirian']);
    Route::get('/kepala-dinas/tracking/penyelenggaraan/edit/ttd_kepalaDinas/{id}',[KepalaDinasController::class,'edit_ttd_kepalaDinas_penyelenggaraan']);
    // End Edit Tracking Perizinan

    // Izin Terbit PDF
    Route::get('/kepla-dinas/pendirian/tracking/izin_terbit_pendirian_pdf/{id}',[KepalaDinasController::class,'izin_terbit_pendirian_pdf']);


});
// End Route kepala-dinas

// Route penyelia / Verifikator
Route::group(['middleware' => 'role:penyelia'], function(){
    Route::get('/penyelia',[HomeController::class,'index_penyelia'])->name('penyelia');
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

// Route auditor
Route::group(['middleware' => 'role:auditor'], function(){
    Route::get('/auditor',[HomeController::class,'index_auditor'])->name('auditor');
});
// End Route auditor

// Route operator
Route::group(['middleware' => 'role:operator'], function(){
    Route::get('/operator',[HomeController::class,'index_operator'])->name('operator');

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

// Route pemohon
Route::group(['middleware' => 'role:pemohon','verify'], function(){

    Route::get('/data-pemohon',[PemohonController::class,'data_pemohon']);

    // Menu
    Route::get('/pemohon',[HomeController::class,'index_pemohon'])->name('pemohon');
    Route::get('/pemohon/persyaratan', function(){
        return view('pemohon.persyaratan');
    });

    // Menu

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
    Route::get('/pemohon/tracking_pendirian',[PemohonController::class,'tracking_pendirian']);
    Route::get('/pemohon/tracking_penyelenggaraan',[PemohonController::class,'tracking_penyelenggaraan']);

    Route::get('/pemohon/show_pendirian/{id}',[PemohonController::class,'show_pendirian']);
    Route::get('/pemohon/show_penyelenggaraan/{id}',[PemohonController::class,'show_penyelenggaraan']);
    // End Pemohon Tracking


});
// End Route pemohon

    // POST Perizinan
    Route::post('/store/perizinanPendirian',[PerizinanPendirianController::class,'store'])->name('pendirian.store');
    Route::post('/store/perizinanPenyelenggaraan',[PerizinanPenyelenggaraanController::class,'store'])->name('penyelenggaraan.store');


    Route::post('/update/perizinanPendirian',[PerizinanPendirianController::class,'update'])->name('pendirian.update');
    Route::post('/update/perizinanPenyelenggaraan',[PerizinanPenyelenggaraanController::class,'update'])->name('penyelenggaraan.update');

    Route::post('/update/pendirian/statusDokumen',[PerizinanPendirianController::class,'update_status_dokumen'])->name('statusPendirian.update');
    Route::post('/update/penyelenggaraan/statusDokumen',[PerizinanPenyelenggaraanController::class,'update_status_dokumen'])->name('statusPenyelenggaraan.update');

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

Route::get('/testing/izinterbit',function(){
    return view('walikota.perizinanPendirian.tracking.izinTerbitPdf');
});


// Send Email
Route::get('/send-email/{id}',[MailController::class,'send_attach_gmail']);



