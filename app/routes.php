<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('mascota', 'MascotaController');
Route::resource('persona', 'PersonaController');
Route::resource('adopcion', 'AdopcionController');
Route::resource('comentario', 'ComentarioController');
Route::resource('mensaje', 'MensajeController');
Route::resource('foto', 'FotoController');