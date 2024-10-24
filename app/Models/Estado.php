<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';

    public function registroDeEstado()
    {
        return $this->belongsTo(RegistroDeEstado::class, 'registro_de_estados_id');
    }
}
