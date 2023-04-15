<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminWebController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\DataSekolahController;
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



Route::prefix('admin')->group(function(){
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

    //Kelas
    Route::get('kelas', [KelasController::class, 'index']);
    Route::get('kelas/create', [KelasController::class, 'create']);
    Route::post('kelas', [KelasController::class, 'store']);
    Route::get('kelas/{kelas}/edit', [KelasController::class, 'edit']);
    Route::put('kelas/{kelas}', [KelasController::class, 'update']);
    Route::delete('kelas/{kelas}', [KelasController::class, 'destroy']);   
    
    //Mapel
    Route::get('mapel', [MapelController::class, 'index']);
    Route::get('mapel/create', [MapelController::class, 'create']);
    Route::post('mapel', [MapelController::class, 'store']);
    Route::get('mapel/{mapel}/edit', [apelController::class, 'edit']);
    Route::put('mapel/{mapel}', [MapelController::class, 'update']);
    Route::delete('mapel/{mapel}', [MapelController::class, 'destroy']);   

     
    //Nilai
    Route::get('nilai', [NilaiController::class, 'index']);
    Route::get('nilai/create', [NilaiController::class, 'create']);
    Route::post('nilai', [NilaiController::class, 'store']);
    Route::get('nilai/{nilai}/edit', [NilaiController::class, 'edit']);
    Route::put('nilai/{nilai}', [NilaiController::class, 'update']);
    Route::delete('nilai/{nilai}', [NilaiController::class, 'destroy']);   


    // admin
    Route::get('admin', [AdminWebController::class, 'index']);
    Route::get('admin/create', [AdminWebController::class, 'create']);
    Route::post('admin', [AdminWebController::class, 'store']);
    Route::get('admin/{admin}/edit', [AdminWebController::class, 'edit']);
    Route::put('admin/{admin}', [AdminWebController::class, 'update']);
    Route::delete('admin/{admin}', [AdminWebController::class, 'destroy']);

});
