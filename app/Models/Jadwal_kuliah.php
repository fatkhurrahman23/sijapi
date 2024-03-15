<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal_kuliah extends Model
{
    use HasFactory;

    protected $table = 'jadwal_kuliah';
    protected $primarykey = 'id';
    protected $fillale = ['id', 'kode_jadwal_kuliah', 'kode_enrollment', 'kode_hari', 'kode_ruang', 'kode_kelas', 'kode_jam'];

    public function ruang(){
        return $this->belongsTo('C:\xampp\htdocs\sijapi\app\Models\Ruang.php' , 'kode_ruang') ;
    }
    
    public function jam(){
        return $this->belongsTo('app\Models\Jam.php', 'kode_jam');
    }

    public function hari(){
        return $this->belongsTo('app\Models\Hari.php', 'kode_hari');
    }

    public function enrollment(){
        return $this->belongsTo('app\Models\Enrollment.php', 'kode_enrollment');
    }

    public function presensi(){
        return $this->hasMany('app\Models\Presensi.php', 'kode_jadwal_kuliah');
    }
}
