<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi_dosen extends Model
{
    use HasFactory;

    protected $table = 'prodi_dosen';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_prodi', 'nama'];

    public function dosen(){
        return $this->hasOne('app\Models\Dosen.php', 'kode_prodi');
    }
}
