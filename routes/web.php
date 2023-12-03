<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout/cover');
});

Route::get('/home', [MyController::class, 'home'])->name('home');
Route::get('/basic', [MyController::class, 'basic'])->name('basic');
Route::get('/fitur', [MyController::class, 'fitur'])->name('fitur');
Route::get('/kuis', [MyController::class, 'kuis'])->name('kuis');
Route::get('/soalkuis', [MyController::class, 'soalkuis'])->name('soalkuis');
