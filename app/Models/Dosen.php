<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'dosen';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_dosen', 'nip', 'nama', 'alamat', 'no_telp', 'kode_prodi'];

    public function data_prodi(){
        return $this->belongsTo('app\Models\Data_prodi.php', 'kode_prodi');
    }

    public function dosen(){
        return $this->belongsTo(Dosen::class, 'kode_dosen', 'kode_dosen');
    }

    public function waktu_tidak_tersedia(){
        return $this->hasMany('app\Models\Waktu_tidak_tersedia.php', 'kode_dosen');
    }
}
