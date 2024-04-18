<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sijapi;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Jadwal;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MataKuliah;
use App\Http\Controllers\jamController;
use App\Http\Controllers\tahunakademikController;
use App\Http\Controllers\JadwalKuliah;


Route::get('/', [sijapi::class, 'index'])/* ->middleware('auth') */;


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

// Route::get('admin', function () {
//     return view('admin/admin');
// })->middleware('ifNotAdmin');


// Route::middleware(['ifNotAdmin'])->group(function () {
//     Route::get('/admin', function () {
//         return view('admin/admin');
//     });

    // ======================================== RUANG ========================================
    Route::get('admin/ruang', [Jadwal::class, 'tampilDataRuang']);
    Route::post('admin/ruang', [Jadwal::class, 'tambahDataRuang']);
    // ruang edit
    Route::get('admin/ruang/{kode_ruang}/edit', [Jadwal::class, 'editRuang'])->name('ruang.edit');
    Route::post('admin/ruang/{id}/update', [Jadwal::class, 'updateDataRuang'])->name('ruang.update');
    // ruang delete
    Route::get('admin/ruang/{kode_ruang}/delete', [Jadwal::class, 'hapusDataRuang'])->name('ruang.delete');


    // ======================================== JADWAL KULIAH ========================================
    Route::get('admin/jadwal_kuliah', [Jadwal::class, 'tampilJadwalKuliah']);
    Route::post('admin/jadwal_kuliah', [Jadwal::class, 'tambahJadwalKuliah']);
    // jadwal_kuliah edit
    Route::get('admin/jadwal_kuliah/edit/{kode_jadwal_kuliah}', [Jadwal::class, 'editDataJadwalKuliah']);
    Route::post('admin/jadwal_kuliah/update/{id}', [Jadwal::class, 'updateDataJadwalKuiah']);
    // jadwal_kuliah delete
    Route::get('admin/jadwal_kuliah/delete/{kode_jadwal_kuliah}', [Jadwal::class, 'hapusDataJadwalKuliah']);

    // tampil mata kuliah per kelas
    Route::get('admin/jadwal_kuliah/{kode_kelas}', [JadwalKuliah::class, 'tampilJadwalKuliahKelas']);



    // ======================================== DASHBOARD ========================================
    Route::get('admin/dashboard', [Jadwal::class, 'tampilDataDashboard']);
    
    // ======================================== DASHBOARD ========================================
    Route::get('admin/admin', [Jadwal::class, 'tampilDataDashboard']);

    // ======================================== MAHASISWA ========================================
    Route::get('admin/mahasiswa', [MahasiswaController::class, 'tampilDataMahasiswa']);
    Route::post('admin/mahasiswa', [MahasiswaController::class, 'tambahDataMahasiswa']);
    // mahasiswa edit
    Route::get('admin/mahasiswa/edit/{nim}', [MahasiswaController::class, 'editMahasiswa']);
    Route::post('admin/mahasiswa/update/{nim}', [MahasiswaController::class, 'updateDataMahasiswa']);
    // mahasiswa delete
    Route::get('admin/mahasiswa/delete/{nim}', [MahasiswaController::class, 'hapusDataMahasiswa']);

    // ======================================== RUANG ========================================
    Route::get('admin/ruang', [Jadwal::class, 'tampilDataRuang']);
    Route::post('admin/ruang', [Jadwal::class, 'tambahDataRuang']);
    // ruang edit
    Route::get('admin/ruang/edit/{kode_ruang}', [Jadwal::class, 'editRuang']);
    Route::post('admin/ruang/update/{kode_ruang}', [Jadwal::class, 'updateDataRuang']);
    // ruang delete
    Route::get('admin/ruang/delete/{kode_ruang}', [Jadwal::class, 'hapusDataRuang']);

    // ======================================== DOSEN ========================================
    Route::get('admin/dosen', [DosenController::class, 'tampilDataDosen']);
    Route::post('admin/dosen', [DosenController::class, 'tambahDataDosen']);
    // dosen edit
    Route::get('admin/dosen/edit/{nip}', [DosenController::class, 'editDosen']);
    Route::post('admin/dosen/update/{nip}', [DosenController::class, 'updateDataDosen']);
    // dosen deletes
    Route::get('admin/dosen/delete/{nip}', [DosenController::class, 'hapusDataDosen']);


    // ======================================== PRODI ========================================
    Route::get('admin/data_prodi', [DosenController::class, 'tampilDataProdi']);
    Route::post('admin/data_prodi', [DosenController::class, 'tambahDataProdi']);

    // prodi dosen edit
    Route::get('admin/data_prodi/edit/{kode_prodi}', [DosenController::class, 'editProdi']);
    Route::post('admin/data_prodi/update/{kode_prodi}', [DosenController::class, 'updateDataProdi']);

    // prodi dosen delete
    Route::get('admin/data_prodi/delete/{kode_prodi}', [DosenController::class, 'hapusDataProdi']);


    // ======================================== MATA KULIAH ========================================
    Route::get('admin/matkul', [MataKuliah::class, 'tampilMataKuliah']);
    Route::post('admin/matkul', [MataKuliah::class, 'tambahMataKuliah']);

    // matkul edit
    Route::get('admin/matkul/edit/{kode_matkul}', [MataKuliah::class, 'editMataKuliah']);
    Route::post('admin/matkul/update/{kode_matkul}', [MataKuliah::class, 'updateDataMataKuliah']);
    // matkul deletes
    Route::get('admin/matkul/delete/{kode_matkul}', [MataKuliah::class, 'hapusDataMataKuliah']);

    // ======================================== KELAS MAHASISWA ========================================
    Route::get('admin/kelas_mahasiswa', [MahasiswaController::class, 'tampilDataKelasMahasiswa']);
    Route::post('admin/kelas_mahasiswa', [MahasiswaController::class, 'tambahDataKelasMahasiswa']);

    // kelas mahasiswa edit
    Route::get('admin/kelas_mahasiswa/edit/{kode_hari}', [MahasiswaController::class, 'editKelasMahasiswa']);
    Route::post('admin/kelas_mahasiswa/update/{kode_hari}', [MahasiswaController::class, 'updateDataKelasMahasiswa']);

    // kelas mahasiswa delete
    Route::get('admin/kelas_mahasiswa/delete/{kode_hari}', [MahasiswaController::class, 'hapusDataKelasMahasiswa']);



    // ======================================== HARI ========================================
    Route::get('admin/hari', [Jadwal::class, 'tampilDataHari']);
    Route::post('admin/hari', [Jadwal::class, 'tambahDataHari']);

    // hari edit
    Route::get('admin/hari/edit/{kode_hari}', [Jadwal::class, 'editHari'])->name('hari.edit');
    Route::post('admin/hari/update/{id}', [Jadwal::class, 'updateDataHari'])->name('hari.update');

    // hari delete
    Route::get('admin/hari/delete/{kode_hari}', [Jadwal::class, 'hapusDataHari'])->name('hari.delete');



    // ======================================== TAHUN AKADEMIK ========================================
    // Tahun akademik for jadwal
    Route::get('admin/tahun_akademik', [Jadwal::class, 'tampilDataTahunAkademik']);
    Route::post('admin/tahun_akademik', [Jadwal::class, 'tambahDataTahunAkademik']);

    // tahun akademik edit
    Route::get('admin/tahun_akademik/edit/{id}', [Jadwal::class, 'editTahunAkademik'])->name('tahun_akademik.edit');
    Route::post('admin/tahun_akademik/update/{id}', [Jadwal::class, 'updateDataTahunAkademik'])->name('tahun_akademik.update');

    // tahun akademik delete
    Route::get('admin/tahun_akademik/delete/{id}', [Jadwal::class, 'hapusDataTahunAkademik'])->name('tahun_akademik.delete');



    // ======================================== ENROLLMENT ========================================
    Route::get('admin/enrollment', [Jadwal::class, 'tampilDataEnrollment']);
    Route::post('admin/enrollment', [Jadwal::class, 'tambahDataEnrollment']);

    // enrollment edit
    Route::get('admin/enrollment/edit/{id}', [Jadwal::class, 'editEnrollment'])->name('enrollment.edit');
    Route::post('admin/enrollment/update/{id}', [Jadwal::class, 'updateDataEnrollment'])->name('enrollment.update');

    // enrollment delete
    Route::get('admin/enrollment/delete/{id}', [Jadwal::class, 'hapusDataEnrollment'])->name('enrollment.delete');
    

    // ======================================== JAM ========================================
    Route::get('admin/jam', [jamController::class, 'index']);
    Route::post('admin/jam', [jamController::class, 'store']);
    Route::get('admin/jam/edit/{id}', [jamController::class, 'edit']);
    Route::post('admin/jam/update/{id}', [jamController::class, 'update']);
    Route::get('admin/jam/delete/{id}', [jamController::class, 'destroy']);
    
    Route::get('/get-matakuliah/{id}', [EnrollmentController::class, 'getMatakuliah']);
    // });
    



    
    // ======================================== DIBAWAH INI PAGE BUKAN ADMIN ========================================

    // ======================================== BERANDA MAHASISWA ========================================
    Route::get('bukan_admin/beranda', [MahasiswaController::class, 'tampilBeranda']);
    
    // ======================================== JADWAL MAHASISWA ========================================
    Route::get('bukan_admin/jadwal', [MahasiswaController::class, 'tampilJadwal']);




Route::get('/edit_matkul', function () {
    return view('edit_matkul');
});