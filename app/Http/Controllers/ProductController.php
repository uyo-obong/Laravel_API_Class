<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	return view('product', compact('products'));
    }

    public function store(Request $request)
    {
    	$product = new Product;
    	$product->name = $request->name;
    	$product->description = $request->description;
    	$product->price = $request->price;
    	$product->save();

    	return back();
    }
}
