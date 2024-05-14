<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'jurusan';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_jurusan', 'nama_jurusan'];

    public function prodi(){
        return $this->hasMany(Prodi::class, 'kode_jurusan', 'kode_jurusan');
    }
}
