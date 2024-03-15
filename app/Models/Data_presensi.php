<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_presensi extends Model
{
    use HasFactory;

    protected $table = 'data_presensi';
    protected $primarykey = 'id';
    protected $fillable = ['kode_data_presensi', 'kode_presensi', 'nim', 'waktu', 'status']; 

    public function mahasiswa(){
        return $this->belongsTo('app\Models\Mahasiswa.php', 'nim');
    }

    public function presensi(){
        return $this->hasMany('app\Models\Presensi.php', 'kode_presensi');
    }

}
