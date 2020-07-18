<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function DisplayDashboard($request){
        return view('dashboard')
            ->withCookie(cookie('login@dashboard', $request->cookie('login'), 60));
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
