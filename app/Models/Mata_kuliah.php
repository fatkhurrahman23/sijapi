<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mata_kuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';
    public $timestamps = false;
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_mata_kuliah', 'kode_kelas', 'nama_mata_kuliah', 'sks', 'semester', 'jenis'];

    public function kelas_mahasiswa(){
        return $this->belongsTo('\app\Models\Kelas_mahasiswa.php' , 'kode_kelas') ;
    }

    public function enrollment(){
        return $this->hasMany('app\Models\Enrollment.php', 'kode_mata_kuliah');
    }

}
