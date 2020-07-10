<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class userControllers extends Controller
{
    public function home()
    {
        return view('dashboard');
    }

    public function displayFormularios()
    {
        return view('formularios');
    }

    public function displayEstadisticas()
    {
        return view('estadisticas');
    }

    public function displayAbout()
    {
        return view('about');
    }

}

