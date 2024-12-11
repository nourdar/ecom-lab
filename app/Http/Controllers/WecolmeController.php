<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WecolmeController extends Controller
{

    public function index()
    {

        $products = Product::limit(3)->get();

        return view('shop.index', ['products' => $products]);
    }

    public function product(Request $request)
    {
        $product = Product::findOrFail($request->id);

      return view('shop.products.product-index', ['product' => $product]);
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
        $result= DB::table('products')->get();
      return view('shop.cart',['products'=>$result]);
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
