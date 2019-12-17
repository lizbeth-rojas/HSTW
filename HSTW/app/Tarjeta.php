<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    //
    protected $table='tarjetas';
    protected $fillable=['id',
                        'num_tarjeta',
                        'vencimiento',
                        'tipo_tarjeta'];
}
