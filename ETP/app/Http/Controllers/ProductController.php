<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            'Laptop',
            'Smartphone',
            'Tablet',
            'Headphones',
            'Smartwatch'
        ];

        return view('products', ['products' => $products]);
    }
}
