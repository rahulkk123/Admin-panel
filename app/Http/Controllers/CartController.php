<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\order;
use App\Models\Payment;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Nette\Utils\Strings;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    function index($id)
    {

        $products = Product::with('products')->get()->take(20);
        $image = ProductImage::with('image')->get();
        $product = Product::find($id);
        //$item=Product::all()->take(10);

        return view('user.Cart.products', compact('product', 'products', 'image'));
    }

    function cart()
    {
        $products = Product::with('products')->get();
        $image = ProductImage::with('image')->get();
        return view('user.Cart.cart', compact('products'));
    }

    public function addCart(Request $req, $id)

    {

        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;
        } else {

            $cart[$id] = Cart::create([
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1
            ]);
        }


        session()->put('cart', $cart);

        Alert::success('products Added', 'your added products');

        return redirect()->back();
    }

    public function cartindex()
    {
        $carts = Cart::all();
        return view('user.Cart.products', compact('carts'));
    }



    public function update(Request $request)

    {

        if ($request->id && $request->quantity) {

            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }





    public function remove(Request $request)

    {

        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);


                session()->put('cart', $cart);
            }

            session()->flash('success');
            Alert::success('Item Delete', 'Complete Shipping');
        }
    }

    function Checkout()
    {
        return view('user.Cart.checkout');
    }


    function PlaceOrder(Request $request)
    {

        $order = new order();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->mobile = $request->input('mobile');
        $order->address = $request->input('address');
        $order->area = $request->input('area');
        $order->post = $request->input('post');
        $order->city = $request->input('city');
        $order->pincode = $request->input('pin');
        $order->district = $request->input('district');
        $order->state = $request->input('state');
        $order->country = $request->input('con');
       
        $order->save();
             
             
        $payment=new Payment();
        $payment->pay_mode=$request->input('paymode');
        $payment->total=$request->input('total');
        $payment->save();
        
      
        session()->flush('success');
        Alert::success('payment Complete', 'Complete Shipping');
    
        return redirect()->route('homepage');
       

    }

  

     
}
