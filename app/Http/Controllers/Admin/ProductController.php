<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryTab;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function product()

    {

        $products=Product::with('products')->get()->take(10);
        $image=ProductImage::with('image')->get();
        $product = Product::paginate(10);
       
        return view('Admin.product.show',compact('product','products','image'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $category = CategoryTab::all();
       
        return view('Admin.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       

        $input = new Product();
        $input->name = $request->input('name');
        $input->description = $request->input('description');
        $input->price = $request->input('price');
        $input->active = $request->input('active');
        $input->category_id = $request->input('category_id');
        
        $input->save();
        $second=new ProductImage();
          $second->product_id = $request->input('product_id');
        if($request->hasfile('upload'))
        {
            $file=$request->file('upload');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('products/',$filename);
            $second->upload=$filename;
        }
   
        $second->save();
        return redirect('product');
    } 

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = product::find($id);
        return view('Admin.product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = product::find($id);
        $input->name = $request->input('name');
        $input->description = $request->input('description');
        $input->price = $request->input('price');
        $input->active = $request->input('active');
        $input->category_id = $request->input('category_id');
        $input->update();
        
        return redirect('show-product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $input = Product::find($id);
        $input->delete();
        return redirect('show-product');
    }
}
