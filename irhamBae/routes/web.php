<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan form input
Route::get('/form', [SessionController::class, 'create'])
    ->name('session.create');

// Route untuk menyimpan data ke session
Route::post('/session/store', [SessionController::class, 'store'])
    ->name('session.store');

// Route untuk menampilkan data dari session
Route::get('/session/display', [SessionController::class, 'display'])
    ->name('session.display');

// Route untuk menghapus data dari session
Route::delete('/session/clear', [SessionController::class, 'clear'])
    ->name('session.clear');
