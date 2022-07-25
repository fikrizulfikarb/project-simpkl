<?php

use App\Http\Controllers\Admin\MasterData\DataperusahaanController;
use App\Http\Controllers\Admin\MasterData\LowonganController as MasterDataLowonganController;
use App\Http\Controllers\Mahasiswa\LowonganController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Profile\PegawaiController;
use App\Http\Controllers\SuperAdmin\MasterData\TahunajaranController;
use App\Models\SuperAdmin\MasterData\Tahunajaran;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// profile
Route::resource('profile/pegawai',  PegawaiController::class);

Route::middleware('auth:dataperusahaan')->group(function(){
    Route::prefix('istansi')
    ->middleware('can:simpkl-istansi')
    ->group(function () {
        include "_/istansi.php";
    });
});


Route::middleware('auth')->group(function () {
    Route::prefix('superadmin')
        ->middleware('can:simpkl-superadmin')
        ->group(function () {
            include "_/superadmin.php";
    });

    Route::prefix('admin')
        ->middleware('can:simpkl-admin')
        ->group(function () {
            include "_/admin.php";
    });

});

Route::prefix('mahasiswa')->middleware('auth:mahasiswa')->group(function () {
    include "_/mahasiswa.php";

});


Route::post('store-daftar-lowongan', [LowonganController::class, 'daftar']);
Route::put('setuju/{id}', [MasterDataLowonganController::class, 'setuju']);
Route::put('ditolak/{id}', [MasterDataLowonganController::class, 'ditolak']);
Route::put('dipulihkan/{id}', [MasterDataLowonganController::class, 'dipulihkan']);


Route::post('store-lowongan', [DataperusahaanController::class, 'storelowongan']);


Route::post('store-tahunajaran', [TahunajaranController::class, 'storetahunajaran']);