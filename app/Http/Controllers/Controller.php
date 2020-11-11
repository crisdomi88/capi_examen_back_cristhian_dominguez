<?php

namespace App\Http\Controllers;
use App\usuario_domicilio;
use App\usuario_domicilio2;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index()
    {
        /*$usuarios  = usuario_domicilio2::all();
        $array = array('user_domicilio' => $usuarios);
        return $array;*/

        $users = DB::select(
                'select     
                    id, 
                    domicilio, 
                    numero_exterior, 
                    colonia, 
                    cp, 
                    ciudad, 
                    fecha_nacimiento,
                    TIMESTAMPDIFF(YEAR,fecha_nacimiento,CURDATE()) AS edad
                from 
                    user_domicilio2');
        
        return $users;
    }
}
