<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch products from the database (dummy for now)
        $products = [
            ['name' => 'Running Shoes', 'price' => 100],
            ['name' => 'Casual Sneakers', 'price' => 80],
        ];

        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        // Fetch single product by ID (dummy for now)
        $product = ['id' => $id, 'name' => 'Running Shoes', 'price' => 100];
        return view('products.show', compact('product'));
    }
}
