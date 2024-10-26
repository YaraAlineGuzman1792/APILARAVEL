<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    public function arthur()
    {
        return $this->hasMany(Arthur::class, 'user_id');
    }

    public function sesionesDeUsuario()
    {
        return $this->hasMany(SesionDeUsuario::class, 'user_id');
    }
}
