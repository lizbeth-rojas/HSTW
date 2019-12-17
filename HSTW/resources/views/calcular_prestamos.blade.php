@extends('layouts.app')

@section('content')
<a href="/home"><button class="btn btn-outline-primary">Volver</button></a>
<div class="container" style="width:800px; margin-left:300px;background-color: rgba(221, 164, 65, 0.8); color: #ffffff;">
    <form method="POST" action="/ejemplo">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="Nombres">Nombres</label>
                <input type="text" name="nombre" class="form-control" id="Nombres" placeholder="Nombres">
            </div>
            <div class="form-group col-md-4">
                <label for="apellidop">Apellido Paterno</label>
                <input type="text" class="form-control" id="apellidop" placeholder="Apellido Paterno">
            </div>
            <div class="form-group col-md-4">
                <label for="apellidom">Apellido Materno</label>
                <input type="text" class="form-control" id="apellidom" placeholder="Apellido Materno">
            </div>
            <div class="form-group col-md-4">
                <label for="años">AÑOS</label>
                <input type="text" name="CAL[años]" class="form-control" id="años" placeholder="plazos años a pagar">
            </div>
            <div class="input-group mb-3">
                <select class="custom-select" id="inputGroupSelect02" name="CAL[tipo_pago]" style="width: 250px;">
                    <option selected>Tipo de Pago...</option>
                    <option value="Quincenal">Quincenal</option>
                    <option value="Mensual">Mensual</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="interes">TASA DE INTERÉS</label>
                <input type="text" name="CAL[interes]" class="form-control" id="interes" placeholder="Tasa de interés %">
            </div>
            <div class="form-group col-md-4">
                <label for="monto_prestamo">PRESTAMO</label>
                <input type="text" name="CAL[monto_prestamo]" class="form-control" id="monto_prestamo" placeholder="Monto de Prestamo...">
            </div>
            <div class="form-group col-md-4">
                <label for="monto_total">TOTAL A PAGAR</label>
                <input type="text" name="CAL[monto_total]" class="form-control" id="monto_total" placeholder="Monto Total a Pagar...">
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary" >Calcular</button>
    </form>
</div>
<div class="container" style="margin-top: 50px; height:200px;">
    <p>
    <button class="btn btn-danger" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"><font size=5>Más Información</font></button>
    </p>
    <div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body" style="background-color: salmon;color:black;">
                TELÉFONO SOPORTE:<br>
                7-33-88-66
            </div>
        </div>
    </div>
    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapseExample2">
            <div class="card card-body" style="background-color: salmon;color:black;">
                !Siempre Listos Para Servirle!
            </div>
        </div>
    </div>
    </div>
</div>
@endsection