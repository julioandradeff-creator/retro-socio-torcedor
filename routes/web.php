<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocioController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/cadastro', [SocioController::class, 'create'])->name('socios.create');
Route::post('/cadastro', [SocioController::class, 'store'])->name('socios.store');
Route::get('/socios', [SocioController::class, 'index'])->name('socios.index');
