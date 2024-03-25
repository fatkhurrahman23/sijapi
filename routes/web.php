<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sijapi;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Jadwal;
use App\Http\Controllers\Mahasiswa;

Route::get('/', [sijapi::class, 'index']);


// ======================================== AUTH ========================================
// LOGIN
Route::get('/login', [AuthController::class, 'showLoginPage'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// REGISTER
Route::get('/register', [AuthController::class, 'showRegistrationPage'])->name('register.index');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// MIDDLEWARE ADMIN
// Route::get('admin/', 'AdminController@index')->middleware('admin');




// ======================================== DASHBOARD ADMIN ========================================
// ruang
Route::get('admin/ruang', [Jadwal::class, 'tampilDataRuang']);
Route::post('admin/ruang', [Jadwal::class, 'tambahDataRuang']);

// ruang edit
Route::get('admin/ruang/{kode_ruang}/edit', [Jadwal::class, 'editRuang'])->name('ruang.edit');
Route::post('admin/ruang/{id}/update', [Jadwal::class, 'updateDataRuang'])->name('ruang.update');

// mahasiswa
Route::get('admin/mahasiswa', [Mahasiswa::class, 'tampilDataMahasiswa']);
Route::post('admin/mahasiswa', [Mahasiswa::class, 'tambahDataMahasiswa']);


