<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'ruang';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_ruang', 'nama'];

    public function jadwal_kuliah(){
        return $this->hasMany('C:\xampp\htdocs\sijapi\app\Models\Jadwal_kuliah.php', 'kode_ruang');
    }
}
