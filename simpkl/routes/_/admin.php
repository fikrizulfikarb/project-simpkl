<?php

use App\Http\Controllers\Admin\MasterData\MahasiswaController;
use App\Http\Controllers\Admin\MasterData\ModuleController;
use App\Http\Controllers\Admin\MasterData\PegawaiController;
use App\Http\Controllers\Admin\MasterData\LowonganController;
use App\Http\Controllers\Admin\MasterData\LowonganditolakController;
use App\Http\Controllers\Admin\MasterData\DataperusahaanController;
use Illuminate\Support\Facades\Route;

Route::resource('master-data/mahasiswa', MahasiswaController::class);
Route::resource('master-data/pegawai', PegawaiController::class);
Route::resource('master-data/dataperusahaan', DataperusahaanController::class);
Route::resource('master-data/lowongan', LowonganditolakController::class);

// Route::put('master-data/lowongan/setuju', [LowonganController::class, 'setuju']);
// Route::put('master-data/lowongan/ditolak/{id}', [LowonganController::class, 'ditolak']);
Route::get('master-data/lowongan/{lowongan}/detail', [LowonganController::class, 'detail']);
Route::resource('master-data/lowongan', LowonganController::class);

Route::post('master-data/module/add-role', [ModuleController::class, 'addRole']);
Route::get('master-data/module/delete-role/{role}', [ModuleController::class, 'deleteRole']);
Route::resource('master-data/module', ModuleController::class);


// Login Multi Role

Route::redirect('/', 'admin/master-data/pegawai');