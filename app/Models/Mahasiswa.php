<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primarykey = 'nim';
    protected $fillable = ['nim', 'nama', 'kode_kelas', 'jenis_kelamin'];

    public function kelas_mahasiswa(){
        return $this->belongsTo('app\Models\Kelas_mahasiswa.php', 'kode_kelas');
    }

    public function data_presensi(){
        return $this->hasMany('app\Models\Data_presensi.php', 'nim');
    }

}
