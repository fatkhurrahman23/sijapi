<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_prodi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'data_prodi';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_prodi', 'nama', 'kode_jurusan'];


    public function jurusan(){
        return $this->belongsTo(Jurusan::class, 'kode_jurusan', 'kode_jurusan');
    }
    public function dosen(){
        return $this->hasOne(Dosen::class, 'kode_prodi', 'kode_prodi');
    }
    public function kelas_mahasiswa(){
        return $this->hasOne(Kelas_mahasiswa::class, 'kode_prodi', 'kode_prodi');
    }
}
