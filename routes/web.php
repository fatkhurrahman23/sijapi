<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sijapi;
use App\Http\Controllers\login;
use App\Http\Controllers\Jadwal;
use App\Http\Controllers\Mahasiswa;

Route::get('/', [sijapi::class, 'index']);

// Route::post('/login', 'Login@login')->name('login');
Route::post('/login', [Login::class, 'login'])->name('login');


// ruang
Route::get('admin/ruang', [Jadwal::class, 'tampilDataRuang']);
Route::post('admin/ruang', [Jadwal::class, 'tambahDataRuang']);
// Add route for editing room codes
Route::get('admin/ruang/{kode_ruang}/edit', [Jadwal::class, 'editRuang'])->name('ruang.edit');
Route::post('admin/ruang/{id}/update', [Jadwal::class, 'updateDataRuang'])->name('ruang.update');

// mahasiswa
Route::get('admin/mahasiswa', [Mahasiswa::class, 'tampilDataMahasiswa']);
Route::post('admin/mahasiswa', [Mahasiswa::class, 'tambahDataMahasiswa']);


