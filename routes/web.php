<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingController::class, 'index']);

// Admin Routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/beasiswa', AdminBeasiswa::class)->name('admin.beasiswa');
    Route::get('admin/konseling', AdminKonseling::class)->name('admin.konseling');
    Route::get('admin/modul', GuruModul::class)->name('admin.modul');
});

// Guru Routes
Route::middleware(['auth', 'guru'])->group(function () {
    Route::get('guru/modul', GuruModul::class)->name('guru.modul');
});

// Siswa Routes
Route::middleware(['auth', 'siswa'])->group(function () {
    Route::get('siswa/landing', SiswaLanding::class)->name('siswa.landing');
});

