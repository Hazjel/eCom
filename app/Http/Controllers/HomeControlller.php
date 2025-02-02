<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class HomeControlller extends Controller
{
    public function home()
    {
        $products = products::all();
        return view('pages.home', compact('products'));
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
