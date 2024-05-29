<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_presensi extends Model
{
    use HasFactory;

    protected $table = 'data_presensi';
    protected $primarykey = 'id';
    protected $fillable = [
        'token',
        'nim',
        'waktu_presensi',
        'status'
    ];
    public $timestamps = false;

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }

    public function token_presensi(){
        return $this->belongsTo(TokenPresensi::class, 'token', 'token');
    }

}
