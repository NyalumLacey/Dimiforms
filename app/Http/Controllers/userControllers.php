<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userControllers extends Controller
{
    public function home()
    {
        return view('dashboard');
    }
}
