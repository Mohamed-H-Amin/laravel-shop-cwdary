<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function cart(){
        // var_dump(session('cartItems')); 
        return view ('cart.cart');
    }

    public function addToCart($id){
        $product = Product::findorFail($id);
        // crate session to store product data every where
        // cartItems will be 2D array
        $cartItems = session()->get('cartItems',[]);
        // if product is exist in cart page
        if (isset($cartItems[$id])) {
            $cartItems[$id]['quantity']++;
        } else{
            // if product is not exist in cart page
            // fill one row of 2D array
            $cartItems[$id] = [
                'image_url' => $product -> image_url,
                'Name'      => $product -> name,
                'Details'   => $product -> details,
                'Price'     => $product -> price,
                'Brand'     => $product -> brand,
                'quantity'  => 1
            ];
        }
        session()->put('cartItems', $cartItems);
        // rediret to the same page
        return redirect()->back()->with('success' , 'Product added to cart!');
    }

    public function removeFromCart(Request $request){
        if (isset($request->id)) {
            $cartItems = session()->get('cartItems');
            if (isset ($cartItems[$request->id])) {
                unset($cartItems[$request->id]);
                session()->put('cartItems',$cartItems);
            }
            return redirect()->back()->with('success', 'Product removed successuflly!!');
        }
    }
}
