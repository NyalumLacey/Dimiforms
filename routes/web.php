<?php

use app\models\Usuario;

//use Illuminate\Support\Facades\Route;

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

Route::get('saludame/{nombre?}', function ($nombre = "invitado") {
  
  return "Saludos " . $nombre;

})->name('saludos');

Route::get('/', 'userControllers@home');

Route::get('/formularios', 'userControllers@displayFormularios');

Route::get('/estadisticas', 'userControllers@displayEstadisticas');

Route::view('/about', 'about') ->name('about');

Route::get('cuenta', function(){
  $Usuario = new Usuario();
  $Usuario->Nombres = "Nyalum";
  $Usuario->ApellidoPaterno = "Lacey";
  $Usuario->ApellidoMaterno = "Alguz";
  $Usuario->Correo = "nyalum.lacey@gmail.com";
  $Usuario->password = "test";
  $Usuario->Rol = "Asociado";
  $Usuario->save();
  return "The test Usuario has been saved to the database." + view('cuenta');
});