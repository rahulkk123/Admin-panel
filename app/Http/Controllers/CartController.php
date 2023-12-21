<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Nette\Utils\Strings;

class CartController extends Controller
{
    function index($id){

        $products=Product::with('products')->get()->take(20);
         $image=ProductImage::with('image')->get();
        $product=Product::find($id); 
         //$item=Product::all()->take(10);
       
        return view('user.Cart.products',compact('product','products','image')); 
      
    }

    function cart(){
        $products=Product::with('products')->get();
         $image=ProductImage::with('image')->get();
        return view('user.Cart.cart', compact('products'));

    }

    public function addCart(Request $req,$id )

    {

        $product = Product::findOrFail($id);

        $cart = session()->get('cart',[]);
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

        } else {

            $cart[$id] = [

                "name" => $product->name,

                "quantity" => 1,

                "price" => $product->price
            ];

        }
       Cart::create([
        'name'=>$product->name,
        'price'=>$product->price,
        'quantity'=>1
       ]);

        session()->put('cart',$cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

  

    public function update(Request $request)

    {

        if($request->id && $request->quantity){

            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');

        }

    }

  

   

    public function remove(Request $request)

    {

        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);

            }

            session()->flash('success', 'Product removed successfully');

        }

    }

}