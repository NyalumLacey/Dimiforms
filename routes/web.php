<?php

use App\models\Usuario;

//use Illuminate\Support\Facades\Route;
//Rutas de display
Route::view('/', 'welcome')->name('display_landingpage');

Route::view('/login', 'login')->name('display_login')->middleware('guest');

Route::match(array('GET', 'POST'), '/dimiforms', 'ViewController@displayDimiforms')->name('display_main');

Route::view('/signup', 'signup')->name('display_signup');

Route::view('/dashboard', 'dashboard')->name('display_dashboard');

Route::get('/formularios', 'ViewController@displayFormularios')->name('display_formularios')->middleware('auth');

Route::get('/estadisticas', 'ViewController@displayEstadisticas')->name('display_estadisticas')->middleware('auth');

Route::match(array('GET', 'POST'), 'ViewController@displaymodalcrear')->name('display_crear_formulario');

Route::match(array('GET', 'POST'),  'ViewController@displaymodaleditar')->name('display_editar_formulario');

Route::get('/about', 'ViewController@displayAbout')->name('display_about');

//Rutas de usuario
Route::group(['prefix' => 'usuarios'], function(){
    Route::match(array('GET', 'POST'), '/', 'UsuarioController@index')->name('display_usuario');
    Route::match(array('GET', 'POST'), '/registro', 'UsuarioController@store')->name('usuario_registro');
    Route::match(array('GET', 'POST'), '/editar/{id}', 'UsuarioController@edit')->name('usuario_editar');
    Route::post('/eliminar', 'Usuariocontroller@destroy')->name('usuario_eliminar');
});

//rutas de formularios
Route::group(['prefix' => 'formularios'], function(){
    Route::match(array('GET', 'POST'), '/crear', 'FormularioController@store')->name('Formulario_crear');
    Route::match(array('GET', 'POST'), '/publicar', 'FormularioController@update')->name('Formulario_registro');
    Route::match(array('GET', 'POST'), '/editar/{id}', 'FormularioController@edit')->name('Formulario_editar');
    Route::post('/eliminar', 'FormularioController@destroy')->name('Formulario_eliminar');
});

//rutas de login
Route::post('signin', 'LoginController@login')->name('usuario_login');

Route::match(array('GET', 'POST'), '/logout', 'LoginController@logout')->name('usuario_logout');
//

