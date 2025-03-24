<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggaLarasController;
use App\Http\Controllers\GuessController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\AlreadyLoggedIn;
use App\Http\Middleware\IsLoggedIn;

Route::redirect('/', '/angga-laras');
Route::resource('/angga-laras', AnggaLarasController::class)->except([
    'create',
    'store',
    'edit',
    'update',
    'destroy'
]);
Route::get('/angga-laras/{slug}', [AnggaLarasController::class, 'slug']);
Route::get('guess', [GuessController::class, 'index']);
// ->middleware(IsLoggedIn::class);
Route::get('register', [RegisterController::class, 'index'])
    ->middleware(AlreadyLoggedIn::class);
Route::post('create', [RegisterController::class, 'create']);
Route::get('login', [LoginController::class, 'index'])
    ->middleware(AlreadyLoggedIn::class);
Route::post('authenticate', [LoginController::class, 'authenticate']);
Route::get('logout', [LoginController::class, 'logout']);

// Route::controller(AnggaLarasController::class)->group(function () {
//     Route::resource('/angga-laras', 'index');
//     Route::get('/angga-laras/{name?', 'slug');
// });
