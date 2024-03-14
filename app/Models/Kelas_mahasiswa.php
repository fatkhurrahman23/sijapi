<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas_mahasiswa extends Model
{
    use HasFactory;

    public function mata_kuliah(){
        return $this->hasMany('C:\xampp\htdocs\sijapi\app\Models\Mata_kuliah.php', 'kode_kelas');
    }
}
