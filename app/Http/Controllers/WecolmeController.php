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
        $productDescr =  request()->route('productDescr');
        $productPrice =  request()->route('productPrice');

      return view('shop.products.product-index', ['productName' => $productName,'productDescr' => $productDescr,'productPrice' => $productPrice]);
      //return view('shop.products.product-index');
    }
    public function about()
    {

      return view('shop.about');
    }
    public function contact()
    {

      return view('shop.contact');
    }
    public function notFound()
    {

      return view('shop.404');
    }
    public function shop()
    {

      return view('shop.shop');
    }
    public function cart()
    {

      return view('shop.cart');
    }
    public function checkout()
    {

      return view('shop.checkout');
    }
    public function news()
    {

      return view('shop.news');
    }
    public function singleNews()
    {

      return view('shop.single-news');
    }
}
