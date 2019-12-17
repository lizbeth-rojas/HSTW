<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calcular extends Model
{
    //
    protected $table="prestamos";
    protected $fillable=['id',
                        'años',
                        'tipo_pago',
                        'interes',
                        'monto_prestamo',
                        'monto_total' ];
}
