@extends('layouts.app02')

@section('content')
<div class="container" style="background-color: rgba(0, 0, 0, 0.8); color: #ffffff;">
    <font size=20>Agregar Cliente</font><br>
    <font size=6>Llena los campos correspondientes...</font>
    <form method="POST" action="/gestcli">
        {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="nombre">Nombres</label>
                    <input type="text" name="DF[nombre]" class="form-control" id="nombre" placeholder="Nombres" required>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="ap_paterno">Apellido Paterno</label>
                    <input type="text" name="DF[ap_paterno]" class="form-control" id="ap_paterno" placeholder="Apellido Paterno" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="ap_materno">Apellido Materno</label>
                        <input type="text" name="DF[ap_materno]" class="form-control" id="apmaterno" placeholder="Apellido Materno" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fecha_nac">Fecha de Nacimiento</label>
                        <input type="text" name="DF[fecha_nac]" class="form-control" id="fecha_nac" placeholder="0000/00/00" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="curp">CURP</label>
                        <input type="text" name="DF[curp]" class="form-control" id="curp" placeholder="Ingresa CURP" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="rfc">RFC</label>
                        <input type="text" name="DF[rfc]" class="form-control" id="rfc" placeholder="Ingresa RFC" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="calle">Calle</label>
                        <input type="text" name="DF[calle]" class="form-control" id="calle" placeholder="calle" required>
                    </div>
                    <div class="form-group ">
                        <label for="num_interno" style="color: #ffffff;">No. interior</label>
                        <input type="text" name="DF[num_interno]" class="form-control" id="num_interno" placeholder="No.Int" style="width:80px;" required>
                    </div>
                    <div>
                        <label for="num_externo" style="color: #ffffff; margin-left: 10px;">No. exterior</label>
                        <input type="text" name="DF[num_externo]" class="form-control" id="num_externo" placeholder="No.Ext" style="width:80px;margin-left:10px;" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="entre_calles">Entre calle</label>
                        <input type="text" name="DF[calle1]" class="form-control" id="entre_calles" placeholder="Entre calle" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Ycalles">Y calle</label>
                        <input type="text" name="DF[calle2]" class="form-control" id="Ycalles" placeholder="Calle" required>
                    </div>
                    <div class="form-group">
                        <label for="codigo_postal">Codigo Postal</label>
                        <input type="text" name="DF[codigo_postal]" class="form-control" id="codigo_postal" placeholder="Codigo Postal" required>
                    </div>
                </div>
                <div class="form-row">
                        <div class="form-group col-md-4">
                    <label for="colonia">Colonia</label>
                    <input type="text" name="DF[colonia]" class="form-control" id="colonia" placeholder="Colonia" required>
                    </div>
                    <div class="form-group col-md-2">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" name="DF[ciudad]" class="form-control" id="ciudad" placeholder="Ciudad" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                    <label for="estado">Estado</label>
                    <input type="text" name="DF[estado]" class="form-control" id="estado" placeholder="Estado" required>
                    </div>
                    <div class="form-group">
                        <label for="pais">País</label>
                        <input type="text" name="DF[pais]" class="form-control" id="pais" placeholder="País" required>
                    </div>
                </div>
            </div>
                <font size=6><input type="submit" class="btn btn-outline-dark" value="Enviar"></font>
    </form>
</div>
<div class="container" style="margin-top: 100px; height:200px;">
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