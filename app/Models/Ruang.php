<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Model;

class DataRuang extends Model
{
    use HasFactory;

    protected $table = 'data_ruang';

    public function jadwal_kuliah(){
        return $this->hasMany('C:\xampp\htdocs\sijapi\app\Models\Jadwal_kuliah.php', 'kode_ruang');
    }
}