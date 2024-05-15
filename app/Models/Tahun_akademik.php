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
    protected $fillable = ['id', 'tahun_akademik'];

    public function jadwal_kuliah(){
        return $this->hasMany(Jadwal_kuliah::class, 'tahun_akademik', 'tahun_akademik');
    }
}
