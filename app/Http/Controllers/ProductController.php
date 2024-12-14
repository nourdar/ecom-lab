<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    public function generate($count): void
    {
       $products =  Product::factory($count)->create([
           'name' => 'Test Product - '.$count,
       ]);
    }
    public function create()
    {
        $result= DB::table('categories')->get();
      return view('shop.product_form',['categories'=>$result]);
    }
 public function store(Request $request)
{
    $products = new Product();
    if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('imgProduct/',$filename);
            //$path = $file->storeAs('assets/imgProduct', $filename, 'public');
            $products->image_url = "imgProduct/$filename";
        }
    $products->name = $request->input('name');
    $products->description = $request->input('description');
    $products->price = $request->input('price');
    $products->stock = $request->input('stock');
    $products->category_id = $request->input('category_id');
    $products->save();

    // // Redirect with success message
    return redirect('shop.cart')->with('status', 'Product Added Successfully!');
    //Product::create($input);

    // // Validate request
    // $request->validate([
    //     'name' => 'required|string|max:255',
    //     'description' => 'required|string',
    //     'price' => 'required|numeric',
    //     'stock' => 'required|integer',
    //     'category_id' => 'required|integer',
    //     'image_url' => 'nullable|image|max:2048',
    // ]);

    // // Create a new product instance
    // $products = new Product();

    // // Handle image upload
    // if ($request->hasFile('image_url')) {
    //     $file = $request->file('image_url');
    //     $filename = time() . '.' . $file->getClientOriginalExtension();
    //     $path = $file->storeAs('assets/imgProduct', $filename, 'public');
    //     $products->image_url = $path;
    // }

    // // Assign input fields

    // $products->name = $request->input('name');
    // $products->description = $request->input('description');
    // $products->price = $request->input('price');
    // $products->stock = $request->input('stock');
    // $products->category_id = $request->input('category_id');

    // // Save product
    // $products->create();

}


}
