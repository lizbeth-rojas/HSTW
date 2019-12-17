<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GestionCl;
use App\Calcular;
use App\Asignar;
use App\Tarjeta;
use App\Debito;
use App\Conexion;

class EliminarrController extends Controller
{
    //
    public function eliminar(Request $request)
    {
        if ($request->boton == 'Modificar'){
            $usuario=GestionCl::where('rfc', '=', $request->rfc)->first();
            $usuario->nombre = $request->nombre;
            $usuario->ap_paterno = $request->ap_paterno;
            $usuario->ap_materno = $request->ap_materno;
            $usuario->save(); 
        }
        else{
        $usuario=GestionCl::where('rfc', '=', $request->rfc)->first();
        //dd($usuario);
        
        $usuario->delete();
        }
        return view('modificarcl');
    }
    public function verificar(Request $request)
    {
        $usuario=GestionCl::where('rfc', '=', $request->rfc)->first();
        return view('formverificar');
    }

    public function calcular(Request $request)
    {
        $usuario=Calcular::where('id', '=', $request->nombre)->first();
        $usuario=Calcular::create($request->CAL);
        $usuario->save();
        return view('ejemplo_pdf');
    }

    public function asignar(Request $request)
    {
        //
        if ($usuario=Asignar::where('rfc', '=', $request->rfc)->first())
        {
            return view('buro');
        }
        else{
            
            return view('formasignar');
        }
        
        echo "Esta rfc esta en Buro";
        
    }
    public function tarjeta(Request $request)
    {
        $usuario=Tarjeta::where('id', '=', $request->nombre)->first();
        $usuario=Tarjeta::create($request->TAR);
        return view('formasignar');
    }
    public function debito(Request $request)
    {
        $usuario=Debito::where('id', '=', $request->nombre)->first();
        $usuario=Debito::create($request->DEB);
        return view('tarjetas_debito');
    }

    public function conexion(Request $request)
    {
        $tablas = Conexion::table('gestioncl')
        ->join('tarjetas','tarjetas.id','=','gestioncl.id')
        ->select('gestioncl.nombre', 'gestioncl.ap_paterno', 'gestioncl.ap_materno','tarjetas.tipo_tarjeta','tarjetas.vencimiento')
        ->get();
        return dd($tablas);
        //return view('/cobranza', compact('tablas'));
    }
}
