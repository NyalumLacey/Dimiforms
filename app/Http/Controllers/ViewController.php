<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function DisplayDashboard(){
        return view('dashboard');
    }

    public function displayFormularios(){
        return view('formularios');
    }

    public function displayEstadisticas(){
        return view('estadisticas');
    }

    public function displayAbout(){
        return view('about');
    }

    
}
