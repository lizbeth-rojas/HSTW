@extends('layouts.app02')

@section('content')
<font size=20 color=white>Modificar o Eliminar Datos de Cliente</font><br>
<font size=5 color=white>Llena los campos con los datos del cliente si deseas eliminar. Si solo se desea modificar, escriba el dato a suplir.</font><br>
<font size=4 color=red>Advertencia: La RFC es imposible de cambiar.</font><br><br>

<div class="container" style="width: 800px; background-color: rgba(0, 0, 0, 0.8); color: #ffffff;">
    <form method="POST" action="/modificar">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="Nombres">Nombres</label>
                <input type="text" name="nombre" class="form-control" id="Nombres" placeholder="Nombres">
            </div>
            <div class="form-group col-md-4">
                <label for="apellidop">Apellido Paterno</label>
                <input type="text" name="ap_paterno" class="form-control" id="apellidop" placeholder="Apellido Paterno">
            </div>
            <div class="form-group col-md-4">
                <label for="apellidom">Apellido Materno</label>
                <input type="text" name="ap_materno" class="form-control" id="apellidom" placeholder="Apellido Materno">
            </div>
            <div class="form-group col-md-4">
                <label for="rfc">RFC</label>
                <input type="text" name="rfc" class="form-control" id="rfc"placeholder="RFC">
            </div>
        </div>
        <button type="submit" name="boton" class="btn btn-primary" value="Modificar">Modificar</button>
        <button type="submit" name="boton" class="btn btn-primary" value="Enviar">Eliminar</button>
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