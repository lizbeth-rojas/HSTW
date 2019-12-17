@extends('layouts.app3')

@section('content')
<div class="col-md-12">
    <font size=20>Registros de Clientes</font>
    <table class="table table-responsive" style="color:white;">
        <tr>
            <td style="width: 70px; height: 20px; text-align: center; background-color: black;">Nombre</td>
            <td style="width: 70px; height: 20px; text-align: center; background-color: black;">A Paterno</td>
            <td style="width: 70px; height: 20px; text-align: center; background-color: black;">A Materno</td>
            <td style="width: 80px; height: 20px; text-align: center; background-color: black;">TARJETA DE CREDITO</td>
            <td style="width: 70px; height: 20px; text-align: center; background-color: black;">FECHA DE VENCIMIENTO</td>
            <td style="width: 70px; height: 20px; text-align: center; background-color: black;">PRÉSTAMO</td>
        </tr>
        @foreach ($tablas as $tablas)
        
             <tr>
        
            
                <td style="width: 70px; height: 20px; text-align: center;">{{$tablas->nombre}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$tablas->ap_paterno}}</td>
                <td style="width: 130px; height: 20px; text-align: center;">{{$tablas->ap_materno}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$tablas->fecha_nac}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$tablas->curp}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$tablas->rfc}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$tablas->calle}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$tablas->num_interno}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$tablas->num_externo}}</td>
                <td style="width: 130px; height: 20px; text-align: center;">{{$tablas->calle1,$tablas->calle2}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$tablas->codigo_postal}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$tablas->colonia}}</td>
                <td style="width: 130px; height: 20px; text-align: center;">{{$tablas->ciudad}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$tablas->estado}}</td>
                <td style="width: 70px; height: 20px; text-align: center;">{{$tablas->pais}}</td>
            
            </tr>
        @endforeach
    </table>
    
</div>
@endsection