<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal_kuliah extends Model
{
    use HasFactory;

    protected $table = 'jadwal_kuliah';

    public function ruang(){
        return $this->belongsTo('C:\xampp\htdocs\sijapi\app\Models\Ruang.php' , 'kode_jadwal_kuliah') ;
    }
}
