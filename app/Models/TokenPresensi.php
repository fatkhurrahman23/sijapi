<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokenPresensi extends Model
{
    use HasFactory;

    protected $table = 'presensi_tokens';

    protected $fillable = [
        'token',
        'kode_jadwal_kuliah',
        'created_at',
        'expired_at'
    ];

    public $timestamps = false;

    public function jadwalKuliah()
    {
        return $this->belongsTo(JadwalKuliah::class, 'kode_jadwal_kuliah');
    }

    public function dataPresensi()
    {
        return $this->hasMany(DataPresensi::class, 'token', 'token');
    }
}
