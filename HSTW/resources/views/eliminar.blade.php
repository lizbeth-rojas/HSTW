@extends('layouts.app02')

@section('content')
<form>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="Nombres">Nombres</label>
            <input type="text" class="form-control" id="Nombres" placeholder="Nombres">
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
            <label for="rfc">RFC</label>
            <input type="text" class="form-control" id="rfc"placeholder="RFC">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Consultar</button>
    <button type="submit" class="btn btn-primary">Eliminar</button>
</form>
@endsection