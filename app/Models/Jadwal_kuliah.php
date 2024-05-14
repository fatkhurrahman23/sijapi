<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Jadwal_kuliah extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'jadwal_kuliah';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_jadwal_kuliah', 'kode_enrollment', 'kode_hari', 'kode_ruang', 'kode_kelas', 'kode_jam_awal', 'kode_jam_akhir'];


    public function tahun_akademik(){
        return $this->belongsTo('app\Models\Tahun_akademik.php', 'kode_tahun_akademik');
    }

    public function ruang(){
        return $this->belongsTo(Ruang::class , 'kode_ruang', 'kode_ruang') ;
    }
    public function kelas(){
        return $this->belongsTo(Kelas_mahasiswa::class , 'kode_kelas', 'kode_kelas') ;
    }

    public function jamAwal(){
        return $this->belongsTo(Jam::class, 'kode_jam_awal', 'kode_jam');
    }

    public function jamAkhir(){
        return $this->belongsTo(Jam::class, 'kode_jam_akhir', 'kode_jam');
    }

    public function hari(){
        return $this->belongsTo(Hari::class, 'kode_hari', 'kode_hari');
    }

    public function enrollment(){
        return $this->hasOne(Enrollment::class, 'kode_enrollment', 'kode_enrollment');
    }

    public function presensi(){
        return $this->hasMany(Presensi::class , 'kode_jadwal_kuliah', 'kode_jadwal_kuliah');
    }
}
