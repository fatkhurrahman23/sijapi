<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    protected $table = 'presensi';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_presensi', 'kode_jadwal_kuliah', 'jam_token'];
    
    public function jadwal_kuliah(){
        return $this->belongsTo('app\Models\Jadwal_kuliah.php', 'kode_jadwal_kuliah');
    }

    public function data_presensi(){
        return $this->belongsTo('app\Models\Data_presensi.php', 'kode_presensi');
    }
}
