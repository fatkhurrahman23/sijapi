<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sijapi;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Jadwal;
use App\Http\Controllers\Mahasiswa;
use App\Http\Controllers\Dosen;
use App\Http\Controllers\MataKuliah;

Route::get('/', [sijapi::class, 'index']);


// ======================================== AUTH ========================================
// LOGIN
Route::get('/login', [AuthController::class, 'showLoginPage'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// REGISTER
Route::get('/register', [AuthController::class, 'showRegistrationPage'])->name('register.index');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


// MIDDLEWARE ADMIN
// Route::get('admin/', 'AdminController@index')->middleware('admin');




// ======================================== DASHBOARD ADMIN ========================================
// page admin hanya route ke halaman admin

Route::get('admin', function () {
    return view('admin/admin');
});//->middleware('auth','admin');





// ruang
Route::get('admin/ruang', [Jadwal::class, 'tampilDataRuang']);
Route::post('admin/ruang', [Jadwal::class, 'tambahDataRuang']);
// ruang edit
Route::get('admin/ruang/{kode_ruang}/edit', [Jadwal::class, 'editRuang'])->name('ruang.edit');
Route::post('admin/ruang/{id}/update', [Jadwal::class, 'updateDataRuang'])->name('ruang.update');
// ruang delete
Route::get('admin/ruang/{kode_ruang}/delete', [Jadwal::class, 'hapusDataRuang'])->name('ruang.delete');

// mahasiswa
Route::get('admin/mahasiswa', [Mahasiswa::class, 'tampilDataMahasiswa']);
Route::post('admin/mahasiswa', [Mahasiswa::class, 'tambahDataMahasiswa']);
// mahasiswa edit
Route::get('admin/mahasiswa/{nim}/edit', [Mahasiswa::class, 'editMahasiswa'])->name('mahasiswa.edit');
Route::post('admin/mahasiswa/{nim}/update', [Mahasiswa::class, 'updateDataMahasiswa'])->name('mahasiswa.update');
// mahasiswa delete
Route::get('admin/mahasiswa/{nim}/delete', [Mahasiswa::class, 'hapusDataMahasiswa'])->name('mahasiswa.delete');


// dosen
Route::get('admin/dosen', [Dosen::class, 'tampilDataDosen']);
Route::post('admin/dosen', [Dosen::class, 'tambahDataDosen']);
// dosen edit
Route::get('admin/dosen/{nip}/edit', [Dosen::class, 'editDosen'])->name('dosen.edit');
Route::post('admin/dosen/{nip}/update', [Dosen::class, 'updateDataDosen'])->name('dosen.update');
// dosen delete
Route::get('admin/dosen/{nip}/delete', [Dosen::class, 'hapusDataDosen'])->name('dosen.delete');

// mata kuliah
Route::get('admin/matakuliah', [MataKuliah::class, 'tampilDataMatkul']);
Route::post('admin/matakuliah', [MataKuliah::class, 'tambahDataMatkul']);


