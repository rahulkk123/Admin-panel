<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductImageController extends Controller
{
    public function index(){
        $product=Product::all();
        return view('Admin.productimage.create',compact('product'));

    }
}
