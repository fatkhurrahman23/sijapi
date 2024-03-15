<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mata_kuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_mata_kuliah', 'kode_kelas', 'nama', 'sks', 'semester', 'jenis'];

    public function kelas_mahasiswa(){
        return $this->belongsTo('C:\xampp\htdocs\sijapi\app\Models\Kelas_mahasiswa.php' , 'kode_kelas') ;
    }

    public function enrollment(){
        return $this->hasMany('app\Models\Enrollment.php', 'kode_enrollment');
    }

}
