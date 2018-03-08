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
    return view('master');
});


Route::get('/formulario', function () {

    return view('formulario');
    
});

Route::get('/compras', function () {

    return view('compras');
    
});



Route::post('formulario' , 'LogicaController@stock');
Route::post('compras' , 'LogicaController@compra');