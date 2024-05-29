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
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\jurusanController;



// Route::middleware('auth')->get('/admin', function () {
//     return response()->json([
//         'user' => auth()->user(),
//     ]);
// });

Route::get('/', [sijapi::class, 'index'])->middleware('auth');


// ======================================== AUTH ========================================
// LOGIN
Route::get('/login', [AuthController::class, 'showLoginPage'])->name('login.index');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// REGISTER
Route::get('/register', [AuthController::class, 'showRegistrationPage'])->name('register.index');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');




Route::group(['middleware' => ['cekUserLevel:admin'], 'prefix' => 'admin'], function () {
    Route::get('/', function () {
        return redirect('/admin/dashboard');
    });

    // ======================================== RUANG ========================================
    Route::get('/ruang', [Jadwal::class, 'tampilDataRuang']);
    Route::post('/ruang', [Jadwal::class, 'tambahDataRuang']);
    // ruang edit
    Route::get('/ruang/{kode_ruang}/edit', [Jadwal::class, 'editRuang'])->name('ruang.edit');
    Route::post('/ruang/{id}/update', [Jadwal::class, 'updateDataRuang'])->name('ruang.update');
    // ruang delete
    Route::get('/ruang/{kode_ruang}/delete', [Jadwal::class, 'hapusDataRuang'])->name('ruang.delete');


    // ======================================== JADWAL KULIAH ========================================
    Route::get('/jadwal_kuliah', [Jadwal::class, 'tampilJadwalKuliah']);
    Route::post('/jadwal_kuliah', [Jadwal::class, 'tambahJadwalKuliah']);
    // jadwal_kuliah edit
    Route::get('/jadwal_kuliah/edit/{kode_jadwal_kuliah}', [Jadwal::class, 'editDataJadwalKuliah']);
    Route::post('/jadwal_kuliah/update/{id}', [Jadwal::class, 'updateDataJadwalKuiah']);
    // jadwal_kuliah delete
    Route::get('/jadwal_kuliah/delete/{kode_jadwal_kuliah}', [Jadwal::class, 'hapusDataJadwalKuliah']);

    // tampil mata kuliah per kelas
    Route::get('/jadwal_kuliah/{kode_kelas}', [Jadwal::class, 'tampilJadwalKuliahKelas']);
    Route::get('/admin/coba_jadwal_kelas', [Jadwal::class, 'tampilCobaJadwal']);


    // ======================================== DASHBOARD ========================================
    Route::get('/dashboard', [Jadwal::class, 'tampilDataDashboard']);

    // ======================================== DASHBOARD ========================================
    Route::get('/admin', [Jadwal::class, 'tampilDataDashboard']);

    // ======================================== MAHASISWA ========================================
    Route::get('/mahasiswa', [MahasiswaController::class, 'tampilDataMahasiswa']);
    Route::post('/mahasiswa', [MahasiswaController::class, 'tambahDataMahasiswa']);
    // mahasiswa edit
    Route::get('/mahasiswa/edit/{nim}', [MahasiswaController::class, 'editMahasiswa']);
    Route::post('/mahasiswa/update/{nim}', [MahasiswaController::class, 'updateDataMahasiswa']);
    // mahasiswa delete
    Route::get('/mahasiswa/delete/{nim}', [MahasiswaController::class, 'hapusDataMahasiswa']);

    // ======================================== RUANG ========================================
    Route::get('/ruang', [Jadwal::class, 'tampilDataRuang']);
    Route::post('/ruang', [Jadwal::class, 'tambahDataRuang']);
    // ruang edit
    Route::get('/ruang/edit/{kode_ruang}', [Jadwal::class, 'editRuang']);
    Route::post('/ruang/update/{kode_ruang}', [Jadwal::class, 'updateDataRuang']);
    // ruang delete
    Route::get('/ruang/delete/{kode_ruang}', [Jadwal::class, 'hapusDataRuang']);

    // ======================================== DOSEN ========================================
    Route::get('/dosen', [DosenController::class, 'tampilDataDosen']);
    Route::post('/dosen', [DosenController::class, 'tambahDataDosen']);
    // dosen edit
    Route::get('/dosen/edit/{nip}', [DosenController::class, 'editDosen']);
    Route::post('/dosen/update/{nip}', [DosenController::class, 'updateDataDosen']);
    // dosen deletes
    Route::get('/dosen/delete/{nip}', [DosenController::class, 'hapusDataDosen']);


    // ======================================== PRODI ========================================
    Route::get('/data_prodi', [DosenController::class, 'tampilDataProdi']);
    Route::post('/data_prodi', [DosenController::class, 'tambahDataProdi']);

    // prodi dosen edit
    Route::get('/data_prodi/edit/{kode_prodi}', [DosenController::class, 'editProdi']);
    Route::post('/data_prodi/update/{kode_prodi}', [DosenController::class, 'updateDataProdi']);

    // prodi dosen delete
    Route::get('/data_prodi/delete/{kode_prodi}', [DosenController::class, 'hapusDataProdi']);

    // ======================================== JURUSAN =======================================
    Route::get('/jurusan', [jurusanController::class, 'tampilDataJurusan']);
    Route::post('/jurusan', [jurusanController::class, 'tambahDataJurusan']);
        // jurusan edit
    Route::get('/jurusan/edit/{kode_jurusan}', [jurusanController::class, 'editDataJurusan']);
    Route::post('/jurusan/update/{kode_jurusan}', [jurusanController::class, 'updateDataJurusan']);
        // jurusan deletes
    Route::get('/jurusan/delete/{kode_jurusan}', [jurusanController::class, 'hapusDataJurusan']);

    // ======================================== MATA KULIAH ========================================
    Route::get('/matkul', [MataKuliah::class, 'tampilMataKuliah']);
    Route::post('/matkul', [MataKuliah::class, 'tambahMataKuliah']);

    // matkul edit
    Route::get('/matkul/edit/{kode_matkul}', [MataKuliah::class, 'editMataKuliah']);
    Route::post('/matkul/update/{kode_matkul}', [MataKuliah::class, 'updateDataMataKuliah']);
    // matkul deletes
    Route::get('/matkul/delete/{kode_matkul}', [MataKuliah::class, 'hapusDataMataKuliah']);

    // ======================================== KELAS MAHASISWA ========================================
    Route::get('/kelas_mahasiswa', [MahasiswaController::class, 'tampilDataKelasMahasiswa']);
    Route::post('/kelas_mahasiswa', [MahasiswaController::class, 'tambahDataKelasMahasiswa']);

    // kelas mahasiswa edit
    Route::get('/kelas_mahasiswa/edit/{kode_hari}', [MahasiswaController::class, 'editKelasMahasiswa']);
    Route::post('/kelas_mahasiswa/update/{kode_hari}', [MahasiswaController::class, 'updateDataKelasMahasiswa']);

    // kelas mahasiswa delete
    Route::get('/kelas_mahasiswa/delete/{kode_hari}', [MahasiswaController::class, 'hapusDataKelasMahasiswa']);


    // ======================================== HARI ========================================
    Route::get('/hari', [Jadwal::class, 'tampilDataHari']);
    Route::post('/hari', [Jadwal::class, 'tambahDataHari']);

    // hari edit
    Route::get('/hari/edit/{kode_hari}', [Jadwal::class, 'editHari'])->name('hari.edit');
    Route::post('/hari/update/{id}', [Jadwal::class, 'updateDataHari'])->name('hari.update');

    // hari delete
    Route::get('/hari/delete/{kode_hari}', [Jadwal::class, 'hapusDataHari'])->name('hari.delete');


    // ======================================== TAHUN AKADEMIK ========================================
    // Tahun akademik for jadwal
    Route::get('/tahun_akademik', [Jadwal::class, 'tampilDataTahunAkademik']);
    Route::post('/tahun_akademik', [Jadwal::class, 'tambahDataTahunAkademik']);

    // tahun akademik edit
    Route::get('/tahun_akademik/edit/{id}', [Jadwal::class, 'editTahunAkademik'])->name('tahun_akademik.edit');
    Route::post('/tahun_akademik/update/{id}', [Jadwal::class, 'updateDataTahunAkademik'])->name('tahun_akademik.update');

    // tahun akademik delete
    Route::get('/tahun_akademik/delete/{id}', [Jadwal::class, 'hapusDataTahunAkademik'])->name('tahun_akademik.delete');


    // ======================================== ENROLLMENT ========================================
    Route::get('/enrollment', [Jadwal::class, 'tampilDataEnrollment']);
    Route::post('/enrollment', [Jadwal::class, 'tambahDataEnrollment']);

    // enrollment edit
    Route::get('/enrollment/edit/{id}', [Jadwal::class, 'editEnrollment'])->name('enrollment.edit');
    Route::post('/enrollment/update/{id}', [Jadwal::class, 'updateDataEnrollment'])->name('enrollment.update');

    // enrollment delete
    Route::get('/enrollment/delete/{id}', [Jadwal::class, 'hapusDataEnrollment'])->name('enrollment.delete');


    // ======================================== JAM ========================================
    Route::get('/jam', [jamController::class, 'index']);
    Route::post('/jam', [jamController::class, 'store']);
    Route::get('/jam/edit/{id}', [jamController::class, 'edit']);
    Route::post('/jam/update/{id}', [jamController::class, 'update']);
    Route::get('/jam/delete/{id}', [jamController::class, 'destroy']);

    Route::get('/get-matakuliah/{id}', [EnrollmentController::class, 'getMatakuliah']);
});


    // ======================================== DIBAWAH INI PAGE BUKAN ADMIN ========================================


// route untuk prefix mahasiswa
Route::group(['middleware' => ['cekUserLevel:mahasiswa'], 'prefix' => 'mahasiswa'], function () {
    // ======================================== BERANDA MAHASISWA ========================================
    Route::get('/page/beranda', [MahasiswaController::class, 'tampilBeranda']);

    // ======================================== JADWAL MAHASISWA ========================================
    Route::get('/page/jadwal', [MahasiswaController::class, 'tampilJadwal']);

    // ======================================== JADWAL MAHASISWA ========================================
    Route::get('/page/presensi', [MahasiswaController::class, 'tampilPresensi']);

    // ======================================== SCANNER MAHASISWA ========================================
    Route::get('/page/scanner', [MahasiswaController::class, 'tampilScanner']);
});

// route untuk prefix dosen
Route::group(['middleware' => ['cekUserLevel:dosen'], 'prefix' => 'dosen'], function () {
    // ======================================== BERANDA DOSEN ========================================
    Route::get('/page/beranda', [DosenController::class, 'tampilBeranda']);

    // ======================================== JADWAL DOSEN ========================================
    Route::get('/page/jadwal', [DosenController::class, 'tampilJadwal']);

    // ======================================== PRESENSI DOSEN ========================================
    Route::get('/page/presensi', [DosenController::class, 'tampilPresensi']);



});

Route::post('/upload-photo', [PhotoController::class, 'upload'])->name('upload.photo');

Route::get('/edit_matkul', function () {
    return view('edit_matkul');
});
