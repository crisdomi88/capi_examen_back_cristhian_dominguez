<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario_domicilio extends Model
{
    protected $table = 'user_domicilio';

    protected $fillable = ['domicilio', 'numero_exterior', 'colonia', 'cp', 'ciudad'];

}
