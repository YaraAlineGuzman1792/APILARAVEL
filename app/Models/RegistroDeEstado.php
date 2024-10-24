<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroDeEstado extends Model
{
    protected $table = 'registro_de_estados';

    public function arthur()
    {
        return $this->belongsTo(Arthur::class, 'arthur_id');
    }

    public function estados()
    {
        return $this->hasMany(Estado::class, 'registro_de_estados_id');
    }
}

