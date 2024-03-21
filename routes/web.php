<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sijapi;
use App\Http\Controllers\login;
use App\Http\Controllers\Jadwal;

Route::get('/', [sijapi::class, 'index']);

// Route::post('/login', 'Login@login')->name('login');
Route::post('/login', [Login::class, 'login'])->name('login');

Route::get('admin/ruang', [Jadwal::class, 'tampilDataRuang']);
Route::post('admin/ruang', [Jadwal::class, 'tambahDataRuang']);

// Route::get('');