<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jam extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'jam';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_jam', 'jam_awal', 'jam_akhir'];

    public function jadwal_kuliah(){
        return $this->hasMany('app\Models\Jadwal_kuliah.php', 'kode_jam');
    }

    public function waktu_tidak_tersedia(){
        return $this->hasMany('app\Models\Waktu_tidak_tersedia.php', 'kode_jam');
    }
}
