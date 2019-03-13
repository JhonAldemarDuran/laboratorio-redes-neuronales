<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rede extends Model
{
    //
     protected $fillable = [
        'name', 'delta','rate_learning','itera','numero_capas','numero_neu','tiempo_establecimiento','tiempo_muestreo','instancias_adq','instancias_c','a11','a12','a21','a22','b11','b21','b22','c11','c12','d11',
    ];

}
