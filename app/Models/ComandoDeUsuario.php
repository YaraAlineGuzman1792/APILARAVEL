<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComandoDeUsuario extends Model
{
    protected $table = 'comandos_de_usuario';

    public function sesionDeUsuario()
    {
        return $this->belongsTo(SesionDeUsuario::class, 'sesion_de_usuario_id');
    }
}

