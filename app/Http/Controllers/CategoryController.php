<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAll()
    {
        // $categories = Category::with(['products' => function ( $query) {
        //     $query->where('price', '>', 11);
        // }])->get();
        $categories = Category::with('products.user')->get();
        return $categories;
    }
    public function insert(Request $request)
    {
        try {
            $body = $request->all();
            $category = Category::create($body);
            return response($category);
        } catch (\Exception $e) {
            return response([
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
