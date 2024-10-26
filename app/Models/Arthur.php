<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arthur extends Model
{
    protected $table = 'arthur';

    public function user()
    {
        return $this->belongsTo(Usuario::class, 'user_id');
    }

    public function registrosDeEstado(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(RegistroDeEstado::class, 'arthur_id');
    }
}
