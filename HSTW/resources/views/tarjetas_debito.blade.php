@extends('layouts.app03')

@section('content')
<font size=15 color=#DF6565>Asignar Tarjeta de Débito</font>
<div class="container" style="background-color: rgba(224, 160, 130, 0.4); width:500px;">
    <form method="POST" action="/debito" style="color: black;" >
        {{ csrf_field() }}
                <div class="form-group">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre de Solicitante..." required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="num_tarjeta"># DE TARJETA</label>
                        <input type="text" name="DEB[num_tarjeta]" class="form-control" id="num_tarjeta" placeholder="Numero de Trajeta" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="vencimiento">FECHA DE VENCIMIENTO</label>
                        <input type="text" name="DEB[vencimiento]" class="form-control" id="vencimiento" placeholder="Fecha de Vencimiento" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="tipo_tarjeta">TIPO DE TARJETA</label>
                        <input type="text" name="DEB[tipo_tarjeta]" class="form-control" id="tipo_tarjeta" placeholder="(mastercard, visa, american express, etc)" required>
                    </div>
                </div>
                <input type="submit" class="btn btn-outline-dark" value="Enviar">
    </form>
</div>
@endsection