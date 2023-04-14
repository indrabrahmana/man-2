<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminWebController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\DataSekolahController;
use App\Http\Controllers\PesertaDidikController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::prefix('admin')->group(function () {
    // admin
    Route::get('admin', [AdminWebController::class, 'showAdmin']);
    Route::get('dashboard', [WebController::class, 'showDashboard']);

    // data sekolah
    Route::get('datasekolah', [DataSekolahController::class, 'index']);
    Route::get('datasekolah/create', [DataSekolahController::class, 'create']);
    Route::post('datasekolah', [DataSekolahController::class, 'store']);
    Route::get('datasekolah/{datasekolah}', [DataSekolahController::class, 'show']);
    Route::get('datasekolah/{datasekolah}/edit', [DataSekolahController::class, 'edit']);
    Route::put('datasekolah/{datasekolah}', [DataSekolahController::class, 'update']);
    Route::delete('datasekolah/{datasekolah}', [DataSekolahController::class, 'destroy']);
    Route::get('datasekolah/{datasekolah}/cetak_pdf', [DataSekolahController::class, 'cetak_pdf']);


    // admin
    Route::get('admin', [AdminWebController::class, 'index']);
    Route::get('admin/create', [AdminWebController::class, 'create']);
    Route::post('admin', [AdminWebController::class, 'store']);
    Route::get('admin/{admin}/edit', [AdminWebController::class, 'edit']);
    Route::put('admin/{admin}', [AdminWebController::class, 'update']);
    Route::delete('admin/{admin}', [AdminWebController::class, 'destroy']);

});

Route::prefix('user')->group(function () {

    // peserta didik
    Route::get('pesertadidik', [PesertaDidikController::class, 'index']);
    Route::get('pesertadidik/create', [PesertaDidikController::class, 'create']);
    Route::post('pesertadidik', [PesertaDidikController::class, 'store']);
    Route::get('pesertadidik/{pesertadidik}', [PesertaDidikController::class, 'show']);
    Route::get('pesertadidik/{pesertadidik}/edit', [PesertaDidikController::class, 'edit']);
    Route::put('pesertadidik/{pesertadidik}', [PesertaDidikController::class, 'update']);
    Route::delete('pesertadidik/{pesertadidik}', [PesertaDidikController::class, 'destroy']);
    Route::get('pesertadidik/{pesertadidik}/cetak_pdf', [PesertaDidikController::class, 'cetak_pdf']);





});