<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consultar;
use App\Prestamos;

class ConsultarController extends Controller
{
    //
    public function consultar(Request $request)
    {
        $datos = Consultar::all();
        return view('/consultar', compact('datos'));

    }
    public function X(Request $request)
    {
        #$datos01=Prestamos::all();
        $datos = Consultar::where('nombre',"=",$request->nombre);
        return view('ejemplo_pdf', compact('datos'));

    }
}
