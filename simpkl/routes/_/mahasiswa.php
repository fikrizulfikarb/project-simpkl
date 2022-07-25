<?php

use App\Http\Controllers\Mahasiswa\DashboardController;
use App\Http\Controllers\Mahasiswa\DataperusahaanController;
use App\Http\Controllers\Mahasiswa\SyaratmagangController;
use App\Http\Controllers\Mahasiswa\ProfileController;
use App\Http\Controllers\Mahasiswa\LowonganController;
use App\Http\Controllers\Mahasiswa\DaftarlowonganController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'mahasiswa/dashboard');
Route::get('dashboard', DashboardController::class);

Route::resource('dataperusahaan', DataperusahaanController::class);
Route::resource('syaratmagang', SyaratmagangController::class);
Route::resource('profile', ProfileController::class);
Route::resource('lowongan', LowonganController::class);
Route::resource('daftarlowongan', DaftarlowonganController::class);




// Route::put('syaratmagang/setuju/{id}', [SyaratmagangController::class, 'setuju']);
// Route::put('syaratmagang/setuju/{id}', [SyaratmagangController::class, 'batal']);
// Route::put('syaratmagang/setuju/{id}', [SyaratmagangController::class, 'setuju']);
// Route::put('pengajuanmasuk/ditolak/{id}', [PengajuanMasukController::class, 'ditolak']);

// Route::resource('/', DashboardController::class);

// Route::redirect('/', 'mahasiswa');