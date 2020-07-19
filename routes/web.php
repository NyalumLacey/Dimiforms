<?php

use App\models\Usuario;

//use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('display_landingpage');

Route::view('/login', 'login')->name('display_login')->middleware('guest');

Route::match(array('GET', 'POST'), '/logout', 'LoginController@logout')->name('usuario_logout');

Route::view('/signup', 'signup')->name('display_signup');

Route::view('/dashboard', 'dashboard')->name('display_dashboard');

Route::get('/formularios', 'ViewController@displayFormularios')->name('display_formularios')->middleware('auth');

Route::get('/estadisticas', 'ViewController@displayEstadisticas')->name('display_estadisticas')->middleware('auth');

Route::match(array('GET', 'POST'), 'ViewController@displaymodalcrear')->name('display_crear_formulario');

Route::match(array('GET', 'POST'),  'ViewController@displaymodaleditar')->name('display_editar_formulario');

Route::get('/about', 'ViewController@displayAbout')->name('display_about');

Route::group(['prefix' => 'usuarios'], function(){
    Route::match(array('GET', 'POST'), '/registro', 'UsuarioController@store')->name('usuario_registro');
    Route::match(array('GET', 'POST'), '/editar/{id}', 'UsuarioController@edit')->name('usuario_editar');
    Route::post('/eliminar', 'Usuariocontroller@destroy')->name('usuario_eliminar');
});

Route::group(['prefix' => 'formularios'], function(){
    Route::match(array('GET', 'POST'), '/registro', 'UsuarioController@store')->name('usuario_registro');
    Route::match(array('GET', 'POST'), '/editar/{id}', 'UsuarioController@edit')->name('usuario_editar');
    Route::post('/eliminar', 'Usuariocontroller@destroy')->name('usuario_eliminar');
});

Route::post('signin', 'LoginController@login')->name('usuario_login');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});