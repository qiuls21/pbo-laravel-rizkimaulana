<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::redirect('/', '/buku');
Route::get('/buku', [BukuController::class, 'index'])
->name('buku.index');

Route::get('/buku/{id}', [BukuController::class, 'show'])
->name('buku.show');

Route::get('/kategori/{nama}', [BukuController::class, 'kategori'])
->name('buku.kategori');

Route::get('/kategori/{nama?}', [BukuController::class, 'kategori'])
->name('buku.kategori');