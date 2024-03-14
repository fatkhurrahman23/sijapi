<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'kode_dosen', 'nip', 'nama', 'alamat', 'telp', 'kode_prodi'];

    public function Users(){

        return $this->hasOne('app\Models\Users.php', 'username');
    }
}
