<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mata_kuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';

    public function kelas_mahasiswa(){
        return $this->belongsTo('C:\xampp\htdocs\sijapi\app\Models\Kelas_mahasiswa.php' , 'kode_kelas') ;
    }

}
