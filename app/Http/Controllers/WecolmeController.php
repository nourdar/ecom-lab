<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WecolmeController extends Controller
{
    public function index()
    {
        return view('shop.index');
    }

    public function product()
    {
        $productName =  request()->route('productNameVariable');
        $productPrice =  request()->route('productPrice');

        return view('shop.products.product-index', ['productName' => $productName,'productPrice' => $productPrice]);

        
    }

}
