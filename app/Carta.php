<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    protected $fillable = [
        'clasificacion', 'nombre', 'descripcion','precio','imagen'
    ];
}
