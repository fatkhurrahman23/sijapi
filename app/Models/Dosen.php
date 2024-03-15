<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_dosen', 'nip', 'nama', 'alamat', 'no_telp', 'kode_prodi'];

    public function prodi_dosen(){
        return $this->belongsTo('app\Models\Prodi_dosen.php', 'kode_prodi');
    }

    public function enrollment(){
        return $this->hasMany('app\Models\Enrollment.php', 'kode_dosen');
    }

    public function waktu_tidak_tersedia(){
        return $this->hasMany('app\Models\Waktu_tidak_tersedia.php', 'kode_dosen');
    }
}
