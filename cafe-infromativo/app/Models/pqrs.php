<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pqrs extends Model
{
    protected $fillable = [
        'nombres',
        'apellidos',
        'corre',
        'tipo',
        'mensaje',
        'Acepto',
    ];
}