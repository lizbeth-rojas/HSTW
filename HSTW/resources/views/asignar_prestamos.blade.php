@extends('layouts.app')

@section('content')
<a href="/home"><button class="btn btn-outline-primary">Volver</button></a>
<div class="container" style="margin-left: 450px; margin-top:100px; width:500px;height:300px; background-color: rgba(223, 101, 101, 0.8); color: #ffffff;">
    <form method="POST" action="/asignar">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="rfc">RFC DE PERSONA A CONSULTAR</label><br><br>
                <input type="text" name="rfc" class="form-control" id="rfc"placeholder="RFC" style="width: 300px;">
            </div>
        </div>
        <button type="submit" name="boton" class="btn btn-danger" value="Modificar">Verificar Buro</button>
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