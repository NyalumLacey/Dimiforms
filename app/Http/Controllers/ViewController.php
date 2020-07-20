<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function DisplayDashboard(){
        if (Auth::check()) {
            return view('dashboard');
        }         
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

    public function displaymodaleditar(){
        if (Auth::check()) {
            return view('shared.modal-editar');
        }
    }

    public function displaymodalcrear(){
        if (Auth::check()) {
            return view('shared.modal-crear');
        }
    }

    public function displayDimiforms(){
        return view('dimiforms.main');
    }
}
