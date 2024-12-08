<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all(); // استرجاع المنتجات
        return view('shop.index', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first(); // استرجاع المنتج باستخدام الـ slug
        return view('shop.product-show', compact('product'));
    }
}
