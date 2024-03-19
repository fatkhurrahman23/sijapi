<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sijapi;
use App\Http\Controllers\login;

Route::get('/', [sijapi::class, 'index']);

// Route::post('/login', 'Login@login')->name('login');
Route::post('/login', [Login::class, 'login'])->name('login');