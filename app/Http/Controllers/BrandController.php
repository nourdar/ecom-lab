<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        // Example data
        $brands = [
            ['name' => 'Nike', 'description' => 'High-quality sportswear brand'],
            ['name' => 'Adidas', 'description' => 'Popular brand with innovative designs'],
            ['name' => 'Puma', 'description' => 'High-quality sportswear brand'],
            ['name' => 'Vens', 'description' => 'Popular brand with innovative designs'],
        ];
    
        // Make sure to use the correct path
        return view('shop.brands.brands', ['brands' => $brands]);
    }

    public function showBrand($id)
    {
        $brand = Brand::findOrFail($id); // Example
        return view('shop.brands.brands', ['brandName' => $brand->name, 'brandDescription' => $brand->description]);
    }

    

}    
