<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Model;

class DataRuang extends Model
{
    use HasFactory;

    protected $table = 'ruang';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_ruang', 'nama'];

    public function jadwal_kuliah(){
        return $this->hasMany('C:\xampp\htdocs\sijapi\app\Models\Jadwal_kuliah.php', 'kode_ruang');
    }
}