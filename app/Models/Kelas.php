<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ModelAuthenticate;

class Kelas extends ModelAuthenticate
{
    use HasFactory;
    protected $table = 'kelas';

    function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
}
