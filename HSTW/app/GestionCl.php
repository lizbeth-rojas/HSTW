<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GestionCl extends Model
{
    //
    protected $table="gestioncl";
    protected $fillable=['nombre',
                        'ap_paterno',
                        'ap_materno',
                        'fecha_nac',
                        'curp',
                        'rfc',
                        'calle',
                        'num_interno',
                        'num_externo',
                        'calle1',
                        'calle2',
                        'codigo_postal',
                        'colonia',
                        'ciudad',
                        'estado',
                        'pais' ];
}
