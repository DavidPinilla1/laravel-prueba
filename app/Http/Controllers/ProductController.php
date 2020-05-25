<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function getAll()
    { //with es como include o populate()
        $products = Product::with('user')->get();
        return $products;
    }
    public function getById(Request $request, $id)
    { //with es como include o populate()
        $product = Product::find($id);
        return $product;
    }
    public function insert(Request $request)
    {
        try {
            $body = $request->all(); //req.body
            // dump($body);//dump() y dd() son de laravel, var_dump() de php, dd() corta el flujo
            $body['user_id'] = Auth::id(); //req.user.id
            $product = Product::create($body);
            return $product;
        } catch (\Exception $e) {
            return response([
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
