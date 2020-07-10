<?php

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

Route::view('/about', 'about') ->name('about');
