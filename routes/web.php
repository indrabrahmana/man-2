<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminWebController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\DataSekolahController;
use App\Http\Controllers\DataSiswaController;

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
    Route::delete('admin/{admin}', [AdminWebController::class, 'delete']);

});

Route::prefix('user')->group(function () {

    // data siswa
    Route::get('siswa', [DataSiswaController::class, 'index']);
    Route::get('siswa/create', [DataSiswaController::class, 'create']);
    Route::post('siswa', [DataSiswaController::class, 'store']);
    Route::get('siswa/{siswa}', [DataSiswaController::class, 'show']);
    Route::get('siswa/{siswa}/edit', [DataSiswaController::class, 'edit']);
    Route::put('siswa/{siswa}', [DataSiswaController::class, 'update']);
    Route::delete('siswa/{siswa}', [DataSiswaController::class, 'delete']);



});