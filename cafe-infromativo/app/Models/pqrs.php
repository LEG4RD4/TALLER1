<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pqrs extends Model
{
    protected $table = 'pqrs';

    protected $fillable = [
        'nombre',
        'correo',
        'tipo',
        'mensaje',
    ];
}