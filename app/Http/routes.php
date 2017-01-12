<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ruta
Route::get('notes/create', function(){
  return 'hola mundo';
});

//ruta con parametro de envio (parametro dinamico entre {xyz})
Route::get('notes/{note}', function($note){
  return 'parametro de url:  '.$note;
})->where('note', '[0-9]+');

Route::get('notes/{note}/{slug?}', function($note, $slug){
  dd($note,$slug);
});


Route::get('ruta1/{letra}', function($letra){
  return $letra;
})->where('letra', '[A-Za-z]+');
