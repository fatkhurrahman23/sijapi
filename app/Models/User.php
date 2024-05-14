<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'users';
    protected $primarykey = 'uuid';
    protected $fillable = ['uuid' ,'username', 'password', 'level'];

}
