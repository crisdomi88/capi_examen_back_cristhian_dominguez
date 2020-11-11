<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario_domicilio2 extends Model
{
    protected $table = 'user_domicilio2';

    protected $fillable = ['domicilio', 'numero_exterior', 'colonia', 'cp', 'ciudad', 'fecha_nacimiento'];
}
