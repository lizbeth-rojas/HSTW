@extends('layouts.app')

@section('content')
<a href="/home"><button class="btn btn-outline-primary">Volver</button></a><br>
<div class="container">
    
    <div style="float:left;">
        <font size=10 style="color:#079B80;">¿Cual de estas opciones te gustaría?</font><br>
        <a href="/asignar"><button class="btn btn-outline-primary"><font size=6>Tarjeta de Crédito</font></button></a>  
        <a href="/debito"><button class="btn btn-outline-primary"><font size=6>Tarjeta de Débito<font></button></a>
    </div>
    <img src="img/blanco.jpg" style="margin-left: 570px;float:left;">
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
@endsection