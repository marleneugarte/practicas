<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Joya extends Model
{
     protected $table = 'joyas';

    // Qué columnas se pueden llenar desde un formulario.
    // Es un candado: lo que no está en esta lista, no entra. (id y timestamps los pone Laravel.)
    protected $fillable = ['pieza', 'metal','precio'];
}
