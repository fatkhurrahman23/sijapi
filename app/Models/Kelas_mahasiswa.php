<?php

namespace App\Models;

use Database\Seeders\jadwalKuliah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas_mahasiswa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'kelas_mahasiswa';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_kelas', 'kode_prodi'];

    public function mata_kuliah(){
        return $this->hasMany(Mata_kuliah::class, 'kode_kelas', 'kode_kelas');
    }

    public function mahasiswa(){
        return $this->hasMany(Mahasiswa::class, 'kode_kelas', 'kode_kelas');
    }
    public function jadwal_kuliah(){
        return $this->hasMany(jadwalKuliah::class, 'kode_kelas', 'kode_kelas');
    }


    public function data_prodi(){
        return $this->belongsTo(Data_prodi::class, 'kode_prodi', 'kode_prodi');
    }
}
