@extends('layouts.app02')

@section('content')
<div class="col-md-12">
    <font size=20>Registros de Clientes</font>
    <table class="table table-responsive" style="color:white;">
        <tr>
            <td style="width: 70px; height: 20px; text-align: center; background-color: black;">Nombre</td>
            <td style="width: 70px; height: 20px; text-align: center; background-color: black;">A Paterno</td>
            <td style="width: 70px; height: 20px; text-align: center; background-color: black;">A Materno</td>
            <td style="width: 80px; height: 20px; text-align: center; background-color: black;">NACIMIENTO</td>
            <td style="width: 70px; height: 20px; text-align: center; background-color: black;">CURP</td>
            <td style="width: 70px; height: 20px; text-align: center; background-color: black;">RFC</td>
            <td style="width: 70px; height: 20px; text-align: center; background-color: black;">CALLE</td>
            <td style="width: 100px; height: 20px; text-align: center; background-color: black;"># INTERNO</td>
            <td style="width: 100px; height: 20px; text-align: center; background-color: black;"># EXTERNO</td>
            <td style="width: 130px; height: 20px; text-align: center; background-color: black;">ENTRE CALLES</td>
            <td style="width: 130px; height: 20px; text-align: center; background-color: black;">CÓDIGO POSTAL</td>
            <td style="width: 70px; height: 20px; text-align: center; background-color: black;">COLONIA</td>
            <td style="width: 130px; height: 20px; text-align: center; background-color: black;">CIUDAD</td>
            <td style="width: 70px; height: 20px; text-align: center; background-color: black;">ESTADO</td>
            <td style="width: 70px; height: 20px; text-align: center; background-color: black;">PAÍS</td>
        </tr>
        @foreach ($datos as $datos)
             <tr>
        
            
                <td style="width: 70px; height: 20px; text-align: center;">{{$datos->nombre}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$datos->ap_paterno}}</td>
                <td style="width: 130px; height: 20px; text-align: center;">{{$datos->ap_materno}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$datos->fecha_nac}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$datos->curp}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$datos->rfc}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$datos->calle}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$datos->num_interno}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$datos->num_externo}}</td>
                <td style="width: 130px; height: 20px; text-align: center;">{{$datos->calle1,$datos->calle2}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$datos->codigo_postal}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$datos->colonia}}</td>
                <td style="width: 130px; height: 20px; text-align: center;">{{$datos->ciudad}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$datos->estado}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$datos->pais}}</td>
            
            </tr>
        @endforeach
    </table>
    
</div>
@endsection