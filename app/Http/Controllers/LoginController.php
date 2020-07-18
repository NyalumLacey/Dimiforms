<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Cookie;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    public function login(){
        $credentials = $this->validate(request(), [
            'correo' => 'required|email|string',
            'password' => 'required|string'
        ]);
    
    if(Auth::attempt($credentials)){
        Cookie::queue('login', request(['correo']), 60);
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
