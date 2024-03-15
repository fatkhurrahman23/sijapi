<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waktu_tidak_tersedia extends Model
{
    use HasFactory;

    protected $table = 'waktu_tidak_tersedia';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_waktu_tidak_tersedia', 'kode_dosen', 'kode_jam', 'kode_hari'];

    public function jam(){
        return $this->belongsTo('app\Models\Jam.php', 'kode_jam');
    }

    public function dosen(){
        return $this->belongsTo('app\Models\Dosen.php', 'kode_dosen');
    }

    public function hari(){
        return $this->belongsTo('app\Models\Hari.php', 'kode_hari');
    }
}
