<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
  public function index() {
    $product = Product::all();
    return view('product');
  }

  public function show($id) {
    $product = Product::all()->find($id);
    return view('product', ['product'=> $product]);
}

  public function create() {
    return view('addProduct');
  }
  
  public function store(Request $request) {
    $product = new Product([
      'name'=> $request->get('name'),
      'description'=>$request->get('description'),
      'price'=> $request->get('price'),
    ]);
    $product->save();
    return redirect()->route('product');
  }
}