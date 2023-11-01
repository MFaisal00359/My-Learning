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

Route::get('/', function () {
    return view('home');
});

Route::get('/livewire', function () {
    return view('home-page');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/livewire/', function () {
    return view('/livewire/home-page');
});

Route::get('/livewire/', function () {
    return view('/livewire/informasi-beasiswa');
});

Route::get('/livewire/', function () {
    return view('/livewire/home-page');
});
