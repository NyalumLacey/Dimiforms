<?php

use app\models\Usuario;

//use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/login', 'login');

Route::view('/signup', 'signup');

Route::get('/dashboard', 'ViewController@DisplayDashboard');

Route::get('/formularios', 'ViewController@displayFormularios');

Route::get('/estadisticas', 'ViewController@displayEstadisticas');

Route::get('/about', 'ViewController@displayAbout');