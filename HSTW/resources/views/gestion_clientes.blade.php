
@extends('layouts.app')

@section('content')
<a href="/home"><button class="btn btn-primary">Volver</button></a>
<div class="col-md-8 col-md-offset-2" style="color: #079B80;">
            <font size=20>Administración de Clientes</font>
            
            
</div>
<div class="container" style="background-color: rgba(0, 0, 0, 0.8); color: #ffffff; width:300px; height:500px; float: left;">
                <a href="/agregar"><h3> Agregar Cliente</h3></a><br>
                <a href="/consultar"><h3> Consultar Clientes</h3></a><br>
                <a href="/modificar"><h3> Modificar o Eliminar Cliente</h3></a><br>
                <!-- <a href="/eliminar"><h3> Eliminar Cliente</h3></a><br> -->
</div>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="width: 800px; height: 500px; margin-left: 400px;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/agregar.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/consulta.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/eliminar.png" class="d-block w-100" alt="...">
                </div>
            </div>
</div>

<div class="container" style="margin-top: 300px; height:200px;">
    <p>
    <button class="btn btn-danger" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"><font size=12>Más Información</font></button>
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