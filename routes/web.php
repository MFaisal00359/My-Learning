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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::get('/beasiswa', Beasiswa::class)->class('admin.beasiswa');
});


