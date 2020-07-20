<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Cookie;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function login(){
        $credentials = $this->validate(request(), [
            'correo' => 'required|email|string',
            'password' => 'required|string'
        ]);
    
        if(Auth::attempt($credentials)){
            //$nombre = DB::table('usuarios')->select('Nombres')->where('correo', '=', request(['correo']))->get();
            Cookie::queue('login', Auth::user(), 60);
            return redirect()->route('display_dashboard');
        }

    return back()
        ->withInput(request(['correo']))
        ->withErrors(['correo' => trans('auth.failed')]);
    }

    public function logout(){
        if(Cookie::has('login')){
            Cookie::queue(Cookie::forget('login'));
            Auth::logout();
            return redirect()->route('display_landingpage');
        }
    }
    
}
