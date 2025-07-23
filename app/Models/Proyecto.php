<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = [
        'id',
        'Nombre',
        'FechadeInicio',
        'Estado',
        'Responsable',
        'Monto'

    ];
}
