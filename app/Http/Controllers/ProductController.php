<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function getAll()
    {
        $products = Product::all();
        return $products;
    }
    public function insert(Request $request)
    {
        $body = $request->all();//req.body
        // dump($body);//dump() y dd() son de laravel, var_dump() de php, dd() corta el flujo
        $product = Product::create($body);
        return $product;
    }
}
