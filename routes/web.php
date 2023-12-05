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
use App\Http\Controllers\Modul11Controller;
use App\Http\Controllers\PostBeasiswaController;
use App\Http\Controllers\BeasiswaLinkController;
use App\Http\Controllers\PostKonselingController;
use App\Http\Controllers\KonselingLinkController;
use App\Http\Controllers\PostModul11Controller;

route::get('/', function(){
    return view('welcome');
})->name('welcome');

Route::get('/moduls_page', function () {
    return view('moduls_page.index');
});

Route::get('moduls_page/modul_11_page', [PostModul11Controller::class, 'index'])->name('modul_11_page');

Route::get('moduls_page/modul_10_page', [PostModul11Controller::class, 'index'])->name('modul_10_page');

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

    Route::get('/moduls', function () {
        return view('moduls.index');
    })->name('moduls');

    Route::group(['prefix' => 'moduls'], function () {
        Route::resource('modul_11', \App\Http\Controllers\Modul11Controller::class)->names([
            'index' => 'moduls.modul_11.index',
            'create' => 'moduls.modul_11.create',
            'show' => 'moduls.modul_11.show',
            'edit' => 'moduls.modul_11.edit',
            'destroy' => 'moduls.modul_11.destroy',
        ]);
    });

    Route::group(['prefix' => 'moduls'], function () {
        Route::resource('modul_10', \App\Http\Controllers\Modul10Controller::class)->names([
            'index' => 'moduls.modul_10.index',
            'create' => 'moduls.modul_10.create',
            'show' => 'moduls.modul_10.show',
            'edit' => 'moduls.modul_10.edit',
            'destroy' => 'moduls.modul_10.destroy',
        ]);
    });

    Route::resource('beasiswa_links', \App\Http\Controllers\BeasiswaLinkController::class);
    Route::resource('konseling_links', \App\Http\Controllers\KonselingLinkController::class);
});
