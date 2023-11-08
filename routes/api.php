<?php

use App\Http\Controllers\Api\Auth\ForgotPasswordController;
use App\Http\Controllers\Api\Auth\UserController;
use App\Http\Controllers\Api\Auth\VerifyEmailController;
use App\Http\Controllers\Api\PendirianController;
use App\Http\Controllers\Api\PenyelenggaraanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/register', [UserController::class, 'register']);
Route::post('/forgot-password', [ForgotPasswordController::class, 'forgot']);
Route::post('/login', [UserController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user/profile', [UserController::class, 'getUserProfile']);
    Route::post('/email/resend', [VerifyEmailController::class, 'resend']);

    // Pendirian
    Route::get('/pendirian', [PendirianController::class, 'getPendirian']);
    Route::get('/pendirian/user', [PendirianController::class, 'getPendirianByUser']);
    Route::get('/pendirian/{id}', [PendirianController::class, 'getPendirianById']);
    Route::post('/pendirian', [PendirianController::class, 'create']);
    Route::post('/pendirian/{id}', [PendirianController::class, 'update']);
    Route::delete('/pendirian/{id}', [PendirianController::class, 'delete']);

    // Pendirian
    Route::get('/penyelenggaraan', [PenyelenggaraanController::class, 'getPenyelenggaraan']);
    Route::get('/penyelenggaraan/user', [PenyelenggaraanController::class, 'getPenyelenggaraanByUser']);
    Route::get('/penyelenggaraan/{id}', [PenyelenggaraanController::class, 'getPenyelenggaraanById']);
    Route::post('/penyelenggaraan', [PenyelenggaraanController::class, 'create']);
    Route::post('/penyelenggaraan/{id}', [PenyelenggaraanController::class, 'update']);
    Route::delete('/penyelenggaraan/{id}', [PenyelenggaraanController::class, 'delete']);
});
