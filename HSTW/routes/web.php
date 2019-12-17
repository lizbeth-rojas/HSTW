<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {return view('welcome');});

//Route::get('/', function () {return view('login');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/gestcli', function(){return view('gestion_clientes');});

Route::post('/gestcli', 'GestionClController@clientes');

Route::get('/agregar',function(){return view('agregarcl');});

Route::view('/consultar',function(){return view('consultar');});
Route::get('/consultar', 'ConsultarController@consultar');

Route::get('/modificar',function(){return view('modificarcl');});
Route::post('/modificar','EliminarrController@eliminar');


//Route::get('/eliminar',function(){return view('eliminar');});

Route::name('print')->get('/imprimir', 'GeneradorController@imprimir');

Route::get('/verificar', function(){return view('verificarburo');});
Route::post('/verificar','EliminarrController@verificar');
Route::get('/buro', function(){return view('tablaburo');});

Route::get('/formverificar', function(){return view('formverificar');});

Route::get('/calcular', function(){return view('calcular_prestamos');});
Route::post('/calcular', 'EliminarrController@calcular');

Route::get('/asignar',function(){return view('asignar_prestamos');});
Route::post('/asignar','EliminarrController@asignar');

Route::post('/asignartar','EliminarrController@tarjeta');

Route::get('/debito',function(){return view('tarjetas_debito');});
Route::post('/debito','EliminarrController@debito');

Route::get('/tarjetas',function(){return view('opcasignar');});

Route::get('/cobranza',function(){return view('cobranza');});
Route::get('/cobranza','ConsultarController@consultar');

Route::get('/ejemplo',function(){
    $pdf = PDF::loadview('ejemplo_pdf');
    $pdf->setPaper('a4','landscape');
    return $pdf->stream('ejemplo_pdf');
});
Route::get('/generar',function(){
    return view('generar_report_prest');
});

Route::post('/ejemplo','ConsultarController@X');

Route::get('/buro',function(){
    $pdf = PDF::loadview('reporte_buro');
    $pdf->setPaper('a4','landscape');
    return $pdf->stream('reporte_buro');
});