<?php

namespace App\Models;

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
        return $this->hasMany('app\Models\Mata_kuliah.php', 'kode_kelas');
    }

    public function mahasiswa(){
        return $this->hasMany('app\Models\Mahasiswa.php', 'kode_kelas');
    }
    public function jadwal_kuliah(){
        return $this->hasMany('app\Models\jadwal_kuliah.php', 'kode_kelas');
    }

    // public function enrollment(){
    //     return $this->hasMany('app\Models\Enrollment.php', 'kode_kelas');
    // }

    public function data_prodi(){
        return $this->belongsTo('app\Models\Data_prodi.php', 'kode_prodi');
    }
}
