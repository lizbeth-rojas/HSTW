@extends('layouts.app03')

@section('content')
<font size=15 color=#DF6565>Asignar Tarjeta de Crédito</font>
<div class="container" style="background-color:  rgba(223, 101, 101, 0.8); color: #ffffff;">
    <form method="POST" action="/asignartar" style="color: black;" >
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
                        <input type="text" name="TAR[num_tarjeta]" class="form-control" id="num_tarjeta" placeholder="Numero de Trajeta" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="vencimiento">FECHA DE VENCIMIENTO</label>
                        <input type="text" name="TAR[vencimiento]" class="form-control" id="vencimiento" placeholder="Fecha de Vencimiento" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="tipo_tarjeta">TIPO DE TARJETA</label>
                        <input type="text" name="TAR[tipo_tarjeta]" class="form-control" id="tipo_tarjeta" placeholder="(mastercard, visa, american express, etc)" required>
                    </div>
                </div>
                <input type="submit" class="btn btn-outline-dark" value="Enviar">
    </form>
</div>
@endsection