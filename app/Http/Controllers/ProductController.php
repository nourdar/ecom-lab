<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function generate($count): void
    {
       $products =  Product::factory($count)->create([
           'name' => 'Test Product - '.$count,
       ]);
    }
}
