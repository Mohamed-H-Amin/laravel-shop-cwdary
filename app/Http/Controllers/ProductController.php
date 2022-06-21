<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('shop.index',['products' => $products]);
    }

    public function show($id){
        $single_product = Product::findOrFail($id);
        return view('shop.show', ['single_product' => $single_product]);
    }
}
