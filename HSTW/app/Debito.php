<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debito extends Model
{
    //
    protected $table='debito';
    protected $fillable=['id',
                        'num_tarjeta',
                        'vencimiento',
                        'tipo_tarjeta'];
}
