<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahun_akademik extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tahun_akademik';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_tahun_akademik', 'tahun_akademik', 'status'];

    public function jadwal_kuliah(){
        return $this->hasMany(Jadwal_kuliah::class, 'kode_tahun_akademik', 'kode_tahun_akademik');
    }
}
