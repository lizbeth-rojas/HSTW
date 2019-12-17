<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GestionCl;

class GestionClController extends Controller
{
    //
    public function clientes(Request $request)
    {
        //return $request->DF;
        //return $request->all();
        //$usuario = new Administrador();
        //$usuario->nombre = $request->DF['nombre'];
        //$usuario->save();
        $usuario=GestionCl::create($request->DF);
        return view('agregarcl');
    }

    
}
