<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Juguete extends Model
{
     protected $fillable = ['nombre', 'precio','stock'];
}
