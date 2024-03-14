<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primarykey = 'id';
    protected $fillable = ['id' ,'username', 'password', 'level'];

    public function Dosen(){
        return $this->belongsTo('app\Models\Dosen.php', 'id');
    }
}
