<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControlller extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function user()
    {
        return view('user');
    }
}
