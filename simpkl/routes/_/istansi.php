<?php

// use App\Http\Controllers\istansi\MasterData\MahasiswaController;

use App\Http\Controllers\Istansi\MasterData\DatamagangController;
use App\Http\Controllers\Istansi\MasterData\ModuleController;
use App\Http\Controllers\Istansi\MasterData\PegawaiController;
use App\Http\Controllers\Istansi\MasterData\DataperusahaanController;
use App\Http\Controllers\Istansi\MasterData\LowonganController;
use App\Http\Controllers\Istansi\MasterData\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::resource('master-data/mahasiswa', MahasiswaController::class);
Route::resource('master-data/pegawai', PegawaiController::class);
Route::resource('master-data/dataperusahaan', DataperusahaanController::class);
Route::resource('master-data/lowongan', LowonganController::class);
Route::resource('master-data/profile', ProfileController::class);
Route::resource('master-data/datamagang', DatamagangController::class);
// Route::resource('master-data/dashboard', DashboardController::class);

Route::post('master-data/module/add-role', [ModuleController::class, 'addRole']);
Route::get('master-data/module/delete-role/{role}', [ModuleController::class, 'deleteRole']);
Route::resource('master-data/module', ModuleController::class);
 

// Login Multi RoleDatamagang

Route::redirect('/', 'istansi/master-data/lowongan');
// Route::redirect('/', 'istansi/master-data/dashboard');