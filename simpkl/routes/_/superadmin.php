<?php

use App\Http\Controllers\SuperAdmin\MasterData\MahasiswaController;
use App\Http\Controllers\SuperAdmin\MasterData\ModuleController;
use App\Http\Controllers\SuperAdmin\MasterData\PegawaiController;
use App\Http\Controllers\SuperAdmin\MasterData\DataperusahaanController;
use App\Http\Controllers\SuperAdmin\MasterData\JurusanController;
use App\Http\Controllers\SuperAdmin\MasterData\ProdiController;
use App\Http\Controllers\SuperAdmin\MasterData\ProfileController;
use App\Http\Controllers\SuperAdmin\MasterData\TahunajaranController;
use Illuminate\Support\Facades\Route;

Route::resource('master-data/mahasiswa', MahasiswaController::class);
Route::resource('master-data/pegawai', PegawaiController::class);
Route::resource('master-data/dataperusahaan', DataperusahaanController::class);
Route::resource('master-data/jurusan', JurusanController::class);
Route::resource('master-data/prodi', ProdiController::class);
// Route::resource('master-data/profile', ProfileController::class);
Route::resource('master-data/tahunajaran', TahunajaranController::class);

Route::post('master-data/module/add-role', [ModuleController::class, 'addRole']);
Route::get('master-data/module/delete-role/{role}', [ModuleController::class, 'deleteRole']);
Route::resource('master-data/module', ModuleController::class);

Route::post('master-data/jurusan/add-prodi', [JurusanController::class, 'addProdi']);
Route::get('master-data/jurusan/delete-prodi/{prodi}', [JurusanController::class, 'deleteProdi']);
Route::resource('master-data/jurusan', JurusanController::class);

// Route::post('master-data/mahasiswa/filter', [MahasiswaController::class, 'filter']);


// Login Multi Role

Route::redirect('/', 'superadmin/master-data/pegawai');