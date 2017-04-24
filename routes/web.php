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

Route::get('/rutita', function(){
  return view('rutitaview');
});

Route::get('potencia/{id}', function($id){
  return view('potenciaview')->with('id',$id);
});

Route::get('todos', 'PlayersController@index');
Route::get('/ver/{id}', 'PlayersController@ver');
