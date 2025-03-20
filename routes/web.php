<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggaLarasController;
use App\Http\Controllers\GuessController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/angga-laras', function () {
//     return view('pages.angga-laras');
// });

Route::redirect('/', '/angga-laras');
Route::resource('/angga-laras', AnggaLarasController::class);
Route::get('/angga-laras/{slug}', [AnggaLarasController::class, 'slug']);
Route::get('guess', [GuessController::class, 'index']);

// Route::controller(AnggaLarasController::class)->group(function () {
//     Route::resource('/angga-laras', 'index');
//     Route::get('/angga-laras/{name?', 'slug');
// });
