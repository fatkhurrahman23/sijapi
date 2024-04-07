<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sijapi;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Jadwal;
use App\Http\Controllers\Mahasiswa;
use App\Http\Controllers\Dosen;
use App\Http\Controllers\MataKuliah;
use App\Http\Controllers\jamController;
use App\Http\Controllers\tahunakademikController;

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





// ======================================== RUANG ========================================
Route::get('admin/ruang', [Jadwal::class, 'tampilDataRuang']);
Route::post('admin/ruang', [Jadwal::class, 'tambahDataRuang']);
// ruang editS
Route::get('admin/ruang/{kode_ruang}/edit', [Jadwal::class, 'editRuang'])->name('ruang.edit');
Route::post('admin/ruang/{id}/update', [Jadwal::class, 'updateDataRuang'])->name('ruang.update');
// ruang delete
Route::get('admin/ruang/{kode_ruang}/delete', [Jadwal::class, 'hapusDataRuang'])->name('ruang.delete');




// ======================================== MAHASISWA ========================================
Route::get('admin/mahasiswa', [Mahasiswa::class, 'tampilDataMahasiswa']);
Route::post('admin/mahasiswa', [Mahasiswa::class, 'tambahDataMahasiswa']);
// mahasiswa edit
Route::get('admin/mahasiswa/{nim}/edit', [Mahasiswa::class, 'editMahasiswa'])->name('mahasiswa.edit');
Route::post('admin/mahasiswa/{nim}/update', [Mahasiswa::class, 'updateDataMahasiswa'])->name('mahasiswa.update');
// mahasiswa delete
Route::get('admin/mahasiswa/{nim}/delete', [Mahasiswa::class, 'hapusDataMahasiswa'])->name('mahasiswa.delete');




// ======================================== DOSEN ========================================
Route::get('admin/dosen', [Dosen::class, 'tampilDataDosen']);
Route::post('admin/dosen', [Dosen::class, 'tambahDataDosen']);
// dosen edit
Route::get('admin/dosen/{nip}/edit', [Dosen::class, 'editDosen'])->name('dosen.edit');
Route::post('admin/dosen/{nip}/update', [Dosen::class, 'updateDataDosen'])->name('dosen.update');
// dosen deletes
Route::get('admin/dosen/{nip}/delete', [Dosen::class, 'hapusDataDosen'])->name('dosen.delete');


// ======================================== PRODI DOSEN ========================================
Route::get('admin/prodi_dosen', [Dosen::class, 'tampilDataProdiDosen']);
Route::post('admin/prodi_dosen', [Dosen::class, 'tambahDataProdiDosen']);

// prodi dosen edit
Route::get('admin/prodi_dosen/{kode_prodi}/edit', [Dosen::class, 'editProdiDosen'])->name('prodi_dosen.edit');
Route::post('admin/prodi_dosen/{kode_prodi}/update', [Dosen::class, 'updateDataProdiDosen'])->name('prodi_dosen.update');

// prodi dosen delete
Route::get('admin/prodi_dosen/{kode_prodi}/delete', [Dosen::class, 'hapusDataProdiDosen'])->name('prodi_dosen.delete');




// ======================================== MATA KULIAH ========================================
Route::get('admin/matakuliah', [MataKuliah::class, 'tampilMataKuliah']);
Route::post('admin/matakuliah', [MataKuliah::class, 'tambahMataKuliah']);

// mata kuliah edit
Route::get('admin/matakuliah/{kode_matkul}/edit', [MataKuliah::class, 'editMataKuliah'])->name('matakuliah.edit');
Route::post('admin/matakuliah/{id}/update', [MataKuliah::class, 'updateDataMataKuliah'])->name('matakuliah.update');

// mata kuliah delete
Route::get('admin/matakuliah/{kode_matkul}/delete', [MataKuliah::class, 'hapusDataMataKuliah'])->name('matakuliah.delete');

// ======================================== KELAS MAHASISWA ========================================
Route::get('admin/kelas_mahasiswa', [Mahasiswa::class, 'tampilDataKelasMahasiswa']);
Route::post('admin/kelas_mahasiswa', [Mahasiswa::class, 'tambahDataKelasMahasiswa']);

// kelas mahasiswa edit
Route::get('admin/kelas_mahasiswa/{kode_hari}/edit', [Mahasiswa::class, 'editKelasMahasiswa'])->name('kelas_mahasiswa.edit');
Route::post('admin/kelas_mahasiswa/{id}/update', [Mahasiswa::class, 'updateDataKelasMahasiswa'])->name('kelas_mahasiswa.update');

// kelas mahasiswa delete
Route::get('admin/kelas_mahasiswa/{id}/delete', [Mahasiswa::class, 'hapusDataKelasMahasiswa'])->name('kelas_mahasiswa.delete');



// ======================================== HARI ========================================
Route::get('admin/hari', [Jadwal::class, 'tampilDataHari']);
Route::post('admin/hari', [Jadwal::class, 'tambahDataHari']);

// hari edit
Route::get('admin/hari/{kode_hari}/edit', [Jadwal::class, 'editHari'])->name('hari.edit');
Route::post('admin/hari/{id}/update', [Jadwal::class, 'updateDataHari'])->name('hari.update');

// hari delete
Route::get('admin/hari/{kode_hari}/delete', [Jadwal::class, 'hapusDataHari'])->name('hari.delete');

// ======================================== Tahun akademik ========================================
Route::get('admin/tahun_akademik', [tahunakademikController::class, 'index']);

<<<<<<< HEAD
// ======================================== JAM ========================================
Route::get('admin/jam', [jamController::class, 'index']);
Route::post('admin/jam', [jamController::class, 'store']);
Route::get('admin/jam/edit/{id}', [jamController::class, 'edit']);
Route::post('admin/jam/update/{id}', [jamController::class, 'update']);
Route::get('admin/jam/delete/{id}', [jamController::class, 'destroy']);
=======

// ======================================== TAHUN AKADEMIK ========================================
Route::get('admin/tahun_akademik', [Jadwal::class, 'tampilDataTahunAkademik']);
Route::post('admin/tahun_akademik', [Jadwal::class, 'tambahDataTahunAkademik']);

// tahun akademik edit
Route::get('admin/tahun_akademik/{kode_tahun_akademik}/edit', [Jadwal::class, 'editTahunAkademik'])->name('tahun_akademik.edit');
Route::post('admin/tahun_akademik/{id}/update', [Jadwal::class, 'updateDataTahunAkademik'])->name('tahun_akademik.update');

// tahun akademik delete
Route::get('admin/tahun_akademik/{kode_tahun_akademik}/delete', [Jadwal::class, 'hapusDataTahunAkademik'])->name('tahun_akademik.delete');



// ======================================== ENROLLMENT ========================================
Route::get('admin/enrollment', [Jadwal::class, 'tampilDataEnrollment']);
Route::post('admin/enrollment', [Jadwal::class, 'tambahDataEnrollment']);

// enrollment edit
Route::get('admin/enrollment/{kode_enrollment}/edit', [Jadwal::class, 'editEnrollment'])->name('enrollment.edit');
Route::post('admin/enrollment/{id}/update', [Jadwal::class, 'updateDataEnrollment'])->name('enrollment.update');

// enrollment delete
Route::get('admin/enrollment/{kode_enrollment}/delete', [Jadwal::class, 'hapusDataEnrollment'])->name('enrollment.delete');



// ======================================== JAM ========================================
Route::get('admin/jam', [Jadwal::class, 'tampilDataJamKuliah']);
Route::post('admin/jam', [Jadwal::class, 'tambahDataJamKuliah']);

// jam edit
Route::get('admin/jam/{kode_jam}/edit', [Jadwal::class, 'editJamKuliah'])->name('jam.edit');
Route::post('admin/jam/{id}/update', [Jadwal::class, 'updateDataJamKuliah'])->name('jam.update');

// jam delete
Route::get('admin/jam/{kode_jam}/delete', [Jadwal::class, 'hapusDataJamKuliah'])->name('jam.delete');




>>>>>>> 20f81164e171f5fcc8bf5668a79d47c817c6147d


Route::get('/edit_matkul', function () {
    return view('edit_matkul');
});