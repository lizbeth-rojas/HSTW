@extends('layouts.app')

@section('content')
<div>
    <div class="alert alert-danger" role="alert" style="margin-top: 100px; width: 500px; margin-left:450px;">
        <p>Este Cliente esta en Buro! No se puede otorgar prestamo.</p>
        <p>Sentimos mucho tenga este inconveniente</p>
        <a href="/asignar"><button class="btn btn-outline-primary">Volver</button></a>
    </div>
</div>
@endsection