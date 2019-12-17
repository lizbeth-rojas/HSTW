<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Reporte prestamo</title>
        <style>
        h1{
            text-align: center;
            text-transform: uppercase;
        }
        </style>
    </head>
    <body>
        <div class="container">
            <img src="HSBC.png" style="width:250px;">
            <h1 style="margin-top:-100px; margin-left:-500px;">HSTW</h1>
        </div>
            <h1>Reporte de Buro de Credito</h1>
        <table class="table table-responsive" style="color:#000000;margin-left:10px;">
            <tr>    
                <td style="background-color: #ADADAD;">Calle</td>
                <td style="background-color: #ADADAD;">Numero</td>
                <td style="background-color: #ADADAD;">Codigo Postal</td>
                <td style="background-color: #ADADAD;">Colonia</td>
                <td style="background-color: #ADADAD;">Municipio</td>
                <td style="background-color: #ADADAD;">Estado</td>
            </tr>
            @foreach ($datos as $datos)
                <tr>
                    <td style="width: 70px; height: 20px; text-align: center;">{{$datos->calle}}</td>
                    <td style="width: 70px; height: 20px; text-align: center;">{{$datos->num_int}}</td>
                    <td style="width: 130px; height: 20px; text-align: center;">{{$datos->codigo_postal}}</td>
                    <td style="width: 130px; height: 20px; text-align: center;">{{$datos->colonia}}</td>
                    <td style="width: 130px; height: 20px; text-align: center;">{{$datos->ciudad}}</td>
                    <td style="width: 130px; height: 20px; text-align: center;">{{$datos->estado}}</td>
                </tr>
            @endforeach
        </table>
        <div class="container">
            <h1>Resumen de Credito</h1>
            <table class="table table-responsive" style="color:#000000;margin-left:10px;">
                <tr>
                    <td style="background-color:#ADADAD">Institución Bancaria</td>
                    <td style="background-color:#ADADAD">Codigo Identificador</td>
                    <td style="background-color:#ADADAD">Descripción</td>
                    <td style="background-color:#ADADAD">Estado</td>
                </tr>
            </table>
            <h1>Creditos no bancarios</h1>
            <table class="table table-responsive" style="color:#000000;margin-left:10px;">
                <tr>
                    <td style="background-color:#ADADAD;">Institucion</td>
                    <td style="background-color:#ADADAD">Codigo Identificador</td>
                    <td style="background-color:#ADADAD">Descripcion</td>
                    <td style="background-color:#ADADAD">Estado</td>
                </tr>
            </table>
    </body>
</html>