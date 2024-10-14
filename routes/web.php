<?php

use App\Http\Controllers\BibliografiKategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);

Route::resource('user', UserController::class);

Route::resource('bibliografiKategori', BibliografiKategoriController::class);