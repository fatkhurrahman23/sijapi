<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tahun_akademik;

// Membuat instance baru dari model Mahasiswa
$mahasiswa = new Mahasiswa;

// Mengatur nilai default untuk tahun_masuk berdasarkan query ke tabel tahun_akademik
$mahasiswa->tahun_masuk = Tahun_akademik::where('status', 'aktif')->first()->tahun_akademik;

//// Mengatur nilai lainnya
//$mahasiswa->nim = '123456';
//$mahasiswa->nama = 'John Doe';
//// ...

// Menyimpan model
$mahasiswa->save();

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primarykey = 'nim';
    protected $fillable = ['nim', 'nama', 'kode_prodi', 'kelas', 'jenis_kelamin'];


    public function kelas_mahasiswa(){
        return $this->belongsTo(Kelas_mahasiswa::class, 'kode_kelas', 'kode_kelas');
    }

    public function data_presensi(){
        return $this->hasMany(Data_presensi::class, 'nim', 'nim');
    }

    public function prodi(){
        return $this->belongsTo(Prodi::class, 'kode_prodi', 'kode_prodi');
    }

    public function tahun_akademik(){
        return $this->belongsTo(Tahun_akademik::class, 'tahun_masuk', 'kode_tahun_akademik');
    }

}
