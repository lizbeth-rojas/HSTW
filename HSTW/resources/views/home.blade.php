@extends('layouts.app01')

@section('content')
<!--<div class="container">
    <div class="row">-->
        <div class="col-md-8 col-md-offset-2" style="color: #079B80;">
            <font size=20>Menú</font>
            <div class="container" style="background-color: rgba(0, 0, 0, 0.8); color: #ffffff;">
                <a href="/gestcli"><h3> Gestionar Clientes</h3></a><br>
                <a href="/calcular"><h3> Calcular Péstamos</h3></a><br>
                <a href="/verificar"><h3> Verificar Buro de Credito</h3></a><br>
                <a href="/ejemplo"><h3> Generar Reportes de Préstamos</h3></a><br>
                <a href="/asignar"><h3> Asignar Préstamos</h3></a><br>
                <a href="/tarjetas"><h3> Asignar Tarjetas de Débito y Crédito</h3></a><br>
                <a href="#"><h3> Gestionar Área de Cobranza</h3></a><br>
                
            </div>
            <!--<div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>-->
            
            
        </div>
    <!--</div>
</div>-->
@endsection
