<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'hari';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_hari', 'nama_hari'];

    public function waktu_tidak_tersedia(){
        return $this->hasMany('app\Models\Waktu_tidak_tersedia.php', 'kode_hari');
    }

    public function jadwal_kuliah(){
        return $this->hasMany('app\Models\Jadwal_kuliah.php','kode_hari');
    }
}
