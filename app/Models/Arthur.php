<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arthur extends Model
{
    protected $table = 'arthur';

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_usuario_id');
    }

    public function registrosDeEstado()
    {
        return $this->hasMany(RegistroDeEstado::class, 'arthur_id');
    }
}
