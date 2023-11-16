<?php

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

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\BeasiswaController;
// use App\Http\Controllers\Admin\KonselingController;
// use App\Http\Controllers\Guru\ModulController as GuruModulController;
// use App\Http\Controllers\Siswa\LandingController;
// use App\Http\Livewire\Admin\Beasiswa as AdminBeasiswa;
// use App\Http\Livewire\Admin\Konseling as AdminKonseling;
// use App\Http\Livewire\Guru\Modul as GuruModul;
// use App\Http\Livewire\Siswa\Landing as SiswaLanding;

route::get('/', function(){
    return view('home');
});

// Route::get('/', [LandingController::class, 'index']);

// Admin Routes
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('admin/beasiswa', function () {
//         return view('livewire.admin.beasiswa');
//     })->name('admin.beasiswa');

//     Route::get('admin/konseling', function () {
//         return view('livewire.admin.konseling');
//     })->name('admin.konseling');

//     Route::get('admin/modul', function () {
//         return view('livewire.admin.modul');
//     })->name('admin.modul');
// });

// Guru Routes
// Route::middleware(['auth', 'guru'])->group(function () {
//     Route::get('guru/modul', function () {
//         return view('livewire.guru.modul');
//     })->name('guru.modul');
// });

// Siswa Routes
// Route::middleware(['auth', 'siswa'])->group(function () {
//     Route::get('siswa/landing', function () {
//         return view('livewire.siswa.landing');
//     })->name('siswa.landing');
// });

// Add Livewire Routes if needed



