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
use App\Http\Controllers\PostModulController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\PostBeasiswaController;
use App\Http\Controllers\BeasiswaLinkController;
use App\Http\Controllers\PostKonselingController;
use App\Http\Controllers\KonselingLinkController;

route::get('/', function(){
    return view('welcome');
})->name('welcome');

Route::get('/modul-page', [PostModulController::class, 'index'])->name('modul-page');
Route::get('/modul-page/{modul}/showFile', [PostModulController::class, 'showFile'])->name('modul-page.showFile');

Route::get('/beasiswa-page', [PostBeasiswaController::class, 'index'])->name('beasiswa-page');
// Route::get('/beasiswa-page/{nama_beasiswa}', [PostModulController::class, 'show'])->name('beasiswa-page.show');

Route::get('/konseling-page', [PostKonselingController::class, 'index'])->name('konseling-page');
// Route::get('/konseling-page/{nama_tes}', [PostKonselingController::class, 'show'])->name('konseling-page.show');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('moduls', \App\Http\Controllers\ModulController::class);
    Route::resource('beasiswa_links', \App\Http\Controllers\BeasiswaLinkController::class);
    Route::resource('konseling_links', \App\Http\Controllers\KonselingLinkController::class);
});
