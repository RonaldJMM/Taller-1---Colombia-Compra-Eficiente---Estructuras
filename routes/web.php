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

Route::get('/master', function () {
    return view('master');
});

Route::get('/', function () {
    return view('inicio');
});


Route::get('/busqueda', function () {

    return view('busqueda');
    
});

Route::get('/compras', function () {

    return view('compras');
    
});

Route::get('/informacion', function () {

    return view('informacion');
    
});

Route::post('informacionC' , 'LogicaController@informacion');
Route::post('busquedaC' , 'LogicaController@stock');
Route::post('comprasC' , 'LogicaController@compra');