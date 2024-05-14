<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'enrollment';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_enrollment', 'kode_dosen', 'kode_mata_kuliah'];


    public function mata_kuliah(){
        return $this->belongsTo(Mata_Kuliah::class, 'kode_mata_kuliah', 'kode_mata_kuliah');
    }

    public function dosen(){
        return $this->belongsTo(Dosen::class, 'kode_dosen', 'kode_dosen');
    }

    public function jadwal_kuliah(){
        return $this->belongsToMany('app\Models\Jadwal_kuliah.php', 'kode_enrollment');
    }

}
