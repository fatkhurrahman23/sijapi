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
    protected $fillable = ['id', 'kode_prodi', 'nama'];

    public function dosen(){
        return $this->hasOne('app\Models\Dosen.php', 'kode_prodi');
    }
    public function kelas_mahasiswa(){
        return $this->hasOne('app\Models\Kelas_mahasiswa.php', 'kode_prodi');
    }
}
