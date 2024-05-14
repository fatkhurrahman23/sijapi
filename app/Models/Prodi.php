<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'data_prodi';
    protected $primaryKey = 'id';
    protected $fillable = ['kode_prodi', 'nama', 'kode_jurusan'];

    public function jurusan(){
        return $this->belongsTo(Jurusan::class, 'kode_jurusan', 'kode_jurusan');
    }
}
