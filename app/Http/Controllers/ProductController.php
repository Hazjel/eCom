<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $products = products::all();
        return view('products.index');
    }
}
