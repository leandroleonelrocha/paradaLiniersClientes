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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/facturas', function(){

	$db 		= DB::connection('sqlsrv');
	$clientes 	= $db->select('select * from ParadaLiniers_Clientes_VW');
	$facturas   = $db->select('select * from ParadaLiniers_ClientesVtoTransa_VW');
	dd($facturas);
});